<hr>
<h2 id="height"><a href="#height" class="link-reset">Height</a></h2>
<p>Several classes allow you alter the height of an element:</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#height-tabs'}">
			<li><a href="#">Classes</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="height-tabs" class="switcher margin">
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
						<td><code>.height-1-1</code></td>
						<td>When applied to the <code>&lt;html&gt;</code> and <code>&lt;body&gt;</code> elements, this class will extend your styles to the height of the document.</td>
					</tr>
					<tr>
						<td><code>.height-viewport</code></td>
						<td>Using the <code>vh</code> unit of measurement, this class will extend the height of the element to that of the viewport.</td>
					</tr>
				</tbody>
			</table>
		</div>
	</li>
	<li>
		<pre><code>&lt;html class="height-1-1"&gt;
	&lt;head&gt;
		...
	&lt;/head&gt;
    &lt;body class="height-1-1"&gt;
    	&lt;!-- The page is now at least the height of the document --&gt;
    &lt;/body&gt;
&lt;/html&gt;

&lt;div class="height-viewport"&gt;
	&lt;!-- This element will be the same height as the screen or viewport --&gt;
&lt;/div&gt;</code></pre>
	</li>
</ul>
