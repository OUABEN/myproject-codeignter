<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateVoitureTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
                'unique' => true,
            ],
            'marque' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => false,
            ],
            'model' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],
            'couleur' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],
            'prix' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'null' => false,
            ],
            'status' => [
                'type' => 'BOOLEAN',
                'null' => false,
                'default' => true,  // true means available
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
        $this->forge->createTable('voiture');
    }

    public function down()
    {
        $this->forge->dropTable('voiture');
    }
}
