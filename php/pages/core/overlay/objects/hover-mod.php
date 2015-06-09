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