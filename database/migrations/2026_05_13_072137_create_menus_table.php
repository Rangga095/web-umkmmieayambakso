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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_menu'); // Kolom untuk nama menu (Mie Ayam, Bakso, dll)
            $table->integer('harga');    // Kolom untuk harga (contoh: 12000)
            $table->text('deskripsi')->nullable(); // Kolom keterangan (nullable = boleh dikosongkan)
            $table->string('foto')->nullable();    // Kolom untuk menyimpan nama file foto
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
