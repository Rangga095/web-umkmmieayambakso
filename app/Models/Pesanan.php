<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    // Mengizinkan pengisian data otomatis
    protected $fillable = [
        'kode_pesanan', 'nama_customer', 'nomor_wa', 'meja_id',
        'nama_menu', 'jumlah', 'pilihan_mie', 'catatan',
        'metode_penyajian', 'metode_pembayaran', 'total_harga', 'status_pesanan'
    ];
    public function meja()
    {
        return $this->belongsTo(Meja::class, 'meja_id');
    }
}
