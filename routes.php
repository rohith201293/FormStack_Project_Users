<?php

$router->map('GET','/','PageController@getShowHomePage','home');

$router->map('GET','/register','PageController@getShowRegisterPage','register');
$router->map('POST','/register','PageController@postShowRegisterPage','register_post');
$router->map('GET','/showdetails','PageController@getTestDB','register_DB');
