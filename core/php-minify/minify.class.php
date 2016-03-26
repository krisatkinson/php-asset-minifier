<?php

namespace PHP_Minify;

class Minify {

	public static function html( $string ) {
		return Minify\HTML::minify( $string );
	}

	public static function css( $string ) {
		return Minify\CSS::minify( $string );
	}

	public static function javascript( $string ) {
		return Minify\JavaScript::minify( $string );
	}

	public static function js( $string ) {
		return self::javascript( $string );
	}
}