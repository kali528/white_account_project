<?php 
	
/**
* 
*/
namespace Router;

use \Exception as Exception;

class Router
{
	public $routes = [];

	public static function load($file)
	{
		
		$router = new static;
		$asd = $router;
		require 'core/'.$file;
		
		return $router;
	}

	public function define($routes, $uri)
	{
		$this->routes = $routes;
	}

	public static function direct($uri, $routes, $request_type)
	{
		
		if(empty($_SESSION)) 
	    { 
	    	session_start();	       
	    }
	    //d($_SESSION);
    	if (array_key_exists($request_type.$uri, $routes)) 
	    {
	    	// dd('asd');
	    	return $routes[$request_type.$uri];
	    	
		}
		else
		{
			$uri = '/error';
			return $routes[$request_type.$uri];

		}
    
   
	}
}

?>