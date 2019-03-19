@extends('layouts.admin')
@section('content')
    <div class="block"
         style="display: flex;justify-content: center; flex-direction: column; width: 100%;align-items: center">
        <h3>Список заказов</h3>
        <table class="table table-bordered w-25" style="margin-bottom: 60px;">
            <tr>
                <th class="text-center">Name</th>
                <th class="text-center">Email</th>
                <th class="text-center">Product</th>
                <th class="text-center">Price</th>
            </tr>
            @foreach($orders as $order)
                <tr>
                    <td class="text-center">{{$order->buyer_name}}</td>
                    <td class="text-center">{{$order->buyer_email}}</td>
                    <td class="text-center">{{$order->product->name}}</td>
                    <td class="text-center">{{$order->product->price}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection