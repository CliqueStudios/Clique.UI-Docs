
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('components'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" style="min-height: 3000px;">
					<h1 class="article-title" itemprop="headline">Sticky</h1>
					<p class="article-lead" itemprop="about">Make elements remain at the top of the viewport, like a sticky navbar.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>To create an element that remains at the top of the viewport when scrolling down the site, add the <code>data-sticky</code> attribute to that element.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="panel panel-box" data-sticky="{boundary:'#define-an-offset'}">Stick to the top</div>
					<h3 class="docs-article-subtitle" style="margin-top: 230px;">Markup</h3>
					<pre><code>&lt;div data-sticky&gt;...&lt;/div&gt;</code></pre>
					<hr>
					<h2 id="define-an-offset"><a href="#define-an-offset" class="link-reset">Define an offset</a></h2>
					<p>You can also position the element below the viewport edge. For example, add the <code>data-sticky="{top:100}"</code> attribute to create a margin of 100px.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="panel panel-box" data-sticky="{top:100,boundary:'#add-a-delay'}">Stick 100px below the top</div>
					<h3 class="docs-article-subtitle" style="margin-top: 230px;">Markup</h3>
					<pre><code>&lt;div data-sticky="{top:100}"&gt;...&lt;/div&gt;</code></pre>
					<hr>
					<h2 id="add-a-delay"><a href="#add-a-delay" class="link-reset">Add a delay</a></h2>
					<p>To add a delay to the element, so it becomes sticky only after scrolling a specified distance, you need to add a negative offset to the data attribute, e.g. <code>data-sticky="{top:-200}"</code>. You can also add an animation from the <a href="<?php echo get_url('core/animation'); ?>">Animation component</a> in order to have the sticky element reappear smoothly.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="panel panel-box panel-box-primary" data-sticky="{top:-100, animation: 'animation-slide-top', boundary:'#responsive-behavior'}">Stick at the top but only after 100px scrolling</div>
					<h3 class="docs-article-subtitle" style="margin-top: 230px;">Markup</h3>
					<pre><code>&lt;div data-sticky="{top:-200, animation: 'animation-slide-top'}"&gt;...&lt;/div&gt;</code></pre>
					<hr>
					<h2 id="responsive-behavior"><a href="#responsive-behavior" class="link-reset">Responsive behavior</a></h2>
					<p>You also have the possibility of disabling the sticky behavior for different devices by adding a breakpoint option to the data attribute, e.g. <code>data-sticky="{media: 640}"</code>. Additionaly you can use any valid media query.</p>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code> &lt;!-- This is basically a shortcode to define a min-width --&gt;
&lt;div data-sticky="{media: 640}"&gt;...&lt;/div&gt;

&lt;!-- This is a media string using the min-width and orientation properties --&gt;
&lt;div data-sticky="{media: '(min-width: 640px) and (orientation: landscape)'}&gt;...&lt;/div&gt;</code></pre>
					<hr>
					<h2 id="sticky-boundary"><a href="#sticky-boundary" class="link-reset">Sticky boundary</a></h2>
					<p>You can define the boundary of a sticky element by setting the <code>boundary</code> parameter. This keeps the sticky element within the dimensions of the boundary element.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="margin grid">
						<div class="col-6-12">
							<div class="panel panel-box panel-box-secondary" style="height:300px;">
								<div class="panel panel-box" data-sticky="{boundary:true}">Sticky bound to parent container</div>
							</div>
						</div>
						<div class="col-6-12">
							<div class="panel panel-box" data-sticky="{boundary:'#boundary'}" style="margin-bottom: 228px;">Sticky as long as bondary element is in view</div>
							<div id="boundary" class="panel panel-box">Boundary element</div>
						</div>
					</div>
					<h3 class="docs-article-subtitle" style="margin-top: 230px;">Markup</h3>
					<pre><code> &lt;!-- Bind sticky to its parent element --&gt;
&lt;div data-sticky="{boundary: true}"&gt;...&lt;/div&gt;

&lt;!-- Bind sticky to any element --&gt;
&lt;div data-sticky="{boundary: '#my-id'}&gt;...&lt;/div&gt;</code></pre>
					<hr>
					<h2 id="javascript"><a href="#javascript-options" class="link-reset">JavaScript options</a></h2>
					<div id="javascript-options-container" class="overflow-container">
						<table class="table-striped">
							<thead>
								<tr>
									<th>Option</th>
									<th class="text-nowrap">Possible value</th>
									<th class="text-nowrap">Default</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>top</code></td>
									<td class="text-nowrap">integer</td>
									<td class="text-nowrap">0</td>
									<td>Top offset whent sticky should be triggered</td>
								</tr>
								<tr>
									<td><code>animation</code></td>
									<td class="text-nowrap">string</td>
									<td class="text-nowrap">''</td>
									<td><?php echo SITENAME; ?> animation class</td>
								</tr>
								<tr>
									<td><code>clsinit</code></td>
									<td class="text-nowrap">string</td>
									<td class="text-nowrap">sticky-init</td>
									<td>Init class when the element is sticky for the first time</td>
								</tr>
								<tr>
									<td><code>clsactive</code></td>
									<td class="text-nowrap">string</td>
									<td class="text-nowrap">active</td>
									<td>Active class to add, when element is sticky</td>
								</tr>
								<tr>
									<td><code>getWidthFrom</code></td>
									<td class="text-nowrap">string</td>
									<td class="text-nowrap">''</td>
									<td>CSS selector where to get the width from in sticky mode. By default it takes the width from the created wrapper element.</td>
								</tr>
								<tr>
									<td><code>media</code></td>
									<td class="text-nowrap">integer / string</td>
									<td class="text-nowrap">false</td>
									<td>Condition for the active status with a width as integer (e.g. 640) or a css media query</td>
								</tr>
								<tr>
									<td><code>target</code></td>
									<td class="text-nowrap">boolean</td>
									<td class="text-nowrap">false</td>
									<td>Make sure that a sticky element is not over a targeted element via location hash on dom-ready.</td>
								</tr>
								<tr>
									<td><code>boundary</code></td>
									<td class="text-nowrap">mixed</td>
									<td class="text-nowrap">false</td>
									<td>Set to <code>true</code> to bind sticky to the parent or a CSS selector to bind sticky to a specific element.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<h3 class="docs-article-subtitle">Init element manually</h3>
					<pre><code>var sticky = Clique.sticky(element, {
    /* options */
});</code></pre>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
