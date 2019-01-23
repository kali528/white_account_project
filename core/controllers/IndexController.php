<?php 
	/**
	 * 
	 */
	namespace controllers;

	class IndexController extends \controllers\MainController
	{
		public function index()
		{
			
			// if (isset($_SESSION)) {
				// dd('asd');	
				// if (!empty($_SESSION['user_id'] && $_SESSION['person_id'])) {
					
					// $this->getIndexPage();
			parent::returnView('dashboard', 'views/dashboard/index.php');
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