<?php

namespace App\Http\Controllers;

use App\Category;
use \App\Products;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

class Pagination extends Controller
{
    public function products()
    {
        $products = Products::paginate(6);
        return view('welcome', [
            'products' => $products
        ]);
    }

    public function home()
    {
        if (Auth::user()->is_admin == 1) {
           return redirect('/admin');
        }
        $products = Products::paginate(6);
        return view('home', [
            'products' => $products
        ]);
    }

    public function action($id)
    {
        $category = Category::find($id);
        $products = Products::query()
            ->where('products.category_id', '=', $id)
            ->paginate(2);
        return view('categories.action', [
            'category' => $category,
            'products' => $products
        ]);
    }
}
