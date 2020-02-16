<?php

namespace App\Database\Seeds;

class FuelAuthorizationSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            ['id'=>'0','description_short'=>'No Genera Combust','description_long'=>'No Genera Combust'],
            ['id'=>'1','description_short'=>'Si Genera Combust','description_long'=>'Si Genera Combust'],
        ];

        $this->db->table('fuel_athorization')->insertBatch($data);
    }
}