
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">File Upload</h1>
					<p class="article-lead" itemprop="about">Replace the default file input with your own HTML content, like a button.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>To apply this component, just add the <code>.form-file</code> class to a container element around a button and an <code>&lt;input type="file"&gt;</code> element. You can also use any other element instead of a button.</p>

					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#form-file-tabs'}">
								<li><a href="#">Classes</a></li>
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="form-file-tabs" class="switcher margin">
						<li>
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
											<td><code>.form-file</code></td>
											<td>Applies the necessary style to the container and child text and <code>&lt;button&gt;</code>, and <code>&lt;input&gt;</code> elements.</td>
										</tr>
									</tbody>
								</table>
							</div>
						</li>
						<li>
							<div class="form-file">
								<button class="button">Select</button>
								<input id="form-file" type="file">
							</div>
							You can also use
							<div class="form-file text-primary">text
								<input id="form-file" type="file">
							</div>.
						</li>
						<li>
							<pre><code>&lt;div class="form-file"&gt;
    &lt;button&gt;...&lt;/button&gt;
    &lt;input type="file"&gt;
&lt;/div&gt;

&lt;div class="form-file"&gt;Text&lt;input type="file"&gt;&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
