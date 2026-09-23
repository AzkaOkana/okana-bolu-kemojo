<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'name',
        'username',
        'email',
        'password',
        'role',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    /**
     * Mencari pengguna berdasarkan username atau alamat email
     *
     * @param string $login
     * @return array|null
     */
    public function findByUsernameOrEmail(string $login): ?array
    {
        return $this->groupStart()
                    ->where('username', $login)
                    ->orWhere('email', $login)
                    ->groupEnd()
                    ->first();
    }
}
