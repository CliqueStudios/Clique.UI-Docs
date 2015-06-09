<hr>
<h3>Nav Dropdown</h3>
<p>Creates a <em>nav</em> component within a <a href="<?php echo get_url('core/dropdown'); ?>">dropdown</a>.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#nav-dropdown-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="nav-dropdown-tabs" class="switcher margin">
	<li>
		<div class="dropdown-button" data-dropdown>
			<button class="button">Hover to open <i class="icon-chevron-down"></i></button>
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
		</div>
	</li>
	<li>
		<pre><code>&lt;div class="dropdown"&gt;
    &lt;ul class="nav nav-dropdown"&gt;...&lt;/ul&gt;
&lt;/div&gt;</code></pre>
	</li>
</ul>
