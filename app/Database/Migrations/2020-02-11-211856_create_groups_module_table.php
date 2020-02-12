<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGroupModuleTable extends Migration
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
				'constraint'     => '200',
				'null'           => true
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
			]
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('groups_module');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('groups_module');
	}
}
