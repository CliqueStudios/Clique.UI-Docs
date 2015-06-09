
<div class="container container-center">
	<h1>Cover</h1>
	<h2>Cover Background</h2>
	<h3>Fixed Height</h3>
	<div class="cover-background test-bg test-height flex flex-center flex-middle">
		<div class="test-text">Text</div>
	</div>
	<h3>Responsive Height</h3>
	<div class="cover-background position-relative test-bg">
		<img class="invisible" src="<?php echo get_image('placeholder.jpg'); ?>" style="height:400px;width:600px;" width="600" height="400" alt="">
		<div class="position-cover flex flex-center flex-middle">
			<div class="test-text">Text</div>
		</div>
	</div>
	<h3>Viewport Height</h3>
	<div class="cover-background height-viewport test-bg flex flex-center flex-middle">
		<div class="test-text">Text</div>
	</div>
	<h2>Cover Object</h2>
	<h3>Image Fixed Height</h3>
	<div class="test-height cover position-relative">
		<img class="cover-object" src="<?php echo get_image('placeholder.jpg'); ?>" alt="">
		<div class="position-cover flex flex-center flex-middle">
			<div class="test-text">Text</div>
		</div>
	</div>
	<h3>Video Fixed Height</h3>
	<div class="test-height cover position-relative">
		<video class="cover-object" width="600" height="400" autoplay loop muted controls>
			<source src="http://www.quirksmode.org/html5/videos/big_buck_bunny.mp4?test1" type="video/mp4">
			<source src="http://www.quirksmode.org/html5/videos/big_buck_bunny.ogv?test1" type="video/ogg">
		</video>
		<div class="position-cover flex flex-center flex-middle">
			<div class="test-text">Text</div>
		</div>
	</div>
	<h3>Responsive Height</h3>
	<div class="cover position-relative">
		<img class="invisible" src="<?php echo get_image('placeholder.jpg'); ?>" style="height:400px;width:600px;" width="600" height="400" alt="">
		<video class="cover-object position-absolute" width="600" height="400" autoplay loop muted controls>
			<source src="http://www.quirksmode.org/html5/videos/big_buck_bunny.mp4?test2" type="video/mp4">
			<source src="http://www.quirksmode.org/html5/videos/big_buck_bunny.ogv?test2" type="video/ogg">
		</video>
		<div class="position-cover flex flex-center flex-middle">
			<div class="test-text">Text</div>
		</div>
	</div>
	<h3>Viewport Height</h3>
	<div class="height-viewport cover position-relative">
		<video class="cover-object" width="600" height="400" autoplay loop muted controls>
			<source src="http://www.quirksmode.org/html5/videos/big_buck_bunny.mp4?test3" type="video/mp4">
			<source src="http://www.quirksmode.org/html5/videos/big_buck_bunny.ogv?test3" type="video/ogg">
		</video>
		<div class="position-cover flex flex-center flex-middle">
			<div class="test-text">Text</div>
		</div>
	</div>
	<h2>Cover Iframes</h2>
	<h3>Youtube Fixed Height</h3>
	<div class="test-height cover position-relative">
		<iframe data-cover src="http://www.youtube.com/embed/YE7VzlLtp-4?autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;loop=1&amp;modestbranding=1&amp;wmode=transparent" width="560" height="315" frameborder="0" allowfullscreen></iframe>
		<div class="position-cover flex flex-center flex-middle">
			<div class="test-text">Text</div>
		</div>
	</div>
	<h3>Vimeo Fixed Height</h3>
	<div class="test-height cover position-relative">
		<iframe data-cover src="http://player.vimeo.com/video/1084537?title=0&amp;byline=0&amp;autoplay=1&amp;loop=1&amp;setVolume=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		<div class="position-cover flex flex-center flex-middle">
			<div class="test-text">Text</div>
		</div>
	</div>
	<h3>Responsive Height</h3>
	<div class="cover position-relative">
		<img class="invisible" src="<?php echo get_image('placeholder.jpg'); ?>" style="height:400px;width:600px;" width="600" height="400" alt="">
		<iframe class="position-absolute" data-cover src="http://www.youtube.com/embed/YE7VzlLtp-4?autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;loop=1&amp;modestbranding=1&amp;wmode=transparent" width="560" height="315" frameborder="0" allowfullscreen></iframe>
		<div class="position-cover flex flex-center flex-middle">
			<div class="test-text">Text</div>
		</div>
	</div>
	<h3>Viewport Height</h3>
	<div class="height-viewport cover position-relative">
		<iframe data-cover src="http://www.youtube.com/embed/YE7VzlLtp-4?autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;loop=1&amp;modestbranding=1&amp;wmode=transparent" width="560" height="315" frameborder="0" allowfullscreen></iframe>
		<div class="position-cover flex flex-center flex-middle">
			<div class="test-text">Text</div>
		</div>
	</div>
</div>
