<?php

namespace App\Controllers;

use App\Models\MenuModel;
use App\Models\SettingModel;

class Home extends BaseController
{
    protected $menuModel;
    protected $settingModel;

    public function __construct()
    {
        $this->menuModel = new MenuModel();
        $this->settingModel = new SettingModel();
    }

    public function index(): string
    {
        $selectedCategory = $this->request->getGet('category') ?? '';
        $selectedCategory = trim($selectedCategory);

        $menus = $this->menuModel->getFilteredMenus($selectedCategory);
        $categories = $this->menuModel->getCategories();
        $heroSetting = $this->settingModel->getHeroSetting();

        $data = [
            'title'            => 'Okana Bolu Kemojo - Cita Rasa Khas Kepulauan Riau',
            'menus'            => $menus,
            'categories'       => $categories,
            'selectedCategory' => $selectedCategory,
            'heroSetting'      => $heroSetting,
        ];

        return view('home', $data);
    }
}
