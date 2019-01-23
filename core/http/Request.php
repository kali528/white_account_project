<?php 

/**
* 
*/
namespace Request;

/**
* 
*/
class Request
{
	
	public static function uri()
	{		
		
		$uri = substr($_SERVER['REQUEST_URI'], strlen('/core'));
		// d($uri);
		return $uri;

	}
	public static function method()
	{
			return ($_SERVER["REQUEST_METHOD"]);
		
	}
	public static function request()
	{	

		switch($_SERVER['REQUEST_METHOD'])
		{
		case 'GET': 
			$request = $_GET;
		break;

		case 'POST': 
			$request = $_POST;
		break;

		default:
		break;
		}
		// var_dump($request);
		// dd(1);
		return $request;
	}

	public static function id()
	{	
		$uri = parse_url($_SERVER['REQUEST_URI']);
		// d($uri);
		if(array_key_exists('query', $uri)){
			$id = str_replace('id=', '', $uri['query']);
			// dd($id);
		}else
		{
			$id='';
		}

		return $id;
	}
}

?>