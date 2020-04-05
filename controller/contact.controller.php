<?php

	Class Contact
	{
		private $name = "contact";

		public function getTemplate()
		{
			include ROOT . "templates/www/contact.template.phtml";
		}
	}