<hr>
<h3>Dropdown Up</h3>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#dropdown-up-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="dropdown-up-tabs" class="switcher margin">
	<li>
		<div class="dropdown-button" data-dropdown="{trigger:'click'}">
			<button class="button">Show on Click <i class="icon-chevron-down"></i></button>
			<div class="dropdown dropdown-up">
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
		<pre><code>&lt;div class="dropdown-button" data-dropdown&gt;
	&lt;button class="button"&gt;Trigger&lt;/button&gt;
	&lt;div class="dropdown dropdown-up"&gt;
		...
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
	</li>
</ul>
