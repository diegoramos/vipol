<?php

namespace App\Database\Seeds;

class SeederApp extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $this->call('ModuleSeeder');
    }
}
