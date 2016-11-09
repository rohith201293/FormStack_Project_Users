<?php
/**
 * This the file  which is accessible. It  has  all routings to  access  other files.
 * It gets URL tokenize it and send to the  controller  to  handle the request.
 */
include(__DIR__ .  "/../bootstrap/start.php");
Dotenv::load(__DIR__ . "/../");
include(__DIR__ . "/../bootstrap/db.php");
include(__DIR__ .  "/../routes.php");

$match =  $router->match();
list($controller, $method) = explode("@", $match['target']);

if (is_callable(array($controller,  $method)))
{
    $object = new $controller();
    call_user_func_array(array($object,$method), array($match['params']));
}
else
{
    echo "cannot load  COntroller";
    exit();
}
