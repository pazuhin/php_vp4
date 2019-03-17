@extends('layouts.admin')

@section('content')
        <div class="links" style="margin-bottom: 50px;">
            <a style="text-align: center; margin-right: 10px;" class="btn btn-primary"
               href={{route('admin')}} role="button">Back to admin</a>
            <a style="text-align: center; margin-right: 10px;" class="btn btn-primary" href="#"
               role="button">Products</a>
            <a style="text-align: center; margin-right: 10px;" class="btn btn-primary" href="#" role="button">Orders</a>
            <a style="text-align: center; margin-right: 10px;" class="btn btn-primary" href="#" role="button">Change
                address notification</a>
        </div>
        <h3>Добавить новый товар</h3>
        <div class="">
            @if($errors)
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <form action="/product/store" method="post" enctype="multipart/form-data">
            @csrf
            <table class="table table-bordered w-25" style="margin-bottom: 20px;">
                <tr>
                    <td>Category</td>
                    <td>
                        <select name="category_id[]">
                            <option value="" disabled selected style="display: none">Select category</option>
                            @foreach($categories as $category)
                                <option value={{$category->id}}>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>
                        <input type="text" name="name">
                    </td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td>
                        <input type="text" name="price">
                    </td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td>
                        <input type="text" name="description">
                    </td>
                </tr>
                <tr>
                    <td>Photo</td>
                    <td>
                        <input type="file" name="image_name">
                    </td>
                </tr>
            </table>
            <input type="submit">
        </form>
@endsection