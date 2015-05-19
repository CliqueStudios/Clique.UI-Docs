
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Overlay</h1>
					<p class="article-lead" itemprop="about">Create an image overlay, which comes in different styles.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>This component is easily applied. To create a position context, add the <code>.overlay</code> class to a container element around an image. Add the <code>.overlay-panel</code> class to a child element to create the actual overlay panel. Usually you would use a <code>&lt;figure</code> and <code>&lt;figcaption&gt;</code> element for this.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#list-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="list-tabs" class="switcher margin">
						<li>
							<div class="col-6-12-medium">
								<figure class="overlay">
									<img src="<?php echo get_image('placeholder_600x400.jpg'); ?>" width="600" height="400" alt="">
									<figcaption class="overlay-panel">
										<h3>Title</h3>
										<p>Lorem <a href="#">ipsum dolor</a> sit amet, consetetur sadipscing elitr.</p>
									</figcaption>
								</figure>
							</div>
						</li>
						<li>
							<pre><code>&lt;figure class="overlay"&gt;
	&lt;img src=""&gt;
	&lt;figcaption class="overlay-panel"&gt;
		...
	&lt;/figcaption&gt;
&lt;/figure&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="overlay-on-hover-active"><a href="#overlay-on-hover-active" class="link-reset">Toggle overlay on hover</a></h2>
					<p>By default, the overlay is always visible. To hide the overlay and display it on hover, add the <code>.overlay-hover</code> class to the overlay container.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#list-tabs1'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="list-tabs1" class="switcher margin">
						<li>
							<div class="col-6-12-medium">
								<figure class="overlay overlay-hover">
									<img src="<?php echo get_image('placeholder_600x400.jpg'); ?>" width="600" height="400" alt="">
									<figcaption class="overlay-panel overlay-fade">
										<h3>Title</h3>
										<p>Lorem <a href="#">ipsum dolor</a> sit amet, consetetur sadipscing elitr.</p>
									</figcaption>
								</figure>
							</div>
						</li>
						<li>
							<pre><code>&lt;figure class="overlay overlay-hover"&gt;
	&lt;img src=""&gt;
	&lt;figcaption class="overlay-panel overlay-fade"&gt;
		...
	&lt;/figcaption&gt;
&lt;/figure&gt;</code></pre>
						</li>
					</ul>
					<h3>Toggle on active</h3>
					<p>To toggle an overlay when its parent container is in an active state, add the <code>.overlay-active</code> class. This comes in handy, for example, in combination with the <a href="<?php echo get_url('components/slideshow'); ?>">Slideshow component</a>.</p>
					<hr>
					<h2 id="overlay-background"><a href="#overlay-background" class="link-reset">Overlay background</a></h2>
					<p>To give the overlay a background just add the <code>.overlay-background</code> class to the overlay container.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#list-tabs2'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="list-tabs2" class="switcher margin">
						<li>
							<div class="col-6-12-medium">
								<figure class="overlay">
									<img src="<?php echo get_image('placeholder_600x400.jpg'); ?>" width="600" height="400" alt="">
									<figcaption class="overlay-panel overlay-background">
										<h3>Title</h3>
										<p>Lorem <a href="#">ipsum dolor</a> sit amet, consetetur sadipscing elitr.</p>
									</figcaption>
								</figure>
							</div>
						</li>
						<li>
							<pre><code>&lt;figure class="overlay"&gt;
	&lt;img src=""&gt;
	&lt;figcaption class="overlay-panel overlay-background"&gt;
		...
	&lt;/figcaption&gt;
&lt;/figure&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="overlay-icon"><a href="#overlay-icon" class="link-reset">Overlay icon</a></h2>
					<p>It is possible to put basically any content into your overlay. But you can also add the <code>.overlay-icon</code> class to the overlay panel, so it will display an icon instead.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#list-tabs3'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="list-tabs3" class="switcher margin">
						<li>
							<div class="col-6-12-medium">
								<figure class="overlay">
									<img src="<?php echo get_image('placeholder_600x400.jpg'); ?>" width="600" height="400" alt="">
									<figcaption class="overlay-panel overlay-icon overlay-background"></figcaption>
								</figure>
							</div>
						</li>
						<li>
							<pre><code>&lt;figure class="overlay"&gt;
	&lt;img src=""&gt;
	&lt;figcaption class="overlay-panel overlay-icon overlay-background"&gt;&lt;/figcaption&gt;
