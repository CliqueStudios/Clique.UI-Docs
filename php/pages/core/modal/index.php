<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>

			<?php get_sidebar('core'); ?>

			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Modal</h1>
					<p class="article-lead" itemprop="about">Create modal dialogs with different styles and transitions.</p>

					<?php

						require_once __DIR__ . '/objects/usage.php';

						require_once __DIR__ . '/objects/modal-header-footer.php';
						require_once __DIR__ . '/objects/modal-caption.php';

						require_once __DIR__ . '/modifiers/index.php';

						require_once __DIR__ . '/js/index.php';
						get_microdata('author');

					?>
				</article>
			</div>
		</div>
	</div>
</div>
