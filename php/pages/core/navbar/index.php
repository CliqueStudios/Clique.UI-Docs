
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Navbar</h1>
					<p class="article-lead" itemprop="about">Defines different styles for the navigation bar.</p>

					<?php

						// Sub Objects
						require_once __DIR__ . '/objects/usage.php';
						require_once __DIR__ . '/objects/navbar-flip.php';
						require_once __DIR__ . '/objects/navbar-subtitle.php';
						require_once __DIR__ . '/objects/navbar-content.php';
						require_once __DIR__ . '/objects/navbar-brand.php';
						require_once __DIR__ . '/objects/navbar-center.php';
						require_once __DIR__ . '/objects/navbar-toggle.php';

						// Modifiers
						require_once __DIR__ . '/modifiers/index.php';

						get_microdata('author');

					?>
				</article>
			</div>
		</div>
	</div>
</div>
