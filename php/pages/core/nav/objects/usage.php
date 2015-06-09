<hr>
<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
<p>To create the <em>navbar</em> component add the <code>.nav</code> class to a <code>&lt;ul&gt;</code> element.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#nav-tabs'}">
			<li><a href="#">Classes</a></li>
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="nav-tabs" class="switcher margin">
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
					<td><code>.nav</code></td>
					<td>Add this class to a <code>&lt;ul&gt;</code> element to define the <em>nav</em> component.</td>
				</tr>
				<tr>
					<td><code>.parent</code></td>
					<td>Used to apply appropriate style to child elements in nested navigation elements.</td>
				</tr>
				<tr>
					<td><code>.active</code></td>
					<td>Add this class to an <code>&lt;li&gt;</code> to indicate an active state.</td>
				</tr>
				<tr>
					<td><code>.open</code></td>
					<td>In an accoridion nav element, this class is used to indicate and style an open item.</td>
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
					<td><code>.nav-header</code></td>
					<td>Add this class to an <code>&lt;li&gt;</code> element to create a header.</td>
				</tr>
				<tr>
					<td><code>.nav-divider</code></td>
					<td>Add this class to an <code>&lt;li&gt;</code> element to create a divider separating menu items.</td>
				</tr>
				<tr>
					<td><code>.nav-sub</code></td>
					<td>Add this class to the first nested <code>&lt;ul&gt;</code> for optimized spacing.</td>
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
					<td><code>.nav-side</code></td>
					<td>When used inside a <a href="<?php echo get_url('core/panel'); ?>">panel</a>, or other component this class applies the <em>nav</em> style.</td>
				</tr>
				<tr>
					<td><code>.nav-dropdown</code></td>
					<td>Creates a <em>nav</em> component within a <a href="<?php echo get_url('core/dropdown'); ?>">dropdown</a>.</td>
				</tr>
				<tr>
					<td><code>.nav-navbar</code></td>
					<td>Used in <a href="<?php echo get_url('core/dropdown'); ?>">dropdown</a> components specifically found within <a href="<?php echo get_url('core/navbar'); ?>">navbar</a> elements.</td>
				</tr>
				<tr>
					<td><code>.nav-offcanvas</code></td>
					<td>Apply this class when creating a nav inside of the <a href="<?php echo get_url('components/off canvas'); ?>">off canvas</a> component.</td>
				</tr>
				<tr>
					<td><code>.nav-parent-icon</code></td>
					<td>Adds an icon to all <code>.parent</code> elements within the nav.</td>
				</tr>
			</tbody>
		</table>
	</div>
</li>
	<li>
		<div class="col-4-12-medium">
			<ul class="nav nav-side">
				<li class="active"><a href="#">Active</a></li>
				<li><a href="#">Item</a></li>
				<li><a href="#">Item</a></li>
			</ul>
		</div>
	</li>
	<li>
		<pre><code>&lt;ul class="nav"&gt;
    &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
    &lt;li class="active"&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
	</li>
</ul>
