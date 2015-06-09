<hr>
<h3>Navbar Content</h3>
<p>Add this class to a <code>&lt;div&gt;</code> element, which serves as a container for your custom content. The content will be centered vertically.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#navbar-content-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="navbar-content-tabs" class="switcher margin">
	<li>
		<nav class="navbar">
			<div class="navbar-content">Some <a href="">link</a>.</div>
			<div class="navbar-content hidden-small">
				<form class="form margin-remove display-inline-block">
					<input type="text" placeholder="Search">
					<button class="button button-primary">Submit</button>
				</form>
			</div>
			<div class="navbar-content navbar-flip hidden-small">
				<div class="button-group"><a class="button button-danger" href="">Link</a>
					<button class="button button-danger">Button</button>
				</div>
			</div>
		</nav>
	</li>
	<li>
		<pre><code>&lt;nav class="navbar"&gt;
    &lt;div class="navbar-content"&gt;
        ...
    &lt;/div&gt;
&lt;/nav&gt;</code></pre>
	</li>
</ul>
