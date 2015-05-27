<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo get_document_title(); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

	<link rel="shortcut icon" href="<?php echo get_image('favicon.ico'); ?>" type="image/x-icon">
	<link rel="apple-touch-icon" href="<?php echo get_image('apple-touch-icon.png'); ?>">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_image('apple-touch-icon-57x57.png'); ?>">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_image('apple-touch-icon-72x72.png'); ?>">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_image('apple-touch-icon-76x76.png'); ?>">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_image('apple-touch-icon-114x114.png'); ?>">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_image('apple-touch-icon-120x120.png'); ?>">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_image('apple-touch-icon-144x144.png'); ?>">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_image('apple-touch-icon-152x152.png'); ?>">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<?php
		get_docs_css(false);
		// $path = get_page();
		// $path_array = explode('/', $path);
		// $parent = $path_array[count($path_array) - 2];
		// $page = end($path_array);

		// $module_path = implode('/', array($parent, $page));
		// // if(file_exists(filename))
		// if(file_exists(get_dist_dir() . '/css/' . $module_path . '.css')) {
		// 	debug('Exists');
		// }
		// debug(get_dist_dir() . '/css/' . $module_path . '/css');
	?>
	<style>
		body > .container {
			padding-top: 50px;
			padding-bottom: 50px;
		}
		.test-overflow {
			overflow: hidden;
		}
		.test-bg {
			width: 300px;
			height: 200px;
			background-image: url(<?php echo get_image('placeholder_800x400_1.jpg'); ?>);
			background-size: cover;
		}
	</style>
</head>
<body>
