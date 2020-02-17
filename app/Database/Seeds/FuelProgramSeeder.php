<?php

namespace App\Database\Seeds;

class FuelProgramSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
			['id'=>'0','description_short'=>'No Programa Combust','description_long'=>'No Programa Combust'],
			['id'=>'1','description_short'=>'Si Programa Combust','description_long'=>'Si Programa Combust'],
        ];

        $this->db->table('fuel_program')->insertBatch($data);
    }
}