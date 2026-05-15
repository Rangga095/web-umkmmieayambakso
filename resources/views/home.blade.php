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
        .hero-gradient { background: linear-gradient(to bottom, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.4) 50%, rgba(0,0,0,0.8) 100%); }
        .logo-float { animation: floating 3s ease-in-out infinite; }
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        .logo-pop-glitch { animation: popGlitch 1s cubic-bezier(0.25, 1, 0.5, 1) forwards; }
        @keyframes popGlitch {
            0% { transform: scale(0) skewX(20deg); opacity: 0; filter: drop-shadow(-10px 0 0 #0ff) drop-shadow(10px 0 0 #f0f); }
            40% { transform: scale(1.2) skewX(-10deg); opacity: 1; filter: drop-shadow(10px 0 0 #0ff) drop-shadow(-10px 0 0 #f0f); }
            60% { transform: scale(0.9) skewX(5deg); filter: none; }
            80% { transform: scale(1.05) skewX(0deg); }
            100% { transform: scale(1); opacity: 1; }
        }
        .modal-open { overflow: hidden; }

        .modal-scroll::-webkit-scrollbar { width: 8px; }
        .modal-scroll::-webkit-scrollbar-track { background: #fff7ed; border-radius: 10px; }
        .modal-scroll::-webkit-scrollbar-thumb { background: #fdba74; border-radius: 10px; }
    </style>
</head>
<body class="bg-orange-50 text-gray-800 overflow-x-hidden">

    <nav class="bg-orange-600 text-white p-4 shadow-2xl sticky top-0 z-50 border-b border-orange-500">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#beranda" class="flex items-center gap-3 group">
                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-md text-xl transition-transform duration-300 group-hover:rotate-12 group-hover:scale-110">🍜</div>
                <div class="flex flex-col text-white">
                    <span class="text-xl font-extrabold leading-none tracking-tight group-hover:text-orange-200 transition-colors duration-300 drop-shadow-md">MIE AYAM</span>
                    <span class="text-[10px] font-bold text-orange-200 tracking-[0.2em] uppercase">Pak Sabar Menanti</span>
                </div>
            </a>
            <div class="flex items-center gap-10">
                <ul class="hidden lg:flex space-x-8 font-semibold text-sm">
                    <li><a href="#beranda" class="inline-block hover:text-orange-200 transition-all duration-300 hover:-translate-y-1 hover:scale-110">Beranda</a></li>
                    <li><a href="#cerita" class="inline-block hover:text-orange-200 transition-all duration-300 hover:-translate-y-1 hover:scale-110">Kisah Kami</a></li>
                    <li><a href="#menu" class="inline-block hover:text-orange-200 transition-all duration-300 hover:-translate-y-1 hover:scale-110">Menu Andalan</a></li>
                    <li><a href="#testimoni" class="inline-block hover:text-orange-200 transition-all duration-300 hover:-translate-y-1 hover:scale-110">Testimoni</a></li>
                    <li><a href="#lokasi" class="inline-block hover:text-orange-200 transition-all duration-300 hover:-translate-y-1 hover:scale-110">Lokasi Kami</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header id="beranda" class="relative min-h-[90vh] flex items-center justify-center bg-cover bg-center bg-no-repeat px-4" style="background-image: url('{{ asset('images/mie_ayam.jpg') }}');">
        <div class="absolute inset-0 hero-gradient"></div>
        <div class="relative z-10 text-center max-w-4xl" data-aos="fade-up">
            <div class="logo-float mx-auto w-max mb-8">
                <img src="{{ asset('images/logo_mie.jpg') }}" alt="Logo Besar" class="h-32 md:h-48 w-auto object-contain cursor-pointer logo-pop-glitch transition-all duration-500 hover:scale-110 hover:drop-shadow-[0_0_25px_#f97316]">
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
                </div>
                <div class="p-4 flex flex-col flex-grow">
                    <h4 class="font-bold text-base md:text-xl mb-1 text-gray-800 line-clamp-1" title="{{ $menu->nama_menu }}">{{ $menu->nama_menu }}</h4>
                    <p class="text-gray-500 mb-4 text-xs md:text-sm line-clamp-2 flex-grow">{{ $menu->deskripsi }}</p>
                    <div class="flex flex-col mt-auto gap-3">
                        <span class="font-extrabold text-orange-600 text-lg md:text-xl italic">Rp {{ number_format($menu->harga, 0, ',', '.') }}</span>
                        <button onclick="bukaModalPesan('{{ $menu->nama_menu }}', {{ $menu->harga }})" class="bg-orange-50 border border-orange-200 text-orange-600 px-3 py-2.5 rounded-xl font-bold text-xs md:text-sm hover:bg-orange-600 hover:text-white hover:border-orange-600 transition-all text-center w-full shadow-sm">
                            Pesan
                        </button>
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
                        <div><h5 class="font-bold text-gray-800 text-sm">Nanda Adi</h5><p class="text-xs text-gray-500">Local Guide</p></div>
                    </div>
                </div>
                <div data-aos="zoom-in" data-aos-delay="300" class="bg-white p-6 rounded-3xl shadow-sm border border-orange-100 flex flex-col justify-between hover:-translate-y-2 transition-transform">
                    <div>
                        <div class="flex text-yellow-400 mb-4 text-sm">★★★★★</div>
                        <p class="text-gray-700 italic mb-6 leading-relaxed text-sm">"Makanannya enak & bapaknya ramah banget ngelayaninnya. Walaupun kelihatannya sederhana, tapi rasanya bintang lima. Porsinya juga bikin kenyang. Sukses terus!"</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-pink-200 rounded-full flex items-center justify-center font-bold text-pink-700">K</div>
                        <div><h5 class="font-bold text-gray-800 text-sm">Kim Rherhe</h5><p class="text-xs text-gray-500">14 foto</p></div>
                    </div>
                </div>
                <div data-aos="zoom-in" data-aos-delay="400" class="bg-white p-6 rounded-3xl shadow-sm border border-orange-100 flex flex-col justify-between hover:-translate-y-2 transition-transform">
                    <div>
                        <div class="flex text-yellow-400 mb-4 text-sm">★★★★★</div>
                        <p class="text-gray-700 italic mb-6 leading-relaxed text-sm">"Selalu puas makan di sini. Makanan bintang 5, layanannya juga memuaskan. Porsinya pas buat ganjal perut, tempatnya nyaman buat makan santai. Recommended!"</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-blue-200 rounded-full flex items-center justify-center font-bold text-blue-700">A</div>
                        <div><h5 class="font-bold text-gray-800 text-sm">Adi Rubiyanto</h5><p class="text-xs text-gray-500">Local Guide</p></div>
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
        <p>© 2026 Mie Ayam Pak Sabar Menanti. Dikembangkan dengan ❤️ oleh Sir Rangga.</p>
    </footer>


    <div id="modalPesan" class="fixed inset-0 z-[100] hidden bg-black/60 backdrop-blur-sm flex items-center justify-center p-4 opacity-0 transition-opacity duration-300">

        <div class="bg-orange-50/95 w-full max-w-4xl rounded-[2rem] shadow-2xl relative transform scale-95 transition-transform duration-300 max-h-[95vh] overflow-y-auto modal-scroll" id="modalContent">

            <button onclick="tutupModal()" class="absolute top-4 right-4 bg-white text-gray-500 hover:text-red-500 hover:bg-red-50 rounded-full w-10 h-10 flex items-center justify-center font-bold text-xl shadow-sm transition-all z-10">
                ×
            </button>

            <div id="viewFormPemesanan" class="p-6 md:p-10 block">
                <div class="text-center mb-8">
                    <h3 class="text-3xl font-extrabold text-gray-800 mb-2">Formulir Pemesanan</h3>
                    <p class="text-gray-500 text-sm">Pilih menu, tentukan jumlah, dan kirim pesanan Anda langsung ke Pak Sabar!</p>
                    <div class="w-16 h-1 bg-orange-500 mx-auto rounded-full mt-4"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">

                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-orange-100 flex flex-col h-full">
                        <h4 class="text-lg font-bold text-gray-800 mb-5 flex items-center gap-2">
                            <span class="text-xl">🍜</span> Detail Pesanan
                        </h4>

                        <input type="hidden" id="modalMenuPrice" value="0">

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2 text-sm">Menu Terpilih</label>
                            <input type="text" id="modalMenuName" class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-100 text-gray-700 font-semibold focus:outline-none" readonly>
                        </div>

                        <div id="noodleTypeWrapper" class="mb-4 hidden transition-all duration-300">
                            <label class="block text-gray-700 font-bold mb-2 text-sm">Pilihan Mie</label>
                            <select id="modalNoodleType" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-orange-500 outline-none bg-white cursor-pointer">
                                <option value="Sesuai Standar Menu">Sesuai Standar Menu</option>
                                <option value="Mie Kuning & Bihun (Campur)">Mie Kuning & Bihun (Campur)</option>
                                <option value="Mie Kuning Saja">Mie Kuning Saja</option>
                                <option value="Bihun Saja">Bihun Saja</option>
                                <option value="Tanpa Mie (Kosongan)">Tanpa Mie (Kosongan)</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2 text-sm">Jumlah Mangkok / Porsi</label>
                            <div class="flex items-center">
                                <button type="button" onclick="ubahQtyModal(-1)" class="bg-orange-100 text-orange-700 px-5 py-3 rounded-l-xl font-bold hover:bg-orange-200 transition-colors text-lg">-</button>
                                <input type="number" id="modalQty" value="1" min="1" class="w-16 text-center px-2 py-3 border-y border-gray-200 focus:outline-none bg-white font-bold text-lg" readonly>
                                <button type="button" onclick="ubahQtyModal(1)" class="bg-orange-100 text-orange-700 px-5 py-3 rounded-r-xl font-bold hover:bg-orange-200 transition-colors text-lg">+</button>
                            </div>
                        </div>

                        <div class="mb-5">
                            <label class="block text-gray-700 font-bold mb-2 text-sm">Catatan Khusus (Opsional)</label>
                            <input type="text" id="modalNote" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-orange-500 outline-none">
                        </div>

                        <div class="mb-4 pt-4 border-t border-gray-100">
                            <label class="block text-gray-700 font-bold mb-2 text-sm">Metode Penyajian</label>
                            <select id="modalOrderType" onchange="toggleMejaInput()" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-orange-500 outline-none bg-white cursor-pointer">
                                <option value="Makan di Tempat">Makan di Tempat</option>
                                <option value="Bungkus">Bungkus / Bawa Pulang</option>
                            </select>
                        </div>

                        <div id="tableNumberWrapper" class="transition-all duration-300">
                            <label class="block text-gray-700 font-bold mb-2 text-sm">Nomor Meja</label>
                            <input type="text" id="modalCustomerTable" placeholder="Misal: Meja 5" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-orange-500 outline-none">
                        </div>
                    </div>

                    <div class="flex flex-col h-full justify-between gap-6">

                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-orange-100">
                            <h4 class="text-lg font-bold text-gray-800 mb-5 flex items-center gap-2">
                                <span class="text-xl">👤</span> Identitas & Pembayaran
                            </h4>

                            <div class="mb-4">
                                <label class="block text-gray-700 font-bold mb-2 text-sm">Nama Anda</label>
                                <input type="text" id="modalCustomerName" placeholder="Nama pemesan" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-orange-500 outline-none">
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 font-bold mb-2 text-sm">Nomor WhatsApp</label>
                                <input type="tel" id="modalCustomerWA" placeholder="Misal: 08123456789" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-orange-500 outline-none">
                            </div>

                            <div>
                                <label class="block text-gray-700 font-bold mb-2 text-sm">Metode Pembayaran</label>
                                <select id="modalPaymentMethod" class="w-full px-4 py-3 rounded-xl border border-orange-300 focus:ring-2 focus:ring-orange-500 outline-none bg-orange-50 font-bold text-orange-700 cursor-pointer">
                                    <option value="Tunai">Tunai / Bayar di Kasir</option>
                                    <option value="QRIS">QRIS / E-Wallet</option>
                                </select>
                            </div>
                        </div>

                        <div class="bg-orange-600 p-6 rounded-2xl shadow-md text-white mt-auto">
                            <div class="flex justify-between items-center mb-6">
                                <span class="text-base font-medium opacity-90">Total Pembayaran:</span>
                                <span id="modalTotalPrice" class="text-2xl md:text-3xl font-black tracking-tight">Rp 0</span>
                            </div>
                            <button type="button" onclick="prosesPesanan()" class="w-full bg-white text-orange-600 py-3.5 rounded-xl text-lg font-bold hover:bg-orange-50 hover:scale-[1.02] transition-transform shadow-sm">
                                Lanjutkan Pesanan
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <div id="viewQRIS" class="p-6 md:p-10 hidden text-center">
                <div class="mb-6">
                    <h3 class="text-3xl font-extrabold text-gray-800 mb-2">Selesaikan Pembayaran</h3>
                    <p class="text-gray-500 text-sm">Silakan scan kode QRIS di bawah ini menggunakan M-Banking atau E-Wallet Anda.</p>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-md border-2 border-orange-200 inline-block mb-6 relative">
                    <img src="{{ asset('images/qris.jpg') }}" alt="QRIS Warung Pak Sabar" class="w-48 h-48 object-cover rounded-xl mx-auto mb-4 border-4 border-orange-100 shadow-sm">
                    <p class="font-bold text-lg text-gray-800">bayarnya disini ya kak 🥰</p>
                    <p class="text-orange-600 font-black text-2xl mt-2" id="qrisTotalAmmount">Rp 0</p>
                </div>

                <div class="bg-orange-100 border border-orange-200 p-4 rounded-xl max-w-md mx-auto mb-8">
                    <p class="text-sm text-orange-800 mb-1">Kode Pesanan Unik Anda:</p>
                    <p class="text-3xl font-black text-orange-600 tracking-widest" id="displayOrderCode">PS-0000</p>
                    <p class="text-xs text-orange-600 mt-2 font-medium" id="qrisInstructionText">*Instruksi akan muncul di sini</p>
                </div>

                <div class="max-w-md mx-auto flex gap-4">
                    <button type="button" onclick="kembaliKeForm()" class="w-1/3 bg-gray-200 text-gray-700 py-3.5 rounded-xl font-bold hover:bg-gray-300 transition-colors">
                        Kembali
                    </button>
                    <button type="button" onclick="kirimWAFinal()" class="w-2/3 bg-green-500 text-white py-3.5 rounded-xl text-lg font-bold hover:bg-green-600 hover:scale-[1.02] transition-transform shadow-md flex justify-center items-center gap-2">
                        <span>💬</span> Konfirmasi via WA
                    </button>
                </div>
            </div>

        </div>
    </div>

    <div id="modalPeringatan" class="fixed inset-0 z-[110] hidden bg-black/60 backdrop-blur-sm flex items-center justify-center p-4 opacity-0 transition-opacity duration-300">
        <div class="bg-white w-full max-w-3xl rounded-[2rem] shadow-2xl relative transform scale-95 transition-transform duration-300" id="modalPeringatanContent">

            <button onclick="tutupModalPeringatan()" class="absolute top-4 right-4 bg-orange-100 text-orange-600 hover:text-red-500 rounded-full w-10 h-10 font-bold text-xl z-10">×</button>

            <div class="grid grid-cols-1 md:grid-cols-5 overflow-hidden rounded-[2rem]">
                <div class="relative h-56 md:h-auto md:col-span-2 bg-orange-50 p-6 flex items-center justify-center">
                    <img src="{{ asset('images/peringatan.jpg') }}" alt="Peringatan" class="max-w-full max-h-full object-contain drop-shadow-md">
                </div>

                <div class="p-8 md:p-10 md:col-span-3 flex flex-col justify-center text-left bg-white">
                    <h3 id="judulPeringatan" class="text-2xl font-extrabold text-gray-800 mb-4">Duh, Maaf Banget Kak! 🙏</h3>
                    <div id="isiPeringatan" class="text-gray-600 text-sm mb-8 leading-relaxed">
                        </div>
                    <button onclick="tutupModalPeringatan()" class="w-full bg-orange-600 text-white py-3.5 rounded-xl font-bold hover:bg-orange-700 shadow-md">
                        Siap, Lengkapi Sekarang!
                    </button>
                </div>
            </div>
        </div>
    </div>

            <div class="grid grid-cols-1 md:grid-cols-5 overflow-hidden rounded-[2rem]">

                <div class="relative h-64 md:h-auto md:col-span-2 bg-orange-50 p-6 flex items-center justify-center">
                    <img src="{{ asset('images/peringatan.jpg') }}" alt="Peringatan Pak Sabar" class="max-w-full max-h-full object-contain drop-shadow-md">
                </div>

                <div class="p-8 md:p-10 md:col-span-3 flex flex-col justify-center text-left bg-white">
                    <h3 class="text-2xl font-extrabold text-gray-800 mb-4">Duh, Maaf Banget Kak! 🙏</h3>
                    <div class="text-gray-600 text-sm mb-8 space-y-3 leading-relaxed">
                        <p>Pak Sabar butuh sedikit bantuan nih. Biar pesanannya nggak ketuker dan cepat disiapkan, tolong lengkapi data berikut di formulir ya:</p>
                        <ul class="list-disc list-inside font-semibold text-orange-600 ml-2">
                            <li>Nama Pemesan</li>
                            <li>Nomor WhatsApp</li>
                        </ul>
                        <p>Pak Sabar tunggu pesanan lengkapnya! 👨‍🍳</p>
                    </div>
                    <button onclick="tutupModalPeringatan()" class="w-full bg-orange-600 text-white py-3.5 rounded-xl font-bold hover:bg-orange-700 shadow-md transition-all">
                        Siap, Lengkapi Sekarang!
                    </button>
                </div>

            </div>
        </div>
    </div>

    <script>
        const modal = document.getElementById('modalPesan');
        const modalContent = document.getElementById('modalContent');
        const modalPeringatan = document.getElementById('modalPeringatan');
        const modalPeringatanContent = document.getElementById('modalPeringatanContent');
        const body = document.body;

        const viewForm = document.getElementById('viewFormPemesanan');
        const viewQRIS = document.getElementById('viewQRIS');

        let globalWAMessage = "";

        function toggleMejaInput() {
            const orderType = document.getElementById('modalOrderType').value;
            const tableWrapper = document.getElementById('tableNumberWrapper');
            if (orderType === 'Makan di Tempat') {
                tableWrapper.classList.remove('hidden');
            } else {
                tableWrapper.classList.add('hidden');
                document.getElementById('modalCustomerTable').value = '';
            }
        }

        function bukaModalPesan(namaMenu, hargaMenu) {
            viewForm.classList.remove('hidden');
            viewForm.classList.add('block');
            viewQRIS.classList.remove('block');
            viewQRIS.classList.add('hidden');

            document.getElementById('modalMenuName').value = namaMenu;
            document.getElementById('modalMenuPrice').value = hargaMenu;
            document.getElementById('modalQty').value = 1;
            document.getElementById('modalNoodleType').selectedIndex = 0;
            document.getElementById('modalOrderType').selectedIndex = 0;
            document.getElementById('modalPaymentMethod').selectedIndex = 0;
            document.getElementById('modalNote').value = "";

            toggleMejaInput();

            const noodleWrapper = document.getElementById('noodleTypeWrapper');
            if (namaMenu.toLowerCase().includes('bakso kuah')) {
                noodleWrapper.classList.remove('hidden');
            } else {
                noodleWrapper.classList.add('hidden');
            }

            const noteInput = document.getElementById('modalNote');
            let menuLower = namaMenu.toLowerCase();

            if (menuLower.includes('es') || menuLower.includes('jeruk') || menuLower.includes('teh') || menuLower.includes('minuman') || menuLower.includes('kopi')) {
                noteInput.placeholder = "Misal: Esnya sedikit, gulanya dipisah...";
            } else if (menuLower.includes('bakso')) {
                noteInput.placeholder = "Misal: Tanpa seledri, kuah diperbanyak...";
            } else if (menuLower.includes('mie')) {
                noteInput.placeholder = "Misal: Ayamnya dipisah, jangan pakai daun bawang...";
            } else if (menuLower.includes('kerupuk') || menuLower.includes('pangsit')) {
                noteInput.placeholder = "Misal: Tolong dibungkus plastik terpisah...";
            } else {
                noteInput.placeholder = "Misal: Pedas sedang, tanpa kecap...";
            }

            hitungTotalModal();

            modal.classList.remove('hidden');
            body.classList.add('modal-open');

            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modalContent.classList.remove('scale-95');
                modalContent.classList.add('scale-100');
            }, 10);
        }

        function tutupModal() {
            modal.classList.add('opacity-0');
            modalContent.classList.remove('scale-100');
            modalContent.classList.add('scale-95');

            setTimeout(() => {
                modal.classList.add('hidden');
                body.classList.remove('modal-open');
            }, 300);
        }

        // FUNGSI BARU: Membuka Modal Peringatan
       function bukaModalPeringatan(tipeError) {
            const judul = document.getElementById('judulPeringatan');
            const isi = document.getElementById('isiPeringatan');

            if (tipeError === 'identitas') {
                judul.innerText = "Duh, Maaf Banget Kak! 🙏";
                isi.innerHTML = `
                    <p>Pak Sabar butuh sedikit bantuan nih. Biar pesanannya nggak ketuker, tolong lengkapi data berikut ya:</p>
                    <ul class="list-disc list-inside font-semibold text-orange-600 mt-2">
                        <li>Nama Pemesan</li>
                        <li>Nomor WhatsApp</li>
                    </ul>
                `;
            } else if (tipeError === 'meja') {
                judul.innerText = "Satu Lagi Ketinggalan! 🪑";
                isi.innerHTML = `
                    <p>Karena Kakak pilih <b>Makan di Tempat</b>, Pak Sabar perlu tahu Kakak duduk di mana.</p>
                    <p class="mt-2 text-orange-600 font-semibold">Tolong isi Nomor Meja Kakak di formulir ya! 🍜</p>
                `;
            }

            modalPeringatan.classList.remove('hidden');
            setTimeout(() => {
                modalPeringatan.classList.remove('opacity-0');
                modalPeringatanContent.classList.remove('scale-95');
                modalPeringatanContent.classList.add('scale-100');
            }, 10);
        }

        // FUNGSI BARU: Menutup Modal Peringatan
        function tutupModalPeringatan() {
            modalPeringatan.classList.add('opacity-0');
            modalPeringatanContent.classList.remove('scale-100');
            modalPeringatanContent.classList.add('scale-95');

            setTimeout(() => {
                modalPeringatan.classList.add('hidden');
            }, 300);
        }

        function ubahQtyModal(delta) {
            let input = document.getElementById('modalQty');
            let newVal = parseInt(input.value) + delta;
            if (newVal >= 1) {
                input.value = newVal;
                hitungTotalModal();
            }
        }

        function hitungTotalModal() {
            let harga = parseInt(document.getElementById('modalMenuPrice').value);
            let qty = parseInt(document.getElementById('modalQty').value);
            let total = harga * qty;

            let formatter = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0 });
            document.getElementById('modalTotalPrice').innerText = formatter.format(total);
            document.getElementById('qrisTotalAmmount').innerText = formatter.format(total);
        }

        function prosesPesanan() {
            let menuName = document.getElementById('modalMenuName').value;
            let harga = parseInt(document.getElementById('modalMenuPrice').value);
            let qty = document.getElementById('modalQty').value;
            let pilihanMie = document.getElementById('modalNoodleType').value;
            let catatan = document.getElementById('modalNote').value;
            let nama = document.getElementById('modalCustomerName').value;
            let noWA = document.getElementById('modalCustomerWA').value;
            let orderType = document.getElementById('modalOrderType').value;
            let meja = document.getElementById('modalCustomerTable').value;
            let paymentMethod = document.getElementById('modalPaymentMethod').value;

            // Validasi Data
          // Validasi Nama dan WA
            if (nama.trim() === "" || noWA.trim() === "") {
                bukaModalPeringatan('identitas');
                return;
            }

            // Validasi Nomor Meja
            if (orderType === 'Makan di Tempat' && meja.trim() === "") {
                bukaModalPeringatan('meja');
                return;
            }

            if (orderType === 'Makan di Tempat' && meja.trim() === "") {
                alert("Mohon isi Nomor Meja untuk pesanan Makan di Tempat.");
                return;
            }

            let totalFormatted = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0 }).format(harga * qty);

            // LOGIKA BARU: KODE PESANAN BERDASARKAN NAMA + 2 ANGKA ACAK
            // Mengambil kata pertama dari nama pelanggan dan mengubahnya jadi huruf kapital
            let namaPanggilan = nama.trim().split(' ')[0].toUpperCase();
            let angkaAcak = Math.floor(10 + Math.random() * 90); // Menghasilkan 2 angka acak (10-99)
            let orderCode = namaPanggilan + "-" + angkaAcak;

            // Susun Teks WhatsApp
            let text = `*PESANAN BARU - ${orderType.toUpperCase()}*%0A`;
            text += `🔖 *Kode Pesanan:* ${orderCode}%0A%0A`;
            text += `👤 *Nama:* ${nama}%0A`;
            text += `📱 *No. WA:* ${noWA}%0A`;

            if (orderType === 'Makan di Tempat') {
                text += `📍 *Nomor Meja:* ${meja}%0A`;
            }
            text += `💳 *Pembayaran:* ${paymentMethod}%0A%0A`;

            text += `*Detail Pesanan:*%0A`;
            text += `- Menu: ${menuName}%0A`;
            text += `- Jumlah: ${qty} porsi%0A`;

            const noodleWrapper = document.getElementById('noodleTypeWrapper');
            if (!noodleWrapper.classList.contains('hidden') && pilihanMie !== "Sesuai Standar Menu") {
                text += `- Jenis Mie: ${pilihanMie}%0A`;
            }
            if (catatan.trim() !== "") text += `- Catatan: ${catatan}%0A`;
            text += `%0A💰 *TOTAL BAYAR: ${totalFormatted}*`;

            globalWAMessage = text;

            if (paymentMethod === 'Tunai') {
                kirimWAFinal();
            } else {
                // Tampilkan Kode Pesanan di layar QRIS
                document.getElementById('displayOrderCode').innerText = orderCode;

                // LOGIKA BARU: TEKS INSTRUKSI DINAMIS
                let infoText = document.getElementById('qrisInstructionText');
                if (orderType === 'Makan di Tempat') {
                    infoText.innerText = `*Sebutkan kode ini kepada kasir/Pak Sabar untuk verifikasi pembayaran ${meja}.`;
                } else {
                    infoText.innerText = "*Tunjukkan kode ini kepada kasir/Pak Sabar saat mengambil pesanan bungkus Anda.";
                }

                viewForm.classList.remove('block');
                viewForm.classList.add('hidden');
                viewQRIS.classList.remove('hidden');
                viewQRIS.classList.add('block');
            }
        }

        function kembaliKeForm() {
            viewQRIS.classList.remove('block');
            viewQRIS.classList.add('hidden');
            viewForm.classList.remove('hidden');
            viewForm.classList.add('block');
        }

        function kirimWAFinal() {
            window.open(`https://wa.me/6281234567890?text=${globalWAMessage}`, '_blank');
            tutupModal();
        }
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init({ duration: 1000, once: true });</script>
</body>
</html>
