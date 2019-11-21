<?php

class Route {

	public static $valid_routes = [];

	public static function set( $route, $function ) {

		self::$valid_routes[] = $route;

		print_r( self::$valid_routes );

	}
}
