<hr>
<h2 id="sub-objects"><a href="#sub-objects" class="link-reset">Sub Objects</a></h2>
<h3>Columns of Even Widths</h3>
<p>To create a grid whose child elements' widths are equal add one of the <code>.row-*-cols</code> classes to the row itself. This provides a significantly simpler and more elegant solution to repeatedly applying the same fixed column-width class across all row children.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#even-grid-columns-tabs'}">
			<li><a href="#">Classes</a></li>
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="even-grid-columns-tabs" class="switcher margin">
	<li>
		<div class="overflow-container">
			<table class="table-striped text-nowrap">
				<thead>
					<tr>
						<th>Class</th>
						<th>Width of Columns</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 12;
					while($i > 1) {
						?>
						<tr>
							<td><code>.row-<?php echo $i; ?>-cols</code></td>
							<td><?php echo round((1 / $i) * 100, 4) . '%'; ?></td>
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
		<?php
			$i = 12;
			while($i > 1) {
				?>
					<div class="docs-panel-row">
						<p><code><?php echo '.row-' . $i . '-cols'; ?></code></p>
						<ul class="row row-<?php echo $i; ?>-cols">
							<?php
								$c = $i;
								while($c > 0) {
									echo '<li><div class="panel panel-box"></div></li>' . "\n";
									$c--;
								}
							?>
						</ul>
					</div>
				<?php
				$i--;
			}
		?>
	</li>
	<li>
		<?php
			$i = 12;
			$output = '<pre><code>';
			while($i > 1) {
				if($i > 11 || $i < 3) {
					$output .= '&lt;ul class="row row-' . $i . '-cols"&gt;' . "\n";
					$output .= '    ...' . "\n";
					$output .= '&lt;/ul&gt;' . "\n\n";
				}
				$i--;
			}
			$output .= '</code></pre>';
			echo $output;
		?>
	</li>
</ul>
