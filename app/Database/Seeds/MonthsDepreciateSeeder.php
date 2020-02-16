<?php

namespace App\Database\Seeds;

class MonthsDepreciateSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            ['id'=>'0','description_short'=>'Sin Información','description_long'=>'Sin Información'],
            ['id'=>'1','description_short'=>'12 meses','description_long'=>'12 meses'],
            ['id'=>'2','description_short'=>'24 meses','description_long'=>'24 meses'],
            ['id'=>'3','description_short'=>'36 meses','description_long'=>'36 meses'],
            ['id'=>'4','description_short'=>'48 meses','description_long'=>'48 meses'],
            ['id'=>'5','description_short'=>'60 meses','description_long'=>'60 meses'],
        ];

        $this->db->table('months_depreciate')->insertBatch($data);
    }
}