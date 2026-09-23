<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="py-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Top Bar & Breadcrumb -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 pb-6 border-b-2 border-slate-300 mb-8">
        <div>
            <div class="text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">
                <a href="<?= base_url('/') ?>" class="hover:text-brandPrimary">BERANDA</a> / <span>ADMINISTRATOR</span>
            </div>
            <h1 class="text-2xl sm:text-3xl font-black text-slate-900 uppercase tracking-tight">
                PANEL KELOLA MENU KULINER
            </h1>
            <p class="text-xs sm:text-sm text-slate-600 font-medium mt-0.5">
                Sistem Pengelolaan Katalog Varian, Harga, & Banner Menu Utama Okana Bolu Kemojo.
            </p>
        </div>

        <div class="flex items-center gap-3">
            <a 
                href="<?= base_url('/') ?>" 
                class="px-4 py-2.5 bg-white border-2 border-slate-300 hover:border-slate-800 text-slate-800 font-bold text-xs uppercase tracking-wider rounded transition"
            >
                Lihat Web Depan
            </a>
            <a 
                href="<?= base_url('admin/menu/create') ?>" 
                class="px-5 py-2.5 bg-brandPrimary hover:bg-brandPrimaryDark text-white font-black text-xs uppercase tracking-wider rounded shadow-sm transition flex items-center gap-1.5"
            >
                <span>+ TAMBAH MENU BARU</span>
            </a>
        </div>
    </div>

    <!-- Commercial Metrics Row -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 mb-8">
        <div class="bg-white p-5 border-2 border-slate-200 rounded-md shadow-xs">
            <span class="text-[11px] font-bold uppercase tracking-wider text-slate-500 block">Total Varian Aktif</span>
            <span class="text-3xl font-black text-slate-900 mt-1 block"><?= count($menus) ?> Item</span>
            <span class="text-[11px] font-semibold text-emerald-700">Tampil di etalase pembeli</span>
        </div>

        <div class="bg-white p-5 border-2 border-slate-200 rounded-md shadow-xs">
            <span class="text-[11px] font-bold uppercase tracking-wider text-slate-500 block">Kategori Terdaftar</span>
            <span class="text-3xl font-black text-brandPrimary mt-1 block"><?= count($categories) ?> Kategori</span>
            <span class="text-[11px] font-semibold text-slate-600">Varian rasa khas Kepri</span>
        </div>

        <div class="bg-white p-5 border-2 border-slate-200 rounded-md shadow-xs">
            <span class="text-[11px] font-bold uppercase tracking-wider text-slate-500 block">Rentang Harga</span>
            <?php 
                $prices = array_column($menus, 'price');
                $minPrice = !empty($prices) ? min($prices) : 0;
                $maxPrice = !empty($prices) ? max($prices) : 0;
            ?>
            <span class="text-2xl font-black text-slate-900 mt-1 block">
                Rp <?= number_format($minPrice, 0, ',', '.') ?> - <?= number_format($maxPrice, 0, ',', '.') ?>
            </span>
            <span class="text-[11px] font-semibold text-slate-600">Standar harga resmi</span>
        </div>
    </div>

    <!-- Flash Alerts -->
    <?php if (session()->getFlashdata('success')): ?>
        <div class="mb-6 p-4 bg-emerald-100 border-2 border-emerald-400 text-emerald-900 text-xs sm:text-sm font-bold rounded flex items-center justify-between">
            <span><?= esc(session()->getFlashdata('success')) ?></span>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="mb-6 p-4 bg-rose-100 border-2 border-rose-400 text-rose-900 text-xs sm:text-sm font-bold rounded flex items-center justify-between">
            <span><?= esc(session()->getFlashdata('error')) ?></span>
        </div>
    <?php endif; ?>

    <!-- =========================================================================
         KARTU PENGATURAN GAMBAR MENU UTAMA (HERO BANNER BERANDA)
         ========================================================================= -->
    <div class="bg-white border-2 border-indigo-200 rounded-lg overflow-hidden shadow-xs mb-8">
        <div class="p-4 bg-restaurantNavy text-white flex items-center justify-between">
            <div class="flex items-center gap-2">
                <span class="w-2.5 h-2.5 rounded-full bg-brandAccent"></span>
                <h3 class="font-black text-xs sm:text-sm uppercase tracking-wider text-white">
                    PENGATURAN GAMBAR MENU UTAMA (HERO BANNER BERANDA)
                </h3>
            </div>
            <span class="bg-brandAccent text-slate-950 font-black text-[10px] px-2 py-0.5 rounded uppercase">
                TAMPILAN DEPAN
            </span>
        </div>

        <div class="p-6">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
                
                <!-- Left: Live Preview of Current Hero Banner -->
                <div class="lg:col-span-4 bg-slate-900 text-white rounded-lg p-4 border border-slate-700">
                    <span class="text-[10px] font-black uppercase tracking-wider text-brandAccent block mb-2">
                        Pratinjau Banner Depan Saat Ini:
                    </span>
                    <div class="aspect-[4/3] rounded overflow-hidden bg-slate-800 border border-slate-700 mb-3">
                        <img 
                            id="hero-preview-img"
                            src="<?= esc($heroSetting['image_url'] ?? 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=800&q=80') ?>" 
                            alt="Hero Preview" 
                            class="w-full h-full object-cover"
                            onerror="this.src='https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=800&q=80'"
                        >
                    </div>
                    <div class="space-y-1">
                        <h4 id="hero-preview-title" class="font-black text-sm uppercase text-white leading-tight">
                            <?= esc($heroSetting['title'] ?? 'BOLU KEMOJO PANDAN WANGI') ?>
                        </h4>
                        <p id="hero-preview-subtitle" class="text-[11px] text-slate-400">
                            <?= esc($heroSetting['subtitle'] ?? 'Varian Legendaris Resep Tradisional Melayu') ?>
                        </p>
                        <span id="hero-preview-price" class="text-base font-black text-brandAccent block pt-1">
                            Rp <?= number_format((float)($heroSetting['price'] ?? 35000), 0, ',', '.') ?>
                        </span>
                    </div>
                </div>

                <!-- Right: Form to Update Hero Banner -->
                <div class="lg:col-span-8">
                    <form action="<?= base_url('admin/menu/update-hero') ?>" method="post" class="space-y-4">
                        <?= csrf_field() ?>

                        <!-- Quick Select from Existing Menu -->
                        <div class="p-3 bg-indigo-50/70 border border-indigo-200 rounded-md">
                            <label for="select-existing-menu" class="block text-xs font-black uppercase tracking-wider text-indigo-950 mb-1">
                                OPSI CEPAT: PILIH DARI MENU YANG ADA
                            </label>
                            <select 
                                id="select-existing-menu" 
                                class="w-full px-3 py-2 bg-white border border-indigo-300 text-xs text-slate-800 font-bold rounded outline-none"
                            >
                                <option value="">-- Pilih Varian untuk Otomatis Mengisi Kolom --</option>
                                <?php foreach ($menus as $m): ?>
                                    <option 
                                        value="<?= $m['id'] ?>"
                                        data-name="<?= esc(strtoupper($m['name'])) ?>"
                                        data-image="<?= esc($m['image_url'] ?: 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=800&q=80') ?>"
                                        data-price="<?= (int)$m['price'] ?>"
                                        data-category="Varian Unggulan Kategori <?= esc($m['category']) ?>"
                                    >
                                        <?= esc($m['name']) ?> (Rp <?= number_format($m['price'], 0, ',', '.') ?>)
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <span class="text-[10px] text-slate-500 mt-1 block">
                                Memilih salah satu menu di atas akan otomatis mengisi tautan foto, nama, dan harga di bawah.
                            </span>
                        </div>

                        <!-- Hero Image URL -->
                        <div>
                            <label for="hero_image_url" class="block text-xs font-black uppercase tracking-wider text-slate-800 mb-1">
                                URL Foto Menu Utama (Unsplash / Tautan Foto) <span class="text-rose-600">*</span>
                            </label>
                            <input 
                                type="url" 
                                id="hero_image_url" 
                                name="image_url" 
                                value="<?= esc($heroSetting['image_url'] ?? '') ?>" 
                                placeholder="https://images.unsplash.com/photo-..."
                                class="w-full px-4 py-2 bg-slate-50 border-2 border-slate-300 focus:border-brandPrimary focus:bg-white text-xs font-semibold rounded outline-none transition"
                                required
                            >
                        </div>

                        <!-- Grid 2 Kolom: Judul & Harga -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="hero_title" class="block text-xs font-black uppercase tracking-wider text-slate-800 mb-1">
                                    Judul Menu Utama <span class="text-rose-600">*</span>
                                </label>
                                <input 
                                    type="text" 
                                    id="hero_title" 
                                    name="title" 
                                    value="<?= esc($heroSetting['title'] ?? 'BOLU KEMOJO PANDAN WANGI') ?>" 
                                    class="w-full px-3 py-2 bg-slate-50 border-2 border-slate-300 focus:border-brandPrimary focus:bg-white text-xs font-bold uppercase rounded outline-none transition"
                                    required
                                >
                            </div>

                            <div>
                                <label for="hero_price" class="block text-xs font-black uppercase tracking-wider text-slate-800 mb-1">
                                    Harga (IDR) <span class="text-rose-600">*</span>
                                </label>
                                <input 
                                    type="number" 
                                    id="hero_price" 
                                    name="price" 
                                    value="<?= (int)($heroSetting['price'] ?? 35000) ?>" 
                                    class="w-full px-3 py-2 bg-slate-50 border-2 border-slate-300 focus:border-brandPrimary focus:bg-white text-xs font-black rounded outline-none transition"
                                    required
                                >
                            </div>
                        </div>

                        <!-- Subtitle -->
                        <div>
                            <label for="hero_subtitle" class="block text-xs font-black uppercase tracking-wider text-slate-800 mb-1">
                                Subjudul / Keterangan Banner
                            </label>
                            <input 
                                type="text" 
                                id="hero_subtitle" 
                                name="subtitle" 
                                value="<?= esc($heroSetting['subtitle'] ?? 'Varian Legendaris Resep Tradisional Melayu') ?>" 
                                class="w-full px-3 py-2 bg-slate-50 border-2 border-slate-300 focus:border-brandPrimary focus:bg-white text-xs font-medium rounded outline-none transition"
                            >
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-2 flex items-center justify-end">
                            <button 
                                type="submit" 
                                class="px-6 py-2.5 bg-brandPrimary hover:bg-brandPrimaryDark text-white font-black text-xs uppercase tracking-wider rounded shadow transition flex items-center gap-1.5"
                            >
                                <svg class="w-4 h-4 text-brandAccent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>SIMPAN PERUBAHAN FOTO MENU UTAMA</span>
                            </button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Main Data Table (Clean Commercial Grid) -->
    <div class="bg-white border-2 border-slate-300 rounded-lg overflow-hidden shadow-xs">
        <div class="p-4 bg-slate-100 border-b-2 border-slate-300 flex items-center justify-between">
            <h3 class="font-black text-xs uppercase tracking-wider text-slate-900">
                DAFTAR INVENTARIS PRODUK
            </h3>
            <span class="text-xs font-bold text-slate-600">
                Total: <?= count($menus) ?> Data
            </span>
        </div>

        <?php if (empty($menus)): ?>
            <div class="p-12 text-center text-slate-500">
                <p class="font-bold text-sm">Belum ada data menu kuliner.</p>
                <a href="<?= base_url('admin/menu/create') ?>" class="inline-block mt-3 px-4 py-2 bg-brandPrimary text-white font-bold text-xs uppercase rounded">
                    Tambah Menu Pertama
                </a>
            </div>
        <?php else: ?>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50 border-b-2 border-slate-200 text-[11px] font-black uppercase tracking-wider text-slate-700">
                            <th class="py-3 px-4 w-12 text-center">No</th>
                            <th class="py-3 px-4 w-24">Foto</th>
                            <th class="py-3 px-4">Nama Produk & Deskripsi</th>
                            <th class="py-3 px-4 w-32">Kategori</th>
                            <th class="py-3 px-4 w-32">Harga Jual</th>
                            <th class="py-3 px-4 w-36">Terakhir Update</th>
                            <th class="py-3 px-4 w-44 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y border-slate-200 text-xs">
                        <?php foreach ($menus as $idx => $item): ?>
                            <tr class="hover:bg-slate-50 transition">
                                <td class="py-3.5 px-4 text-center font-bold text-slate-500">
                                    <?= $idx + 1 ?>
                                </td>
                                <td class="py-3.5 px-4">
                                    <div class="w-16 h-14 bg-slate-100 border border-slate-300 rounded overflow-hidden">
                                        <img 
                                            src="<?= esc($item['image_url'] ?: 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=200&q=80') ?>" 
                                            alt="<?= esc($item['name']) ?>" 
                                            class="w-full h-full object-cover"
                                        >
                                    </div>
                                </td>
                                <td class="py-3.5 px-4">
                                    <strong class="font-black text-slate-900 text-sm block uppercase leading-snug">
                                        <?= esc($item['name']) ?>
                                    </strong>
                                    <p class="text-[11px] text-slate-600 line-clamp-1 mt-0.5">
                                        <?= esc($item['description']) ?>
                                    </p>
                                </td>
                                <td class="py-3.5 px-4">
                                    <span class="inline-block px-2.5 py-1 bg-slate-100 border border-slate-300 text-slate-800 font-bold uppercase text-[10px] rounded">
                                        <?= esc($item['category']) ?>
                                    </span>
                                </td>
                                <td class="py-3.5 px-4 font-black text-slate-900 text-sm whitespace-nowrap">
                                    Rp <?= number_format($item['price'], 0, ',', '.') ?>
                                </td>
                                <td class="py-3.5 px-4 text-slate-500 whitespace-nowrap">
                                    <?= date('d/m/Y H:i', strtotime($item['updated_at'] ?? $item['created_at'])) ?>
                                </td>
                                <td class="py-3.5 px-4 text-center whitespace-nowrap">
                                    <div class="flex items-center justify-center gap-1 font-bold text-xs">
                                        <!-- Tombol 1-Klik Jadikan Menu Utama Hero -->
                                        <a 
                                            href="<?= base_url('admin/menu/set-hero/' . $item['id']) ?>" 
                                            class="px-2 py-1.5 bg-brandAccent hover:bg-brandAccentDark text-slate-950 font-black rounded transition text-[11px]"
                                            title="Jadikan Foto & Varian Ini Sebagai Menu Utama di Beranda"
                                        >
                                            ★ Utama
                                        </a>

                                        <!-- Tombol Detail -->
                                        <a 
                                            href="<?= base_url('menu/detail/' . $item['id']) ?>" 
                                            target="_blank"
                                            class="px-2 py-1.5 border border-slate-300 hover:bg-slate-100 text-slate-700 rounded transition text-[11px]"
                                            title="Pratinjau Halaman Detail"
                                        >
                                            Lihat
                                        </a>

                                        <!-- Tombol Edit -->
                                        <a 
                                            href="<?= base_url('admin/menu/edit/' . $item['id']) ?>" 
                                            class="px-2 py-1.5 bg-brandPrimary hover:bg-brandPrimaryDark text-white rounded transition text-[11px]"
                                            title="Edit Menu"
                                        >
                                            Edit
                                        </a>

                                        <!-- Tombol Hapus -->
                                        <a 
                                            href="<?= base_url('admin/menu/delete/' . $item['id']) ?>" 
                                            onclick="return confirm('Hapus varian \'<?= addslashes(esc($item['name'])) ?>\' dari etalase?');"
                                            class="px-2 py-1.5 bg-rose-600 hover:bg-rose-700 text-white rounded transition text-[11px]"
                                            title="Hapus Menu"
                                        >
                                            Hapus
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>

