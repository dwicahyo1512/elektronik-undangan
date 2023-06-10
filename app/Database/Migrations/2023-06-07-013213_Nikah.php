<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Nikah extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_nikah' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'no_pemilik' => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],

            'img_pria' => [
                'type' => 'VARCHAR',
                'constraint' => '40',
            ],
            'img_wanita' => [
                'type' => 'VARCHAR',
                'constraint' => '40',
            ],
             'nama_pria' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'nama_wanita' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'ibu_pria' => [
                'type' => 'VARCHAR',
                'constraint' => '40',
            ],
            'ibu_wanita' => [
                'type' => 'VARCHAR',
                'constraint' => '40',
            ],
            'ayah_pria' => [
                'type' => 'VARCHAR',
                'constraint' => '40',
            ],
            'ayah_wanita' => [
                'type' => 'VARCHAR',
                'constraint' => '40',
            ],
            'address' => [
                'type' => 'VARCHAR',
                'constraint' => '40',
            ],
            'photo_wedding' => [
                'type' => 'VARCHAR',
                'constraint' => '220',
            ],
            'date_acara' => [
                'type'       => 'DATE',
            ],
            'id_acara' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

        ]);
        $this->forge->addKey('id_nikah', true);
        $this->forge->addForeignKey('id_acara', 'acara', 'id_acara');
        $this->forge->createTable('nikah');
    }



    public function down()
    {
        $this->forge->dropForeignKey('nikah', 'nikah_id_acara_foreign');
        $this->forge->dropTable('nikah');
    }
}
