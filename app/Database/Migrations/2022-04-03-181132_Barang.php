<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barang extends Migration
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
                'namabarang' => [
                    'type' => 'text',
                ],
                'harga' => [
                    'type' => 'INT',
                    'constraint' => 11,
                ],
                'stok' => [
                    'type' => 'INT',
                    'constraint' => 11,
                ],
                'gambar' => [
                    'type' => 'text',
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
            $this->forge->createTable('barang');
        }
    }

    public function down()
    {
        //
        $this->forge->dropTable('barang');
    }
}
