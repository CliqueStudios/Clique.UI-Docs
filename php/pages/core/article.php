
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Article</h1>
					<p class="article-lead" itemprop="about">Create articles within your page.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>The article component constists of the article itself, a title, meta data, and an opening paragraph.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#article-tabs'}">
								<li><a href="#">Classes</a></li>
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="article-tabs" class="switcher margin">
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
											<td><code>.article</code></td>
											<td>Add this class to define the Article component. Typically you would use an <code>&lt;article&gt;</code> element for this.</td>
										</tr>
										<tr>
											<td><code>.article-title</code></td>
											<td>Add this class to a heading to create an article title. Typically you would use a <code>&lt;h1&gt;</code> element for this.</td>
										</tr>
										<tr>
											<td><code>.article-meta</code></td>
											<td>Add this class to a paragraph which contains meta data about your article.</td>
										</tr>
										<tr>
											<td><code>.article-lead</code></td>
											<td>Add this class to the opening paragraph of your article to highlight it.</td>
										</tr>
									</tbody>
								</table>
							</div>
						</li>
						<li>
							<div class="article">
								<h1 class="article-title" itemprop="headline">Article title</h1>
								<p class="article-meta">Written by Blog Author on <?php echo date('F j, Y'); ?>.</p>
								<p class="article-lead" itemprop="about">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate dolore et, expedita. A harum, laboriosam quasi porro, aliquid placeat pariatur fuga, sed quaerat, molestias natus.</p>
								<hr>
								<a href="#">Read more</a>
							</div>
						</li>
						<li>
							<pre><code>&lt;article class="article"&gt;
    &lt;h1 class="article-title"&gt;...&lt;/h1&gt;
    &lt;p class="article-meta"&gt;...&lt;/p&gt;
    &lt;p class="article-lead"&gt;...&lt;/p&gt;
    ...
&lt;/article&gt;</code></pre>
						</li>
					</ul>
					<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
