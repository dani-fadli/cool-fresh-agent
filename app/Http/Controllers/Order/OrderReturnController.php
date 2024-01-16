<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderStatus;
use Illuminate\Http\Request;

class OrderReturnController extends Controller
{
    public function index()
    {
        return view('pengajuanRetur');
    }

    public function create(Request $request)
    {
        $request->validate([
            'code' => ['required', 'string', 'exists:orders,code'],
            'description' => ['required', 'string'],
            'image' => ['required', 'image', 'max:2048']
        ]);

        $order = Order::query()
            ->where('code', $request->code)
            ->firstOrFail();

        $order->update([
            'status_id' => OrderStatus::query()->where('slug', 'retur-diajukan')->value('id')
        ]);

        $order->return()->create([
            'description' => $request->description,
            'image_url' => $request->file('image')->store('returns')
        ]);

        return redirect()
            ->action([OrderController::class, 'show'], [$order])
            ->with('success', 'Pengajuan retur berhasil dikirimkan');
    }
}
