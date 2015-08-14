<?php

use Phinx\Migration\AbstractMigration;

class CreatePosts extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $posts = $this->table('posts');
        $posts->addColumn('visibility','integer')
        ->addColumn('owner','integer')
        ->addColumn('groupid','integer')
        ->addColumn('type','integer')
        ->addColumn('created','datetime')
        ->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
         $this->dropTable('posts');
    }
}
