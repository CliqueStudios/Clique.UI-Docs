
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('components'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Slidenav</h1>
					<p class="article-lead" itemprop="about">Defines a navigation with previous and next buttons to browse through slideshows.</p>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>To create a navigation with previous and next buttons, just add the <code>.slidenav</code> class to <code>&lt;a&gt;</code> elements. Add the <code>.slidenav-previous</code> or <code>.slidenav-next</code> class to style the nav items as previous or next buttons.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<p>
						<a href="#" class="slidenav slidenav-previous"></a>
						<a href="#" class="slidenav slidenav-next"></a>
					</p>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;a href="#" class="slidenav slidenav-previous"&gt;&lt;/a&gt;
&lt;a href="#" class="slidenav slidenav-next"&gt;&lt;/a&gt;</code></pre>
					<hr>
					<h2 id="position-slidenav"><a href="#position-slidenav" class="link-reset">Position slidenav</a></h2>
					<p>To position the Slidenav over any content, like a slideshow or an image, just wrap the nav and content inside a container element and add the <code>.slidenav-position</code> class. That way the previous and next buttons will be centered vertically and aligned to the left and right. The Slidenav will only be visible when hovering the content.</p>
					<div class="slidenav-position display-inline-block">
						<img src="<?php echo get_image('placeholder_600x400.jpg'); ?>" width="600" height="400" alt=""><a href="#" class="slidenav slidenav-previous"></a>
						<a href="#" class="slidenav slidenav-next"></a>
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;div class="slidenav-position"&gt;
    &lt;img src="images/placeholder.svg"&gt;
    &lt;a href="#" class="slidenav slidenav-previous"&gt;&lt;/a&gt;
    &lt;a href="#" class="slidenav slidenav-next"&gt;&lt;/a&gt;
&lt;/div&gt;</code></pre>
					<hr>
					<h2 id="slidenav-and-images"><a href="#slidenav-and-images" class="link-reset">Slidenav and images</a></h2>
					<p>For better visibility on images, for example when using the Slidenav as a slideshow navigation, just add the <code>.slidenav-contrast</code> class.</p>
					<div class="slidenav-position display-inline-block">
						<img src="<?php echo get_image('placeholder_600x400.jpg'); ?>" width="600" height="400" alt=""><a href="#" class="slidenav slidenav-contrast slidenav-previous"></a>
						<a href="#" class="slidenav slidenav-contrast slidenav-next"></a>
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;a href="#" class="slidenav slidenav-contrast slidenav-previous"&gt;&lt;/a&gt;
&lt;a href="#" class="slidenav slidenav-contrast slidenav-next"&gt;&lt;/a&gt;</code></pre>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
