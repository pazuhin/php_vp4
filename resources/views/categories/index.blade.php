@extends('layouts.admin')

@section('content')
    <main class="py-4" style="display: flex;justify-content: center;">
        <a style="text-align: center; margin-right: 10px;" class="btn btn-primary" href={{route('admin_category')}} role="button">Category</a>
        <a style="text-align: center; margin-right: 10px;" class="btn btn-primary" href={{route('admin_product')}} role="button">Products</a>
        <a style="text-align: center; margin-right: 10px;" class="btn btn-primary" href="#" role="button">Orders</a>
        <a style="text-align: center; margin-right: 10px;" class="btn btn-primary" href="#" role="button">Change address
            notification</a>
    </main>
    <div class="block" style="display: flex;justify-content: center; flex-direction: column; width: 100%;align-items: center">
        <h3>Наименования категорий</h3>
        <table class="table table-bordered w-25" style="margin-bottom: 60px;">
            <tr>
                <th class="text-center">Name</th>
                <th class="text-center">Action</th>
            </tr>
            @foreach($categories as $category)
                <tr>
                    <td class="text-center">{{$category->name}}</td>
                    <td class="text-center">
                        <a class="btn btn-success  btn-sm"
                           href={{ route('category_edit', ['id' => $category->id]) }} role="button">Edit</a>
                        <a class="btn btn-danger  btn-sm"
                           href={{ route('category_destroy', ['id' => $category->id]) }} role="button">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
        <a style="text-align: center; margin-right: 10px;" class="btn btn-success" href="/admin/category/create"
           role="button">+ Add new category</a>
    </div>
@stop

