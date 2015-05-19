
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>

			<?php get_sidebar('javascript'); ?>

			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title text-lowercase" itemprop="headline">.events</h1>
					<p class="article-lead" itemprop="about">Returns a cached instance of the jQuery object at the dom-ready state.</p>
					<p>The <code>$</code> symbol in jQuery-based JavaScript development is typically read as a cached instance of the global jQuery object. If all variables are wrapped in a manner so as to not pollute the global namespace, however, the dollar-sign variable will not be accessible. <?php echo SITENAME; ?> caches the jQuery object to be able to globally read it's properties and executes it's functions without instatiatng a new instance each time.</p>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>;(function(clique) {
    var $ = clique.$;
    // Any jQuery functions can now be executed using the `$` symbol
    // without fear of polluting the global namespace
    ...
})(Clique);</code></pre>
						<h3 class="docs-article-subtitle">Example</h3>
						<pre><code>;(function(clique) {
    var $ = clique.$;

    // Begin jQuery object manipulation
    $('#my-element').animate({
        'margin-top' : 30
    });
})(Clique);</code></pre>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
