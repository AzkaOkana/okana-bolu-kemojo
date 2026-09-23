<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    /**
     * Tampilan form login
     */
    public function login(): string
    {
        if (session()->get('isLoggedIn')) {
            if (session()->get('role') === 'admin') {
                return redirect()->to(base_url('admin/menu'));
            }
            return redirect()->to(base_url('/'));
        }

        $data = [
            'title'  => 'Masuk ke Akun - Okana Bolu Kemojo',
            'errors' => session()->getFlashdata('errors') ?? [],
        ];

        return view('auth/login', $data);
    }

    /**
     * Memproses verifikasi kredensial login
     */
    public function loginProcess()
    {
        $rules = [
            'login' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Username atau alamat email wajib diisi.',
                ],
            ],
            'password' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Kata sandi (password) wajib diisi.',
                ],
            ],
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $loginInput = trim($this->request->getPost('login'));
        $passwordInput = $this->request->getPost('password');

        $user = $this->userModel->findByUsernameOrEmail($loginInput);

        if (! $user || ! password_verify($passwordInput, $user['password'])) {
            return redirect()->back()->withInput()->with('error', 'Kombinasi username/email dan kata sandi salah. Silakan periksa kembali.');
        }

        // Set session data
        session()->set([
            'isLoggedIn' => true,
            'userId'     => $user['id'],
            'username'   => $user['username'],
            'name'       => $user['name'],
            'email'      => $user['email'],
            'role'       => $user['role'],
        ]);

        if ($user['role'] === 'admin') {
            return redirect()->to(base_url('admin/menu'))->with('success', "Selamat datang, {$user['name']}! Anda masuk sebagai Administrator.");
        }

        return redirect()->to(base_url('/'))->with('success', "Selamat datang, {$user['name']}! Selamat memilih Bolu Kemojo favorit Anda.");
    }

    /**
     * Halaman registrasi akun baru (Pelanggan)
     */
    public function register(): string
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->to(base_url('/'));
        }

        $data = [
            'title'  => 'Daftar Akun Baru - Okana Bolu Kemojo',
            'errors' => session()->getFlashdata('errors') ?? [],
        ];

        return view('auth/register', $data);
    }

    /**
     * Memproses pendaftaran akun pelanggan baru
     */
    public function registerProcess()
    {
        $rules = [
            'name' => [
                'rules'  => 'required|min_length[3]|max_length[150]',
                'errors' => [
                    'required'   => 'Nama lengkap wajib diisi.',
                    'min_length' => 'Nama lengkap minimal 3 karakter.',
                ],
            ],
            'username' => [
                'rules'  => 'required|min_length[3]|max_length[100]|is_unique[users.username]',
                'errors' => [
                    'required'   => 'Username wajib diisi.',
                    'min_length' => 'Username minimal 3 karakter.',
                    'is_unique'  => 'Username ini sudah digunakan, silakan pilih username lain.',
                ],
            ],
            'email' => [
                'rules'  => 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'required'    => 'Alamat email wajib diisi.',
                    'valid_email' => 'Format alamat email tidak valid.',
                    'is_unique'   => 'Email ini sudah terdaftar. Silakan gunakan email lain atau langsung login.',
                ],
            ],
            'password' => [
                'rules'  => 'required|min_length[6]',
                'errors' => [
                    'required'   => 'Kata sandi wajib diisi.',
                    'min_length' => 'Kata sandi minimal harus 6 karakter.',
                ],
            ],
            'password_confirm' => [
                'rules'  => 'required|matches[password]',
                'errors' => [
                    'required' => 'Konfirmasi kata sandi wajib diisi.',
                    'matches'  => 'Konfirmasi kata sandi tidak cocok dengan kata sandi yang dimasukkan.',
                ],
            ],
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->userModel->save([
            'name'     => trim($this->request->getPost('name')),
            'username' => strtolower(trim($this->request->getPost('username'))),
            'email'    => strtolower(trim($this->request->getPost('email'))),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role'     => 'user',
        ]);

        return redirect()->to(base_url('login'))->with('success', 'Pendaftaran berhasil! Silakan masuk menggunakan akun baru Anda.');
    }

    /**
     * Mengeluarkan pengguna dari sesi (logout)
     */
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/'))->with('success', 'Anda telah berhasil keluar (logout).');
    }
}