&lt;/figure&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="overlay-position"><a href="#overlay-position" class="link-reset">Overlay position</a></h2>
					<p>By default, the overlay covers its entire parent container from the top left. To position and crop the overlay, add one of the following classes to the overlay panel.</p>
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
									<td><code>.overlay-top</code></td>
									<td>Add this class to align the overlay to the top.</td>
								</tr>
								<tr>
									<td><code>.overlay-bottom</code></td>
									<td>Add this class to align the overlay to the bottom.</td>
								</tr>
								<tr>
									<td><code>.overlay-left</code></td>
									<td>Add this class to align the overlay to the left.</td>
								</tr>
								<tr>
									<td><code>.overlay-right</code></td>
									<td>Add this class to align the overlay to the right.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#list-tabs4'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="list-tabs4" class="switcher margin">
						<li>
							<ul class="row" data-row-margin>
								<li class="col-6-12-medium">
									<figure class="overlay">
										<img src="<?php echo get_image('placeholder_600x400.jpg'); ?>" width="600" height="400" alt="Image">
										<figcaption class="overlay-panel overlay-background overlay-top">
											<h3>Overlay Top</h3>
											<p>Lorem ipsum dolor sit amet.</p>
										</figcaption>
									</figure>
								</li>
								<li class="col-6-12-medium">
									<figure class="overlay">
										<img src="<?php echo get_image('placeholder_600x400.jpg'); ?>" width="600" height="400" alt="Image">
										<figcaption class="overlay-panel overlay-background overlay-bottom">
											<h3>Overlay Bottom</h3>
											<p>Lorem ipsum dolor sit amet.</p>
										</figcaption>
									</figure>
								</li>
								<li class="col-6-12-medium">
									<figure class="overlay">
										<img src="<?php echo get_image('placeholder_600x400.jpg'); ?>" width="600" height="400" alt="Image">
										<figcaption class="overlay-panel overlay-background overlay-left">
											<h3>Overlay Left</h3>
											<p>Lorem ipsum dolor sit amet.</p>
										</figcaption>
									</figure>
								</li>
								<li class="col-6-12-medium">
									<figure class="overlay">
										<img src="<?php echo get_image('placeholder_600x400.jpg'); ?>" width="600" height="400" alt="Image">
										<figcaption class="overlay-panel overlay-background overlay-right">
											<h3>Overlay Right</h3>
											<p>Lorem ipsum dolor sit amet.</p>
										</figcaption>
									</figure>
								</li>
							</ul>
						</li>
						<li>
							<pre><code>&lt;figure class="overlay"&gt;
	&lt;img src=""&gt;
	&lt;figcaption class="overlay-panel overlay-background overlay-top"&gt;
		...
	&lt;/figcaption&gt;
&lt;/figure&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="overlay-transitions"><a href="#overlay-transitions" class="link-reset">Overlay transitions</a></h2>
					<p>Overlay panels and images can easily be animated. Just add one of the following classes to the overlay panel or <code>&lt;img&gt;</code> element. Note, that this only works in combination with the <code>.overlay-hover</code> or <code>.overlay-active</code> class.</p>
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
									<td><code>.overlay-slide-top</code></td>
									<td>Add this class to the overlay panel to slide it in from the top.</td>
								</tr>
								<tr>
									<td><code>.overlay-slide-bottom</code></td>
									<td>Add this class to the overlay panel to slide it in from the bottom.</td>
								</tr>
								<tr>
									<td><code>.overlay-slide-left</code></td>
									<td>Add this class to the overlay panel to slide it in from the left.</td>
								</tr>
								<tr>
									<td><code>.overlay-slide-right</code></td>
									<td>Add this class to the overlay panel to slide it in from the right.</td>
								</tr>
								<tr>
									<td><code>.overlay-fade</code></td>
									<td>Add this class to the overlay panel or image to fade it in.</td>
								</tr>
								<tr>
									<td><code>.overlay-scale</code></td>
									<td>Add this class to the image to scale it up.</td>
								</tr>
								<tr>
									<td><code>.overlay-spin</code></td>
									<td>Add this class to the image to slightly rotate it to the right.</td>
								</tr>
								<tr>
									<td><code>.overlay-grayscale</code></td>
									<td>Add this class to the image to desaturate it and color it on hover.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<p><span class="badge">NOTE</span> If you'd like to animate the image, but want the overlay panel to be visible at all times, just add the <code>.ignore</code> class to the panel. That way it will be displayed despite the <code>.overlay-hover</code> class.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#list-tabs5'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="list-tabs5" class="switcher margin">
						<li>
							<ul class="row" data-row-margin>
								<li class="col-4-12-medium">
									<figure class="overlay overlay-hover">
										<img src="<?php echo get_image('placeholder_600x400.jpg'); ?>" width="600" height="400" alt="Image">
										<figcaption class="overlay-panel overlay-background  overlay-bottom overlay-slide-bottom">
											<p>Lorem ipsum dolor sit amet.</p>
										</figcaption>
									</figure>
								</li>
								<li class="col-4-12-medium">
									<figure class="overlay overlay-hover">
										<img class="overlay-scale" src="<?php echo get_image('placeholder_600x400.jpg'); ?>" width="600" height="400" alt="Image">
										<figcaption class="overlay-panel overlay-background overlay-bottom ignore">
											<p>Lorem ipsum dolor sit amet.</p>
										</figcaption>
									</figure>
								</li>
								<li class="col-4-12-medium">
									<figure class="overlay overlay-hover">
										<img class="overlay-spin" src="<?php echo get_image('placeholder_600x400.jpg'); ?>" width="600" height="400" alt="Image">
										<figcaption class="overlay-panel overlay-background overlay-bottom overlay-slide-bottom">
											<p>Lorem ipsum dolor sit amet.</p>
										</figcaption>
									</figure>
								</li>
							</ul>
						</li>
						<li>
							<pre><code>&lt;figure class="overlay overlay-hover"&gt;
	&lt;img src=""&gt;
	&lt;figcaption class="overlay-panel overlay-background  overlay-bottom overlay-slide-bottom"&gt;
		...
	&lt;/figcaption&gt;
