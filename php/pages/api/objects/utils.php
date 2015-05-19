
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('javascript'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title text-lowercase" itemprop="headline">.utils</h1>
					<p class="article-lead" itemprop="about">Returns a collection of utility functions and objects.</p>
					<p>The table below lists the objects returned from the collection, the value type, and a description of their possible use.</p>
					<table class="table-striped">
						<thead>
							<tr>
								<th>Object</th>
								<th>Value Type</th>
								<th>Parameters</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code>now</code></td>
								<td>int</td>
								<td><em>none</em></td>
								<td>Returns the current time, in UNIX milisecond format.</td>
							</tr>
							<tr>
								<td><code>isString</code></td>
								<td>function</td>
								<td>(obj)</td>
								<td>Returns a boolean value, true if the object passed as a parameter is a string, and false if not.</td>
							</tr>
							<tr>
								<td><code>str2json</code></td>
								<td>function</td>
								<td>(str, notevil)</td>
								<td>Converts a JSON string to a plain JavaScript object. If the second parameter <code>noteviile</code> is <code>true</code>, the string is passed through a custom JSON conversion function. Otherwise, it uses the browser's native <code>JSON.parse</code> method.</td>
							</tr>
							<tr>
								<td><code>debounce</code></td>
								<td>function</td>
								<td>(func, wait, immediate)</td>
								<td>Executes the function passed as the first parameter as set intervals, determined by the second interval. The third parameter <code>immediate</code> defaults to true, allowing the function to execute immediately, rather than wait on cycle. This is particularly useful to reduce memory usage when executing <code>onscroll</code> or <code>onresize</code> callback functions.</td>
							</tr>
							<tr>
								<td><code>isInView</code></td>
								<td>function</td>
								<td>(element, options)</td>
								<td>Determines if the element passsed as the first parameter is visible within the current viewport. The second parameter, <code>options</code> is an object that includes `topoffset` and `leftoffset` as possible values.</td>
							</tr>
							<tr>
								<td><code>checkDisplay</code></td>
								<td>function</td>
								<td>(context, initanimation)</td>
								<td>Forces the child elements of the element passed as the first parameter to check their visibility and layout status. This is primarily used internally for animation-based components.</td>
							</tr>
							<tr>
								<td><code>uid</code></td>
								<td>function</td>
								<td>(prefix)</td>
								<td>Returns a unique string, prefixed if the optional parameter is passed through.</td>
							</tr>
							<tr>
								<td><code>events.click</code></td>
								<td>string</td>
								<td><em>none</em></td>
								<td>Returns either 'tap' or 'click', based on whether or not the browser is a touch-enabled device.</td>
							</tr>
						</tbody>
					</table>
					<h3 class="docs-article-subtitle">Example</h3>
					<pre><code>;(function(clique) {
    // Check if an element is inside the current viewport, with
    // a 50px offset from the top of the viewport.
    var isVisible = Clique.utils.isInView('#my-element', {
        topoffset : 50
    });
    if(isVisible) {
        // Do something if the element is visible...
    }

    clique.$('#my-element').on(clique.utils.events.click, function() {
        // Do something on tap/click...
    });
})(Clique);</code></pre>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
