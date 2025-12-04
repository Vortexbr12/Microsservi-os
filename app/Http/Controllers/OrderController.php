<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OrderService;

class OrderController extends Controller
{
    public function store(Request $request, OrderService $service)
    {
        $pedido = $service->createOrder($request->all());
        return response()->json($pedido);
    }
}