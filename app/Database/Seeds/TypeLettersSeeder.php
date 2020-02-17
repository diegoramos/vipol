<?php

namespace App\Database\Seeds;

class TypeLettersSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            ['id'=>'1','description_short'=>'Letras Canceladas','description_long'=>'Letras Canceladas'],
            ['id'=>'2','description_short'=>'Letras en Cartera','description_long'=>'Letras en Cartera'],
            ['id'=>'3','description_short'=>'Letras en Protesto','description_long'=>'Letras en Protesto'],
            ['id'=>'4','description_short'=>'Letras Anuladas','description_long'=>'Letras Anuladas'],
        ];

        $this->db->table('type_letters')->insertBatch($data);
    }
}