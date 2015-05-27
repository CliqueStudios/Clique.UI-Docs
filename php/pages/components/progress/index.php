
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('components'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Progress</h1>
					<p class="article-lead" itemprop="about">Defines different styles for progress bars.</p>
					<hr>
						<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>The progress bar consists of a background bar and the progress bar itself, indicating the increase.</p>
					<div class="overflow-container">
						<table class="table-striped text-nowrap">
							<thead>
								<tr>
									<th>Class</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>.progress</code></td>
									<td>This class is used on the parent container to create the background of the progress bar.</td>
								</tr>
								<tr>
									<td><code>.progress-bar</code></td>
									<td>This class needs to be added to the child element to create the actual progress bar.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="progress">
						<div class="progress-bar" style="width: 40%;">40%</div>
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;div class="progress"&gt;
    &lt;div class="progress-bar" style="width: 40%;"&gt;40%&lt;/div&gt;
&lt;/div&gt;</code></pre>
					<hr>
					<h2 id="size-modifiers"><a href="#size-modifiers" class="link-reset">Size modifiers</a></h2>
					<p>Add the <code>.progress-mini</code> or <code>.progress-small</code> class to change the size of the bar.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="progress progress-mini">
						<div class="progress-bar" style="width: 50%;"></div>
					</div>
					<div class="progress progress-small">
						<div class="progress-bar" style="width: 55%;"></div>
					</div>
					<div class="progress">
						<div class="progress-bar" style="width: 60%;"></div>
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;div class="progress progress-mini"&gt;...&lt;/div&gt;
&lt;div class="progress progress-small"&gt;...&lt;/div&gt;</code></pre>
					<hr>
					<h2 id="color-modifiers"><a href="#color-modifiers" class="link-reset">Color modifiers</a></h2>
					<p>To apply different colors to your progress bars, just add the <code>.progress-bar-success</code>, <code>.progress-bar-warning</code> or <code>.progress-bar-danger</code> class.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="progress">
						<div class="progress-bar progress-bar-success" style="width: 75%;"></div>
					</div>
					<div class="progress">
						<div class="progress-bar progress-bar-warning" style="width: 55%;"></div>
					</div>
					<div class="progress">
						<div class="progress-bar progress-bar-danger" style="width: 35%;"></div>
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;div class="progress progress-success"&gt;...&lt;/div&gt;
&lt;div class="progress progress-warning"&gt;...&lt;/div&gt;
&lt;div class="progress progress-danger"&gt;...&lt;/div&gt;</code></pre>
					<hr>
					<h3>Striped</h3>
					<p>To create a striped progress bar, use the <code>.striped</code> class.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="progress">
						<div class="progress-bar progress-bar-striped" style="width: 65%;"></div>
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;div class="progress progress-striped"&gt;...&lt;/div&gt;</code></pre>
					<p>You can even animate the striped bar. To do so, just add the <code>.active</code> class.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="progress active">
						<div class="progress-bar progress-bar-striped active" style="width: 85%;"></div>
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;div class="progress progress-striped active"&gt;...&lt;/div&gt;</code></pre>
					<hr>
					<h3>Combinable</h3>
					<p>All modifiers of the Progress component can be combined with each other.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="progress progress-small progress-danger progress-striped active">
						<div class="progress-bar" style="width: 55%;"></div>
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;div class="progress progress-small progress-danger progress-striped active"&gt;...&lt;/div&gt;</code></pre>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
