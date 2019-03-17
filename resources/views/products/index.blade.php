@extends('layouts.admin')

@section('content')
    <div class="links" style="margin-bottom: 50px;">
        <a style="text-align: center; margin-right: 10px;" class="btn btn-primary"
           href={{route('admin')}} role="button">Back to admin</a>
        <a style="text-align: center; margin-right: 10px;" class="btn btn-primary" href="#" role="button">Products</a>
        <a style="text-align: center; margin-right: 10px;" class="btn btn-primary" href="#" role="button">Orders</a>
        <a style="text-align: center; margin-right: 10px;" class="btn btn-primary" href="#" role="button">Change address
            notification</a>
    </div>
    <h3>Список товаров</h3>
    <table class="table table-bordered w-100" style="display: flex;justify-content: center; flex-direction: column; width: 100%;align-items: center">
        <tr>
            <th class="text-center">Name</th>
            <th class="text-center">Category</th>
            <th class="text-center">Price</th>
            <th class="text-center">Action</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td class="text-center">{{$product->name}}</td>
                <td class="text-center">{{$product->category->name}}</td>
                <td class="text-center">{{$product->price}}</td>
                <td class="text-center">
                    <a class="btn btn-success  btn-sm"
                       href={{ route('product_edit', ['id' => $product->id]) }} role="button">Edit</a>
                    <a class="btn btn-danger  btn-sm"
                       href={{ route('product_destroy', ['id' => $product->id]) }} role="button">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
    <a style="text-align: center; margin-right: 10px;" class="btn btn-success" href="/admin/product/create"
       role="button">+ Add new product</a>
@endsection
