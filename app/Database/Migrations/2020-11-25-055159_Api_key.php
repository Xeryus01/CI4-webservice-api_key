<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ApiKey extends Migration
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
			'api_key' => [
				'type' => 'text',
			]
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('api_key');
	}

	public function down()
	{
		$this->forge->dropTable('api_key');
	}
}
