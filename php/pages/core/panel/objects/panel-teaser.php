<hr>
					<h2 id="panel-box-with-teaser"><a href="#panel-box-with-teaser" class="link-reset">Panel box with teaser</a></h2>
					<p>To display an image inside a panel box that is attached to the border of the panel without any spacing, just add the <code>.panel-teaser</code> class to a <code>&lt;div&gt;</code> element inside the panel.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#panel-box-teaser-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="panel-box-teaser-tabs" class="switcher margin">
						<li>
							<div class="col-4-12-medium">
								<div class="panel panel-box">
									<div class="panel-teaser">
										<img src="<?php echo get_image('placeholder_800x280.svg'); ?>" width="800" height="280" alt="">
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="panel panel-box"&gt;
    &lt;div class="panel-teaser"&gt;
        &lt;img src="images/placeholder.svg"&gt;
    &lt;/div&gt;
    &lt;p&gt;...&lt;/p&gt;
&lt;/div&gt;</code></pre>
						</li>
					</ul>