<?php

namespace App\Database\Seeds;

class TypeInstitutionSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
			['id'=>'0','description_short'=>'SIN INFORMACION','description_long'=>'SIN INFORMACION'],
			['id'=>'1','description_short'=>'POLICIA GENERAL','description_long'=>'POLICIA GENERAL'],
			['id'=>'2','description_short'=>'POLICIA TECNICA','description_long'=>'POLICIA TECNICA'],
			['id'=>'3','description_short'=>'POLICIA DE SEGURIDAD','description_long'=>'POLICIA DE SEGURIDAD'],
			['id'=>'4','description_short'=>'POLICIA NACIONAL DEL PERU','description_long'=>'POLICIA NACIONAL DEL PERU'],
			['id'=>'5','description_short'=>'POLICIA DE SANIDAD','description_long'=>'POLICIA DE SANIDAD'],
			['id'=>'6','description_short'=>'EMPLEADOS DEL MINISTERIO','description_long'=>'EMPLEADOS DEL MINISTERIO'],
			['id'=>'7','description_short'=>'FAMILIARES','description_long'=>'FAMILIARES'],
			['id'=>'8','description_short'=>'DEFENSA CIVIL','description_long'=>'DEFENSA CIVIL'],
			['id'=>'9','description_short'=>'ADJUDICATARIOS PARTICULARES','description_long'=>'ADJUDICATARIOS PARTICULARES'],
			['id'=>'M','description_short'=>'MAT.D/CONSTRUCC','description_long'=>'MAT.D/CONSTRUCC'],
			['id'=>'T','description_short'=>'TERRENO','description_long'=>'TERRENO'],
			['id'=>'V','description_short'=>'EMPLEADOS VIPOL','description_long'=>'EMPLEADOS VIPOL'],
        ];

        $this->db->table('type_institution')->insertBatch($data);
    }
}