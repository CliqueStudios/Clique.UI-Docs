<hr>
<h3>Origin Modifiers</h3>
<p>By default, scaling animations originate from the center. To modify this behavior, add one of these classes.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#animation-origin-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="animation-origin-tabs" class="switcher margin">
	<li>
		<div class="row text-center">
			<?php
				$classes = array(
					'animation-top-left animation-scale-up',
					'animation-top-center animation-scale-up',
					'animation-top-right animation-scale-up',
					'animation-middle-left animation-scale-up',
					'animation-middle-center animation-scale-up',
					'animation-middle-right animation-scale-up',
					'animation-bottom-left animation-scale-up',
					'animation-bottom-center animation-scale-up',
					'animation-bottom-right animation-scale-up',
				);
				foreach($classes as $class) {
					?>
					<div class="col-4-12-medium animation-hover margin-bottom">
						<div class="panel panel-box <?php echo $class; ?>"><?php echo ucwords(str_replace('-', ' ', str_replace(' animation-scale-up', '', $class))); ?></div>
					</div>
					<?php
				}
			?>
		</div>
	</li>
	<li>
		<pre><code><?php
			foreach($classes as $i => $class) {
				echo '&lt;div class="' . $class . '"&gt;...&lt;/div&gt;' . "\n";
				if($i % 3 == 2) {
					echo "\n";
				}
			}
		?></code></pre>
	</li>
</ul>
