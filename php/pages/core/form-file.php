
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Form file</h1>
					<p class="article-lead" itemprop="about">Replace the default file input with your own HTML content, like a button.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>To apply this component, just add the <code>.form-file</code> class to a container element around a button and an <code>&lt;input type="file"&gt;</code> element. You can also use any other element instead of a button.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="margin">
						<div class="form-file">
							<button class="button">Select</button>
							<input id="form-file" type="file">
						</div>
						You can also use
						<div class="form-file text-primary">text
							<input id="form-file" type="file">
						</div>.
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;div class="form-file"&gt;
    &lt;button&gt;...&lt;/button&gt;
    &lt;input type="file"&gt;
&lt;/div&gt;

&lt;div class="form-file"&gt;Text&lt;input type="file"&gt;&lt;/div&gt;</code></pre>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
