<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OrderStatusSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            [
                'name' => 'Pesanan Dibuat',
                'sequence' => 1,
                'slug' => Str::slug('Pesanan Dibuat')
            ],
            [
                'name' => 'Pesanan Diproses',
                'sequence' => 2,
                'slug' => Str::slug('Pesanan Diproses'),
            ],
            [
                'name' => 'Pesanan Dikirim',
                'sequence' => 3,
                'slug' => Str::slug('Pesanan Dikirim'),
            ],
            [
                'name' => 'Retur Diajukan',
                'sequence' => 4,
                'slug' => Str::slug('Retur Diajukan'),
            ],
            [
                'name' => 'Pengajuan Retur Ditolak',
                'sequence' => 5,
                'slug' => Str::slug('Pengajuan Retur Ditolak'),
            ],
            [
                'name' => 'Retur Diproses',
                'sequence' => 5,
                'slug' => Str::slug('Retur Diproses'),
            ],
            [
                'name' => 'Retur Dikirim',
                'sequence' => 6,
                'slug' => Str::slug('Retur Dikirim'),
            ],
            [
                'name' => 'Pesanan Selesai',
                'sequence' => 7,
                'slug' => Str::slug('Pesanan Selesai'),
            ],
            [
                'name' => 'Pesanan Dibatalkan',
                'sequence' => 7,
                'slug' => Str::slug('Pesanan Dibatalkan'),
            ]
        ];

        foreach ($statuses as $status) {
            OrderStatus::create($status);
        }
    }
}
