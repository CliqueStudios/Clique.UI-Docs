
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Nav</h1>
					<p class="article-lead" itemprop="about">Defines different styles for list navigations.</p>

					<?php

						require_once __DIR__ . '/objects/usage.php';

						require_once __DIR__ . '/objects/nav-header.php';
						require_once __DIR__ . '/objects/nav-divider.php';
						require_once __DIR__ . '/objects/nav-sub.php';

						require_once __DIR__ . '/modifiers/index.php';
						get_microdata('author');

					?>
				</article>
			</div>
		</div>
	</div>
</div>
