<?php

namespace App\Controllers;

use App\Models\MenuModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class MenuController extends BaseController
{
    protected $menuModel;

    public function __construct()
    {
        $this->menuModel = new MenuModel();
    }

    /**
     * Halaman detail produk lengkap
     *
     * @param int $id
     * @return string
     */
    public function detail(int $id): string
    {
        $menu = $this->menuModel->find($id);

        if (! $menu) {
            throw PageNotFoundException::forPageNotFound("Menu dengan ID {$id} tidak ditemukan.");
        }

        // Ambil menu rekomendasi (kategori yang sama atau varian lain)
        $relatedMenus = $this->menuModel
            ->where('id !=', $id)
            ->where('category', $menu['category'])
            ->findAll(3);

        if (count($relatedMenus) < 3) {
            $existingIds = array_merge([$id], array_column($relatedMenus, 'id'));
            $moreMenus = $this->menuModel
                ->whereNotIn('id', $existingIds)
                ->findAll(3 - count($relatedMenus));

            $relatedMenus = array_merge($relatedMenus, $moreMenus);
        }

        $data = [
            'title'        => $menu['name'] . ' - Syauqi Bolu Kemojo Khas Kepulauan Riau',
            'menu'         => $menu,
            'relatedMenus' => $relatedMenus,
        ];

        return view('menu/detail', $data);
    }

    /**
     * Dashboard tabel kelola menu admin
     *
     * @return string
     */
    public function adminIndex(): string
    {
        $menus = $this->menuModel->orderBy('created_at', 'DESC')->findAll();
        $categories = $this->menuModel->getCategories();

        $data = [
            'title'      => 'Kelola Menu - Admin Panel Syauqi Bolu Kemojo',
            'menus'      => $menus,
            'categories' => $categories,
        ];

        return view('admin/index', $data);
    }

    /**
     * Form penambahan menu baru
     *
     * @return string
     */
    public function create(): string
    {
        $categories = $this->menuModel->getCategories();

        $data = [
            'title'      => 'Tambah Varian Menu Baru',
            'categories' => $categories,
            'action'     => base_url('admin/menu/store'),
            'menu'       => null,
            'errors'     => session()->getFlashdata('errors') ?? [],
        ];

        return view('admin/form', $data);
    }

    /**
     * Proses simpan menu baru dengan validasi ketat
     */
    public function store()
    {
        $rules = [
            'name' => [
                'rules'  => 'required|min_length[3]|max_length[255]',
                'errors' => [
                    'required'   => 'Nama menu wajib diisi.',
                    'min_length' => 'Nama menu minimal harus 3 karakter.',
                    'max_length' => 'Nama menu tidak boleh melebihi 255 karakter.',
                ],
            ],
            'category' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Kategori menu wajib dipilih atau diisi.',
                ],
            ],
            'price' => [
                'rules'  => 'required|numeric|greater_than[0]',
                'errors' => [
                    'required'     => 'Harga menu wajib diisi.',
                    'numeric'      => 'Harga menu harus berupa angka yang valid.',
                    'greater_than' => 'Harga menu harus lebih besar dari Rp 0.',
                ],
            ],
            'description' => [
                'rules'  => 'required|min_length[10]',
                'errors' => [
                    'required'   => 'Deskripsi menu wajib diisi.',
                    'min_length' => 'Deskripsi menu minimal 10 karakter untuk menjelaskan keistimewaannya.',
                ],
            ],
            'image_url' => [
                'rules'  => 'permit_empty|valid_url',
                'errors' => [
                    'valid_url' => 'Format URL gambar tidak valid. Harap masukkan URL lengkap (contoh: https://...).',
                ],
            ],
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $imageUrl = $this->request->getPost('image_url');
        if (empty($imageUrl)) {
            $imageUrl = 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=800&q=80';
        }

        $this->menuModel->save([
            'name'        => trim($this->request->getPost('name')),
            'category'    => trim($this->request->getPost('category')),
            'price'       => $this->request->getPost('price'),
            'description' => trim($this->request->getPost('description')),
            'image_url'   => trim($imageUrl),
        ]);

        return redirect()->to(base_url('admin/menu'))->with('success', 'Varian menu baru berhasil ditambahkan!');
    }

    /**
     * Form edit menu yang sudah ada
     *
     * @param int $id
     * @return string
     */
    public function edit(int $id): string
    {
        $menu = $this->menuModel->find($id);

        if (! $menu) {
            throw PageNotFoundException::forPageNotFound("Menu dengan ID {$id} tidak ditemukan.");
        }

        $categories = $this->menuModel->getCategories();

        $data = [
            'title'      => 'Edit Varian Menu: ' . $menu['name'],
            'categories' => $categories,
            'action'     => base_url('admin/menu/update/' . $id),
            'menu'       => $menu,
            'errors'     => session()->getFlashdata('errors') ?? [],
        ];

        return view('admin/form', $data);
    }

    /**
     * Proses pembaruan data menu dengan validasi ketat
     *
     * @param int $id
     */
    public function update(int $id)
    {
        $menu = $this->menuModel->find($id);

        if (! $menu) {
            throw PageNotFoundException::forPageNotFound("Menu dengan ID {$id} tidak ditemukan.");
        }

        $rules = [
            'name' => [
                'rules'  => 'required|min_length[3]|max_length[255]',
                'errors' => [
                    'required'   => 'Nama menu wajib diisi.',
                    'min_length' => 'Nama menu minimal harus 3 karakter.',
                    'max_length' => 'Nama menu tidak boleh melebihi 255 karakter.',
                ],
            ],
            'category' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Kategori menu wajib dipilih atau diisi.',
                ],
            ],
            'price' => [
                'rules'  => 'required|numeric|greater_than[0]',
                'errors' => [
                    'required'     => 'Harga menu wajib diisi.',
                    'numeric'      => 'Harga menu harus berupa angka yang valid.',
                    'greater_than' => 'Harga menu harus lebih besar dari Rp 0.',
                ],
            ],
            'description' => [
                'rules'  => 'required|min_length[10]',
                'errors' => [
                    'required'   => 'Deskripsi menu wajib diisi.',
                    'min_length' => 'Deskripsi menu minimal 10 karakter untuk menjelaskan keistimewaannya.',
                ],
            ],
            'image_url' => [
                'rules'  => 'permit_empty|valid_url',
                'errors' => [
                    'valid_url' => 'Format URL gambar tidak valid. Harap masukkan URL lengkap (contoh: https://...).',
                ],
            ],
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $imageUrl = $this->request->getPost('image_url');
        if (empty($imageUrl)) {
            $imageUrl = $menu['image_url'] ?: 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=800&q=80';
        }

        $this->menuModel->update($id, [
            'name'        => trim($this->request->getPost('name')),
            'category'    => trim($this->request->getPost('category')),
            'price'       => $this->request->getPost('price'),
            'description' => trim($this->request->getPost('description')),
            'image_url'   => trim($imageUrl),
        ]);

        return redirect()->to(base_url('admin/menu'))->with('success', 'Data menu berhasil diperbarui!');
    }

    /**
     * Hapus data menu
     *
     * @param int $id
     */
    public function delete(int $id)
    {
        $menu = $this->menuModel->find($id);

        if (! $menu) {
            return redirect()->to(base_url('admin/menu'))->with('error', 'Menu tidak ditemukan atau sudah dihapus.');
        }

        $this->menuModel->delete($id);

        return redirect()->to(base_url('admin/menu'))->with('success', "Menu '{$menu['name']}' berhasil dihapus.");
    }
}
