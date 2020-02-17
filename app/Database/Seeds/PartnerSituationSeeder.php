<?php

namespace App\Database\Seeds;

class PartnerSituationSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            ['id'=>'0','description_short'=>'SIN INFORMACION','description_long'=>'SIN INFORMACION'],
            ['id'=>'1','description_short'=>'RETIRADO SIN PENSION','description_long'=>'RETIRADO SIN PENSION'],
            ['id'=>'2','description_short'=>'RETIRADO CON PENSION','description_long'=>'RETIRADO CON PENSION'],
            ['id'=>'3','description_short'=>'ASIGNACION JUDICIAL','description_long'=>'ASIGNACION JUDICIAL'],
            ['id'=>'4','description_short'=>'FALLECIDO','description_long'=>'FALLECIDO'],
            ['id'=>'5','description_short'=>'DISPONIBLE CON PENSION','description_long'=>'DISPONIBLE CON PENSION'],
            ['id'=>'6','description_short'=>'DISPONIBLE SIN PENSION','description_long'=>'DISPONIBLE SIN PENSION'],
        ];

        $this->db->table('partner_situation')->insertBatch($data);
    }
}