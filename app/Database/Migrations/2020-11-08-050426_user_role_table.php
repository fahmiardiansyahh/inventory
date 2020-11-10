<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserRoleTable extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([

			'role_id' => [
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

		 $this->forge->addKey('role_id', TRUE);
		  // Create Table
		 $this->forge->createTable('user_roles');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//Drop Table
		  $this->forge->dropTable('user_roles');
	}
}
