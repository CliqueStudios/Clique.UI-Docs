<hr>
<h3>Flex Grow/Shrink Modifiers</h3>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#flex-item-sie-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="flex-item-sie-tabs" class="switcher margin">
	<li>
		<div class="docs-flex-example">
			<div class="row">
				<div class="col-12-12">
					<div class="docs-panel-row docs-flex-row">
						<div class="flex">
							<?php
								$classes = array(
									'item',
									'item',
									'flex-item-grow'
								);
								foreach($classes as $class) {
									$display_class = '.' . str_replace(' ', ' .', $class);
									?>
									<div class="<?php echo $class; ?> item-grow">
										<div class="panel panel-box" style="height:50px;"><code><?php echo $display_class; ?></code></div>
									</div>
									<?php
								}
							?>
						</div>
					</div>
					<div class="docs-panel-row docs-flex-row">
						<div class="flex">
							<?php
								$classes = array(
									'item',
									'item',
									'flex-item-shrink'
								);
								foreach($classes as $class) {
									$display_class = '.' . str_replace(' ', ' .', $class);
									?>
									<div class="<?php echo $class; ?> item-grow">
										<div class="panel panel-box" style="height:50px;"><code><?php echo $display_class; ?></code></div>
									</div>
									<?php
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</li>
	<li>
		<pre><code><?php
					echo '&lt;div class="flex"&gt;' . "\n";
						foreach($classes as $i => $class) {
							echo "\t" . '&lt;div class="' . $class . '"&gt;...&lt;/div&gt;' . "\n";
						}
					echo '&lt;/div&gt;' . $last;
			?></code></pre>
	</li>
</ul>
