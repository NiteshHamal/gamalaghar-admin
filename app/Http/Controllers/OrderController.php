<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders= Order::latest()->get();
        return view('admin.orders.view_order', compact('orders'));
    }
}
