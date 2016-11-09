<?php

use Phinx\Migration\AbstractMigration;
/**
 * This migrations  are  done  to retrive  database. This specific file is  used  to create a table in the database
 */
class CreateUserTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     */
  /*  public function change()
    {

    }*/

    public function up()
    {
        $users  = $this->table('users');
        $users->addColumn('first_name', 'string')
        ->addColumn('last_name', 'string')
        ->addColumn('Email', 'string')
        ->addColumn('created_at', 'datetime', ['null'=>true])
        ->addColumn('created_at', 'datetime', ['null'=>true])
        ->save();
    }
    public function down()
    {
        $this->dropTable('users');
    }
}
