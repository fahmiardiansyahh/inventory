<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SenderTable extends Migration
{
	public function up()
	{
		
		//Check Foreign 
		$this->db->enableForeignKeyChecks();

		$this->forge->addField([
			
			'id_senders' =>  [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'name_senders' =>  [
				'type' => 'VARCHAR',
				'constraint' => 20,
			],
			'role_id_senders' => [
				'type' => 'INT',
				'unsigned' => TRUE,
				'constraint' => 11,
			]

		]);

		 $this->forge->addKey('id_senders', TRUE);

		 $this->forge->addForeignKey('role_id_senders','sender_roles','role_id_senders','CASCADE','CASCADE');
		  // Create Table
		 $this->forge->createTable('senders');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
		$this->forge->dropTable('senders');
	}
}
