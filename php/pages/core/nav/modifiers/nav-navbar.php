<hr>
<h3>Nav Navbar</h3>
<p>Used in <a href="<?php echo get_url('core/dropdown'); ?>">dropdown</a> components specifically found within <a href="<?php echo get_url('core/navbar'); ?>">navbar</a> elements.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#nav-navbar-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="nav-navbar-tabs" class="switcher margin">
	<li>
		<nav class="navbar">
			<ul class="navbar-nav">
				<li class="parent" data-dropdown>
					<a href="#">Hover to open</a>
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
