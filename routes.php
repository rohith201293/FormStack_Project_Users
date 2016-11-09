<?php
/**
 * This routes the user given  address  to the controller.  
 */
$router->map('GET', '/', 'PageController@getShowHomePage', 'home');
$router->map('POST', '/register', 'PageController@getShowRegisterPage', 'register');
$router->map('POST', '/insertvalues', 'PageController@InsertValues', 'register_Insert');
$router->map('POST', '/showdetails', 'PageController@ShowDetails', 'register_DB');
$router->map('POST', '/updatevalues', 'PageController@UpdateValues', 'register_DB_Update');
$router->map('POST', '/Delete', 'PageController@DeleteValues', 'DB_delete');
