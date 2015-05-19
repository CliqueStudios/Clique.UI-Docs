
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('components'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Placeholder</h1>
					<p class="article-lead" itemprop="about">Create a placeholder space that can be used for uploading files via drag and drop.</p>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>This component applies a specially styled area to create a placeholder space. Just add the <code>.placeholder</code> class to a <code>&lt;div&gt;</code> element.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="placeholder text-center"></div>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;div class="placeholder"&gt;...&lt;/div&gt;</code></pre>
					<hr>
					<h3>Large placeholder</h3>
					<p>You can also increase the height of the placeholder area by adding the <code>.placeholder-large</code> class.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="placeholder placeholder-large text-center"></div>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
