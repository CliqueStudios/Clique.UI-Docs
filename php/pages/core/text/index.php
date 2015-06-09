
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Text</h1>
					<p class="article-lead" itemprop="about">A collection of useful text utility classes to style your content.</p>

					<?php

						require_once __DIR__ . '/objects/usage.php';
						require_once __DIR__ . '/objects/alignment-mod.php';
						require_once __DIR__ . '/objects/vertical-mod.php';
						require_once __DIR__ . '/objects/wrapping-mod.php';
						get_microdata('author');

					?>
				</article>
			</div>
		</div>
	</div>
</div>
