<h3>Dropdown Alignment Modifiers</h3>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#dropdown-alignment-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="dropdown-alignment-tabs" class="switcher margin">
	<li>
		<div class="row">
			<div class="col-4-12-medium">
				<div class="dropdown-button" data-dropdown="{trigger:'click'}">
					<button class="button">Aligned Center <i class="icon-chevron-down"></i></button>
					<div class="dropdown dropdown-center">
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
			</div>
			<div class="col-4-12-medium">
				<div class="dropdown-button" data-dropdown="{trigger:'click'}">
					<button class="button">Aligned Right <i class="icon-chevron-down"></i></button>
					<div class="dropdown dropdown-right">
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
			</div>
			<div class="col-4-12-medium">
				<div class="docs-dropdown-parent" data-dropdown="{trigger:'click'}">
					<button class="button">Aligned Justify <i class="icon-chevron-down"></i></button>
					<div class="dropdown dropdown-justify">
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
			</div>
		</div>
	</li>
	<li>
		<pre><code>&lt;div class="dropdown-button" data-dropdown&gt;
	&lt;button class="button"&gt;Trigger&lt;/button&gt;
	&lt;div class="dropdown dropdown-center"&gt;
		...
	&lt;/div&gt;
&lt;/div&gt;

&lt;div class="dropdown-button" data-dropdown&gt;
	&lt;button class="button"&gt;Trigger&lt;/button&gt;
	&lt;div class="dropdown dropdown-right"&gt;
		...
	&lt;/div&gt;
&lt;/div&gt;

&lt;div class="dropdown-button" data-dropdown&gt;
	&lt;button class="button"&gt;Trigger&lt;/button&gt;
	&lt;div class="dropdown dropdown-justify"&gt;
		...
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
	</li>
</ul>
