
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('components'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Dotnav</h1>
					<p class="article-lead" itemprop="about">Create a dot navigation with a horizontal or vertical layout to navigate through slideshows or to scroll to different page sections.</p>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>To create a navigation with dots, just add the <code>.dotnav</code> class to an <code>&lt;ul&gt;</code> element and nest <code>&lt;a&gt;</code> elements within the list. This is perfect to create a typical slideshow navigation. This component is built with Flexbox. So to align a dotnav, you can use <a href="<?php echo get_url('core/flexbox'); ?>">Flex component</a>.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<ul class="dotnav">
						<li class="active"><a href="#">Item 1</a></li>
						<li><a href="#">Item 2</a></li>
						<li><a href="#">Item 3</a></li>
						<li><a href="#">Item 4</a></li>
						<li><a href="#">Item 5</a></li>
						<li><a href="#">Item 6</a></li>
					</ul>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;ul class="dotnav"&gt;
    &lt;li class="active"&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
					<hr>
					<h2 id="slidenav-and-images"><a href="#slidenav-and-images" class="link-reset">Dotnav and images</a></h2>
					<p>For better visibility on images, for example when using the Dotnav as a slideshow navigation, just add the <code>.dotnav-contrast</code> class.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="position-relative col-8-12-medium">
						<img src="<?php echo get_image('placeholder_600x400.jpg'); ?>" width="600" height="400" alt="">
						<ul class="dotnav dotnav-contrast position-bottom flex-center">
							<li class="active">
								<a href="#">Item 1</a>
							</li>
							<li>
								<a href="#">Item 2</a>
							</li>
							<li>
								<a href="#">Item 3</a>
							</li>
							<li>
								<a href="#">Item 4</a>
							</li>
							<li>
								<a href="#">Item 5</a>
							</li>
							<li>
								<a href="#">Item 6</a>
							</li>
						</ul>
					</div>
					<p><span class="badge">NOTE</span> In this example we also applied the <code>.flex-center</code> class from the <a href="<?php echo get_url('core/flexbox'); ?>">Flex component</a> to center the dotnav.</p>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;ul class="dotnav dotnav-contrast flex-center"&gt;
    &lt;li class="active"&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
					<hr>
					<h2 id="vertical-dotnav"><a href="#vertical-dotnav" class="link-reset">Vertical dotnav</a></h2>
					<p>The Dotnav can also be aligned vertically. Just add the <code>.flex-column</code> class. This is great for page scroll navigation using the <a href="<?php echo get_url('core/scrollspy'); ?>">Scrollspy component</a>.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<ul class="dotnav flex-column">
						<li class="active"><a href="#">Item 1</a></li>
						<li><a href="#">Item 2</a></li>
						<li><a href="#">Item 3</a></li>
						<li><a href="#">Item 4</a></li>
						<li><a href="#">Item 5</a></li>
						<li><a href="#">Item 6</a></li>
					</ul>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;ul class="dotnav flex-column"&gt;
    &lt;li class="active"&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
