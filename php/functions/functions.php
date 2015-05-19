<?php

require_once 'defs.php';
require_once 'utils.php';
require_once 'output.php';
require_once 'sitemap.php';

function load_php_file($filename)
{
	$filename = str_replace( '.php', '', $filename );
	if( file_exists( get_root_directory() . 'php/' . $filename . '.php' ) ) {
		require_once get_root_directory() . 'php/' . $filename . '.php';
	}
}

function load_page_component( $filename )
{
	if( component_exists($filename) ) {
		include get_root_directory() . 'php/components/' . $filename . '.php';
	}
}

function component_exists($filename)
{
	$filename = str_replace( '.php', '', $filename );
	return file_exists(get_root_directory() . 'php/components/' . $filename . '.php');
}

function get_component($filename)
{
	load_page_component($filename);
}

function load_widget( $filename )
{
	$filename = str_replace( '.php', '', $filename );
	if( file_exists( get_root_directory() . 'php/widgets/' . $filename . '.php' ) ) {
		include get_root_directory() . 'php/widgets/' . $filename . '.php';
	}
}

function get_microdata($filename)
{
	load_page_component('microdata/' . $filename);
}

function get_widget( $filename )
{
	load_widget( $filename );
}

function load_page( $filename )
{
	$filename = str_replace( '.php', '', $filename );
	$path = get_root_directory() . 'php/pages/' . $filename . '.php';
	if(file_exists($path)) {
		require_once $path;
	}
}

function get_component_path($component = '')
{
	$template_array = explode('-', $component);
	$i = 0;
	$c = count($template_array);
	while($i < $c) {
		$temp = array_slice($template_array, 0, ($c - $i));
		$path = implode('-', $temp);
		if(component_exists($path)) {
			return $path;
		}
		$i++;
	}
	return $component;
}

function get_header($page = '')
{
	$template = 'header';
	if($page) {
		$template .= '-' . $page;
	}
	load_page_component(get_component_path($template));
}

function get_footer($page = '')
{
	$template = 'footer';
	if($page) {
		$template .= '-' . $page;
	}
	load_page_component(get_component_path($template));
}

function get_sidebar($page = '')
{
	$template = 'sidebar';
	if($page) {
		$template .= '-' . $page;
	}
	load_page_component(get_component_path($template));
}

function get_project_dir()
{
	return dirname( dirname( dirname( dirname( __FILE__ ) ) ) );
}

function get_dev_dir()
{
	return get_project_dir() . '/dev';
}

function get_build_dir()
{
	return get_project_dir() . '/build';
}

function get_dist_dir()
{
	return get_project_dir() . '/dist';
}

function get_webserver_dir()
{
	return get_project_dir() . '/dist/web';
}

function get_fileserver_dir()
{
	return get_project_dir() . '/dist/local';
}

function is_active_page( $link = null )
{
	return (get_url($link) === get_current_url()) && ! is_error_page();
}

function check_active_link( $link = null )
{
	if( get_url( $link ) === get_current_url() ) {
		echo 'class="active"';
	}
}

function is_404()
{
	// $filename = str_replace( '.php', '', $filename );
	// $path = get_root_directory() . 'php/pages/' . $filename . '.php';
	// if(file_exists($path)) {
	// 	require_once $path;
	// }
	return $GLOBALS['is_404'];
}

function get_page()
{
	return trim($_SERVER['REQUEST_URI'], '/');
}

function is_page( $page = null )
{
	return get_page() == trim($page, '/');
}

function has_parent()
{
	$uri = trim($_SERVER['REQUEST_URI'], '/');
	$uri_array = explode('/', $uri);
	return count($uri_array) > 1;
}

function is_parent()
{
	if(get_page_name() == 'Admitted Students') {
		return false;
	}
	$uri = trim($_SERVER['REQUEST_URI'], '/');
	$uri_array = explode('/', $uri);
	return reset($uri_array) != '';
}

