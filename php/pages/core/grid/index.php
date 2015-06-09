
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Grid</h1>
					<p class="article-lead" itemprop="about">Create a fully responsive, fluid and nestable grid layout.</p>
					<p>The grid system of <?php echo SITENAME; ?> follows the mobile-first development approach and uses units with semantic, predefined classes inside each grid component which define the width of it's columns.</p>
					<p>The grid component incorporates <a href="<?php echo get_url('core/flexbox'); ?>">flexbox</a> technology, giving you greater control of grid layout and alignment in modern browsers with a CSS-only ready fallback for browsers that don't support flexbox.</p>

					<?php

						require_once __DIR__ . '/objects/usage.php';
						require_once __DIR__ . '/objects/columns.php';
						require_once __DIR__ . '/objects/push.php';
						require_once __DIR__ . '/objects/pull.php';

						require_once __DIR__ . '/objects/row-cols.php';

						require_once __DIR__ . '/modifiers/index.php';

						require_once __DIR__ . '/objects/responsive.php';
						get_microdata('author');

					?>
				</article>
			</div>
		</div>
	</div>
</div>
