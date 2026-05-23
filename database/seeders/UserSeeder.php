<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Membuat akun admin khusus Pak Sabar
        User::create([
            'name' => 'Pak Sabar',
            'email' => 'admin@paksabar.com', // Ini yang akan dipakai login
            'password' => Hash::make('paksabar123') // Ini passwordnya
        ]);
    }
}
