
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Pagination</h1>
					<p class="article-lead" itemprop="about">Easlily create a nicely looking pagination to navigate through pages.</p>

					<?php

						require_once __DIR__ . '/objects/usage.php';
						require_once __DIR__ . '/objects/alignment-mods.php';
						require_once __DIR__ . '/objects/previous-next.php';
						require_once __DIR__ . '/objects/icons.php';
						get_microdata('author');

					?>
				</article>
			</div>
		</div>
	</div>
</div>
