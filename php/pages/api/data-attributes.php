
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('javascript'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Data Attributes</h1>
					<p class="article-lead" itemprop="about">Use data attributes to apply JavaScript to <?php echo SITENAME; ?> components</p>
					<p>You can use all <?php echo SITENAME; ?> components by just adding <code>data-*</code> attributes to your HTML elements without writing a single line of JavaScript. This is <?php echo SITENAME; ?>'s best practice of using its components and should always be considered first.</p>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;button data-button&gt;My Button&lt;/button&gt;</code></pre>
					<p>Initializing a component with the <code>data-*</code> attribute is the same as manually initializing it:</p>
					<h3 class="docs-article-subtitle">Markup</h3>
					<div class="row">
						<div class="col-6-12">
							<em>via the jQuery API</em>
							<pre><code>$("#my-button").clique("button", {
    // Options...
});</code></pre>
						</div>
						<div class="col-6-12">
							<em>via the <?php echo SITENAME; ?> API</em>
							<pre><code>Clique.button("#my-button", {
    // Options...
});</code></pre>
						</div>
					</div>
					<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
