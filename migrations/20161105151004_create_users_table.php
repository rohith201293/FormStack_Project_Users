<?php

use Phinx\Migration\AbstractMigration;

class CreateUsersTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     */
     public function up()
     {

       $users = $this->table('users');
       $users->addColumn('First_name','String')
              ->addColumn('Last_name','String')
              ->addColumn('Email','String')
              ->addColumn('password','String')
              ->addColumn('created_at','datetime',['null'=>  true])
              ->addColumn('updated_at','datetime',['null'=>  true])

              ->save();
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         $this->dropTable('users');
     }
   }
