<?php

namespace App\Database\Seeds;

class PaymentSituationSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
			['id'=>'1','description_short'=>'PLL DIRECO-PNP','description_long'=>'PLL DIRECO-PNP'],
			['id'=>'2','description_short'=>'CAJA CENTRAL','description_long'=>'CAJA CENTRAL'],
			['id'=>'3','description_short'=>'PLL VIPOL','description_long'=>'PLL VIPOL'],
			['id'=>'4','description_short'=>'CAJA MILITAR','description_long'=>'CAJA MILITAR'],
			['id'=>'5','description_short'=>'PLL OGA','description_long'=>'PLL OGA'],
			['id'=>'6','description_short'=>'SUSPENSION','description_long'=>'SUSPENSION'],
			['id'=>'7','description_short'=>'CHEQUE','description_long'=>'CHEQUE'],
			['id'=>'8','description_short'=>'PLL COMBUST-PNP','description_long'=>'PLL COMBUST-PNP'],
        ];

        $this->db->table('payment_situation')->insertBatch($data);
    }
}