function get_parent_page()
{
	$uri = trim($_SERVER['REQUEST_URI'], '/');
	$uri_array = explode('/', $uri);
	return reset($uri_array);
}

function is_active_menu_item($page = '')
{
	if(is_error_page()) {
		return false;
	}
	return get_parent_page() == trim($page, '/');
}

function is_error_page()
{
	if(in_array(get_page_name(), array('404', '403'))) {
		return true;
	}
	return false;
}

function is_homepage()
{
	if( is_page( '' ) )
		return true;
	return false;
}

function get_page_hierarchy()
{
	global $PAGE_NAME_REPLACE;

	$uri = trim($_SERVER['REQUEST_URI'], '/');
	$uri_array = explode('/', $uri);
	$output = array();
	$url = get_root_url() . '/';
	foreach($uri_array as $uri) {
		$title = ucwords(str_replace('-', ' ', $uri));
		if(in_array($title, array_keys($PAGE_NAME_REPLACE))) {
			$title = $PAGE_NAME_REPLACE[$title];
		}
		$url .= $uri . '/';
		$output[] = (object)array(
			'title' => ucwords(str_replace('-', ' ', $title)),
			'url' => $url
		);
	}
	return $output;
}

function get_body_class()
{
	$uri = trim($_SERVER['REQUEST_URI'], '/');
	$uri_array = explode('/', $uri);
	$clean_uri_array = array();
	foreach($uri_array as $val) {
		if(!empty($val)) {
			$clean_uri_array[] = $val;
		}
	}
	$classes = array('page');
	if(count($uri_array) > 1) {
		$classes[] = 'parent-' . reset($clean_uri_array);
	}
	$last = end($clean_uri_array);
	if(empty($last)) {
		$classes[] = 'page-home';
	} else {
		$classes[] = 'page-' . end($clean_uri_array);
	}
	return implode( ' ', $classes );
}

function get_page_name( $page = null )
{
	if( is_null( $page ) ) {
		$uri_array = explode( '/', $_SERVER['REQUEST_URI'] );
		$clean_uri_array = array();
		foreach($uri_array as $val) {
			if(!empty($val)) {
				$clean_uri_array[] = $val;
			}
		}
		$uri = end( $clean_uri_array );
	} else {
		$uri = str_replace( '.php', '', $page );
	}
	$page = ucwords( str_replace( array( '/', '-' ), array( '', ' ' ), $uri ) );
	return clean_page_name($page);
}

function clean_page_name($pagename)
{
	$pagename = ucwords( str_replace( array( '/', '-' ), array( '', ' ' ), $pagename ) );
	$pagename = ucwords($pagename);
	$pagename = str_replace('Api', 'API Reference', $pagename);
	$pagename = str_replace('Grid Js', 'Grid.js', $pagename);
	$pagename = str_replace('Pagination Js', 'Pagination.js', $pagename);
	return $pagename;
}

function get_parent_page_name( $page = null )
{
	if( is_null( $page ) ) {
		$uri_array = explode( '/', $_SERVER['REQUEST_URI'] );
		$clean_uri_array = array();
		foreach($uri_array as $val) {
			if(!empty($val)) {
				$clean_uri_array[] = $val;
			}
		}
		$uri = reset( $clean_uri_array );
	} else {
		$uri = str_replace( '.php', '', $page );
	}
	$page = ucwords( str_replace( array( '/', '-' ), array( '', ' ' ), $uri ) );
	return clean_page_name($page);
}

function get_page_slug( $append = null )
{
	$append = trim( $append );
	$uri = $_SERVER['REQUEST_URI'];
	$slug = ltrim( $uri, '/' );
	$slug = str_replace( '/', '-', $slug );
	return strtolower( $slug ) . '-' . $append;
}

