
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 id="bottom" class="article-title">Scrollspy</h1>
					<p class="article-lead" itemprop="about">Trigger events and animations while scrolling your page.</p>
					<?php

						require_once __DIR__ . '/objects/usage.php';
						require_once __DIR__ . '/objects/groups.php';

						// require_once __DIR__ . '/js/index.php';
						get_microdata('author');

					?>
				</article>
			</div>
		</div>
	</div>
</div>
