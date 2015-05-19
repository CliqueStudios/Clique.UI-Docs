
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>

			<?php get_sidebar('core'); ?>

			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Nav</h1>
					<p class="article-lead" itemprop="about">Defines different styles for list navigations.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>To apply this component, add the <code>.nav</code> class to an <code>&lt;ul&gt;</code> element. Use <code>&lt;a&gt;</code> elements as menu items within the list. To apply an active state to a menu item, just add the <code>.active</code> class.</p>
					<p><span class="badge badge-info">NOTE</span> By default, the nav has no styling. That's why it is important to add a modifier class to give it some styling. In our examples we used the <code>.nav-side</code> class.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#nav-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="nav-tabs" class="switcher margin">
						<li>
							<div class="col-4-12-medium">
								<ul class="nav nav-side">
									<li class="active"><a href="#">Active</a></li>
									<li><a href="#">Item</a></li>
									<li><a href="#">Item</a></li>
								</ul>
							</div>
						</li>
						<li>
							<pre><code>&lt;ul class="nav"&gt;
    &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
    &lt;li class="active"&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3>Nested navs</h3>
					<p>You can easily add any number of <code>&lt;ul&gt;</code> elements to your nav.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#nav1-tabs'}">
								<li><a href="#">Classes</a></li>
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="nav1-tabs" class="switcher margin">
						<li>
							<div class="overflow-container">
								<table class="table-striped text-nowrap">
									<thead>
										<tr>
											<th>Class</th>
											<th>Description</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><code>.nav-sub</code></td>
											<td>Add this class to the first nested <code>&lt;ul&gt;</code> for optimized spacing.</td>
										</tr>
										<tr>
											<td><code>.parent</code></td>
											<td>Add this class to indicate a parent menu item.</td>
										</tr>
										<tr>
											<td><code>.nav-parent-icon</code></td>
											<td>Add this class to the nav to add icons, indicating parent items.</td>
										</tr>
									</tbody>
								</table>
							</div>
						</li>
						<li>
							<div class="col-4-12-medium">
								<ul class="nav nav-side nav-parent-icon">
									<li class="active"><a href="#">Active</a></li>
									<li class="parent open">
										<a href="#">Parent</a>
										<ul class="nav-sub">
											<li><a href="#">Sub item</a></li>
											<li>
												<a href="#">Sub item</a>
												<ul>
													<li><a href="#">Sub item</a></li>
													<li><a href="#">Sub item</a></li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<pre><code>&lt;ul class="nav nav-parent-icon"&gt;
    &lt;li class="parent"&gt;&lt;a href="#"&gt;...&lt;/a&gt;
        &lt;ul class="nav-sub"&gt;
            &lt;li&gt;
                &lt;a href="#"&gt;...&lt;/a&gt;
                &lt;ul&gt;
                ...
                &lt;/ul&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3>Accordion</h3>
					<p>By default child menu items are always visible. To apply the accordion effect, just add the <code>data-nav</code> attribute to the main <code>&lt;ul&gt;</code>. When clicking on a parent item, an open one will close, allowing only one open nested list at a time. To avoid this behavior, just append <code>{multiple:true}</code> to the data attribute.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#nav2-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="nav2-tabs" class="switcher margin">
						<li>
							<div class="row" data-row-margin>
								<div class="col-6-12-medium">
									<p><code>data-nav</code></p>
									<ul class="nav nav-side nav-parent-icon col-8-12-medium" data-nav>
										<li class="active"><a href="#">Active</a></li>
										<li><a href="#">Item</a></li>
										<li class="parent"><a href="#">Parent</a>
											<ul class="nav-sub">
												<li><a href="#">Sub item</a></li>
												<li><a href="#">Sub item</a>
													<ul>
														<li><a href="#">Sub item</a></li>
														<li><a href="#">Sub item</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li class="parent"><a href="#">Parent</a>
											<ul class="nav-sub">
												<li><a href="#">Sub item</a></li>
												<li><a href="#">Sub item</a></li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="col-6-12-medium">
									<p><code>data-nav="{multiple:true}"</code></p>
									<ul class="nav nav-side nav-parent-icon col-8-12-medium" data-nav="{multiple:true}">
										<li class="active"><a href="#">Active</a></li>
										<li><a href="#">Item</a></li>
										<li class="parent"><a href="#">Parent</a>
											<ul class="nav-sub">
												<li><a href="#">Sub item</a></li>
												<li><a href="#">Sub item</a>
													<ul>
														<li><a href="#">Sub item</a></li>
														<li><a href="#">Sub item</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li class="parent"><a href="#">Parent</a>
											<ul class="nav-sub">
												<li><a href="#">Sub item</a></li>
												<li><a href="#">Sub item</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li>
							<div class="row" data-row-margin>
								<div class="col-6-12-medium">
									<pre><code>&lt;ul class="nav nav-parent-icon" data-nav&gt;
    &lt;li class="parent"&gt;
        &lt;a href="#"&gt;...&lt;/a&gt;
        &lt;ul class="nav-sub"&gt;
            &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
								</div>
								<div class="col-6-12-medium">
									<pre><code>&lt;ul class="nav nav-parent-icon" data-nav="{multiple:true}"&gt;
    &lt;li class="parent"&gt;
        &lt;a href="#"&gt;...&lt;/a&gt;
        &lt;ul class="nav-sub"&gt;
            &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
								</div>
							</div>
						</li>
					</ul>
					<hr>
					<h3>Header and divider</h3>
					<p>Add one of the following classes to a list item to create a header or a divider between items.</p>
					<p><span class="badge">NOTE</span> You can also add subtitles to nav items. Just create a <code>&lt;div&gt;</code> element inside the <code>&lt;a&gt;</code> element within the list item.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#nav3-tabs'}">
								<li><a href="#">Classes</a></li>
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="nav3-tabs" class="switcher margin">
						<li>
							<div class="overflow-container">
								<table class="table-striped text-nowrap">
									<thead>
										<tr>
											<th>Class</th>
											<th>Description</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><code>.nav-header</code></td>
											<td>Add this class to a <code>&lt;li&gt;</code> element to create a header.</td>
										</tr>
										<tr>
											<td><code>.nav-divider</code></td>
											<td>Add this class to a <code>&lt;li&gt;</code> element to create a divider separating menu items.</td>
										</tr>
									</tbody>
								</table>
							</div>
						</li>
						<li>
							<div class="col-4-12-medium">
								<ul class="nav nav-side" data-nav>
									<li class="nav-header">Header</li>
									<li><a href="#">Item <div>Subtitle</div></a></li>
									<li><a href="#">Item</a></li>
									<li class="nav-divider"></li>
									<li><a href="#">Item</a></li>
								</ul>
							</div>
						</li>
						<li>
							<pre><code>&lt;li class="nav-header"&gt;...&lt;/li&gt;
