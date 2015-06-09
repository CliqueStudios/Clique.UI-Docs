<hr>
					<h2 id="switcher-animations"><a href="#switcher-animations" class="link-reset">Animations</a></h2>
					<p>The Switcher component allows you to add different animations to items when toggling between them. All you need to do is add the <code>animation</code> parameter to the data-attribute and define the animation that you want to apply. Check the table below for an overview of the animations provided.</p>
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
									<td><code>fade</code></td>
									<td>The element fades in.</td>
								</tr>
								<tr>
									<td><code>scale</code></td>
									<td>The items scale up.</td>
								</tr>
								<tr>
									<td><code>slide-top</code></td>
									<td>The items slide in from the top.</td>
								</tr>
								<tr>
									<td><code>slide-bottom</code></td>
									<td>The items slide in from the bottom.</td>
								</tr>
								<tr>
									<td><code>slide-left</code></td>
									<td>The items slide in from the left.</td>
								</tr>
								<tr>
									<td><code>slide-right</code></td>
									<td>The items slide in from the right.</td>
								</tr>
								<tr>
									<td><code>slide-horizontal</code></td>
									<td>The items slide horizontally, the direction depending on the adjacency of the item.</td>
								</tr>
								<tr>
									<td><code>slide-vertical</code></td>
									<td>The items slide vertically, the direction depending on the adjacency of the item.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<?php
					$text = '<div class="row row-4-cols-medium margin" data-row-margin>
	<div>
		<h5 class="h4">Fade</h5>
		<ul class="subnav subnav-pill" data-switcher="{connect:\'#switcher-content-a-fade\', animation: \'fade\'}">
			<li class="active"><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
		</ul>
		<ul id="switcher-content-a-fade" class="switcher margin">
			<li>Hello!</li>
			<li>Hello again!</li>
			<li>World!</li>
		</ul>
	</div>
	<div>
		<h5 class="h4">Scale</h5>
		<ul class="subnav subnav-pill" data-switcher="{connect:\'#switcher-content-a-scale\', animation: \'scale\'}">
			<li class="active"><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
		</ul>
		<ul id="switcher-content-a-scale" class="switcher margin">
			<li>Hello!</li>
			<li>Hello again!</li>
			<li>World!</li>
		</ul>
	</div>
	<div>
		<h5 class="h4">Slide top</h5>
		<ul class="subnav subnav-pill" data-switcher="{connect:\'#switcher-content-a-slide-top\', animation: \'slide-top\'}">
			<li class="active"><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
		</ul>
		<ul id="switcher-content-a-slide-top" class="switcher margin">
			<li>Hello!</li>
			<li>Hello again!</li>
			<li>World!</li>
		</ul>
	</div>
	<div>
		<h5 class="h4">Slide bottom</h5>
		<ul class="subnav subnav-pill" data-switcher="{connect:\'#switcher-content-a-slide-bottom\', animation: \'slide-bottom\'}">
			<li class="active"><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
		</ul>
		<ul id="switcher-content-a-slide-bottom" class="switcher margin">
			<li>Hello!</li>
			<li>Hello again!</li>
			<li>World!</li>
		</ul>
	</div>
	<div>
		<h5 class="h4">Slide left</h5>
		<ul class="subnav subnav-pill" data-switcher="{connect:\'#switcher-content-a-slide-left\', animation: \'slide-left\'}">
			<li class="active"><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
		</ul>
		<ul id="switcher-content-a-slide-left" class="switcher margin">
			<li>Hello!</li>
			<li>Hello again!</li>
			<li>World!</li>
		</ul>
	</div>
	<div>
		<h5 class="h4">Slide right</h5>
		<ul class="subnav subnav-pill" data-switcher="{connect:\'#switcher-content-a-slide-right\', animation: \'slide-right\'}">
			<li class="active"><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
		</ul>
		<ul id="switcher-content-a-slide-right" class="switcher margin">
			<li>Hello!</li>
			<li>Hello again!</li>
			<li>World!</li>
		</ul>
	</div>
	<div>
		<h5 class="h4">Slide horizontal</h5>
		<ul class="subnav subnav-pill" data-switcher="{connect:\'#switcher-content-a-slide-horizontal\', animation: \'slide-horizontal\'}">
			<li class="active"><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
		</ul>
		<ul id="switcher-content-a-slide-horizontal" class="switcher margin">
			<li>Hello!</li>
			<li>Hello again!</li>
			<li>World!</li>
		</ul>
	</div>
	<div>
		<h5 class="h4">Slide vertical</h5>
		<ul class="subnav subnav-pill" data-switcher="{connect:\'#switcher-content-a-slide-vertical\', animation: \'slide-vertical\'}">
			<li class="active"><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
		</ul>
		<ul id="switcher-content-a-slide-vertical" class="switcher margin">
			<li>Hello!</li>
			<li>Hello again!</li>
			<li>World!</li>
		</ul>
	</div>
</div>';
						print_example($text);
					?>
					<hr>
					<h3 id="switcher-custom-animations"><a href="#switcher-custom-animations" class="link-reset">Custom animations</a></h3>
					<p>You can also apply multiple animations by using the <code>animation-*</code> classes from the <a href="<?php echo get_url('core/animation'); ?>">Animation component</a>. That way you can even create your own custom class to apply a different transition to the switcher.</p>
					<?php
					$text = '<ul class="subnav subnav-pill" data-switcher="{connect:\'#tab-content-a-anim-custom\', animation: \'animation-fade, animation-slide-left\'}">
	<li class="active"><a href="#">Tab</a></li>
	<li><a href="#">Tab</a></li>
	<li><a href="#">Tab</a></li>
</ul>
<ul id="tab-content-a-anim-custom" class="switcher margin">
	<li>Hello!</li>
	<li>Hello again!</li>
	<li>World!</li>
</ul>';
						print_example($text);
					?>
