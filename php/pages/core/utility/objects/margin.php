<hr>
<h2 id="margin"><a href="#margin" class="link-reset">Margin</a></h2>
<p>Add one of the following classes to add spacing to block elements.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
	<ul class="tab" data-tab="{connect:'#margin-tabs'}">
		<li><a href="#">Classes</a></li>
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="margin-tabs" class="switcher margin">
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
						<td><code>.margin</code></td>
						<td>Adds the same top and bottom margins as a paragraph usually has.</td>
					</tr>
					<tr>
						<td><code>.margin-top</code></td>
						<td>Adds top margin.</td>
					</tr>
					<tr>
						<td><code>.margin-bottom</code></td>
						<td>Adds bottom margin.</td>
					</tr>
					<tr>
						<td><code>.margin-left</code></td>
						<td>Adds left margin.</td>
					</tr>
					<tr>
						<td><code>.margin-right</code></td>
						<td>Adds right margin.</td>
					</tr>
				</tbody>
			</table>
		</div>
	</li>
	<li>
		<div class="row">
			<div class="col-6-12">
				<div class="panel panel-box" style="padding:0;">
					<div class="margin">
						<div class="panel panel-box panel-box-primary">Margin</div>
					</div>
				</div>
				<div class="panel panel-box" style="padding:0;">
					<div class="margin-top">
						<div class="panel panel-box panel-box-primary">Margin Top</div>
					</div>
				</div>
				<div class="panel panel-box" style="padding:0;">
					<div class="margin-bottom">
						<div class="panel panel-box panel-box-primary">Margin Bottom</div>
					</div>
				</div>
				<div class="panel panel-box" style="padding:0;">
					<div class="margin-left">
						<div class="panel panel-box panel-box-primary">Margin Left</div>
					</div>
				</div>
				<div class="panel panel-box" style="padding:0;">
					<div class="margin-right">
						<div class="panel panel-box panel-box-primary">Margin Right</div>
					</div>
				</div>
			</div>
		</div>
	</li>
	<li>
		<pre><code>&lt;div class="margin"&gt;...&lt;/div&gt;
&lt;div class="margin-top"&gt;...&lt;/div&gt;
&lt;div class="margin-bottom"&gt;...&lt;/div&gt;
&lt;div class="margin-left"&gt;...&lt;/div&gt;
&lt;div class="margin-right"&gt;...&lt;/div&gt;</code></pre>
	</li>
</ul>
<hr>
<h3>Larger margin</h3>
<p>Add one of the following classes to add larger spacing to block elements.</p>
<div class="overflow-container">
	<table class="table-striped text-nowrap">
		<thead>
			<tr>
				<th class="col-3-12">Class</th>
				<th class="col-9-12">Description</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><code>.margin-large</code></td>
				<td>Adds large top and bottom margin.</td>
			</tr>
			<tr>
				<td><code>.margin-large-top</code></td>
				<td>Adds large top margin.</td>
			</tr>
			<tr>
				<td><code>.margin-large-bottom</code></td>
				<td>Adds large bottom margin.</td>
			</tr>
			<tr>
				<td><code>.margin-large-left</code></td>
				<td>Adds large left margin.</td>
			</tr>
			<tr>
				<td><code>.margin-large-right</code></td>
				<td>Adds large right margin.</td>
			</tr>
		</tbody>
	</table>
</div>
<hr>
<h3>Smaller margin</h3>
<p>Add one of the following classes to add smaller spacing to block elements.</p>
<div class="overflow-container">
	<table class="table-striped text-nowrap">
		<thead>
			<tr>
				<th class="col-3-12">Class</th>
				<th class="col-9-12">Description</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><code>.margin-small</code></td>
				<td>Adds small top and bottom margin.</td>
			</tr>
			<tr>
				<td><code>.margin-small-top</code></td>
				<td>Adds small top margin.</td>
			</tr>
			<tr>
				<td><code>.margin-small-bottom</code></td>
				<td>Adds small bottom margin.</td>
			</tr>
			<tr>
				<td><code>.margin-small-left</code></td>
				<td>Adds small left margin.</td>
			</tr>
			<tr>
				<td><code>.margin-small-right</code></td>
				<td>Adds small right margin.</td>
			</tr>
		</tbody>
	</table>
</div>
<hr>
<h3>Remove margin</h3>
<p>Add one of the following classes to remove spacing from block elements.</p>
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
				<td><code>.margin-remove</code></td>
				<td>Removes all margins.</td>
			</tr>
			<tr>
				<td><code>.margin-top-remove</code></td>
				<td>Removes top margin.</td>
			</tr>
			<tr>
				<td><code>.margin-bottom-remove</code></td>
				<td>Removes bottom margin.</td>
			</tr>
		</tbody>
	</table>
</div>
<hr>
<h2 id="auto-margin"><a href="#auto-margin" class="link-reset">Auto margin</a></h2>
<p>To add spacing to stacking elements, for example inline elements that wrap on smaller vieports, just add the <code>data-margin</code> attribute to their parent container. It will automatically add the <code>.margin-small-top</code> to the lower element.</p>
<p><span class="badge">NOTE</span> By default, the data attribute adds the <code>.margin-small-top</code> class to stacking elements. To apply a bigger margin, just add the <code>{cls:'margin-top'}</code> option.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#auto-margin-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="auto-margin-tabs" class="switcher margin">
	<li>
		<p class="col-6-12" data-margin>
			<button class="button">Button</button>
			<button class="button">Button</button>
			<button class="button">Button</button>
			<button class="button">Button</button>
			<button class="button">Button</button>
			<button class="button">Button</button>
			<button class="button">Button</button>
			<button class="button">Button</button>
			<button class="button">Button</button>
			<button class="button">Button</button>
		</p>
	</li>
	<li>
		<pre><code>&lt;p data-margin&gt;
    &lt;button&gt;...&lt;/button&gt;
    &lt;button&gt;...&lt;/button&gt;
&lt;/p&gt;</code></pre>
	</li>
</ul>
