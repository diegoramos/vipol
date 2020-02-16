<?php

namespace App\Database\Seeds;

class MovementTypeSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
			['id'=>'IA','description_short'=>'Ingreso por Ajuste de Inventar','description_long'=>'Ingreso por Ajuste de Inventar'],
			['id'=>'IC','description_short'=>'Ingreso Compras','description_long'=>'Ingreso Compras'],
			['id'=>'II','description_short'=>'Ingreso Inventario','description_long'=>'Ingreso Inventario'],
			['id'=>'IP','description_short'=>'Ingreso Apertura','description_long'=>'Ingreso Apertura'],
			['id'=>'SA','description_short'=>'Salida por Ajuste de Inventari','description_long'=>'Salida por Ajuste de Inventari'],
			['id'=>'SB','description_short'=>'Salida por Baja/Deterioro','description_long'=>'Salida por Baja/Deterioro'],
			['id'=>'SP','description_short'=>'Salida Por pedidos','description_long'=>'Salida Por pedidos'],
        ];

        $this->db->table('movement_type')->insertBatch($data);
    }
}