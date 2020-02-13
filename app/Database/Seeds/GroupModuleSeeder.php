<?php

namespace App\Database\Seeds;

class GroupModuleSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            [
                'name'    => 'Sistemas'
            ],
            [
                'name'    => 'Seguridad'
            ]
        ];

        // Simple Queries
        //$this->db->query( "INSERT INTO groups_module (name) VALUES(:name)",  $data );

        // Using Query Builder
        $this->db->table('groups_module')->insertBatch($data);
    }
}
