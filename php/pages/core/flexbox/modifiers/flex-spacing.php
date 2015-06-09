<hr>
<h3>Spacing Modifiers</h3>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#flex-spacing-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="flex-spacing-tabs" class="switcher margin">
	<li>
		<div class="docs-flex-example">
			<div class="row">
			<?php
				$classes = array(
					// 'flex flex-top',
					// 'flex flex-middle',
					// 'flex flex-bottom',
					// 'flex flex-left',
					// 'flex flex-center',
					// 'flex flex-right',
					'flex flex-space-around',
					'flex flex-space-between',
					// 'flex flex-row',
					// 'flex flex-row-reverse',
					// 'flex flex-column',
					// 'flex flex-column-reverse',
					// 'flex flex-wrap',
					// 'flex flex-wrap-reverse',
				);
				$three_cols = array(
					'flex flex-top',
					'flex flex-middle',
					'flex flex-bottom',
					'flex flex-left',
					'flex flex-center',
					'flex flex-right',
				);
				foreach($classes as $class) {
					$display_class = '.' . str_replace(' ', ' .', $class);
					$wrap = 'col-6-12-medium';
					if(in_array($class, $three_cols)) {
						$wrap = 'col-4-12-medium';
					}
					?>
					<div class="<?php echo $wrap; ?>">
						<p><code><?php echo $display_class; ?></code></p>
						<div class="docs-panel-row docs-flex-row">
							<div class="<?php echo $class; ?>">
								<div class="col">
									<div class="panel panel-box" style="height:100px;">Item 1</div>
								</div>
								<div class="col">
									<div class="panel panel-box" style="height:100px;">Item 2</div>
								</div>
								<div class="col">
									<div class="panel panel-box" style="height:100px;">Item 3</div>
								</div>
							</div>
						</div>
					</div>
					<?php
				}
			?>
			</div>
		</div>
	</li>
	<li>
		<pre><code><?php
				foreach($classes as $i => $class) {
					$display_class = '.' . str_replace(' ', ' .', $class);
					$last = $i == count($classes) - 1 ? "\n" : "\n\n";

					echo '&lt;div class="' . $class . '"&gt;' . "\n";
						echo "\t" . '...' . "\n";
					echo '&lt;/div&gt;' . $last;
				}
			?></code></pre>
	</li>
</ul>
