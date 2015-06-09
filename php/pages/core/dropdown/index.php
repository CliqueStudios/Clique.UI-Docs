
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Dropdown</h1>
					<p class="article-lead" itemprop="about">Defines different styles for a toggleable dropdown.</p>

					<?php

						// Objects
						require_once __DIR__ . '/objects/usage.php';

						// Modifiers
						require_once __DIR__ . '/modifiers/index.php';

						// require_once __DIR__ . '/objects/delayed.php';
						// require_once __DIR__ . '/objects/responsive.php';
						// require_once __DIR__ . '/objects/scroll-mod.php';
						// require_once __DIR__ . '/objects/navbar-mod.php';
						// require_once __DIR__ . '/objects/in-buttons.php';
						// require_once __DIR__ . '/objects/in-button-groups.php';
						// require_once __DIR__ . '/objects/in-subnav.php';
						// require_once __DIR__ . '/objects/in-tabs.php';

						// JS
						require_once __DIR__ . '/js/index.php';
						get_microdata('author');
					?>
				</article>
			</div>
		</div>
	</div>
</div>
