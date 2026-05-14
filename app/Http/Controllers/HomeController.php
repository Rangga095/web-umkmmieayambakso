<?php

   namespace App\Http\Controllers;

   use App\Models\Menu; // Memanggil model Menu yang tadi kita buat

   class HomeController extends Controller
   {
       public function index()
       {
           // Mengambil semua data menu dari database (nanti kita isi)
           $menus = Menu::all();

           // Mengirim data ke tampilan bernama 'home'
           return view('home', compact('menus'));
       }
   }
