
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>

			<?php get_sidebar('javascript'); ?>

			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title text-lowercase" itemprop="headline">.$body</h1>
					<p class="article-lead" itemprop="about">Returns an instance of the document body as a cached jQuery object.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<pre><code>;(function(clique) {
    // Add a new class to the body
    clique.$body.addClass('new-class');
})(Clique);</code></pre>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
