<?php

namespace App\Database\Seeds;

class PermissionSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            ['user_id' => 1, 'module_id' => 1],
            ['user_id' => 1, 'module_id' => 2],
            ['user_id' => 1, 'module_id' => 3],
            ['user_id' => 1, 'module_id' => 4],
            ['user_id' => 1, 'module_id' => 5],
            ['user_id' => 1, 'module_id' => 6],
            ['user_id' => 1, 'module_id' => 7],
            ['user_id' => 1, 'module_id' => 8],
            ['user_id' => 1, 'module_id' => 9],
            ['user_id' => 1, 'module_id' => 10],
            ['user_id' => 1, 'module_id' => 11],
            ['user_id' => 1, 'module_id' => 12],
            ['user_id' => 1, 'module_id' => 13],
            ['user_id' => 1, 'module_id' => 14],
        ];

        $this->db->table('permissions')->insertBatch($data);
    }
}