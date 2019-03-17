<?php

namespace App\Http\Controllers;

use App\Category;
use App\Products;
use DemeterChain\C;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function action($id)
    {
        $category = Category::find($id);
        $products = Category::find($id)->prod;
        return view('categories.action', [
            'category' => $category,
            'products' => $products
        ]);
    }

    public function index()
    {
        $categories = Category::all();
        return view('categories.index', [
            'categories' => $categories
        ]);
    }

    public function create()
    {
        if (!Auth::user()->is_admin) {
            return redirect('/');
        }
        return view('categories.create');
    }

    /**
     * @param Request $request
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);
        $category = new Category();
        $category->name = $request->get('name');
        $category->description = $request->get('description');
        $category->save();

        return redirect('/admin/category');
    }

    public function edit(Category $category)
    {
          return view('categories.edit', [
            'category' => $category
        ]);
    }

    /**
     * @param Request $request
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);
        $category = Category::find($id);
        $category->name = $request->get('name');
        $category->description = $request->get('description');
        $category->save();

        return redirect('/admin/category');
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return redirect('/admin/category');
    }
}
