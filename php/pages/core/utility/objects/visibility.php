<hr>
<h2 id="visibility-utilities"><a href="#visibility-utilities" class="link-reset">Visibility utilities</a></h2>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#visible-utilities-tabs'}">
			<li><a href="#">Classes</a></li>
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="visible-utilities-tabs" class="switcher margin">
	<li>
		<div class="overflow-container">
			<table class="table-condensed">
				<thead>
					<tr>
						<th class="col-3-12">Class</th>
						<th class="col-9-12">Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><code>.hidden</code></td>
						<td>Hides the element on any device.</td>
					</tr>
					<tr>
						<td><code>.hidden-touch</code></td>
						<td>Hides the element on touch devices.</td>
					</tr>
					<tr>
						<td><code>.hidden-notouch</code></td>
						<td>Hides the element on non-touch devices.</td>
					</tr>
					<tr>
						<td><code>.invisible</code></td>
						<td>Visually hides the element without affecting dom structure.</td>
					</tr>
					<tr>
						<td><code>.visible-hover</code></td>
						<td>Displays hidden content on hover using <code>display: block</code>. Add this class to the parent element.</td>
					</tr>
					<tr>
						<td><code>.visible-hover-inline</code></td>
						<td>Displays hidden content on hover using <code>display: inline-block</code>. Add this class to the parent element.</td>
					</tr>
				</tbody>
			</table>
		</div>
	</li>
	<li>
		<div class="visible-hover-inline margin">
			Hover me...
			<div class="hidden">World!</div>
		</div>
	</li>
	<li>
		<pre><code>&lt;div class="visible-hover"&gt;
    ...
    &lt;div class="hidden"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
	</li>
</ul>
