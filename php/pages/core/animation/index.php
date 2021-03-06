
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Animation</h1>
					<p class="article-lead" itemprop="about">A basic collection of smooth animations to use within your page.</p>
					<?php
						require_once __DIR__ . '/objects/usage.php';
						require_once __DIR__ . '/objects/hover.php';
						require_once __DIR__ . '/objects/reverse-mod.php';
						require_once __DIR__ . '/objects/origin-mod.php';
						require_once __DIR__ . '/objects/duration-mod.php';
						get_microdata('author');
					?>
				</article>
			</div>
		</div>
	</div>
</div>
