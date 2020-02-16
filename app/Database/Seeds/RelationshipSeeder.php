<?php

namespace App\Database\Seeds;

class RelationshipSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
			['id'=>'0','description_short'=>'SIN PARENTESCO','description_long'=>'SIN PARENTESCO'],
			['id'=>'1','description_short'=>'PADRE','description_long'=>'PADRE'],
			['id'=>'2','description_short'=>'MADRE','description_long'=>'MADRE'],
			['id'=>'3','description_short'=>'HIJO(a)','description_long'=>'HIJO(a)'],
			['id'=>'4','description_short'=>'ESPOSO(a)','description_long'=>'ESPOSO(a)'],
			['id'=>'5','description_short'=>'TIO(a)','description_long'=>'TIO(a)'],
			['id'=>'6','description_short'=>'COM(p)ADRE','description_long'=>'COM(p)ADRE'],
			['id'=>'7','description_short'=>'ABUELO(a)','description_long'=>'ABUELO(a)'],
			['id'=>'8','description_short'=>'HERMANO(a)','description_long'=>'HERMANO(a)'],
			['id'=>'9','description_short'=>'SUEGRO(A)','description_long'=>'SUEGRO(A)'],
			['id'=>'B','description_short'=>'SOCIO(A)','description_long'=>'SOCIO(A)'],
        ];

        $this->db->table('relationship')->insertBatch($data);
    }
}