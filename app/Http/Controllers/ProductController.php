<?php

namespace App\Http\Controllers;

use App\Category;
use App\Mail\OrderCreate;
use App\Orders;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);

        $file = $request->file('image_name');
        $file->getClientOriginalName();
        $destinationPath = 'uploads';
        $file->move($destinationPath, $file->getClientOriginalName());

        $product = new Products();
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->category_id = $request->get('category_id')[0];
        $product->image_name = $request->file('image_name')->getClientOriginalName();

        $product->save();

        return redirect('/admin/category');
    }

    public function single($id)
    {
        $product = Products::find($id);
        return view('products.single-product', [
            'product' => $product
        ]);
    }

    public function saveOrder(Request $request)
    {
        $order = new Orders();
        $order->buyer_name = $request->get('name');
        $order->buyer_email = $request->get('email');
        $order->product_id = $request->get('prod_id');
        $order->save();
        Mail::to('andrew_1024@mail.ru')->send(new OrderCreate(['order' => $order]));
        return redirect('/product/' . $request->get('prod_id'));
    }
}
