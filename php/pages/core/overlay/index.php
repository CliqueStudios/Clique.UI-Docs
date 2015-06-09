
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Overlay</h1>
					<p class="article-lead" itemprop="about">Create an image overlay, which comes in different styles.</p>

					<?php

						require_once __DIR__ . '/objects/usage.php';
						require_once __DIR__ . '/objects/hover-mod.php';
						require_once __DIR__ . '/objects/overlay-background.php';
						require_once __DIR__ . '/objects/overlay-icon.php';
						require_once __DIR__ . '/objects/position-mod.php';
						require_once __DIR__ . '/objects/transition-mod.php';
						require_once __DIR__ . '/objects/flex.php';
						require_once __DIR__ . '/objects/anchor.php';
						get_microdata('author');

					?>
				</article>
			</div>
		</div>
	</div>
</div>
