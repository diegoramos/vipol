<?php

namespace App\Database\Seeds;

class TitleConditionSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
			['id'=>'E','description_short'=>'ENTREGADO','description_long'=>'ENTREGADO'],
			['id'=>'N','description_short'=>'NO ENTREGADO','description_long'=>'NO ENTREGADO'],
			['id'=>'O','description_short'=>'NO TRAMITE','description_long'=>'NO TRAMITE'],
			['id'=>'P','description_short'=>'PARTICULAR','description_long'=>'PARTICULAR'],
			['id'=>'T','description_short'=>'TRAMITE','description_long'=>'TRAMITE'],
        ];

        $this->db->table('title_condition')->insertBatch($data);
    }
}