<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="min-h-[85vh] flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-indigo-50/50 via-white to-slate-50 relative overflow-hidden">
    
    <!-- Background Blurs -->
    <div class="absolute -top-20 -right-20 w-80 h-80 bg-brandPrimary/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-brandAccent/15 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-lg w-full space-y-6 relative z-10">
        
        <!-- Header -->
        <div class="text-center space-y-2">
            <div class="inline-flex items-center justify-center w-14 h-14 rounded-2xl bg-gradient-to-tr from-brandPrimary via-indigo-600 to-brandAccent text-white shadow-xl shadow-indigo-500/20 mb-2">
                <svg class="w-7 h-7 text-amber-300" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2C13.5 5 15.5 6.5 19 7C17.5 10 17.5 12.5 19 15.5C15.5 16 13.5 17.5 12 20.5C10.5 17.5 8.5 16 5 15.5C6.5 12.5 6.5 10 5 7C8.5 6.5 10.5 5 12 2Z"/>
                </svg>
            </div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
                Daftar Akun Baru
            </h2>
            <p class="text-xs sm:text-sm text-slate-500">
                Bergabunglah bersama keluarga penikmat kuliner khas Kepulauan Riau
            </p>
        </div>

        <!-- Global Errors Alert -->
        <?php if (!empty($errors)): ?>
            <div class="p-4 rounded-2xl bg-rose-50 border border-rose-200 text-rose-800 text-xs sm:text-sm">
                <p class="font-bold mb-1">Periksa kembali data pendaftaran Anda:</p>
                <ul class="list-disc list-inside space-y-0.5 text-xs">
                    <?php foreach ($errors as $err): ?>
                        <li><?= esc($err) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <!-- Form Card -->
        <div class="bg-white rounded-3xl border border-slate-200/80 shadow-xl p-6 sm:p-8">
            <form action="<?= base_url('register') ?>" method="post" class="space-y-4">
                <?= csrf_field() ?>

                <!-- Name -->
                <div>
                    <label for="name" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">
                        Nama Lengkap <span class="text-rose-500">*</span>
                    </label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        value="<?= old('name') ?>" 
                        placeholder="Contoh: Azka Okana"
                        class="w-full px-4 py-2.5 rounded-xl border <?= isset($errors['name']) ? 'border-rose-400 ring-2 ring-rose-100 bg-rose-50/20' : 'border-slate-300 focus:border-brandPrimary focus:ring-4 focus:ring-brandPrimary/10' ?> text-sm text-slate-800 placeholder-slate-400 transition-all outline-none"
                        required
                    >
                </div>

                <!-- Username & Email -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="username" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">
                            Username <span class="text-rose-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="username" 
                            name="username" 
                            value="<?= old('username') ?>" 
                            placeholder="azkaokana"
                            class="w-full px-4 py-2.5 rounded-xl border <?= isset($errors['username']) ? 'border-rose-400 ring-2 ring-rose-100 bg-rose-50/20' : 'border-slate-300 focus:border-brandPrimary focus:ring-4 focus:ring-brandPrimary/10' ?> text-sm text-slate-800 placeholder-slate-400 transition-all outline-none"
                            required
                        >
                    </div>
                    <div>
                        <label for="email" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">
                            Email <span class="text-rose-500">*</span>
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            value="<?= old('email') ?>" 
                            placeholder="azka@gmail.com"
                            class="w-full px-4 py-2.5 rounded-xl border <?= isset($errors['email']) ? 'border-rose-400 ring-2 ring-rose-100 bg-rose-50/20' : 'border-slate-300 focus:border-brandPrimary focus:ring-4 focus:ring-brandPrimary/10' ?> text-sm text-slate-800 placeholder-slate-400 transition-all outline-none"
                            required
                        >
                    </div>
                </div>

                <!-- Password & Confirm -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="password" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">
                            Kata Sandi <span class="text-rose-500">*</span>
                        </label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            placeholder="Minimal 6 karakter"
                            class="w-full px-4 py-2.5 rounded-xl border <?= isset($errors['password']) ? 'border-rose-400 ring-2 ring-rose-100 bg-rose-50/20' : 'border-slate-300 focus:border-brandPrimary focus:ring-4 focus:ring-brandPrimary/10' ?> text-sm text-slate-800 placeholder-slate-400 transition-all outline-none"
                            required
                        >
                    </div>
                    <div>
                        <label for="password_confirm" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">
                            Ulangi Sandi <span class="text-rose-500">*</span>
                        </label>
                        <input 
                            type="password" 
                            id="password_confirm" 
                            name="password_confirm" 
                            placeholder="Ulangi sandi"
                            class="w-full px-4 py-2.5 rounded-xl border <?= isset($errors['password_confirm']) ? 'border-rose-400 ring-2 ring-rose-100 bg-rose-50/20' : 'border-slate-300 focus:border-brandPrimary focus:ring-4 focus:ring-brandPrimary/10' ?> text-sm text-slate-800 placeholder-slate-400 transition-all outline-none"
                            required
                        >
                    </div>
                </div>

                <div class="pt-3">
                    <button 
                        type="submit" 
                        class="w-full py-3 px-4 rounded-xl bg-brandPrimary hover:bg-brandPrimaryHover text-white font-bold text-sm shadow-lg shadow-indigo-500/25 transition-all transform hover:-translate-y-0.5"
                    >
                        Daftar Sebagai Pelanggan
                    </button>
                </div>

            </form>

            <div class="mt-6 pt-5 border-t border-slate-100 text-center text-xs text-slate-500">
                <span>Sudah memiliki akun?</span>
                <a href="<?= base_url('login') ?>" class="font-bold text-brandPrimary hover:underline ml-1">
                    Masuk Sekarang
                </a>
            </div>
        </div>

    </div>

</div>

<?= $this->endSection() ?>
