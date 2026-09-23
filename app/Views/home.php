<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Promo Ticker Banner (Commercial Fast Food Style) -->
<div class="bg-brandAccent text-slate-950 font-black text-xs sm:text-sm py-2.5 px-4 text-center border-b border-amber-400 uppercase tracking-wider flex items-center justify-center gap-2">
    <span>🔥 PROMO OLEH-OLEH KHAS KEPRI:</span>
    <span class="font-extrabold">PESAN HARI INI, DIKIRIM FRESH LANGSUNG DARI OVEN! BUKA SETIAP HARI.</span>
</div>

<!-- =========================================================================
     FULL-WIDTH COMMERCIAL HERO BANNER (RESTAURANT POSTER STYLE)
     ========================================================================= -->
<section class="bg-gradient-to-r from-restaurantNavy via-slate-950 to-restaurantNavy text-white py-16 lg:py-24 border-b-4 border-brandAccent relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            
            <!-- Left Poster Headline & Content -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                
                <div class="inline-flex items-center gap-2 bg-brandPrimary/40 border border-indigo-400 px-3 py-1 rounded text-xs font-black uppercase tracking-widest text-brandAccent">
                    <span>OLEH-OLEH RESMI KHAS TANJUNGPINANG & BATAM</span>
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black uppercase tracking-tight leading-none text-white">
                    BOLU KEMOJO <br>
                    <span class="text-brandAccent">ASLI KEPULAUAN RIAU.</span>
                </h1>

                <p class="text-base sm:text-lg text-slate-300 font-medium max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                    Resep pusaka Melayu dengan sari perasan daun pandan suji murni dan santan kelapa segar. Dipanggang dalam cetakan kelopak bunga kemojo klasik dengan tekstur legit dan aroma harum khas tanah Kepri.
                </p>

                <!-- High Contrast Action Buttons -->
                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-3.5 pt-2">
                    <a 
                        href="#menu-section" 
                        class="w-full sm:w-auto px-8 py-4 bg-brandAccent hover:bg-brandAccentDark text-slate-950 font-black text-sm uppercase tracking-wider rounded-md shadow transition text-center"
                    >
                        LIHAT DAFTAR MENU & HARGA
                    </a>
                    <a 
                        href="https://wa.me/6281270008899?text=Halo%20Syauqi%20Bolu%20Kemojo%2C%20saya%20ingin%20memesan%20bolu%20kemojo" 
                        target="_blank" 
                        class="w-full sm:w-auto px-7 py-4 bg-emerald-600 hover:bg-emerald-500 text-white font-black text-sm uppercase tracking-wider rounded-md transition text-center"
                    >
                        PESAN CEPAT WHATSAPP
                    </a>
                </div>

                <!-- Commercial Bullet Points -->
                <div class="pt-4 grid grid-cols-3 gap-3 border-t border-slate-800 text-center lg:text-left">
                    <div>
                        <span class="block text-brandAccent font-black text-lg sm:text-xl">100%</span>
                        <span class="text-[11px] text-slate-400 font-bold uppercase">Pandan & Santan Murni</span>
                    </div>
                    <div>
                        <span class="block text-brandAccent font-black text-lg sm:text-xl">FRESH</span>
                        <span class="text-[11px] text-slate-400 font-bold uppercase">Dipanggang Tiap Hari</span>
                    </div>
                    <div>
                        <span class="block text-brandAccent font-black text-lg sm:text-xl">PIRT & HALAL</span>
                        <span class="text-[11px] text-slate-400 font-bold uppercase">Standar Higienis Teruji</span>
                    </div>
                </div>

            </div>

            <!-- Right Hero Billboard Graphic (Commercial Product Display) -->
            <div class="lg:col-span-5">
                <div class="border-4 border-slate-700 bg-slate-900 rounded-lg overflow-hidden shadow-2xl">
                    <div class="bg-brandPrimary text-white font-black text-xs px-4 py-2 uppercase tracking-widest flex items-center justify-between">
                        <span>MENU ANDALAN KAMI</span>
                        <span class="text-brandAccent">BEST SELLER</span>
                    </div>
                    <img 
                        src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=800&q=80" 
                        alt="Syauqi Bolu Kemojo Pandan Wangi" 
                        class="w-full h-72 sm:h-80 object-cover"
                    >
                    <div class="p-5 bg-slate-900 border-t border-slate-800">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="font-black text-lg text-white uppercase">BOLU KEMOJO PANDAN WANGI</h3>
                                <p class="text-xs text-slate-400 mt-0.5">Varian Legendaris Resep Tradisional Melayu</p>
                            </div>
                            <div class="text-right">
                                <span class="text-xs text-slate-400 font-bold block uppercase">Harga</span>
                                <span class="text-xl font-black text-brandAccent">Rp 35.000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- =========================================================================
     KATALOG MENU & TAB BAR FILTER (FITUR 1: RESTAURANT TAB BAR STYLE)
     ========================================================================= -->
