<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Telepon extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE,
				'auto_increment' => TRUE,
			],
			'nama' => [
				'type' => 'text',
			],
			'nomor' => [
				'type' => 'text',
			]
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('telepon');
	}

	public function down()
	{
		$this->forge->dropTable('telepon');
	}
}
