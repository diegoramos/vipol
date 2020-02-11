<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterTestColumsV1 extends Migration
{
	public function up()
	{
        $this->forge->addColumn('blog',[
	        'created_at'       => [
	                'type'           => 'DATETIME',
	                'null'           => TRUE,
	        ],
	        'updated_at'       => [
	                'type'           => 'DATETIME',
	                'null'           => TRUE,
	        ],
	        'deleted_at'       => [
	                'type'           => 'DATETIME',
	                'null'           => TRUE,
	        ],
	        'deleted'       	=> [
	                'type'           => 'INT',
	                'constraint'     => '1',
	                'null'           => FALSE,
	                'default'		 =>	'0',
	        ]
		]);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
