<?php

namespace App\Database\Seeds;

class MaritalStatusSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            ['id'=>'0','description_short'=>'SIN INFORMACION','description_long'=>'SIN INFORMACION'],
            ['id'=>'1','description_short'=>'SOLTERO(a)','description_long'=>'SOLTERO(a)'],
            ['id'=>'2','description_short'=>'CASADO(a)','description_long'=>'CASADO(a)'],
            ['id'=>'3','description_short'=>'VIUDO(a)','description_long'=>'VIUDO(a)'],
            ['id'=>'4','description_short'=>'DIVORCIADO(a)','description_long'=>'DIVORCIADO(a)'],
            ['id'=>'5','description_short'=>'CONVIVIENTE','description_long'=>'CONVIVIENTE'],
        ];

        $this->db->table('marital_status')->insertBatch($data);
    }
}