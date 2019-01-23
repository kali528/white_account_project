
<?php include_once "views/partials/header.php"; ?>

<?php
	if (!isset($page)) {
		require_once "views/partials/nav.php";
	}

	else if ($page_name == 'login' || $page_name == 'error404') 
	{
		require $page;
	}
	else
	{
		require "views/partials/nav.php";
		require_once $page;
	}
	 
	
?>
<?php include_once "views/partials/footer.php"; ?>