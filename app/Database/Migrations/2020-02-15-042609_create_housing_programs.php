<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateHousingPrograms extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'VARCHAR',
				'constraint'     => 5,
				'null'           => FALSE,
			],
			'description_short'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'description_long' => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
			],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'           => TRUE,
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'           => TRUE,
			],
			'deleted_at'       	=> [
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

	    $this->forge->addKey('id', TRUE);
	    $this->forge->createTable('housing_programs');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('housing_programs');
	}
}
