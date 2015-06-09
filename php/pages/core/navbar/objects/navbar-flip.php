<hr>
<h2 id="subobjects"><a href="#subobjects" class="link-reset">Sub Objects</a></h2>
<h3>Navbar Flip</h3>
<p>Add the <code>.navbar-flip</code> class to a <code>&lt;div&gt;</code> element to group and align navigations and items to the right.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#navbar-flip-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="navbar-flip-tabs" class="switcher margin">
	<li>
		<nav class="navbar">
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
