<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePermissionsTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'module_id'          => [
				'type'           => 'INT',
				'null'           => false,
			],
			'user_id' => [
				'type'           => 'INT',
				'null'           => false,
			],
		]);

		$this->forge->addForeignKey('user_id', 'users', 'id');
		$this->forge->addForeignKey('module_id', 'modules', 'id');
		$this->forge->createTable('permissions');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('permissions');
	}
}
