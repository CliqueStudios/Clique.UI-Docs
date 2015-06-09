<hr>
<h2 id="modifiers"><a href="#modifiers" class="link-reset">Modifiers</a></h2>
<h3>Reverse</h3>
<p>By default, all aimations are incoming. To reverse any animation, add the <code>.animation-reverse</code> class.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#animation-reverse-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="animation-reverse-tabs" class="switcher margin">
	<li>
		<div class="row text-center">
			<?php
				$classes = array(
					'animation-fade',
					'animation-scale-up',
					'animation-scale-down',
				);
				foreach($classes as $class) {
					?>
					<div class="col-4-12-medium animation-hover margin-bottom">
						<div class="panel panel-box animation-reverse <?php echo $class; ?>"><?php echo ucwords(str_replace('-', ' ', $class)); ?></div>
					</div>
					<?php
				}
			?>
		</div>
	</li>
	<li>
		<pre><code><?php
			foreach($classes as $i => $class) {
				$last = $i == count($classes) - 1 ? "\n" : "\n\n";
				echo '&lt;div class="animation-reverse ' . $class . '"&gt;...&lt;/div&gt;' . "\n";
			}
		?></code></pre>
	</li>
</ul>
