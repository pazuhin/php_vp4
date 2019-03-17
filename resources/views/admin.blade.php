@extends('layouts.admin')

@section('content')
    <main class="py-4" style="display: flex;justify-content: center;">
        <a style="text-align: center; margin-right: 10px;" class="btn btn-primary" href={{route('admin_category')}} role="button">Category</a>
        <a style="text-align: center; margin-right: 10px;" class="btn btn-primary" href={{route('admin_product')}} role="button">Products</a>
        <a style="text-align: center; margin-right: 10px;" class="btn btn-primary" href="#" role="button">Orders</a>
        <a style="text-align: center; margin-right: 10px;" class="btn btn-primary" href="#" role="button">Change address
            notification</a>
    </main>
    @endsection
