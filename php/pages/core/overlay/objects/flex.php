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
												<button class="button button-primary">Button</button>
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
												<button class="button button-primary">Button</button>
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