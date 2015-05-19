<?php

	// header('Content-type: application/json');
	$pages_directory = __DIR__;
	$local_url = 'http://' . LOCALURL;
	$files = get_files_list($pages_directory);
	foreach($files as $file) {
		if($file->type == 'dir' || stripos($file->name, 'tests') !== false || stripos($file->name, 'layouts') !== false) {
			continue;
		}
		$path = str_replace($pages_directory, '', $file->name);
		$path = str_replace('.php', '', $path);
		$is_index = false;
		if(basename($path) == 'index') {
			$is_index = true;
			$path_array = explode('/', $path);
			array_pop($path_array);
			$path = implode('/', $path_array);
			$path .= '/';
		}
		$url = $local_url . $path;
		echo $url . "\n";
	}
