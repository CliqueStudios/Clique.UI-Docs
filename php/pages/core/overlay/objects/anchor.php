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