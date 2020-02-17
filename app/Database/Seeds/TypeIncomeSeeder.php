<?php

namespace App\Database\Seeds;

class TypeIncomeSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            ['id'=>'D','description_short'=>'DIAS','description_long'=>'DIAS'],
            ['id'=>'H','description_short'=>'HORAS','description_long'=>'HORAS'],
            ['id'=>'S','description_short'=>'SOLES','description_long'=>'SOLES'],
        ];

        $this->db->table('type_income')->insertBatch($data);
    }
}