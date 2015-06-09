<hr>
<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
<p>The Cover component is applied differently, depending on whether you are using a background image, an object or an iframe. The simplest way is to add the <code>.cover-background</code> class to a <code>&lt;div&gt;</code> element with a background image.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#cover-tabs'}">
			<li><a href="#">Classes</a></li>
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="cover-tabs" class="switcher margin">
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
						<td><code>.cover</code></td>
						<td>Main component class. These prevents children from overflowing.</td>
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
						<td><code>.cover-background</code></td>
						<td>Centers and stretches the background image to the size of the container using the CSS <code>background-size: cover;</code>.</td>
					</tr>
					<tr>
						<td><code>.cover-object</code></td>
						<td>Stretches the element to the size of the parent <code>.cover</code> element.</td>
					</tr>
				</tbody>
			</table>
		</div>
	</li>
	<li>
		<div class="cover" style="height:300px;">
			<div class="cover-background cover-object" style="height:450px; background-image:url(<?php echo get_image('placeholder_600x400.jpg'); ?>);"></div>
		</div>
	</li>
	<li>
		<pre><code>&lt;div class="cover" style="height: 300px;"&gt;
    &lt;div class="cover-background cover-object" style="height: 450px; background-image:url(sample.jpg);"&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
	</li>
</ul>
