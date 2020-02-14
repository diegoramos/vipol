<?php

namespace App\Database\Seeds;

class UserSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $dataPerson = [
            ['id' => 1, 'name' => 'Admin', 'last_name' => 'Admin', 'dni' => 00000000, 'address' => 'Calle prueba'],
        ];
        $dataUser = [
            ['id' => 1, 'username' => 'admin', 'password' => '123456', 'person_id' => 1],
        ];

        $this->db->table('persons')->insertBatch($dataPerson);
        $this->db->table('users')->insertBatch($dataUser);
    }
}