<section id="menu-section" class="py-14 sm:py-18 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Section Header -->
    <div class="border-b-4 border-slate-900 pb-4 mb-8 flex flex-col md:flex-row md:items-end justify-between gap-4">
        <div>
            <span class="text-brandPrimary font-black text-xs uppercase tracking-widest block mb-1">
                KULINER OLEH-OLEH KHAS KEPRI
            </span>
            <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight uppercase">
                DAFTAR MENU & HARGA
            </h2>
            <p class="text-sm font-semibold text-slate-600 mt-1">
                Pilih tab kategori di bawah untuk menyaring varian Bolu Kemojo favorit Anda.
            </p>
        </div>
        <div class="text-right">
            <span class="bg-slate-200 text-slate-800 font-black text-xs px-3 py-1.5 rounded uppercase">
                <?= count($menus) ?> Varian Tersedia
            </span>
        </div>
    </div>

    <!-- Category Filter Bar (Horizontal Solid Tab Bar) -->
    <div class="mb-8">
        <?php 
            $isAllActive = empty($selectedCategory) || strtolower($selectedCategory) === 'semua' || strtolower($selectedCategory) === 'all';
        ?>

        <!-- Tab Bar Container -->
        <div class="flex items-center gap-1.5 overflow-x-auto pb-2 border-b-2 border-slate-300">
            
            <!-- Tab: SEMUA MENU -->
            <a 
                href="<?= base_url('/#menu-section') ?>" 
                class="px-5 py-3 rounded-t-md font-black text-xs sm:text-sm uppercase tracking-wider transition whitespace-nowrap <?= $isAllActive ? 'bg-brandPrimary text-white border-t-4 border-brandAccent shadow-sm' : 'bg-slate-200 text-slate-700 hover:bg-slate-300 hover:text-slate-950' ?>"
            >
                SEMUA MENU
            </a>

            <!-- Tab: TIAP KATEGORI DINAMIS -->
            <?php foreach ($categories as $cat): ?>
                <?php 
                    $isActive = (!empty($selectedCategory) && strcasecmp($selectedCategory, $cat) === 0);
                ?>
                <a 
                    href="<?= base_url('/?category=' . urlencode($cat) . '#menu-section') ?>" 
                    class="px-5 py-3 rounded-t-md font-black text-xs sm:text-sm uppercase tracking-wider transition whitespace-nowrap <?= $isActive ? 'bg-brandPrimary text-white border-t-4 border-brandAccent shadow-sm' : 'bg-slate-200 text-slate-700 hover:bg-slate-300 hover:text-slate-950' ?>"
                >
                    <?= esc(strtoupper($cat)) ?>
                </a>
            <?php endforeach; ?>

        </div>

        <!-- Filter Status Notice -->
        <?php if (!empty($selectedCategory) && !$isAllActive): ?>
            <div class="mt-3 py-2 px-3 bg-indigo-50 border border-indigo-200 rounded flex items-center justify-between text-xs text-indigo-900 font-bold">
                <span>Filter Aktif: Kategori "<strong><?= esc($selectedCategory) ?></strong>"</span>
                <a href="<?= base_url('/#menu-section') ?>" class="text-rose-600 hover:underline font-black uppercase">
                    [x] Tampilkan Semua Menu
                </a>
            </div>
        <?php endif; ?>
    </div>

    <!-- Product Cards Grid (Solid Commercial Card Layout) -->
    <?php if (empty($menus)): ?>
        <div class="p-12 text-center bg-white border-2 border-dashed border-slate-300 rounded-lg">
            <h3 class="text-lg font-black text-slate-900 uppercase">Varian Tidak Ditemukan</h3>
            <p class="text-xs text-slate-500 mt-1 mb-4">Belum ada menu untuk kategori "<?= esc($selectedCategory) ?>".</p>
            <a href="<?= base_url('/#menu-section') ?>" class="px-5 py-2.5 bg-brandPrimary text-white font-bold text-xs uppercase rounded">
                Kembali ke Semua Menu
            </a>
        </div>
    <?php else: ?>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <?php foreach ($menus as $menu): ?>
                <div class="bg-white border-2 border-slate-200 hover:border-brandPrimary rounded-lg overflow-hidden flex flex-col justify-between transition-colors group shadow-xs">
                    
                    <!-- Top: Photo & Category Tag -->
                    <div>
                        <div class="relative aspect-[4/3] bg-slate-100 overflow-hidden border-b-2 border-slate-200">
                            <img 
                                src="<?= esc($menu['image_url'] ?: 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=600&q=80') ?>" 
                                alt="<?= esc($menu['name']) ?>" 
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                loading="lazy"
                            >
                            <span class="absolute top-2 left-2 bg-slate-950 text-white font-black text-[10px] px-2.5 py-1 uppercase tracking-wider rounded">
                                <?= esc($menu['category']) ?>
                            </span>
                        </div>

                        <!-- Card Body -->
                        <div class="p-4">
                            <h3 class="font-black text-slate-900 text-base leading-tight uppercase group-hover:text-brandPrimary transition-colors">
                                <?= esc($menu['name']) ?>
                            </h3>
                            <p class="text-xs text-slate-600 line-clamp-2 mt-2 leading-relaxed">
                                <?= esc($menu['description']) ?>
                            </p>
                        </div>
                    </div>

                    <!-- Bottom: Price Bar & Detail Action -->
                    <div class="p-4 pt-3 bg-slate-50 border-t border-slate-200 flex items-center justify-between gap-2">
                        <div>
                            <span class="text-[10px] font-bold text-slate-500 uppercase block">HARGA SATUAN</span>
                            <span class="text-lg font-black text-brandPrimary">
                                Rp <?= number_format($menu['price'], 0, ',', '.') ?>
                            </span>
                        </div>

                        <a 
                            href="<?= base_url('menu/detail/' . $menu['id']) ?>" 
                            class="px-4 py-2 bg-brandAccent hover:bg-brandAccentDark text-slate-950 font-black text-xs uppercase tracking-wider rounded transition"
                        >
                            LIHAT DETAIL
                        </a>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

