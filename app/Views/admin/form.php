<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="py-10 sm:py-14 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Top Breadcrumb -->
    <div class="mb-8">
        <div class="flex items-center gap-2 text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1">
            <a href="<?= base_url('/') ?>" class="hover:text-brandPrimary">Beranda</a>
            <span>/</span>
            <a href="<?= base_url('admin/menu') ?>" class="hover:text-brandPrimary">Admin Kelola Menu</a>
            <span>/</span>
            <span class="text-brandPrimary"><?= !empty($menu) ? 'Edit Menu' : 'Tambah Menu Baru' ?></span>
        </div>
        <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight">
            <?= esc($title) ?>
        </h1>
        <p class="text-slate-500 text-sm mt-0.5">
            Lengkapi formulir di bawah ini dengan informasi akurat. Seluruh input diverifikasi secara ketat.
        </p>
    </div>

    <!-- =========================================================================
         FITUR 2 (ADMIN): BLOK ALERT ERROR VALIDASI FORM CI4
         ========================================================================= -->
    <?php if (!empty($errors)): ?>
        <div class="mb-8 p-5 rounded-2xl bg-rose-50 border-2 border-rose-300 shadow-sm animate-fade-in" role="alert">
            <div class="flex items-start gap-3.5">
                <div class="w-8 h-8 rounded-xl bg-rose-100 text-rose-700 flex items-center justify-center shrink-0 mt-0.5">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                    </svg>
                </div>
                <div class="flex-1">
                    <h3 class="text-sm font-bold text-rose-900 tracking-tight">
                        Mohon Perbaiki <?= count($errors) ?> Kesalahan Input Form Berikut:
                    </h3>
                    <ul class="mt-2 text-xs sm:text-sm text-rose-700 list-disc list-inside space-y-1">
                        <?php foreach ($errors as $field => $errorMsg): ?>
                            <li>
                                <span class="font-bold capitalize"><?= esc($field) ?>:</span> <?= esc($errorMsg) ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- Main Form Container -->
    <div class="bg-white rounded-3xl border border-slate-200/80 shadow-sm p-6 sm:p-10">
        <form action="<?= $action ?>" method="post" class="space-y-6">
            <?= csrf_field() ?>

            <!-- Field 1: Nama Menu -->
            <div>
                <label for="name" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                    Nama Varian Bolu Kemojo <span class="text-rose-500">*</span>
                </label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    value="<?= old('name', $menu['name'] ?? '') ?>" 
                    placeholder="Contoh: Bolu Kemojo Pandan Wangi Asli"
                    class="w-full px-4 py-3 rounded-xl border <?= isset($errors['name']) ? 'border-rose-400 ring-2 ring-rose-100 bg-rose-50/20' : 'border-slate-300 focus:border-brandPrimary focus:ring-4 focus:ring-brandPrimary/10' ?> text-sm text-slate-800 placeholder-slate-400 transition-all outline-none"
                    required
                >
                <?php if (isset($errors['name'])): ?>
                    <p class="mt-1.5 text-xs text-rose-600 font-semibold flex items-center gap-1">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        <?= esc($errors['name']) ?>
                    </p>
                <?php else: ?>
                    <p class="mt-1.5 text-[11px] text-slate-400">Minimal 3 karakter. Berikan nama yang menarik dan mencerminkan keaslian rasa.</p>
                <?php endif; ?>
            </div>

            <!-- Grid 2 Kolom: Kategori & Harga -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                
                <!-- Field 2: Kategori -->
                <div>
                    <label for="category" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                        Kategori Varian <span class="text-rose-500">*</span>
                    </label>
                    <?php 
                        $currentCat = old('category', $menu['category'] ?? '');
                    ?>
                    <select 
                        id="category" 
                        name="category" 
                        class="w-full px-4 py-3 rounded-xl border <?= isset($errors['category']) ? 'border-rose-400 ring-2 ring-rose-100 bg-rose-50/20' : 'border-slate-300 focus:border-brandPrimary focus:ring-4 focus:ring-brandPrimary/10' ?> text-sm text-slate-800 bg-white transition-all outline-none"
                        required
                    >
                        <option value="">-- Pilih Kategori Menu --</option>
                        <?php 
                            $presetCategories = ['Pandan', 'Keju', 'Cokelat', 'Durian', 'Original', 'Modern', 'Paket'];
                            $allCats = array_unique(array_merge($presetCategories, $categories));
                        ?>
                        <?php foreach ($allCats as $catOption): ?>
                            <option value="<?= esc($catOption) ?>" <?= (strcasecmp($currentCat, $catOption) === 0) ? 'selected' : '' ?>>
                                <?= esc($catOption) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <?php if (isset($errors['category'])): ?>
                        <p class="mt-1.5 text-xs text-rose-600 font-semibold flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                            </svg>
                            <?= esc($errors['category']) ?>
                        </p>
                    <?php else: ?>
                        <p class="mt-1.5 text-[11px] text-slate-400">Pilih salah satu kategori menu untuk memudahkan filter pelanggan.</p>
                    <?php endif; ?>
                </div>

                <!-- Field 3: Harga (Price) -->
                <div>
                    <label for="price" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                        Harga Jual (IDR) <span class="text-rose-500">*</span>
                    </label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-4 font-bold text-slate-400 text-sm pointer-events-none">
                            Rp
                        </span>
                        <input 
                            type="number" 
                            step="500" 
                            id="price" 
                            name="price" 
                            value="<?= old('price', isset($menu['price']) ? (int)$menu['price'] : '') ?>" 
                            placeholder="35000"
                            class="w-full pl-12 pr-4 py-3 rounded-xl border <?= isset($errors['price']) ? 'border-rose-400 ring-2 ring-rose-100 bg-rose-50/20' : 'border-slate-300 focus:border-brandPrimary focus:ring-4 focus:ring-brandPrimary/10' ?> text-sm text-slate-800 placeholder-slate-400 transition-all outline-none"
                            required
                        >
                    </div>
                    <?php if (isset($errors['price'])): ?>
                        <p class="mt-1.5 text-xs text-rose-600 font-semibold flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                            </svg>
                            <?= esc($errors['price']) ?>
                        </p>
                    <?php else: ?>
                        <p class="mt-1.5 text-[11px] text-slate-400">Harus berupa angka lebih besar dari 0.</p>
                    <?php endif; ?>
                </div>

            </div>

            <!-- Field 4: Image URL (Dummy Unsplash) -->
            <div>
                <label for="image_url" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                    URL Gambar Produk (Unsplash / Tautan Gambar)
                </label>
                <input 
                    type="url" 
                    id="image_url" 
                    name="image_url" 
                    value="<?= old('image_url', $menu['image_url'] ?? '') ?>" 
                    placeholder="https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=800&q=80"
                    class="w-full px-4 py-3 rounded-xl border <?= isset($errors['image_url']) ? 'border-rose-400 ring-2 ring-rose-100 bg-rose-50/20' : 'border-slate-300 focus:border-brandPrimary focus:ring-4 focus:ring-brandPrimary/10' ?> text-sm text-slate-800 placeholder-slate-400 transition-all outline-none"
                >
                <?php if (isset($errors['image_url'])): ?>
                    <p class="mt-1.5 text-xs text-rose-600 font-semibold flex items-center gap-1">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        <?= esc($errors['image_url']) ?>
                    </p>
                <?php else: ?>
                    <p class="mt-1.5 text-[11px] text-slate-400">Opsional. Jika dikosongkan, sistem otomatis menggunakan foto kue standar berkualitas tinggi.</p>
                <?php endif; ?>

                <!-- Image Live Preview Box -->
                <div class="mt-3 flex items-center gap-3 p-3 rounded-xl bg-slate-50 border border-slate-200">
                    <div class="w-14 h-14 rounded-lg overflow-hidden bg-slate-200 shrink-0 border border-slate-300 flex items-center justify-center">
                        <img 
                            id="preview-img" 
                            src="<?= esc(old('image_url', $menu['image_url'] ?? 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=200&q=80')) ?>" 
                            alt="Pratinjau Foto" 
                            class="w-full h-full object-cover"
                            onerror="this.src='https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=200&q=80'"
                        >
                    </div>
                    <div class="text-xs text-slate-500">
                        <span class="font-bold text-slate-700 block">Pratinjau Foto Menu</span>
                        <span>Foto akan diperbarui otomatis saat URL gambar diganti.</span>
                    </div>
                </div>
            </div>

            <!-- Field 5: Deskripsi Menu -->
            <div>
                <label for="description" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                    Deskripsi Lengkap Kelezatan <span class="text-rose-500">*</span>
                </label>
                <textarea 
                    id="description" 
                    name="description" 
                    rows="4" 
                    placeholder="Jelaskan aroma pandan, rasa gurih santan, kelembutan tekstur, dan keunikan khas Kepulauan Riau dari varian ini..."
                    class="w-full px-4 py-3 rounded-xl border <?= isset($errors['description']) ? 'border-rose-400 ring-2 ring-rose-100 bg-rose-50/20' : 'border-slate-300 focus:border-brandPrimary focus:ring-4 focus:ring-brandPrimary/10' ?> text-sm text-slate-800 placeholder-slate-400 transition-all outline-none leading-relaxed"
                    required
                ><?= old('description', $menu['description'] ?? '') ?></textarea>
                <?php if (isset($errors['description'])): ?>
                    <p class="mt-1.5 text-xs text-rose-600 font-semibold flex items-center gap-1">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        <?= esc($errors['description']) ?>
                    </p>
                <?php else: ?>
                    <p class="mt-1.5 text-[11px] text-slate-400">Minimal 10 karakter. Deskripsi detail membantu pembeli mengenal ciri khas rasa.</p>
                <?php endif; ?>
            </div>

            <!-- Form Action Buttons -->
            <div class="pt-4 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-end gap-3">
                <a 
                    href="<?= base_url('admin/menu') ?>" 
                    class="w-full sm:w-auto px-6 py-3 rounded-xl border border-slate-300 hover:bg-slate-100 text-slate-700 font-semibold text-sm text-center transition-all"
                >
                    Batal
                </a>
                <button 
                    type="submit" 
                    class="w-full sm:w-auto px-7 py-3 rounded-xl bg-brandPrimary hover:bg-brandPrimaryHover text-white font-bold text-sm shadow-lg shadow-indigo-500/25 transition-all transform hover:-translate-y-0.5 inline-flex items-center justify-center gap-2"
                >
                    <svg class="w-4 h-4 text-brandAccent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span><?= !empty($menu) ? 'Perbarui Data Menu' : 'Simpan Varian Menu' ?></span>
                </button>
            </div>

        </form>
    </div>

</div>

<!-- Realtime Image Preview Script -->
<script>
    const imgInput = document.getElementById('image_url');
    const previewImg = document.getElementById('preview-img');

    if (imgInput && previewImg) {
        imgInput.addEventListener('input', function() {
            const val = this.value.trim();
            if (val) {
                previewImg.src = val;
            } else {
                previewImg.src = 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=200&q=80';
            }
        });
    }
</script>

<?= $this->endSection() ?>
