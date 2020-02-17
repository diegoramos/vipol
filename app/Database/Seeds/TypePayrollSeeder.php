<?php

namespace App\Database\Seeds;

class TypePayrollSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
			['id'=>'1','description_short'=>'EMPLEADOS','description_long'=>'EMPLEADOS'],
			['id'=>'2','description_short'=>'DIRECTIVOS','description_long'=>'DIRECTIVOS'],
			['id'=>'3','description_short'=>'FUNCIONARIOS','description_long'=>'FUNCIONARIOS'],
			['id'=>'4','description_short'=>'PRACTICANTES','description_long'=>'PRACTICANTES'],
			['id'=>'5','description_short'=>'HONORARIOS','description_long'=>'HONORARIOS'],
        ];

        $this->db->table('type_payroll')->insertBatch($data);
    }
}