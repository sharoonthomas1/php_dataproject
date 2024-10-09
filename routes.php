<?php

$routes = [
	'/' => '',
	 '/form.php' => '/form.php',
	 '/fileupload.php' => '/fileupload.php',
	 '/Table' => '/Table.php',
];

function x($url, $routes) {
	if(key_exists($url, $routes)) {
		require_once $routes[$url];
	} else {
		require_once '404.html';
	}
}

x($_SERVER['REQUEST_URI'], $routes);
