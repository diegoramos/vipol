<?php

namespace App\Database\Seeds;

class TypeAgreementsSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            ['id'=>'0','description_short'=>'Sin Informacion','description_long'=>'Sin Informacion'],
            ['id'=>'1','description_short'=>'Conv.Educ.UAP','description_long'=>'Conv.Educ.UAP'],
            ['id'=>'2','description_short'=>'Conv.Educ.UTP','description_long'=>'Conv.Educ.UTP'],
            ['id'=>'3','description_short'=>'Conv.Educ.UCV','description_long'=>'Conv.Educ.UCV'],
            ['id'=>'4','description_short'=>'Conv.Educ.IDAT','description_long'=>'Conv.Educ.IDAT'],
            ['id'=>'5','description_short'=>'Conv.Educ.EIGER','description_long'=>'Conv.Educ.EIGER'],
            ['id'=>'6','description_short'=>'Conv.Educ.U.CATOLICA','description_long'=>'Conv.Educ.U.CATOLICA'],
        ];

        $this->db->table('type_agreements')->insertBatch($data);
    }
}