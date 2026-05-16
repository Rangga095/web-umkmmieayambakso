<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Meja; // Memanggil Model Meja

class HomeController extends Controller
{
    public function index()
    {
        $menus = Menu::all();

        // UBAH BARIS INI: Ambil SEMUA meja, bukan hanya yang kosong
        $mejas = Meja::all();

        return view('home', compact('menus', 'mejas'));
    }
}
