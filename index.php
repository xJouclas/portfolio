<?php
	require_once "path.php";

	//LIBRARY
	require_once "library/http.library.php";
	$http = new Http(); 
	$context = $http->context;
	$www = $context . "index.php";

//******************* TEMPLATE **********************
	include ROOT . "templates/header.template.phtml";
	
	if($http->basename == "index")
	{
		include ROOT . "templates/www/layout.template.phtml";
	}
	else
	{
		require_once "controller/" . $http->basename . ".controller.php";
		$currentPage = new $http->basename();
		$currentPage->getTemplate();
	}

	include ROOT . "templates/footer.template.phtml";