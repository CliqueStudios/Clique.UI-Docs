
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Tab</h1>
					<p class="article-lead" itemprop="about">Create a tabbed navigation with different styles.</p>

					<?php

						require_once __DIR__ . '/objects/usage.php';
						require_once __DIR__ . '/objects/horizontal-mod.php';
						require_once __DIR__ . '/objects/center-mod.php';
						require_once __DIR__ . '/objects/vertical-mod.php';
						require_once __DIR__ . '/objects/dropdown.php';
						require_once __DIR__ . '/js/index.php';
						get_microdata('author');

					?>
				</article>
			</div>
		</div>
	</div>
</div>
