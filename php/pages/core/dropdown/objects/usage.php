<hr>
<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
<p>Any content, like a button, can toggle a dropdown. Just wrap the toggle with a <code>&lt;div&gt;</code> element and add the <code>data-dropdown</code> attribute. Add the <code>.dropdown</code> class to a child <code>&lt;div&gt;</code> element to create the dropdown itself. A dropdown can be enabled by either hovering or clicking the the toggle.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#dropdown-tabs'}">
			<li><a href="#">Classes</a></li>
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="dropdown-tabs" class="switcher margin">
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
						<td><code>.dropdown</code></td>
						<td>Applies the base style for a dropdown element.</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
			<div class="col">
				<h3>Data Attributes</h3>
			</div>
		</div>
		<div class="overflow-container">
			<table class="table-striped">
				<thead>
					<tr>
						<th>Attribute</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><code>[data-dropdown]</code></td>
						<td>The attribute read by the JavaScript to identify a dropdown element.</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
			<div class="col">
				<h3>Modifiers</h3>
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
						<td><code>.dropdown-right</code></td>
						<td>Aligns the dropdown to the right boundary of the parent element, instead of the left.</td>
					</tr>
					<tr>
						<td><code>.dropdown-center</code></td>
						<td>Centers the dropdown within it's parent element.</td>
					</tr>
					<tr>
						<td><code>.dropdown-justify</code></td>
						<td>Extends the dropdown to the width of it's parent.<br><span class="badge badge-danger">Important</span> If using this class, the element that has the <code>[data-dropdown]</code> attribute must has <code>postiiton: relative;</code> distinctly set in the css.</td>
					</tr>
					<tr>
						<td><code>.dropdown-up</code></td>
						<td>Displays the dropdown above the trigger element.</td>
					</tr>
					<tr>
						<td><code>.dropdown-navbar</code></td>
						<td>When used as a sub-object of the <a href="<?php echo get_url('core/navbar'); ?>">navbar</a> component, the dropdown will inherit the styles of the navbar.</td>
					</tr>
					<tr>
						<td><code>.dropdown-scrollable</code></td>
						<td>Sets a max-height to the dropdown, forcing the content to take of scroll behavior.</td>
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
						<td><code>.dropdown-button</code></td>
						<td>When applied to the element which wraps the element which triggers the dropdown (and the dropdown itself), this class forces inline behavior and vertically aligns all immediate children.</td>
					</tr>
				</tbody>
			</table>
		</div>
	</li>
	<li>
		<div class="dropdown-button" data-dropdown>
			<button class="button">Show on Hover <i class="icon-chevron-down"></i></button>
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
		<div class="dropdown-button" data-dropdown="{trigger:'click'}">
			<button class="button">Show on Click <i class="icon-chevron-down"></i></button>
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
	</li>
	<li>
		<pre><code>&lt;div class="dropdown-button" data-dropdown&gt;
	&lt;button class="button"&gt;Trigger&lt;/button&gt;
	&lt;div class="dropdown"&gt;
		...
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
	</li>
</ul>
