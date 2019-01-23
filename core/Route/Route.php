<?php 
/*
This class extends class Request and take care to check - is request method is acceptable from functions below.

function get() - verify session existing. Extract Controller name and action and load the controller class. If sesion 
is undefined or empty redirect user to login page.
*/
namespace Router;


use \Request\Request as Request;
class Route extends \Router\Router
{
	public $routes;
	function __construct()
	{
		
		if(empty($this->routes)){
				
			$this->routes = \Router\Router::load('routes.php')->routes;
		
			return;
		}
	}

	public static function get($uri, $controllerAction)
	{
		
		$func_method = 'GET';
		$method = Request::method();
		$route = new Route;
		$existing_route = parent::direct($uri,$route->routes, $method);
		$path = parse_url($uri);

		sd($func_method);
		// d($method);
		// d($route);
		// d($existing_route);
		// dd($path);

		self::checkRoute($func_method,$method,$controllerAction,$existing_route);
		$route_components = self::getRouteComponents($existing_route);

		${"action"} = $route_components["componets"]['existing_route'][1];
		
		// dd($route_components["componets"]['existing_route'][1]);
		require $route_components["componets"]['controller_path'];
		// dd($route_components["componets"]['controller_path']);
		return self::loadClass($route_components);
			
		
	}




	public static function post($uri, $controllerAction)
	{
		$func_method = 'POST';
		$method = Request::method();
		$route = new Route;
		// dd($route);
		$existing_route = parent::direct($uri,$route->routes, $method);
		$path = parse_url($uri);
		
		self::checkRoute($func_method,$method,$controllerAction,$existing_route);
		$route_components = self::getRouteComponents($existing_route);

		require $route_components["componets"]['controller_path'];
		
		self::loadClass($route_components);
	}
	
	public static function checkRoute($func_method,$method,$controllerAction,$existing_route)
	{
		if($method != $func_method || $controllerAction != $existing_route){
			// d($method);
			// d($func_method);
			// d($controllerAction);
			// dd($existing_route);
			throw new \Exception('There is no Route! Or Request\'s method is different from requested! - '.$method);
			header("Location: core/error404");
			die;
		}
	}

	public static function getRouteComponents($existing_route)
	{
		$existing_route = explode('@',  $existing_route);
		$modul_name = substr($existing_route[0], 0,-(strlen('Controller')));
		$modul_path = '';
	
		if (!empty($_SESSION['moduls'])) 
		{
			foreach ($_SESSION['moduls'] as $modules=>$key) 
			{
				foreach ($key as $module_names => $value) {

					if ($modul_name == $module_names) 
					{
						$modul_path = 'Moduls/'.$modules;
						break;
					}
				}
			}
		}

		$route_components['componets'] = array(
			'existing_route' => $existing_route,
			'controller' => 'controllers\\' . $existing_route[0],
			'controller_path' => ($modul_path == '' ? 'core_app' : $modul_path).'/controllers/'.$existing_route[0].'.php',
		);
		
		return $route_components;


	}

	public static function loadClass($route_components)
		{
			// d($route_components);
			${"action"} = $route_components["componets"]['existing_route'][1];
			$controller = $route_components["componets"]['controller'];
		
			if(class_exists($route_components["componets"]['controller']))
			{
				$usedController = new $route_components["componets"]['controller'];
				
				if ($route_components["componets"]['existing_route'][1] != '' || $route_components["componets"]['existing_route'][1] != 'store' ) {
					$id = Request::id();
					// var_dump($usedController->${"action"}($id));
					return $usedController->${"action"}($id);
				}
					// dd($usedController->${"action"}());
				return $usedController->${"action"}();
			}
			throw new \Exception('Requested class does not exist!');

			die('GET not pass go to login');
		}

		public static function getDefaultRoutes()
		{
			$routes = array(
				'GET/' => 'IndexController@index',
				'GET/login' => 'LoginController@index',
				'POST/login/verify' => 'LoginController@login',
				'GET/logout' => 'LogoutController@logout',
				'GET/error' => 'IndexController@error',
			);

			return $routes;
		}


		public static function getCoreRoutes()
		{
			$routes = array(
				'GET/' => 'IndexController@index',
				'GET/error' => 'LoginController@error',
				'GET/error' => 'IndexController@error',
				
			);

			return $routes;
		}

		public static function getAllRoutes()
		{
			$routes = \App::get('database')->getAllRoutes('routes');
			
			for ($i=0; $i < count($routes); $i++) { 

				$routes_list[$i] = $routes[$i]->uri .'=>'. $routes[$i]->controller_name;
			}
			$routes = implode(',', $routes_list);
			$routes = editRoutes($routes);
			// dd($routes);

			return $routes;
		}
}

?>