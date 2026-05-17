<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Meja; // Memanggil Model Meja
use App\Models\Pesanan; // Memanggil Model Pesanan

class HomeController extends Controller
{
    // ==========================================
    // 1. Fungsi untuk menampilkan halaman utama
    // ==========================================
    public function index()
    {
        $menus = Menu::all();

        // Ambil SEMUA meja untuk ditampilkan di grid
        $mejas = Meja::all();

        return view('home', compact('menus', 'mejas'));
    }

    // ==========================================
    // 2. Fungsi untuk menyimpan data pesanan
    // ==========================================
    public function simpanPesanan(Request $request)
    {
        // 1. Cek apakah makan di tempat & cari ID mejanya
        $meja_id = null;
        if ($request->orderType === 'Makan di Tempat' && $request->nomor_meja) {
            // Cari meja berdasarkan nomor (Misal: "Meja 01")
            $meja = Meja::where('nomor_meja', $request->nomor_meja)->first();

            if ($meja) {
                $meja->status = 'terisi'; // Ubah status jadi terisi (merah)
                $meja->save();
                $meja_id = $meja->id; // Ambil ID untuk disimpan di pesanan
            }
        }

        // 2. Simpan data lengkap ke tabel pesanans
        $pesanan = Pesanan::create([
            'kode_pesanan'      => $request->kode_pesanan,
            'nama_customer'     => $request->nama,
            'nomor_wa'          => $request->noWA,
            'meja_id'           => $meja_id,
            'nama_menu'         => $request->menuName,
            'jumlah'            => $request->qty,
            'pilihan_mie'       => $request->pilihanMie,
            'catatan'           => $request->catatan,
            'metode_penyajian'  => $request->orderType,
            'metode_pembayaran' => $request->paymentMethod,
            'total_harga'       => $request->totalHarga,
            'status_pesanan'    => 'pending'
        ]);

        // 3. Beri balasan ke frontend bahwa penyimpanan sukses
        return response()->json([
            'status' => 'sukses',
            'pesan' => 'Pesanan berhasil dicatat!',
            'pesanan_id' => $pesanan->id
        ]);
    }

    // ==========================================
    // 3. Fungsi radar untuk cek status meja (Real-time)
    // ==========================================
    public function cekStatusMeja()
    {
        // Kirim semua data meja dalam format JSON
        return response()->json(Meja::all());
        // 3. Beri balasan ke frontend bahwa penyimpanan sukses
        return response()->json([
            'status' => 'sukses',
            'pesan' => 'Pesanan berhasil dicatat!',
            'pesanan_id' => $pesanan->id // TAMBAHKAN BARIS INI
        ]);
    }
    // ==========================================
    // 4. Fungsi membatalkan pesanan (Ghost Order)
    // ==========================================
    public function batalkanPesanan(Request $request)
    {
        $pesanan = Pesanan::find($request->id);

        if ($pesanan) {
            // Jika pesanan ini mengunci meja, kosongkan kembali mejanya!
            if ($pesanan->meja_id) {
                $meja = Meja::find($pesanan->meja_id);
                if ($meja) {
                    $meja->status = 'kosong';
                    $meja->save();
                }
            }
            // Hapus pesanan dari database
            $pesanan->delete();
            return response()->json(['status' => 'sukses']);
        }
        return response()->json(['status' => 'gagal']);
    }
}
