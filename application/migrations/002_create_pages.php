<?php

class Migration_Create_pages extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'page_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'page_title' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'page_slug' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
            'page_order' => array(
                'type' => 'VARCHAR',
                'constraint' => '11'
            ),
            'page_body' => array(
                'type' => 'TEXT',
            ),
        ));
        $this->dbforge->add_key('page_id', TRUE);
        $this->dbforge->create_table('pages');
    }

    public function down()
    {
        $this->dbforge->drop_table('pages');
    }
}