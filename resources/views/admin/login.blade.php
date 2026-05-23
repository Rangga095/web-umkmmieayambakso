<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Kasir - Pak Sabar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>body { font-family: 'Poppins', sans-serif; }</style>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen relative overflow-hidden">

    <div class="absolute top-[-10%] left-[-10%] w-96 h-96 bg-orange-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
    <div class="absolute bottom-[-10%] right-[-10%] w-96 h-96 bg-orange-600 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>

    <div class="w-full max-w-md bg-white p-10 rounded-[2.5rem] shadow-[0_20px_50px_rgba(0,0,0,0.1)] relative z-10 border border-gray-100">
        <div class="text-center mb-8">
            <div class="w-20 h-20 bg-orange-50 rounded-full flex items-center justify-center mx-auto mb-4 shadow-inner">
                <span class="text-4xl">🔐</span>
            </div>
            <h2 class="text-3xl font-black text-gray-800">Akses Kasir</h2>
            <p class="text-gray-500 text-sm mt-2 font-medium">Silakan masuk untuk mengelola pesanan.</p>
        </div>

        @if(session()->has('loginError'))
            <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 rounded-xl mb-6 font-bold text-sm">
                ⚠️ {{ session('loginError') }}
            </div>
        @endif

        <form action="/login" method="POST" class="space-y-6">
            @csrf
            <div>
                <label class="block text-gray-700 font-bold mb-2 text-sm ml-1">Email Pengelola</label>
                <input type="email" name="email" id="email" class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:ring-4 focus:ring-orange-100 focus:border-orange-500 outline-none transition-all bg-gray-50 font-medium" placeholder="contoh: admin@paksabar.com" required autofocus>
            </div>
           <div>
                <label class="block text-gray-700 font-bold mb-2 text-sm ml-1">Kata Sandi</label>
                <input type="password" name="password" id="password" class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:ring-4 focus:ring-orange-100 focus:border-orange-500 outline-none transition-all bg-gray-50 font-medium" placeholder="Masukkan kata sandi rahasia" required>
            </div>

            <div class="text-right mb-4">
                <a href="/forgot-password" class="text-sm font-semibold text-orange-600 hover:underline">Lupa Kata Sandi?</a>
            </div>

            <button type="submit" class="w-full bg-orange-600 text-white py-4 rounded-2xl text-lg font-black hover:bg-orange-700 hover:-translate-y-1 hover:shadow-xl transition-all duration-300">
                Masuk ke Dashboard
            </button>
        </form>

        <div class="mt-8 text-center">
            <a href="/" class="text-gray-400 hover:text-orange-600 font-bold text-sm transition-colors">← Kembali ke Halaman Web</a>
        </div>
    </div>
</body>
</html>
