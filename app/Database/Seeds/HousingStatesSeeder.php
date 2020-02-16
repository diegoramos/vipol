<?php

namespace App\Database\Seeds;

class HousingStatesSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            ['id'=>'0','description_short'=>'SIN INFORMACION','description_long'=>'SIN INFORMACION'],
            ['id'=>'1','description_short'=>'RUSTICO','description_long'=>'RUSTICO'],
            ['id'=>'2','description_short'=>'URBANIZADO','description_long'=>'URBANIZADO'],
            ['id'=>'3','description_short'=>'CONSTRUIDO','description_long'=>'CONSTRUIDO'],
            ['id'=>'4','description_short'=>'VIVIENDA','description_long'=>'VIVIENDA'],
            ['id'=>'5','description_short'=>'TERRENO','description_long'=>'TERRENO'],
        ];

        $this->db->table('housing_states')->insertBatch($data);
    }
}