</section>


<!-- =========================================================================
     TENTANG SYAUQI BOLU KEMOJO (EDITORIAL RESTAURANT SECTION)
     ========================================================================= -->
<section id="tentang-section" class="py-16 bg-white border-t-2 border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="border-4 border-slate-900 p-8 sm:p-12 bg-slate-50 rounded-lg">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                
                <div class="lg:col-span-8 space-y-4">
                    <span class="bg-brandPrimary text-white font-black text-xs px-3 py-1 uppercase rounded tracking-wider">
                        WARISAN KULINER TRADISIONAL
                    </span>
                    <h3 class="text-3xl sm:text-4xl font-black text-slate-900 uppercase tracking-tight">
                        Mengapa Harus Syauqi Bolu Kemojo?
                    </h3>
                    <p class="text-sm text-slate-700 leading-relaxed font-medium">
                        Bolu Kemojo adalah kue tradisional khas Melayu yang dicetak dalam loyang berbentuk kelopak bunga kamboja (kemojo). Kue ini merupakan sajian kehormatan pada upacara adat, pesta pernikahan, dan kenduri besar di Kepulauan Riau.
                    </p>
                    <p class="text-sm text-slate-700 leading-relaxed font-medium">
                        Di <strong>Syauqi Bolu Kemojo</strong>, kami mempertahankan metode pemanggangan tradisional warisan leluhur. Kami tidak menggunakan pewarna buatan maupun pemanis kimia. Seluruh warna hijau dan keharuman bolu berasal dari sari daun pandan suji murni, dipadu dengan santan perasan pertama yang gurih legit.
                    </p>
                </div>

                <div class="lg:col-span-4 bg-slate-900 text-white p-6 rounded-md space-y-4 text-center">
                    <div class="text-brandAccent font-black text-3xl">PILIHAN RESMI</div>
                    <p class="text-xs text-slate-300 leading-relaxed">
                        Dipercaya oleh instansi pemerintah, wisatawan domestik, dan masyarakat Kepri sebagai oleh-oleh utama Tanjungpinang & Batam.
                    </p>
                    <div class="pt-2 border-t border-slate-800">
                        <a 
                            href="<?= base_url('/#menu-section') ?>" 
                            class="inline-block w-full py-3 bg-brandPrimary hover:bg-brandPrimaryDark text-white font-black text-xs uppercase tracking-wider rounded"
                        >
                            PESAN OLEH-OLEH SEKARANG
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
