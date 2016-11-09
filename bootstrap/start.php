<?php
/**
 * This files loads through  index.php and provides   filp/Whoops  for error reporting.
 */
session_start();

require(__DIR__ .  "/../vendor/autoload.php");

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
$router =   new AltoRouter();