function get_document_title()
{
	if( is_homepage() ) {
		return SITENAME;
	}
	$uri_array = explode( '/', $_SERVER['REQUEST_URI'] );
	$clean_uri_array = array();
	foreach($uri_array as $val) {
		if(!empty($val)) {
			$clean_uri_array[] = clean_page_name($val);
		}
	}
	$clean_uri_array = array_reverse($clean_uri_array);
	$clean_uri_array[] = SITENAME;
	$title = implode(' &raquo; ', $clean_uri_array);
	return $title;
}

function get_page_title()
{
	debug($_SERVER);
}

function print_localized_variables()
{
	$vars = array();
	if( is_page( 'plans' ) ) {
		$vars = array(
			'vision_form_action' => get_url( 'application' )
		);
	}
	if( empty( $vars ) )
		return;
	$json_vars = json_encode( $vars );
	echo '<script>var localized = ' . $json_vars . '</script>' . "\n";
}

function get_files_list($dir, $recurse = true)
{
	$retval = array();

	// add trailing slash if missing
	if(substr($dir, -1) != "/") $dir .= "/";

	// open pointer to directory and read list of files
	$d = @dir($dir) or die("get_files_list: Failed opening directory $dir for reading");
	while(false !== ($entry = $d->read())) {
		// skip hidden files
		if($entry[0] == "." || $entry[0] == "_") {
			continue;
		}
		$file = "$dir$entry";
		if(is_dir($file)) {
			$retval[] = (object)array(
				"name" => $file,
				"type" => filetype($file),
				"extension" => end(@explode('.', $entry))
			);
			if($recurse && is_readable("$file/")) {
				$retval = array_merge($retval, get_files_list("$file/", true));
			}
		} elseif(is_readable($file)) {
			$retval[] = (object)array(
				"name" => $file,
				"type" => filetype($file),
				"extension" => end(@explode('.', $entry))
			);
		}
	}
	$d->close();
	return $retval;
}

function is_styleguide_page()
{
	return strtolower(get_parent_page_name()) == 'styleguide';
}

function get_search_field($options)
{
	$type = $options['field_type'];
	$select_options = $options['options'];
	$multiselect = $options['multiselect'];
	switch($type) {
		case 'time' :
			$output = '<div class="time-input-group"><input type="text" class="inline" value="11:00" data-clique-timepicker><span class="meridian">AM</span></div>';
			break;
		case 'date' :
			$output = '<input type="text" placeholder="MM/DD/YYYY" data-datepicker="{format:\'MM/DD/YYYY\'}" readonly="readonly">' . "\n";
			break;
		case 'select' :
			$attrs = array();
			if($multiselect) {
				$attrs['multiple'] = 'multiple';
				$attrs['data-placeholder'] = ' ';
			}
			$attributes = '';
			foreach($attrs as $key => $val) {
				$attributes .= ' ' . $key . '="' . $val . '"';
			}
			$el = 'select' . $attributes;
			$output = '<' . $el . '>' . "\n";

			foreach($select_options as $value => $text) {
				$output .= '<option value="' . $value . '">' . $text . '</option>' . "\n";
			}
			$output .= '</select>' . "\n";
			break;
		default :
			$output = '<input type="' . $type . '">' . "\n";
			break;
	}
	return $output;
}

