<?php

class Route {

	public static $valid_routes = [];

	public static function set( $route, $function ) {

		self::$valid_routes = $route;

		echo 'yesy';
		print_r( self::$valid_routes );

	}
}
