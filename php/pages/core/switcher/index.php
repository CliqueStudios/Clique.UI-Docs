
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>

			<?php get_sidebar('core'); ?>

			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Switcher</h1>
					<p class="article-lead" itemprop="about">Dynamically transition through different content panes.</p>

					<?php

						require_once __DIR__ . '/objects/usage.php';
						require_once __DIR__ . '/objects/content.php';
						require_once __DIR__ . '/objects/multiple.php';
						require_once __DIR__ . '/objects/animations.php';
						require_once __DIR__ . '/objects/subnav.php';
						require_once __DIR__ . '/objects/tabs.php';
						require_once __DIR__ . '/objects/vertical-tabs.php';
						require_once __DIR__ . '/objects/buttons.php';
						require_once __DIR__ . '/objects/nav.php';
						require_once __DIR__ . '/js/index.php';
						get_microdata('author');

					?>
				</article>
			</div>
		</div>
	</div>
</div>
