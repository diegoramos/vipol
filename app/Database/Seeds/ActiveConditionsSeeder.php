<?php

namespace App\Database\Seeds;

class ActiveConditionsSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
			['id'=>'0','description_short'=>'Sin Información','description_long'=>'Sin Información'],
			['id'=>'1','description_short'=>'Bueno','description_long'=>'Bueno'],
			['id'=>'2','description_short'=>'Regular','description_long'=>'Regular'],
			['id'=>'3','description_short'=>'Malo','description_long'=>'Malo'],
        ];

        $this->db->table('active_conditions')->insertBatch($data);
    }
}