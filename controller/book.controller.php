<?php

	Class Book
	{
		private $name = "book";

		public function getTemplate()
		{
			include ROOT . "templates/www/" . $this->name . ".template.phtml";
		}
	}