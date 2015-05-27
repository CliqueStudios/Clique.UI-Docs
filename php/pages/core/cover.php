
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Cover</h1>
					<p class="article-lead" itemprop="about">Expand images or videos to cover their entire container.</p>
					<p>This component allows you to create fullscreen teasers using images, objects or even iframes. Regardless what kind of element, it will always be centered vertically and horizontally and cover its container without losing its proportions. You can also place additional content, like text or an image, on top of the image or video.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>The Cover component is applied differently, depending on whether you are using a background image, an object or an iframe. The simplest way is to add the <code>.cover-background</code> class to a <code>&lt;div&gt;</code> element with a background image.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#cover-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="cover-tabs" class="switcher margin">
						<li>
							<div class="cover-background" style="height: 300px; background-image: url(<?php echo get_image('placeholder_600x400.jpg'); ?>);"></div>
						</li>
						<li>
							<pre><code>&lt;div class="cover-background" style="height: 300px; background-image: url('images/placeholder.svg');"&gt;
    ...
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2>Video</h2>
					<p>To create a video that covers its parent container, add the <code>.cover-object</code> class to a video. Wrap a container element around the video and add the <code>.cover</code> class to clip the content.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#cover-video-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="cover-video-tabs" class="switcher margin">
						<li>
							<div class="cover" style="height: 300px;">
								<video class="cover-object" width="600" height="400" autoplay loop muted controls>
									<source src="http://www.quirksmode.org/html5/videos/big_buck_bunny.mp4?test1" type="video/mp4">
									<source src="http://www.quirksmode.org/html5/videos/big_buck_bunny.ogv?test1" type="video/ogg">
								</video>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="cover" style="height: 300px;"&gt;
    &lt;video class="cover-object" width="600" height="400"&gt;
        &lt;source src="videos/placeholder.mp4" type="video/mp4"&gt;
        &lt;source src="videos/placeholder.ogv" type="video/ogv"&gt;
    &lt;/video&gt;
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2>Iframe</h2>
					<p>To apply the Cover component to an iframe, you first need to include the <code>cover.js</code> file in your document. Afterwards, add the <code>data-cover</code> attribute to the iframe. Now you only need to add the <code>.cover</code> class to a container element around the iframe to clip the content.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#cover-iframe-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="cover-iframe-tabs" class="switcher margin">
						<li>
							<div class="cover" style="height: 300px;">
								<iframe data-cover src="http://www.youtube.com/embed/YE7VzlLtp-4?autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;loop=1&amp;modestbranding=1&amp;wmode=transparent" width="560" height="315" frameborder="0" allowfullscreen=""></iframe>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="cover" style="height: 300px;"&gt;
    &lt;iframe data-cover src="images/placeholder.svg" width="600" height="400" frameborder="0" allowfullscreen&gt;&lt;/iframe&gt;
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2>Responsive</h2>
					<p>To add responsive behavior to your cover image, you need to add the <code>.invisible</code> class to an <code>&lt;img&gt;</code> element and place it inside your cover element. That way it will adapt the responsive behavior of the image.</p>
					<p><span class="badge">NOTE</span> Adding the <code>.height-viewport</code> class from the <a href="<?php echo get_url('core/utility'); ?>">Utility component</a> will stretch the height of the parent element to fill the whole viewport.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#cover-responsive-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="cover-responsive-tabs" class="switcher margin">
						<li>
							<div class="cover-background" style="background-image: url(<?php echo get_image('placeholder_600x400.jpg'); ?>);">
								<img class="invisible" src="<?php echo get_image('placeholder_600x400.jpg'); ?>" width="600" height="400" alt="Placeholder">
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="cover-background"&gt;
    &lt;img class="invisible" src="images/placeholder.svg" width="600" height="400"&gt;
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3>Video</h3>
					<p>To add the same behavior to a video, you also need to add the <code>.position-relative</code> class to the cover container and the <code>.position-absolute</code> class to the cover object. The same applies to iframes.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#cover-video2-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="cover-video2-tabs" class="switcher margin">
						<li>
							<div class="cover position-relative">
								<img class="invisible" src="<?php echo get_image('placeholder_600x400.jpg'); ?>" width="600" height="400" alt="">
								<video class="cover-object position-absolute" width="600" height="400" autoplay loop muted controls>
									<source src="http://www.quirksmode.org/html5/videos/big_buck_bunny.mp4?test2" type="video/mp4">
									<source src="http://www.quirksmode.org/html5/videos/big_buck_bunny.ogv?test2" type="video/ogg">
								</video>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="cover position-relative"&gt;
    &lt;img class="invisible" src="images/placeholder.svg" width="600" height="400"&gt;
    &lt;video class="cover-object position-absolute" width="600" height="400"&gt;
        &lt;source src="videos/placeholder.mp4" type="video/mp4"&gt;
        &lt;source src="videos/placeholder.ogv" type="video/ogv"&gt;
    &lt;/video&gt;
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2>Position content</h2>
					<p>You can also position content absolutely on top of the covering element. To do so, just add the <code>.position-cover</code> class from the <a href="<?php echo get_url('core/utility'); ?>">Utility component</a> to a container element after your image or video. If you want to center the content vertically and horizontally, just use the <a href="<?php echo get_url('core/flexbox'); ?>">Flex component</a>.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#cover-position-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="cover-position-tabs" class="switcher margin">
						<li>
							<div class="cover-background position-relative" style="height: 300px; background-image: url(<?php echo get_image('placeholder_600x400.jpg'); ?>);">
								<img class="invisible" src="<?php echo get_image('placeholder_600x400.jpg'); ?>" width="600" height="400" alt="">
								<div class="position-cover flex flex-center flex-middle">
									<div style="background: rgba(42, 142, 183, 0.8); font-size: 50px; line-height: 75px; color: #fff;">World!</div>
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="cover-background position-relative" style="height: 300px; background-image: url(images/placeholder.svg);"&gt;
    &lt;img class="invisible" src="images/placeholder.svg" width="600" height="400"&gt;
    &lt;div class="position-cover flex-center flex-middle"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
						</li>
					</ul>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
