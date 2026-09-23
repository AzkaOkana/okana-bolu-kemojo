<?php

namespace App\Controllers;

use App\Models\MenuModel;

class Home extends BaseController
{
    protected $menuModel;

    public function __construct()
    {
        $this->menuModel = new MenuModel();
    }

    public function index(): string
    {
        $selectedCategory = $this->request->getGet('category') ?? '';
        $selectedCategory = trim($selectedCategory);

        $menus = $this->menuModel->getFilteredMenus($selectedCategory);
        $categories = $this->menuModel->getCategories();

        $data = [
            'title'            => 'Okana Bolu Kemojo - Cita Rasa Khas Kepulauan Riau',
            'menus'            => $menus,
            'categories'       => $categories,
            'selectedCategory' => $selectedCategory,
        ];

        return view('home', $data);
    }
}
