
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('components'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Dynamic Grid</h1>
					<p class="article-lead" itemprop="about">Create a multi-column, dynamic grid layout whose items can be sorted and filtered.</p>
					<p>The Dynamic Grid component allows you to create a dynamic and responsive grid layout utilizing the <a href="<?php echo get_url('core/grid'); ?>">Grid component</a>. Grid items will arrange themselves fluently and seamlessly for a gap-free multi-column layout on all device sizes.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>To apply this component, add the <code>data-grid</code> attribute to the container element. Set the width of the grid items by using the <code>col-*</code> or <code>.row-col-*</code> classes from the <a href="<?php echo get_url('core/grid'); ?>">Grid component</a>.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="row-2-cols-small row-3-cols-medium row-4-cols-large docs-row-colors docs-grid-heights" data-grid>
						<div>
							<div class="panel">1</div>
						</div>
						<div>
							<div class="panel">2</div>
						</div>
						<div>
							<div class="panel">3</div>
						</div>
						<div>
							<div class="panel">4</div>
						</div>
						<div>
							<div class="panel">5</div>
						</div>
						<div>
							<div class="panel">6</div>
						</div>
						<div>
							<div class="panel">7</div>
						</div>
						<div>
							<div class="panel">8</div>
						</div>
					</div>
						<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
							<div class="col">
								<h3>Markup</h3>
							</div>
							<div class="col">
								<ul class="tab" data-switcher="{connect:'.grid-one'}">
									<li class="active"><a href="#">data-*</a></li>
									<li><a href="#">jQuery</a></li>
								</ul>
							</div>
						</div>
						<ul class="switcher grid-one">
							<li>
								<pre><code>&lt;!-- This is a grid using col-* on each item --&gt;
&lt;div data-grid&gt;
    &lt;div class="col-6-12-small col-3-12-medium"&gt;...&lt;/div&gt;
    &lt;div class="col-6-12-small col-3-12-medium"&gt;...&lt;/div&gt;
&lt;/div&gt;

&lt;!-- This is a grid using row-col-* on the grid itself --&gt;
&lt;div class="row-2-cols-small row-4-cols-medium" data-grid&gt;
    &lt;div&gt;...&lt;/div&gt;
    &lt;div&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
							</li>
							<li>
								<pre><code>&lt;!-- This is a something else --&gt;
&lt;div data-grid&gt;
    &lt;div class="col-6-12-small col-3-12-medium"&gt;...&lt;/div&gt;
    &lt;div class="col-6-12-small col-3-12-medium"&gt;...&lt;/div&gt;
&lt;/div&gt;

&lt;!-- This is a grid using row-col-* on the grid itself --&gt;
&lt;div class="row-2-cols-small row-4-cols-medium" data-grid&gt;
    &lt;div&gt;...&lt;/div&gt;
    &lt;div&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
							</li>
						</ul>
					<hr>
					<h3 id="grid-gutter"><a href="#grid-gutter" class="link-reset">Grid Gutter</a>
					</h3>
					<p>Divide grid items with a gutter by adding the <code>{gutter: 20}</code> option to the data attribute. In this case the gutter will be 20px wide.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="row-2-cols-small row-3-cols-medium row-4-cols-large docs-grid-heights" data-grid="{gutter: 20}">
						<div>
							<div class="panel-box">1</div>
						</div>
						<div>
							<div class="panel-box">2</div>
						</div>
						<div>
							<div class="panel-box">3</div>
						</div>
						<div>
							<div class="panel-box">4</div>
						</div>
						<div>
							<div class="panel-box">5</div>
						</div>
						<div>
							<div class="panel-box">6</div>
						</div>
						<div>
							<div class="panel-box">7</div>
						</div>
						<div>
							<div class="panel-box">8</div>
						</div>
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;div data-grid="{gutter: 20}"&gt;...&lt;/div&gt;</code></pre>
					<hr>
					<h2 id="filtering"><a href="#filtering" class="link-reset">Filtering</a></h2>
					<p>You can also filter your grid so that only particular items will be displayed. To do so, add the <code>{controls: '#my-id'}</code> option to the data-attribute to target the id for the filter controls. Each control needs to have the <code>data-filter</code> attribute to define the category you want to filter. Then you also need to add the <code>data-filter</code> attribute to each grid item to define what category the item belongs to.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<ul id="filter" class="subnav subnav-pill">
						<li class="active" data-filter=""><a href="#">All</a></li>
						<li data-filter="filter-a"><a href="#">Filter A</a></li>
						<li data-filter="filter-b"><a href="#">Filter B</a></li>
					</ul>
					<div class="row-2-cols-small row-3-cols-medium row-4-cols-large docs-grid-heights" data-grid="{gutter: 20, controls: '#filter'}">
						<div data-filter="filter-a">
							<div class="panel-box">A 1</div>
						</div>
						<div data-filter="filter-b">
							<div class="panel-box">B 2</div>
						</div>
						<div data-filter="filter-a">
							<div class="panel-box">A 3</div>
						</div>
						<div data-filter="filter-b">
							<div class="panel-box">B 4</div>
						</div>
						<div data-filter="filter-b">
							<div class="panel-box">B 5</div>
						</div>
						<div data-filter="filter-a">
							<div class="panel-box">A 6</div>
						</div>
						<div data-filter="filter-b">
							<div class="panel-box">B 7</div>
						</div>
						<div data-filter="filter-a">
							<div class="panel-box">A 8</div>
						</div>
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
					<p>This example is using a
						<a href="sub<?php echo get_url('core/nav'); ?>">Subnav</a> to filter the items.</p>
					<pre><code>&lt;!-- Filter Controls --&gt;
&lt;ul id="my-id" class="subnav"&gt;
    &lt;li data-filter=""&gt;&lt;a href="#"&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;li data-filter="filter-a"&gt;&lt;a href="#"&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;li data-filter="filter-b"&gt;&lt;a href="#"&gt;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;

&lt;!-- Dynamic Grid --&gt;
&lt;div data-grid="{controls: '#my-id'}"&gt;
    &lt;div data-filter="filter-a"&gt;...&lt;/div&gt;
    &lt;div data-filter="filter-b"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
					<hr>
					<h2 id="sorting"><a href="#sorting" class="link-reset">Sorting</a></h2>
					<p>To sort grid items ascendingly, add the <code>{controls: '#my-id'}</code> option to the data-attribute to target the id for the sorting controls.</p>
					<p>Each control needs to have the <code>data-sort</code> attribute with a custom value that targets the category you want to be sorted, for example <code>data-sort="my-category"</code>. You also need to add a data attribute to each grid item, using your target category's name. The value contains the data which should be sorted, for example <code>data-my-category="my-data"</code>.</p>
					<p>Items are sorted ascendingly by default. To sort the items descendingly just add <code>:desc</code> to the value of the controls' data attribute, for example <code>data-sort="my-category:desc"</code>.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<ul id="sort1" class="subnav subnav-pill">
						<li class="active" data-sort="my-category"><a href="#">Ascending</a></li>
						<li data-sort="my-category:desc"><a href="#">Descending</a></li>
					</ul>
					<div class="row-2-cols-small row-3-cols-medium row-4-cols-large docs-grid-heights" data-grid="{gutter: 20, controls: '#sort1'}">
						<div data-my-category="a">
							<div class="panel-box">A</div>
						</div>
						<div data-my-category="b">
							<div class="panel-box">B</div>
						</div>
						<div data-my-category="c">
							<div class="panel-box">C</div>
						</div>
						<div data-my-category="d">
							<div class="panel-box">D</div>
						</div>
						<div data-my-category="e">
							<div class="panel-box">E</div>
						</div>
						<div data-my-category="f">
							<div class="panel-box">F</div>
						</div>
						<div data-my-category="g">
							<div class="panel-box">G</div>
						</div>
						<div data-my-category="h">
							<div class="panel-box">H</div>
						</div>
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;ul id="my-id" class="subnav"&gt;
    &lt;li data-sort="my-category"&gt;&lt;a href="#"&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;li data-sort="my-category:desc"&gt;&lt;a href="#"&gt;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;

&lt;div data-grid="{controls: '#my-id'}"&gt;
    &lt;div data-my-category="a"&gt;...&lt;/div&gt;
    &lt;div data-my-category="b"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
					<hr>
					<h3>Multiple categories</h3>
					<p>To use more than one category to sort grid items, use a different name for each category.</p>
					<ul id="sort2" class="subnav subnav-pill">
						<li class="active" data-sort="my-category"><a href="#">Character (Asc)</a></li>
						<li data-sort="my-category:desc"><a href="#">Character (Desc)</a></li>
						<li data-sort="my-category2"><a href="#">Number (Asc)</a></li>
						<li data-sort="my-category2:desc"><a href="#">Number (Desc)</a></li>
					</ul>
					<div class="row-2-cols-small row-3-cols-medium row-4-cols-large docs-grid-heights" data-grid="{gutter: 20, controls: '#sort2'}">
						<div data-my-category="a" data-my-category2="8">
							<div class="panel-box">A 8</div>
						</div>
						<div data-my-category="b" data-my-category2="7">
							<div class="panel-box">B 7</div>
						</div>
						<div data-my-category="c" data-my-category2="6">
							<div class="panel-box">C 6</div>
						</div>
						<div data-my-category="d" data-my-category2="1">
							<div class="panel-box">D 1</div>
						</div>
						<div data-my-category="e" data-my-category2="5">
							<div class="panel-box">E 5</div>
						</div>
						<div data-my-category="f" data-my-category2="3">
							<div class="panel-box">F 3</div>
						</div>
						<div data-my-category="g" data-my-category2="2">
							<div class="panel-box">G 2</div>
						</div>
						<div data-my-category="h" data-my-category2="4">
							<div class="panel-box">H 4</div>
						</div>
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;ul id="my-id" class="subnav"&gt;
    &lt;li data-sort="my-category"&gt;&lt;a href="#"&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;li data-sort="my-category:desc"&gt;&lt;a href="#"&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;li data-sort="my-category2"&gt;&lt;a href="#"&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;li data-sort="my-category2:desc"&gt;&lt;a href="#"&gt;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;

&lt;div data-grid="{controls: '#my-id'}"&gt;
    &lt;div data-my-category="a" data-my-category2="8"&gt;...&lt;/div&gt;
    &lt;div data-my-category="b" data-my-category2="7"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
					<hr>
					<h2 id="javascript"><a href="#javascript-options" class="link-reset">JavaScript options</a></h2>
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
									<td><code>colwidth</code></td>
									<td>integer</td>
									<td>auto</td>
									<td>Columns width</td>
								</tr>
								<tr>
									<td><code>animation</code></td>
									<td>boolean</td>
									<td>true</td>
									<td>Animate columns on update</td>
								</tr>
								<tr>
									<td><code>duration</code></td>
									<td>integer</td>
									<td>200</td>
									<td>Animation duration</td>
								</tr>
								<tr>
									<td><code>gutter</code></td>
									<td>integer</td>
									<td>0</td>
									<td>Gutter between columns</td>
								</tr>
								<tr>
									<td><code>controls</code></td>
									<td>string</td>
									<td>false</td>
									<td>CSS selector to connect filter / order controls.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<h3 class="docs-article-subtitle">Init element manually</h3>
					<pre><code class="javascript">var grid = Clique.row(element, {
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
									<td><code>beforeupdate.clique.row</code></td>
									<td>event, children</td>
									<td>On before update grid</td>
								</tr>
								<tr>
									<td><code>afterupdate.clique.row</code></td>
									<td>event, children</td>
									<td>On after update grid</td>
								</tr>
							</tbody>
						</table>
					</div>
					<h3 class="docs-article-subtitle">Example</h3>
					<p>Listening for beforeupdate events with jQuery:</p>
					<pre><code class="javascript">$(function() {
    $('[data-grid]').on('beforeupdate.clique.row', function(e, children) {
        // your event-handling goes here
    });
});</code></pre>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
