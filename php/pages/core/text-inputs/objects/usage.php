<hr>
<h2 id="control-states"><a href="#control-states" class="link-reset">Control states</a></h2>
<p>Provide the user with basic information through feedback states on form controls.</p>
<h3>Disabled</h3>
<p>Add the <code>disabled</code> attribute to a form control and it will be appear muted.</p>
<?php /*
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#subnav-tabs'}">
			<li><a href="#">Classes</a></li>
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="subnav-tabs" class="switcher margin">
	<li>
		<div class="overflow-container">
			<table class="table-striped text-nowrap">
				<thead>
					<tr>
						<th>Class</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><code>.subnav</code></td>
						<td>Creates the <em>subnav</em> component. Apply this class to a <code>&lt;ul&gt;</code> element.</td>
					</tr>
					<tr>
						<td><code>.active</code></td>
						<td>Applied to an <code>&lt;li&gt;</code> item of the subnav, this class creates an <em>active</em> item.</td>
					</tr>
					<tr>
						<td><code>.disabled</code></td>
						<td>Applied to an <code>&lt;li&gt;</code> item of the subnav, this class creates a <em>disabled</em> item.</td>
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
			<table class="table-striped text-nowrap">
				<thead>
					<tr>
						<th>Class</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><code>.subnav-line</code></td>
						<td>Adds additional space and a horizontal seperator between each <code>&lt;li&gt;</code> item.</td>
					</tr>
					<tr>
						<td><code>.subnav-pill</code></td>
						<td>Each <code>&lt;li&gt;</code> item is given padding on all sides, and active items are highlighted with a background color.</td>
					</tr>
				</tbody>
			</table>
		</div>
	</li>
	<li>
		<ul class="subnav">
			<li class="active"><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
			<li class="disabled"><a href="#">Disabled</a></li>
		</ul>
	</li>
	<li>
		<pre><code>&lt;ul class="subnav"&gt;
    &lt;li class="active"&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
    &lt;li class="disabled"&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
	</li>
</ul>
*/ ?>

					<?php
$text = '<input type="text" placeholder="Text input" disabled>
<select disabled>
	<option>Option 01</option>
	<option>Option 02</option>
	<option>Option 03</option>
</select>';
						print_example($text);
					?>
