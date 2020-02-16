<?php

namespace App\Database\Seeds;

class BankSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
			['id'=>'0','description_short'=>'Sin Informacion','description_long'=>'Sin Informacion'],
			['id'=>'1','description_short'=>'BCO INTERAMERICANO DE FINANZAS','description_long'=>'BCO INTERAMERICANO DE FINANZAS'],
			['id'=>'2','description_short'=>'BCO. DE LA NACION','description_long'=>'BCO. DE LA NACION'],
			['id'=>'3','description_short'=>'BCO. WIESE','description_long'=>'BCO. WIESE'],
			['id'=>'4','description_short'=>'BCO.CREDITO','description_long'=>'BCO.CREDITO'],
			['id'=>'5','description_short'=>'BCO. CONTINENTAL','description_long'=>'BCO. CONTINENTAL'],
			['id'=>'6','description_short'=>'BCO. LATINO','description_long'=>'BCO. LATINO'],
			['id'=>'7','description_short'=>'BCO.INTERBANK','description_long'=>'BCO.INTERBANK'],
			['id'=>'8','description_short'=>'BCO.SANTANDER','description_long'=>'BCO.SANTANDER'],
			['id'=>'9','description_short'=>'BCO.DE COMERCIO','description_long'=>'BCO.DE COMERCIO'],
			['id'=>'10','description_short'=>'CAJA CENTRAL','description_long'=>'CAJA CENTRAL'],
			['id'=>'11','description_short'=>'BCO.SCOTIABANK','description_long'=>'BCO.SCOTIABANK'],
			['id'=>'12','description_short'=>'BCO.MI BANCO','description_long'=>'BCO.MI BANCO'],
        ];

        $this->db->table('banks')->insertBatch($data);
    }
}