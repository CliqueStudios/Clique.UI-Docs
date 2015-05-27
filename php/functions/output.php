<?php

function get_footer_links($links)
{
	foreach($links as $header => $pages) {

		// Print the header
		echo '<li class="parent">' . "\n";
		echo '<a href="#">' . $header . '</a>' . "\n";
		echo '<ul class="nav-sub">' . "\n";

		// Print sub-pages
		foreach($pages as $page) {

			// Get `a` element
			$output = '<li><a href="' . get_url($page->slug) . '">' . $page->title . '</a></li>' . "\n";

			// Print the output
			echo $output;
		}

		echo '</ul>' . "\n";
		echo '</li>' . "\n";
	}
}

function get_docs_css($is_docs = true)
{
	echo '<link rel="stylesheet" href="' . get_css_file('clique.css') . '">' . "\n";
	if($is_docs) {
		echo '<link rel="stylesheet" href="' . get_css_file('docs.css') . '">' . "\n";
		echo '<link rel="stylesheet" href="' . get_css_file('highlight.css') . '">' . "\n";
	}
	echo "\n";
}

function get_docs_js($is_docs = true)
{
	$files = array(
		'jquery.js',
		'clique.js',
	);
	if($is_docs) {
		$files = array_merge($files, array(
			'highlight.pack.js',
			'stellar.js',
			'docs.js'
		));
	} else {
		$files[] = 'tests.js';
	}
	foreach($files as $file) {
		echo '<script src="' . get_js_file($file) . '"></script>' . "\n";
	}
}

function replace_content_inside_delimiters($start, $end, $new, $source)
{
	return preg_replace('#('.preg_quote($start).')(.*?)('.preg_quote($end).')#si', '$1'.$new.'$3', $source);
}

function create_markup($markup, $args)
{
	// Remove certain attributes
	$attributes = array(
		'for', 'name', 'placeholder', 'id', 'value', 'alt', 'height', 'width'
	);
	foreach($attributes as $attribute) {
		$attr = array(
			$attribute . '="',
			'"'
		);
		$markup = preg_replace('#(' . $attr[0] . ').*?(' . $attr[1] . ')#', '$1$2', $markup);
		$markup = str_replace(' ' . $attribute . '=""', '', $markup);
	}

	// Replace text between
	$find = array(
		// Tags
		array('<span class="form-help-inline">', '</span>'),
		array('<p class="form-help-block">', '</p>'),
		array('<label class="form-label">', '</label>'),
		array('<span class="form-label">', '</span>'),
		array('<option>', '</option>'),
		array('<button class="button">', '</button>'),
		array('<legend>', '</legend>'),
		array('<div class="thumbnail-caption">', '</div>'),
		array('<figcaption class="thumbnail-caption">', '</figcaption>'),

		// Attributes
		array('src="', '"', ''),
	);
	foreach($find as $tag) {
		$tag[2] = isset($tag[2]) ? $tag[2] : '...';
		$markup = preg_replace('#(' . $tag[0] . ').*?(' . $tag[1] . ')#', '$1' . $tag[2] . '$2', $markup);
	}

	$find = array('<', '>', "\t");
	$replace = array('&lt;', '&gt;', '    ');

	$markup = str_replace($find, $replace, $markup);


	// Remove unneeded tags
	if(isset($args['remove'])) {
		if(!is_array($args['remove'])) {
			$args['remove'] = array($args['remove']);
		}
		foreach($args['remove'] as $tag) {
			$find[] = '&lt;' . $tag . '&gt;';
			$find[] = '&lt;' . $tag . '/&gt;';
			$find[] = '&lt;' . $tag . ' /&gt;';
			$find[] = '&lt;/' . $tag . '&gt;';
			$replace[] = '';
			$replace[] = '';
			$replace[] = '';
			$replace[] = '';
			$markup = str_replace($find, $replace, $markup);
		}
	}


	return $markup;
}

function print_example($example, $args = array(), $markup = false)
{
	// Set the defaults, in case the second arg wasn't passed
	if(is_array($markup)) {
		$args = $markup;
		$markup = false;
	}

	$defaults = array(
		'remove' => array('br'),
	);
	$args = array_merge($defaults, $args);

	$uid = uniqid();
	if(!$markup) {
		$markup = create_markup($example, $args);
	}
	?>
	<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
		<div class="col">
			<h3>Usage</h3>
		</div>
		<div class="col">
			<ul class="tab" data-tab="{connect:'#<?php echo 'tab-' . $uid; ?>'}">
				<li><a href="#">Example</a></li>
				<li><a href="#">Markup</a></li>
			</ul>
		</div>
	</div>
	<ul id="<?php echo 'tab-' . $uid; ?>" class="switcher margin">
		<li>
			<?php
				echo $example;
			?>
		</li>
		<li>
			<div class="overflow-container" itemscope itemtype="http://schema.org/Code">
				<meta itemprop="programmingLanguage" content="HTML">
				<meta itemprop="programmingLanguage" content="CSS">
				<meta itemprop="programmingLanguage" content="JavaScript">
				<meta itemprop="codeRepository" content="<?php echo REPOSITORY_LINK; ?>">
				<meta itemprop="sampleType" content="code snippet">
				<pre><code><?php echo $markup; ?></code></pre>
			</div>
		</li>
	</ul>
	<?php
}

function print_sidebyside_example($title, $text, $args = array(), $markup = false)
{
	$defaults = array(
		'remove' => array('br'),
	);
	$args = array_merge($defaults, $args);

	$uid = uniqid();

	if(!$markup) {
		$markup = create_markup($text, $args);
	}
	?>
	<div class="row row-2-cols margin">
		<div class="col">
			<h3 class="docs-article-subtitle">Example - <?php echo $title ;?></h3>
			<?php echo $text; ?>
		</div>
		<div class="col">
			<h3 class="docs-article-subtitle">Markup</h3>
			<pre><code><?php echo $markup; ?></code></pre>
		</div>
	</div>
	<?php
}
