
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>

			<?php get_sidebar('javascript'); ?>

			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">DOM Observers</h1>
					<p class="article-lead" itemprop="about">Check Display event on visibility change.</p>
					<p>Sometimes components, like <a href="<?php echo get_url('core/grid'); ?>">Grid</a> or <a href="<?php echo get_url('core/tab'); ?>">Tab</a> are hidden in the markup. This may happen when used in combination with the <a href="<?php echo get_url('core/switcher'); ?>">Switcher</a>, <a href="<?php echo get_url('core/modal'); ?>">Modal</a> or <a href="<?php echo get_url('core/dropdown'); ?>">Dropdown</a>. Once they become visible, they need to be recalculated to adjust or fix the height and other dimensions.</p>
					<p>To do so, add the <code>data-check-display</code> attribute to the elements which need to be recalculated. They now listen to the <code>display.clique.check</code> event, which will be triggered by the container component, for example the Switcher.</p>
					<p><span class="badge">Note</span> This is not needed for elements with <code>data-margin</code>, <code>data-row-margin</code> and <code>data-row-match</code> attributes &ndash; those will be triggered by default.</p>
					<hr>
					<h2><a href="#check-display" class="link-reset">Check if an element is visible</a></h2>
					<h3 class="docs-article-subtitle">HTML Markup</h3>
					<p>To listen for a change in an elements visibility, add the <code>data-check-display</code> attribute to the element and, in your JavaScript, bind an event listener to the object watching for the <code>display.clique.check</code> event to be triggered.</p>
					<p>This is especially useful when used in conjunction with the <a href="<?php echo get_url('core/modal'); ?>">modal component</a> to observe whether or not the modal is visible.</p>
					<pre><code>&lt;!-- Element within a modal, switcher or dropdown --&gt;
&lt;div id="my-element" data-check-display&gt;...&lt;/div&gt;</code></pre>
					<h3 class="docs-article-subtitle">JS Markup</h3>
					<pre><code>$("#my-element").on('display.clique.check', function() {
	// Element visibility has changed
    // Execute callback function
});</code></pre>
<hr>
					<h2><a href="#check-display" class="link-reset">Watch for changes</a></h2>
					<p>If you'd like to listen for content/HTML changes to an element, simply apply the <code>data-observe</code> attribute to an element and bind an event listener to the DOM object, watching for the <code>changed.clique.dom</code> event to be triggered.</p>
					<h3 class="docs-article-subtitle">HTML Markup</h3>
					<pre><code>&lt;div id="my-element" data-observe&gt;...&lt;/div&gt;</code></pre>
					<h3 class="docs-article-subtitle">JS Markup</h3>
					<pre><code>$("#my-element").on('changed.clique.dom', function() {
	// Content or HTML of this element has changed
    // Execute callback function
});</code></pre>
					<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
