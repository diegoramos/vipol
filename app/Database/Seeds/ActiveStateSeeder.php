<?php

namespace App\Database\Seeds;

class ActiveStateSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
			['id'=>'0','description_short'=>'Sin Informacion','description_long'=>'Sin Informacion'],
			['id'=>'1','description_short'=>'Activo','description_long'=>'Activo'],
			['id'=>'2','description_short'=>'Baja','description_long'=>'Baja'],
        ];

        $this->db->table('active_state')->insertBatch($data);
    }
}