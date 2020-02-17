<?php

namespace App\Database\Seeds;

class TypeLinesSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
			['id'=>'MC','description_short'=>'MATERIAL DE CONSTRUCCION','description_long'=>'MATERIAL DE CONSTRUCCION'],
			['id'=>'ME','description_short'=>'UTILES DE OFICINA','description_long'=>'UTILES DE OFICINA'],
			['id'=>'ML','description_short'=>'UTILES DE LIMPIEZA','description_long'=>'UTILES DE LIMPIEZA'],
			['id'=>'MO','description_short'=>'ACCESORIOS','description_long'=>'ACCESORIOS'],
			['id'=>'MQ','description_short'=>'MUEBLES,ENSERES Y EQUIPOS','description_long'=>'MUEBLES,ENSERES Y EQUIPOS'],
			['id'=>'MR','description_short'=>'HERRAMIENTAS','description_long'=>'HERRAMIENTAS'],
			['id'=>'VI','description_short'=>'VIVERES','description_long'=>'VIVERES'],
        ];

        $this->db->table('type_lines')->insertBatch($data);
    }
}