
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Text</h1>
					<p class="article-lead" itemprop="about">A collection of useful text utility classes to style your content.</p>
					<hr>
					<h2 id="text-styles"><a href="#text-styles" class="link-reset">Text styles</a></h2>
					<p><?php echo SITENAME; ?> offers various text utlities to style your text.</p>
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
									<td><code>.text-small</code></td>
									<td>
										<span class="text-small">Add this class to decrease the font size.</span>
									</td>
								</tr>
								<tr>
									<td><code>.text-large</code></td>
									<td>
										<span class="text-large">Add this class to increase the font size.</span>
									</td>
								</tr>
								<tr>
									<td><code>.text-bold</code></td>
									<td>
										<span class="text-bold">Add this class to create bold text.</span>
									</td>
								</tr>
								<tr>
									<td><code>.text-uppercase</code></td>
									<td>
										<span class="text-uppercase">Add this class to force uppercase text.</span>
									</td>
								</tr>
								<tr>
									<td><code>.text-lowercase</code></td>
									<td>
										<span class="text-lowercase">Add this class to force lowercase text.</span>
									</td>
								</tr>
								<tr>
									<td><code>.text-capitalize</code></td>
									<td>
										<span class="text-capitalize">Add this class to force capitalized text.</span>
									</td>
								</tr>
								<tr>
									<td><code>.text-muted</code></td>
									<td>
										<span class="text-muted">Add this class to mute your text.</span>
									</td>
								</tr>
								<tr>
									<td><code>.text-primary</code></td>
									<td>
										<span class="text-primary">Add this class for additional text information.</span>
									</td>
								</tr>
								<tr>
									<td><code>.text-success</code></td>
									<td>
										<span class="text-success">Add this class to indicate success.</span>
									</td>
								</tr>
								<tr>
									<td><code>.text-warning</code></td>
									<td>
										<span class="text-warning">Add this class to indicate a warning.</span>
									</td>
								</tr>
								<tr>
									<td><code>.text-danger</code></td>
									<td>
										<span class="text-danger">Add this class to indicate danger.</span>
									</td>
								</tr>
								<tr>
									<td><code>.text-contrast</code></td>
									<td>Add this class to make the text color readable on flat color areas or pictures. It's often white.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<hr>
					<h2 id="text-alignment"><a href="#text-alignment" class="link-reset">Text alignment</a></h2>
					<p>Add one of these useful classes to align your text.</p>
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
									<td><code>.text-left</code></td>
									<td>Aligns text to the left.</td>
								</tr>
								<tr>
									<td><code>.text-left-small</code></td>
									<td>Aligns text to the left only on small devices.</td>
								</tr>
								<tr>
									<td><code>.text-left-medium</code></td>
									<td>Aligns text to the left on medium and small devices.</td>
								</tr>
								<tr>
									<td><code>.text-right</code></td>
									<td>Aligns text to the right.</td>
								</tr>
								<tr>
									<td><code>.text-center</code></td>
									<td>Centers text horizontally.</td>
								</tr>
								<tr>
									<td><code>.text-center-small</code></td>
									<td>Centers text horizontally only on small devices.</td>
								</tr>
								<tr>
									<td><code>.text-center-medium</code></td>
									<td>Centers text horizontally on medium and small devices.</td>
								</tr>
								<tr>
									<td><code>.text-justify</code></td>
									<td>Justifies text.</td>
								</tr>
							</tbody>
						</table>
					</div>
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
							<div class="row" data-row-margin>
								<div class="col-6-12-medium col-4-12-large">
									<div class="panel panel-box text-left">Lorem ipsum dolor sit amet, consetetur sadipscing elitr. <code>.text-left</code></div>
								</div>
								<div class="col-6-12-medium col-4-12-large">
									<div class="panel panel-box text-right">Lorem ipsum dolor sit amet, consetetur sadipscing elitr. <code>.text-right</code></div>
								</div>
								<div class="col-6-12-medium col-4-12-large">
									<div class="panel panel-box text-center">Lorem ipsum dolor sit amet, consetetur sadipscing elitr. <code>.text-center</code></div>
								</div>
								<div class="col-6-12-medium col-4-12-large">
									<div class="panel panel-box text-center-small">Lorem ipsum dolor sit amet, consetetur sadipscing elitr. <code>.text-center-small</code></div>
								</div>
								<div class="col-6-12-medium col-4-12-large">
									<div class="panel panel-box text-center-medium">Lorem ipsum dolor sit amet, consetetur sadipscing elitr. <code>.text-center-medium</code></div>
								</div>
								<div class="col-6-12-medium col-4-12-large">
									<div class="panel panel-box text-justify">Lorem ipsum dolor sit amet, consetetur sadipscing elitr. <code>.text-justify</code></div>
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="panel panel-box text-left"&gt;...&lt;/div&gt;
&lt;div class="panel panel-box text-right"&gt;...&lt;/div&gt;
&lt;div class="panel panel-box text-center"&gt;...&lt;/div&gt;
&lt;div class="panel panel-box text-center-small"&gt;...&lt;/div&gt;
&lt;div class="panel panel-box text-center-medium"&gt;...&lt;/div&gt;
&lt;div class="panel panel-box text-justify"&gt;...&lt;/div&gt;</code></pre>
						</li>
					</ul>
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
					<hr>
					<h2 id="text-wrapping"><a href="#text-wrapping" class="link-reset">Text wrapping</a></h2>
					<p>Add one of these useful classes to wrap your text.</p>
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
									<td><code>.text-truncate</code></td>
									<td>Prevents text from wrapping into multiple lines, truncating it instead.</td>
								</tr>
								<tr>
									<td><code>.text-break</code></td>
									<td>Breaks strings if their length exceeds the width of their container.</td>
								</tr>
								<tr>
									<td><code>.text-nowrap</code></td>
									<td>Prevents text from wrapping into multiple lines.</td>
								</tr>
							</tbody>
						</table>
					</div>
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
							<div class="row margin" data-row-margin>
								<div class="col-4-12-medium">
									<div class="panel panel-box text-truncate">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt. Lorem ipsum dolor sit amet, consetetur sadipscing elit <code>.text-truncate</code>
									</div>
								</div>
								<div class="col-4-12-medium">
									<div class="panel panel-box text-break">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt. Lorem ipsum dolor sit amet, consetetur sadipscing elit <code>.text-break</code>
									</div>
								</div>
								<div class="col-4-12-medium">
									<div class="panel panel-box text-nowrap">
										Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac. <code>.text-nowrap</code>
									</div>
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="row"&gt;
	&lt;div class="col"&gt;
		&lt;div class="panel panel-box text-truncate"&gt;
			...
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class="col"&gt;
		&lt;div class="panel panel-box text-break"&gt;
			...
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class="col"&gt;
		&lt;div class="panel panel-box text-nowrap"&gt;
			...
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
