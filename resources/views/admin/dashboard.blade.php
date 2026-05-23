<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir Pintar - Pak Sabar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800;900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #f3f4f6; }
    </style>
</head>
<body class="p-4 md:p-8">

    <div class="mb-8">
<div class="bg-gradient-to-r from-orange-500 to-orange-600 p-6 md:p-8 rounded-3xl shadow-lg mb-8 text-white flex flex-col md:flex-row justify-between items-center">
        <div>
            <h1 class="text-4xl font-black mb-2">👨‍🍳 Kasir Pak Sabar</h1>
            <p class="text-orange-100 font-bold text-xl">Rekap Harian: {{ \Carbon\Carbon::now()->timezone('Asia/Jakarta')->translatedFormat('l, d F Y') }}</p>
        </div>
        <div class="mt-4 md:mt-0 text-right flex items-center justify-end gap-3">
            <span class="bg-white text-orange-600 px-4 py-2 rounded-xl font-black text-lg shadow-sm hidden md:inline-block">Buka (Otomatis Reset Pukul 00:00)</span>
            
            <button type="button" onclick="bukaModalProfil()" class="bg-orange-100 hover:bg-orange-200 text-orange-700 px-4 py-2 rounded-xl font-bold shadow-md transition-all flex items-center gap-2">
                <span>⚙️</span> Pengaturan Akun
            </button>
            <form action="/logout" method="POST" class="m-0 p-0">
                @csrf
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-5 py-2 rounded-xl font-bold shadow-md transition-all flex items-center gap-2">
                    <span>🚪</span> Keluar
                </button>
            </form>
        </div>
    </div>

    @if(session('sukses'))
        <div class="bg-green-100 border-l-8 border-green-500 text-green-800 p-4 mb-6 rounded-xl font-bold text-lg shadow-sm">
            ✅ {{ session('sukses') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <div class="bg-white p-6 md:p-8 rounded-3xl shadow-md border-b-8 border-orange-500">
            <h2 class="text-gray-500 font-bold text-2xl mb-2">Total Pemasukan Hari Ini</h2>
            <p class="text-5xl font-black text-orange-600">Rp {{ number_format($totalPendapatan, 0, ',', '.') }}</p>
        </div>
        <div class="bg-white p-6 md:p-8 rounded-3xl shadow-md border-b-8 border-blue-500">
            <h2 class="text-gray-500 font-bold text-2xl mb-2">Total Porsi Terjual</h2>
            <p class="text-5xl font-black text-blue-600">{{ $totalPorsi }} <span class="text-3xl text-gray-400">Mangkok</span></p>
        </div>
    </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

        <div class="lg:col-span-2">
            <h2 class="text-3xl font-black text-gray-800 mb-6 border-b-4 border-gray-300 pb-2">🔔 Antrean Pesanan</h2>

            <div class="space-y-6">
                @forelse($pesanans as $pesanan)
@if($pesanan->status_pesanan == 'pending' || $pesanan->status_pesanan == 'dimasak')
                        <div class="bg-white p-6 rounded-3xl shadow-lg border-l-8 {{ $pesanan->status_pesanan == 'pending' ? 'border-yellow-400' : 'border-blue-400' }} mb-6 flex flex-col gap-4">

                            <div class="flex justify-between items-center border-b-2 border-gray-100 pb-4">
                                <h3 class="text-3xl md:text-4xl font-black text-orange-600">🎫 {{ $pesanan->kode_pesanan }}</h3>
                                <span class="px-5 py-2 rounded-xl text-xl font-black {{ $pesanan->metode_penyajian == 'Makan di Tempat' ? 'bg-orange-100 text-orange-700' : 'bg-purple-100 text-purple-700' }}">
                                    {{ $pesanan->metode_penyajian == 'Makan di Tempat' ? ($pesanan->meja ? $pesanan->meja->nomor_meja : 'Meja ?') : 'BUNGKUS' }}
                                </span>
                            </div>

                            <div class="flex justify-between items-start">
                                <div>
                                    <h4 class="text-2xl font-bold text-gray-800">{{ $pesanan->nama_customer }}</h4>
                                    <p class="text-gray-500 font-bold mt-1">📱 {{ $pesanan->nomor_wa }} | 🕒 {{ $pesanan->created_at->timezone('Asia/Jakarta')->format('H:i') }} WIB</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-3xl font-black text-gray-800">Rp {{ number_format($pesanan->total_harga, 0, ',', '.') }}</p>
                                    @if($pesanan->metode_pembayaran == 'QRIS')
                                        <span class="inline-block mt-1 px-3 py-1 bg-yellow-100 text-yellow-800 font-bold rounded-lg text-sm border border-yellow-300">⚠️ Cek QRIS</span>
                                    @else
                                        <span class="inline-block mt-1 px-3 py-1 bg-green-100 text-green-800 font-bold rounded-lg text-sm border border-green-300">💵 Bayar Tunai</span>
                                    @endif
                                </div>
                            </div>

                            <div class="bg-gray-50 p-4 rounded-xl mt-2">
                                <p class="text-2xl font-black text-orange-600">{{ $pesanan->jumlah }}x {{ $pesanan->nama_menu }}</p>
                                @if($pesanan->pilihan_mie && $pesanan->pilihan_mie != 'Sesuai Standar Menu')
                                    <p class="text-lg font-bold text-gray-700 mt-1">🍜 Mie: {{ $pesanan->pilihan_mie }}</p>
                                @endif
                                @if($pesanan->catatan)
                                    <p class="text-lg font-bold text-red-600 mt-2 border-l-4 border-red-500 pl-3">📝 Catatan: {{ $pesanan->catatan }}</p>
                                @endif
                            </div>

                            @if($pesanan->status_pesanan == 'pending')
                                <div class="flex gap-4 mt-2">
                                    <form action="/admin/pesanan/terima/{{ $pesanan->id }}" method="POST" class="w-2/3">
                                        @csrf
                                        <button type="submit" class="w-full bg-green-500 hover:bg-green-600 text-white font-black text-2xl py-4 rounded-2xl shadow-md transition-all">
                                            ✅ TERIMA & MASAK
                                        </button>
                                    </form>

                                    <form id="form-tolak-{{ $pesanan->id }}" action="/admin/pesanan/tolak/{{ $pesanan->id }}" method="POST" class="hidden">@csrf</form>

                                    <button type="button" onclick="prosesTolakPesanan({{ $pesanan->id }}, '{{ $pesanan->nomor_wa }}', '{{ $pesanan->nama_customer }}', '{{ $pesanan->nama_menu }}')" class="w-1/3 bg-red-100 hover:bg-red-200 text-red-600 font-black text-xl py-4 rounded-2xl border-2 border-red-300 transition-all">
                                        ❌ TOLAK
                                    </button>
                                </div>
                           @elseif($pesanan->status_pesanan == 'dimasak')
                                <div class="flex gap-4 mt-4 border-t-2 border-gray-100 pt-4">
                                    <form action="/admin/pesanan/selesai/{{ $pesanan->id }}" method="POST" class="w-2/3">
                                        @csrf
                                        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-black text-2xl py-4 rounded-2xl shadow-md transition-all">
                                            🏁 MAKANAN SIAP
                                        </button>
                                    </form>

                                    <button type="button" onclick="kabariWASelesai('{{ $pesanan->nomor_wa }}', '{{ $pesanan->nama_customer }}', '{{ $pesanan->metode_penyajian }}')" class="w-1/3 bg-green-50 hover:bg-green-100 text-green-700 font-black py-4 rounded-2xl border-2 border-green-400 shadow-sm transition-all flex flex-col justify-center items-center leading-tight">
                                        <span class="text-sm">📱 KABARI WA</span>
                                        <span class="text-xl">PELANGGAN</span>
                                    </button>
                                </div>
                            @endif
                        </div>
                    @endif
                @empty
                    <div class="text-center py-10 bg-gray-50 rounded-3xl border-4 border-dashed border-gray-200">
                        <p class="text-2xl font-bold text-gray-400">Belum ada pesanan masuk...</p>
                    </div>
                @endforelse
            </div>
        </div>

        <div>
            <h2 class="text-3xl font-black text-gray-800 mb-6 border-b-4 border-gray-300 pb-2">🪑 Kontrol Meja</h2>

            <div class="bg-white p-6 rounded-3xl shadow-md border border-gray-200">
                <p class="text-gray-500 font-bold mb-4 text-center">Pencet meja warna MERAH jika pelanggan sudah pulang!</p>
                <div class="grid grid-cols-2 gap-4">
                    @foreach($mejas as $meja)
                        @if($meja->status == 'kosong')
                            <div class="bg-green-100 border-2 border-green-300 text-green-700 py-6 rounded-2xl text-center font-black text-2xl opacity-60">
                                {{ str_replace('Meja ', '', $meja->nomor_meja) }}
                            </div>
                        @else
                            <form action="/admin/meja/kosongkan/{{ $meja->id }}" method="POST">
                                @csrf
                                <button type="submit" onclick="return confirm('Kosongkan {{ $meja->nomor_meja }}? Pastikan pelanggan sudah benar-benar pulang!');" class="w-full bg-red-500 hover:bg-red-600 border-b-8 border-red-700 text-white py-4 rounded-2xl text-center shadow-md transition-all">
                                    <span class="block font-black text-3xl">{{ str_replace('Meja ', '', $meja->nomor_meja) }}</span>
                                    <span class="block text-xs font-bold bg-white/20 mx-2 mt-1 rounded">Klik untuk Kosongkan</span>
                                </button>
                            </form>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

    </div>

    <div id="modalProfil" class="fixed inset-0 z-[150] hidden bg-black/60 backdrop-blur-sm flex items-center justify-center p-4 opacity-0 transition-opacity duration-300">
        <div class="bg-white w-full max-w-md rounded-[2.5rem] shadow-2xl relative transform scale-95 transition-transform duration-300 p-8 md:p-10" id="modalProfilContent">
            
            <button onclick="tutupModalProfil()" class="absolute top-4 right-4 bg-orange-50 text-gray-500 hover:text-red-500 hover:bg-red-50 rounded-full w-10 h-10 flex items-center justify-center font-bold text-xl shadow-sm transition-all z-10">
                ✕
            </button>

            <div class="text-center mb-6">
                <div class="w-16 h-16 bg-orange-50 rounded-full flex items-center justify-center mx-auto mb-3">
                    <span class="text-3xl">⚙️</span>
                </div>
                <h3 class="text-2xl font-black text-gray-800">Pengaturan Akun</h3>
                <p class="text-gray-400 text-xs mt-1">Ubah email atau kata sandi pengelola kasir.</p>
            </div>

            <form action="/admin/profile/update" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-gray-700 font-bold mb-1.5 text-xs ml-1">Nama Pengelola</label>
                    <input type="text" name="name" value="{{ auth()->user()->name }}" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-4 focus:ring-orange-100 focus:border-orange-500 outline-none transition-all bg-gray-50 font-medium text-sm" required>
                </div>
                <div>
                    <label class="block text-gray-700 font-bold mb-1.5 text-xs ml-1">Email Login Baru</label>
                    <input type="email" name="email" value="{{ auth()->user()->email }}" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-4 focus:ring-orange-100 focus:border-orange-500 outline-none transition-all bg-gray-50 font-medium text-sm" required>
                </div>
                <div class="pt-2 border-t border-dashed border-gray-200">
                    <label class="block text-gray-700 font-bold mb-1.5 text-xs ml-1">Kata Sandi Baru (Kosongkan jika tidak diganti)</label>
                    <input type="password" name="password" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-4 focus:ring-orange-100 focus:border-orange-500 outline-none transition-all bg-gray-50 font-medium text-sm" placeholder="Minimal 8 karakter">
                </div>
                <div>
                    <label class="block text-gray-700 font-bold mb-1.5 text-xs ml-1">Ulangi Kata Sandi Baru</label>
                    <input type="password" name="password_confirmation" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-4 focus:ring-orange-100 focus:border-orange-500 outline-none transition-all bg-gray-50 font-medium text-sm" placeholder="Ketik ulang kata sandi baru">
                </div>

                <button type="submit" class="w-full bg-orange-600 text-white py-3.5 rounded-xl font-bold hover:bg-orange-700 shadow-md transition-all text-sm mt-2">
                    Simpan Perubahan Data
                </button>
            </form>
        </div>
    </div>
<script>
        let isModalTerbuka = false; // Variabel pengontrol radar

        // 1. Menangkap Pesan Sukses atau Error dari Sistem Laravel
        @if(session('sukses'))
            alert("✅ {{ session('sukses') }}");
        @endif

        @if($errors->any())
            alert("❌ Gagal menyimpan! Pastikan format email belum terpakai dan sandi baru minimal 8 karakter (serta cocok dengan kolom ulangi sandi).");
            // Langsung buka otomatis modalnya lagi jika ada error
            window.onload = function() {
                bukaModalProfil();
            };
        @endif

        function bukaModalProfil() {
            isModalTerbuka = true; // Hentikan radar saat mengetik!
            const mProfil = document.getElementById('modalProfil');
            const mProfilContent = document.getElementById('modalProfilContent');
            mProfil.classList.remove('hidden');
            setTimeout(() => {
                mProfil.classList.remove('opacity-0');
                mProfilContent.classList.remove('scale-95');
                mProfilContent.classList.add('scale-100');
            }, 10);
        }

        function tutupModalProfil() {
            isModalTerbuka = false; // Lanjutkan radar saat modal ditutup!
            const mProfil = document.getElementById('modalProfil');
            const mProfilContent = document.getElementById('modalProfilContent');
            mProfil.classList.add('opacity-0');
            mProfilContent.classList.remove('scale-100');
            mProfilContent.classList.add('scale-95');
            setTimeout(() => {
                mProfil.classList.add('hidden'); // Diperbaiki typo-nya di sini
            }, 300);
        }

        function prosesTolakPesanan(id, nomor, nama, menu) {
            if(confirm('Yakin ingin MENOLAK pesanan ini?')) {
                // 1. Ubah 08 jadi 628
                if(nomor.startsWith('0')) nomor = '62' + nomor.substring(1);

                // 2. Susun teks dan Buka Tab WA baru
                let teks = `Halo Kak ${nama}, mohon maaf sekali pesanan Kakak (${menu}) terpaksa Pak Sabar tolak karena bahan sedang habis / warung sangat ramai. Mohon pengertiannya ya Kak 🙏`;
                window.open(`https://wa.me/${nomor}?text=${encodeURIComponent(teks)}`, '_blank');

                // 3. Eksekusi hapus data dari layar Admin
                document.getElementById('form-tolak-' + id).submit();
            }
        }

        function kabariWASelesai(nomor, nama, penyajian) {
            // Ubah awalan 08 menjadi 628
            if(nomor.startsWith('0')) nomor = '62' + nomor.substring(1);

            let teks = '';
            // Bedakan teks untuk yang bungkus dan makan di tempat
            if (penyajian === 'Makan di Tempat') {
                teks = `Halo Kak ${nama}, pesanan Kakak sudah matang dan siap disajikan di meja ya! Selamat menikmati masakan khas Pak Sabar 🍜`;
            } else {
                teks = `Halo Kak ${nama}, pesanan bungkus Kakak sudah selesai dimasak dan SIAP DIAMBIL ke warung ya! Ditunggu kedatangannya Kak 🛵`;
            }

            window.open(`https://wa.me/${nomor}?text=${encodeURIComponent(teks)}`, '_blank');
        }

        // Auto Refresh Halaman Setiap 10 Detik agar pesanan baru otomatis muncul
        setInterval(() => {
            // TAHAP 4: Cegat otomatis! Jika modal terbuka, lewati proses refresh halamannya
            if (isModalTerbuka === true) return; 
            
            window.location.reload();
        }, 10000);
    </script>
</body>
</html>
