<?php 
	// $file = 'routes.php';
	$route = new \Router\Route;
	//TODO validate server variables
	$request = $_SERVER['REQUEST_METHOD'].$_SERVER['REQUEST_URI'];
	// d($_SERVER['REQUEST_METHOD'].$_SERVER['REQUEST_URI']);
	if (array_key_exists($request, $route->routes))
	{
		$route_components = $route->getRouteComponents($route->routes[$request]);
		$route->loadClass($route_components);
	}
	else
	{
		$route_components = $route->getRouteComponents('Error404Controller@index');
		$route->loadClass($route_components);
		// dd('Error 404!');
	}
	
	require 'views/index.php';

	
?>