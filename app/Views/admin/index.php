<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="py-10 sm:py-14 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Breadcrumb & Top Bar -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">
        <div>
            <div class="flex items-center gap-2 text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1">
                <a href="<?= base_url('/') ?>" class="hover:text-brandPrimary">Beranda</a>
                <span>/</span>
                <span class="text-brandPrimary">Admin Dashboard</span>
            </div>
            <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight">
                Kelola Varian Bolu Kemojo
            </h1>
            <p class="text-slate-500 text-sm mt-0.5">
                Kelola seluruh katalog produk, harga, kategori, dan deskripsi Bolu Kemojo khas Kepulauan Riau.
            </p>
        </div>

        <div class="flex items-center gap-3">
            <a 
                href="<?= base_url('/') ?>" 
                class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl border border-slate-300 bg-white text-slate-700 hover:bg-slate-50 text-xs sm:text-sm font-semibold transition-all shadow-sm"
            >
                <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                </svg>
                <span>Lihat Tampilan Web</span>
            </a>

            <a 
                href="<?= base_url('admin/menu/create') ?>" 
                class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-brandPrimary hover:bg-brandPrimaryHover text-white text-xs sm:text-sm font-bold transition-all shadow-md shadow-indigo-500/25 transform hover:-translate-y-0.5"
            >
                <svg class="w-4 h-4 text-brandAccent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/>
                </svg>
                <span>Tambah Menu Baru</span>
            </a>
        </div>
    </div>

    <!-- Quick Stats Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 mb-8">
        <div class="bg-white p-5 rounded-2xl border border-slate-200/80 shadow-sm flex items-center justify-between">
            <div>
                <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider block">Total Menu Terdaftar</span>
                <span class="text-3xl font-extrabold text-slate-900 mt-1 block"><?= count($menus) ?></span>
                <span class="text-[11px] text-emerald-600 font-medium">Aktif di etalase</span>
            </div>
            <div class="w-12 h-12 rounded-xl bg-indigo-50 text-brandPrimary flex items-center justify-center font-bold">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                </svg>
            </div>
        </div>

        <div class="bg-white p-5 rounded-2xl border border-slate-200/80 shadow-sm flex items-center justify-between">
            <div>
                <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider block">Ragam Kategori</span>
                <span class="text-3xl font-extrabold text-slate-900 mt-1 block"><?= count($categories) ?></span>
                <span class="text-[11px] text-indigo-600 font-medium">Pilihan varian rasa</span>
            </div>
            <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center font-bold">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                </svg>
            </div>
        </div>

        <div class="bg-white p-5 rounded-2xl border border-slate-200/80 shadow-sm flex items-center justify-between">
            <div>
                <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider block">Rentang Harga</span>
                <?php 
                    $prices = array_column($menus, 'price');
                    $minPrice = !empty($prices) ? min($prices) : 0;
                    $maxPrice = !empty($prices) ? max($prices) : 0;
                ?>
                <span class="text-xl sm:text-2xl font-extrabold text-slate-900 mt-1 block">
                    Rp <?= number_format($minPrice, 0, ',', '.') ?> - <?= number_format($maxPrice, 0, ',', '.') ?>
                </span>
                <span class="text-[11px] text-slate-500 font-medium">Bolu Kemojo artisan</span>
            </div>
            <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center font-bold">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
        </div>
    </div>

    <!-- Flashdata Notification Alerts -->
    <?php if (session()->getFlashdata('success')): ?>
        <div class="mb-6 p-4 rounded-2xl bg-emerald-50 border border-emerald-200 flex items-start gap-3 text-emerald-800 shadow-sm animate-fade-in">
            <svg class="w-5 h-5 text-emerald-600 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <div class="flex-1 text-sm font-semibold">
                <?= esc(session()->getFlashdata('success')) ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="mb-6 p-4 rounded-2xl bg-rose-50 border border-rose-200 flex items-start gap-3 text-rose-800 shadow-sm">
            <svg class="w-5 h-5 text-rose-600 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <div class="flex-1 text-sm font-semibold">
                <?= esc(session()->getFlashdata('error')) ?>
            </div>
        </div>
    <?php endif; ?>

    <!-- Main Data Table Card -->
    <div class="bg-white rounded-3xl border border-slate-200/80 shadow-sm overflow-hidden">
        <div class="px-6 py-5 border-b border-slate-100 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
            <div>
                <h3 class="font-bold text-slate-800 text-lg">Daftar Menu Tersimpan</h3>
                <p class="text-xs text-slate-500">Seluruh varian yang tampil pada etalase katalog utama pelanggan.</p>
            </div>
            <span class="text-xs font-semibold px-3 py-1 bg-slate-100 text-slate-600 rounded-full self-start sm:self-auto">
                Total: <?= count($menus) ?> Item
            </span>
        </div>

        <?php if (empty($menus)): ?>
            <div class="p-12 text-center">
                <div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-slate-100 text-slate-400 flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                    </svg>
                </div>
                <h4 class="text-base font-bold text-slate-800 mb-1">Belum Ada Menu</h4>
                <p class="text-xs text-slate-500 max-w-sm mx-auto mb-5">
                    Data menu masih kosong. Silakan jalankan seeder atau buat varian menu baru sekarang.
                </p>
                <a href="<?= base_url('admin/menu/create') ?>" class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-brandPrimary text-white text-xs font-bold shadow-md hover:bg-brandPrimaryHover transition-all">
                    <span>+ Tambah Menu Pertama</span>
                </a>
            </div>
        <?php else: ?>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50/80 border-b border-slate-100 text-[11px] font-extrabold uppercase tracking-wider text-slate-500">
                            <th class="py-4 px-6 w-12 text-center">No</th>
                            <th class="py-4 px-6 w-24">Foto</th>
                            <th class="py-4 px-6">Nama & Deskripsi Varian</th>
                            <th class="py-4 px-6 w-36">Kategori</th>
                            <th class="py-4 px-6 w-36">Harga</th>
                            <th class="py-4 px-6 w-44">Pembaruan Terakhir</th>
                            <th class="py-4 px-6 w-36 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-sm">
                        <?php foreach ($menus as $idx => $item): ?>
                            <tr class="hover:bg-slate-50/70 transition-colors group">
                                <td class="py-4 px-6 text-center font-bold text-slate-400 text-xs">
                                    <?= $idx + 1 ?>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="w-16 h-16 rounded-xl overflow-hidden bg-slate-100 border border-slate-200/80 shrink-0 shadow-sm">
                                        <img 
                                            src="<?= esc($item['image_url'] ?: 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=200&q=80') ?>" 
                                            alt="<?= esc($item['name']) ?>" 
                                            class="w-full h-full object-cover group-hover:scale-105 transition-transform"
                                        >
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="font-bold text-slate-900 group-hover:text-brandPrimary transition-colors text-sm sm:text-base">
                                        <?= esc($item['name']) ?>
                                    </div>
                                    <p class="text-xs text-slate-500 line-clamp-1 mt-1 max-w-md">
                                        <?= esc($item['description']) ?>
                                    </p>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="inline-block px-3 py-1 rounded-full text-xs font-bold
                                        <?php 
                                            switch (strtolower($item['category'])) {
                                                case 'pandan':
                                                    echo 'bg-emerald-100 text-emerald-800 border border-emerald-200';
                                                    break;
                                                case 'keju':
                                                    echo 'bg-amber-100 text-amber-800 border border-amber-200';
                                                    break;
                                                case 'cokelat':
                                                    echo 'bg-stone-100 text-stone-800 border border-stone-300';
                                                    break;
                                                case 'durian':
                                                    echo 'bg-yellow-100 text-yellow-800 border border-yellow-200';
                                                    break;
                                                case 'paket':
                                                    echo 'bg-indigo-100 text-indigo-800 border border-indigo-200';
                                                    break;
                                                default:
                                                    echo 'bg-purple-100 text-purple-800 border border-purple-200';
                                                    break;
                                            }
                                        ?>
                                    ">
                                        <?= esc($item['category']) ?>
                                    </span>
                                </td>
                                <td class="py-4 px-6 font-extrabold text-slate-900 whitespace-nowrap">
                                    Rp <?= number_format($item['price'], 0, ',', '.') ?>
                                </td>
                                <td class="py-4 px-6 text-xs text-slate-500 whitespace-nowrap">
                                    <?= date('d M Y, H:i', strtotime($item['updated_at'] ?? $item['created_at'])) ?> WIB
                                </td>
                                <td class="py-4 px-6 text-center whitespace-nowrap">
                                    <div class="flex items-center justify-center gap-1.5">
                                        
                                        <!-- Tombol Detail -->
                                        <a 
                                            href="<?= base_url('menu/detail/' . $item['id']) ?>" 
                                            class="p-2 rounded-xl text-slate-600 hover:text-brandPrimary hover:bg-brandSoft transition-colors"
                                            title="Lihat Detail Menu"
                                            target="_blank"
                                        >
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                            </svg>
                                        </a>

                                        <!-- Tombol Edit -->
                                        <a 
                                            href="<?= base_url('admin/menu/edit/' . $item['id']) ?>" 
                                            class="p-2 rounded-xl text-amber-600 hover:text-amber-700 hover:bg-amber-50 transition-colors"
                                            title="Edit Menu"
                                        >
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                            </svg>
                                        </a>

                                        <!-- Tombol Hapus (Dialog Konfirmasi) -->
                                        <a 
                                            href="<?= base_url('admin/menu/delete/' . $item['id']) ?>" 
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus varian menu \'<?= addslashes(esc($item['name'])) ?>\'? Tindakan ini bersifat permanen.');"
                                            class="p-2 rounded-xl text-rose-600 hover:text-rose-700 hover:bg-rose-50 transition-colors"
                                            title="Hapus Menu"
                                        >
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
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

<?= $this->endSection() ?>
