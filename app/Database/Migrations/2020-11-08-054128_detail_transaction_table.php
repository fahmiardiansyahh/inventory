<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetailTransactionTable extends Migration
{
	public function up()
	{
	 	//Check Foreign 
		$this->db->enableForeignKeyChecks();

		$this->forge->addField([

			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'price' => [
				'type' => 'INT',
				'constraint' => 11,
			],
			'total' => [
				'type' => 'INT',
				'constraint' => 11,
			],
			'status' => [
				'type' => 'VARCHAR',
				'constraint' => 20,
			],
			'resi_number' => [
				'type' => 'VARCHAR',
				'constraint' => 30,
			],
			'transaction_id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
			],
			'user_id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
			],
			'id_receiver' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
			],
			'id_products' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
			],
			'id_senders' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
			],
		]);

		 $this->forge->addKey('user_id', TRUE);
		 $this->forge->addForeignKey('transaction_id','transactions','transaction_id','CASCADE','CASCADE');
		 $this->forge->addForeignKey('user_id','users','user_id','CASCADE','CASCADE');
		 $this->forge->addForeignKey('id_receiver','receivers','id_receiver','CASCADE','CASCADE');
		 $this->forge->addForeignKey('id_products','products','id_products','CASCADE','CASCADE');
		 $this->forge->addForeignKey('id_senders','senders','id_senders','CASCADE','CASCADE');

		 // Create Table
		 $this->forge->createTable('detail_transactions');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//Drop Table
		 $this->forge->dropTable('detail_transactions');
	}
}
