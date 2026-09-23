<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="py-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Top Breadcrumb -->
    <div class="text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">
        <a href="<?= base_url('/') ?>" class="hover:text-brandPrimary">BERANDA</a> / 
        <a href="<?= base_url('admin/menu') ?>" class="hover:text-brandPrimary">KELOLA MENU</a> / 
        <span class="text-slate-900"><?= !empty($menu) ? 'EDIT MENU' : 'TAMBAH BARU' ?></span>
    </div>

    <div class="pb-6 border-b-2 border-slate-300 mb-8">
        <h1 class="text-2xl sm:text-3xl font-black text-slate-900 uppercase tracking-tight">
            <?= esc($title) ?>
        </h1>
        <p class="text-xs sm:text-sm text-slate-600 font-medium mt-0.5">
            Lengkapi data formulir di bawah ini dengan lengkap dan teliti untuk katalog etalase online.
        </p>
    </div>

    <!-- =========================================================================
         FITUR 2: BLOK NOTIFIKASI ERROR VALIDASI KETAT CI4
         ========================================================================= -->
    <?php if (!empty($errors)): ?>
        <div class="mb-8 p-5 bg-rose-50 border-2 border-rose-500 rounded-md" role="alert">
            <div class="flex items-start gap-3">
                <div class="w-6 h-6 bg-rose-600 text-white rounded flex items-center justify-center font-black text-xs shrink-0 mt-0.5">
                    !
                </div>
                <div class="flex-1">
                    <h3 class="text-xs sm:text-sm font-black uppercase text-rose-900 tracking-wide">
                        PERIKSA KEMBALI INPUT FORM (<?= count($errors) ?> KESALAHAN):
                    </h3>
                    <ul class="mt-2 text-xs text-rose-800 list-disc list-inside space-y-1 font-semibold">
                        <?php foreach ($errors as $field => $errorMsg): ?>
                            <li><strong class="uppercase"><?= esc($field) ?>:</strong> <?= esc($errorMsg) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- Form Container -->
    <div class="bg-white border-2 border-slate-300 rounded-lg p-6 sm:p-8 shadow-xs">
        <form action="<?= $action ?>" method="post" class="space-y-6">
            <?= csrf_field() ?>

            <!-- Field 1: Nama Menu -->
            <div>
                <label for="name" class="block text-xs font-black uppercase tracking-wider text-slate-800 mb-1.5">
                    NAMA VARIAN MENU <span class="text-rose-600">*</span>
                </label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    value="<?= old('name', $menu['name'] ?? '') ?>" 
                    placeholder="Contoh: Bolu Kemojo Pandan Wangi Asli"
                    class="w-full px-4 py-2.5 bg-slate-50 border-2 <?= isset($errors['name']) ? 'border-rose-500 bg-rose-50/30' : 'border-slate-300 focus:border-brandPrimary focus:bg-white' ?> text-sm text-slate-900 font-semibold rounded outline-none transition"
                    required
                >
                <?php if (isset($errors['name'])): ?>
                    <p class="mt-1 text-xs text-rose-600 font-bold"><?= esc($errors['name']) ?></p>
                <?php else: ?>
                    <p class="mt-1 text-[11px] text-slate-500">Minimal 3 karakter. Gunakan nama yang menarik dan jelas bagi pembeli.</p>
                <?php endif; ?>
            </div>

            <!-- Grid 2 Kolom: Kategori & Harga -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                
                <!-- Field 2: Kategori -->
                <div>
                    <label for="category" class="block text-xs font-black uppercase tracking-wider text-slate-800 mb-1.5">
                        KATEGORI MENU <span class="text-rose-600">*</span>
                    </label>
                    <?php 
                        $currentCat = old('category', $menu['category'] ?? '');
                        $presetCategories = ['Pandan', 'Keju', 'Cokelat', 'Durian', 'Original', 'Modern', 'Paket'];
                        $allCats = array_unique(array_merge($presetCategories, $categories));
                    ?>
                    <select 
                        id="category" 
                        name="category" 
                        class="w-full px-4 py-2.5 bg-slate-50 border-2 <?= isset($errors['category']) ? 'border-rose-500 bg-rose-50/30' : 'border-slate-300 focus:border-brandPrimary focus:bg-white' ?> text-sm text-slate-900 font-semibold rounded outline-none transition"
                        required
                    >
                        <option value="">-- PILIH KATEGORI --</option>
                        <?php foreach ($allCats as $cat): ?>
                            <option value="<?= esc($cat) ?>" <?= (strcasecmp($currentCat, $cat) === 0) ? 'selected' : '' ?>>
                                <?= esc(strtoupper($cat)) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <?php if (isset($errors['category'])): ?>
                        <p class="mt-1 text-xs text-rose-600 font-bold"><?= esc($errors['category']) ?></p>
                    <?php endif; ?>
                </div>

                <!-- Field 3: Harga -->
                <div>
                    <label for="price" class="block text-xs font-black uppercase tracking-wider text-slate-800 mb-1.5">
                        HARGA JUAL (IDR) <span class="text-rose-600">*</span>
                    </label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 font-black text-slate-500 text-xs pointer-events-none">
                            Rp
                        </span>
                        <input 
                            type="number" 
                            step="500" 
                            id="price" 
                            name="price" 
                            value="<?= old('price', isset($menu['price']) ? (int)$menu['price'] : '') ?>" 
                            placeholder="35000"
                            class="w-full pl-10 pr-4 py-2.5 bg-slate-50 border-2 <?= isset($errors['price']) ? 'border-rose-500 bg-rose-50/30' : 'border-slate-300 focus:border-brandPrimary focus:bg-white' ?> text-sm text-slate-900 font-bold rounded outline-none transition"
                            required
                        >
                    </div>
                    <?php if (isset($errors['price'])): ?>
                        <p class="mt-1 text-xs text-rose-600 font-bold"><?= esc($errors['price']) ?></p>
                    <?php else: ?>
                        <p class="mt-1 text-[11px] text-slate-500">Angka nominal lebih besar dari 0.</p>
                    <?php endif; ?>
                </div>

            </div>

            <!-- Field 4: Image URL (Dummy Unsplash) -->
            <div>
                <label for="image_url" class="block text-xs font-black uppercase tracking-wider text-slate-800 mb-1.5">
                    URL FOTO MENU (UNSPLASH / TAUTAN LANGSUNG)
                </label>
                <input 
                    type="url" 
                    id="image_url" 
                    name="image_url" 
                    value="<?= old('image_url', $menu['image_url'] ?? '') ?>" 
                    placeholder="https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=800&q=80"
                    class="w-full px-4 py-2.5 bg-slate-50 border-2 <?= isset($errors['image_url']) ? 'border-rose-500 bg-rose-50/30' : 'border-slate-300 focus:border-brandPrimary focus:bg-white' ?> text-sm text-slate-900 rounded outline-none transition"
                >
                <?php if (isset($errors['image_url'])): ?>
                    <p class="mt-1 text-xs text-rose-600 font-bold"><?= esc($errors['image_url']) ?></p>
                <?php endif; ?>

                <!-- Live Preview Bar -->
                <div class="mt-3 p-3 bg-slate-100 border border-slate-300 rounded flex items-center gap-3">
                    <img 
                        id="preview-img" 
                        src="<?= esc(old('image_url', $menu['image_url'] ?? 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=200&q=80')) ?>" 
                        alt="Preview" 
                        class="w-14 h-12 object-cover rounded border border-slate-300 shrink-0"
                        onerror="this.src='https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=200&q=80'"
                    >
                    <div class="text-xs text-slate-600">
                        <strong class="text-slate-800 block">Pratinjau Foto Menu</strong>
                        <span>Foto akan otomatis berganti saat URL gambar diubah.</span>
                    </div>
                </div>
            </div>

            <!-- Field 5: Deskripsi Menu -->
            <div>
                <label for="description" class="block text-xs font-black uppercase tracking-wider text-slate-800 mb-1.5">
                    DESKRIPSI LENGKAP CITA RASA <span class="text-rose-600">*</span>
                </label>
                <textarea 
                    id="description" 
                    name="description" 
                    rows="4" 
                    placeholder="Tuliskan komposisi rasa, wangi pandan, kelembutan tekstur, dan ciri khas rasa Melayu Kepri..."
                    class="w-full px-4 py-2.5 bg-slate-50 border-2 <?= isset($errors['description']) ? 'border-rose-500 bg-rose-50/30' : 'border-slate-300 focus:border-brandPrimary focus:bg-white' ?> text-sm text-slate-900 rounded outline-none transition leading-relaxed"
                    required
                ><?= old('description', $menu['description'] ?? '') ?></textarea>
                <?php if (isset($errors['description'])): ?>
                    <p class="mt-1 text-xs text-rose-600 font-bold"><?= esc($errors['description']) ?></p>
                <?php else: ?>
                    <p class="mt-1 text-[11px] text-slate-500">Minimal 10 karakter untuk menjelaskan kelezatan kue secara informatif.</p>
                <?php endif; ?>
            </div>

            <!-- Submit Action Buttons -->
            <div class="pt-4 border-t-2 border-slate-200 flex items-center justify-end gap-3">
                <a 
                    href="<?= base_url('admin/menu') ?>" 
                    class="px-6 py-3 border-2 border-slate-300 hover:bg-slate-100 text-slate-800 font-bold text-xs uppercase tracking-wider rounded transition"
                >
                    BATAL
                </a>
                <button 
                    type="submit" 
                    class="px-7 py-3 bg-brandPrimary hover:bg-brandPrimaryDark text-white font-black text-xs uppercase tracking-wider rounded shadow transition"
                >
                    <?= !empty($menu) ? 'SIMPAN PERUBAHAN MENU' : 'SIMPAN VARIAN MENU' ?>
                </button>
            </div>

        </form>
    </div>

</div>

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
