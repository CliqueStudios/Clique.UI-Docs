
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>

			<?php get_sidebar('core'); ?>

			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Panel</h1>
					<p class="article-lead" itemprop="about">Create layout boxes with different styles.</p>
					<p><?php echo SITENAME; ?> uses panels to outline certain sections of your content, which can be styled differently. Typically, panels are arranged in grid columns from the <a href="<?php echo get_url('core/grid'); ?>">Grid component</a>.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>The Panel component consists of the panel itself, the panel title and a panel badge. To prevent redundant white space, top and bottom margins are removed from the panel's content.</p>
					<p><span class="badge badge-info">NOTE</span> By default, a panel is blank and has no styling. That is why it is important to add a modifier class, which gives the panel some styling. In our examples we used the <code>.panel-box</code> class.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#panels-tabs'}">
								<li><a href="#">Classes</a></li>
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="panels-tabs" class="switcher margin">
						<li>
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
											<td><code>.panel</code></td>
											<td>Add this class to a <code>&lt;div&gt;</code> element to define the Panel component.</td>
										</tr>
										<tr>
											<td><code>.panel-title</code></td>
											<td>Add this class to a heading to create the panel title.</td>
										</tr>
										<tr>
											<td><code>.panel-badge</code></td>
											<td>Add this class to a <code>&lt;div&gt;</code> element to create a panel badge. The easiest way to style your badge, is by adding the modifier classes from the <a href="<?php echo get_url('core/badge'); ?>">Badge component</a>.</td>
										</tr>
									</tbody>
								</table>
							</div>
						</li>
						<li>
							<div class="col-6-12-medium">
								<div class="panel panel-box">
								<div class="panel-badge badge badge-danger">Badge</div>
									<h3 class="panel-title">Panel Title</h3>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="panel"&gt;
    &lt;div class="panel-badge badge"&gt;...&lt;/div&gt;
    &lt;h3 class="panel-title"&gt;...&lt;/h3&gt;
    ...
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="modifiers"><a href="#modifiers" class="link-reset">Modifiers</a></h2>
					<p>Modifier classes are necessary to add a specific style to panels. <?php echo SITENAME; ?> includes a number of panel modifiers, and of course you can always create your own.</p>
					<h3>Panel box</h3>
					<p>Add the <code>.panel-box</code> class to create a visually styled box. This is the default panel modifier.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#panel-box-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="panel-box-tabs" class="switcher margin">
						<li>
							<div class="row" data-row-margin>
								<div class="col-4-12-medium">
									<div class="panel panel-box">
										<h3 class="panel-title">Title</h3>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</div>
								</div>
								<div class="col-4-12-medium">
									<div class="panel panel-box">
										<h3 class="panel-title">Title</h3>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</div>
								</div>
								<div class="col-4-12-medium">
									<div class="panel panel-box">
										<h3 class="panel-title">Title</h3>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</div>
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="panel panel-box"&gt;
    &lt;h3 class="panel-title"&gt;...&lt;/h3&gt;
    ...
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3>Panel box primary</h3>
					<p>Add the <code>.panel-box-primary</code> class to modify the box panel and emphasize it with a different color.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#panel-box-primary-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="panel-box-primary-tabs" class="switcher margin">
						<li>
							<div class="row docs-grid-truncate" data-row-margin>
								<div class="col-4-12-medium">
									<div class="panel panel-box panel-box-primary">
										<h3 class="panel-title">Title</h3>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</div>
								</div>
								<div class="col-4-12-medium">
									<div class="panel panel-box panel-box-primary">
										<h3 class="panel-title">Title</h3>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</div>
								</div>
								<div class="col-4-12-medium">
									<div class="panel panel-box panel-box-primary">
										<h3 class="panel-title">Title</h3>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</div>
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="panel panel-box panel-box-primary"&gt;
    &lt;h3 class="panel-title"&gt;...&lt;/h3&gt;
    ...
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3>Panel box secondary</h3>
					<p>The <code>.panel-box-secondary</code> class provides a secondary style modifier to the Panel component. By default, the background is white with a darker border and font color.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#panel-box-secondary-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="panel-box-secondary-tabs" class="switcher margin">
						<li>
							<div class="row docs-grid-truncate" data-row-margin>
								<div class="col-4-12-medium">
									<div class="panel panel-box panel-box-secondary">
										<h3 class="panel-title">Title</h3>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</div>
								</div>
								<div class="col-4-12-medium">
									<div class="panel panel-box panel-box-secondary">
										<h3 class="panel-title">Title</h3>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</div>
								</div>
								<div class="col-4-12-medium">
									<div class="panel panel-box panel-box-secondary">
										<h3 class="panel-title">Title</h3>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</div>
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="panel panel-box panel-box-secondary"&gt;
    &lt;h3 class="panel-title"&gt;...&lt;/h3&gt;
    ...
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3>Panel hover</h3>
					<p>Add the <code>.panel-hover</code> class to add a hover effect to the panel. This comes in handy when using the panel as an anchor.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#panel-box-hover-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="panel-box-hover-tabs" class="switcher margin">
						<li>
							<div class="row" data-row-margin>
								<div class="col-4-12-medium">
									<a class="panel panel-hover" href="#">
										<h3 class="panel-title">Title</h3>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</a>
								</div>
								<div class="col-4-12-medium">
									<a class="panel panel-hover" href="#">
										<h3 class="panel-title">Title</h3>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</a>
								</div>
								<div class="col-4-12-medium">
									<a class="panel panel-hover" href="#">
										<h3 class="panel-title">Title</h3>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</a>
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;a class="panel panel-hover" href="#"&gt;
    &lt;h3 class="panel-title"&gt;...&lt;/h3&gt;
    ...
