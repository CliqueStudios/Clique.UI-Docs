
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('javascript'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title text-lowercase" itemprop="headline">.support</h1>
					<p class="article-lead" itemprop="about">Returns a collection of functions that provide cross-browser animation &amp; transition support.</p>
					<p>The table below lists the objects returned from the collection, the value type, and a description of their possible use.</p>
					<p>This collection is primarily used internally to provide cross-browser support for DOM mutation and CSS-based function callbacks.</p>
					<table class="table-striped">
						<thead>
							<tr>
								<th>Object</th>
								<th>Value Type</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code>requestAnimationFrame</code></td>
								<td>function</td>
								<td>Tells the browser that you wish to perform an animation and requests that the browser call a specified function to update an animation before the next repaint.</td>
							</tr>
							<tr>
								<td><code>touch</code></td>
								<td>boolean</td>
								<td>Returns a boolean determining if the browser has touch capability enabled.</td>
							</tr>
							<tr>
								<td><code>mutationobserver</code></td>
								<td>function</td>
								<td>Provides the developer with a way to reach to DOM changes.</td>
							</tr>
							<tr>
								<td><code>transition.end</code></td>
								<td>function</td>
								<td>Returns the native browser function that listens for a CSS transition ending. Useful as an alternative to jQuery's <code>animate</code> method.</td>
							</tr>
							<tr>
								<td><code>animation.end</code></td>
								<td>function</td>
								<td>Returns the browser's native function that listens for a CSS animation ending. Useful as an alternative to jQuery's <code>animate</code> method.</td>
							</tr>
						</tbody>
					</table>
					<h3 class="docs-article-subtitle">Example</h3>
					<pre><code>;(function(clique) {
    if(clique.support.touch) {
        // Do something for touch screens...
    }

    clique$('#my-element').on(clique.support.transition.end, function() {
        // Do something now that the element has stopped transitioning...
    });
})(Clique);</code></pre>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
