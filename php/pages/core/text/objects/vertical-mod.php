<hr>
					<h3>Vertical alignment</h3>
					<p>Add one of these classes to vertically align text to an object.</p>
					<div class="overflow-container">
						<table class="table-striped text-nowrap">
							<thead>
								<tr>
									<th class="col-3-12">Class</th>
									<th class="col-9-12">Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>.text-top</code></td>
									<td>Aligns text to the top.</td>
								</tr>
								<tr>
									<td><code>.text-middle</code></td>
									<td>Centers text vertically.</td>
								</tr>
								<tr>
									<td><code>.text-bottom</code></td>
									<td>Aligns text to the bottom.</td>
								</tr>
							</tbody>
						</table>
					</div>
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
							<div class="row" data-row-margin>
								<div class="col-6-12-medium col-4-12-large">
									<img src="<?php echo get_image('avatar.png'); ?>" width="50" height="50"> <span class="text-top">Lorem ipsum.</span>
								</div>
								<div class="col-6-12-medium col-4-12-large">
									<img src="<?php echo get_image('avatar.png'); ?>" width="50" height="50"> <span class="text-middle">Lorem ipsum.</span>
								</div>
								<div class="col-6-12-medium col-4-12-large">
									<img src="<?php echo get_image('avatar.png'); ?>" width="50" height="50"> <span class="text-bottom">Lorem ipsum.</span>
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="row"&gt;
	&lt;div class="col"&gt;
		&lt;img src=""&gt; &lt;span class="text-top">Lorem ipsum.&lt;/span&gt;
	&lt;/div>
	&lt;div class="col"&gt;
		&lt;img src=""&gt; &lt;span class="text-middle">Lorem ipsum.&lt;/span&gt;
	&lt;/div>
	&lt;div class="col"&gt;
		&lt;img src=""&gt; &lt;span class="text-bottom">Lorem ipsum.&lt;/span&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
						</li>
					</ul>