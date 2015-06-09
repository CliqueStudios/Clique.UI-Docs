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