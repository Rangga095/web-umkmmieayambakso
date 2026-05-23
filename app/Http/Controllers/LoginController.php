<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // 1. Menampilkan halaman form login
    public function index()
    {
        return view('admin.login');
    }

    // 2. Mengecek kebenaran email & password
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard'); // Jika benar, masuk ke dashboard
        }

        // Jika salah, tendang balik ke halaman login dengan pesan error
        return back()->with('loginError', 'Login Gagal! Email atau Password salah.');
    }

    // 3. Fungsi untuk keluar (Logout)
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
