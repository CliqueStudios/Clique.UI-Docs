<h3>Navbar with dropdowns</h3>
<p>A navbar can contain a dropdown from the <a href="<?php echo get_url('core/dropdown'); ?>">Dropdown component</a>. Add the <code>.dropdown-navbar</code> modifier to the dropdown to match the style of the navbar.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#navbar-dropdown-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="navbar-dropdown-tabs" class="switcher margin">
	<li>
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
	</li>
	<li>
		<pre><code>&lt;nav class="navbar"&gt;
	&lt;ul class="navbar-nav"&gt;
		&lt;li class="parent" data-dropdown&gt;
			&lt;a href=""&gt;Parent&lt;/a&gt;
			&lt;div class="dropdown dropdown-navbar"&gt;
				&lt;ul class="nav nav-navbar"&gt;
					...
				&lt;/ul&gt;
			&lt;/div>
		&lt;/li&gt;
	&lt;/ul&gt;
&lt;/nav&gt;</code></pre>
	</li>
</ul>
