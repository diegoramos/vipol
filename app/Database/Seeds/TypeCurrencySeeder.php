<?php

namespace App\Database\Seeds;

class TypeCurrencySeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            ['id'=>'0','description_short'=>'Sin Información','description_long'=>'Sin Información'],
            ['id'=>'1','description_short'=>'S/. NUEVOS SOLES','description_long'=>'S/. NUEVOS SOLES'],
            ['id'=>'2','description_short'=>'U$. DOLARES AMERICANOS','description_long'=>'U$. DOLARES AMERICANOS'],
        ];

        $this->db->table('type_currency')->insertBatch($data);
    }
}