
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>

			<?php get_sidebar('core'); ?>

			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Subnav</h1>
					<p class="article-lead" itemprop="about">Defines different styles for a sub navigation.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>To apply this component, use the following classes. To align a subnav, for example to horizontally center it, you can use the <a href="<?php echo get_url('core/flexbox'); ?>">Flex component</a>.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#subnav-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="subnav-tabs" class="switcher margin">
						<li>
							<ul class="subnav">
								<li class="active"><a href="#">Item</a></li>
								<li><a href="#">Item</a></li>
								<li><a href="#">Item</a></li>
								<li class="disabled"><a href="#">Disabled</a></li>
							</ul>
						</li>
						<li>
							<pre><code>&lt;ul class="subnav"&gt;
    &lt;li class="active"&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
    &lt;li class="disabled"&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="modifiers"><a href="#modifiers" class="link-reset">Modifiers</a></h2>
					<h3>Subnav line</h3>
					<p>Add the <code>.subnav-line</code> class to separate menu items with lines.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#subnav1-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="subnav1-tabs" class="switcher margin">
						<li>
							<ul class="subnav subnav-line">
								<li class="active"><a href="#">Item</a></li>
								<li><a href="#">Item</a></li>
								<li><a href="#">Item</a></li>
								<li class="disabled"><a href="#">Disabled</a></li>
							</ul>
						</li>
						<li>
							<pre><code>&lt;ul class="subnav subnav-line"&gt;
    &lt;li&gt;...&lt;/li&gt;
&lt;/ul&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3>Subnav pill</h3>
					<p>Add the <code>.subnav-pill</code> class to highlight the active menu item with a background. To apply an active state to a menu item, just add the <code>.active</code> class.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#subnav2-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="subnav2-tabs" class="switcher margin">
						<li>
							<ul class="subnav subnav-pill">
								<li class="active"><a href="#">Item</a></li>
								<li><a href="#">Item</a></li>
								<li><a href="#">Item</a></li>
								<li class="disabled"><a href="#">Disabled</a></li>
							</ul>
						</li>
						<li>
							<pre><code>&lt;ul class="subnav subnav-pill"&gt;
    &lt;li class="active"&gt;...&lt;/li&gt;
&lt;/ul&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="subnav-with-dropdowns"><a href="#subnav-with-dropdowns" class="link-reset">Subnav with dropdowns</a></h2>
					<p>This is an example of how to use a subnav with the <a href="<?php echo get_url('core/dropdown'); ?>">Dropdown component</a>.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#subnav3-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="subnav3-tabs" class="switcher margin">
						<li>
							<ul class="subnav subnav-pill">
								<li class="active"><a href="#">Active</a></li>
								<li><a href="#">Item</a></li>
								<li class="disabled"><a href="#">Disabled</a></li>
								<li data-dropdown="{mode:'click'}">
									<a href="#">More <i class="icon-chevron-down"></i></a>
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
							<pre><code>&lt;ul class="subnav"&gt;
    &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;

    &lt;!-- This is the container enabling the JavaScript --&gt;
    &lt;li data-dropdown="{mode:'click'}"&gt;

        &lt;!-- This is the nav item toggling the dropdown --&gt;
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
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
