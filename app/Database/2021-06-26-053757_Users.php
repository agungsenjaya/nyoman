<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
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
			'name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'default'		 => 'Agung Senjaya',
			],
			'password'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'email'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'			 => TRUE
			],
			'alamat'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'phone'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'roles'       => [
				'type'           => 'ENUM',
				'constraint'     => ['Admin', 'User'],
				'default'        => 'User',
			],
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('users', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
