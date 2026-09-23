<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'        => 'Bolu Kemojo Pandan Wangi Asli',
                'category'    => 'Pandan',
                'price'       => 35000.00,
                'description' => 'Bolu Kemojo otentik khas Kepulauan Riau dengan sari daun pandan suji murni pilihan. Teksturnya legit, lembut, beraroma wangi semerbak kelopak bunga kamboja yang memanjakan lidah di setiap gigitan.',
                'image_url'   => 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=800&q=80',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'Bolu Kemojo Keju Cheddar Melimpah',
                'category'    => 'Keju',
                'price'       => 42000.00,
                'description' => 'Perpaduan sempurna resep tradisional Melayu dengan limpahan keju cheddar parut premium yang gurih dan lelehan keju di bagian tengah bolu. Rasa manis dan gurih berpadu harmonis.',
                'image_url'   => 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=800&q=80',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'Bolu Kemojo Cokelat Meleleh (Lava Dark Chocolate)',
                'category'    => 'Cokelat',
                'price'       => 40000.00,
                'description' => 'Dibuat khusus bagi pecinta cokelat dengan bubuk kakao kualitas tinggi dan isian cokelat Belgia yang lumer saat dinikmati hangat. Manisnya pas dengan aroma cokelat yang menggoda selera.',
                'image_url'   => 'https://images.unsplash.com/photo-1606313564200-e75d5e30476c?auto=format&fit=crop&w=800&q=80',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'Bolu Kemojo Durian Musang King',
                'category'    => 'Durian',
                'price'       => 50000.00,
                'description' => 'Menggunakan daging buah durian asli pilihan tanpa perisa buatan. Harum semerbak khas durian berpadu dengan adonan santan murni yang lembut dan lumer di mulut.',
                'image_url'   => 'https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=800&q=80',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'Bolu Kemojo Klasik Resep Leluhur Riau',
                'category'    => 'Original',
                'price'       => 32000.00,
                'description' => 'Resep warisan turun-temurun leluhur Kepulauan Riau. Tekstur padat lembut, legit bersantan kental gurih dengan sentuhan manis yang seimbang. Sajian wajib pesta adat dan teman minum teh sore.',
                'image_url'   => 'https://images.unsplash.com/photo-1587314168485-3236d6710814?auto=format&fit=crop&w=800&q=80',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'Bolu Kemojo Red Velvet Creamy',
                'category'    => 'Modern',
                'price'       => 45000.00,
                'description' => 'Inovasi modern artisan dengan sentuhan Red Velvet lembut bercampur krim vanila lembut. Tampilan merah merona yang memikat dengan cita rasa mewah kekinian.',
                'image_url'   => 'https://images.unsplash.com/photo-1616541823729-00fe0aacd32c?auto=format&fit=crop&w=800&q=80',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'Bolu Kemojo Kopi Robusta Karimun',
                'category'    => 'Modern',
                'price'       => 38000.00,
                'description' => 'Sentuhan aroma kopi robusta sangrai khas Kepulauan Riau berpadu rasa legit bolu kemojo. Memberikan sensasi rasa kopi autentik yang mantap dan relaksasi nikmat.',
                'image_url'   => 'https://images.unsplash.com/photo-1517433670267-08bbd4be890f?auto=format&fit=crop&w=800&q=80',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'Bolu Kemojo Hampers Tradisi Riau (Paket 4 Rasa)',
                'category'    => 'Paket',
                'price'       => 155000.00,
                'description' => 'Paket bingkisan istimewa berisi 4 varian favorit (Pandan, Keju, Cokelat, Durian) dikemas dalam box premium motif songket Melayu Riau. Sangat cocok untuk oleh-oleh dan hadiah sanak saudara.',
                'image_url'   => 'https://images.unsplash.com/photo-1557308536-ee471ef2c390?auto=format&fit=crop&w=800&q=80',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'Bolu Kemojo Matcha Almond Crunch',
                'category'    => 'Modern',
                'price'       => 46000.00,
                'description' => 'Perpaduan teh hijau Jepang premium dengan taburan almond renyah di atas bolu kemojo lembut bersantan. Varian fusion favorit anak muda pecinta dessert artisan.',
                'image_url'   => 'https://images.unsplash.com/photo-1535141192574-5d4897c13136?auto=format&fit=crop&w=800&q=80',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
        ];

        // Using Query Builder
        $this->db->table('menus')->insertBatch($data);
    }
}
