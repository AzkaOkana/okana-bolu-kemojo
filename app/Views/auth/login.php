<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="min-h-[80vh] flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-indigo-50/50 via-white to-slate-50 relative overflow-hidden">
    
    <!-- Background Blurs -->
    <div class="absolute -top-20 -left-20 w-80 h-80 bg-brandPrimary/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-20 -right-20 w-80 h-80 bg-brandAccent/15 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-md w-full space-y-6 relative z-10">
        
        <!-- Top Card Header -->
        <div class="text-center space-y-2">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-to-tr from-brandPrimary via-indigo-600 to-brandAccent text-white shadow-xl shadow-indigo-500/20 mb-2">
                <svg class="w-8 h-8 text-amber-300" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2C13.5 5 15.5 6.5 19 7C17.5 10 17.5 12.5 19 15.5C15.5 16 13.5 17.5 12 20.5C10.5 17.5 8.5 16 5 15.5C6.5 12.5 6.5 10 5 7C8.5 6.5 10.5 5 12 2Z"/>
                </svg>
            </div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
                Selamat Datang Kembali
            </h2>
            <p class="text-xs sm:text-sm text-slate-500">
                Masuk ke akun <strong class="text-brandPrimary font-semibold">Okana Bolu Kemojo</strong> Anda
            </p>
        </div>

        <!-- Quick Demo Credentials Box -->
        <div class="p-4 rounded-2xl bg-indigo-50/80 border border-indigo-200/80 shadow-sm space-y-2">
            <div class="flex items-center justify-between">
                <span class="text-[11px] font-bold uppercase tracking-wider text-brandPrimary flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5 text-amber-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                    </svg>
                    Pilihan Akun Demo (Klik untuk Isi Otomatis)
                </span>
            </div>
            <div class="grid grid-cols-2 gap-2 pt-1">
                <button 
                    type="button" 
                    id="btn-demo-admin"
                    class="p-2.5 rounded-xl bg-white hover:bg-brandSoft border border-indigo-200 text-left transition-all hover:border-brandPrimary shadow-xs group"
                >
                    <div class="flex items-center gap-1.5">
                        <span class="text-xs">👑</span>
                        <span class="text-xs font-bold text-slate-800 group-hover:text-brandPrimary">Akun Admin</span>
                    </div>
                    <p class="text-[10px] text-slate-500 mt-0.5 font-mono">admin / admin123</p>
                </button>

                <button 
                    type="button" 
                    id="btn-demo-user"
                    class="p-2.5 rounded-xl bg-white hover:bg-brandSoft border border-indigo-200 text-left transition-all hover:border-brandPrimary shadow-xs group"
                >
                    <div class="flex items-center gap-1.5">
                        <span class="text-xs">👤</span>
                        <span class="text-xs font-bold text-slate-800 group-hover:text-brandPrimary">Akun User</span>
                    </div>
                    <p class="text-[10px] text-slate-500 mt-0.5 font-mono">user / user123</p>
                </button>
            </div>
        </div>

        <!-- Flash Messages -->
        <?php if (session()->getFlashdata('success')): ?>
            <div class="p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs sm:text-sm font-semibold flex items-start gap-2.5 shadow-xs">
                <svg class="w-5 h-5 text-emerald-600 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span><?= esc(session()->getFlashdata('success')) ?></span>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="p-4 rounded-2xl bg-rose-50 border border-rose-200 text-rose-800 text-xs sm:text-sm font-semibold flex items-start gap-2.5 shadow-xs">
                <svg class="w-5 h-5 text-rose-600 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span><?= esc(session()->getFlashdata('error')) ?></span>
            </div>
        <?php endif; ?>

        <!-- Form Card -->
        <div class="bg-white rounded-3xl border border-slate-200/80 shadow-xl p-6 sm:p-8">
            <form action="<?= base_url('login') ?>" method="post" class="space-y-5">
                <?= csrf_field() ?>

                <!-- Field 1: Username / Email -->
                <div>
                    <label for="login" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                        Username atau Email <span class="text-rose-500">*</span>
                    </label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </span>
                        <input 
                            type="text" 
                            id="login" 
                            name="login" 
                            value="<?= old('login') ?>" 
                            placeholder="Contoh: admin atau user"
                            class="w-full pl-10 pr-4 py-3 rounded-xl border <?= isset($errors['login']) ? 'border-rose-400 ring-2 ring-rose-100 bg-rose-50/20' : 'border-slate-300 focus:border-brandPrimary focus:ring-4 focus:ring-brandPrimary/10' ?> text-sm text-slate-800 placeholder-slate-400 transition-all outline-none"
                            required
                        >
                    </div>
                    <?php if (isset($errors['login'])): ?>
                        <p class="mt-1 text-xs text-rose-600 font-semibold"><?= esc($errors['login']) ?></p>
                    <?php endif; ?>
                </div>

                <!-- Field 2: Password -->
                <div>
                    <label for="password" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                        Kata Sandi (Password) <span class="text-rose-500">*</span>
                    </label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </span>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            placeholder="••••••••"
                            class="w-full pl-10 pr-4 py-3 rounded-xl border <?= isset($errors['password']) ? 'border-rose-400 ring-2 ring-rose-100 bg-rose-50/20' : 'border-slate-300 focus:border-brandPrimary focus:ring-4 focus:ring-brandPrimary/10' ?> text-sm text-slate-800 placeholder-slate-400 transition-all outline-none"
                            required
                        >
                    </div>
                    <?php if (isset($errors['password'])): ?>
                        <p class="mt-1 text-xs text-rose-600 font-semibold"><?= esc($errors['password']) ?></p>
                    <?php endif; ?>
                </div>

                <!-- Submit Button -->
                <div class="pt-2">
                    <button 
                        type="submit" 
                        class="w-full py-3.5 px-4 rounded-xl bg-brandPrimary hover:bg-brandPrimaryHover text-white font-bold text-sm shadow-lg shadow-indigo-500/25 transition-all transform hover:-translate-y-0.5 flex items-center justify-center gap-2"
                    >
                        <span>Masuk ke Akun</span>
                        <svg class="w-4 h-4 text-brandAccent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </button>
                </div>

            </form>

            <!-- Bottom Registration Link -->
            <div class="mt-6 pt-5 border-t border-slate-100 text-center text-xs text-slate-500">
                <span>Belum memiliki akun?</span>
                <a href="<?= base_url('register') ?>" class="font-bold text-brandPrimary hover:underline ml-1">
                    Daftar Sebagai Pelanggan
                </a>
            </div>
        </div>

        <div class="text-center">
            <a href="<?= base_url('/') ?>" class="inline-flex items-center gap-1.5 text-xs font-semibold text-slate-500 hover:text-brandPrimary transition-colors">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                <span>Kembali ke Beranda</span>
            </a>
        </div>

    </div>

</div>

<!-- Quick Fill Script -->
<script>
    const btnAdmin = document.getElementById('btn-demo-admin');
    const btnUser = document.getElementById('btn-demo-user');
    const inputLogin = document.getElementById('login');
    const inputPassword = document.getElementById('password');

    if (btnAdmin && inputLogin && inputPassword) {
        btnAdmin.addEventListener('click', () => {
            inputLogin.value = 'admin';
            inputPassword.value = 'admin123';
            inputLogin.focus();
        });
    }

    if (btnUser && inputLogin && inputPassword) {
        btnUser.addEventListener('click', () => {
            inputLogin.value = 'user';
            inputPassword.value = 'user123';
            inputLogin.focus();
        });
    }
</script>

<?= $this->endSection() ?>
