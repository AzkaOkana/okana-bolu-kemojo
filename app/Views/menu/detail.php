<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="py-10 sm:py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Breadcrumb Navigation -->
    <nav class="flex items-center gap-2 text-xs sm:text-sm text-slate-500 mb-8" aria-label="Breadcrumb">
        <a href="<?= base_url('/') ?>" class="hover:text-brandPrimary transition-colors flex items-center gap-1">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
            </svg>
            <span>Beranda</span>
        </a>
        <span>/</span>
        <a href="<?= base_url('/#katalog-menu') ?>" class="hover:text-brandPrimary transition-colors">
            Katalog Menu
        </a>
        <span>/</span>
        <span class="text-slate-800 font-semibold truncate max-w-xs sm:max-w-md"><?= esc($menu['name']) ?></span>
    </nav>

    <!-- Main Detail Showcase -->
    <div class="bg-white rounded-3xl border border-slate-200/80 shadow-sm overflow-hidden p-6 sm:p-10 mb-16">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-start">
            
            <!-- Left Column: Product Image & Badges -->
            <div class="lg:col-span-6 space-y-4">
                <div class="relative rounded-3xl overflow-hidden shadow-lg border border-slate-100 bg-slate-100 aspect-square sm:aspect-[4/3] lg:aspect-square">
                    <img 
                        src="<?= esc($menu['image_url'] ?: 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=1000&q=80') ?>" 
                        alt="<?= esc($menu['name']) ?>" 
                        class="w-full h-full object-cover"
                    >
                    
                    <!-- Floral Watermark / Badge -->
                    <div class="absolute top-4 left-4 bg-white/95 backdrop-blur-md px-3.5 py-1.5 rounded-full text-xs font-bold text-slate-800 shadow-md flex items-center gap-2">
                        <span class="w-2.5 h-2.5 rounded-full bg-brandAccent"></span>
                        <span><?= esc($menu['category']) ?></span>
                    </div>

                    <div class="absolute bottom-4 right-4 bg-slate-900/85 backdrop-blur-md px-3.5 py-1.5 rounded-xl text-white text-xs font-medium flex items-center gap-1.5 shadow-md">
                        <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Jaminan Rasa Autentik Kepri</span>
                    </div>
                </div>

                <!-- Guarantee Box -->
                <div class="p-4 rounded-2xl bg-indigo-50/70 border border-indigo-100 flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-brandPrimary text-white flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5 text-brandAccent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <div class="text-xs">
                        <p class="font-bold text-brandDark">Dipanggang Segar Setiap Pagi</p>
                        <p class="text-slate-600">Pesanan diproses higienis dan dikemas rapi dengan kotak aman untuk perjalanan.</p>
                    </div>
                </div>
            </div>

            <!-- Right Column: Product Info & Actions -->
            <div class="lg:col-span-6 space-y-6">
                
                <div>
                    <span class="inline-block px-3 py-1 rounded-full text-xs font-bold bg-amber-100 text-amber-800 border border-amber-200 uppercase tracking-wider mb-2">
                        Varian <?= esc($menu['category']) ?>
                    </span>
                    <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight leading-tight">
                        <?= esc($menu['name']) ?>
                    </h1>
                </div>

                <!-- Price Tag Banner -->
                <div class="p-5 rounded-2xl bg-gradient-to-r from-indigo-50 to-amber-50/50 border border-indigo-100 flex items-center justify-between">
                    <div>
                        <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider block">Harga Spesial</span>
                        <div class="text-3xl font-extrabold text-brandPrimary tracking-tight">
                            Rp <?= number_format($menu['price'], 0, ',', '.') ?>
                        </div>
                    </div>
                    <div class="text-right">
                        <span class="inline-flex items-center gap-1 text-xs font-bold text-emerald-700 bg-emerald-100 px-3 py-1 rounded-full">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                            Tersedia Siap Kirim
                        </span>
                    </div>
                </div>

                <!-- Description -->
                <div class="space-y-2">
                    <h3 class="text-sm font-bold text-slate-900 uppercase tracking-wider">Deskripsi & Keistimewaan</h3>
                    <p class="text-slate-600 leading-relaxed text-sm sm:text-base">
                        <?= nl2br(esc($menu['description'])) ?>
                    </p>
                </div>

                <!-- Specifications Table -->
                <div class="border-t border-b border-slate-100 py-4 grid grid-cols-2 gap-4 text-xs sm:text-sm">
                    <div>
                        <span class="text-slate-400 block font-medium">Bentuk Cetakan:</span>
                        <span class="text-slate-800 font-semibold">Kelopak Bunga Kamboja (Kemojo)</span>
                    </div>
                    <div>
                        <span class="text-slate-400 block font-medium">Berat Bersih:</span>
                        <span class="text-slate-800 font-semibold">± 450 - 500 gram (Diameter 18 cm)</span>
                    </div>
                    <div>
                        <span class="text-slate-400 block font-medium">Masa Simpan:</span>
                        <span class="text-slate-800 font-semibold">3-4 Hari Suhu Ruang (10 Hari Kulkas)</span>
                    </div>
                    <div>
                        <span class="text-slate-400 block font-medium">Asal Daerah:</span>
                        <span class="text-slate-800 font-semibold">Kepulauan Riau, Indonesia</span>
                    </div>
                </div>

                <!-- CTA Action Buttons -->
                <div class="space-y-3 pt-2">
                    <!-- WhatsApp Order CTA -->
                    <?php 
                        $waText = urlencode("Halo Okana Bolu Kemojo, saya tertarik memesan varian: " . $menu['name'] . " (Rp " . number_format($menu['price'], 0, ',', '.') . "). Mohon info ketersediaan stok.");
                        $waUrl = "https://wa.me/6281270008899?text=" . $waText;
                    ?>
                    <a 
                        href="<?= $waUrl ?>" 
                        target="_blank" 
                        rel="noopener noreferrer"
                        class="w-full inline-flex items-center justify-center gap-2.5 px-6 py-4 rounded-2xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-base shadow-lg shadow-emerald-600/20 transition-all transform hover:-translate-y-0.5"
                    >
                        <!-- WhatsApp Icon -->
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                        </svg>
                        <span>Pesan Varian Ini via WhatsApp</span>
                    </a>

                    <!-- Navigation Action Links -->
                    <div class="flex items-center gap-3">
                        <a 
                            href="<?= base_url('/#katalog-menu') ?>" 
                            class="flex-1 inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold text-xs sm:text-sm transition-all"
                        >
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                            </svg>
                            <span>Lihat Varian Lain</span>
                        </a>

                        <?php if (session()->get('role') === 'admin'): ?>
                            <a 
                                href="<?= base_url('admin/menu/edit/' . $menu['id']) ?>" 
                                class="inline-flex items-center justify-center gap-1.5 px-4 py-3 rounded-xl border border-indigo-200 hover:border-brandPrimary hover:bg-brandSoft text-brandPrimary font-semibold text-xs sm:text-sm transition-all"
                                title="Edit menu ini di admin panel"
                            >
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                </svg>
                                <span>Edit Menu</span>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- Related Products Section -->
    <?php if (!empty($relatedMenus)): ?>
        <div class="space-y-6">
            <div class="flex items-center justify-between border-b border-slate-200 pb-4">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-brandPrimary">Rekomendasi Pilihan</span>
                    <h2 class="text-xl sm:text-2xl font-extrabold text-slate-900">Varian Bolu Kemojo Lainnya</h2>
                </div>
                <a href="<?= base_url('/#katalog-menu') ?>" class="text-xs sm:text-sm font-bold text-brandPrimary hover:underline flex items-center gap-1">
                    <span>Semua Menu</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($relatedMenus as $rel): ?>
                    <a href="<?= base_url('menu/detail/' . $rel['id']) ?>" class="group bg-white rounded-2xl p-4 border border-slate-200/80 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all flex items-center gap-4">
                        <img 
                            src="<?= esc($rel['image_url'] ?: 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=400&q=80') ?>" 
                            alt="<?= esc($rel['name']) ?>" 
                            class="w-20 h-20 rounded-xl object-cover shrink-0 group-hover:scale-105 transition-transform"
                        >
                        <div class="overflow-hidden">
                            <span class="inline-block text-[10px] font-bold text-brandPrimary bg-brandSoft px-2 py-0.5 rounded-full mb-1">
                                <?= esc($rel['category']) ?>
                            </span>
                            <h4 class="font-bold text-slate-800 text-sm group-hover:text-brandPrimary truncate transition-colors">
                                <?= esc($rel['name']) ?>
                            </h4>
                            <p class="text-xs font-extrabold text-slate-900 mt-1">
                                Rp <?= number_format($rel['price'], 0, ',', '.') ?>
                            </p>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>

</div>

<?= $this->endSection() ?>
