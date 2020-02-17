<?php

namespace App\Database\Seeds;

class AuthorizationDiscountsSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            ['id'=>'0','description_short'=>'Sin Información','description_long'=>'Sin Información'],
            ['id'=>'1','description_short'=>'Si Autoriz Dscto','description_long'=>'Si Autoriz Dscto'],
            ['id'=>'2','description_short'=>'No Autoriz Dscto','description_long'=>'No Autoriz Dscto'],
        ];

        $this->db->table('authorization_discounts')->insertBatch($data);
    }
}