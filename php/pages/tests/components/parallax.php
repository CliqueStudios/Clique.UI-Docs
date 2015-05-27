
<div class="container container-center">
	<div class="panel panel-box panel-box-primary" data-parallax="{y: -200, opacity: 0}">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</div>
	<div class="panel panel-box panel-box-primary" data-parallax="{x: '-100,0', color: '#2D7091,#D85030', 'background-color': '#EBF7FD,#FFF1F0', 'border-color': '#2D7091,#D85030'}">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</div>
	<div class="margin text-contrast text-center flex flex-center flex-middle" data-parallax="{bg: '50,-50'}" style="height: 350px; background-image: url(<?php echo get_image('placeholder_800x400_2.jpg'); ?>);"></div>
	<div id="target-example" class="margin text-contrast text-center flex flex-center flex-middle" data-parallax="{bg: '50,-50'}" style="height: 350px; background-image: url(<?php echo get_image('placeholder_800x400_2.jpg'); ?>);">
		<div class="width-medium-1-2" data-parallax="{target: '#target-example', scale: 0}">
			<h1 class="text-contrast">Title</h1>
			<p class="text-large">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
	</div>
	<div class="panel panel-box panel-box-primary" data-parallax="{x: '-100,0', target: '#target-option'}">
		This box is animated as long as the headline &quot;Target Option&quot; is in the viewport.
	</div>
	<div id="test-velocity" class="margin text-contrast text-center flex flex-center flex-middle" style="height: 350px; background-image: url(<?php echo get_image('placeholder_800x400_2.jpg'); ?>); background-size: cover;">
		<div class="row flex flex-center flex-middle">
			<div><div class="panel panel-box" data-parallax="{target:'#test-velocity', y:150, velocity:0.04, viewport: 0.9}">0.04</div></div>
			<div><div class="panel panel-box" data-parallax="{target:'#test-velocity', y:150, velocity:0.2, viewport: 0.9}">0.2</div></div>
			<div><div class="panel panel-box" data-parallax="{target:'#test-velocity', y:150, velocity:0.6, viewport: 0.9}">0.6</div></div>
			<div><div class="panel panel-box" data-parallax="{target:'#test-velocity', y:150, velocity:1, viewport: 0.9}">1</div></div>
			<div><div class="panel panel-box" data-parallax="{target:'#test-velocity', y:150, velocity:2, viewport: 0.9}">2</div></div>
			<div><div class="panel panel-box" data-parallax="{target:'#test-velocity', y:150, velocity:3, viewport: 0.9}">3</div></div>
			<div><div class="panel panel-box" data-parallax="{target:'#test-velocity', y:150, velocity:4, viewport: 0.9}">4</div></div>
		</div>
	</div>
	<div class="panel panel-box panel-box-primary" data-parallax="{x: '-100,0', viewport: 0.5}">
		This animation is finished when the element reaches the middle of the viewport.
	</div>
</div>
