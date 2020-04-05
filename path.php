<?php

	define("ROOT", $_SERVER['CONTEXT_DOCUMENT_ROOT'] . "/Portfolio/");
	define("URL_ROOT", $_SERVER['HTTP_HOST']);

	$server = $_SERVER['REQUEST_URI'];
	$url = URL_ROOT . $server;
	