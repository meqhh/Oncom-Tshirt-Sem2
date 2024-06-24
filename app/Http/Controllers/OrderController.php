<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function show($orderId)
    {
    $order = Order::with('orderItems.product')->findOrFail($orderId);
    return view('users.order_show', compact('order'));
    }
}
