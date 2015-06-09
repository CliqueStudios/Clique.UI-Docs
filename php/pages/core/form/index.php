
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Form</h1>
					<p class="article-lead" itemprop="about">Easily create nicely looking forms with different styles and layouts.</p>

					<?php

						require_once __DIR__ . '/objects/usage.php';
						require_once __DIR__ . '/objects/form-row.php';
						require_once __DIR__ . '/objects/form-help.php';
						require_once __DIR__ . '/objects/form-label.php';
						require_once __DIR__ . '/objects/form-icon.php';

						require_once __DIR__ . '/modifiers/index.php';
						get_microdata('author');
					?>
				</article>
			</div>
		</div>
	</div>
</div>
