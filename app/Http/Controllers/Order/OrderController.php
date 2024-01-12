<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::query()
            ->where('agent_id', auth()->user()?->id)
            ->latest()
            ->with([
                'agent',
                'status',
                'products'
            ])
            ->get();
        return view('listPesanan', compact('orders'));
    }

    public function show(string $id)
    {
        $order = Order::query()
            ->with([
                'agent',
                'histories',
                'status',
                'products',
                'delivery'
            ])
            ->findOrFail($id);

        return view('detailPesanan', compact('order'));
    }
}