</div>

<!-- Realtime Image & Select Script for Hero Settings -->
<script>
    const heroImgInput = document.getElementById('hero_image_url');
    const heroTitleInput = document.getElementById('hero_title');
    const heroPriceInput = document.getElementById('hero_price');
    const heroSubtitleInput = document.getElementById('hero_subtitle');
    const selectMenu = document.getElementById('select-existing-menu');

    const previewImg = document.getElementById('hero-preview-img');
    const previewTitle = document.getElementById('hero-preview-title');
    const previewPrice = document.getElementById('hero-preview-price');
    const previewSubtitle = document.getElementById('hero-preview-subtitle');

    if (heroImgInput && previewImg) {
        heroImgInput.addEventListener('input', function() {
            const val = this.value.trim();
            if (val) {
                previewImg.src = val;
            }
        });
    }

    if (heroTitleInput && previewTitle) {
        heroTitleInput.addEventListener('input', function() {
            previewTitle.textContent = this.value.toUpperCase();
        });
    }

    if (heroPriceInput && previewPrice) {
        heroPriceInput.addEventListener('input', function() {
            const num = parseInt(this.value) || 0;
            previewPrice.textContent = 'Rp ' + num.toLocaleString('id-ID');
        });
    }

    if (heroSubtitleInput && previewSubtitle) {
        heroSubtitleInput.addEventListener('input', function() {
            previewSubtitle.textContent = this.value;
        });
    }

    if (selectMenu) {
        selectMenu.addEventListener('change', function() {
            const opt = this.options[this.selectedIndex];
            if (opt && opt.value) {
                const name = opt.getAttribute('data-name');
                const image = opt.getAttribute('data-image');
                const price = opt.getAttribute('data-price');
                const category = opt.getAttribute('data-category');

                if (heroImgInput) heroImgInput.value = image;
                if (heroTitleInput) heroTitleInput.value = name;
                if (heroPriceInput) heroPriceInput.value = price;
                if (heroSubtitleInput) heroSubtitleInput.value = category;

                if (previewImg) previewImg.src = image;
                if (previewTitle) previewTitle.textContent = name;
                if (previewSubtitle) previewSubtitle.textContent = category;
                if (previewPrice) previewPrice.textContent = 'Rp ' + parseInt(price).toLocaleString('id-ID');
            }
        });
    }
</script>

<?= $this->endSection() ?>
