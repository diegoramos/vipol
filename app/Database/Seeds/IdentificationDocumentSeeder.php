<?php

namespace App\Database\Seeds;

class IdentificationDocumentSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            ['id'=>'CE','description_short'=>'CARNET DE EXTRANJERIA','description_long'=>'CARNET DE EXTRANJERIA'],
            ['id'=>'CI','description_short'=>'CARNET DE IDENTIDAD','description_long'=>'CARNET DE IDENTIDAD'],
            ['id'=>'DN','description_short'=>'DOCUMENTO NACIONAL DE IDENTIDA','description_long'=>'DOCUMENTO NACIONAL DE IDENTIDA'],
            ['id'=>'LC','description_short'=>'LICENCIA DE CONDUCIR','description_long'=>'LICENCIA DE CONDUCIR'],
            ['id'=>'LE','description_short'=>'LIBRETA ELECTORAL','description_long'=>'LIBRETA ELECTORAL'],
            ['id'=>'LM','description_short'=>'LIBRETA MILITAR','description_long'=>'LIBRETA MILITAR'],
            ['id'=>'PA','description_short'=>'PASAPORTE','description_long'=>'PASAPORTE'],
            ['id'=>'PR','description_short'=>'PREDIO','description_long'=>'PREDIO'],
            ['id'=>'SI','description_short'=>'SIN INFORMACION','description_long'=>'SIN INFORMACION'],
        ];

        $this->db->table('identification_document')->insertBatch($data);
    }
}