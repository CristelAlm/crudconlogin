<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TUsuarios extends Migration
{
	  public function up()
        {
                $this->forge->addField([
                        'id_usuario'          => [
                                'type'           => 'INT',
                                'constraint'     => 5,
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
                        'nombre'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '200',
                        ],
                        'a_paterno'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '200',
                        ],
                        'email'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '200',
                        ],
                        'usuario'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '200',
                        ],
                        'password'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '200',
                        ],
                        'type'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '200',
                        ],
                ]);
                $this->forge->addKey('id_usuario', true);
                $this->forge->createTable('t_usuarios');
        }

        public function down()
        {
                $this->forge->dropTable('t_usuarios');
        }
}
