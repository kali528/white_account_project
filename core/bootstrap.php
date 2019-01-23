<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'helpers/functions.php';
include_once 'http/Request.php';
include_once 'controllers/MainController.php';
include_once 'controllers/Error404Controller.php';
include_once 'controllers/IndexController.php';
include_once 'Route/Router.php';
include_once 'Route/Route.php';
?>