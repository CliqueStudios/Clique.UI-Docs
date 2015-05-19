
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('components'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Nestable</h1>
					<p class="article-lead" itemprop="about">Create nestable lists that can be sorted by drag and drop.</p>
					<p>The Nestable allows you to sort items through drag and drop. This is great, if you want to organize different categories or menu items in administration areas, for example.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>A nestable list consists of the list itself and its items, a handle and a toggle.</p>
					<div class="overflow-container">
						<table class="table-striped text-nowrap">
							<thead>
								<tr>
									<th>Class/Data attribute</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>.nestable</code></td>
									<td>Add this class to a
										<code>&lt;ul&gt;</code> element to define the component.</td>
								</tr>
								<tr>
									<td><code>data-nestable</code></td>
									<td>To enable the necessary JavaScript, just add this data attribute.</td>
								</tr>
								<tr>
									<td><code>.nestable-item</code></td>
									<td>Add this class to a
										<code>&lt;div&gt;</code> element inside each list item.</td>
								</tr>
								<tr>
									<td><code>.nestable-handle</code></td>
									<td>This class creates the handle to enable drag and drop sorting.</td>
								</tr>
								<tr>
									<td><code>data-nestable-action="toggle"</code></td>
									<td>This data attribute allows you to hide or show nested list items.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<h3 class="docs-article-subtitle">Example</h3>
					<ul class="nestable" data-nestable>
						<li>
							<div class="nestable-item">
								<div class="nestable-handle"></div>
								<div data-nestable-action="toggle"></div> Item 1
							</div>
						</li>
						<li>
							<div class="nestable-item">
								<div class="nestable-handle"></div>
								<div data-nestable-action="toggle"></div> Item 2
							</div>
						</li>
						<li>
							<div class="nestable-item">
								<div class="nestable-handle"></div>
								<div data-nestable-action="toggle"></div> Item 3
							</div>
						</li>
					</ul>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;ul class="nestable" data-nestable&gt;
    &lt;li&gt;
        &lt;div class="nestable-item"&gt;
            &lt;div class="nestable-handle"&gt;&lt;/div&gt;
            &lt;div data-nestable-action="toggle"&gt;&lt;/div&gt;
            ...
        &lt;/div&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
					<hr>
					<h2 id="sort-multiple-lists"><a href="#sort-multiple-lists" class="link-reset">Sort multiple lists</a></h2>
					<p>To be able to sort items from one list to another, you can group them by adding the <code>data-nestable="{group:'GROUP-NAME'}"</code> attribute to each list. By default, lists without any group name are automatically in the same group.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<ul class="nestable" data-nestable="{group:'my-group'}">
						<li>
							<div class="nestable-item">
								<div class="nestable-handle"></div>
								<div data-nestable-action="toggle"></div> Item 1
							</div>
						</li>
						<li>
							<div class="nestable-item">
								<div class="nestable-handle"></div>
								<div data-nestable-action="toggle"></div> Item 2
							</div>
						</li>
						<li>
							<div class="nestable-item">
								<div class="nestable-handle"></div>
								<div data-nestable-action="toggle"></div> Item 3
							</div>
						</li>
					</ul>
					<h3>Second list</h3>
					<ul class="nestable" data-nestable="{group:'my-group'}">
						<li>
							<div class="nestable-item">
								<div class="nestable-handle"></div>
								<div data-nestable-action="toggle"></div> Item 4
							</div>
						</li>
					</ul>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;ul class="nestable" data-nestable="{group:'my-group'}"&gt;...&lt;/ul&gt;
&lt;ul class="nestable" data-nestable="{group:'my-group'}"&gt;...&lt;/ul&gt;</code></pre>
					<hr>
					<h2 id="disable-nesting"><a href="#disable-nesting" class="link-reset">Disable nesting</a></h2>
					<p>To disable nesting of list items, just add the <code>data-nestable="{maxDepth:1}"</code> attribute. You can also use this data attribute to determine to what depth nesting is possible.</p>
					<ul class="nestable" data-nestable="{maxDepth:1}">
						<li>
							<div class="nestable-item">
								<div class="nestable-handle"></div>
								<div data-nestable-action="toggle"></div> Item 1
							</div>
						</li>
						<li>
							<div class="nestable-item">
								<div class="nestable-handle"></div>
								<div data-nestable-action="toggle"></div> Item 2
							</div>
						</li>
						<li>
							<div class="nestable-item">
								<div class="nestable-handle"></div>
								<div data-nestable-action="toggle"></div> Item 3
							</div>
						</li>
					</ul>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;ul class="nestable" data-nestable="{maxDepth:1}"&gt;...&lt;/ul&gt;</code></pre>
					<hr>
					<h2 id="javascript"><a href="#javascript-options" class="link-reset">JavaScript options</a></h2>
					<p>This is an example of how to set options via attribute:</p>
					<pre><code>data-nestable=&quot;{maxDepth:0, group:'widgets'}&quot;</code></pre>
					<div class="overflow-container">
						<table class="table-striped">
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
									<td><code>group</code></td>
									<td>integer (0..6)</td>
									<td>0</td>
									<td>List group</td>
								</tr>
								<tr>
									<td><code>maxDepth</code></td>
									<td>integer</td>
									<td>10</td>
									<td>Max nesting level</td>
								</tr>
							</tbody>
						</table>
					</div>
					<h3 class="docs-article-subtitle">Init element manually</h3>
					<pre><code>var nestable = Clique.nestable(element, {
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
									<td><code>start.clique.nestable</code></td>
									<td>event, nestable object</td>
									<td>On nestable drag start</td>
								</tr>
								<tr>
									<td><code>move.clique.nestable</code></td>
									<td>event, nestable object</td>
									<td>On nestable move item</td>
								</tr>
								<tr>
									<td><code>stop.clique.nestable</code></td>
									<td>event, nestable object</td>
									<td>On nestable stop dragging</td>
								</tr>
								<tr>
									<td><code>change.clique.nestable</code></td>
									<td>event, nestable item, action</td>
									<td>On nestable change item</td>
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
