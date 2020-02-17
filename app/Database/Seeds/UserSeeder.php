<?php

namespace App\Database\Seeds;

class UserSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $dataPerson = [
            ['id' => 1, 'name' => 'Admin', 'last_name' => 'Admin', 'dni' => '00000000', 'address' => 'Calle prueba'],
        ];
        $dataUser = [
            ['id' => 1, 'email' => 'admin@admin.com', 'password' => 'e10adc3949ba59abbe56e057f20f883e', 'person_id' => 1],
        ];

        $this->db->table('persons')->insertBatch($dataPerson);
        $this->db->table('users')->insertBatch($dataUser);
    }
}
