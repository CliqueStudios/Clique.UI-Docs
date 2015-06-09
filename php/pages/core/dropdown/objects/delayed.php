<hr>
<h3>Delayed dropdowns in hover mode</h3>
<p>You can set a <code>delay</code> parameter in milliseconds to prevent the immediate appearance of the dropdown.</p>
<div class="dropdown-button" data-dropdown="{delay: 1000}">
	<button class="button">Hover me <i class="icon-chevron-down"></i></button>
	<div class="dropdown">
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
<h3 class="docs-article-subtitle">Markup</h3>
<pre><code>&lt;div class="dropdown" data-dropdown="{delay: 1000}"&gt; ... &lt;/div&gt;</code></pre>
