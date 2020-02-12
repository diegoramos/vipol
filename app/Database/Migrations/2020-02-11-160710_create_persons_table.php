<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePerson extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'auto_increment' => TRUE
			],
			'name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '80',
			],
			'last_name' => [
				'type'           => 'VARCHAR',
				'constraint'     => '80',
			],
			'dni' => [
				'type'           => 'INT',
				'null'           => FALSE,
				'unique'         => true,
			],
			'address' => [
				'type'           => 'TEXT',
				'null'           => true
			]
		]);
		$this->forge->addKey('id', TRUE);
		//$attributes = ['ENGINE' => 'InnoDB'];
			$this->forge->createTable('persons'/*, false, $attributes*/);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('persons');
	}
}
