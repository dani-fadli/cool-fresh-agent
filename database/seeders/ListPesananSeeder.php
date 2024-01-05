<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ListPesanan;

class ListPesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('list_pesanans')->delete();
        $pesanan = [
            ['no_transaksi' => 'TRAN-001', 'nama_produk' => 'Es Batu Kristal 20KG', 'tipe_produk' => 'Kristal', 'jumlah' => '1', 'berat' => '20kg', 'harga' => '20.990', 'gambar_produk' => 'path', 'tanggal_pemesanan' => '2024-01-04 04:34:00'],
            ['no_transaksi' => 'TRAN-002', 'nama_produk' => 'Es Batu Serut 20KG', 'tipe_produk' => 'Serut', 'jumlah' => '2', 'berat' => '20kg', 'harga' => '21.990', 'gambar_produk' => 'path', 'tanggal_pemesanan' => '2024-01-04 04:34:00'],
            ['no_transaksi' => 'TRAN-003', 'nama_produk' => 'Es Batu Serut 10KG', 'tipe_produk' => 'Serut', 'jumlah' => '5', 'berat' => '10kg', 'harga' => '21.990', 'gambar_produk' => 'path', 'tanggal_pemesanan' => '2024-01-04 04:34:00'],
            ['no_transaksi' => 'TRAN-004', 'nama_produk' => 'Es Batu Serut 30KG', 'tipe_produk' => 'Serut', 'jumlah' => '2', 'berat' => '30kg', 'harga' => '21.990', 'gambar_produk' => 'path', 'tanggal_pemesanan' => '2024-01-04 04:34:00'],
        ];

        ListPesanan::insert($pesanan);
        //
    }
}