function get_search_row($args = array(), $echo = true)
{
	$defaults = array(
		'title' => '',
		'extra_margin' => true,
		'fields' => 2,
		'blue' => false,
		'field_type' => 'text', // text, date, select
		'multiselect' => false,
		'additional_classes' => array(),
		'options' => array(
			'option-1' => 'Option 1',
			'option-2' => 'Option 2',
			'option-3' => 'Option 3',
			'option-4' => 'Option 4',
			'option-5' => 'Option 5'
		)
	);
	$options = array_merge($defaults, $args);

	$type = !$options['multiselect'] ? 'row-search-' . $options['field_type'] : 'row-search-multiselect';
	$class = 'row row-search ' . $type;
	if(!$options['multiselect']) {
		$class .= ' aligned-middle';
	}
	if($options['extra_margin']) {
		$class .= ' row-margin-bottom';
	}
	if(is_string($options['additional_classes'])) {
		$options['additional_classes'] = array($options['additional_classes']);
	}
	if(count($options['additional_classes'])) {
		$class .= ' ' . implode(' ', $options['additional_classes']);
	}
	$output = '<div class="' . $class . '">' . "\n";

		// Title
		$class = 'col search-col';
		if($options['blue']) {
			$class .= ' blue-header';
			$options['title'] = '<span>' . $options['title'] . '</span>';
		} else {
			$class .= ' text-right';
		}
		$output .= '<div class="' . $class . '">' . $options['title'] . '</div>' . "\n";

		// Inputs
		$output .= '<div class="col search-col">' . "\n";
			$output .= '<div class="row aligned-middle row-collapse row-no-wrap">' . "\n";

			$i = 0;
			while($i < $options['fields']) {
				$class = 'col';
				if($i == 0) {
					$class .= ' first-col';
				}

				$output .= '<div class="' . $class . '">' . "\n";
					$output .= get_search_field($options) . "\n";
				$output .= '</div>' . "\n";

				$i++;
			}

			$output .= '</div>' . "\n";
		$output .= '</div>' . "\n";
	$output .= '</div>' . "\n";
	if($echo) {
		echo $output;
	} else {
		return $output;
	}
}

function get_checkbox_row($args = array(), $echo = true)
{
	$defaults = array(
		'title' => '',
		'extra_margin' => true,
		'fields' => 1
	);
	$options = array_merge($defaults, $args);

	if(is_string($options['title'])) {
		$options['title'] = array($options['title']);
	}

	$class = 'row row-search aligned-middle row-margin-top';
	if($options['extra_margin']) {
		$class .= ' row-margin-bottom';
	}
	$output = '<div class="' . $class . '">' . "\n";

		// Title
		$output .= '<div class="col search-col text-right"></div>' . "\n";

		// Input
		$output .= '<div class="col search-col">' . "\n";
			$output .= '<div class="row aligned-middle row-collapse row-no-wrap">' . "\n";

				$i = 0;
				while($i < $options['fields']) {
					$output .= '<input type="checkbox">' . $options['title'][$i] . "\n";

					$i++;
				}

			$output .= '</div>' . "\n";
		$output .= '</div>' . "\n";
	$output .= '</div>' . "\n";
	if($echo) {
		echo $output;
	} else {
		return $output;
	}
}

function get_all_any_none()
{
	// All
	get_search_row(
		array(
			'title' => 'All of these',
			'blue' => true,
			'fields' => 1,
			'field_type' => 'select',
			'multiselect' => true
		)
	);

	// Any
	get_search_row(
		array(
			'title' => 'Any of these',
			'blue' => true,
			'fields' => 1,
			'field_type' => 'select',
			'multiselect' => true
		)
	);

	// None
	get_search_row(
		array(
			'title' => 'None of these',
			'blue' => true,
			'fields' => 1,
			'field_type' => 'select',
			'multiselect' => true
		)
	);
}

function print_sidebar_links($links)
{
	foreach($links as $header => $pages) {

		// Print the header
		echo '<li class="nav-header">' . $header . '</li>' . "\n";

		// Print sub-pages
		foreach($pages as $page) {

			// Get `li` element
			$li_class = '';
			if(is_active_page($page->slug)) {
				$li_class .= ' active';
			}

			$li_class = trim($li_class);
			if($li_class) {
				$output = '<li class="' . $li_class . '">';
			} else {
				$output = '<li>';
			}

			// Get `a` element
			$output .= '<a href="' . get_url($page->slug) . '">' . $page->title . '</a>';

			$output .= '</li>' . "\n";

			// Print the output
			echo $output;
		}
	}
}

function get_markup($num)
{
	$trace = debug_backtrace();
	$caller = $trace[0]['file'];
	$path = pathinfo($caller);
	$section = @end(explode('/', $path['dirname']));
	$filename = 'markup/' . $section . '/' . $path['filename'] . '/' . $num;
	load_php_file($filename);
}
