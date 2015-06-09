
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Button</h1>
					<p class="article-lead" itemprop="about">Easily create nicely looking buttons, which come in different styles.</p>
					<?php
						require_once __DIR__ . '/objects/usage.php';

						require_once __DIR__ . '/objects/button-group.php';

						require_once __DIR__ . '/objects/color-mods.php';
						require_once __DIR__ . '/objects/size-mods.php';
						get_microdata('author');
					?>
				</article>
			</div>
		</div>
	</div>
</div>
