<?php
echo $_GET['url'];

spl_autoload_register(function ( $classname ) {

	require_once './classes/' . $classname . '.php';
});

new Route();

include_once 'Routes.php';
