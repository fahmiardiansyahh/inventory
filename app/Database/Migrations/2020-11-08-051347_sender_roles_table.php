<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SenderRolesTable extends Migration
{
	public function up()
	{
		$this->forge->addField([

			'role_id_senders' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'role_name' => [
				'type' => 'VARCHAR',
				'constraint' => 30,
			]
		]);

		 $this->forge->addKey('role_id_senders', TRUE);
		  // Create Table
		 $this->forge->createTable('sender_roles');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
		$this->forge->dropTable('sender_roles');
	}
}
