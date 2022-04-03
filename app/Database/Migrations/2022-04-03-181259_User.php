<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        //
        {
            $this->forge->addField([
                'id' => [
                    'type' => 'INT',
                    'constraint' => 11,
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE
                ],
                'username' => [
                    'type' => 'VARCHAR',
                    'constraint' => 100,
                ],
                'password' => [
                    'type' => 'VARCHAR',
                    'constraint' => 255,
                ],
                'salt' => [
                    'type' => 'text',
                ],
                'avatar' => [
                    'type' => 'text',
                    'null' => TRUE,
                ],
                'role' => [
                    'type' => 'INT',
                    'constraint' => 1,
                    'default' => 1,
                ],
                'created_by' => [
                    'type' => 'INT',
                    'constaint' => 11,
                ],
                'created_date' => [
                    'type' => 'DATETIME',
                ],
                'update_by' => [
                    'type' => 'INT',
                    'constaint' => 11,
                    'null' => TRUE,
                ],
                'updated_date' => [
                    'type' => 'DATETIME',
                    'null' => TRUE,
                ]
            ]);
            $this->forge->addKey('id', TRUE);
            $this->forge->createTable('user');
        }
    }

    public function down()
    {
        //
        $this->forge->dropTable('user');
    }
}
