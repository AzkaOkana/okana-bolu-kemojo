<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- =========================================================================
     HERO SECTION
     ========================================================================= -->
<section class="relative overflow-hidden bg-gradient-to-b from-indigo-50/70 via-white to-slate-50 py-16 lg:py-24 border-b border-indigo-100/50">
    <!-- Subtle Background Accents -->
    <div class="absolute -top-24 -right-24 w-96 h-96 bg-brandAccent/15 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute top-1/2 -left-20 w-80 h-80 bg-brandPrimary/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Left Text Content -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                
                <!-- Heritage Badge -->
                <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full bg-white border border-indigo-200/80 shadow-sm text-xs sm:text-sm font-semibold text-brandPrimary">
                    <span class="w-2.5 h-2.5 rounded-full bg-brandAccent animate-ping"></span>
                    <span class="text-amber-600">★</span>
                    <span>Warisan Kuliner Melayu Kepulauan Riau</span>
                </div>

                <!-- Main Title -->
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.15]">
                    Kelembutan Tradisi, <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-brandPrimary via-indigo-600 to-indigo-800">
                        Bolu Kemojo Autentik
                    </span>
                    <span class="text-brandAccent">.</span>
                </h1>

                <!-- Subtitle -->
                <p class="text-base sm:text-lg text-slate-600 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                    Dipanggang dengan dedikasi resep leluhur tanah Melayu Kepri. Menghadirkan wangi sari daun pandan suji murni, gurihnya santan kelapa asli, dan tekstur legit berbentuk kelopak bunga kemojo yang memesona.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-2">
                    <a href="#katalog-menu" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-2xl bg-brandPrimary hover:bg-brandPrimaryHover text-white text-base font-bold shadow-lg shadow-indigo-500/25 transition-all transform hover:-translate-y-0.5">
                        <span>Lihat Pilihan Menu</span>
                        <svg class="w-5 h-5 text-brandAccent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>
                    <a href="<?= base_url('admin/menu') ?>" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-2xl bg-white hover:bg-slate-100 text-slate-700 border border-slate-300 text-base font-semibold shadow-sm transition-all">
                        <svg class="w-5 h-5 text-brandPrimary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                        </svg>
                        <span>Kelola Menu (Admin)</span>
                    </a>
                </div>

                <!-- Trust Badges Grid -->
                <div class="pt-6 grid grid-cols-2 sm:grid-cols-4 gap-3 border-t border-slate-200/80">
                    <div class="flex items-center gap-2">
                        <div class="w-7 h-7 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xs">✓</div>
                        <span class="text-xs font-semibold text-slate-700">100% Pandan Asli</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-7 h-7 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xs">✓</div>
                        <span class="text-xs font-semibold text-slate-700">Tanpa Pengawet</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-7 h-7 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xs">✓</div>
                        <span class="text-xs font-semibold text-slate-700">Resep Khas Riau</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-7 h-7 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xs">✓</div>
                        <span class="text-xs font-semibold text-slate-700">Fresh Tiap Hari</span>
                    </div>
                </div>

            </div>

            <!-- Right Hero Image Showcase -->
            <div class="lg:col-span-5 relative">
                <div class="relative mx-auto max-w-md lg:max-w-none">
                    
                    <!-- Decorative Frame & Glow -->
                    <div class="absolute -inset-2 bg-gradient-to-tr from-brandPrimary via-indigo-400 to-brandAccent rounded-3xl opacity-30 blur-lg"></div>
                    
                    <!-- Main Showcase Card -->
                    <div class="relative bg-white p-3 rounded-3xl shadow-2xl border border-slate-100 overflow-hidden">
                        <img 
                            src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=1000&q=80" 
                            alt="Okana Bolu Kemojo Pandan Istimewa" 
                            class="w-full h-80 sm:h-96 object-cover rounded-2xl shadow-inner transform hover:scale-102 transition-transform duration-500"
                        >

                        <!-- Floating Badge 1: Khas Melayu -->
                        <div class="absolute top-6 left-6 bg-white/95 backdrop-blur-md px-3.5 py-2 rounded-2xl shadow-lg border border-indigo-100 flex items-center gap-2.5">
                            <span class="w-3 h-3 rounded-full bg-emerald-500"></span>
                            <div>
                                <p class="text-[10px] uppercase font-bold text-slate-400 tracking-wider">Otentik</p>
                                <p class="text-xs font-bold text-slate-800">Kepulauan Riau</p>
                            </div>
                        </div>

                        <!-- Floating Badge 2: Tekstur Legit -->
                        <div class="absolute bottom-6 right-6 bg-white/95 backdrop-blur-md p-3 rounded-2xl shadow-xl border border-amber-200/80 flex items-center gap-3">
                            <div class="w-9 h-9 rounded-xl bg-amber-100 text-amber-600 flex items-center justify-center font-black text-sm">
                                4.9★
                            </div>
                            <div>
                                <p class="text-xs font-bold text-slate-800">Legit & Gurih Murni</p>
                                <p class="text-[11px] text-slate-500">Favorit Wisatawan & Warga</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<!-- =========================================================================
     KATALOG MENU & FITUR FILTER KATEGORI (FITUR 1)
     ========================================================================= -->
