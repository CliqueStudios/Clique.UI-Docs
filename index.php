<?php

require_once __DIR__ . '/php/functions/functions.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');
$uri_array = explode('/', $uri);
$clean_uri_array = array();
foreach($uri_array as $value) {
	if(!empty($value)) {
		$clean_uri_array[] = $value;
	}
}

if(count($clean_uri_array) == 1 && reset($clean_uri_array)[0] == '_') {
	$path = get_root_directory() . 'php/pages/' . implode('/', $clean_uri_array) . '.php';
	require_once $path;
	exit;
}

$request_path = $path = get_root_directory() . 'php/pages/' . implode('/', $clean_uri_array);
if(file_exists($path) && is_dir($path)) {
	$path .= '/index.php';
} elseif(file_exists($path . '.php')) {
	$path .= '.php';
} else {
	$path = get_root_directory() . 'php/pages/404.php';
}

$is_404 = !file_exists($request_path);

$tpl = '';
if(isset($clean_uri_array[1])) {
	$tpl = $clean_uri_array[1];
	if(!isset($clean_uri_array[2])) {
		$tpl .= '-index';
	}
}
if(isset($clean_uri_array[2])) {
	$tpl .= '-' . $clean_uri_array[2];
}
if(isset($clean_uri_array[0]) && $clean_uri_array[0] == 'tests') {
	$tpl = 'tests';
} elseif(stripos($tpl, 'tests') !== false) {
	$tpl = '';
}

if(!is_page('sitemap')) {
	get_header($tpl);
}

require_once $path;

if(!is_page('sitemap')) {
	get_footer($tpl);
}
