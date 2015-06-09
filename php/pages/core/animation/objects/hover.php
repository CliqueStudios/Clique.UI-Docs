<hr>
<h2 id="sub-objects"><a href="#sub-objects" class="link-reset">Subobjects</a></h2>
<h3>Animation Hover</h3>
<p>To trigger an animation on hover, add the <code>.animation-hover</code> class to the animated element itself or to a container.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#animation-hover-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="animation-hover-tabs" class="switcher margin">
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
				echo '&lt;div class="animation-hover ' . $class . '"&gt;...&lt;/div&gt;' . "\n";
			}
		?></code></pre>
	</li>
</ul>
