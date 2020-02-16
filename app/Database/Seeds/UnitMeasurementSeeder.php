<?php

namespace App\Database\Seeds;

class UnitMeasurementSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
			['id'=>'BL','description_short'=>'Bolsas','description_long'=>'Bolsas'],
			['id'=>'CE','description_short'=>'Cientos','description_long'=>'Cientos'],
			['id'=>'CI','description_short'=>'Cajitas','description_long'=>'Cajitas'],
			['id'=>'CJ','description_short'=>'Cajas','description_long'=>'Cajas'],
			['id'=>'DC','description_short'=>'Docenas','description_long'=>'Docenas'],
			['id'=>'FR','description_short'=>'Frascos','description_long'=>'Frascos'],
			['id'=>'GL','description_short'=>'Galones','description_long'=>'Galones'],
			['id'=>'KG','description_short'=>'Kilos','description_long'=>'Kilos'],
			['id'=>'LT','description_short'=>'Litros','description_long'=>'Litros'],
			['id'=>'MI','description_short'=>'Millar','description_long'=>'Millar'],
			['id'=>'MT','description_short'=>'Metros','description_long'=>'Metros'],
			['id'=>'PL','description_short'=>'Pliegos','description_long'=>'Pliegos'],
			['id'=>'PQ','description_short'=>'Paquetes','description_long'=>'Paquetes'],
			['id'=>'SI','description_short'=>'Sin Informacion','description_long'=>'Sin Informacion'],
			['id'=>'SO','description_short'=>'Sobres','description_long'=>'Sobres'],
			['id'=>'UN','description_short'=>'Unidades','description_long'=>'Unidades'],
        ];

        $this->db->table('unit_measurement')->insertBatch($data);
    }
}