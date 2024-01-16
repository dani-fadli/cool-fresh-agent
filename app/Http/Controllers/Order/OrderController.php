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
            ->orderBy('id')
            ->get();
        return view('listPesanan', compact('orders'));
    }

    public function show(string $id)
    {
        $order = Order::query()
            ->with([
                'agent',
                'histories' => function ($query) {
                    return $query->orderByRaw("(SELECT sequence FROM order_statuses WHERE id = order_histories.status_id) DESC");
                },
                'status',
                'products',
                'delivery'
            ])
            ->findOrFail($id);

        return view('detailPesanan', compact('order'));
    }
}
