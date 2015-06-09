<hr>
<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
<p>The Tab component consists of clickable tabs, that are aligned side by side.</p>
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
				<td><code>.tab</code></td>
				<td>Add this class to a <code>&lt;ul&gt;</code> element to define the Tab component. Use <code>&lt;a&gt;</code> elements as tab items within the list.</td>
			</tr>
			<tr>
				<td><code>.active</code></td>
				<td>Add this class to a list item to apply an active state.</td>
			</tr>
			<tr>
				<td><code>.disabled</code></td>
				<td>Add this class to a list item to apply a disabled state.</td>
			</tr>
		</tbody>
	</table>
</div>
<p>The <code>data-tab</code> attribute is required for two purposes. Firstly, it enables the responsive behaviour. If the parent container is too small to accomodate all tabs, they will be combined into a dropdown, toggled by a single tab, which represents the active tab item. This also requires the <a href="<?php echo get_url('core/dropdown'); ?>">Dropdown component</a> in order to work.</p>
<p>And secondly, its functionality is coupled to the <a href="<?php echo get_url('core/switcher'); ?>">Switcher component</a>, which is necessary to dynamically transition through different contents using tabbed navigation.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#tab-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="tab-tabs" class="switcher margin">
	<li>
		<ul class="tab col-7-10-medium" data-tab>
			<li class="active"><a href="#">Active</a></li>
			<li><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
			<li class="disabled"><a href="#">Disabled</a></li>
		</ul>
	</li>
	<li>
		<pre><code>&lt;ul class="tab" data-tab&gt;
    &lt;li class="active"&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
    &lt;li class="disabled"&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
	</li>
</ul>
