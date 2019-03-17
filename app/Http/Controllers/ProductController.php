<?php

namespace App\Http\Controllers;

use App\Category;
use App\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function action()
    {
        $products = Products::all();
        return view('products.action', [
            'products' => $products
        ]);
    }

    public function index()
    {
        $products = Products::all();
        return view('products.index', [
            'products' => $products
        ]);
    }

    public function create()
    {
        return view('products.create', [
            'categories' => Category::orderBy('id')->get(['id', 'name'])
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        //$this->saveToUploads();

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);

        $file = $request->file('image_name');
        $file->getClientOriginalName();
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());

        $product = new Products();
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->category_id = $request->get('category_id')[0];
        $product->image_name = $request->file('image_name')->getClientOriginalName();

        $product->save();

        return redirect('/admin/category');
    }

    public function saveToUploads()
    {
        if (!empty($_FILES['image']['tmp_name'])) {
            $fileContent = file_get_contents($_FILES['image']['tmp_name']);
            file_put_contents('../../resources/uploads/' . $_FILES['image']['name'] . '.jpg', $fileContent);
        }
    }


    public function single($id)
    {
        $product = Products::find($id);
        return view('products.single-product', [
            'product' => $product
        ]);
    }
}
