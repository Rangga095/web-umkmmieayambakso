<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Sandi Baru - Pak Sabar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>body { font-family: 'Poppins', sans-serif; }</style>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen relative overflow-hidden">
    <div class="w-full max-w-md bg-white p-10 rounded-[2.5rem] shadow-xl border border-gray-100 z-10">
        <div class="text-center mb-8">
            <div class="w-20 h-20 bg-orange-50 rounded-full flex items-center justify-center mx-auto mb-4">
                <span class="text-4xl">🛡️</span>
            </div>
            <h2 class="text-3xl font-black text-gray-800">Sandi Baru</h2>
            <p class="text-gray-500 text-sm mt-2">Silakan buat kata sandi baru untuk akun kasir Anda.</p>
        </div>

        @if($errors->any())
            <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 rounded-xl mb-6 font-bold text-sm">
                ⚠️ Pastikan email benar dan sandi minimal 8 karakter (serta cocok).
            </div>
        @endif

        <form action="/reset-password" method="POST" class="space-y-5">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div>
                <label class="block text-gray-700 font-bold mb-2 text-sm ml-1">Email Anda</label>
                <input type="email" name="email" class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:ring-4 focus:ring-orange-100 focus:border-orange-500 outline-none transition-all bg-gray-50 font-medium" placeholder="admin@paksabar.com" required>
            </div>
            <div>
                <label class="block text-gray-700 font-bold mb-2 text-sm ml-1">Sandi Baru (Min. 8 Karakter)</label>
                <input type="password" name="password" class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:ring-4 focus:ring-orange-100 focus:border-orange-500 outline-none transition-all bg-gray-50 font-medium" placeholder="Masukkan sandi baru" required>
            </div>
            <div>
                <label class="block text-gray-700 font-bold mb-2 text-sm ml-1">Ulangi Sandi Baru</label>
                <input type="password" name="password_confirmation" class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:ring-4 focus:ring-orange-100 focus:border-orange-500 outline-none transition-all bg-gray-50 font-medium" placeholder="Ketik ulang sandi baru" required>
            </div>
            
            <button type="submit" class="w-full bg-green-500 text-white py-4 mt-2 rounded-2xl text-lg font-black hover:bg-green-600 transition-all duration-300 shadow-md">
                Simpan Sandi Baru
            </button>
        </form>
    </div>
</body>
</html>