<?php

use Phinx\Migration\AbstractMigration;
/**
 * This migrations  are  done  to retrive  database. This specific file is  used to show data in the  table of  the database
 */

class Showusers extends AbstractMigration
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


         // query()
         $row = $this->fetchRow('SELECT * FROM users');
     }

     /**
      * Migrate Down.
      */
     public function down()
     {
     }
}
