FormStack_Project_Users

#Prerequisites

Virtualbox >= 5.1
Vagrant >= 1.8.6
Git.


#Files and folders:

bootStrap/db.php: Provides connection to database.
bootstrap/start.php: provides autoload and flip/whoops error reporting.
 controllers/PageController.php :  handles  the  requests.
 migrations/.php: provides migration schema for all  the databases.
 public/index.php : handles the files and send to controllers.
 tests/PageTest.php: performs unit  test for pages
 vendor: provide  all the dependencies  for the application.
 views/.php: All  the views  shown to user.
 /.env: stores database  information.
 /composer.json: Provides the  dependencies.
 /phinx.yml: stores  database  info to run  migrations.
 /phpunit.xml:  to perform  php  unit  testing.
 /routes.php: provide  the  routes to  controller.
 /Vagrantfile:   To  run Ubuntu  on  virtual box.

#How to run:

 Download repository  from  git.
 Install Virtualbox, Vagrant.
 Use SSH, move  to  the project folder run  command Vagrant up.(which makes  the server run on  virtual box)
 SSH run command vagrant SSH.  now  you are connected to ubuntu.
 Start servers Apache2,nginx,php7.0-fpm,mysql using commands

 sudo /etc/init.d/apache2 start
  sudo /etc/init.d/nginx start
   sudo /etc/init.d/php7.0-fpm start
    sudo /etc/init.d/mysql start

    Open Browser  on  local machine and  go  to url :http://192.168.59.76/

Mysql Database credentials :  user: root, password:secret.
