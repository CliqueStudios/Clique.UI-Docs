
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>

			<?php get_sidebar('javascript'); ?>

			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title text-lowercase" itemprop="headline">.$win</h1>
					<p class="article-lead" itemprop="about">Returns an instance of the window as a cached jQuery object.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<pre><code>Clique.$win.on('load', function() {
    // Excecute window.load event handler...
});</code></pre>
						<hr>
						<h2 id="cache"><a href="#cache" class="link-reset">Accessing cached objects</a></h2>
						<p>Even though it's a cached object, accessing properties and utilizing methods of <code>.$win</code> will return information from the object at the time of execution.</p>
						<h3 class="docs-article-subtitle">Example</h3>
						<pre><code>;(function(clique) {
    var loadWidth, widthAfterResize;
    clique.$win.on('load', function() {
        // Get the width of the window on load:
        loadWidth = clique.$win.width();
    });

    clique.$win.on('resizeend.clique.dom', function() {
        // Get the width of the window after it has been resized
        widthAfterResize = clique.$win.width();
    });
})(Clique);</code></pre>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
