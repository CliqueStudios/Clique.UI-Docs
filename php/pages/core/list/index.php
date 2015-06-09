
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">List</h1>
					<p class="article-lead" itemprop="about">Easily create nicely looking lists, which come in different styles.</p>

					<?php
						require_once __DIR__ . '/objects/usage.php';

						require_once __DIR__ . '/modifiers/list-inline.php';
						require_once __DIR__ . '/modifiers/list-line.php';
						require_once __DIR__ . '/modifiers/list-striped.php';
						require_once __DIR__ . '/modifiers/list-space.php';
						get_microdata('author');

					?>
				</article>
			</div>
		</div>
	</div>
</div>
