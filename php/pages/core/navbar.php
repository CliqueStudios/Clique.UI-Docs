
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>

			<?php get_sidebar('core'); ?>

			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Navbar</h1>
					<p class="article-lead" itemprop="about">Defines different styles for the navigation bar.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>The Navbar component consists of the navbar itself and one or more navigations.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#navbar-tabs'}">
								<li><a href="#">Classes</a></li>
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="navbar-tabs" class="switcher margin">
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
											<td><code>.navbar</code></td>
											<td>Add this class to a <code>&lt;nav&gt;</code> element to define the Navbar component.</td>
										</tr>
										<tr>
											<td><code>.navbar-nav</code></td>
											<td>Add this class to a <code>&lt;ul&gt;</code> element to create a navigation. Use <code>&lt;a&gt;</code> elements as menu items within the list.</td>
										</tr>
										<tr>
											<td><code>.active</code></td>
											<td>Add this class to a list item to apply an active state.</td>
										</tr>
										<tr>
											<td><code>.parent</code></td>
											<td>Add this class to indicate a parent menu item.</td>
										</tr>
									</tbody>
								</table>
							</div>
						</li>
						<li>
							<nav class="navbar">
								<ul class="navbar-nav">
									<li class="active"><a href="">Active</a></li>
									<li><a href="">Item</a></li>
									<li class="parent" data-dropdown>
										<a href="">Parent</a>
										<div class="dropdown dropdown-navbar">
											<ul class="nav nav-navbar">
												<li><a href="">Item</a></li>
												<li><a href="">Another item</a></li>
												<li class="nav-header">Header</li>
												<li><a href="">Item</a></li>
												<li><a href="">Another item</a></li>
												<li class="nav-divider"></li>
												<li><a href="">Separated item</a></li>
											</ul>
										</div>
									</li>
								</ul>
							</nav>
						</li>
						<li>
							<pre><code>&lt;nav class="navbar"&gt;
    &lt;ul class="navbar-nav"&gt;
        &lt;li class="active"&gt;&lt;a href=""&gt;...&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=""&gt;...&lt;/a&gt;&lt;/li&gt;
        &lt;li class="parent"&gt;&lt;a href=""&gt;...&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3>Navbar flip</h3>
					<p>Add the <code>.navbar-flip</code> class to a <code>&lt;div&gt;</code> element to group and align navigations and items to the right.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#navbar2-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="navbar2-tabs" class="switcher margin">
						<li>
							<nav class="navbar">
								<ul class="navbar-nav">
									<li class="active"><a href="">Active</a></li>
									<li><a href="">Item</a></li>
									<li class="parent" data-dropdown>
										<a href="">Parent</a>
										<div class="dropdown dropdown-navbar">
											<ul class="nav nav-navbar">
												<li><a href="">Item</a></li>
												<li><a href="">Another item</a></li>
												<li class="nav-header">Header</li>
												<li><a href="">Item</a></li>
												<li><a href="">Another item</a></li>
												<li class="nav-divider"></li>
												<li><a href="">Separated item</a></li>
											</ul>
										</div>
									</li>
								</ul>
								<div class="navbar-flip">
									<ul class="navbar-nav">
										<li class="parent" data-dropdown><a href="">Parent</a>
											<div class="dropdown dropdown-navbar">
												<ul class="nav nav-navbar">
													<li><a href="">Item</a></li>
													<li><a href="">Another item</a></li>
													<li class="nav-header">Header</li>
													<li><a href="">Item</a></li>
													<li><a href="">Another item</a></li>
													<li class="nav-divider"></li>
													<li><a href="">Separated item</a></li>
												</ul>
											</div>
										</li>
										<li><a href="">Item</a></li>
										<li class="active"><a href="">Active</a></li>
									</ul>
								</div>
							</nav>
						</li>
						<li>
							<pre><code>&lt;nav class="navbar"&gt;
    &lt;div class="navbar-flip"&gt;
        &lt;ul class="navbar-nav"&gt;
            &lt;li&gt;&lt;a href=""&gt;...&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/nav&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3>Navbar subtitle</h3>
					<p>Add the <code>.navbar-nav-subtitle</code> class to an <code>&lt;a&gt;</code> element in the list item to indicate that it has a subtitle. Use a <code>&lt;div&gt;</code> element for the subtitle itself.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#navbar3-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="navbar3-tabs" class="switcher margin">
						<li>
							<nav class="navbar">
								<ul class="navbar-nav">
									<li class="active">
										<a href="" class="navbar-nav-subtitle">Active
											<div>Subtitle</div>
										</a>
									</li>
									<li>
										<a href="" class="navbar-nav-subtitle">Item
											<div>Subtitle</div>
										</a>
									</li>
									<li class="parent" data-dropdown>
										<a href="" class="navbar-nav-subtitle">Parent
											<div>Subtitle</div>
										</a>
										<div class="dropdown dropdown-navbar">
											<ul class="nav nav-navbar">
												<li><a href="">Item</a></li>
												<li><a href="">Another item</a></li>
												<li class="nav-header">Header</li>
												<li><a href="">Item</a></li>
												<li><a href="">Another item</a></li>
												<li class="nav-divider"></li>
												<li><a href="">Separated item</a></li>
											</ul>
										</div>
									</li>
								</ul>
							</nav>
						</li>
						<li>
							<pre><code>&lt;nav class="navbar"&gt;
    &lt;ul class="navbar-nav"&gt;
        &lt;li&gt;
            &lt;a href="" class="navbar-nav-subtitle"&gt;
                ...
                &lt;div&gt;...&lt;/div&gt;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="content"><a href="#content" class="link-reset">Content</a></h2>
					<p>You can also add custom content to the navbar, like text, icons, buttons, forms or even a toggle. By default, there is no JavaScript attached to the toggle. As an example, you can add an off-canvas navigation from the <a href="<?php echo get_url('components/offcanvas'); ?>">Off Canvas component</a>.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#navbar4-tabs'}">
								<li><a href="#">Classes</a></li>
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="navbar4-tabs" class="switcher margin">
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
											<td><code>.navbar-content</code></td>
											<td>Add this class to a <code>&lt;div&gt;</code> element, which serves as a container for your custom content. The content will be centered vertically.</td>
										</tr>
										<tr>
											<td><code>.navbar-brand</code></td>
											<td>Add this class to an <code>&lt;a&gt;</code> or <code>&lt;div&gt;</code> element to indicate your brand.</td>
										</tr>
										<tr>
											<td><code>.navbar-center</code></td>
											<td>Add this class to center your navbar content or brand. The element needs to be the last child in the navbar.</td>
										</tr>
										<tr>
											<td><code>.navbar-toggle</code></td>
											<td>Add this class to an <code>&lt;a&gt;</code> or <code>&lt;div&gt;</code> element to create an icon as a toggle.</td>
										</tr>
										<tr>
											<td><code>.navbar-toggle-alt</code></td>
											<td>Add this class to create an alternative icon as a toggle.</td>
										</tr>
									</tbody>
								</table>
							</div>
						</li>
						<li>
							<div class="margin">
								<nav class="navbar">
									<a class="navbar-brand" href="">Brand</a>
									<ul class="navbar-nav">
										<li class="parent active" data-dropdown><a href=""><i class="icon-home"></i> Level 1</a>
											<div class="dropdown dropdown-navbar">
												<ul class="nav nav-navbar">
													<li><a href="">Item</a></li>
													<li><a href="">Another item</a></li>
													<li class="nav-header">Header</li>
													<li><a href="">Item</a></li>
													<li><a href="">Another item</a></li>
													<li class="nav-divider"></li>
													<li><a href="">Separated item</a></li>
												</ul>
											</div>
										</li>
									</ul>
									<div class="navbar-content">Some <a href="">link</a>.</div>
									<div class="navbar-content hidden-small">
										<form class="form margin-remove display-inline-block">
											<input type="text" placeholder="Search">
											<button class="button-primary">Submit</button>
										</form>
									</div>
									<div class="navbar-content navbar-flip hidden-small">
										<div class="button-group"><a class="button button-danger" href="">Link</a>
											<button class="button-danger">Button</button>
										</div>
									</div>
								</nav>
							</div>
							<div class="margin">
								<nav class="navbar">
									<ul class="navbar-nav">
										<li class="active"><a href="">Active</a></li>
										<li class="hidden-small"><a href="">Item</a></li>
										<li class="parent" data-dropdown><a href="">Parent</a>
											<div class="dropdown dropdown-navbar">
												<ul class="nav nav-navbar">
													<li><a href="">Item</a></li>
													<li><a href="">Another item</a></li>
													<li class="nav-header">Header</li>
													<li><a href="">Item</a></li>
													<li><a href="">Another item</a></li>
													<li class="nav-divider"></li>
													<li><a href="">Separated item</a></li>
												</ul>
											</div>
										</li>
									</ul>
									<div class="navbar-flip">
										<ul class="navbar-nav">
											<li class="parent" data-dropdown>
												<a href="">Parent</a>
												<div class="dropdown dropdown-navbar">
													<ul class="nav nav-navbar">
														<li><a href="">Item</a></li>
														<li><a href="">Another item</a></li>
														<li class="nav-header">Header</li>
														<li><a href="">Item</a></li>
														<li><a href="">Another item</a></li>
														<li class="nav-divider"></li>
														<li><a href="">Separated item</a></li>
													</ul>
												</div></li>
												<li class="hidden-small"><a href="">Item</a></li>
												<li class="active"><a href="">Active</a></li>
											</ul>
										</div>
										<div class="navbar-content navbar-center">Center</div>
									</nav>
								</div>
								<div class="margin">
									<nav class="navbar">
										<a href="" class="navbar-toggle"></a>
										<div class="navbar-flip">
											<a href="" class="navbar-toggle navbar-toggle-alt"></a>
										</div>
									</nav>
								</div>
						</li>
						<li>
							<pre><code>&lt;nav class="navbar"&gt;
    &lt;a href="" class="navbar-brand"&gt;...&lt;/a&gt;
    &lt;ul class="navbar-nav"&gt;...&lt;/ul&gt;
    &lt;div class="navbar-content"&gt;...&lt;/div&gt;
    &lt;div class="navbar-content navbar-center"&gt;...&lt;/div&gt;
    &lt;a href="" class="navbar-toggle"&gt;&lt;/a&gt;
