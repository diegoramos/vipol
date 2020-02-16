<?php

namespace App\Database\Seeds;

class StaffConditionSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            ['id'=>'1','description_short'=>'Estable','description_long'=>'Estable'],
            ['id'=>'2','description_short'=>'Contratado','description_long'=>'Contratado'],
            ['id'=>'3','description_short'=>'Funcionario','description_long'=>'Funcionario'],
            ['id'=>'4','description_short'=>'Directivo','description_long'=>'Directivo'],
            ['id'=>'5','description_short'=>'Practicante','description_long'=>'Practicante'],
            ['id'=>'6','description_short'=>'Honorario','description_long'=>'Honorario'],
            ['id'=>'7','description_short'=>'Lic. sin goce','description_long'=>'Lic. sin goce'],
            ['id'=>'8','description_short'=>'Lic. con goce','description_long'=>'Lic. con goce'],
        ];

        $this->db->table('staff_condition')->insertBatch($data);
    }
}