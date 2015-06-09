
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Cover</h1>
					<p class="article-lead" itemprop="about">Expand images or videos to cover their entire container.</p>
					<p>This component allows you to create fullscreen teasers using images, objects or even iframes. Regardless what kind of element, it will always be centered vertically and horizontally and cover its container without losing its proportions. You can also place additional content, like text or an image, on top of the image or video.</p>
					<?php
						require_once __DIR__ . '/objects/usage.php';
						require_once __DIR__ . '/objects/iframe.php';
						get_microdata('author');
					?>
				</article>
			</div>
		</div>
	</div>
</div>
