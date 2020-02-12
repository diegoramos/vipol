<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateModulesTable extends Migration
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
			'icons'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '25',
				'null'           => true
			],
			'module_id'          => [
				'type'           => 'INT',
				'null'           => true,
			],
			'module_group_id'          => [
				'type'           => 'INT',
				'null'           => false,
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
		$this->forge->addForeignKey('module_group_id', 'groups_module', 'id');
		$this->forge->addForeignKey('module_id', 'groups_module', 'id');
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('modules');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('modules');
	}
}
