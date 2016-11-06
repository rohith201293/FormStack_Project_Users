<?php

use Phinx\Migration\AbstractMigration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


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

       $table = $this->table('user_logins');
         $table->addColumn('user_id', 'integer')
               ->addColumn('created', 'datetime')
               ->create()
               -> save();
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropTable('user');
     }
   }
