<?php

namespace App\Database\Seeds;

class AgreementDocumentsSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
			['id'=>'0','description_short'=>'SIN INFORMACION','description_long'=>'SIN INFORMACION'],
			['id'=>'1','description_short'=>'RESOLUCION ADMINISTRATIVA','description_long'=>'RESOLUCION ADMINISTRATIVA'],
			['id'=>'2','description_short'=>'MEMORANDUM','description_long'=>'MEMORANDUM'],
			['id'=>'3','description_short'=>'OFICIO','description_long'=>'OFICIO'],
			['id'=>'4','description_short'=>'CARTA','description_long'=>'CARTA'],
			['id'=>'5','description_short'=>'RESOLUCION DE CONTRATO','description_long'=>'RESOLUCION DE CONTRATO'],
        ];

        $this->db->table('agreement_documents')->insertBatch($data);
    }
}