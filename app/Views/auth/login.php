<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="py-14 px-4 sm:px-6 lg:px-8 bg-slate-100 flex items-center justify-center min-h-[75vh]">
    <div class="max-w-md w-full space-y-6">
        
        <!-- Header -->
        <div class="text-center space-y-1">
            <span class="bg-brandPrimary text-white font-black text-[10px] px-2.5 py-1 uppercase rounded tracking-wider">
                LOGIN PENGGUNA
            </span>
            <h2 class="text-2xl sm:text-3xl font-black text-slate-900 uppercase tracking-tight">
                MASUK KE AKUN ANDA
            </h2>
            <p class="text-xs text-slate-600 font-medium">
                Kelola menu atau nikmati kemudahan belanja di <strong>Okana Bolu Kemojo</strong>.
            </p>
        </div>

        <!-- Demo Accounts Box (Solid Restaurant Style) -->
        <div class="p-4 bg-white border-2 border-slate-300 rounded-md space-y-2">
            <span class="text-[10px] font-black uppercase tracking-wider text-slate-500 block">
                AKUN DEMO (KLIK UNTUK ISI CEPAT):
            </span>
            <div class="grid grid-cols-2 gap-2">
                <button 
                    type="button" 
                    id="btn-demo-admin"
                    class="p-2.5 bg-slate-100 hover:bg-slate-200 border border-slate-300 text-left rounded transition group"
                >
                    <span class="block text-xs font-black text-slate-900 uppercase">Akun Admin</span>
                    <span class="text-[10px] text-slate-600 font-mono">admin / admin123</span>
                </button>

                <button 
                    type="button" 
                    id="btn-demo-user"
                    class="p-2.5 bg-slate-100 hover:bg-slate-200 border border-slate-300 text-left rounded transition group"
                >
                    <span class="block text-xs font-black text-slate-900 uppercase">Akun Pelanggan</span>
                    <span class="text-[10px] text-slate-600 font-mono">user / user123</span>
                </button>
            </div>
        </div>

        <!-- Flash Notification -->
        <?php if (session()->getFlashdata('success')): ?>
            <div class="p-3 bg-emerald-100 border border-emerald-400 text-emerald-900 text-xs font-bold rounded">
                <?= esc(session()->getFlashdata('success')) ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="p-3 bg-rose-100 border border-rose-400 text-rose-900 text-xs font-bold rounded">
                <?= esc(session()->getFlashdata('error')) ?>
            </div>
        <?php endif; ?>

        <!-- Form Card (Solid Border) -->
        <div class="bg-white border-2 border-slate-300 rounded-lg p-6 sm:p-8 shadow-xs">
            <form action="<?= base_url('login') ?>" method="post" class="space-y-4">
                <?= csrf_field() ?>

                <div>
                    <label for="login" class="block text-xs font-black uppercase tracking-wider text-slate-800 mb-1">
                        Username atau Email <span class="text-rose-600">*</span>
                    </label>
                    <input 
                        type="text" 
                        id="login" 
                        name="login" 
                        value="<?= old('login') ?>" 
                        placeholder="Contoh: admin atau user"
                        class="w-full px-4 py-2.5 bg-slate-50 border-2 <?= isset($errors['login']) ? 'border-rose-500' : 'border-slate-300 focus:border-brandPrimary focus:bg-white' ?> text-sm text-slate-900 font-semibold rounded outline-none transition"
                        required
                    >
                    <?php if (isset($errors['login'])): ?>
                        <p class="mt-1 text-xs text-rose-600 font-bold"><?= esc($errors['login']) ?></p>
                    <?php endif; ?>
                </div>

                <div>
                    <label for="password" class="block text-xs font-black uppercase tracking-wider text-slate-800 mb-1">
                        Kata Sandi (Password) <span class="text-rose-600">*</span>
                    </label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        placeholder="••••••••"
                        class="w-full px-4 py-2.5 bg-slate-50 border-2 <?= isset($errors['password']) ? 'border-rose-500' : 'border-slate-300 focus:border-brandPrimary focus:bg-white' ?> text-sm text-slate-900 rounded outline-none transition"
                        required
                    >
                    <?php if (isset($errors['password'])): ?>
                        <p class="mt-1 text-xs text-rose-600 font-bold"><?= esc($errors['password']) ?></p>
                    <?php endif; ?>
                </div>

                <div class="pt-2">
                    <button 
                        type="submit" 
                        class="w-full py-3 bg-brandPrimary hover:bg-brandPrimaryDark text-white font-black text-xs uppercase tracking-wider rounded shadow transition"
                    >
                        MASUK KE SISTEM
                    </button>
                </div>
            </form>

            <div class="mt-5 pt-4 border-t border-slate-200 text-center text-xs text-slate-600">
                <span>Belum punya akun?</span>
                <a href="<?= base_url('register') ?>" class="font-bold text-brandPrimary hover:underline ml-1">
                    Daftar Sebagai Pelanggan
                </a>
            </div>
        </div>

        <div class="text-center">
            <a href="<?= base_url('/') ?>" class="text-xs font-bold text-slate-600 hover:text-slate-950 uppercase">
                &larr; Kembali ke Beranda
            </a>
        </div>

    </div>
</div>

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
