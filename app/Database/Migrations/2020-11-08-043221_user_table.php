<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserTable extends Migration
{
	public function up()
	{

		//Check Foreign 
		$this->db->enableForeignKeyChecks();

		$this->forge->addField([

			'user_id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'name_user' => [
				'type' => 'VARCHAR',
				'constraint' => 30,
			],
			'role_id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
			]
		]);

		 $this->forge->addKey('user_id', TRUE);
		 $this->forge->addForeignKey('role_id','user_roles','role_id','CASCADE','CASCADE');

		 // Create Table
		 $this->forge->createTable('users');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//Drop Table
		 $this->forge->dropTable('users');
	}
}
