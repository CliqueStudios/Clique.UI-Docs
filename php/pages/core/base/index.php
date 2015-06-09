
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Base</h1>
					<p class="article-lead" itemprop="about">The foundation of all HTML elements for <?php echo SITENAME; ?></p>
					<p>The <em>Base</em> componenet of <?php echo SITENAME; ?> is the foundation for all HTML elements, componenets, and structural layout models. It sets the default font styles, box-model properties, and colors for all elements that could be found on a webpage.</p>
					<p><?php echo SITENAME; ?> is build on top of, and reset by, <a href="http://necolas.github.com/normalize.css" target="_blank">Normalize.css</a>, but unlike most front-end frameworks which simply include the Normalize.css file, we've chopped it up and have included the reset properties in each of it's own components. This was done to maintain performance standards and keep the framework as slim as possible.</p>
					<?php
						require_once __DIR__ . '/objects/headings.php';
						require_once __DIR__ . '/objects/paragraph.php';
						require_once __DIR__ . '/objects/semantics.php';
						require_once __DIR__ . '/objects/blockquotes.php';
						require_once __DIR__ . '/objects/code.php';
						require_once __DIR__ . '/objects/lists.php';
						require_once __DIR__ . '/objects/description-lists.php';

						get_microdata('author');
					?>
				</article>
			</div>
		</div>
	</div>
</div>
