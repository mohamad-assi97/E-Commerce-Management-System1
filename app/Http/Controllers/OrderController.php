<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        return Order::with('user', 'product')->get();
    }

    public function store(Request $request) {
        $order = Order::create($request->all());
        return response()->json($order, 201);
    }
}

