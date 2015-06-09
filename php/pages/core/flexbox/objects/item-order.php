<hr>
<h2 id="sub-objects"><a href="#sub-objects" class="link-reset">Sub Objects</a></h2>
<p>Each sub-object of the Flex component also has responsive modifiers attached to them like elements of the <a href="<?php echo get_url('core/grid'); ?>">grid</a> or <a href="<?php echo get_url('core/utility'); ?>">utility</a> components. For example, adding a <code>*-small</code> suffix to any sub-object class means that the modification will only be applied on viewports greater than <em>480px</em>.</p>
<h3>Item Order</h3>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#flex-item-order-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="flex-item-order-tabs" class="switcher margin">
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
									'flex-order-first'
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
									'flex-order-last',
									'item',
									'item'
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
