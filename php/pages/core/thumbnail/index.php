
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>

			<?php get_sidebar('core'); ?>

			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/TechArticle">
					<h1 class="article-title" itemprop="name">Thumbnail</h1>
					<p class="article-lead" itemprop="description">Create different thumbnail images, which come in various styles and sizes.</p>

					<?php

						require_once __DIR__ . '/objects/usage.php';
						require_once __DIR__ . '/objects/caption.php';
						require_once __DIR__ . '/objects/size-mods.php';
						get_microdata('author');

					?>
				</article>
			</div>
		</div>
	</div>
</div>
