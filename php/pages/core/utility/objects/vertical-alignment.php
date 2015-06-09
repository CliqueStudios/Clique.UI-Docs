<hr>
<h2 id="vertical-alignment"><a href="#vertical-alignment" class="link-reset">Vertical alignment</a></h2>
<p>To align objects vertically, you need to create a parent container to which the object itself will be aligned.</p>
<p><span class="badge">NOTE</span> The object you align needs to have a width or max-width that is smaller than its parent container.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#vertical-alignment-tabs'}">
			<li><a href="#">Classes</a></li>
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="vertical-alignment-tabs" class="switcher margin">
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
.vertical-align
.vertical-align-middle
.vertical-align-bottom
					<tr>
						<td><code>.vertical-align</code></td>
						<td>Add this class to the parent container. This container needs a specific height.</td>
					</tr>
					<tr>
						<td><code>.vertical-align-middle</code></td>
						<td>Add this class to the child element to center your content.</td>
					</tr>
					<tr>
						<td><code>.vertical-align-bottom</code></td>
						<td>Add this class to the child element to align your content to the bottom.</td>
					</tr>
				</tbody>
			</table>
		</div>
	</li>
	<li>
		<div class="row" data-row-margin>
			<div class="col-6-12-medium">
				<div class="vertical-align panel panel-box" style="height: 200px;">
					<div class="vertical-align-middle col-6-12-medium">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
				</div>
			</div>
			<div class="col-6-12-medium">
				<div class="vertical-align panel panel-box" style="height: 200px;">
					<div class="vertical-align-bottom col-6-12-medium">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
				</div>
			</div>
		</div>
	</li>
	<li>
		<div class="row" data-row-margin>
			<div class="col-6-12-medium">
				<pre><code>&lt;div class="vertical-align"&gt;
    &lt;div class="vertical-align-middle"&gt; ... &lt;/div&gt;
&lt;/div&gt;</code></pre>
								</div>
								<div class="col-6-12-medium">
									<pre><code>&lt;div class="vertical-align"&gt;
    &lt;div class="vertical-align-bottom"&gt; ... &lt;/div&gt;
&lt;/div&gt;</code></pre>
			</div>
		</div>
	</li>
</ul>
