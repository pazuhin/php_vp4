<?php

namespace App\Http\Controllers;

use App\Category;
use \App\Products;
use App\User;
use Illuminate\Http\Request;
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

    public function category()
    {
        $products = Products::paginate(6);
        return view('action', [
            'products' => $products
        ]);
    }

    public function action($id)
    {
        $category = Category::find($id);
        $products = Category::paginate(6)->find($id)->prod;
        return view('categories.action', [
            'category' => $category,
            'products' => $products
        ]);
    }
}
