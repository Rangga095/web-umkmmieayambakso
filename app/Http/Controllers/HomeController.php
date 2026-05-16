<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Meja; // Memanggil Model Meja

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil semua data menu
        $menus = Menu::all();

        // Mengambil HANYA meja yang berstatus 'kosong'
        $mejas = Meja::where('status', 'kosong')->get();

        // Mengirim data menu dan meja ke halaman home
        return view('home', compact('menus', 'mejas'));
    }
}
