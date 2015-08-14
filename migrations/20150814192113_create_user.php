<?php

use Phinx\Migration\AbstractMigration;

class CreateUser extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $table = $this->table('user');
        $users = $this->table('users');
       $users->addColumn('username', 'string', array('limit' => 20))
             ->addColumn('password', 'string', array('limit' => 64))
             ->addColumn('email', 'string', array('limit' => 100))
             ->addColumn('created', 'datetime')
             ->addColumn('updated', 'datetime', array('null' => true))
             ->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
         $this->dropTable('users');
    }
}
