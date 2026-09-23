<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AdminFilter implements FilterInterface
{
    /**
     * Memverifikasi apakah pengguna sudah login dan memiliki role admin
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();

        if (! $session->get('isLoggedIn')) {
            return redirect()->to(base_url('login'))->with('error', 'Silakan login terlebih dahulu untuk mengakses dashboard admin.');
        }

        if ($session->get('role') !== 'admin') {
            return redirect()->to(base_url('/'))->with('error', 'Akses ditolak: Anda masuk sebagai pelanggan dan tidak memiliki hak akses administrator.');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Tidak ada aksi setelah request
    }
}
