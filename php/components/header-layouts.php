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

	<?php get_docs_css(); ?>
</head>
<body>
	<div class="container container-center margin-top margin-large-bottom">
		<nav class="navbar margin-large-bottom">
			<a class="navbar-brand hidden-small" href="layouts_frontpage.html">Brand</a>
			<ul class="navbar-nav hidden-small">
				<?php
					$links = array(
						(object)array(
							'title' => 'Frontpage',
							'slug' => 'get-started/layouts/frontpage',
						),
						(object)array(
							'title' => 'Portfolio',
							'slug' => 'get-started/layouts/portfolio',
						),
						(object)array(
							'title' => 'Blog',
							'slug' => 'get-started/layouts/blog',
						),
						(object)array(
							'title' => 'Documentation',
							'slug' => 'get-started/layouts/documentation',
						),
						(object)array(
							'title' => 'Contact',
							'slug' => 'get-started/layouts/contact',
						),
						(object)array(
							'title' => 'Login',
							'slug' => 'get-started/layouts/login',
						),
					);
					foreach($links as $page) {

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
				?>
			</ul>
			<a href="#offcanvas" class="navbar-toggle visible-small" data-offcanvas></a>
			<div class="navbar-brand navbar-center visible-small">Brand</div>
		</nav>
