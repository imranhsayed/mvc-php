<?php

echo 'URL: ' . $_GET['url'];

spl_autoload_register(function ( $classname ) {

	if ( file_exists( './classes/' . $classname . '.php' ) ) {
		require_once './classes/' . $classname . '.php';
	}

	if ( file_exists( './controllers/' . $classname . '.php' ) ) {
		require_once './controllers/' . $classname . '.php';
	}
});

new Route();

include_once 'Routes.php';
