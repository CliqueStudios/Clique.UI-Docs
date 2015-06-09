
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Toggle</h1>
					<p class="article-lead" itemprop="about">Hide, switch or change the appearence of different contents through a toggle.</p>
					<?php
						require_once __DIR__ . '/objects/usage.php';
						require_once __DIR__ . '/objects/multiple.php';
						require_once __DIR__ . '/objects/custom-class.php';
						require_once __DIR__ . '/js/index.php';
						get_microdata('author');
					?>
				</article>
			</div>
		</div>
	</div>
</div>
