
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Animation</h1>
					<p class="article-lead" itemprop="about">A basic collection of smooth animations to use within your page.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>To apply this component, add any <code>.animation-*</code> class to an element and it will fade in with a nice animation. These classes are commonly set by using JavaScript to apply the animation to specific behaviors.</p>
					<div class="overflow-container">
						<table class="table-striped text-nowrap">
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
							</tbody>
						</table>
					</div>
					<?php
					$text = '<div class="row text-center" data-row-match="{target:\'> div > .panel\'}" data-row-margin>
	<div class="col-2-10-medium animation-hover">
		<div class="panel panel-box animation-fade">Fade</div>
	</div>
	<div class="col-2-10-medium animation-hover">
		<div class="panel panel-box animation-scale-up">Scale up</div>
	</div>
	<div class="col-2-10-medium animation-hover">
		<div class="panel panel-box animation-scale-down">Scale down</div>
	</div>
	<div class="col-2-10-medium animation-hover">
		<div class="panel panel-box animation-shake">Shake</div>
	</div>
</div>
<div class="row text-center" data-row-match="{target:\'> div > .panel\'}" data-row-margin>
	<div class="col-2-10-medium animation-hover">
		<div class="panel panel-box animation-slide-top">Slide top</div>
	</div>
	<div class="col-2-10-medium animation-hover">
		<div class="panel panel-box animation-slide-bottom">Slide bottom</div>
	</div>
	<div class="col-2-10-medium animation-hover">
		<div class="panel panel-box animation-slide-left">Slide left</div>
	</div>
	<div class="col-2-10-medium animation-hover">
		<div class="panel panel-box animation-slide-right">Slide right</div>
	</div>
</div>
<div class="row text-center" data-row-match="{target:\'> div > .panel\'}" data-row-margin>
	<div class="col-2-10-medium animation-hover">
		<div class="panel panel-box animation-scale">Scale</div>
	</div>
</div>';
						print_example($text);
					?>
					<hr>
					<h2 id="reverse-modifier"><a href="#reverse-modifier" class="link-reset">Reverse modifier</a></h2>
					<p>By default, all aimations are incoming. To reverse any animation, add the <code>.animation-reverse</code> class.</p>
					<?php
					$text = '<div class="row text-center" data-row-match="{target:\'> div > .panel\'}" data-row-margin>
	<div class="col-2-10-medium animation-hover">
		<div class="panel panel-box animation-reverse animation-fade">Fade</div>
	</div>
	<div class="col-2-10-medium animation-hover">
		<div class="panel panel-box animation-reverse animation-scale-up">Scale up</div>
	</div>
	<div class="col-2-10-medium animation-hover">
		<div class="panel panel-box animation-reverse animation-scale-down">Scale down</div>
	</div>
	<div class="col-2-10-medium animation-hover">
		<div class="panel panel-box animation-reverse animation-shake">Shake</div>
	</div>
</div>
<div class="row text-center" data-row-match="{target:\'> div > .panel\'}" data-row-margin>
	<div class="col-2-10-medium animation-hover">
		<div class="panel panel-box animation-reverse animation-slide-top">Slide top</div>
	</div>
	<div class="col-2-10-medium animation-hover">
		<div class="panel panel-box animation-reverse animation-slide-bottom">Slide bottom</div>
	</div>
	<div class="col-2-10-medium animation-hover">
		<div class="panel panel-box animation-reverse animation-slide-left">Slide left</div>
	</div>
	<div class="col-2-10-medium animation-hover">
		<div class="panel panel-box animation-reverse animation-slide-right">Slide right</div>
	</div>
</div>
<div class="row text-center" data-row-match="{target:\'> div > .panel\'}" data-row-margin>
	<div class="col-2-10-medium animation-hover">
		<div class="panel panel-box animation-reverse animation-scale">Scale</div>
	</div>
