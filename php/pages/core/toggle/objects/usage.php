<hr>
<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
<p>To apply this component, just add the <code>data-toggle="{target: #ID}"</code> attribute to a <code>&lt;button&gt;</code> or <code>&lt;a&gt;</code> element. You can use any selector with the toggle attribute.</p>
<p>The toggle will add or remove a class from the item. By default, it adds the <code>.hidden</code> class to hide the element.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#toggle-tabs'}">
			<li><a href="#">Classes</a></li>
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="toggle-tabs" class="switcher margin">
	<li>
		<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
			<div class="col">
				<h3>Data Attributes</h3>
			</div>
		</div>
		<div class="overflow-container">
			<table class="table-striped text-nowrap">
				<thead>
					<tr>
						<th>Attribute</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><code>[data-toggle]</code></td>
						<td>This is the identifier for the JavaScript to initialize the toggle.</td>
					</tr>
				</tbody>
			</table>
		</div>
	</li>
	<li>
		<p><button class="button" data-toggle="{target:'#toggle1'}">Click Me</button></p>
		<div id="toggle1" class="panel panel-box">This will show &amp; hide</div>
	</li>
	<li>
		<pre><code>&lt;button class="button" data-toggle="{target:'#target'}"&gt;...&lt;/button&gt;
&lt;div id="target"&gt;...&lt;/div&gt;</code></pre>
	</li>
</ul>
