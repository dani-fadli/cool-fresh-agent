<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('list_pesanans', function (Blueprint $table) {
            $table->id();
            $table->string('no_transaksi', 30)->unique();
            $table->string('nama_produk');
            $table->string('tipe_produk')->nullable();
            $table->string('jumlah')->nullable();
            $table->string('berat')->nullable();
            $table->string('harga')->nullable();
            $table->string('gambar_produk')->nullable();
            $table->string('tanggal_pemesanan')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_pesanans');
    }
};
