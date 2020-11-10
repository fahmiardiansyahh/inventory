<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CostTable extends Migration
{
	public function up()
	{

		$this->forge->addField([

				
			'id_cost' => [
					'type' => 'INT',
					'constraint' => 11,
					'unsigned' => true,
					'auto_increment' => true,
			],
			'name_cost' =>  [
					'type' => 'VARCHAR',
					'constraint' => 20,
			]

		]);

		 $this->forge->addKey('id_cost', TRUE);
		 // Create Table
		 $this->forge->createTable('costs');


	}

	//--------------------------------------------------------------------

	public function down()
	{
			//Drop Table
		 $this->forge->dropTable('costs');
	}
}