<section id="katalog-menu" class="py-16 sm:py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto mb-10 space-y-3">
        <span class="text-brandPrimary font-bold text-xs uppercase tracking-widest px-3 py-1 bg-brandSoft rounded-full border border-indigo-100">
            Koleksi Varian Istimewa
        </span>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
            Pilihan Bolu Kemojo Terbaik
        </h2>
        <p class="text-slate-600 text-sm sm:text-base">
            Gunakan filter kategori di bawah ini untuk menjelajahi kelezatan varian tradisional hingga kreasi modern kami.
        </p>
    </div>

    <!-- Filter Buttons Bar (Fitur 1: Interaktif via Query String ?category=...) -->
    <div class="mb-10">
        <div class="flex items-center justify-center flex-wrap gap-2.5 sm:gap-3">
            
            <!-- Tombol "Semua Varian" -->
            <?php 
                $isAllActive = empty($selectedCategory) || strtolower($selectedCategory) === 'semua' || strtolower($selectedCategory) === 'all';
            ?>
            <a 
                href="<?= base_url('/#katalog-menu') ?>" 
                class="px-5 py-2.5 rounded-full text-xs sm:text-sm font-bold transition-all duration-200 <?= $isAllActive ? 'bg-brandPrimary text-white shadow-md shadow-indigo-500/30 ring-2 ring-brandPrimary ring-offset-2' : 'bg-white text-slate-700 border border-slate-200 hover:bg-slate-100 hover:text-brandPrimary shadow-sm' ?>"
            >
                Semua Varian
            </a>

            <!-- Tombol Tiap Kategori Dinamis -->
            <?php foreach ($categories as $cat): ?>
                <?php 
                    $isActive = (!empty($selectedCategory) && strcasecmp($selectedCategory, $cat) === 0);
                ?>
                <a 
                    href="<?= base_url('/?category=' . urlencode($cat) . '#katalog-menu') ?>" 
                    class="px-5 py-2.5 rounded-full text-xs sm:text-sm font-bold transition-all duration-200 <?= $isActive ? 'bg-brandPrimary text-white shadow-md shadow-indigo-500/30 ring-2 ring-brandPrimary ring-offset-2' : 'bg-white text-slate-700 border border-slate-200 hover:bg-slate-100 hover:text-brandPrimary shadow-sm' ?>"
                >
                    <?= esc($cat) ?>
                </a>
            <?php endforeach; ?>

        </div>

        <!-- Filter Status Alert Info -->
        <?php if (!empty($selectedCategory) && !$isAllActive): ?>
            <div class="mt-4 flex items-center justify-center gap-2 text-xs sm:text-sm text-slate-600">
                <span>Menampilkan hasil kategori: <strong class="text-brandPrimary font-bold"><?= esc($selectedCategory) ?></strong> (<?= count($menus) ?> varian ditemukan)</span>
                <span class="text-slate-300">•</span>
                <a href="<?= base_url('/#katalog-menu') ?>" class="text-rose-600 font-semibold hover:underline inline-flex items-center gap-1">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                    <span>Reset Filter</span>
                </a>
            </div>
        <?php endif; ?>
    </div>

    <!-- Product Cards Grid -->
    <?php if (empty($menus)): ?>
        <!-- Empty State -->
        <div class="bg-white rounded-3xl border border-dashed border-slate-300 p-12 text-center max-w-md mx-auto my-8">
            <div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-amber-100 text-amber-600 flex items-center justify-center">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <h3 class="text-lg font-bold text-slate-800 mb-1">Varian Belum Tersedia</h3>
            <p class="text-sm text-slate-500 mb-6">
                Tidak ada varian Bolu Kemojo yang ditemukan untuk kategori "<?= esc($selectedCategory) ?>".
            </p>
            <a href="<?= base_url('/#katalog-menu') ?>" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-brandPrimary text-white text-xs font-bold shadow-md hover:bg-brandPrimaryHover transition-all">
                <span>Kembali ke Semua Menu</span>
            </a>
        </div>
    <?php else: ?>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 sm:gap-8">
            <?php foreach ($menus as $menu): ?>
                <div class="group bg-white rounded-3xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between">
                    
                    <!-- Card Top Area: Image & Badges -->
                    <div>
                        <div class="relative overflow-hidden aspect-[4/3] bg-slate-100">
                            <img 
                                src="<?= esc($menu['image_url'] ?: 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=800&q=80') ?>" 
                                alt="<?= esc($menu['name']) ?>" 
                                class="w-full h-full object-cover group-hover:scale-108 transition-transform duration-500"
                                loading="lazy"
                            >
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            
                            <!-- Category Badge -->
                            <div class="absolute top-3.5 left-3.5">
                                <span class="px-3 py-1 rounded-full text-xs font-extrabold shadow-sm backdrop-blur-md 
                                    <?php 
                                        switch (strtolower($menu['category'])) {
                                            case 'pandan':
                                                echo 'bg-emerald-600/90 text-white';
                                                break;
                                            case 'keju':
                                                echo 'bg-amber-500/90 text-white';
                                                break;
                                            case 'cokelat':
                                                echo 'bg-amber-900/90 text-white';
                                                break;
                                            case 'durian':
                                                echo 'bg-yellow-500/90 text-slate-900';
                                                break;
                                            case 'paket':
                                                echo 'bg-indigo-600/90 text-white';
                                                break;
                                            default:
                                                echo 'bg-brandPrimary/90 text-white';
                                                break;
                                        }
                                    ?>
                                ">
                                    <?= esc($menu['category']) ?>
                                </span>
                            </div>

                            <!-- Kemojo Shape Icon Badge -->
                            <div class="absolute top-3.5 right-3.5 w-8 h-8 rounded-full bg-white/90 backdrop-blur-md flex items-center justify-center text-amber-500 shadow-sm">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C13.5 5 15.5 6.5 19 7C17.5 10 17.5 12.5 19 15.5C15.5 16 13.5 17.5 12 20.5C10.5 17.5 8.5 16 5 15.5C6.5 12.5 6.5 10 5 7C8.5 6.5 10.5 5 12 2Z"/>
                                </svg>
                            </div>
                        </div>

                        <!-- Card Content -->
                        <div class="p-5">
                            <h3 class="font-bold text-lg text-slate-900 group-hover:text-brandPrimary transition-colors leading-snug line-clamp-1 mb-2">
                                <?= esc($menu['name']) ?>
                            </h3>
                            <p class="text-xs sm:text-sm text-slate-500 line-clamp-2 leading-relaxed mb-4">
                                <?= esc($menu['description']) ?>
                            </p>
                        </div>
                    </div>

                    <!-- Card Bottom Area: Price & Action Button -->
                    <div class="px-5 pb-5 pt-3 border-t border-slate-100 flex items-center justify-between gap-3">
                        <div>
                            <span class="block text-[10px] uppercase font-bold text-slate-400">Harga Satuan</span>
                            <span class="text-base sm:text-lg font-extrabold text-brandPrimary tracking-tight">
                                Rp <?= number_format($menu['price'], 0, ',', '.') ?>
                            </span>
                        </div>
                        <a 
                            href="<?= base_url('menu/detail/' . $menu['id']) ?>" 
                            class="inline-flex items-center gap-1.5 px-3.5 py-2 rounded-xl bg-slate-900 group-hover:bg-brandPrimary text-white text-xs font-bold transition-all shadow-sm hover:shadow-md"
                        >
                            <span>Detail</span>
                            <svg class="w-3.5 h-3.5 text-brandAccent group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