</div>';
						print_example($text);
					?>
					<hr>
					<h2 id="duration-modifier"><a href="#duration-modifier" class="link-reset">Duration modifier</a></h2>
					<p>To stretch the animation duration to 15 seconds, add the <code>.animation-15</code> class.</p>
					<?php
					$text = '<div class="row text-center">
	<div class="col-2-10-medium animation-hover">
		<div class="panel panel-box animation-slide-right animation-15">Slide right</div>
	</div>
</div>';
						print_example($text);
					?>
					<hr>
					<h2 id="origin-modifier"><a href="#origin-modifier" class="link-reset">Origin modifier</a></h2>
					<p>By default, scaling animations originate from the center. To modify this behavior, add one of these classes.</p>
					<div class="overflow-container">
						<table class="table-striped text-nowrap">
							<thead>
								<tr>
									<th>Class</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>.animation-top-left</code></td>
									<td>The animation spreads from the top left.</td>
								</tr>
								<tr>
									<td><code>.animation-top-center</code></td>
									<td>The animation spreads from the top center.</td>
								</tr>
								<tr>
									<td><code>.animation-top-right</code></td>
									<td>The animation spreads from the top right.</td>
								</tr>
								<tr>
									<td><code>.animation-middle-left</code></td>
									<td>The animation spreads from the middle left.</td>
								</tr>
								<tr>
									<td><code>.animation-middle-right</code></td>
									<td>The animation spreads from the middle right.</td>
								</tr>
								<tr>
									<td><code>.animation-bottom-left</code></td>
									<td>The animation spreads from the bottom left.</td>
								</tr>
								<tr>
									<td><code>.animation-bottom-center</code></td>
									<td>The animation spreads from the bottom center.</td>
								</tr>
								<tr>
									<td><code>.animation-bottom-right</code></td>
									<td>The animation spreads from the bottom right.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<p>Click on any of the boxes to see the animation.</p>
					<?php
					$text = '<div class="row text-center" data-row-match="{target:\'> div > .panel\'}" data-row-margin>
	<div class="col-2-10-medium animation-hover">
		<div class="panel panel-box animation-scale animation-top-left">Top Left</div>
	</div>
	<div class="col-2-10-medium animation-hover">
		<div class="panel panel-box animation-scale animation-top-center">Top Center</div>
	</div>
	<div class="col-2-10-medium animation-hover">
		<div class="panel panel-box animation-scale animation-top-right">Top Right</div>
	</div>
	<div class="col-2-10-medium animation-hover">
		<div class="panel panel-box animation-scale animation-middle-left">Middle Left</div>
	</div>
</div>
<div class="row text-center" data-row-match="{target:\'> div > .panel\'}" data-row-margin>
	<div class="col-2-10-medium animation-hover">
		<div class="panel panel-box animation-scale animation-middle-right">Middle Right</div>
	</div>
	<div class="col-2-10-medium animation-hover">
		<div class="panel panel-box animation-scale animation-bottom-left">Bottom Left</div>
	</div>
	<div class="col-2-10-medium animation-hover">
		<div class="panel panel-box animation-scale animation-bottom-center">Bottom Center</div>
	</div>
	<div class="col-2-10-medium animation-hover">
		<div class="panel panel-box animation-scale animation-bottom-right">Bottom Right</div>
	</div>
</div>';
						print_example($text);
					?>
					<hr>
					<h2 id="animation-hover"><a href="#animation-hover" class="link-reset">Animation hover</a></h2>
					<p>To trigger an animation on hover, just add the <code>.animation-hover</code> class to the animated element itself or to a container.</p>
					<?php
					$text = '<div class="row text-center">
	<div class="col-2-10-medium">
		<div class="panel panel-box animation-fade animation-hover">Fade</div>
	</div>
	<div class="col-2-10-medium">
		<div class="animation-hover">
			<div class="panel panel-box animation-slide-right">Slide right</div>
		</div>
	</div>
</div>';
						print_example($text);
					?>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
