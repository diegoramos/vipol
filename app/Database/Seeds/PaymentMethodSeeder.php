<?php

namespace App\Database\Seeds;

class PaymentMethodSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            ['id'=>'0','description_short'=>'SIN INFORMACION','description_long'=>'SIN INFORMACION'],
            ['id'=>'1','description_short'=>'CONTADO','description_long'=>'CONTADO'],
            ['id'=>'2','description_short'=>'CHEQUE','description_long'=>'CHEQUE'],
            ['id'=>'3','description_short'=>'CREDITO','description_long'=>'CREDITO'],
            ['id'=>'4','description_short'=>'LEASSING','description_long'=>'LEASSING'],
            ['id'=>'5','description_short'=>'PLL OGA','description_long'=>'PLL OGA'],
            ['id'=>'6','description_short'=>'DONACION','description_long'=>'DONACION'],
            ['id'=>'7','description_short'=>'LIQUIDACION','description_long'=>'LIQUIDACION'],
            ['id'=>'8','description_short'=>'CONDONACION','description_long'=>'CONDONACION'],
            ['id'=>'9','description_short'=>'TRANSFERENCIA','description_long'=>'TRANSFERENCIA'],
            ['id'=>'A','description_short'=>'REGULARIZACION','description_long'=>'REGULARIZACION'],
            ['id'=>'B','description_short'=>'VOUCHER','description_long'=>'VOUCHER'],
        ];

        $this->db->table('payment_method')->insertBatch($data);
    }
}