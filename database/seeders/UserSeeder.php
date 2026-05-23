<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Jurus updateOrCreate: Jika email sudah ada, cukup update passwordnya.
        // Jika belum ada, buatkan akun baru. Dijamin 100% bebas error duplikat!
        User::updateOrCreate(
            ['email' => 'admin@paksabar.com'], // Patokan pencarian
            [
                'name' => 'Pak Sabar',
                'password' => Hash::make('paksabar123') // Password yang ingin dipasang
            ]
        );
    }
}
