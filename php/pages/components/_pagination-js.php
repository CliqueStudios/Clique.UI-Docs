
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('components'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Dynamic Pagination</h1>
					<p class="article-lead" itemprop="about">Create JavaScript based paginations utilizing the <a href="<?php echo get_url('core/pagination'); ?>">Pagination component</a>.</p>
					<p>The Dynamic Pagination component will automatically calculate the pages depending on the given options. This is useful e.g. for Ajax powered list views, where you need to trigger an event to load new items dynamically.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>To apply this component, just add the <code>data-pagination</code> attribute to a <code>&lt;ul&gt;</code> element with the <code>.pagination</code> class.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<ul class="pagination" data-pagination="{items:1000, itemsOnPage:10, currentPage:50}"></ul>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;ul class="pagination" data-pagination="{items:100, itemsOnPage:10}"&gt;&lt;/ul&gt;</code></pre>
					<hr>
					<h2 id="javascript"><a href="#javascript-options" class="link-reset">JavaScript options</a></h2>
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
									<td><code>items</code></td>
									<td>integer</td>
									<td>1</td>
									<td>Total number of items that will be used to calculate the pages.</td>
								</tr>
								<tr>
									<td><code>itemsOnPage</code></td>
									<td>integer</td>
									<td>1</td>
									<td>Number of items displayed on each page.</td>
								</tr>
								<tr>
									<td><code>pages</code></td>
									<td>integer</td>
									<td>0</td>
									<td>If specified,
										<strong>items</strong> and
										<strong>itemsOnPage</strong> will not be used to calculate the number of pages</td>
								</tr>
								<tr>
									<td><code>displayedPages</code></td>
									<td>integer</td>
									<td>3</td>
									<td>How many page numbers should be visible while navigating.</td>
								</tr>
								<tr>
									<td><code>edges</code></td>
									<td>integer</td>
									<td>3</td>
									<td>How many page numbers are visible at the beginning/ending of the pagination.</td>
								</tr>
								<tr>
									<td><code>currentPage</code></td>
									<td>integer</td>
									<td>1</td>
									<td>Which page will be selected immediately after init.</td>
								</tr>
							</tbody>
						</table>
					</div>
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
									<td><code>select.clique.pagination</code></td>
									<td>event, pageIndex, pagination object</td>
									<td>On page click</td>
								</tr>
							</tbody>
						</table>
					</div>
					<p> The pagination component triggers an <code>select-page</code> event every time you click on a page. </p>
					<pre><code>$('[data-pagination]').on('select.clique.pagination', function(e, pageIndex){
    alert('You have selected page: ' + (pageIndex+1));
});</code></pre>
					<h3 class="docs-article-subtitle">Init element manually</h3>
					<pre><code>var pagination = Clique.pagination(element, {
    /* options */
});</code></pre>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
