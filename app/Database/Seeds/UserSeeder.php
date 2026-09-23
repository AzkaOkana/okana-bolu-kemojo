<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'       => 'Administrator Okana',
                'username'   => 'admin',
                'email'      => 'admin@okana.com',
                'password'   => password_hash('admin123', PASSWORD_DEFAULT),
                'role'       => 'admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'       => 'Pelanggan Setia Okana',
                'username'   => 'user',
                'email'      => 'user@okana.com',
                'password'   => password_hash('user123', PASSWORD_DEFAULT),
                'role'       => 'user',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // Insert into users table
        $this->db->table('users')->insertBatch($data);
    }
}
