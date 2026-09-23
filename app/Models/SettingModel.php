<?php

namespace App\Models;

class SettingModel
{
    protected string $filePath;

    public function __construct()
    {
        $this->filePath = WRITEPATH . 'hero_setting.json';
    }

    /**
     * Data default hero banner jika belum disetel
     */
    public function getDefaultHero(): array
    {
        return [
            'image_url' => 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=800&q=80',
            'title'     => 'BOLU KEMOJO PANDAN WANGI',
            'subtitle'  => 'Varian Legendaris Resep Tradisional Melayu',
            'price'     => '35000',
            'menu_id'   => null,
        ];
    }

    /**
     * Mengambil data pengaturan menu utama (hero banner)
     */
    public function getHeroSetting(): array
    {
        if (! file_exists($this->filePath)) {
            return $this->getDefaultHero();
        }

        $content = file_get_contents($this->filePath);
        $data = json_decode($content, true);

        if (! is_array($data)) {
            return $this->getDefaultHero();
        }

        return array_merge($this->getDefaultHero(), $data);
    }

    /**
     * Menyimpan data pengaturan menu utama (hero banner)
     */
    public function saveHeroSetting(array $data): bool
    {
        $current = $this->getHeroSetting();
        $updated = array_merge($current, $data);

        return (bool) file_put_contents(
            $this->filePath,
            json_encode($updated, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
        );
    }
}
