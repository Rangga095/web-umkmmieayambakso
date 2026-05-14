<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mie Ayam Pak Sabar Menanti - Cita Rasa Autentik</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .hero-gradient {
            background: linear-gradient(to bottom, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.4) 50%, rgba(0,0,0,0.8) 100%);
        }

        /* Animasi mengambang (terus-menerus) */
        .logo-float {
            animation: floating 3s ease-in-out infinite;
        }
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        /* Animasi Entry (Glitch Pop seperti referensi video) */
        .logo-pop-glitch {
            animation: popGlitch 1s cubic-bezier(0.25, 1, 0.5, 1) forwards;
        }
        @keyframes popGlitch {
            0% {
                transform: scale(0) skewX(20deg);
                opacity: 0;
                filter: drop-shadow(-10px 0 0 #0ff) drop-shadow(10px 0 0 #f0f);
            }
            40% {
                transform: scale(1.2) skewX(-10deg);
                opacity: 1;
                filter: drop-shadow(10px 0 0 #0ff) drop-shadow(-10px 0 0 #f0f);
            }
            60% {
                transform: scale(0.9) skewX(5deg);
                filter: none;
            }
            80% { transform: scale(1.05) skewX(0deg); }
            100% { transform: scale(1); opacity: 1; }
        }
    </style>
</head>
<body class="bg-orange-50 text-gray-800 overflow-x-hidden">

    <nav class="bg-orange-600 text-white p-4 shadow-2xl sticky top-0 z-50 border-b border-orange-500">
        <div class="container mx-auto flex justify-between items-center">
           <a href="#beranda" class="flex items-center gap-3 group">
                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-md text-xl transition-transform duration-300 group-hover:rotate-12 group-hover:scale-110">
                    🍜
                </div>
                <div class="flex flex-col text-white">
                    <span class="text-xl font-extrabold leading-none tracking-tight group-hover:text-orange-200 transition-colors duration-300 drop-shadow-md">
                        MIE AYAM
                    </span>
                    <span class="text-[10px] font-bold text-orange-200 tracking-[0.2em] uppercase">
                        Pak Sabar Menanti
                    </span>
                </div>
            </a>
            <div class="flex items-center gap-10">
                <ul class="hidden lg:flex space-x-8 font-semibold text-sm">
                    <li><a href="#beranda" class="inline-block hover:text-orange-200 transition-all duration-300 hover:-translate-y-1 hover:scale-110 hover:drop-shadow-[0_0_8px_rgba(253,186,116,0.8)]">Beranda</a></li>
                    <li><a href="#cerita" class="inline-block hover:text-orange-200 transition-all duration-300 hover:-translate-y-1 hover:scale-110 hover:drop-shadow-[0_0_8px_rgba(253,186,116,0.8)]">Kisah Kami</a></li>
                    <li><a href="#menu" class="inline-block hover:text-orange-200 transition-all duration-300 hover:-translate-y-1 hover:scale-110 hover:drop-shadow-[0_0_8px_rgba(253,186,116,0.8)]">Menu Andalan</a></li>
                    <li><a href="#testimoni" class="inline-block hover:text-orange-200 transition-all duration-300 hover:-translate-y-1 hover:scale-110 hover:drop-shadow-[0_0_8px_rgba(253,186,116,0.8)]">Testimoni</a></li>
                    <li><a href="#lokasi" class="inline-block hover:text-orange-200 transition-all duration-300 hover:-translate-y-1 hover:scale-110 hover:drop-shadow-[0_0_8px_rgba(253,186,116,0.8)]">Lokasi Kami</a></li>
                </ul>
                <a href="https://wa.me/6281234567890" target="_blank" class="bg-white text-orange-600 px-6 py-2.5 rounded-full font-bold hover:bg-orange-100 hover:scale-105 transition-all shadow-lg text-sm">
                    Pesan Sekarang
                </a>
            </div>
        </div>
    </nav>

    <header id="beranda" class="relative min-h-[90vh] flex items-center justify-center bg-cover bg-center bg-no-repeat px-4" style="background-image: url('{{ asset('images/mie_ayam.jpg') }}');">
        <div class="absolute inset-0 hero-gradient"></div>

        <div class="relative z-10 text-center max-w-4xl" data-aos="fade-up">

            <div class="logo-float mx-auto w-max mb-8">
                <img src="{{ asset('images/logo_mie.jpg') }}" alt="Logo Besar"
                     class="h-32 md:h-48 w-auto object-contain cursor-pointer logo-pop-glitch transition-all duration-500 hover:scale-110 hover:drop-shadow-[0_0_25px_#f97316]">
            </div>

            <h2 class="text-5xl md:text-7xl font-extrabold text-white mb-6 tracking-tight leading-tight">
                Sabar Menantinya,<br><span class="text-orange-500 italic">Nikmat Rasanya!</span>
            </h2>
            <p class="text-lg md:text-2xl text-gray-200 mb-10 max-w-2xl mx-auto font-light leading-relaxed">
                Sajian Spesial Mie Ayam & Bakso Urat terbaik di Tembalang. Cita rasa otentik yang bikin ketagihan dari suapan pertama.
            </p>

            <div class="flex flex-col md:flex-row gap-5 justify-center mt-6">
                <a href="#menu" class="bg-orange-500 text-white px-10 py-4 rounded-full text-lg font-extrabold shadow-lg transition-all duration-300 hover:bg-orange-600 hover:-translate-y-2 hover:scale-105 hover:shadow-[0_10px_25px_rgba(249,115,22,0.6)]">
                    Lihat Menu Kami
                </a>
                <a href="#cerita" class="bg-white/10 backdrop-blur-md text-white border border-white/30 px-10 py-4 rounded-full text-lg font-bold transition-all duration-300 hover:bg-white/20 hover:-translate-y-2 hover:scale-105 hover:shadow-[0_0_25px_rgba(255,255,255,0.4)] hover:border-white/60">
                    Mengenal Kami
                </a>
            </div>
        </div>
    </header>

    <section id="cerita" class="bg-orange-50 py-16 px-4">
        <div class="container mx-auto flex flex-col md:flex-row items-center gap-12">
            <div class="w-full md:w-1/2 flex justify-center relative" data-aos="fade-right">
                <div class="absolute -top-4 -left-4 w-24 h-24 bg-orange-200 rounded-full -z-10"></div>
                <img src="{{ asset('images/b18195.jpg') }}" alt="Pak Sabar dan Istri di Warung" class="rounded-[2.5rem] shadow-[0_20px_50px_rgba(0,0,0,0.2)] h-[350px] md:h-[450px] w-auto border-8 border-white transition-all duration-300 hover:scale-105 hover:rotate-1 object-contain">
            </div>
            <div class="w-full md:w-1/2" data-aos="fade-left">
                <h3 class="text-sm font-bold text-orange-600 tracking-widest uppercase mb-2">Kisah Kami</h3>
                <h4 class="text-4xl font-extrabold text-gray-800 mb-6 leading-tight">Lebih Dari Sekadar<br>Semangkuk Mie</h4>
                <p class="text-gray-600 mb-4 leading-relaxed text-lg italic border-l-4 border-orange-500 pl-4">"Rasa jujur, harga sedulur." — Pak Sabar</p>
                <p class="text-gray-600 leading-relaxed text-base mb-6">Kuah kaldu yang dimasak perlahan dengan rempah pilihan, mie kenyal buatan tangan, dan bakso urat sapi asli adalah alasan mengapa pelanggan setia kami selalu rela "bersabar menanti" untuk hidangan istimewa ini.</p>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white p-4 rounded-2xl shadow-sm border border-orange-100">
                        <span class="block text-2xl font-bold text-orange-600">Legend</span>
                        <span class="text-xs text-gray-500 uppercase font-bold">di Tembalang</span>
                    </div>
                    <div class="bg-white p-4 rounded-2xl shadow-sm border border-orange-100">
                        <span class="block text-2xl font-bold text-orange-600">100%</span>
                        <span class="text-xs text-gray-500 uppercase font-bold">Bahan Segar</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="menu" class="container mx-auto py-16 px-4">
        <div class="text-center mb-12">
            <h3 class="text-4xl font-extrabold text-gray-800 mb-4">Menu Andalan Kami</h3>
            <div class="w-24 h-1.5 bg-orange-500 mx-auto rounded-full"></div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
            @foreach($menus as $menu)
            <div data-aos="fade-up" class="bg-white rounded-2xl shadow-md overflow-hidden border border-orange-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 flex flex-col group">
                <div class="relative overflow-hidden">
                    @if($menu->foto)
                        <img src="{{ asset('images/' . $menu->foto) }}" alt="{{ $menu->nama_menu }}" class="w-full h-36 md:h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                    @else
                        <div class="w-full h-36 md:h-48 bg-orange-100 flex items-center justify-center text-orange-400 font-semibold border-b border-orange-200 text-xs md:text-sm">
                            <span class="flex items-center gap-1">🍜 <i>Foto Menyusul</i></span>
                        </div>
                    @endif
                    <div class="absolute top-2 right-2 bg-white/90 backdrop-blur px-2 py-1 rounded-full text-[10px] font-bold text-orange-600 shadow-sm uppercase">Terlaris</div>
                </div>
                <div class="p-4 flex flex-col flex-grow">
                    <h4 class="font-bold text-base md:text-xl mb-1 text-gray-800 line-clamp-1" title="{{ $menu->nama_menu }}">{{ $menu->nama_menu }}</h4>
                    <p class="text-gray-500 mb-4 text-xs md:text-sm line-clamp-2 flex-grow">{{ $menu->deskripsi }}</p>
                    <div class="flex flex-col mt-auto gap-3">
                        <span class="font-extrabold text-orange-600 text-lg md:text-xl italic">Rp {{ number_format($menu->harga, 0, ',', '.') }}</span>
                        <a href="https://wa.me/6281234567890?text=Halo%20Pak%20Sabar,%20saya%20mau%20pesan%20{{ $menu->nama_menu }}" target="_blank" class="bg-orange-50 border border-orange-200 text-orange-600 px-3 py-2.5 rounded-xl font-bold text-xs md:text-sm hover:bg-orange-600 hover:text-white hover:border-orange-600 transition-all text-center w-full shadow-sm">
                            Pesan
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section id="testimoni" class="bg-orange-50 py-16 px-4 border-t border-orange-100">
        <div class="container mx-auto">
            <div class="text-center mb-12">
                <h3 data-aos="fade-up" class="text-3xl font-extrabold text-gray-800 mb-2">Apa Kata Mereka?</h3>
                <p data-aos="fade-up" class="text-gray-600 text-sm md:text-base">Lebih dari sekadar makan, ini tentang rasa yang bikin rindu kembali.</p>
                <div class="w-16 h-1 bg-orange-500 mx-auto rounded-full mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div data-aos="zoom-in" data-aos-delay="100" class="bg-white p-6 rounded-3xl shadow-sm border border-orange-100 flex flex-col justify-between hover:-translate-y-2 transition-transform">
                    <div>
                        <div class="flex text-yellow-400 mb-4 text-sm">★★★★★</div>
                        <p class="text-gray-700 italic mb-6 leading-relaxed text-sm">"Mie ayam nya enak, mie nya kenyal, ayam nya banyak pokoknya mantap! Kuah kaldunya juga berasa banget gurihnya. Bener-bener definisi rasa jujur harga sedulur."</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-orange-200 rounded-full flex items-center justify-center font-bold text-orange-700">I</div>
                        <div><h5 class="font-bold text-gray-800 text-sm">Ibu Sumarsih</h5><p class="text-xs text-gray-500">1 ulasan</p></div>
                    </div>
                </div>

                <div data-aos="zoom-in" data-aos-delay="200" class="bg-white p-6 rounded-3xl shadow-sm border border-orange-100 flex flex-col justify-between hover:-translate-y-2 transition-transform">
                    <div>
                        <div class="flex text-yellow-400 mb-4 text-sm">★★★★★</div>
                        <p class="text-gray-700 italic mb-6 leading-relaxed text-sm">"Mie ayam dan bakso enak mantap, porsi kenyang murah.. dan bapak ibu nya yg jual menyenangkan. Jooss pokoknya, jadi andalan kalau lagi di Tembalang."</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-green-200 rounded-full flex items-center justify-center font-bold text-green-700">N</div>
                        <div><h5 class="font-bold text-gray-800 text-sm">Nanda Adi</h5><p class="text-xs text-gray-500">Local Guide · 9 ulasan</p></div>
                    </div>
                </div>

                <div data-aos="zoom-in" data-aos-delay="300" class="bg-white p-6 rounded-3xl shadow-sm border border-orange-100 flex flex-col justify-between hover:-translate-y-2 transition-transform">
                    <div>
                        <div class="flex text-yellow-400 mb-4 text-sm">★★★★★</div>
                        <p class="text-gray-700 italic mb-6 leading-relaxed text-sm">"Makanannya enak & bapaknya ramah banget ngelayaninnya. Walaupun kelihatannya sederhana, tapi rasanya bintang lima. Porsinya juga bikin kenyang. Sukses terus!"</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-pink-200 rounded-full flex items-center justify-center font-bold text-pink-700">K</div>
                        <div><h5 class="font-bold text-gray-800 text-sm">Kim Rherhe</h5><p class="text-xs text-gray-500">1 ulasan · 14 foto</p></div>
                    </div>
                </div>

                <div data-aos="zoom-in" data-aos-delay="400" class="bg-white p-6 rounded-3xl shadow-sm border border-orange-100 flex flex-col justify-between hover:-translate-y-2 transition-transform">
                    <div>
                        <div class="flex text-yellow-400 mb-4 text-sm">★★★★★</div>
                        <p class="text-gray-700 italic mb-6 leading-relaxed text-sm">"Selalu puas makan di sini. Makanan bintang 5, layanannya juga memuaskan. Porsinya pas buat ganjal perut, tempatnya nyaman buat makan santai. Recommended!"</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-blue-200 rounded-full flex items-center justify-center font-bold text-blue-700">A</div>
                        <div><h5 class="font-bold text-gray-800 text-sm">Adi Rubiyanto</h5><p class="text-xs text-gray-500">Local Guide · 519 ulasan</p></div>
                    </div>
                </div>

                <div data-aos="zoom-in" data-aos-delay="100" class="bg-white p-6 rounded-3xl shadow-sm border border-orange-100 flex flex-col justify-between hover:-translate-y-2 transition-transform mt-2">
                    <div>
                        <div class="flex text-yellow-400 mb-4 text-sm">★★★★★</div>
                        <p class="text-gray-700 italic mb-6 leading-relaxed text-sm">"Langganan dari zaman maba! Bakso uratnya juara sih, kerasa banget dagingnya. Penyelamat di tanggal tua buat anak kost sekitaran Tembalang."</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-yellow-200 rounded-full flex items-center justify-center font-bold text-yellow-700">B</div>
                        <div><h5 class="font-bold text-gray-800 text-sm">Bimo Anggara</h5><p class="text-xs text-gray-500">Mahasiswa Undip</p></div>
                    </div>
                </div>

                <div data-aos="zoom-in" data-aos-delay="200" class="bg-white p-6 rounded-3xl shadow-sm border border-orange-100 flex flex-col justify-between hover:-translate-y-2 transition-transform mt-2">
                    <div>
                        <div class="flex text-yellow-400 mb-4 text-sm">★★★★★</div>
                        <p class="text-gray-700 italic mb-6 leading-relaxed text-sm">"Tiap pulang kerja lewat sini baunya selalu bikin laper. Mie ayam baksonya perpaduan pas. Tempatnya juga sekarang makin bersih dan terang."</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-purple-200 rounded-full flex items-center justify-center font-bold text-purple-700">R</div>
                        <div><h5 class="font-bold text-gray-800 text-sm">Rian Hidayat</h5><p class="text-xs text-gray-500">Warga Sekitar</p></div>
                    </div>
                </div>

                <div data-aos="zoom-in" data-aos-delay="300" class="bg-white p-6 rounded-3xl shadow-sm border border-orange-100 flex flex-col justify-between hover:-translate-y-2 transition-transform mt-2">
                    <div>
                        <div class="flex text-yellow-400 mb-4 text-sm">★★★★★</div>
                        <p class="text-gray-700 italic mb-6 leading-relaxed text-sm">"Mie ayamnya tipe yang kenyal dan nggak lembek. Porsinya banyak, potongan ayamnya juga gede-gede nggak pelit. Sabar menanti tapi worth it banget!"</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-red-200 rounded-full flex items-center justify-center font-bold text-red-700">S</div>
                        <div><h5 class="font-bold text-gray-800 text-sm">Sari Wulandari</h5><p class="text-xs text-gray-500">Pelanggan Setia</p></div>
                    </div>
                </div>

                <div data-aos="zoom-in" data-aos-delay="400" class="bg-white p-6 rounded-3xl shadow-sm border border-orange-100 flex flex-col justify-between hover:-translate-y-2 transition-transform mt-2">
                    <div>
                        <div class="flex text-yellow-400 mb-4 text-sm">★★★★★</div>
                        <p class="text-gray-700 italic mb-6 leading-relaxed text-sm">"Jarang-jarang nemu mie ayam yang bumbunya ngeresap sampe ke mie-nya. Es jeruknya juga seger banget bukan perasa instan. Mantap betul!"</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-teal-200 rounded-full flex items-center justify-center font-bold text-teal-700">M</div>
                        <div><h5 class="font-bold text-gray-800 text-sm">Maya Indah</h5><p class="text-xs text-gray-500">Foodies Semarang</p></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="lokasi" class="bg-white py-16 px-4 border-t border-gray-200">
        <div class="container mx-auto">
            <div class="text-center mb-12">
                <h3 class="text-4xl font-extrabold text-gray-800 mb-4">Kunjungi Warung Kami</h3>
                <div class="w-24 h-1.5 bg-orange-500 mx-auto rounded-full"></div>
            </div>

            <div class="flex flex-col md:flex-row gap-12 items-center bg-orange-50 p-10 rounded-3xl shadow-inner border border-orange-100">
                <div class="w-full md:w-1/3 text-center md:text-left">
                    <h4 class="text-3xl font-bold text-gray-800 mb-6 flex items-center justify-center md:justify-start gap-3">
                        <span>📍</span> Lokasi Kami
                    </h4>
                    <p class="text-gray-700 mb-4 text-lg leading-relaxed">
                        <strong>Mie Ayam Pak Sabar Menanti</strong><br>
                        Jl. Kaba Raya, Tandang, Kec. Tembalang,<br>
                        Kota Semarang, Jawa Tengah 50274
                    </p>
                    <p class="text-gray-700 mb-8 text-lg">
                        <span class="font-bold text-orange-600">Jam Buka:</span><br>
                        Senin - Minggu (10:00 - 21:00 WIB)
                    </p>
                    <a href="https://wa.me/6281234567890" target="_blank" class="inline-flex items-center justify-center gap-2 bg-green-500 text-white px-8 py-4 rounded-full font-bold shadow-lg hover:bg-green-600 hover:-translate-y-1 transition-all w-full md:w-auto">
                        <span>💬</span> Chat via WhatsApp
                    </a>
                </div>

                <div class="w-full md:w-2/3 h-80 rounded-3xl overflow-hidden shadow-lg border-8 border-white bg-gray-200 relative">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10229.91470539719!2d110.435507!3d-7.013166!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708d0033fcc559%3A0xf7d71e26ad43d286!2sMie%20ayam%20pak%20sabar%20menan!5e0!3m2!1sid!2sid" class="absolute top-0 left-0 w-full h-full" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-gray-900 text-gray-400 text-center py-8">
        <img src="{{ asset('images/logo_mie.jpg') }}" alt="Logo Footer" class="h-12 w-auto mx-auto mb-6 object-contain grayscale opacity-60 hover:grayscale-0 hover:opacity-100 hover:scale-110 hover:drop-shadow-[0_0_15px_#f97316] transition-all duration-500 cursor-pointer">
        <p>© 2026 Mie Ayam Pak Sabar Menanti. Dikembangkan dengan ❤️ oleh Sir Rangga.</p>
    </footer>

    <a href="https://wa.me/6281234567890" target="_blank" class="fixed bottom-8 right-8 z-[99] bg-green-500 text-white p-4 rounded-full shadow-2xl hover:bg-green-600 hover:-translate-y-2 hover:scale-110 transition-all duration-300 group flex items-center justify-center animate-bounce hover:animate-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12.031 0C5.385 0 0 5.385 0 12.031c0 2.12.551 4.168 1.594 5.986L.03 24l6.155-1.614A11.96 11.96 0 0012.031 24c6.646 0 12.031-5.385 12.031-12.031S18.677 0 12.031 0zm4.07 17.262c-.628 1.77-3.151 2.133-4.322 2.133-1.42 0-3.32-.57-5.59-2.84-2.27-2.27-2.84-4.17-2.84-5.59 0-1.171.363-3.694 2.133-4.322.569-.201 1.09-.071 1.433.824.31.81.93 2.37.989 2.49.06.12.119.3.03.48-.09.18-.18.27-.36.45-.18.18-.39.42-.54.57-.18.18-.39.39-.21.72.18.33.81 1.35 1.74 2.16 1.2 1.05 2.19 1.38 2.52 1.53.33.15.54.12.72-.09.18-.21.81-.93 1.02-1.26.21-.33.42-.27.72-.15.3.12 1.89.9 2.22 1.05.33.15.54.27.63.42.09.15.09.66-.21 1.35z"/>
        </svg>

        <span class="absolute right-16 bg-white text-green-600 font-bold px-4 py-2 rounded-xl shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap pointer-events-none hidden md:block border border-green-100">
            Pesan Sekarang!
        </span>
    </a>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>
</html>
