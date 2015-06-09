
<div class="docs-middle">
	<div class="container container-center">
		<div class="row">
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Alert</h1>
					<p class="article-lead" itemprop="about">Defines styles for success, warning and error messages.</p>
					<?php
						require_once __DIR__ . '/objects/usage.php';
						require_once __DIR__ . '/objects/close-button.php';
						require_once __DIR__ . '/objects/color-mod.php';
						require_once __DIR__ . '/objects/size-mod.php';
						get_microdata('author');
					?>
				</article>
			</div>
		</div>
	</div>
</div>
