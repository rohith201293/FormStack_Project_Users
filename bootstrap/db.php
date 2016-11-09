<?php
/**
 * This dp  file is a database connection file  whcih  connects to database using Illuminate.
 * This file fetch data from .env and establishes  connections.
 */
use Illuminate\Database\Capsule\Manager  as Capsule;

$capsule =  new  Capsule;

$capsule->addConnection([
'driver' => getenv('DB_DRIVER'),
  'host' => getenv('DB_HOST'),
  'database' =>  getenv('DB_DATABASE'),
  'username' =>  getenv('DB_USER'),
  'passwaord' =>getenv('DB_PASS'),
  'charset' =>  'utf8',
  'collation' => 'utf8_unicode_ci',
  'prefix' => '',

]);

$capsule->setAsGlobal();
$capsule->bootEloquent();
