<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table            = 'menus';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'name',
        'category',
        'price',
        'description',
        'image_url',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    /**
     * Mengambil daftar menu dengan filter kategori dinamis
     *
     * @param string|null $category
     * @return array
     */
    public function getFilteredMenus(?string $category = null): array
    {
        $builder = $this->orderBy('created_at', 'DESC');

        if (!empty($category) && strtolower($category) !== 'all' && strtolower($category) !== 'semua') {
            $builder->where('category', $category);
        }

        return $builder->findAll();
    }

    /**
     * Mengambil daftar kategori unik yang tersedia
     *
     * @return array
     */
    public function getCategories(): array
    {
        $defaultCategories = ['Pandan', 'Keju', 'Cokelat', 'Durian', 'Original', 'Modern', 'Paket'];
        
        $rows = $this->select('category')->distinct()->findAll();
        $dbCategories = array_filter(array_column($rows, 'category'));

        return array_values(array_unique(array_merge($defaultCategories, $dbCategories)));
    }
}
