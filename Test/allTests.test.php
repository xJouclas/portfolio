<?php

	function loadPage($controller)
	{
		require "controller/" . $controller . ".controller.php";
		var_dump($controller);
	}

	spl_autoload_register("loadPage");


	Class FrontPage
	{
		private $template;

		public function __construct()
		{
			$this->template = basename($_SERVER['PHP_SELF'], ".php");
			if($this->template != "index")
			{
				require "templates/www/" . $this->template . ".template.phtml";
			}
			else
			{
				require "templates/www/frontPage.template.phtml";
			}
		}
	}