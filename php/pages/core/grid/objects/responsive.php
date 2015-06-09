<hr>
<h2 id="responsive"><a href="#responsive" class="link-reset">Responsive</a></h2>
<p>Like the <a href="<?php echo get_url('core/utility#visibility-utilities'); ?>">responsive visiblity</a> utility classes, you can suffix the <code>.row</code> and <code>.col</code> components with <code>*-small</code>, <code>*-medium</code>, or <code>*-large</code> to limit the application of it's style to a particular viewport width.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
	<ul class="tab" data-tab="{connect:'#grid-responsive-tabs'}">
			<li><a href="#">Classes</a></li>
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="grid-responsive-tabs" class="switcher margin">
	<li>
		<div class="overflow-container">
			<table class="table-striped text-nowrap">
				<thead>
					<tr>
						<th>Class</th>
						<th>Example</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><code>.*</code> (No class suffix)</td>
						<td><code>.row</code></td>
						<td>Affects all device widths.</td>
					</tr>
					<tr>
						<td><code>.*-xsmall</code></td>
						<td><code>.col-6-12-xsmall</code></td>
						<td>Affects device widths of <em>480px</em> and smaller <strong>only</strong>.</td>
					</tr>
					<tr>
						<td><code>.*-small</code></td>
						<td><code>.row-6-cols-small</code></td>
						<td>Affects device widths of <em>480px</em> and higher. Grid columns will stack on smaller sizes.</td>
					</tr>
					<tr>
						<td><code>.*-medium</code></td>
						<td><code>.col-6-12-medium</code></td>
						<td>Affects device widths of <em>768px</em> and higher. Grid columns will stack on smaller sizes.</td>
					</tr>
					<tr>
						<td><code>.*-large</code></td>
						<td><code>.row-2-cols-large</code></td>
						<td>Affects device widths of <em>960px</em> and higher. Grid columns will stack on smaller sizes.</td>
					</tr>
				</tbody>
			</table>
		</div>
	</li>
	<li>
		<div class="docs-grid-truncate text-center">
			<div class="row" data-row-margin>
				<div class="col-4-12-large col-6-12-medium">
					<div class="panel panel-box">
						50% >= 768px<br>
						33.333% >= 960px
					</div>
				</div>
				<div class="col-4-12-large hidden-medium">
					<div class="panel panel-box">
						<em>display: none</em> &lt; 960px<br>
						33.333% >= 960px
					</div>
				</div>
				<div class="col-4-12-large col-6-12-medium">
					<div class="panel panel-box">
						50% >= 768px<br>
						33.333% >= 960px
					</div>
				</div>
			</div>
			<div class="row" data-row-margin>
				<div class="col-4-12-medium col-6-12">
					<div class="panel panel-box">
						50% @ all widths<br>
						33.333% >= 768px
					</div>
				</div>
				<div class="col-4-12-medium hidden-small">
					<div class="panel panel-box">
						<em>display: none</em> &lt; 768px<br>
						33.333% >= 768px
					</div>
				</div>
				<div class="col-4-12-medium col-6-12">
					<div class="panel panel-box">
						50% @ all widths<br>
						33.333% >= 768px
					</div>
				</div>
			</div>
			<div class="row" data-row-margin>
				<div class="col-12-12 visible-small">
					<div class="panel panel-box">
						100% @ all widths<br>
						<em>display: block</em> &lt; 767px;
					</div>
				</div>
				<div class="col-12-12-medium visible-medium">
					<div class="panel panel-box">
						100% @ all widths<br>
						<em>display: block</em> &lt; 959px;
					</div>
				</div>
				<div class="col-12-12-large visible-large">
					<div class="panel panel-box panel-box">
						100% @ all widths<br>
						<em>display: block</em> >= 960px;
					</div>
				</div>
			</div>
		</div>
	</li>
	<li>
		<pre><code>&lt;div class="col-4-12-large hidden-medium"&gt;
	&lt;div class="panel panel-box"&gt;
		display: none less than 960px
		33.333% >= 960px
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
	</li>
</ul>
