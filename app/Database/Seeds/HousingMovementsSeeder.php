<?php

namespace App\Database\Seeds;

class HousingMovementsSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
			['id'=>'0','description_short'=>'SIN INFORMACION','description_long'=>'SIN INFORMACION'],
			['id'=>'1','description_short'=>'COMPRA DE TERRENO','description_long'=>'COMPRA DE TERRENO'],
			['id'=>'2','description_short'=>'DEVOLUCION DE AREA','description_long'=>'DEVOLUCION DE AREA'],
			['id'=>'3','description_short'=>'TRANSFERENCIA DE TERRENO','description_long'=>'TRANSFERENCIA DE TERRENO'],
			['id'=>'4','description_short'=>'PERMUTA DE TERRENO','description_long'=>'PERMUTA DE TERRENO'],
			['id'=>'5','description_short'=>'RENUNCIA','description_long'=>'RENUNCIA'],
			['id'=>'6','description_short'=>'EXCLUSION','description_long'=>'EXCLUSION'],
			['id'=>'7','description_short'=>'DONACION','description_long'=>'DONACION'],
			['id'=>'8','description_short'=>'OTROS FINES','description_long'=>'OTROS FINES'],
			['id'=>'C','description_short'=>'CESION DE DERECHO','description_long'=>'CESION DE DERECHO'],
			['id'=>'U','description_short'=>'SUCESION DE DERECHO','description_long'=>'SUCESION DE DERECHO'],
        ];

        $this->db->table('housing_movements')->insertBatch($data);
    }
}