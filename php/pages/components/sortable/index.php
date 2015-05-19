
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('components'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Sortable</h1>
					<p class="article-lead" itemprop="about">Create sortable grids and lists to rearrange the order of its elements.</p>
					<p>Drag and drop an element to a new location within the the sortable grid, while the other items adjust to fit. This is great, if you want to sort items like gallery or menu items, for example.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>To apply this component, add the <code>.sortable</code> class to a container and create child elements to define the component. To enable the necessary JavaScript, just add the <code>data-sortable</code> attribute.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<p>In this example we used a grid from the <a href="<?php echo get_url('core/grid'); ?>">Grid component</a> to arrange the sortable items.</p>
					<ul class="sortable row row-small row-5-cols" data-sortable>
						<li class="row-margin">
							<div class="panel panel-box">Item 1</div>
						</li>
						<li class="row-margin">
							<div class="panel panel-box">Item 2</div>
						</li>
						<li class="row-margin">
							<div class="panel panel-box">Item 3</div>
						</li>
						<li class="row-margin">
							<div class="panel panel-box">Item 4</div>
						</li>
						<li class="row-margin">
							<div class="panel panel-box">Item 5</div>
						</li>
						<li class="row-margin">
							<div class="panel panel-box">Item 6</div>
						</li>
						<li class="row-margin">
							<div class="panel panel-box">Item 7</div>
						</li>
						<li class="row-margin">
							<div class="panel panel-box">Item 8</div>
						</li>
						<li class="row-margin">
							<div class="panel panel-box">Item 9</div>
						</li>
						<li class="row-margin">
							<div class="panel panel-box">Item 10</div>
						</li>
					</ul>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;ul class="sortable" data-sortable&gt;
    &lt;li&gt;...&lt;/li&gt;
    &lt;li&gt;...&lt;/li&gt;
&lt;/ul&gt;</code></pre>
					<hr>
					<h3 id="sortable-handle"><a href="#sortable-handle" class="link-reset">Sortable handle</a></h3>
					<p>To determine a different element to be used as a handle to sort the items, just add the <code>{handleClass:'panel'}</code> option to the data attribute.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<p>Note how only the panels serve as handles here, whereas in the example above you would already drag elements by clicking into the gap between them.</p>
					<ul class="sortable row row-small row-5-cols" data-sortable="{handleClass:'panel'}">
						<li class="row-margin">
							<div class="panel panel-box">Item 1</div>
						</li>
						<li class="row-margin">
							<div class="panel panel-box">Item 2</div>
						</li>
						<li class="row-margin">
							<div class="panel panel-box">Item 3</div>
						</li>
						<li class="row-margin">
							<div class="panel panel-box">Item 4</div>
						</li>
						<li class="row-margin">
							<div class="panel panel-box">Item 5</div>
						</li>
						<li class="row-margin">
							<div class="panel panel-box">Item 6</div>
						</li>
						<li class="row-margin">
							<div class="panel panel-box">Item 7</div>
						</li>
						<li class="row-margin">
							<div class="panel panel-box">Item 8</div>
						</li>
						<li class="row-margin">
							<div class="panel panel-box">Item 9</div>
						</li>
						<li class="row-margin">
							<div class="panel panel-box">Item 10</div>
						</li>
					</ul>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;ul class="sortable" data-sortable="{handleClass:'panel'}"&gt;
    &lt;li&gt;...&lt;/li&gt;
    &lt;li&gt;...&lt;/li&gt;
&lt;/ul&gt;</code></pre>
					<hr>
					<h3 id="sort-any-element"><a href="#sort-any-element" class="link-reset">Sort any element</a></h3>
					<p>The sortable component is not limited to <code>&lt;ul&gt;</code> elements. You can use any block element as a container.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="sortable" data-sortable>
						<div>
							<p class="alert">Item 1</p>
						</div>
						<div>
							<p class="alert alert-success">Item 2</p>
						</div>
						<div>
							<p class="alert alert-warning">Item 3</p>
						</div>
						<div>
							<p class="alert alert-danger">Item 4</p>
						</div>
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;div class="sortable" data-sortable&gt;
    &lt;div&gt;...&lt;/div&gt;
    &lt;div&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
					<hr>
					<h2 id="sort-warp-lists"><a href="#sort-warp-lists" class="link-reset">Warp mode</a></h2>
					<p>In Warp mode the new list order is applied after dropping the dragged element to its new position.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<ul class="sortable row row-small row-5-cols" data-sortable="{warp:true}">
						<li class="row-margin">
							<div class="panel panel-box">Item 1</div>
						</li>
						<li class="row-margin">
							<div class="panel panel-box">Item 2</div>
						</li>
						<li class="row-margin">
							<div class="panel panel-box">Item 3</div>
						</li>
						<li class="row-margin">
							<div class="panel panel-box">Item 4</div>
						</li>
						<li class="row-margin">
							<div class="panel panel-box">Item 5</div>
						</li>
						<li class="row-margin">
							<div class="panel panel-box">Item 6</div>
						</li>
						<li class="row-margin">
							<div class="panel panel-box">Item 7</div>
						</li>
						<li class="row-margin">
							<div class="panel panel-box">Item 8</div>
						</li>
						<li class="row-margin">
							<div class="panel panel-box">Item 9</div>
						</li>
						<li class="row-margin">
							<div class="panel panel-box">Item 10</div>
						</li>
					</ul>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;div class="sortable" data-sortable=&quot;{warp:true}&quot;&gt;...&lt;/div&gt;</code></pre>
					<hr>
					<h2 id="javascript"><a href="#javascript-options" class="link-reset">JavaScript options</a></h2>
					<p>This is an example of how to set options through the data attribute:</p>
					<pre><code>data-sortable=&quot;{animation:0, dragCustomClass:'dragging'}&quot;</code></pre>
					<div class="overflow-container">
						<table class="table-striped text-nowrap">
							<thead>
								<tr>
									<th>Option</th>
									<th>Possible value</th>
									<th>Default</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>animation</code></td>
									<td>integer</td>
									<td>150</td>
									<td>Animation speed in ms</td>
								</tr>
								<tr>
									<td><code>threshold</code></td>
									<td>integer</td>
									<td>10</td>
									<td>Mouse movement threshold in pixel until trigger element dragging</td>
								</tr>
								<tr>
									<td><code>handleClass</code></td>
									<td>string</td>
									<td>''</td>
									<td>CSS selector to define elements which can trigger sorting</td>
								</tr>
								<tr>
									<td><code>dragCustomClass</code></td>
									<td>string</td>
									<td>''</td>
									<td>Custom class added to the dragged element</td>
								</tr>
								<tr>
									<td><code>warp</code></td>
									<td>boolean</td>
									<td>false</td>
									<td>Warp mode - alternative sort mode</td>
								</tr>
							</tbody>
						</table>
					</div>
					<h3 class="docs-article-subtitle">Init element manually</h3>
					<pre><code>var sortable = Clique.sortable(element, {
    /* options */
});</code></pre>
					<h3>Events</h3>
					<div class="overflow-container">
						<table class="table-striped text-nowrap">
							<thead>
								<tr>
									<th>Name</th>
									<th>Parameter</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>start.clique.sortable</code></td>
									<td>event, sortable object, dragged element</td>
									<td>On sortable drag start</td>
								</tr>
								<tr>
									<td><code>move.clique.sortable</code></td>
									<td>event, sortable object</td>
									<td>On sortable move item</td>
								</tr>
								<tr>
									<td><code>stop.clique.sortable</code></td>
									<td>event, sortable object, dragged element</td>
									<td>On sortable stop dragging</td>
								</tr>
								<tr>
									<td><code>change.clique.sortable</code></td>
									<td>event, sortable object, dragged element</td>
									<td>On sortable change item</td>
								</tr>
							</tbody>
						</table>
					</div>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
