
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Breadcrumb</h1>
					<p class="article-lead" itemprop="about">Create breadcrumbs to show users their location within a website.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>The Breadcrumb component consists of links which are aligned side by side and separated by a divider.</p>
					<p>Use a <code>&lt;span&gt;</code> instead of an <code>&lt;a&gt;</code> element to disable a breadcrumb item.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#breadcrumbs-tabs'}">
								<li><a href="#">Classes</a></li>
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="breadcrumbs-tabs" class="switcher margin">
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
											<td><code>.breadcrumb</code></td>
											<td>Add this class to a <code>&lt;ul&gt;</code> element to define the Breadcrumb component. Use <code>&lt;a&gt;</code> elements as breadcrumb items within the list.</td>
										</tr>
										<tr>
											<td><code>.active</code></td>
											<td>Add this class to a list item to apply an active state and use a <code>&lt;span&gt;</code> instead of an <code>&lt;a&gt;</code> element.</td>
										</tr>
									</tbody>
								</table>
							</div>
						</li>
						<li>
							<ul class="breadcrumb">
								<li><a href="#">Home</a></li>
								<li><a href="#">Blog</a></li>
								<li><span>Category</span></li>
								<li class="active"><span>Post</span></li>
							</ul>
						</li>
						<li>
							<pre><code>&lt;ul class="breadcrumb"&gt;
    &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;span&gt;...&lt;/span&gt;&lt;/li&gt;
    &lt;li class="active">&lt;span&gt;...&lt;/span&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
						</li>
					</ul>
					<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
