<?php

use Phinx\Migration\AbstractMigration;
/**
 * This migrations  are  done  to retrive  database. This specific file is  used  to insert values into table in  database
 */

class SeedUsers extends AbstractMigration
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
         //   $password_hash = password_hash('verysecret', PASSWORD_DEFAULT);
           $this->execute("
               insert into users (first_name, last_name, Email, password)
               values
               ('Raj', 'Modi', 'Raj@q23.com', 'rohit')
           ");
     }
    public function down()
    {
    }
}
