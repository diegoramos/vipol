<?php

namespace App\Database\Seeds;

class MilitaryBoxTypeSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            ['id'=>'0','description_short'=>'SIN INFORMACION','description_long'=>'SIN INFORMACION'],
            ['id'=>'1','description_short'=>'MARINA DE GUERRA','description_long'=>'MARINA DE GUERRA'],
            ['id'=>'2','description_short'=>'EJERCITO PERUANO','description_long'=>'EJERCITO PERUANO'],
            ['id'=>'3','description_short'=>'FUERZA AREA DEL PERU','description_long'=>'FUERZA AREA DEL PERU'],
            ['id'=>'4','description_short'=>'PNP POLICIA GENERAL','description_long'=>'PNP POLICIA GENERAL'],
            ['id'=>'5','description_short'=>'PNP POLICIA DE SEGURIDAD','description_long'=>'PNP POLICIA DE SEGURIDAD'],
            ['id'=>'6','description_short'=>'PNP POLICIA TECNICA','description_long'=>'PNP POLICIA TECNICA'],
            ['id'=>'7','description_short'=>'PNP SANIDAD','description_long'=>'PNP SANIDAD'],
        ];

        $this->db->table('military_box_type')->insertBatch($data);
    }
}