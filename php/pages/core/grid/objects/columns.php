<hr>
<h2 id="columns"><a href="#columns" class="link-reset">Columns</a></h2>
<p>A basic grid component is created by adding the <code>.row</code>class to a wrapping element and <code>.col-*-*</code> classes to it's children. This allows for optimum control over the spacing and layout of your content.</p>
<p>Each column of the grid is represented by a class that is broken down into three pieces seperated by hypens - the first, <code>.col</code> identifies the element itself as a column. The second, <code>-*</code>, or a hyphen followed by a number, represents the value of the total whole which that element's width will expand to. The final piece, <code>-*</code>, once again a hyphen represented by another number, represents the total value from which the element's width could potentially occupy.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#column-tabs'}">
			<li class="active" aria-expanded="true"><a href="#">Classes</a></li>
			<li aria-expanded="false" class=""><a href="#">Example</a></li>
			<li aria-expanded="false" class=""><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="column-tabs" class="switcher margin">
	<li>
		<div class="overflow-container">
			<table class="table-striped text-nowrap">
				<thead>
					<tr>
						<th class="col-2-12">Class</th>
						<th class="col-2-12">CSS</th>
						<th class="col-8-12">Example</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 12;
					while($i > 0) {
						?>
						<tr>
							<td><code>.col-<?php echo $i; ?>-12</code></td>
							<td>width: <?php echo round(($i / 12) * 100, 3) . '%'; ?>;</td>
							<td>
								<div class="row">
									<div class="col-<?php echo $i; ?>-12">
										<div class="panel panel-box"></div>
									</div>
								</div>
							</td>
						</tr>
						<?php
						$i--;
					}
					?>
				</tbody>
			</table>
		</div>
	</li>
	<li>
		<div class="docs-grid-truncate text-center">
			<div class="row">
				<div class="col-4-12">
					<div class="panel panel-box">
						<code>.col-4-12</code>
					</div>
				</div>
				<div class="col-4-12">
					<div class="panel panel-box">
						<code>.col-4-12</code>
					</div>
				</div>
				<div class="col-4-12">
					<div class="panel panel-box">
						<code>.col-4-12</code>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6-12">
					<div class="panel panel-box">
						<code>.col-6-12</code>
					</div>
				</div>
				<div class="col-6-12">
					<div class="panel panel-box">
						<code>.col-6-12</code>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-3-12">
					<div class="panel panel-box">
						<code>.col-3-12</code>
					</div>
				</div>
				<div class="col-2-12">
					<div class="panel panel-box">
						<code>.col-2-12</code>
					</div>
				</div>
				<div class="col-7-12">
					<div class="panel panel-box">
						<code>.col-7-12</code>
					</div>
				</div>
			</div>
		</div>
	</li>
	<li>
		<pre><code>&lt;div class="row"&gt;
    &lt;div class="col-4-12"&gt;...&lt;/div&gt;
    &lt;div class="col-4-12"&gt;...&lt;/div&gt;
    &lt;div class="col-4-12"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
    &lt;div class="col-6-12"&gt;...&lt;/div&gt;
    &lt;div class="col-6-12"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
    &lt;div class="col-3-12"&gt;...&lt;/div&gt;
    &lt;div class="col-2-12"&gt;...&lt;/div&gt;
    &lt;div class="col-7-12"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
	</li>
</ul>
