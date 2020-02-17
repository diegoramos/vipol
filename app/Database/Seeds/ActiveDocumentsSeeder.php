<?php

namespace App\Database\Seeds;

class ActiveDocumentsSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            ['id'=>'0','description_short'=>'Sin Información','description_long'=>'Sin Información'],
            ['id'=>'1','description_short'=>'Factura','description_long'=>'Factura'],
            ['id'=>'2','description_short'=>'Boleta de Venta','description_long'=>'Boleta de Venta'],
            ['id'=>'3','description_short'=>'Recibo','description_long'=>'Recibo'],
            ['id'=>'4','description_short'=>'Guía de Remisión','description_long'=>'Guía de Remisión'],
        ];

        $this->db->table('active_documents')->insertBatch($data);
    }
}