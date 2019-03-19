<?php

namespace App\Http\Controllers;

use App\Orders;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show()
    {
        $orders = Orders::all();
        return view('orders.order', [
            'orders' => $orders
        ]);
    }
}
