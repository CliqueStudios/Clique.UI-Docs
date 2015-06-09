<hr>
<h2 id="clearing-and-floating"><a href="#clearing-and-floating" class="link-reset">Clearing and floating</a></h2>
<p>Floating is fundamental for creating all kinds of layouts. But floats need to be cleared or in the worst case, you might end up with a scrambled site. The following classes will help you to setup basic layouts.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#clearfix-tabs'}">
			<li><a href="#">Classes</a></li>
			<li><a href="#">Examples</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="clearfix-tabs" class="switcher margin">
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
						<td><code>.float-left</code></td>
						<td>Float the element to the left.</td>
					</tr>
					<tr>
						<td><code>.float-right</code></td>
						<td>Float the element to the right.</td>
					</tr>
					<tr>
						<td><code>.clearfix</code></td>
						<td>Add this class to a parent container to clear floats.</td>
					</tr>
				</tbody>
			</table>
		</div>
	</li>
	<li>
		<div class="clearfix">
			<div class="float-left">
				<div class="panel panel-box">
					Floating Left
				</div>
			</div>
			<div class="float-right">
				<div class="panel panel-box">
					Floating Right
				</div>
			</div>
		</div>
	</li>
	<li>
							<pre><code>&lt;div class="clearfix"&gt;
    &lt;div class="float-right"&gt;...&lt;/div&gt;
    &lt;div class="float-left"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
	</li>
</ul>
