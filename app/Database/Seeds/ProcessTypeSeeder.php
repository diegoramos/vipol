<?php

namespace App\Database\Seeds;

class ProcessTypeSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            ['id'=>'1','description_short'=>'NORMAL','description_long'=>'NORMAL'],
            ['id'=>'2','description_short'=>'VACACIONES','description_long'=>'VACACIONES'],
            ['id'=>'3','description_short'=>'GRATIFICACIONES','description_long'=>'GRATIFICACIONES'],
            ['id'=>'4','description_short'=>'EXTRAORDINARIA','description_long'=>'EXTRAORDINARIA'],
            ['id'=>'5','description_short'=>'LIQUIDACIONES','description_long'=>'LIQUIDACIONES'],
            ['id'=>'6','description_short'=>'LICENCIA','description_long'=>'LICENCIA'],
            ['id'=>'7','description_short'=>'CAJA','description_long'=>'CAJA'],
        ];

        $this->db->table('process_type')->insertBatch($data);
    }
}