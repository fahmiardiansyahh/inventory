<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TransactionTable extends Migration
{
	public function up()
	{


		//Check Foreign 
		$this->db->enableForeignKeyChecks();

		$this->forge->addField([

			'transaction_id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'date_transaction' => [
				'type' => 'DATE'
			],
			'total_price' => [
				'type' => 'INT',
				'constraint' => 11,
			],
			'id_cost' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
			],
			'user_id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
			]
		]);

		 $this->forge->addKey('transaction_id', TRUE);


		$this->forge->addForeignKey('id_cost','costs','id_cost','CASCADE','CASCADE');
		$this->forge->addForeignKey('user_id','users','user_id','CASCADE','CASCADE');


		  // Create Table
		 $this->forge->createTable('transactions');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//Drop Table
		 $this->forge->dropTable('transactions');
	}
}
