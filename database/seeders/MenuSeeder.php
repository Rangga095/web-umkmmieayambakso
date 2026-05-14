<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu; // Jangan lupa panggil Model Menu

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        // Kumpulan data menu baru
        $menus = [
            [
                'nama_menu' => 'Mie Ayam Biasa',
                'harga' => 10000,
                'deskripsi' => 'Mie ayam original dengan bumbu khas Pak Sabar menanti.',
                'foto' => 'mie_ayam.png', // Null karena fotonya belum ada
            ],
            [
                'nama_menu' => 'Mie Ayam Bakso',
                'harga' => 15000,
                'deskripsi' => 'Mie ayam original dengan bumbu khas Pak Sabar menanti.',
                'foto' => 'mie_ayam_bakso.png', // Null karena fotonya belum ada
            ],
            [
                'nama_menu' => 'Bakso Kuah',
                'harga' => 15000,
                'deskripsi' => 'Bakso sapi asli dengan kuah kaldu. Bisa request bakso kecil-kecil atau urat besar.',
                'foto' => 'bakso_kuah.png',
            ],
            [
                'nama_menu' => 'Teh (Es / Panas)',
                'harga' => 4000,
                'deskripsi' => 'Teh seduh wangi. Bisa request manis atau tawar.',
                'foto' => 'teh.png',
            ],
            [
                'nama_menu' => 'Jeruk (Es / Panas)',
                'harga' => 5000,
                'deskripsi' => 'Perasan jeruk segar asli.',
                'foto' => 'jeruk.png',
            ],
            [
                'nama_menu' => 'Air Putih (Es / Panas)',
                'harga' => 1000,
                'deskripsi' => 'Air putih pelepas dahaga.',
                'foto' => 'air_putih.png',
            ],
            [
                'nama_menu' => 'Kerupuk',
                'harga' => 2000,
                'deskripsi' => 'Pelengkap renyah untuk teman makan mie dan bakso.',
                'foto' => 'kerupuk.png',
            ],
        ];

        // Looping untuk memasukkan semua data ke database
        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}
