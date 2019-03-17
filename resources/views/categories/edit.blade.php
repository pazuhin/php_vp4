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
    <h3>Изменить категорию</h3>
    <div class="">
        @if($errors)
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form action={{ route('category_update', ['id' => $category->id]) }} method="post">
        @csrf
        <table class="table table-bordered w-25" style="margin-bottom: 20px;">
            <tr>
                <td>Имя</td>
                <td>
                    <input type="text" name="name" value={{$category->name}}>
                </td>
            </tr>
        </table>
        <input type="submit">
    </form>
@endsection
