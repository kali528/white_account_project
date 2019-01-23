<?php 
	/**
	 * 
	 */
	namespace controllers;

	class Error404Controller extends \controllers\MainController
	{
		public function index()
		{
			// if (isset($_SESSION)) {
				// dd('asd');	
				// if (!empty($_SESSION['user_id'] && $_SESSION['person_id'])) {
					
					parent::returnView('404', 'views/errors/error404.php');
					// require 'views/index.php';

				// }
				// else
				// {
				// 	header("Location: /views/login");
				// 	exit;
				// }
			// }
		}
	}
?>