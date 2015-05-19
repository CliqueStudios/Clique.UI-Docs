
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>

			<?php get_sidebar('javascript'); ?>

			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">.$</h1>
					<p class="article-lead" itemprop="about">Returns a cached instance of the jQuery object at the DOM-ready state.</p>
					<p>The <code>$</code> symbol in jQuery-based JavaScript development is typically read as a cached instance of the global jQuery object. If all variables are wrapped in a manner so as to not pollute the global namespace, however, the dollar-sign variable will not be accessible.</p>
					<p><?php echo SITENAME; ?> caches the jQuery object to be able to globally read it's properties and executes it's functions without creating a new instance each time, resulting in faster execution of jQuery methods.</p>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>var $ = clique.$;</code></pre>
					<h3 class="docs-article-subtitle">Example</h3>
					<pre><code>// Begin jQuery object manipulation
Clique.$('#my-element').animate({
	'margin-top' : 30
});

// Store the Clique.$ object as the variable `$` if,
// for no other reason, to type less...
var $ = Clique.$;

// Begin jQuery object manipulation
$('#my-element').animate({
	'margin-top' : 30
});</code></pre>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
