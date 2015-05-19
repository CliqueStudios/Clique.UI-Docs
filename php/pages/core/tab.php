
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Tab</h1>
					<p class="article-lead" itemprop="about">Create a tabbed navigation with different styles.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>The Tab component consists of clickable tabs, that are aligned side by side.</p>
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
									<td><code>.tab</code></td>
									<td>Add this class to a <code>&lt;ul&gt;</code> element to define the Tab component. Use <code>&lt;a&gt;</code> elements as tab items within the list.</td>
								</tr>
								<tr>
									<td><code>.active</code></td>
									<td>Add this class to a list item to apply an active state.</td>
								</tr>
								<tr>
									<td><code>.disabled</code></td>
									<td>Add this class to a list item to apply a disabled state.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<p>The <code>data-tab</code> attribute is required for two purposes. Firstly, it enables the responsive behaviour. If the parent container is too small to accomodate all tabs, they will be combined into a dropdown, toggled by a single tab, which represents the active tab item. This also requires the <a href="<?php echo get_url('core/dropdown'); ?>">Dropdown component</a> in order to work.</p>
					<p>And secondly, its functionality is coupled to the <a href="<?php echo get_url('core/switcher'); ?>">Switcher component</a>, which is necessary to dynamically transition through different contents using tabbed navigation.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#tab-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="tab-tabs" class="switcher margin">
						<li>
							<ul class="tab col-7-10-medium" data-tab>
								<li class="active"><a href="#">Active</a></li>
								<li><a href="#">Item</a></li>
								<li><a href="#">Item</a></li>
								<li class="disabled"><a href="#">Disabled</a></li>
							</ul>
						</li>
						<li>
							<pre><code>&lt;ul class="tab" data-tab&gt;
    &lt;li class="active"&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
    &lt;li class="disabled"&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="horizontal-modifiers"><a href="#horizontal-modifiers" class="link-reset">Horizontal modifiers</a></h2>
					<p>Add one of the following classes to alter your tabs' styling. These modifiers can also be combined.</p>
					<h3>Align tabs</h3>
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
									<td><code>.tab-flip</code></td>
									<td>Add this class to align tabs right and in reversed order.</td>
								</tr>
								<tr>
									<td><code>.tab-bottom</code></td>
									<td>Add this class to the <code>&lt;ul&gt;</code> to place tabs at the bottom. This can also be combined with the other modifiers.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#tab1-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="tab1-tabs" class="switcher margin">
						<li>
							<div class="row" data-row-margin>
								<div class="col-6-12-medium">
									<ul class="tab tab-flip" data-tab>
										<li class="active"><a href="#">Active</a></li>
										<li><a href="#">Item</a></li>
										<li><a href="#">Item</a></li>
									</ul>
								</div>
								<div class="col-6-12-medium">
									<ul class="tab tab-bottom" data-tab>
										<li class="active"><a href="#">Active</a></li>
										<li><a href="#">Item</a></li>
										<li><a href="#">Item</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;ul class="tab tab-flip" data-tab&gt;...&lt;/ul&gt;
