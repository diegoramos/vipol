<?php

namespace App\Database\Seeds;

class HousingProgramsSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
			['id'=>'0','description_short'=>'TERCEROS','description_long'=>'TERCEROS'],
			['id'=>'1','description_short'=>'LA HUERTA','description_long'=>'LA HUERTA'],
			['id'=>'2','description_short'=>'BENAVIDES','description_long'=>'BENAVIDES'],
			['id'=>'3','description_short'=>'JUAN INGUNZA VALDIVIA','description_long'=>'JUAN INGUNZA VALDIVIA'],
			['id'=>'4','description_short'=>'LOS ALERCES DE MONTERRICO','description_long'=>'LOS ALERCES DE MONTERRICO'],
			['id'=>'5','description_short'=>'HIGUERETA I-II-VIV./IND','description_long'=>'HIGUERETA I-II-VIV./IND'],
			['id'=>'6','description_short'=>'LOS ALAMOS DE MONTERRICO','description_long'=>'LOS ALAMOS DE MONTERRICO'],
			['id'=>'7','description_short'=>'MANGOMARCA 452 VIV. 24 L','description_long'=>'MANGOMARCA 452 VIV. 24 L'],
			['id'=>'8','description_short'=>'EL ALAMO','description_long'=>'EL ALAMO'],
			['id'=>'9','description_short'=>'LAS VIÑAS DE LA MOLINA','description_long'=>'LAS VIÑAS DE LA MOLINA'],
			['id'=>'10','description_short'=>'SAN DIEGO','description_long'=>'SAN DIEGO'],
			['id'=>'11','description_short'=>'EL NARANJAL','description_long'=>'EL NARANJAL'],
			['id'=>'12','description_short'=>'EL PINAR','description_long'=>'EL PINAR'],
			['id'=>'13','description_short'=>'BELLO HORIZONTE','description_long'=>'BELLO HORIZONTE'],
			['id'=>'14','description_short'=>'DIAZ MUÑOZ','description_long'=>'DIAZ MUÑOZ'],
			['id'=>'15','description_short'=>'LAS BRISAS DE PIMENTEL','description_long'=>'LAS BRISAS DE PIMENTEL'],
			['id'=>'21','description_short'=>'LA HUERTA PROG TERM','description_long'=>'LA HUERTA PROG TERM'],
			['id'=>'30','description_short'=>'PROG PROYECTADO','description_long'=>'PROG PROYECTADO'],
			['id'=>'80','description_short'=>'CONV INSTIT IDIP','description_long'=>'CONV INSTIT IDIP'],
			['id'=>'81','description_short'=>'CONV CECAPROP','description_long'=>'CONV CECAPROP'],
			['id'=>'82','description_short'=>'CONV INST IDIEP','description_long'=>'CONV INST IDIEP'],
			['id'=>'88','description_short'=>'CEDECI','description_long'=>'CEDECI'],
			['id'=>'93','description_short'=>'CAJA MILITAR','description_long'=>'CAJA MILITAR'],
			['id'=>'94','description_short'=>'MININTER OGA','description_long'=>'MININTER OGA'],
			['id'=>'95','description_short'=>'DIECO-PNP','description_long'=>'DIECO-PNP'],
			['id'=>'99','description_short'=>'PROG.INDIVIDUAL','description_long'=>'PROG.INDIVIDUAL'],
        ];

        $this->db->table('housing_programs')->insertBatch($data);
    }
}