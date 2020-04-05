<?php

	Class Cv
	{
		private $name = "cv";

		public function getTemplate()
		{
			include ROOT . "templates/www/cv.template.phtml";
		}
	}