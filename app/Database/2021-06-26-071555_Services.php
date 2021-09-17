<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Services extends Migration
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
			'user_id'       => [
				'type'           => 'INT',
				'constraint'     => 50,
			],
			'jenis'       => [
				'type'           => 'ENUM',
				'constraint'     => ['Mini Bus', 'Bus','Truk'],
				'default'        => 'Mini Bus',
			],
			'type'       => [
				'type'           => 'ENUM',
				'constraint'     => ['Biasa', 'Sedang','Parah'],
				'default'        => 'Mini Bus',
			],
			'status'       => [
				'type'           => 'ENUM',
				'constraint'     => ['Booking','Proses','Finish','Expire','Cancel'],
				'default'        => 'Booking',
			],
			'keterangan'       => [
				'type'           => 'LONGTEXT',
			],
			'date'       => [
				'type'           => 'DATE',
				'constraint'     => '255',
			],
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('services', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('services');
	}
}
