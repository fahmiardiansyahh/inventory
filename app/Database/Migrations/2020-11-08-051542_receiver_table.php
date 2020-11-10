<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ReceiverTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			
			'id_receiver' =>  [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'name_receiver' =>  [
				'type' => 'VARCHAR',
				'constraint' => 20,
			],
			'phone' =>  [
				'type' => 'INT',
				'constraint' => 16,
			],
			'address' => [
				'type' => 'TEXT',
				'null' => TRUE,			]

		]);

		 $this->forge->addKey('id_receiver', TRUE);
		  // Create Table
		 $this->forge->createTable('receivers');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('receivers');
	}
}