</section>


<!-- =========================================================================
     CERITA BUDAYA & TRADISI BOLU KEMOJO MELAYU
     ========================================================================= -->
<section id="tentang-kemojo" class="py-16 sm:py-24 bg-white border-t border-slate-200/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-6 relative">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-slate-200">
                    <img 
                        src="https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=900&q=80" 
                        alt="Tradisi Pembuatan Bolu Kemojo Riau" 
                        class="w-full h-80 sm:h-[420px] object-cover"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent flex flex-col justify-end p-6 sm:p-8">
                        <span class="text-amber-400 font-extrabold text-xs uppercase tracking-wider">Warisan Takbenda</span>
                        <h4 class="text-white text-xl sm:text-2xl font-bold mt-1">Dicetak Dengan Kasih Sayang Dalam Acara Adat</h4>
                        <p class="text-slate-300 text-xs sm:text-sm mt-1">Simbol penghormatan kepada tetamu dan lambang kebersamaan masyarakat Kepulauan Riau.</p>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-6 space-y-6">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-100 text-amber-800 text-xs font-bold border border-amber-200">
                    <span>Filosofi & Tradisi</span>
                </div>
                <h3 class="text-3xl sm:text-4xl font-extrabold text-slate-900 leading-tight">
                    Mengapa Dinamakan <br>
                    <span class="text-brandPrimary">"Bolu Kemojo"?</span>
                </h3>
                <p class="text-slate-600 leading-relaxed text-sm sm:text-base">
                    Nama <strong>Kemojo</strong> berasal dari bentuk cetakannya yang menyerupai kelopak bunga kemboja (kamboja) yang anggun. Dalam kebudayaan Melayu Kepulauan Riau, kue ini dahulu disajikan secara khusus pada pesta pernikahan, kenduri besar, dan hari raya Idulfitri.
                </p>
                <p class="text-slate-600 leading-relaxed text-sm sm:text-base">
                    Di <strong>Okana Bolu Kemojo</strong>, kami melestarikan teknik pemanggangan tradisional menggunakan santan perasan pertama yang gurih dan sari daun pandan alami, sehingga menghasilkan aroma semerbak dengan sensasi legit di lidah yang tak terlupakan.
                </p>

                <div class="grid grid-cols-2 gap-4 pt-2">
                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200">
                        <p class="text-2xl font-extrabold text-brandPrimary">8+ Varian</p>
                        <p class="text-xs text-slate-500 font-medium mt-1">Pilihan rasa klasik hingga modern</p>
                    </div>
                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200">
                        <p class="text-2xl font-extrabold text-amber-500">100% Alami</p>
                        <p class="text-xs text-slate-500 font-medium mt-1">Tanpa pewarna sintetis berbahaya</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?= $this->endSection() ?>
