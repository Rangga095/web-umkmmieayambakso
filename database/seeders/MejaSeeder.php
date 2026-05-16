<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Meja; // Pastikan Anda sudah membuat Model Meja

class MejaSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            Meja::create([
                'nomor_meja' => 'Meja ' . str_pad($i, 2, '0', STR_PAD_LEFT),
                'status' => 'kosong',
            ]);
        }
    }
}
