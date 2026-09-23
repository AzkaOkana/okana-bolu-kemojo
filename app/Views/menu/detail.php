<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="py-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Breadcrumb (Clean & Direct) -->
    <div class="text-xs font-bold text-slate-500 uppercase tracking-wider mb-6 flex items-center gap-2">
        <a href="<?= base_url('/') ?>" class="hover:text-brandPrimary">BERANDA</a>
        <span>/</span>
        <a href="<?= base_url('/#menu-section') ?>" class="hover:text-brandPrimary">DAFTAR MENU</a>
        <span>/</span>
        <span class="text-slate-900"><?= esc(strtoupper($menu['name'])) ?></span>
    </div>

    <!-- Product Detail Container (Solid Commercial Food Layout) -->
    <div class="bg-white border-2 border-slate-300 rounded-lg p-6 sm:p-10 mb-14 shadow-sm">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
            
            <!-- Left: Food Photography & Specs Box -->
            <div class="lg:col-span-6 space-y-4">
                <div class="relative aspect-square sm:aspect-[4/3] bg-slate-100 rounded-md overflow-hidden border-2 border-slate-200">
                    <img 
                        src="<?= esc($menu['image_url'] ?: 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=800&q=80') ?>" 
                        alt="<?= esc($menu['name']) ?>" 
                        class="w-full h-full object-cover"
                    >
                    <span class="absolute top-3 left-3 bg-slate-950 text-white font-black text-xs px-3 py-1.5 uppercase tracking-wider rounded">
                        KATEGORI: <?= esc(strtoupper($menu['category'])) ?>
                    </span>
                </div>

                <!-- Product Specifications Grid -->
                <div class="p-4 bg-slate-50 border border-slate-200 rounded text-xs grid grid-cols-2 gap-3">
                    <div>
                        <span class="block text-slate-500 font-bold uppercase text-[10px]">Bentuk Cetakan</span>
                        <strong class="text-slate-800">Kelopak Bunga Kemojo</strong>
                    </div>
                    <div>
                        <span class="block text-slate-500 font-bold uppercase text-[10px]">Berat Bersih</span>
                        <strong class="text-slate-800">± 450 - 500 gram (Ø 18 cm)</strong>
                    </div>
                    <div>
                        <span class="block text-slate-500 font-bold uppercase text-[10px]">Masa Simpan</span>
                        <strong class="text-slate-800">3-4 Hari Ruang • 10 Hari Kulkas</strong>
                    </div>
                    <div>
                        <span class="block text-slate-500 font-bold uppercase text-[10px]">Kondisi</span>
                        <strong class="text-emerald-700">Fresh from Oven Harian</strong>
                    </div>
                </div>
            </div>

            <!-- Right: Commercial Ordering Information -->
            <div class="lg:col-span-6 space-y-6 flex flex-col justify-between">
                
                <div class="space-y-4">
                    <div>
                        <span class="inline-block bg-brandPrimary text-white font-black text-[11px] px-2.5 py-1 uppercase rounded tracking-wider mb-2">
                            <?= esc($menu['category']) ?>
                        </span>
                        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-black text-slate-900 uppercase tracking-tight leading-tight">
                            <?= esc($menu['name']) ?>
                        </h1>
                    </div>

                    <!-- Commercial Price Bar -->
                    <div class="p-5 bg-slate-900 text-white rounded-md flex items-center justify-between border-l-4 border-brandAccent">
                        <div>
                            <span class="text-[11px] text-slate-400 font-bold uppercase block">HARGA RESMI</span>
                            <span class="text-3xl font-black text-brandAccent">
                                Rp <?= number_format($menu['price'], 0, ',', '.') ?>
                            </span>
                        </div>
                        <div class="text-right">
                            <span class="inline-block px-2.5 py-1 bg-emerald-600 text-white font-bold text-xs uppercase rounded">
                                SIAP KIRIM HARI INI
                            </span>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="space-y-2">
                        <h3 class="text-xs font-black uppercase text-slate-900 tracking-wider">Deskripsi & Cita Rasa:</h3>
                        <p class="text-sm text-slate-700 leading-relaxed font-medium">
                            <?= nl2br(esc($menu['description'])) ?>
                        </p>
                    </div>

                    <!-- Ingredients Notice -->
                    <div class="p-3 bg-amber-50 border border-amber-200 rounded text-xs text-amber-900 space-y-1">
                        <strong class="font-bold block">Komposisi Alami:</strong>
                        <p class="text-[11px] text-amber-800">
                            Tepung terigu pilihan, santan kelapa perasan murni, sari daun pandan suji asli, telur ayam segar, mentega, dan gula pasir. Tanpa pengawet buatan.
                        </p>
                    </div>
                </div>

                <!-- Action Buttons (Commercial Ordering) -->
                <div class="space-y-3 pt-4 border-t border-slate-200">
                    <?php 
                        $waText = urlencode("Halo Okana Bolu Kemojo, saya ingin memesan: " . $menu['name'] . " (Rp " . number_format($menu['price'], 0, ',', '.') . "). Mohon info ketersediaan stok.");
                        $waUrl = "https://wa.me/6281270008899?text=" . $waText;
                    ?>
                    
                    <a 
                        href="<?= $waUrl ?>" 
                        target="_blank" 
                        class="w-full py-4 px-6 bg-emerald-600 hover:bg-emerald-500 text-white font-black text-sm uppercase tracking-wider rounded text-center block transition shadow-sm"
                    >
                        PESAN SEKARANG VIA WHATSAPP
                    </a>

                    <div class="flex items-center gap-3">
                        <a 
                            href="<?= base_url('/#menu-section') ?>" 
                            class="flex-1 py-3 px-4 border-2 border-slate-300 hover:bg-slate-100 text-slate-800 font-bold text-xs uppercase tracking-wider rounded text-center transition"
                        >
                            &larr; KEMBALI KE DAFTAR MENU
                        </a>

                        <?php if (session()->get('role') === 'admin'): ?>
                            <a 
                                href="<?= base_url('admin/menu/edit/' . $menu['id']) ?>" 
                                class="py-3 px-4 bg-slate-900 hover:bg-slate-800 text-white font-bold text-xs uppercase tracking-wider rounded text-center transition"
                            >
                                EDIT DI ADMIN
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- Related Products -->
    <?php if (!empty($relatedMenus)): ?>
        <div class="space-y-4">
            <div class="border-b-2 border-slate-900 pb-2 flex items-center justify-between">
                <h3 class="text-xl font-black text-slate-900 uppercase">VARIAN LAINNYA</h3>
                <a href="<?= base_url('/#menu-section') ?>" class="text-xs font-bold text-brandPrimary hover:underline uppercase">
                    Lihat Semua Menu &rarr;
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                <?php foreach ($relatedMenus as $rel): ?>
                    <a href="<?= base_url('menu/detail/' . $rel['id']) ?>" class="bg-white border-2 border-slate-200 hover:border-brandPrimary rounded-md p-3 flex items-center gap-3 transition group">
                        <img 
                            src="<?= esc($rel['image_url'] ?: 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=200&q=80') ?>" 
                            alt="<?= esc($rel['name']) ?>" 
                            class="w-16 h-16 object-cover rounded shrink-0 border border-slate-200"
                        >
                        <div class="overflow-hidden">
                            <span class="text-[10px] font-bold text-slate-500 uppercase block">
                                <?= esc($rel['category']) ?>
                            </span>
                            <h4 class="font-bold text-sm text-slate-900 group-hover:text-brandPrimary truncate uppercase">
                                <?= esc($rel['name']) ?>
                            </h4>
                            <span class="text-xs font-black text-brandPrimary block mt-0.5">
                                Rp <?= number_format($rel['price'], 0, ',', '.') ?>
                            </span>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>

</div>

<?= $this->endSection() ?>
