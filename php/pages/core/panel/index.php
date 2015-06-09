
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Panel</h1>
					<p class="article-lead" itemprop="about">Create layout boxes with different styles.</p>
					<p><?php echo SITENAME; ?> uses panels to outline certain sections of your content, which can be styled differently. Typically, panels are arranged in grid columns from the <a href="<?php echo get_url('core/grid'); ?>">Grid component</a>.</p>

					<?php

						require_once __DIR__ . '/objects/usage.php';
						require_once __DIR__ . '/objects/box-mod.php';
						require_once __DIR__ . '/objects/box-primary-mod.php';
						require_once __DIR__ . '/objects/box-secondary-mod.php';
						require_once __DIR__ . '/objects/hover-mod.php';

						require_once __DIR__ . '/objects/header-mod.php';
						require_once __DIR__ . '/objects/space-mod.php';
						require_once __DIR__ . '/objects/divider-mod.php';

						require_once __DIR__ . '/objects/panel-teaser.php';
						get_microdata('author');

					?>
				</article>
			</div>
		</div>
	</div>
</div>
