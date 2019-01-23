<?php 

$routes = array(
'GET/'=>'IndexController@index',
'GET/user'=>'IndexController@view',
'GET/error'=>'Error404Controller@view'
);
$router->define($routes, $_SERVER['REQUEST_URI']);

?>