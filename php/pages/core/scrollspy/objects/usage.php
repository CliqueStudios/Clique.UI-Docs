<hr>
<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
<p>Typically, classes from the <a href="<?php echo get_url('core/animation'); ?>">Animation component</a> are used together with the scrollspy.</p>
<p><span class="badge">NOTE:</span> This example uses the <code>repeat: true</code> option. Scroll up and down to see the triggered animations.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#scrollspy-tabs'}">
			<li><a href="#">Classes</a></li>
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="scrollspy-tabs" class="switcher margin">
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
						<td><code>[data-scrollspy]</code></td>
						<td>This is the identifier for the JavaScript to initialize the component.</td>
					</tr>
				</tbody>
			</table>
		</div>
	</li>
	<li>
		<?php
			$i = 10;
			while($i > 0) {
				?>
				<div class="row">
					<div class="col-3-12-medium">
						<div class="panel panel-box" data-scrollspy="{class:'animation-fade',repeat:true}">
							<h3>In View</h3>
							<p>Lorem ipsum dolor sit amet.</p>
						</div>
					</div>
				</div>
				<?php
				$i--;
			}
		?>
	</li>
	<li>
		<pre><code>&lt;div class="panel panel-box" data-scrollspy="{class:'animation-fade',repeat:true}"&gt;
	...
&lt;/div&gt;</code></pre>
	</li>
</ul>

