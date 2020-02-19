<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePartners extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => '11',
				'auto_increment' => TRUE,
			],
			'type_institution_id'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '5',
				'null'           => FALSE,
			],
			'active_document_id'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '5',
				'null'           => FALSE,
			],
			'date_in'       => [
				'type'           => 'DATETIME',
				'null'           => TRUE,
			],
			'file_num'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '10',
				'null'           => false,
			],
			'account_num'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '10',
				'null'           => false,
			],
			'payment_situation_id'       => [
				'type'           => 'INT',
				'constraint'     => '11',
				'null'           => false,
			],
			'partner_situation_id' => [
				'type'           => 'INT',
				'constraint'     => '11',
				'null'           => FALSE,
			],
			'date_out' => [
				'type'           => 'DATETIME',
				'null'           => TRUE,
			],
			'agreement_document_id' => [
				'type'           => 'INT',
				'constraint'     => '11',
				'null'           => FALSE,
			],
			'num_agreement' => [
				'type'           => 'VARCHAR',
				'constraint'     => '10',
				'null'           => TRUE,
			],
			'date_agreement' => [
				'type'           => 'DATETIME',
				'null'           => TRUE,
			],
			'authorization_discount_id' => [
				'type'           => 'INT',
				'constraint'     => '11',
				'null'           => FALSE,
			],
			'type_agreement_id' => [
				'type'           => 'INT',
				'constraint'     => '11',
				'null'           => FALSE,
			],
			'fuel_autho_id' => [
				'type'           => 'INT',
				'constraint'     => '11',
				'null'           => false,
			],
			'fuel_program_id' => [
				'type'           => 'INT',
				'constraint'     => '11',
				'null'           => false,
			],
			'cip_pnp' => [
				'type'           => 'VARCHAR',
				'constraint'     => '10',
				'null'           => TRUE,
			],
			'military_box_type_id' => [
				'type'           => 'INT',
				'constraint'     => '11',
				'null'           => false,
			],
			'cause' => [
				'type'           => 'VARCHAR',
				'constraint'     => '10',
				'null'           => TRUE,
			],
			'beneficiary' => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'person_id' => [
				'type'           => 'INT',
				'constraint'     => '11',
				'null'           => false,
			],
			'birthday' => [
				'type'           => 'DATE',
				'null'           => TRUE,
			],
			'gender' => [
				'type'           => 'INT',
				'constraint'     => '1',
				'null'           => TRUE,
			],
			'identification_document_id' => [
				'type'           => 'VARCHAR',
				'constraint'     => '5',
				'null'           => false,
			],
			'num_document' => [
				'type'           => 'VARCHAR',
				'constraint'     => '10',
				'null'           => TRUE,
			],
			'marital_status_id' => [
				'type'           => 'INT',
				'constraint'     => '11',
				'null'           => false,
			],
			'num_children' => [
				'type'           => 'VARCHAR',
				'constraint'     => '10',
				'null'           => TRUE,
			],
			'full_name_spouse' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
				'null'           => TRUE,
			],
			'district_id' => [
				'type'           => 'VARCHAR',
				'constraint'     => '5',
				'null'           => false,
			],
			'phone_cell' => [
				'type'           => 'VARCHAR',
				'constraint'     => '10',
				'null'           => TRUE,
			],
			'email' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
				'null'           => TRUE,
			],
			'workplace' => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
				'null'           => TRUE,
			],
			'work_address' => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
				'null'           => TRUE,
			],
			'work_district_id' => [
				'type'           => 'VARCHAR',
				'constraint'     => '5',
				'null'           => false,
			],
			'work_phone' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
				'null'           => TRUE,
			],
			'service_time' => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
				'null'           => TRUE,
			],
			'salary' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
				'null'           => TRUE,
			],
			'observation' => [
				'type'           => 'TEXT',
				'null'           => true,
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

		$this->forge->addForeignKey('type_institution_id', 'type_institution', 'id');
		$this->forge->addForeignKey('active_document_id', 'active_documents', 'id');
		$this->forge->addForeignKey('payment_situation_id', 'payment_situation', 'id');
		$this->forge->addForeignKey('partner_situation_id', 'partner_situation', 'id');
		$this->forge->addForeignKey('agreement_document_id', 'agreement_documents_csjo', 'id');
		$this->forge->addForeignKey('authorization_discount_id', 'authorization_discounts', 'id');
		$this->forge->addForeignKey('type_agreement_id', 'type_agreements', 'id');
		$this->forge->addForeignKey('fuel_autho_id', 'fuel_authorization', 'id');
		$this->forge->addForeignKey('fuel_program_id', 'fuel_program', 'id');
		$this->forge->addForeignKey('military_box_type_id', 'military_box_type', 'id');
		$this->forge->addForeignKey('person_id', 'persons', 'id');
		$this->forge->addForeignKey('identification_document_id', 'identification_document', 'id');
		$this->forge->addForeignKey('marital_status_id', 'marital_status', 'id');
		$this->forge->addForeignKey('district_id', 'districts', 'id');
		$this->forge->addForeignKey('work_district_id', 'districts', 'id');
	    $this->forge->addKey('id', TRUE);
	    $this->forge->createTable('partners');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('partners');
	}
}
