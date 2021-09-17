<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bookings extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'code'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'default'		 => 'Agung Senjaya',
			],
			'price'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'keterangan'       => [
				'type'           => 'LONGTEXT',
			],
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('bookings', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('bookings');
	}
}
