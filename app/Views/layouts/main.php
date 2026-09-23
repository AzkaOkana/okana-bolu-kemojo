<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Syauqi Bolu Kemojo - Khas Kepulauan Riau') ?></title>
    
    <!-- Meta SEO -->
    <meta name="description" content="Syauqi Bolu Kemojo - Kuliner khas Kepulauan Riau. Nikmati aneka varian bolu kemojo lembut, harum pandan asli, dipanggang segar setiap hari.">
    
    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brandPrimary: '#4F46E5',
                        brandPrimaryDark: '#3730A3',
                        brandAccent: '#FBBF24',
                        brandAccentDark: '#D97706',
                        restaurantDark: '#0F172A',
                        restaurantNavy: '#1E1B4B',
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>
<body class="bg-slate-100 text-slate-900 min-h-screen flex flex-col antialiased">

    <!-- Top Announcement Strip (Restaurant Style) -->
    <div class="bg-restaurantDark text-slate-300 text-xs py-2 px-4 border-b border-slate-800">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-2 text-center sm:text-left">
            <div class="flex items-center gap-2">
                <span class="bg-brandAccent text-slate-950 font-black text-[10px] px-2 py-0.5 rounded uppercase tracking-wider">OFFICIAL STORE</span>
                <span class="font-medium text-slate-300">Kuliner Tradisional Khas Kepulauan Riau • Gerai Batam & Tanjungpinang</span>
            </div>
            <div class="flex items-center gap-4 text-[11px] font-semibold">
                <span class="flex items-center gap-1 text-amber-400">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Buka 07.30 - 21.00 WIB
                </span>
                <span class="text-slate-600">|</span>
                <a href="https://wa.me/6281270008899" target="_blank" class="text-emerald-400 hover:text-emerald-300 flex items-center gap-1 font-bold">
                    <span>Order Cepat WhatsApp</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Solid Commercial Header -->
    <header class="bg-white border-b-2 border-slate-200 sticky top-0 z-50 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                
                <!-- Brand Logo (Bold Restaurant Style) -->
                <a href="<?= base_url('/') ?>" class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-brandPrimary rounded-lg flex items-center justify-center text-brandAccent shadow-sm">
                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C13.5 5 15.5 6.5 19 7C17.5 10 17.5 12.5 19 15.5C15.5 16 13.5 17.5 12 20.5C10.5 17.5 8.5 16 5 15.5C6.5 12.5 6.5 10 5 7C8.5 6.5 10.5 5 12 2Z"/>
                        </svg>
                    </div>
                    <div>
                        <span class="text-xl sm:text-2xl font-black tracking-tight text-slate-950 uppercase block leading-none">
                            SYAUQI <span class="text-brandPrimary">BOLU KEMOJO</span>
                        </span>
                        <span class="text-[11px] font-bold text-slate-500 tracking-wider uppercase block mt-1">
                            Khas Kepulauan Riau
                        </span>
                    </div>
                </a>

                <!-- Main Navigation -->
                <nav class="hidden lg:flex items-center space-x-1">
                    <a href="<?= base_url('/') ?>" class="px-4 py-2 font-bold text-sm text-slate-700 hover:text-brandPrimary hover:bg-slate-50 rounded-md transition-colors">
                        BERANDA
                    </a>
                    <a href="<?= base_url('/#menu-section') ?>" class="px-4 py-2 font-bold text-sm text-slate-700 hover:text-brandPrimary hover:bg-slate-50 rounded-md transition-colors">
                        DAFTAR MENU
                    </a>
                    <a href="<?= base_url('/#tentang-section') ?>" class="px-4 py-2 font-bold text-sm text-slate-700 hover:text-brandPrimary hover:bg-slate-50 rounded-md transition-colors">
                        TENTANG KEMOJO
                    </a>
                    <a href="<?= base_url('/#lokasi-section') ?>" class="px-4 py-2 font-bold text-sm text-slate-700 hover:text-brandPrimary hover:bg-slate-50 rounded-md transition-colors">
                        OUTLET & LOKASI
                    </a>
                </nav>

                <!-- Header Actions (Solid & High Contrast) -->
                <div class="hidden sm:flex items-center gap-3">
                    <?php if (session()->get('isLoggedIn')): ?>
                        <!-- User Info Pill -->
                        <div class="flex items-center gap-2 px-3 py-1.5 bg-slate-100 border border-slate-300 rounded-md text-xs font-bold">
                            <span class="w-6 h-6 rounded bg-brandPrimary text-white flex items-center justify-center font-black">
                                <?= strtoupper(substr(session()->get('name') ?? 'U', 0, 1)) ?>
                            </span>
                            <span class="text-slate-800"><?= esc(session()->get('name')) ?></span>
                            <span class="bg-brandAccent text-slate-900 px-1.5 py-0.5 rounded text-[10px] font-black uppercase">
                                <?= session()->get('role') === 'admin' ? 'ADMIN' : 'USER' ?>
                            </span>
                        </div>

                        <?php if (session()->get('role') === 'admin'): ?>
                            <a href="<?= base_url('admin/menu') ?>" class="px-4 py-2 bg-slate-900 hover:bg-slate-800 text-white text-xs font-bold rounded-md uppercase tracking-wider transition">
                                Dashboard Admin
                            </a>
                        <?php endif; ?>

                        <a href="<?= base_url('logout') ?>" class="px-3 py-2 border border-slate-300 hover:bg-rose-50 text-rose-700 text-xs font-bold rounded-md transition">
                            Keluar
                        </a>
                    <?php else: ?>
                        <!-- Login & Order Buttons -->
                        <a href="<?= base_url('login') ?>" class="px-4 py-2.5 border-2 border-slate-300 hover:border-slate-800 text-slate-800 hover:bg-slate-50 text-xs font-black uppercase tracking-wider rounded-md transition">
                            Masuk / Login
                        </a>
                        <a href="<?= base_url('/#menu-section') ?>" class="px-5 py-2.5 bg-brandPrimary hover:bg-brandPrimaryDark text-white text-xs font-black uppercase tracking-wider rounded-md shadow-sm transition">
                            Pesan Sekarang
                        </a>
                    <?php endif; ?>
                </div>

                <!-- Mobile Navigation Toggle -->
                <div class="flex lg:hidden items-center">
                    <button id="mobile-toggle" type="button" class="p-2 border border-slate-300 rounded-md text-slate-700 hover:bg-slate-100" aria-label="Menu">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>

            </div>
        </div>

        <!-- Mobile Drawer -->
        <div id="mobile-nav" class="hidden lg:hidden border-t border-slate-200 bg-white px-4 py-4 space-y-3">
            <a href="<?= base_url('/') ?>" class="block font-bold text-sm text-slate-800 py-1.5">BERANDA</a>
            <a href="<?= base_url('/#menu-section') ?>" class="block font-bold text-sm text-slate-800 py-1.5">DAFTAR MENU</a>
            <a href="<?= base_url('/#tentang-section') ?>" class="block font-bold text-sm text-slate-800 py-1.5">TENTANG KEMOJO</a>
            <a href="<?= base_url('/#lokasi-section') ?>" class="block font-bold text-sm text-slate-800 py-1.5">OUTLET & LOKASI</a>
            
            <div class="pt-3 border-t border-slate-200 flex flex-col gap-2">
                <?php if (session()->get('isLoggedIn')): ?>
                    <div class="p-2.5 bg-slate-100 rounded text-xs font-bold text-slate-800 flex items-center justify-between">
                        <span>Halo, <?= esc(session()->get('name')) ?> (<?= strtoupper(session()->get('role')) ?>)</span>
                        <a href="<?= base_url('logout') ?>" class="text-rose-600 font-black">KELUAR</a>
                    </div>
                    <?php if (session()->get('role') === 'admin'): ?>
                        <a href="<?= base_url('admin/menu') ?>" class="w-full text-center py-2 bg-slate-900 text-white font-bold text-xs uppercase rounded">
                            DASHBOARD KELOLA MENU
                        </a>
                    <?php endif; ?>
                <?php else: ?>
                    <a href="<?= base_url('login') ?>" class="w-full text-center py-2.5 border-2 border-slate-300 font-bold text-xs uppercase text-slate-800 rounded">
                        MASUK KE AKUN
                    </a>
                    <a href="<?= base_url('/#menu-section') ?>" class="w-full text-center py-2.5 bg-brandPrimary font-bold text-xs uppercase text-white rounded">
                        PESAN SEKARANG
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="flex-grow">
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Solid Commercial Footer -->
    <footer class="bg-restaurantDark text-slate-300 pt-16 pb-12 border-t-4 border-brandAccent">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 pb-12 border-b border-slate-800">
                
                <!-- Col 1: Identity -->
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-brandPrimary rounded flex items-center justify-center text-brandAccent font-black text-xl">
                            S
                        </div>
                        <div>
                            <span class="font-black text-lg text-white tracking-tight uppercase block leading-none">SYAUQI BOLU KEMOJO</span>
                            <span class="text-xs font-bold text-brandAccent block mt-0.5">Khas Kepulauan Riau</span>
                        </div>
                    </div>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        Produsen artisan resmi kue bolu kemojo otentik khas Kepulauan Riau. Dibuat dengan santan kelapa murni dan daun suji pandan pilihan dengan bentuk khas kelopak bunga kamboja.
                    </p>
                    <div class="inline-block bg-slate-800 px-3 py-1.5 rounded text-[11px] font-bold text-slate-300 border border-slate-700">
                        PIRT No. 2062171010345-26 • Halal MUI
                    </div>
                </div>

                <!-- Col 2: Kategori Menu -->
                <div class="space-y-3">
                    <h4 class="text-white font-black text-xs uppercase tracking-wider text-brandAccent">Menu Utama</h4>
                    <ul class="space-y-2 text-xs text-slate-400">
                        <li><a href="<?= base_url('/?category=Pandan#menu-section') ?>" class="hover:text-white transition">Bolu Kemojo Pandan Wangi</a></li>
                        <li><a href="<?= base_url('/?category=Keju#menu-section') ?>" class="hover:text-white transition">Bolu Kemojo Keju Cheddar</a></li>
                        <li><a href="<?= base_url('/?category=Cokelat#menu-section') ?>" class="hover:text-white transition">Bolu Kemojo Lava Chocolate</a></li>
                        <li><a href="<?= base_url('/?category=Durian#menu-section') ?>" class="hover:text-white transition">Bolu Kemojo Durian Asli</a></li>
                        <li><a href="<?= base_url('/?category=Original#menu-section') ?>" class="hover:text-white transition">Bolu Kemojo Tradisi Melayu</a></li>
                        <li><a href="<?= base_url('/?category=Paket#menu-section') ?>" class="hover:text-white transition">Paket Hampers 4 Rasa</a></li>
                    </ul>
                </div>

                <!-- Col 3: Gerai & Outlet -->
                <div class="space-y-3" id="lokasi-section">
                    <h4 class="text-white font-black text-xs uppercase tracking-wider text-brandAccent">Lokasi Outlet</h4>
                    <div class="text-xs text-slate-400 space-y-2">
                        <p>
                            <strong class="text-white block font-bold">Outlet Tanjungpinang:</strong>
                            Jl. Hang Tuah No. 18, Tepi Laut, Kota Tanjungpinang (Depan Pelabuhan Sri Bintan Pura)
                        </p>
                        <p>
                            <strong class="text-white block font-bold">Outlet Batam:</strong>
                            Komp. Ruko Nagoya Hill Blok G No. 5, Kota Batam
                        </p>
                        <p class="text-amber-400 font-semibold pt-1">
                            Buka Setiap Hari: 07.30 - 21.00 WIB
                        </p>
                    </div>
                </div>

                <!-- Col 4: Layanan Pemesanan -->
                <div class="space-y-3">
                    <h4 class="text-white font-black text-xs uppercase tracking-wider text-brandAccent">Layanan Pelanggan</h4>
                    <p class="text-xs text-slate-400">
                        Menerima pesanan untuk oleh-oleh wisata, rapat dinas, hajatan perkawinan, dan pengiriman harian se-Kepri & luar kota.
                    </p>
                    <a 
                        href="https://wa.me/6281270008899?text=Halo%20Syauqi%20Bolu%20Kemojo%2C%20saya%20mau%20pesan" 
                        target="_blank" 
                        class="inline-flex items-center justify-center gap-2 w-full py-3 px-4 bg-emerald-600 hover:bg-emerald-500 text-white font-black text-xs uppercase tracking-wider rounded transition"
                    >
                        <span>PESAN CEPAT VIA WHATSAPP</span>
                    </a>
                    <div class="pt-2">
                        <a href="<?= base_url('login') ?>" class="text-[11px] text-slate-500 hover:text-slate-300 block">
                            Akses Pengelola: <span class="underline">Login Dashboard Admin</span>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Bottom Copyright -->
            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
                <p>&copy; <?= date('Y') ?> <strong>SYAUQI BOLU KEMOJO</strong> • Khas Kepulauan Riau. Hak Cipta Dilindungi.</p>
                <p class="text-slate-400 font-semibold">Cita Rasa Otentik Melayu Pilihan Keluarga Indonesia</p>
            </div>
        </div>
    </footer>

    <script>
        const mobileToggle = document.getElementById('mobile-toggle');
        const mobileNav = document.getElementById('mobile-nav');
        if (mobileToggle && mobileNav) {
            mobileToggle.addEventListener('click', () => {
                mobileNav.classList.toggle('hidden');
            });
        }
    </script>
</body>
</html>
