<?php

class Migration_Create_users extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'user_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'user_email' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'user_pass' => array(
                'type' => 'VARCHAR',
                'constraint' => '128'
            ),
            'user_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
        ));
        $this->dbforge->add_key('user_id', TRUE);
        $this->dbforge->create_table('users');
    }

    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}