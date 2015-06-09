<hr>
<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
<p>The <em>navbar</em> component consists of the navbar itself and one or more navigation items.</p>
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
						<td>Add this class to a <code>&lt;nav&gt;</code> element to define the <em>navbar</em> component.</td>
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
		<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
			<div class="col">
				<h3>Sub Objects</h3>
			</div>
		</div>
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
						<td><code>.navbar-flip</code></td>
						<td>Add this class to an <code>&lt;div&gt;</code> element to group and align navigations and items to the right.</td>
					</tr>
					<tr>
						<td><code>.navbar-subtitle</code></td>
						<td>Add this class to an <code>&lt;a&gt;</code> tag in an <code>&lt;li&gt;</code> to indicate that it has a subtitle.</td>
					</tr>
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
