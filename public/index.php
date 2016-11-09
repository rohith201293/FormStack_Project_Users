<?php

/*session_start();

require(__DIR__ .  "/../vendor/autoload.php");

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
$router =   new AltoRouter();*/

include(__DIR__ .  "/../bootstrap/start.php");
Dotenv::load(__DIR__ . "/../");
include(__DIR__ . "/../bootstrap/db.php");
include(__DIR__ .  "/../routes.php");

$match =  $router->match();
list($controller,$method) = explode("@",$match['target']);

if(is_callable(array($controller,  $method))){
$object = new $controller();
  call_user_func_array(array($object,$method),array($match['params']));

}else{

echo "caannnt";
exit();
}
/*$router->map('GET','/',function(){
  include(__DIR__ .  "/../views/home.php");
});

$router->map('GET','/register',function(){
  include(__DIR__ .  "/../views/register.html");

});
$router->map('GET','/doRegister.php',function(){
  include(__DIR__ .  "/../views/doRegister.php");

});

$match =  $router->match();

if($match && is_callable($match['target'])){
  call_user_func_array($match['target'], $match['params']);

}
else{
  header($_SERVER['SERVER_PROTOCOL'].'404 Not Found');
}*/
/*$url =  explode('/',   $_SERVER[REQUEST_URI]);
//var_dump($url);
if($url[0]=="rohith")
{
require(__DIR__ .  "/../vendor/register.html");
exit();
}
else {
  require(__DIR__ .  "/../vendor/Register.php");
exit();
//code...
}
*/
