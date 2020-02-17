<?php

namespace App\Database\Seeds;

class NotarySeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            ['id'=>'0','description_short'=>'Sin Información','description_long'=>'Sin Información'],
            ['id'=>'1','description_short'=>'ALFONSO CISNEROS FERREYROS','description_long'=>'ALFONSO CISNEROS FERREYROS'],
            ['id'=>'2','description_short'=>'BEATRIZ ZEBALLOS GIAMPIETRI','description_long'=>'BEATRIZ ZEBALLOS GIAMPIETRI'],
            ['id'=>'3','description_short'=>'SAGASTEGUI','description_long'=>'SAGASTEGUI'],
        ];

        $this->db->table('notary')->insertBatch($data);
    }
}