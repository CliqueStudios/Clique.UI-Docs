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