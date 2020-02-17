<?php

namespace App\Database\Seeds;

class CalculationStandardSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            ['id'=>'1','description_short'=>'Personal en ESSALUD','description_long'=>'Personal en ESSALUD'],
            ['id'=>'2','description_short'=>'Personal en AFP\'s','description_long'=>'Personal en AFP\'s'],
            ['id'=>'3','description_short'=>'Independiente','description_long'=>'Independiente'],
            ['id'=>'4','description_short'=>'SIN DESCUENTOS','description_long'=>'SIN DESCUENTOS'],
            ['id'=>'5','description_short'=>'Independiente con Dscto','description_long'=>'Independiente con Dscto'],
        ];

        $this->db->table('calculation_standard')->insertBatch($data);
    }
}