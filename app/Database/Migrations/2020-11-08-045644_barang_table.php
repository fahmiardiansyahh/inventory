<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BarangTable extends Migration
{
	public function up()
	{
		//Check Foreign 
		$this->db->enableForeignKeyChecks();

		$this->forge->addField([
			
			'id_products' =>  [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'name_products' =>  [
				'type' => 'VARCHAR',
				'constraint' => 20,
			],
			'unit_products' =>  [
				'type' => 'ENUM',
				'constraint' =>  "'PCS','Kg'",
				'default' => 'PCS'
			],
			'price_products' => [
				'type' => 'INT',
				'constraint' => 11,
			],
			'description_products' =>  [
				'type' => 'VARCHAR',
				'constraint' => 30,
			],
			'user_id' => [
				'type' => 'INT',
				'unsigned' => TRUE,
				'constraint' => 11,
			]

		]);

		   $this->forge->addKey('id_barang', TRUE);
		   // field,tb_foreign,forign key field
		   $this->forge->addForeignKey('user_id','users','user_id','CASCADE','CASCADE');

		   // Create Table
		   $this->forge->createTable('products');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//Drop Table
		 $this->forge->dropTable('products');
	}
}
