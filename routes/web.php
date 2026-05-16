<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

// Rute untuk halaman utama
Route::get('/', [HomeController::class, 'index']);

// Pintu masuk untuk menyimpan pesanan
Route::post('/simpan-pesanan', [HomeController::class, 'simpanPesanan']);
// Pintu khusus untuk radar meja real-time
Route::get('/cek-status-meja', [HomeController::class, 'cekStatusMeja']);
// ==========================================
// RUTE UNTUK DASHBOARD ADMIN PAK SABAR
// ==========================================
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index']);
    Route::post('/pesanan/terima/{id}', [AdminController::class, 'terimaPesanan']);
    Route::post('/pesanan/selesai/{id}', [AdminController::class, 'selesaikanPesanan']);
    Route::post('/pesanan/tolak/{id}', [AdminController::class, 'tolakPesanan']);
    Route::post('/meja/kosongkan/{id}', [AdminController::class, 'kosongkanMeja']);
});
