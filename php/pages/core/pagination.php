
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>

			<?php get_sidebar('core'); ?>

			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Pagination</h1>
					<p class="article-lead" itemprop="about">Easlily create a nicely looking pagination to navigate through pages.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>The Pagination component consists of button-like styled links, that are aligned side by side.</p>
					<p>To apply an ellipsis without any styling, just use a <code>&lt;span&gt;</code> element instead of an <code>&lt;a&gt;</code> element.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#pagination-tabs'}">
								<li><a href="#">Classes</a></li>
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="pagination-tabs" class="switcher margin">
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
											<td><code>.pagination</code></td>
											<td>Add this class to a <code>&lt;ul&gt;</code> element to define the Pagination component. Use <code>&lt;a&gt;</code> elements as pagination items within the list.</td>
										</tr>
										<tr>
											<td><code>.active</code></td>
											<td>Add this class to a list item to apply an active state and use a <code>&lt;span&gt;</code> instead of an <code>&lt;a&gt;</code> element.</td>
										</tr>
										<tr>
											<td><code>.disabled</code></td>
											<td>Add this class to a list item to apply a disabled state and use a <code>&lt;span&gt;</code> instead of an <code>&lt;a&gt;</code> element.</td>
										</tr>
									</tbody>
								</table>
							</div>
						</li>
						<li>
							<ul class="pagination">
								<li class="disabled">
									<span>
										<i class="icon-chevron-left"></i>
									</span>
								</li>
								<li class="active">
									<span>1</span>
								</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li>
									<span>...</span>
								</li>
								<li><a href="#">20</a></li>
								<li>
									<a href="#">
										<i class="icon-chevron-right"></i>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<pre><code>&lt;ul class="pagination"&gt;
    &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
    &lt;li class="active"&gt;
        &lt;span&gt;...&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class="disabled"&gt;
        &lt;span&gt;...&lt;/span&gt;
    &lt;/li&gt;
    &lt;li&gt;
        &lt;span&gt;...&lt;/span&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
					</ul>
					<hr>
					<h2 id="alignment-modifiers"><a href="#alignment-modifiers" class="link-reset">Alignment modifiers</a></h2>
					<p>Add the <code>.pagination-left</code> or <code>.pagination-right</code> class to the pagination to align it left or right.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#pagination1-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="pagination1-tabs" class="switcher margin">
						<li>
							<div class="row" data-row-margin>
								<div class="col-6-12-medium">
									<ul class="pagination pagination-left">
										<li><a href="#">1</a></li>
										<li>
											<span>...</span>
										</li>
										<li><a href="#">8</a></li>
										<li><a href="#">9</a></li>
										<li class="active">
											<span>10</span>
										</li>
										<li><a href="#">11</a></li>
										<li><a href="#">12</a></li>
										<li>
											<span>...</span>
										</li>
										<li><a href="#">20</a></li>
									</ul>
								</div>
								<div class="col-6-12-medium">
									<ul class="pagination pagination-right">
										<li><a href="#">1</a></li>
										<li>
											<span>...</span>
										</li>
										<li><a href="#">8</a></li>
										<li><a href="#">9</a></li>
										<li class="active">
											<span>10</span>
										</li>
										<li><a href="#">11</a></li>
										<li><a href="#">12</a></li>
										<li>
											<span>...</span>
										</li>
										<li><a href="#">20</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li>
							<div class="row" data-row-margin>
						<div class="col-6-12-medium">
							<pre><code>&lt;ul class="pagination pagination-left"&gt;
    &lt;li&gt;...&lt;/li&gt;
&lt;/ul&gt;</code></pre>
						</div>
						<div class="col-6-12-medium">
							<pre><code>&lt;ul class="pagination pagination-right"&gt;
    &lt;li&gt;...&lt;/li&gt;
&lt;/ul&gt;</code></pre>
						</div>
					</div>
					</ul>
					<hr>
					<h2 id="previous-and-next"><a href="#previous-and-next" class="link-reset">Previous and next</a></h2>
					<p>Creating a simple previous and next pagination is very easy. Just add the <code>.pagination-previous</code> or <code>.pagination-next</code> class to a <code>&lt;li&gt;</code> element to align previous and next buttons left or right.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#pagination2-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="pagination2-tabs" class="switcher margin">
						<li>
							<ul class="pagination">
								<li class="pagination-previous">
									<a href="#">
										<i class="icon-chevron-left"></i> Previous
									</a>
								</li>
								<li class="pagination-next">
									<a href="#">Next
										<i class="icon-chevron-right"></i>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<pre><code>&lt;li class="pagination-previous"&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
&lt;li class="pagination-next"&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="pagination-with-icons"><a href="#pagination-with-icons" class="link-reset">Pagination with icons</a></h2>
					<p>Enhance your pagination with icons from the <a href="<?php echo get_url('core/icon'); ?>">Icon component</a> by adding one of the <code>.icon-*</code> classes to an <code>&lt;i&gt;</code> or <code>&lt;span&gt;</code> element within a pagination link.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#pagination3-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="pagination3-tabs" class="switcher margin">
						<li>
							<ul class="pagination">
								<li>
									<a href="#">
										<i class="icon-chevron-left"></i>
									</a>
								</li>
								<li class="active">
									<span>
										<i class="icon-chevron-left"></i>
									</span>
								</li>
								<li class="disabled">
									<span>
										<i class="icon-chevron-left"></i>
									</span>
								</li>
								<li>
									<span>...</span>
								</li>
								<li class="disabled">
									<span>
										<i class="icon-chevron-right"></i>
									</span>
								</li>
								<li class="active">
									<span>
										<i class="icon-chevron-right"></i>
									</span>
								</li>
								<li>
									<a href="#">
										<i class="icon-chevron-right"></i>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<pre><code>&lt;li&gt;&lt;a href="#"&gt;&lt;i class="icon-chevron-left">&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href="#"&gt;&lt;i class="icon-chevron-right">&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="javascript"><a href="#javascript" class="link-reset">JavaScript</a></h2>
					<p>You can apply the additional <a href="<?php echo get_url('components/pagination-js'); ?>">Dynamic Pagination component</a> to automatically calculate the pages, for example to trigger an event to load new items dynamically in Ajax powered list views.</p>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
