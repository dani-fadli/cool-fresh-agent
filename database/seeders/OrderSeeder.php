<?php

namespace Database\Seeders;

use App\Models\Agent;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $agent = Agent::query()->where('code', 'BDO-0001')->firstOrFail();
        $product = Product::query()->first();

        $orders = [
            [
                'code' => 'ORD-0001',
                'status_id' => 1,
                'is_returned' => false,
                'histories' => [
                    [
                        'status_id' => 1,
                        'description' => 'Pesanan telah dibuat dan menunggu diproses'
                    ]
                ]
            ],
            [
                'code' => 'ORD-0002',
                'status_id' => 3,
                'is_returned' => false,
                'histories' => [
                    [
                        'status_id' => 1,
                        'description' => 'Pesanan telah dibuat dan sedang menunggu konfirmasi dari admin'
                    ],
                    [
                        'status_id' => 2,
                        'description' => 'Pesanan diterima dan sedang diproses'
                    ],
                    [
                        'status_id' => 3,
                        'description' => 'Pesanan sedang dikirim oleh Sudarsono'
                    ]
                ],
                'delivery' => [
                    'delivery_number' => 'CFDLVR-0002',
                    'address' => $agent->address,
                    'driver_name' => 'Sudarsono',
                    'vehicle_number' => 'D 1234 AB'
                ]
            ],
            [
                'code' => 'ORD-0003',
                'status_id' => 8,
                'is_returned' => false,
                'histories' => [
                    [
                        'status_id' => 1,
                        'description' => 'Pesanan telah dibuat dan sedang menunggu konfirmasi dari admin'
                    ],
                    [
                        'status_id' => 2,
                        'description' => 'Pesanan diterima dan sedang diproses'
                    ],
                    [
                        'status_id' => 3,
                        'description' => 'Pesanan sedang dikirim oleh Sudarsono'
                    ],
                    [
                        'status_id' => 7,
                        'description' => 'Pesanan telah diterima oleh agen'
                    ]
                ],
                'delivery' => [
                    'delivery_number' => 'CFDLVR-0003',
                    'address' => $agent->address,
                    'driver_name' => 'Sudarsono',
                    'vehicle_number' => 'D 1234 AC'
                ]
            ]
        ];

        foreach ($orders as $i => $reqOrder) {
            // Create order
            $order = $agent->orders()->create([
                'code' => $reqOrder['code'],
                'status_id' => $reqOrder['status_id'],
                'is_returned' => $reqOrder['is_returned']
            ]);

            // Create order histories
            foreach ($reqOrder['histories'] as $history) {
                $order->histories()->create($history);
            }

            // Create order delivery
            if (isset($reqOrder['delivery'])) {
                $order->delivery()->create($reqOrder['delivery']);
            }

            // Create order products
            $order->products()->attach($product, [
                'name' => $product->name,
                'quantity' => ++$i,
                'price' => $product->price,
                'total_price' => $product->price * ++$i,
                'image_url' => $product->image_url
            ]);
        }
    }
}
