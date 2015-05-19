<?php

if( ! function_exists( 'debug' ) ) {
	function debug( $n )
	{
		echo '<pre>';
		print_r( $n );
		echo '</pre><hr>';
	}
}

if( ! function_exists( 'dump' ) ) {
	function dump( $n )
	{
		echo '<pre>';
		var_dump( $n );
		echo '</pre>';
	}
}

if( ! function_exists( 'in_dev' ) ) {
	function in_dev()
	{
		$host = $_SERVER[ 'REMOTE_ADDR' ];
		if( $host === '127.0.0.1' || $host === '::1' )
			return true;
		return false;
	}
}

function get_root_directory()
{
	return $_SERVER['DOCUMENT_ROOT'] . '/';
}

function get_root_url($show_protocol = true)
{
	$protocol = '';
	if($show_protocol) {
		$protocol = strtolower( @reset( @explode( '/', $_SERVER['SERVER_PROTOCOL'] ) ) ) . ':';
	}
	return $protocol . '//' . $_SERVER['SERVER_NAME'];
}

function get_url( $page = null )
{
	$path = str_replace('//', '/', '/' . $page);
	return get_root_url() . $path;
}

function get_current_url()
{
	return get_root_url() . $_SERVER['REQUEST_URI'];
}

if( ! function_exists( 'cache_buster' ) ) {
	function cache_buster( $val = false )
	{
		if( ! $val ) {
			$val = time();
		}
		return '?_=' . $val;
	}
}

function get_resource_dir()
{
	return str_replace('//', '/', get_root_directory() . '/docs/');
}

function get_resource_url()
{
	return get_root_url() . '/docs/';
}

if( ! function_exists( 'get_resource' ) ) {
	function get_resource( $file )
	{
		$cache_time = false;
		$filepath = get_resource_dir() . $file;
		if( file_exists( $filepath ) ) {
			$cache_time = filemtime( $filepath );
		}
		$initial_url = get_resource_url() . $file . cache_buster( $cache_time );
		$url = str_replace( array('http:', 'https:'), '', $initial_url );
		return $url;
	}
}

if( ! function_exists( 'get_js_file' ) ) {
	function get_js_file( $src = null )
	{
		return get_resource('js/' . $src);
	}
}

if( ! function_exists( 'css_file_exists' ) ) {
	function css_file_exists( $src = null )
	{
		$filepath = get_resource_dir() . 'css/' . $file;
		return file_exists($filepath);
	}
}

if( ! function_exists( 'get_css_file' ) ) {
	function get_css_file( $src = null )
	{
		return get_resource('css/' . $src);
	}
}

if( ! function_exists( 'get_image' ) ) {
	function get_image( $src = null )
	{
		return get_resource('images/' . $src);
	}
}

if( ! function_exists( 'is_element_empty' ) ) {
	function is_element_empty( $element ) {
		$element = trim( $element );
		return empty( $element ) ? false : true;
	}
}

if( ! function_exists( 'link_is_broken' ) ) {
	function link_is_broken( $url )
	{
		$headers = @get_headers( $new_event_url, true );
		if( stripos( $headers, '200' ) === false )
			return true;
		return false;
	}
}

if( ! function_exists( 'is_cli' ) ) {
	function is_cli()
	{
		return !defined(IS_CLI);
	}
}

if( ! function_exists( 'delete_all_between' ) ) {
	function delete_all_between( $beginning, $end, $string )
	{
		$beginningPos = strpos( $string, $beginning );
		$endPos = strpos( $string, $end );
		if ( $beginningPos === false || $endPos === false ) {
			return $string;
		}

		$textToDelete = substr( $string, $beginningPos, ( $endPos + strlen( $end ) ) - $beginningPos );

		return str_replace( $textToDelete, '', $string );
	}
}
