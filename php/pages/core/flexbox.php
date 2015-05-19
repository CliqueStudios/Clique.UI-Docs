
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Flexbox</h1>
					<p class="article-lead" itemprop="about">Utilize the power of Flexbox to create a wide range of layouts.</p>
					<p>This component uses Flexbox, which, although a relatively new CSS technology, is extremely powerful for creating page structure and document layouts.</p>
					<p>To learn more about Flexbox, Chris Coyier published a few <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/" target="_blank">great</a> <a href="https://css-tricks.com/using-flexbox/">articles</a> on his website, <a href="https://css-tricks.com/" target="_blank">CSS Tricks</a>.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>To apply this component, just add the <code>.flex</code> class to a <code>&lt;div&gt;</code> element. This will create the flex container. By default, all flex items will be aligned to the left and equally matched in height and width.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#flex-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="flex-tabs" class="switcher margin">
						<li>
							<div class="flex">
								<div class="col-3-12 panel panel-box">Box</div>
								<div class="col-3-12 panel panel-box margin-left">Box</div>
								<div class="col-3-12 panel panel-box margin-left" style="height: 100px;">Box</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="flex"&gt;
    &lt;div class="col-3-12"&gt;...&lt;/div&gt;
    &lt;div class="col-3-12"&gt;...&lt;/div&gt;
    &lt;div class="col-3-12"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<h3>Flex inline</h3>
					<p>By default, the flex container is displayed as a block element. To apply the behavior of an inline element while still laying out its content according to the flexbox model, use the <code>.flex-inline</code> class instead of <code>flex</code>.</p>
					<hr>
					<h2 id="modifiers"><a href="#usage" class="link-reset">Modifiers</a></h2>
					<p>You can add a number of different classes to modify the flex behavior.</p>
					<h3 id="alignment"><a href="#alignment" class="link-reset">Alignment</a></h3>
					<p>These classes define the horizontal and vertical alignment of flex items and distribute the space between them.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#flex-modifiers-tabs'}">
								<li><a href="#">Classes</a></li>
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="flex-modifiers-tabs" class="switcher margin">
						<li>
							<div class="overflow-container">
								<table class="table-striped">
									<thead>
										<tr>
											<th>Class</th>
											<th>Description</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><code>.flex-center</code></td>
											<td>Add this class to center flex items horizontally.</td>
										</tr>
										<tr>
											<td><code>.flex-right</code></td>
											<td>Add this class to align flex items to the right.</td>
										</tr>
										<tr>
											<td><code>.flex-top</code></td>
											<td>Add this class to align flex items to the top.</td>
										</tr>
										<tr>
											<td><code>.flex-middle</code></td>
											<td>Add this class to vertically center flex items.</td>
										</tr>
										<tr>
											<td><code>.flex-bottom</code></td>
											<td>Add this class to align flex items to the bottom.</td>
										</tr>
										<tr>
											<td><code>.flex-space-between</code></td>
											<td>Add this class to distribute items evenly, with the first item at the beginning and last item at the end of the main axis.</td>
										</tr>
										<tr>
											<td><code>.flex-space-around</code></td>
											<td>Add this class to distribute items evenly with equal space on both sides of each item.</td>
										</tr>
									</tbody>
								</table>
							</div>
						</li>
						<li>
							<p><code>.flex-top</code></p>
							<div class="flex flex-top flex-space-between">
								<div class="col-3-12 panel panel-box" style="height: 50px;">Height: 50px</div>
								<div class="col-3-12 panel panel-box" style="height: 80px;">Height: 80px</div>
								<div class="col-3-12 panel panel-box" style="height: 110px;">Height: 110px</div>
							</div>
							<hr>
							<p><code>.flex-middle</code></p>
							<div class="flex flex-middle flex-space-between margin-top">
								<div class="col-3-12 panel panel-box" style="height: 50px;">Height: 50px</div>
								<div class="col-3-12 panel panel-box" style="height: 80px;">Height: 80px</div>
								<div class="col-3-12 panel panel-box" style="height: 110px;">Height: 110px</div>
							</div>
							<hr>
							<p><code>.flex-bottom</code></p>
							<div class="flex flex-bottom flex-space-between margin-top">
								<div class="col-3-12 panel panel-box" style="height: 50px;">Height: 50px</div>
								<div class="col-3-12 panel panel-box" style="height: 80px;">Height: 80px</div>
								<div class="col-3-12 panel panel-box" style="height: 110px;">Height: 110px</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="flex flex-top flex-space-between"&gt;...&lt;/div&gt;
