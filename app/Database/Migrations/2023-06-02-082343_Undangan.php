<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Undangan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_undangan' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_undangan' => [
                'type'       => 'VARCHAR',
                'constraint' => '60',
            ],
            'address' => [
                'type'  => 'TEXT',
                'null' => true,
            ],
            'info_undangan' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'id_group' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'id_contact' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
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
        $this->forge->addKey('id_undangan', true);
        $this->forge->addForeignKey('id_group', 'groups', 'id_group');
        $this->forge->addForeignKey('id_contact', 'contacts', 'id_contact');
        $this->forge->addForeignKey('id_acara', 'acara', 'id_acara');
        $this->forge->createTable('undangan');
    }


    public function down()
    {
        $this->forge->dropForeignKey('undangan', 'undangan_id_group_foreign');
        $this->forge->dropForeignKey('undangan', 'undangan_id_contact_foreign');
        $this->forge->dropForeignKey('undangan', 'undangan_id_acara_foreign');
        $this->forge->dropTable('undangan');
    }
}
