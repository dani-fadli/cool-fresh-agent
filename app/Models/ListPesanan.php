<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListPesanan extends Model
{
    protected $fillable = ['no_transaksi', 'nama_produk', 'tipe_produk','jumlah','berat','harga','gambar_produk','tanggal_pemesanan'];
}