&lt;/a&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3>Panel header</h3>
					<p>Add the <code>.panel-header</code> class to separate the panel title and content with a horizontal line.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#panel-box-header-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="panel-box-header-tabs" class="switcher margin">
						<li>
							<div class="row" data-row-margin>
								<div class="col-4-12-medium">
									<div class="panel panel-header">
										<h3 class="panel-title">Title</h3>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</div>
								</div>
								<div class="col-4-12-medium">
									<div class="panel panel-header">
										<h3 class="panel-title">Title</h3>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</div>
								</div>
								<div class="col-4-12-medium">
									<div class="panel panel-header">
										<h3 class="panel-title">Title</h3>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</div>
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="panel panel-header"&gt;
    &lt;h3 class="panel-title"&gt;...&lt;/h3&gt;
    ...
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3>Panel space</h3>
					<p>Add the <code>.panel-space</code> class to increase the spacing around the panel content.</p>
					<p><span class="badge">NOTE</span> The example below utilizes the <code>.panel-secondary</code> class so as to show the increased spacing around each panel, but is not necessary when using this class and thus isn't included in the "Markup" section.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#panel-box-space-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="panel-box-space-tabs" class="switcher margin">
						<li>
							<div class="row" data-row-margin>
								<div class="col-4-12-medium">
									<div class="panel panel-space panel-box panel-box-secondary">
										<h3 class="panel-title">Title</h3>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</div>
								</div>
								<div class="col-4-12-medium">
									<div class="panel panel-space panel-box panel-box-secondary">
										<h3 class="panel-title">Title</h3>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</div>
								</div>
								<div class="col-4-12-medium">
									<div class="panel panel-space panel-box panel-box-secondary">
										<h3 class="panel-title">Title</h3>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</div>
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="panel panel-space"&gt;
    &lt;h3 class="panel-title"&gt;...&lt;/h3&gt;
    ...
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3>Panel divider</h3>
					<p>Add the <code>.panel-divider</code> class to separate vertically stacked panels with lines.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#panel-box-divider-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="panel-box-divider-tabs" class="switcher margin">
						<li>
							<div class="row" data-row-margin>
								<div class="col-4-12-medium">
									<div class="panel panel-divider">
										<h3 class="panel-title">Title</h3>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</div>
									<div class="panel panel-divider">
										<h3 class="panel-title">Title</h3>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</div>
									<div class="panel panel-divider">
										<h3 class="panel-title">Title</h3>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</div>
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="panel panel-divider"&gt;...&lt;/div&gt;
&lt;div class="panel panel-divider"&gt;...&lt;/div&gt;
&lt;div class="panel panel-divider"&gt;...&lt;/div&gt;</code></pre>
						</li>
					</ul>
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
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
