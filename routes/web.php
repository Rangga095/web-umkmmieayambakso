<?php

   use Illuminate\Support\Facades\Route;
   use App\Http\Controllers\HomeController;

   // Rute untuk halaman utama
   Route::get('/', [HomeController::class, 'index']);
