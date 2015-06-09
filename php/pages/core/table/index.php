
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>

			<?php get_sidebar('core'); ?>

			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Table</h1>
					<p class="article-lead" itemprop="about">Easily create nicely looking tables, which come in different styles.</p>

					<?php

						require_once __DIR__ . '/objects/usage.php';
						require_once __DIR__ . '/objects/columns.php';
						require_once __DIR__ . '/objects/vertical-mod.php';
						require_once __DIR__ . '/objects/striped-mod.php';
						require_once __DIR__ . '/objects/condensed-mod.php';
						require_once __DIR__ . '/objects/responsive.php';
						get_microdata('author');

					?>
				</article>
			</div>
		</div>
	</div>
</div>
