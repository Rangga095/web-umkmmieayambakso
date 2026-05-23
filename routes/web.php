<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

// Rute untuk Customer (Halaman Utama Web)
Route::get('/', [HomeController::class, 'index']);
Route::post('/simpan-pesanan', [HomeController::class, 'simpanPesanan']);
Route::get('/cek-status-meja', [HomeController::class, 'cekStatusMeja']);
Route::post('/batal-pesanan', [HomeController::class, 'batalkanPesanan']);

// Rute untuk Halaman Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// ==========================================
// RUTE LUPA & RESET PASSWORD
// ==========================================

// 1. Menampilkan Halaman Form Lupa Password
Route::get('/forgot-password', function () {
    return view('admin.forgot-password');
})->middleware('guest')->name('password.request');

// 2. Mengeksekusi Pengiriman Email Tautan Reset
Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);
    $status = Password::sendResetLink($request->only('email'));
    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

// 3. Menampilkan Halaman Buat Sandi Baru (Saat link di email diklik)
Route::get('/reset-password/{token}', function (string $token) {
    return view('admin.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

// 4. Mengeksekusi Penyimpanan Sandi Baru ke Database
Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset($request->only('email', 'password', 'password_confirmation', 'token'), function ($user, string $password) {
        $user->forceFill([
            'password' => Hash::make($password)
        ])->setRememberToken(Str::random(60));
        $user->save();
        event(new PasswordReset($user));
    });

    return $status === Password::PASSWORD_RESET
                ? redirect('/login')->with('loginError', 'Sandi berhasil diubah! Silakan login.') // Menggunakan alert loginError untuk notif sukses
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');


// ==========================================
// 🚨 RUTE ADMIN (DILINDUNGI SANG SATPAM) 🚨
// ==========================================
Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index']);
    Route::post('/admin/pesanan/terima/{id}', [AdminController::class, 'terimaPesanan']);
    Route::post('/admin/pesanan/tolak/{id}', [AdminController::class, 'tolakPesanan']);
    Route::post('/admin/pesanan/selesai/{id}', [AdminController::class, 'selesaiPesanan']);
    Route::post('/admin/profile/update', [AdminController::class, 'updateProfil']);
});
