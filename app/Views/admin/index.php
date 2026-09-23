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
                Sistem Pengelolaan Katalog Varian & Harga Syauqi Bolu Kemojo (Khas Kepulauan Riau).
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
                            <th class="py-3 px-4 w-36">Harga Jual</th>
                            <th class="py-3 px-4 w-40">Terakhir Update</th>
                            <th class="py-3 px-4 w-36 text-center">Aksi</th>
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
                                    <div class="flex items-center justify-center gap-1.5 font-bold text-xs">
                                        <a 
                                            href="<?= base_url('menu/detail/' . $item['id']) ?>" 
                                            target="_blank"
                                            class="px-2.5 py-1.5 border border-slate-300 hover:bg-slate-100 text-slate-700 rounded transition"
                                            title="Pratinjau Halaman Detail"
                                        >
                                            Lihat
                                        </a>
                                        <a 
                                            href="<?= base_url('admin/menu/edit/' . $item['id']) ?>" 
                                            class="px-2.5 py-1.5 bg-brandPrimary hover:bg-brandPrimaryDark text-white rounded transition"
                                            title="Edit Menu"
                                        >
                                            Edit
                                        </a>
                                        <a 
                                            href="<?= base_url('admin/menu/delete/' . $item['id']) ?>" 
                                            onclick="return confirm('Hapus varian \'<?= addslashes(esc($item['name'])) ?>\' dari etalase?');"
                                            class="px-2.5 py-1.5 bg-rose-600 hover:bg-rose-700 text-white rounded transition"
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

<?= $this->endSection() ?>
