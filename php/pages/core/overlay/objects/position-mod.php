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