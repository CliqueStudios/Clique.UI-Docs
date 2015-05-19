
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('javascript'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Override Component Defaults</h1>
					<p>It is possible to adjust the default component settings as you can see in the following example. To ensure the default settings are overridden in the proper sequence, do so in a callback function that is triggered by the <code>beforeready.clique.dom</code> event.</p>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>// Override default datepicker settings
Clique.on('beforeready.clique.dom', function(){
    $.extend(Clique.components.datepicker.prototype.defaults, {
        mobile : true,
        format: 'DD.MM.YYYY'
    });
});</code></pre>
					<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