&lt;/figure&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="overlay-flex"><a href="#overlay-flex" class="link-reset">Overlay and flex</a></h2>
					<p>You can use the <a href="<?php echo get_url('core/flexbox'); ?>">Flex component</a> to align the overlay vertically and horizontally without cropping it.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#list-tabs6'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="list-tabs6" class="switcher margin">
						<li>
							<ul class="row" data-row-margin>
								<li class="col-6-12-medium">
									<figure class="overlay">
										<img src="<?php echo get_image('placeholder_600x400.jpg'); ?>" width="600" height="400" alt="">
										<figcaption class="overlay-panel overlay-background flex flex-center flex-middle text-center">
											<div>
												<h3>Title</h3>
												<p>Lorem <a href="#">ipsum dolor</a> sit amet, consetetur sadipscing elitr.</p>
												<button class="button-primary">Button</button>
											</div>
										</figcaption>
									</figure>
								</li>
								<li class="col-6-12-medium">
									<figure class="overlay">
										<img src="<?php echo get_image('placeholder_600x400.jpg'); ?>" width="600" height="400" alt="">
										<figcaption class="overlay-panel overlay-background flex flex-bottom">
											<div>
												<h3>Title</h3>
												<p>Lorem <a href="#">ipsum dolor</a> sit amet, consetetur sadipscing elitr.</p>
												<button class="button-primary">Button</button>
											</div>
										</figcaption>
									</figure>
								</li>
							</ul>
						</li>
						<li>
							<pre><code>&lt;figure class="overlay"&gt;
	&lt;img src=""&gt;
	&lt;figcaption class="overlay-panel overlay-background flex flex-bottom"&gt;
		&lt;h3&lt;Title&lt;/h3&lt;
		...
		&lt;button&lt;...&lt;/button&lt;
	&lt;/figcaption&gt;
&lt;/figure&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="overlay-anchor"><a href="#overlay-anchor" class="link-reset">Overlay anchor</a></h2>
					<p>To use the entire overlay as a link, just place an <code>&lt;a&gt;</code> element inside the overlay container and add the <code>.position-cover</code> class from the <a href="<?php echo get_url('core/utility'); ?>">Utility component</a>.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#list-tabs7'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="list-tabs7" class="switcher margin">
						<li>
							<li class="col-6-12-medium">
								<figure class="overlay overlay-hover">
									<img src="<?php echo get_image('placeholder_600x400.jpg'); ?>" alt="Image">
									<figcaption class="overlay-panel overlay-fade overlay-background">
										<h3>Anchor</h3>
										<p>Lorem ipsum dolor sit amet.</p>
									</figcaption>
									<a class="position-cover" href="#"></a>
								</figure>
							</li>
						</li>
						<li>
							<pre><code>&lt;figure class="overlay overlay-hover"&gt;
	&lt;img src=""&gt;
	&lt;figcaption class="overlay-panel overlay-fade overlay-background"&gt;
		...
	&lt;/figcaption&gt;
	&lt;a class="position-cover" href="#"&gt;&lt;/a&gt;
&lt;/figure&gt;</code></pre>
						</li>
					</ul>
					<p><span class="badge">NOTE</span> To display only the overlay panel as a link, just place the anchor inside the overlay panel.</p>
					<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
