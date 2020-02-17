<?php

namespace App\Database\Seeds;

class StaffStatesSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            ['id'=>'1','description_short'=>'ACTIVO','description_long'=>'ACTIVO'],
            ['id'=>'2','description_short'=>'VACACIONES','description_long'=>'VACACIONES'],
            ['id'=>'3','description_short'=>'GRATIFICACION','description_long'=>'GRATIFICACION'],
            ['id'=>'4','description_short'=>'PERMISO','description_long'=>'PERMISO'],
            ['id'=>'5','description_short'=>'CESADO','description_long'=>'CESADO'],
            ['id'=>'6','description_short'=>'LIC.SIN GOCE','description_long'=>'LIC.SIN GOCE'],
            ['id'=>'7','description_short'=>'LIC.CON GOCE','description_long'=>'LIC.CON GOCE'],
        ];

        $this->db->table('staff_states')->insertBatch($data);
    }
}