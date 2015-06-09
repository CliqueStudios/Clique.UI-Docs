<hr>
<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
<p>To apply this component, add any <code>.animation-*</code> class to an element and it will fade in with a nice animation. These classes are commonly set by using JavaScript to apply the animation to specific behaviors.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#animation-tabs'}">
			<li><a href="#">Classes</a></li>
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="animation-tabs" class="switcher margin">
	<li>
		<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
			<div class="col">
				<h3>Sub Objects</h3>
			</div>
		</div>
		<div class="overflow-container">
			<table class="table-striped">
				<thead>
					<tr>
						<th>Class</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><code>.animation-hover</code></td>
						<td>Will execute the animation on hover.</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
			<div class="col">
				<h3>Modifiers</h3>
			</div>
		</div>
		<div class="overflow-container">
			<table class="table-striped">
				<thead>
					<tr>
						<th>Class</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><code>.animation-fade</code></td>
						<td>The element fades in.</td>
					</tr>
					<tr>
						<td><code>.animation-scale-up</code></td>
						<td>The element scales up.</td>
					</tr>
					<tr>
						<td><code>.animation-scale-down</code></td>
						<td>The element scales down.</td>
					</tr>
					<tr>
						<td><code>.animation-slide-top</code></td>
						<td>The element slides in from the top.</td>
					</tr>
					<tr>
						<td><code>.animation-slide-bottom</code></td>
						<td>The element slides in from the bottom.</td>
					</tr>
					<tr>
						<td><code>.animation-slide-left</code></td>
						<td>The element slides in from the left.</td>
					</tr>
					<tr>
						<td><code>.animation-slide-right</code></td>
						<td>The element slides in from the right.</td>
					</tr>
					<tr>
						<td><code>.animation-shake</code></td>
						<td>The element shakes.</td>
					</tr>
					<tr>
						<td><code>.animation-scale</code></td>
						<td>The element scales down without fading in.</td>
					</tr>
					<tr>
						<td><code>.animation-reverse</code></td>
						<td>This class will reverse the animation direction.</td>
					</tr>
					<tr>
						<td><code>.animation-15</code></td>
						<td>Extends the animation time to 15 seconds.</td>
					</tr>
					<tr>
						<td><code>.animation-delay-100</code></td>
						<td>Delays the animation by 100 milliseconds.</td>
					</tr>
					<tr>
						<td><code>.animation-delay-200</code></td>
						<td>Delays the animation by 200 milliseconds.</td>
					</tr>
					<tr>
						<td><code>.animation-delay-300</code></td>
						<td>Delays the animation by 300 milliseconds.</td>
					</tr>
					<tr>
						<td><code>.animation-delay-400</code></td>
						<td>Delays the animation by 400 milliseconds.</td>
					</tr>
					<tr>
						<td><code>.animation-delay-500</code></td>
						<td>Delays the animation by 500 milliseconds.</td>
					</tr>
					<tr>
						<td><code>.animation-top-left</code></td>
						<td>Alters the <code>transform-origin</code> property to the top-left of the element.</td>
					</tr>
					<tr>
						<td><code>.animation-top-center</code></td>
						<td>Alters the <code>transform-origin</code> property to the top-center of the element.</td>
					</tr>
					<tr>
						<td><code>.animation-top-right</code></td>
						<td>Alters the <code>transform-origin</code> property to the top-right of the element.</td>
					</tr>
					<tr>
						<td><code>.animation-middle-left</code></td>
						<td>Alters the <code>transform-origin</code> property to the middle-left of the element.</td>
					</tr>
					<tr>
						<td><code>.animation-middle-center</code></td>
						<td>Alters the <code>transform-origin</code> property to the middle-center of the element.</td>
					</tr>
					<tr>
						<td><code>.animation-middle-right</code></td>
						<td>Alters the <code>transform-origin</code> property to the middle-right of the element.</td>
					</tr>
					<tr>
						<td><code>.animation-bottom-left</code></td>
						<td>Alters the <code>transform-origin</code> property to the bottom-left of the element.</td>
					</tr>
					<tr>
						<td><code>.animation-bottom-center</code></td>
						<td>Alters the <code>transform-origin</code> property to the bottom-center of the element.</td>
					</tr>
					<tr>
						<td><code>.animation-bottom-right</code></td>
						<td>Alters the <code>transform-origin</code> property to the bottom-right of the element.</td>
					</tr>
				</tbody>
			</table>
		</div>
	</li>
	<li>
		<div class="row text-center">
			<?php
				$classes = array(
					'animation-fade',
					'animation-scale-up',
					'animation-scale-down',
					'animation-slide-top',
					'animation-slide-bottom',
					'animation-slide-left',
					'animation-slide-right',
					'animation-shake',
					'animation-scale',
				);
				foreach($classes as $class) {
					?>
					<div class="col-4-12-medium animation-hover margin-bottom">
						<div class="panel panel-box <?php echo $class; ?>"><?php echo ucwords(str_replace('-', ' ', $class)); ?></div>
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
				echo '&lt;div class="' . $class . '"&gt;...&lt;/div&gt;' . "\n";
			}
		?></code></pre>
	</li>
</ul>
