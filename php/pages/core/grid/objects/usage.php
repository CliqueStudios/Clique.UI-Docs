<hr>
<h2 id="usage"><a href="#usage" class="link-reset">Basic Usage</a></h2>
<p>Each grid is bound by a <code>.row</code> element, and populated by <code>.col</code> elements. Both the <code>.row</code> and <code>.col</code> elements have different modifier classes that we'll explore later.</p>
<p>The <code>.col</code> element class with a predefined width is prefixed with <code>col</code>, to represent a column within the row. The class is then followed by two integers, seperated by a single dash, which represents the fraction of space it takes up within the parent <code>.row</code> element. Let's look at how this plays out in the Base 12 and Base 10 grid systems.</p>
<p><span class="badge">NOTE</span> The grid has no style related CSS. In these examples we included elements from the <a href="<?php echo get_url('core/panel'); ?>">Panel component</a>.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<h3>Components</h3>
</div>
<div class="overflow-container margin">
	<table class="table-striped">
		<thead>
			<tr>
				<th>Class</th>
				<th>Description</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><code>.row</code></td>
				<td>Defines the style and behaviors of the grid. Apply this class and any modifiers to an element which contains child columns.</td>
			</tr>
			<tr>
				<td><code>.col-*-*</code></td>
				<td>Add this class to a <code>&lt;ul&gt;</code> element to create a navigation. Use <code>&lt;a&gt;</code> elements as menu items within the list.</td>
			</tr>
			<tr>
				<td><code>.push-*-*</code></td>
				<td>Add this class to a list item to apply an active state.</td>
			</tr>
			<tr>
				<td><code>.pull-*-*</code></td>
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
				<td><code>.row-*-cols</code></td>
				<td>Creates a grid of even-width columns</td>
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
				<td><code>.row-collapse</code></td>
				<td>Removes spacing between columns</td>
			</tr>
			<tr>
				<td><code>.row-small</code></td>
				<td>Reduces spacing between columns to <em>10px</em></td>
			</tr>
			<tr>
				<td><code>.row-medium</code></td>
				<td>Reduces spacing between columns to <em>20px</em></td>
			</tr>
			<tr>
				<td><code>.row-divider</code></td>
				<td>Adds a horizontal seperator between it's columns</td>
			</tr>
			<tr>
				<td><code>.row-match</code></td>
				<td>Applies the same height to each of it's columns' immediate child element</td>
			</tr>
		</tbody>
	</table>
</div>
