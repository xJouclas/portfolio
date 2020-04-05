<?php

	Class Http
	{
		public $server;
		public $basename;
		public $request;
		public $currentUrl;
		private $requestMethod;

		public function __construct()
		{
			$this->server = $_SERVER["HTTP_HOST"];
			$this->request = $_SERVER["REQUEST_URI"];
			$this->basename = basename($_SERVER['PHP_SELF'], ".php");
			$this->currentUrl = $this->server . $this->request;
		}
	}