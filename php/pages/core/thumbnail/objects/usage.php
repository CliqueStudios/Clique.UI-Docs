<hr>
<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
<p>To apply this component, just add the <code>.thumbnail</code> class to an <code>&lt;img&gt;</code>, <code>&lt;a&gt;</code> or <code>&lt;figure&gt;</code> element.</p>
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
					$image = get_image('placeholder_200x100.svg');
					$text = '<!-- .thumbnail applied to an `img` element -->
<img class="thumbnail" src="' . $image . '" width="200" height="100" alt="">

<!-- !pplied to an `a` tag -->
<a class="thumbnail" href="#">
	<img src="' . $image . '" width="200" height="100" alt="">
</a>

<!-- Applied to a parent `figure` tag -->
<figure class="thumbnail">
	<img src="' . $image . '" width="200" height="100" alt="">
</figure>';
						print_example($text);
					?>
