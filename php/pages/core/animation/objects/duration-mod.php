<hr>
<h3>Duration/Delay Modifiers</h3>
<p>To alter the duration and/or delay of animation property, apply one of the following classes</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#animation-duration-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="animation-duration-tabs" class="switcher margin">
	<li>
		<div class="row text-center">
			<?php
				$classes = array(
					'animation-15 animation-scale-up',
					'animation-delay-100 animation-scale-up',
					'animation-delay-200 animation-scale-up',
					'animation-delay-300 animation-scale-up',
					'animation-delay-400 animation-scale-up',
					'animation-delay-500 animation-scale-up',
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
				if($i == 0) {
					echo "\n";
				}
			}
		?></code></pre>
	</li>
</ul>
