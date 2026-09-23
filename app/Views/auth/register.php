<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="py-14 px-4 sm:px-6 lg:px-8 bg-slate-100 flex items-center justify-center min-h-[75vh]">
    <div class="max-w-lg w-full space-y-6">
        
        <div class="text-center space-y-1">
            <span class="bg-brandPrimary text-white font-black text-[10px] px-2.5 py-1 uppercase rounded tracking-wider">
                REGISTRASI PELANGGAN
            </span>
            <h2 class="text-2xl sm:text-3xl font-black text-slate-900 uppercase tracking-tight">
                BUAT AKUN BARU
            </h2>
            <p class="text-xs text-slate-600 font-medium">
                Daftar akun untuk kemudahan pemesanan Bolu Kemojo khas Kepulauan Riau.
            </p>
        </div>

        <?php if (!empty($errors)): ?>
            <div class="p-4 bg-rose-50 border-2 border-rose-500 rounded text-xs text-rose-800">
                <p class="font-bold mb-1">Perbaiki data pendaftaran berikut:</p>
                <ul class="list-disc list-inside space-y-0.5">
                    <?php foreach ($errors as $err): ?>
                        <li><?= esc($err) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <div class="bg-white border-2 border-slate-300 rounded-lg p-6 sm:p-8 shadow-xs">
            <form action="<?= base_url('register') ?>" method="post" class="space-y-4">
                <?= csrf_field() ?>

                <div>
                    <label for="name" class="block text-xs font-black uppercase tracking-wider text-slate-800 mb-1">
                        Nama Lengkap <span class="text-rose-600">*</span>
                    </label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        value="<?= old('name') ?>" 
                        placeholder="Contoh: Budi Santoso"
                        class="w-full px-4 py-2.5 bg-slate-50 border-2 <?= isset($errors['name']) ? 'border-rose-500' : 'border-slate-300 focus:border-brandPrimary focus:bg-white' ?> text-sm text-slate-900 rounded outline-none transition"
                        required
                    >
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="username" class="block text-xs font-black uppercase tracking-wider text-slate-800 mb-1">
                            Username <span class="text-rose-600">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="username" 
                            name="username" 
                            value="<?= old('username') ?>" 
                            placeholder="budisantoso"
                            class="w-full px-4 py-2.5 bg-slate-50 border-2 <?= isset($errors['username']) ? 'border-rose-500' : 'border-slate-300 focus:border-brandPrimary focus:bg-white' ?> text-sm text-slate-900 rounded outline-none transition"
                            required
                        >
                    </div>
                    <div>
                        <label for="email" class="block text-xs font-black uppercase tracking-wider text-slate-800 mb-1">
                            Email <span class="text-rose-600">*</span>
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            value="<?= old('email') ?>" 
                            placeholder="budi@gmail.com"
                            class="w-full px-4 py-2.5 bg-slate-50 border-2 <?= isset($errors['email']) ? 'border-rose-500' : 'border-slate-300 focus:border-brandPrimary focus:bg-white' ?> text-sm text-slate-900 rounded outline-none transition"
                            required
                        >
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="password" class="block text-xs font-black uppercase tracking-wider text-slate-800 mb-1">
                            Kata Sandi <span class="text-rose-600">*</span>
                        </label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            placeholder="Min 6 karakter"
                            class="w-full px-4 py-2.5 bg-slate-50 border-2 <?= isset($errors['password']) ? 'border-rose-500' : 'border-slate-300 focus:border-brandPrimary focus:bg-white' ?> text-sm text-slate-900 rounded outline-none transition"
                            required
                        >
                    </div>
                    <div>
                        <label for="password_confirm" class="block text-xs font-black uppercase tracking-wider text-slate-800 mb-1">
                            Ulangi Sandi <span class="text-rose-600">*</span>
                        </label>
                        <input 
                            type="password" 
                            id="password_confirm" 
                            name="password_confirm" 
                            placeholder="Ulangi sandi"
                            class="w-full px-4 py-2.5 bg-slate-50 border-2 <?= isset($errors['password_confirm']) ? 'border-rose-500' : 'border-slate-300 focus:border-brandPrimary focus:bg-white' ?> text-sm text-slate-900 rounded outline-none transition"
                            required
                        >
                    </div>
                </div>

                <div class="pt-2">
                    <button 
                        type="submit" 
                        class="w-full py-3 bg-brandPrimary hover:bg-brandPrimaryDark text-white font-black text-xs uppercase tracking-wider rounded shadow transition"
                    >
                        DAFTAR SEKARANG
                    </button>
                </div>
            </form>

            <div class="mt-5 pt-4 border-t border-slate-200 text-center text-xs text-slate-600">
                <span>Sudah memiliki akun?</span>
                <a href="<?= base_url('login') ?>" class="font-bold text-brandPrimary hover:underline ml-1">
                    Masuk ke Akun
                </a>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection() ?>