&lt;ul class="tab tab-bottom" data-tab&gt;...&lt;/ul&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3>Justify tabs</h3>
					<p>Add the <code>.tab-grid</code> class and one of the <code>.col-*</code> classes from the <a href="<?php echo get_url('core/grid'); ?>">Grid component</a> to the list items to arrange tabs in a grid that takes up full width of its parent element.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#tab2-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="tab2-tabs" class="switcher margin">
						<li>
							<div class="col-6-12-medium">
								<ul class="tab tab-grid tab-bottom" data-tab>
									<li class="col-4-12 active">
										<a href="#">Active</a>
									</li>
									<li class="col-4-12">
										<a href="#">Item</a>
									</li>
									<li class="col-4-12">
										<a href="#">Item</a>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<pre><code>&lt;ul class="tab tab-grid tab-bottom" data-tab&gt;
    &lt;li class="col-4-12"&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3>Center tabs</h3>
					<p>Add the <code>.tab-center</code> class to a <code>&lt;div&gt;</code> element around the tabbed navigation to center tabs.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#tab3-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="tab3-tabs" class="switcher margin">
						<li>
							<div class="col-6-12-medium">
								<div class="tab-center">
									<ul class="tab" data-tab>
										<li class="active"><a href="#">Active</a></li>
										<li><a href="#">Item</a></li>
										<li><a href="#">Item</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="tab-center"&gt;
    &lt;ul class="tab" data-tab&gt;...&lt;/ul&gt;
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="vertical-modifiers"><a href="#vertical-modifiers" class="link-reset">Vertical modifiers</a></h2>
					<p>Add the <code>.tab-left</code> or <code>.tab-right</code> class to align tabs vertically to the left or right side.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#tab4-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="tab4-tabs" class="switcher margin">
						<li>
							<div class="row" data-row-margin>
								<div class="col-6-12-medium">
									<ul class="tab tab-left col-6-12-medium" data-tab>
										<li class="active"><a href="#">Active</a></li>
										<li><a href="#">Item</a></li>
										<li><a href="#">Item</a></li>
									</ul>
								</div>
								<div class="col-6-12-medium">
									<ul class="tab tab-right col-6-12-medium" data-tab>
										<li class="active"><a href="#">Active</a></li>
										<li><a href="#">Item</a></li>
										<li><a href="#">Item</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li>
							<div class="row" data-row-margin>
								<div class="col-6-12-medium">
									<pre><code>&lt;ul class="tab tab-left col-6-12-medium"&gt;
&lt;li&gt;...&lt;/li&gt;
    &lt;/ul&gt;</code></pre>
								</div>
								<div class="col-6-12-medium">
							<pre><code>&lt;ul class="tab tab-right col-6-12-medium"&gt;
    &lt;li&gt;...&lt;/li&gt;
&lt;/ul&gt;</code></pre>
								</div>
							</div>
						</li>
					</ul>
					<h3>Responsive behavior</h3>
					<p>In narrower viewports, like phones, vertical tabs align themselves horizontally. Adding the <code>data-tab</code> attribute will apply the same responsive behavior as horizontal tabs.</p>
					<hr>
					<h2 id="tabs-with-dropdowns"><a href="#tabs-with-dropdowns" class="link-reset">Tabs with dropdowns</a></h2>
					<p>This is an example of how to use tabs with the<a href="<?php echo get_url('core/dropdown'); ?>">Dropdown component</a>.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#tab5-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="tab5-tabs" class="switcher margin">
						<li>
							<ul class="tab col-7-10-medium" data-tab>
								<li class="active"><a href="#">Active</a></li>
								<li><a href="#">Item</a></li>
								<li><a href="#">Item</a></li>
								<li data-dropdown="{mode:'click'}">
									<a href="#">More <i class="icon-chevron-down"></i>
									</a>
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
								</li>
							</ul>
						</li>
						<li>
							<pre><code>&lt;ul class="tab"&gt;
    &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;

    &lt;!-- This is the container enabling the JavaScript --&gt;
    &lt;li data-dropdown="{mode:'click'}"&gt;

        &lt;!-- This is the menu item toggling the dropdown --&gt;
        &lt;a href="#"&gt;...&lt;/a&gt;

        &lt;!-- This is the dropdown --&gt;
        &lt;div class="dropdown dropdown-small"&gt;
            &lt;ul class="nav nav-dropdown"&gt;
                &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3>Events</h3>
					<p>You can bind callbacks to following events for custom functionality:</p>
					<div class="overflow-container">
						<table class="table-striped text-nowrap">
							<thead>
								<tr>
									<th>Name</th>
									<th>Parameter</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>change.clique.tab</code></td>
									<td>event, active item</td>
									<td>On tab item change</td>
								</tr>
							</tbody>
						</table>
					</div>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