&lt;li class="nav-divider"&gt;&lt;/li&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="style-modifiers"><a href="#style-modifiers" class="link-reset">Style modifiers</a></h2>
					<p>There are several modifiers to style the nav according to the context, in which it is used.</p>
					<h3>Nav side</h3>
					<p>Add the <code>.nav-side</code> class to place a nav inside your sidebar, panels or anywhere else in your content.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#nav4-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="nav4-tabs" class="switcher margin">
						<li>
							<div class="col-4-12-medium">
								<div class="panel panel-box">
									<h3 class="panel-title">Nav side in panel</h3>
									<ul class="nav nav-side nav-parent-icon" data-nav>
										<li class="active"><a href="#">Active</a></li>
										<li class="parent"><a href="#">Parent</a>
											<ul class="nav-sub">
												<li><a href="#">Sub item</a></li>
												<li><a href="#">Sub item</a>
													<ul>
														<li><a href="#">Sub item</a></li>
														<li><a href="#">Sub item</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li class="parent"><a href="#">Parent</a>
											<ul class="nav-sub">
												<li><a href="#">Sub item</a></li>
												<li><a href="#">Sub item</a></li>
											</ul>
										</li>
										<li><a href="#">Item</a></li>
										<li class="nav-header">Header</li>
										<li class="parent"><a href="#"><i class="icon-star"></i> Parent</a></li>
										<li><a href="#"><i class="icon-twitter"></i> Item</a></li>
										<li class="nav-divider"></li>
										<li><a href="#"><i class="icon-rss"></i> Item</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="panel panel-box"&gt;
    &lt;h3 class="panel-title"&gt;...&lt;/h3&gt;
    &lt;ul class="nav nav-side"&gt;...&lt;/ul&gt;
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3>Nav dropdown</h3>
					<p>Add the <code>.nav-dropdown</code> class to place a nav inside a default dropdown from the <a href="<?php echo get_url('core/dropdown'); ?>">Dropdown component</a>.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#nav5-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="nav5-tabs" class="switcher margin">
						<li>
							<div class="button-dropdown" data-dropdown>
								<button>Dropdown <i class="icon-chevron-down"></i></button>
								<div class="dropdown dropdown-small">
									<ul class="nav nav-dropdown">
										<li><a href="#">Item</a></li>
										<li><a href="#">Another item</a></li>
										<li class="nav-header">Header</li>
										<li><a href="#">Item</a></li>
										<li><a href="#">Another item</a></li>
										<li class="nav-divider"></li>
										<li><a href="#">Separated item</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="dropdown"&gt;
    &lt;ul class="nav nav-dropdown"&gt;...&lt;/ul&gt;
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3>Nav navbar</h3>
					<p>Add the <code>.nav-navbar</code> class to place the nav inside a navbar dropdown from the <a href="<?php echo get_url('core/navbar'); ?>">Navbar component</a>.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#nav6-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="nav6-tabs" class="switcher margin">
						<li>
							<nav class="navbar">
								<ul class="navbar-nav">
									<li class="parent" data-dropdown>
										<a href="#">Parent</a>
										<div class="dropdown dropdown-navbar">
											<ul class="nav nav-navbar">
												<li><a href="#">Item</a></li>
												<li><a href="#">Another item</a></li>
												<li class="nav-header">Header</li>
												<li><a href="#">Item</a></li>
												<li><a href="#">Another item</a></li>
												<li class="nav-divider"></li>
												<li><a href="#">Separated item</a></li>
											</ul>
										</div>
									</li>
								</ul>
							</nav>
						</li>
						<li>
							<pre><code>&lt;div class="dropdown dropdown-navbar"&gt;
    &lt;ul class="nav nav-navbar"&gt;...&lt;/ul&gt;
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3>Nav off-canvas</h3>
					<p>Add the <code>.nav-offcanvas</code> class to place the nav inside an off-canvas sidebar from the <a href="<?php echo get_url('components/offcanvas'); ?>">Off Canvas component</a>.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#nav7-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="nav7-tabs" class="switcher margin">
						<li>
							<button data-offcanvas="{target:'#offcanvas-1'}">Off Canvas</button>
							<div id="offcanvas-1" class="offcanvas">
								<div class="offcanvas-bar">
									<ul class="nav nav-offcanvas nav-parent-icon" data-nav>
										<li><a href="#">Item</a></li>
										<li class="active"><a href="#">Active</a></li>
										<li class="parent"><a href="#">Parent</a>
											<ul class="nav-sub">
												<li><a href="#">Sub item</a></li>
												<li><a href="#">Sub item</a>
													<ul>
														<li><a href="#">Sub item</a></li>
														<li><a href="#">Sub item</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li class="parent"><a href="#">Parent</a>
											<ul class="nav-sub">
												<li><a href="#">Sub item</a></li>
												<li><a href="#">Sub item</a></li>
											</ul>
										</li>
										<li><a href="#">Item</a></li>
										<li class="nav-header">Header</li>
										<li class="parent"><a href="#"><i class="icon-star"></i> Parent</a></li>
										<li><a href="#"><i class="icon-twitter"></i> Item</a></li>
										<li class="nav-divider"></li>
										<li><a href="#"><i class="icon-rss"></i> Item</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="offcanvas-bar"&gt;
    &lt;ul class="nav nav-offcanvas"&gt;...&lt;/ul&gt;
&lt;/div&gt;</code></pre>
						</li>
					</ul>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
