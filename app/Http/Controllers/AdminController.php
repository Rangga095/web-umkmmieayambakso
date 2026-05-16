<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\Meja;
use Carbon\Carbon;

class AdminController extends Controller
{
    // 1. Menampilkan Dashboard Utama
    public function index()
    {
        $hariIni = Carbon::today();

        // Ambil semua pesanan hari ini
        $pesanans = Pesanan::whereDate('created_at', $hariIni)->orderBy('created_at', 'desc')->get();
        $mejas = Meja::all();

        // Hitung total pendapatan dan porsi (hanya yang statusnya selesai/lunas)
        $totalPendapatan = $pesanans->where('status_pesanan', 'selesai')->sum('total_harga');
        $totalPorsi = $pesanans->where('status_pesanan', 'selesai')->sum('jumlah');

        return view('admin.dashboard', compact('pesanans', 'mejas', 'totalPendapatan', 'totalPorsi'));
    }

    // 2. Terima Pesanan (Ubah status jadi dimasak)
    public function terimaPesanan($id)
    {
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->status_pesanan = 'dimasak';
        $pesanan->save();

        return redirect()->back()->with('sukses', 'Pesanan berhasil diterima dan masuk antrean masak!');
    }

    // 3. Selesaikan Pesanan (Sudah dibayar & Lunas)
    public function selesaikanPesanan($id)
    {
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->status_pesanan = 'selesai';
        $pesanan->save();

        return redirect()->back()->with('sukses', 'Pembayaran terverifikasi! Pesanan selesai.');
    }

    // 4. Tolak Pesanan
    public function tolakPesanan($id)
    {
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->status_pesanan = 'ditolak';

        // Jika pelanggan makan di tempat, kosongkan mejanya kembali
        if ($pesanan->meja_id) {
            $meja = Meja::find($pesanan->meja_id);
            if ($meja) {
                $meja->status = 'kosong';
                $meja->save();
            }
        }
        $pesanan->save();

        return redirect()->back()->with('sukses', 'Pesanan ditolak. Silakan hubungi via WA.');
    }

    // 5. Kosongkan Meja (Manual oleh Pak Sabar jika pelanggan pulang)
    public function kosongkanMeja($id)
    {
        $meja = Meja::findOrFail($id);
        $meja->status = 'kosong';
        $meja->save();

        return redirect()->back()->with('sukses', $meja->nomor_meja . ' berhasil dikosongkan!');
    }
}
