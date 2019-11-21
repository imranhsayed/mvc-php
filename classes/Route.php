<?php

class Route {

	public static $valid_routes = [];

	public static function set( $route, $function ) {

		self::$valid_routes[] = $route;

		if ( $route === $_GET['url'] ) {
			$function->__invoke();
		}

	}
}
