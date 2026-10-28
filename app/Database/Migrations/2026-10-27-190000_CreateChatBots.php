<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateChatBots extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'visitor_id' => [
                'type' => 'VARCHAR',
                'constraint' => 36,
            ],
            'visitor_name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'visitor_phone' => [
                'type' => 'VARCHAR',
                'constraint' => 16,
                'null' => true,
                'after' => 'visitor_name',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('visitor_id');
        $this->forge->createTable('chat_bots', true);
    }

    public function down()
    {
        $this->forge->dropTable('chat_bots', true);
    }
}