&lt;/nav&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="responsive-visibility"><a href="#responsive-visibility" class="link-reset">Responsive visibility</a></h2>
					<p>To hide or display certain navbar items, just add one of the responsive visibility classes from the <a href="<?php echo get_url('core/utility'); ?>">Utility component</a>. This comes in handy, if you want to use a toggle to trigger a mobile navigation for example.</p>
					<p><span class="badge">NOTE</span> In this example we added an off-canvas sidebar fron the <a href="<?php echo get_url('components/offcanvas'); ?>">Off Canvas component</a>.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#navbar5-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="navbar5-tabs" class="switcher margin">
						<li>
							<p>Resize your browser window to see it in action.</p>
							<nav class="navbar">
								<ul class="navbar-nav hidden-small">
									<li class="active"><a href="">Active</a></li>
									<li><a href="">Item</a></li>
									<li class="parent" data-dropdown>
										<a href="">Parent</a>
										<div class="dropdown dropdown-navbar">
											<ul class="nav nav-navbar">
												<li><a href="">Item</a></li>
												<li><a href="">Another item</a></li>
												<li class="nav-header">Header</li>
												<li><a href="">Item</a></li>
												<li><a href="">Another item</a></li>
												<li class="nav-divider"></li>
												<li><a href="">Separated item</a></li>
											</ul>
										</div>
									</li>
								</ul>
								<a href="#offcanvas-1" class="navbar-toggle visible-small" data-offcanvas></a>
								<div class="navbar-flip">
									<a href="" class="navbar-toggle navbar-toggle-alt visible-small"></a>
									<ul class="navbar-nav hidden-small">
										<li class="parent" data-dropdown><a href="">Parent</a>
											<div class="dropdown dropdown-navbar">
												<ul class="nav nav-navbar">
													<li><a href="">Item</a></li>
													<li><a href="">Another item</a></li>
													<li class="nav-header">Header</li>
													<li><a href="">Item</a></li>
													<li><a href="">Another item</a></li>
													<li class="nav-divider"></li>
													<li><a href="">Separated item</a></li>
												</ul>
											</div>
										</li>
										<li><a href="">Item</a></li>
										<li class="active"><a href="">Active</a></li>
									</ul>
								</div>
							</nav>
							<div id="offcanvas-1" class="offcanvas">
								<div class="offcanvas-bar">
									<div class="panel">Lorem ipsum dolor sit amet, <a href="">consetetur</a> sadipscing elitr.</div>
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;nav class="navbar"&gt;
    &lt;ul class="navbar-nav hidden-small"&gt;...&lt;/ul&gt;
    &lt;a href="#my-id" class="navbar-toggle visible-small" data-offcanvas&gt;&lt;/a&gt;