&lt;div class="flex flex-middle flex-space-between"&gt;...&lt;/div&gt;
&lt;div class="flex flex-bottom flex-space-between"&gt;...&lt;/div&gt;
</code></pre>
						</li>
					</ul>
					<hr>
					<h3 id="direction"><a href="#direction" class="link-reset">Direction</a></h3>
					<p>These classes define the axis flex items placed on and their direction. By default, items run horizontally from left to right.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#flex-direction-tabs'}">
								<li><a href="#">Classes</a></li>
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="flex-direction-tabs" class="switcher margin">
						<li>
							<div class="overflow-container">
								<table class="table-striped">
									<thead>
										<tr>
											<th>Class</th>
											<th>Description</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><code>.flex-row-reverse</code></td>
											<td>Add this class to lay out flex items from right to left.</td>
										</tr>
										<tr>
											<td><code>.flex-column</code></td>
											<td>Add this class to lay out flex items as vertical columns.</td>
										</tr>
										<tr>
											<td><code>.flex-column-reverse</code></td>
											<td>Add this class to lay out flex items from bottom to top.</td>
										</tr>
									</tbody>
								</table>
							</div>
						</li>
						<li>
							<div class="flex flex-column flex-column-reverse">
								<div class="col-3-12 panel panel-box">1</div>
								<div class="col-3-12 panel panel-box margin-bottom">2</div>
								<div class="col-3-12 panel panel-box margin-bottom">3</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="flex flex-column flex-column-reverse"&gt;
    &lt;div class="col-3-12 panel panel-box"&gt;1&lt;/div&gt;
    &lt;div class="col-3-12 panel panel-box margin-bottom"&gt;2&lt;/div&gt;
    &lt;div class="col-3-12 panel panel-box margin-bottom"&gt;3&lt;/div&gt;
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3 id="wrap"><a href="#wrap" class="link-reset">Wrap</a></h3>
					<p>By default, flex items fit themselves into one row. Add the <code>.flex-wrap</code> class, so that the items wrap into another row when they no longer fit the viewport. To change the items' direction so that they run from right to left, add the <code>.flex-wrap-reverse</code> class. The following classes modify the alignment of wrapping flex items.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#flex-wrap-tabs'}">
								<li><a href="#">Classes</a></li>
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="flex-wrap-tabs" class="switcher margin">
						<li>
							<div class="overflow-container">
								<table class="table-striped">
									<thead>
										<tr>
											<th>Class</th>
											<th>Description</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><code>.flex-wrap-top</code></td>
											<td>Add this class to align multirow flex items to the top.</td>
										</tr>
										<tr>
											<td><code>.flex-wrap-middle</code></td>
											<td>Add this class to vertically center multirow flex items.</td>
										</tr>
										<tr>
											<td><code>.flex-wrap-bottom</code></td>
											<td>Add this class to align multiline flex items to the bottom.</td>
										</tr>
										<tr>
											<td><code>.flex-wrap-space-between</code></td>
											<td>Add this class to distribute item rows evenly, with the first row at the top and last row at the bottom of the container.</td>
										</tr>
										<tr>
											<td><code>.flex-wrap-space-around</code></td>
											<td>Add this class to distribute rows evenly with equal space at the top and bottom of each row.</td>
										</tr>
									</tbody>
								</table>
							</div>
						</li>
						<li>
							<div class="flex flex-wrap flex-wrap-reverse flex-wrap-space-around" style="height: 250px; background: #fafafa;">
								<div class="col-4-12 panel panel-box panel-box-primary">1</div>
								<div class="col-6-12 panel panel-box panel-box-primary margin-left">2</div>
								<div class="col-4-12 panel panel-box panel-box-primary">3</div>
								<div class="col-4-12 panel panel-box panel-box-primary margin-left">4</div>
								<div class="col-6-12 panel panel-box panel-box-primary">5</div>
								<div class="col-4-12 panel panel-box panel-box-primary margin-left">6</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="flex flex-wrap flex-wrap-reverse flex-wrap-space-around"&gt;
    &lt;div class="col-4-12">1&lt;/div&gt;
    &lt;div class="col-6-12">2&lt;/div&gt;
    &lt;div class="col-4-12">3&lt;/div&gt;
    &lt;div class="col-4-12">4&lt;/div&gt;
    &lt;div class="col-6-12">5&lt;/div&gt;
    &lt;div class="col-4-12">6&lt;/div&gt;
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3 id="item-order"><a href="#item-order" class="link-reset">Item order</a></h3>
					<p>By default, flex items are laid out according to the source order. To display a certain item as the first or last one, just add one of these classes.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#flex-item-order-tabs'}">
								<li><a href="#">Classes</a></li>
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="flex-item-order-tabs" class="switcher margin">
						<li>
							<div class="overflow-container">
								<table class="table-striped">
									<thead>
										<tr>
											<th>Class</th>
											<th>Description</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><code>.flex-order-first</code></td>
											<td>Displays the item as the first one.</td>
										</tr>
										<tr>
											<td><code>.flex-order-last</code></td>
											<td>Displays the item as the last one.</td>
										</tr>
										<tr>
											<td>
												<code>.flex-order-first-small</code>
												<br>
												<code>.flex-order-last-small</code>
											</td>
											<td>Affects device widths of <em>480px</em> and higher.</td>
										</tr>
										<tr>
											<td>
												<code>.flex-order-first-medium</code>
												<br>
												<code>.flex-order-last-medium</code>
											</td>
											<td>Affects device widths of <em>768px</em> and higher.</td>
										</tr>
										<tr>
											<td>
												<code>.flex-order-first-large</code>
												<br>
												<code>.flex-order-last-large</code>
											</td>
											<td>Affects device widths of <em>960px</em> and higher.</td>
										</tr>
										<tr>
											<td>
												<code>.flex-order-first-xlarge</code>
												<br>
												<code>.flex-order-last-xlarge</code>
											</td>
											<td>Affects device widths of <em>1220px</em> and higher.</td>
										</tr>
									</tbody>
								</table>
							</div>
						</li>
						<li>
							<div class="flex">
								<div class="col-4-12 panel panel-box margin-left">1</div>
								<div class="col-4-12 panel panel-box margin-left">2</div>
								<div class="col-4-12 panel panel-box flex-order-first">3</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="flex"&gt;
    &lt;div class="col-4-12"&gt;1&lt;/div&gt;
    &lt;div class="col-4-12"&gt;2&lt;/div&gt;
    &lt;div class="col-4-12 flex-order-first"&gt;3&lt;/div&gt;
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3 id="item-dimensions"><a href="#item-dimensions" class="link-reset">Item dimensions</a></h3>
					<p>To determine how much space a flex item should take up, add one of the following classes to the item.</p>
					<div class="overflow-container">
						<table class="table-striped">
							<thead>
								<tr>
									<th>Class</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>.flex-item-none</code></td>
									<td>The box's size is determined by its content.</td>
								</tr>
								<tr>
									<td><code>.flex-item-auto</code></td>
									<td>The space is allocated considering the item's content.</td>
								</tr>
								<tr>
									<td><code>.flex-item-1</code></td>
									<td>The space is allocated solely based on flex.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<hr>
					<h2 id="flex-grid"><a href="#flex-grid" class="link-reset">Flex and grid</a></h2>
					<p>The Flex component can be combined with a grid from the <a href="<?php echo get_url('core/grid'); ?>">Grid component</a>.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#flex-grid-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="flex-grid-tabs" class="switcher margin">
						<li>
							<div class="row flex-middle" data-row-margin>
								<div class="col-4-12-medium">
									<div class="panel">
										<img src="<?php echo get_image('placeholder_400x250.svg'); ?>" alt="Placeholder">
									</div>
								</div>
								<div class="col-8-12-medium flex-middle">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="row flex-middle" data-row-margin&gt;
    &lt;div class="col-4-12-medium"&gt;
        &lt;div class="panel"&gt;
            ...
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-8-12-medium flex-middle"&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
						</li>
					</ul>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
