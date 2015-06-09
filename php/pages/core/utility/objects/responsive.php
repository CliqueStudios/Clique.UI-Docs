<hr>
<h2 id="responsive-objects"><a href="#responsive-objects" class="link-reset">Responsive Objects</a></h2>
<p>Images in <?php echo SITENAME; ?> adapt to the width of their parent container by default. If you want to apply the responsive behavior to media elements or iframes, just add one of the following classes.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#responsive-objects-tabs'}">
			<li><a href="#">Classes</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="responsive-objects-tabs" class="switcher margin">
	<li>
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
						<td><code>.responsive-width</code></td>
						<td>Adjusts the object's width according to its parent's width, maintaining the aspect ratio.</td>
					</tr>
					<tr>
						<td><code>.responsive-height</code></td>
						<td>Adjusts the object's height according to its parent's height, maintaining the aspect ratio.</td>
					</tr>
				</tbody>
			</table>
		</div>
	</li>
	<li>
		<pre><code>&lt;div style="height: 100px;"&gt;
	&lt;img class="responsive-height" src="sample.jpg" width="600px" height="900px"&gt;
&lt;/div&gt;

&lt;div style="width: 100px;"&gt;
	&lt;img class="responsive-height" src="sample.jpg" width="900px" height="600px"&gt;
&lt;/div&gt;</code></pre>
	</li>
</ul>
