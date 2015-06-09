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
