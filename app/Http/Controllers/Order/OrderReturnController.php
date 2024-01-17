<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderStatus;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class OrderReturnController extends Controller
{
    public function index()
    {
        return view('pengajuanRetur');
    }

    public function create(Request $request)
    {
        $request->validate([
            'code' => [
                'required',
                'string',
                Rule::exists(Order::class, 'code')->where(function ($query) {
                    return $query->where('agent_id', auth()->id());
                })
            ],
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

        $order->histories()->create([
            'status_id' => OrderStatus::query()->where('slug', 'retur-diajukan')->value('id'),
            'description' => 'Pengajuan retur telah dikirimkan'
        ]);

        return redirect()
            ->action([OrderController::class, 'show'], [$order])
            ->with('success', 'Pengajuan retur berhasil dikirimkan');
    }
}
