<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('pesanans', function (Blueprint $table) {
        $table->id();
        $table->string('kode_pesanan')->unique();
        $table->string('nama_customer');
        $table->string('nomor_wa');
        // Menghubungkan ke tabel mejas, set null jika meja dihapus atau untuk opsi Bungkus
        $table->foreignId('meja_id')->nullable()->constrained('mejas')->onDelete('set null');
        $table->string('nama_menu');
        $table->integer('jumlah');
        $table->string('pilihan_mie')->nullable();
        $table->text('catatan')->nullable();
        $table->string('metode_penyajian'); // Makan di Tempat / Bungkus
        $table->string('metode_pembayaran'); // Tunai / QRIS
        $table->integer('total_harga');
        $table->enum('status_pesanan', ['pending', 'dimasak', 'selesai'])->default('pending');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
