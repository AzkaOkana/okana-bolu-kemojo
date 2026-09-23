<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Okana Bolu Kemojo - Khas Kepulauan Riau') ?></title>
    
    <!-- Meta SEO -->
    <meta name="description" content="Okana Bolu Kemojo - Kuliner artisan kue bolu kemojo otentik khas Kepulauan Riau dengan bentuk kelopak bunga kemojo, aroma daun pandan wangi asli, dan tekstur legit lembut.">
    
    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brandPrimary: '#4F46E5',
                        brandPrimaryHover: '#4338CA',
                        brandAccent: '#FBBF24',
                        brandAccentHover: '#F59E0B',
                        brandDark: '#1E1B4B',
                        brandSoft: '#EEF2FF',
                        kemojoGreen: '#15803D',
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <style>
        body {
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
        }
        .glass-nav {
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            background-color: rgba(255, 255, 255, 0.90);
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen flex flex-col antialiased selection:bg-brandPrimary selection:text-white">

    <!-- Navigation Header (Glassmorphism) -->
    <header class="sticky top-0 z-50 glass-nav border-b border-indigo-100/70 shadow-sm transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                
                <!-- Logo & Brand Name -->
                <a href="<?= base_url('/') ?>" class="flex items-center gap-3.5 group">
                    <div class="w-12 h-12 rounded-2xl bg-gradient-to-tr from-brandPrimary via-indigo-600 to-brandAccent flex items-center justify-center text-white shadow-md shadow-indigo-500/20 group-hover:scale-105 transition-transform duration-300">
                        <!-- Floral / Kemojo Petal Icon -->
                        <svg class="w-7 h-7 text-amber-300 drop-shadow-sm" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C13.5 5 15.5 6.5 19 7C17.5 10 17.5 12.5 19 15.5C15.5 16 13.5 17.5 12 20.5C10.5 17.5 8.5 16 5 15.5C6.5 12.5 6.5 10 5 7C8.5 6.5 10.5 5 12 2Z"/>
                        </svg>
                    </div>
                    <div>
                        <div class="flex items-center gap-2">
                            <span class="font-extrabold text-xl sm:text-2xl tracking-tight text-brandDark">Okana</span>
                            <span class="bg-amber-100 text-amber-800 text-[10px] font-bold px-2 py-0.5 rounded-full border border-amber-300/60 uppercase tracking-wider">Artisan</span>
                        </div>
                        <p class="text-xs font-semibold text-brandPrimary tracking-wide flex items-center gap-1">
                            <span>Bolu Kemojo</span>
                            <span class="text-slate-400">•</span>
                            <span class="text-slate-500 font-normal">Khas Kepulauan Riau</span>
                        </p>
                    </div>
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden md:flex items-center space-x-1 lg:space-x-2">
                    <a href="<?= base_url('/') ?>" class="px-4 py-2 rounded-xl text-sm font-semibold text-slate-700 hover:text-brandPrimary hover:bg-brandSoft transition-colors">
                        Beranda
                    </a>
                    <a href="<?= base_url('/#katalog-menu') ?>" class="px-4 py-2 rounded-xl text-sm font-semibold text-slate-700 hover:text-brandPrimary hover:bg-brandSoft transition-colors">
                        Koleksi Varian
                    </a>
                    <a href="<?= base_url('/#tentang-kemojo') ?>" class="px-4 py-2 rounded-xl text-sm font-semibold text-slate-700 hover:text-brandPrimary hover:bg-brandSoft transition-colors">
                        Tentang Kemojo
                    </a>
                </nav>

                <!-- Action Button (Auth & Admin Area) -->
                <div class="hidden md:flex items-center gap-3">
                    <?php if (session()->get('isLoggedIn')): ?>
                        <!-- User Status Dropdown / Profile Badge -->
                        <div class="flex items-center gap-3 bg-slate-50 border border-slate-200/90 py-1.5 px-3 rounded-2xl">
                            <div class="w-8 h-8 rounded-xl <?= session()->get('role') === 'admin' ? 'bg-indigo-600 text-white' : 'bg-emerald-600 text-white' ?> flex items-center justify-center font-bold text-xs shadow-xs">
                                <?= strtoupper(substr(session()->get('name') ?? 'U', 0, 1)) ?>
                            </div>
                            <div class="text-left">
                                <p class="text-xs font-bold text-slate-800 leading-tight truncate max-w-[130px]">
                                    <?= esc(session()->get('name')) ?>
                                </p>
                                <span class="inline-block text-[10px] font-extrabold uppercase tracking-wider px-1.5 py-0.2 rounded-md <?= session()->get('role') === 'admin' ? 'bg-indigo-100 text-indigo-800' : 'bg-emerald-100 text-emerald-800' ?>">
                                    <?= session()->get('role') === 'admin' ? '👑 Admin' : '👤 Pelanggan' ?>
                                </span>
                            </div>
                        </div>

                        <?php if (session()->get('role') === 'admin'): ?>
                            <a href="<?= base_url('admin/menu') ?>" class="inline-flex items-center gap-2 px-3.5 py-2.5 rounded-xl border border-indigo-200 bg-white text-brandPrimary hover:bg-brandSoft hover:border-brandPrimary/40 text-xs font-bold transition-all shadow-sm">
                                <svg class="w-4 h-4 text-brandPrimary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <span>Panel Admin</span>
                            </a>
                        <?php endif; ?>

                        <!-- Tombol Keluar (Logout) -->
                        <a href="<?= base_url('logout') ?>" class="inline-flex items-center gap-1.5 px-3.5 py-2.5 rounded-xl border border-rose-200 bg-white hover:bg-rose-50 text-rose-600 text-xs font-bold transition-all shadow-xs" title="Keluar dari akun">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                            </svg>
                            <span>Keluar</span>
                        </a>

                    <?php else: ?>
                        <!-- Tombol Masuk / Login -->
                        <a href="<?= base_url('login') ?>" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl border border-slate-300 hover:border-brandPrimary bg-white text-slate-700 hover:text-brandPrimary text-xs sm:text-sm font-bold transition-all shadow-xs">
                            <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                            </svg>
                            <span>Masuk / Login</span>
                        </a>

                        <!-- Tombol Pesan Sekarang -->
                        <a href="<?= base_url('/#katalog-menu') ?>" class="inline-flex items-center gap-1.5 px-4 py-2.5 rounded-xl bg-brandPrimary hover:bg-brandPrimaryHover text-white text-xs sm:text-sm font-bold transition-all shadow-md shadow-indigo-500/20">
                            <span>Pesan Sekarang</span>
                            <svg class="w-4 h-4 text-brandAccent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>
                    <?php endif; ?>
                </div>

                <!-- Mobile Menu Button -->
                <div class="flex md:hidden items-center">
                    <button id="mobile-menu-btn" type="button" class="p-2 rounded-xl text-slate-600 hover:text-brandPrimary hover:bg-brandSoft focus:outline-none" aria-label="Toggle Navigation">
                        <svg id="hamburger-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu" class="hidden md:hidden border-t border-slate-100 bg-white/95 px-4 pt-3 pb-5 space-y-2">
            <a href="<?= base_url('/') ?>" class="block px-3 py-2 rounded-lg text-base font-semibold text-slate-700 hover:bg-brandSoft hover:text-brandPrimary">
                Beranda
            </a>
            <a href="<?= base_url('/#katalog-menu') ?>" class="block px-3 py-2 rounded-lg text-base font-semibold text-slate-700 hover:bg-brandSoft hover:text-brandPrimary">
                Koleksi Varian
            </a>
            <a href="<?= base_url('/#tentang-kemojo') ?>" class="block px-3 py-2 rounded-lg text-base font-semibold text-slate-700 hover:bg-brandSoft hover:text-brandPrimary">
                Tentang Kemojo
            </a>

            <div class="pt-3 border-t border-slate-100 flex flex-col gap-2">
                <?php if (session()->get('isLoggedIn')): ?>
                    <div class="p-3 rounded-xl bg-slate-50 border border-slate-200 flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-lg <?= session()->get('role') === 'admin' ? 'bg-indigo-600 text-white' : 'bg-emerald-600 text-white' ?> flex items-center justify-center font-bold text-xs">
                                <?= strtoupper(substr(session()->get('name') ?? 'U', 0, 1)) ?>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-slate-800"><?= esc(session()->get('name')) ?></p>
                                <span class="text-[10px] text-slate-500 font-semibold"><?= session()->get('role') === 'admin' ? 'Administrator' : 'Pelanggan' ?></span>
                            </div>
                        </div>
                        <a href="<?= base_url('logout') ?>" class="text-xs font-bold text-rose-600 hover:underline">
                            Keluar
                        </a>
                    </div>

                    <?php if (session()->get('role') === 'admin'): ?>
                        <a href="<?= base_url('admin/menu') ?>" class="flex items-center justify-center gap-2 px-4 py-2.5 rounded-xl border border-indigo-200 text-brandPrimary bg-brandSoft font-bold text-sm">
                            <span>Buka Panel Kelola Menu</span>
                        </a>
                    <?php endif; ?>
                <?php else: ?>
                    <a href="<?= base_url('login') ?>" class="flex items-center justify-center gap-2 px-4 py-2.5 rounded-xl border border-slate-300 text-slate-700 bg-white hover:bg-slate-50 font-bold text-sm">
                        <span>Masuk ke Akun</span>
                    </a>
                    <a href="<?= base_url('register') ?>" class="flex items-center justify-center gap-2 px-4 py-2.5 rounded-xl bg-brandPrimary text-white font-bold text-sm">
                        <span>Daftar Pelanggan Baru</span>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="flex-grow">
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Artisan Culinary Footer -->
    <footer class="bg-brandDark text-slate-300 pt-16 pb-10 border-t border-indigo-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 pb-12 border-b border-indigo-900/60">
                
                <!-- Col 1: Brand Info -->
                <div class="md:col-span-1 space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-brandPrimary to-brandAccent flex items-center justify-center text-white shadow-md">
                            <svg class="w-6 h-6 text-amber-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C13.5 5 15.5 6.5 19 7C17.5 10 17.5 12.5 19 15.5C15.5 16 13.5 17.5 12 20.5C10.5 17.5 8.5 16 5 15.5C6.5 12.5 6.5 10 5 7C8.5 6.5 10.5 5 12 2Z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-extrabold text-lg text-white tracking-tight">Okana Bolu Kemojo</h3>
                            <p class="text-xs text-brandAccent font-medium">Cita Rasa Khas Kepulauan Riau</p>
                        </div>
                    </div>
                    <p class="text-sm text-slate-400 leading-relaxed">
                        Menghadirkan kelezatan autentik kue bolu kemojo khas Melayu Kepulauan Riau. Diolah dengan santan segar pilihan, daun suji pandan murni, serta dicetak dalam bentuk kelopak bunga kemojo yang sakral.
                    </p>
                    <div class="flex items-center gap-2 pt-1">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-indigo-900/70 border border-indigo-700/50 text-xs font-medium text-amber-300">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                            100% Halal & Bahan Alami
                        </span>
                    </div>
                </div>

                <!-- Col 2: Kategori Populer -->
                <div class="space-y-4">
                    <h4 class="text-white font-bold text-base tracking-wide flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-brandAccent"></span>
                        Varian Populer
                    </h4>
                    <ul class="space-y-2 text-sm text-slate-400">
                        <li><a href="<?= base_url('/?category=Pandan#katalog-menu') ?>" class="hover:text-amber-300 transition-colors">Bolu Kemojo Pandan Wangi</a></li>
                        <li><a href="<?= base_url('/?category=Keju#katalog-menu') ?>" class="hover:text-amber-300 transition-colors">Bolu Kemojo Keju Cheddar</a></li>
                        <li><a href="<?= base_url('/?category=Cokelat#katalog-menu') ?>" class="hover:text-amber-300 transition-colors">Bolu Kemojo Dark Chocolate</a></li>
                        <li><a href="<?= base_url('/?category=Durian#katalog-menu') ?>" class="hover:text-amber-300 transition-colors">Bolu Kemojo Durian Musang King</a></li>
                        <li><a href="<?= base_url('/?category=Original#katalog-menu') ?>" class="hover:text-amber-300 transition-colors">Bolu Kemojo Klasik Melayu</a></li>
                    </ul>
                </div>

                <!-- Col 3: Lokasi & Dapur Produksi -->
                <div class="space-y-4">
                    <h4 class="text-white font-bold text-base tracking-wide flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-brandAccent"></span>
                        Dapur & Gerai Utama
                    </h4>
                    <div class="text-sm text-slate-400 space-y-2.5">
                        <p class="flex items-start gap-2.5">
                            <svg class="w-5 h-5 text-indigo-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span>Jl. Hang Tuah No. 18, Tepi Laut, Kota Tanjungpinang, Kepulauan Riau 29111</span>
                        </p>
                        <p class="flex items-center gap-2.5">
                            <svg class="w-5 h-5 text-indigo-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>Buka Setiap Hari: 07.30 - 21.00 WIB</span>
                        </p>
                        <p class="flex items-center gap-2.5">
                            <svg class="w-5 h-5 text-indigo-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <span>WhatsApp: 0812-7000-8899</span>
                        </p>
                    </div>
                </div>

                <!-- Col 4: Quick Navigation -->
                <div class="space-y-4">
                    <h4 class="text-white font-bold text-base tracking-wide flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-brandAccent"></span>
                        Akses Cepat
                    </h4>
                    <ul class="space-y-2 text-sm text-slate-400">
                        <li><a href="<?= base_url('/') ?>" class="hover:text-amber-300 transition-colors">Katalog Menu Utama</a></li>
                        <li><a href="<?= base_url('login') ?>" class="hover:text-amber-300 transition-colors">Masuk / Login Akun</a></li>
                        <li><a href="<?= base_url('admin/menu') ?>" class="hover:text-amber-300 transition-colors">Dashboard Admin</a></li>
                        <li><a href="<?= base_url('admin/menu/create') ?>" class="hover:text-amber-300 transition-colors">Tambah Data Menu Baru</a></li>
                    </ul>
                    <div class="p-3.5 rounded-xl bg-indigo-900/40 border border-indigo-800/60 text-xs text-slate-300">
                        <p class="font-semibold text-amber-300 mb-1">Oleh-Oleh Khas Riau</p>
                        <p class="text-slate-400">Menerima pesanan hampers pesta adat, pernikahan Melayu, dan hantaran resmi ke seluruh Nusantara.</p>
                    </div>
                </div>

            </div>

            <!-- Bottom Copyright & Signature -->
            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
                <p>&copy; <?= date('Y') ?> <strong class="text-slate-400 font-semibold">Okana Bolu Kemojo (Khas Kepulauan Riau)</strong>. Seluruh Hak Cipta Dilindungi.</p>
                <div class="flex items-center gap-2">
                    <span class="inline-block w-2 h-2 rounded-full bg-brandAccent"></span>
                    <span>Warisan Kuliner Autentik Melayu Nusantara</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Interactive JavaScript -->
    <script>
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const hamburgerIcon = document.getElementById('hamburger-icon');
        const closeIcon = document.getElementById('close-icon');

        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                const isHidden = mobileMenu.classList.contains('hidden');
                if (isHidden) {
                    mobileMenu.classList.remove('hidden');
                    hamburgerIcon.classList.add('hidden');
                    closeIcon.classList.remove('hidden');
                } else {
                    mobileMenu.classList.add('hidden');
                    hamburgerIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            });
        }
    </script>
</body>
</html>
