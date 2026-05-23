<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Kata Sandi - Pak Sabar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>body { font-family: 'Poppins', sans-serif; }</style>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen relative overflow-hidden">
    <div class="w-full max-w-md bg-white p-10 rounded-[2.5rem] shadow-xl border border-gray-100 z-10">
        <div class="text-center mb-8">
            <div class="w-20 h-20 bg-orange-50 rounded-full flex items-center justify-center mx-auto mb-4">
                <span class="text-4xl">🔑</span>
            </div>
            <h2 class="text-3xl font-black text-gray-800">Lupa Sandi?</h2>
            <p class="text-gray-500 text-sm mt-2">Masukkan email Anda. Kami akan kirimkan tautan untuk membuat password baru.</p>
        </div>

        @if(session('status'))
            <div class="bg-green-50 border-l-4 border-green-500 text-green-700 p-4 rounded-xl mb-6 font-bold text-sm">
                📩 {{ session('status') }}
            </div>
        @endif

        <form action="/forgot-password" method="POST" class="space-y-6">
            @csrf
            <div>
                <label class="block text-gray-700 font-bold mb-2 text-sm ml-1">Email Terdaftar</label>
                <input type="email" name="email" class="w-full px-5 py-4 rounded-2xl border border-gray-200 focus:ring-4 focus:ring-orange-100 focus:border-orange-500 outline-none transition-all bg-gray-50 font-medium" placeholder="Masukkan email kasir" required>
            </div>
            <button type="submit" class="w-full bg-orange-600 text-white py-4 rounded-2xl text-lg font-black hover:bg-orange-700 transition-all duration-300">
                Kirim Tautan Reset
            </button>
        </form>
        <div class="mt-8 text-center">
            <a href="/login" class="text-orange-600 hover:underline font-bold text-sm">← Kembali ke Login</a>
        </div>
    </div>
</body>
</html>
