<hr>
<h2 id="pull"><a href="#pull" class="link-reset">Pull</a></h2>
<p>In contrast to the <code>.push-*-*</code> component, applying the <code>.pull-*-*</code> class will add a negative left value to the element.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#pull-tabs'}">
			<li class="active" aria-expanded="true"><a href="#">Classes</a></li>
			<li aria-expanded="false" class=""><a href="#">Example</a></li>
			<li aria-expanded="false" class=""><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="pull-tabs" class="switcher margin">
	<li>
		<div class="overflow-container">
			<table class="table-striped">
				<thead>
					<tr>
						<th class="col-2-12">Class</th>
						<th class="col-2-12">CSS</th>
						<th class="col-8-12">Example</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 11;
					while($i > 0) {
						?>
						<tr>
							<td><code>.pull-<?php echo $i; ?>-12</code></td>
							<td>left: <?php echo round(($i / 12) * 100, 4) . '%'; ?>;</td>
							<td>
								<div class="row">
									<div class="pull-<?php echo $i; ?>-12 col-<?php echo (12 - $i); ?>-12">
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
				<div class="col-4-12 pull-4-12">
					<div class="panel panel-box">
						<code>.col-4-12 .pull-4-12</code>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6-12 pull-3-12">
					<div class="panel panel-box">
						<code>.col-6-12 .pull-3-12</code>
					</div>
				</div>
			</div>
		</div>
	</li>
	<li>
		<pre><code>&lt;div class="row"&gt;
    &lt;div class="col-4-12"&gt;...&lt;/div&gt;
    &lt;div class="col-4-12 pull-4-12"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
    &lt;div class="col-6-12 pull-3-12"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
	</li>
</ul>
