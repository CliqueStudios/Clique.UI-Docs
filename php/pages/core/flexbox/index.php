
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Flexbox</h1>
					<p class="article-lead" itemprop="about">Utilize the power of Flexbox to create a wide range of layouts.</p>
					<p>This component uses Flexbox, which, although a relatively new CSS technology, is extremely powerful for creating page structure and document layouts.</p>
					<p>To learn more about Flexbox, Chris Coyier published a few <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/" target="_blank">great</a> <a href="https://css-tricks.com/using-flexbox/">articles</a> on his website, <a href="https://css-tricks.com/" target="_blank">CSS Tricks</a>.</p>

					<?php

						require_once __DIR__ . '/objects/usage.php';

						require_once __DIR__ . '/modifiers/index.php';

						require_once __DIR__ . '/objects/item-order.php';
						require_once __DIR__ . '/objects/item-size.php';
						// require_once __DIR__ . '/objects/wrap-mods.php';
						// require_once __DIR__ . '/objects/item-order.php';
						// require_once __DIR__ . '/objects/item-dimensions.php';
						get_microdata('author');

					?>
				</article>
			</div>
		</div>
	</div>
</div>