&lt;/nav&gt;

&lt;div id="my-id" class="offcanvas"&gt;
...
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<!-- <h2 id="modifiers"><a href="#modifiers" class="link-reset">Modifiers</a></h2> -->
					<!-- <p>To display the navbar in a different style, just add modifier classes. These modifiers can be combined with each other</p> -->
					<h2 id="navbar-with-dropdowns"><a href="#navbar-with-dropdowns" class="link-reset">Navbar with dropdowns</a></h2>
					<p>A navbar can contain a dropdown from the <a href="<?php echo get_url('core/dropdown'); ?>">Dropdown component</a>. Just add the <code>.dropdown-navbar</code> modifier to the dropdown, so it fits perfectly into the navbar's styling.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<nav class="navbar">
						<ul class="navbar-nav">
							<li class="active"><a href="">Active</a></li>
							<li><a href="">Item</a></li>
							<li class="parent" data-dropdown>
								<a href="">Parent <i class="icon-chevron-down"></i></a>
								<div class="dropdown dropdown-navbar">
									<ul class="nav nav-navbar">
										<li><a href="">Item</a></li>
										<li><a href="">Another item</a></li>
										<li class="nav-header">Header</li>
										<li><a href="">Item</a></li>
										<li><a href="">Another item</a></li>
										<li class="nav-divider"></li>
										<li><a href="">Separated item</a></li>
									</ul>
								</div>
							</li>
						</ul>
					</nav>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
