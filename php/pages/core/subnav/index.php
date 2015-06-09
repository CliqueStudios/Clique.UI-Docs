
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Subnav</h1>
					<p class="article-lead" itemprop="about">Defines different styles for a sub navigation.</p>

					<?php

						require_once __DIR__ . '/objects/usage.php';

						require_once __DIR__ . '/modifiers/index.php';

						require_once __DIR__ . '/modifiers/line.php';
						require_once __DIR__ . '/modifiers/pill.php';

						get_microdata('author');

					?>
				</article>
			</div>
		</div>
	</div>
</div>
