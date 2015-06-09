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