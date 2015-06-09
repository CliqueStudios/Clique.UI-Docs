
<script charset="utf-8">
	jQuery(function($) {
		var lightbox = Clique.lightbox.create([{
			'source': 'http://www.quirksmode.org/html5/videos/big_buck_bunny.mp4',
			'type': 'video'
		}, {
			'source': 'http://unsplash.it/700/500',
			'type': 'image'
		}]);
		$('#buttonLightbox').on('click', function() {
			lightbox.show();
		});
	});
</script>
<div class="container container-center">
	<h1>Lightbox</h1>
	<h2>Different image dimensions</h2>
	<div class="row row-5-cols-medium" data-row-margin>
		<div>
			<a href="<?php echo get_image('placeholder_200x100.svg'); ?>" data-lightbox-type="image" data-lightbox="{group:'group1'}" title="Title">
				<img src="<?php echo get_image('placeholder_200x100.svg'); ?>" width="400" height="400" alt="">
			</a>
		</div>
		<div>
			<a href="<?php echo get_image('placeholder_300x455.svg'); ?>" data-lightbox-type="image" data-lightbox="{group:'group1'}" title="Title">
				<img src="<?php echo get_image('placeholder_300x455.svg'); ?>" width="400" height="400" alt="">
			</a>
		</div>
		<div>
			<a href="<?php echo get_image('placeholder_480x260.svg'); ?>" data-lightbox-type="image" data-lightbox="{group:'group1'}" title="Title">
				<img src="<?php echo get_image('placeholder_480x260.svg'); ?>" width="400" height="400" alt="">
			</a>
		</div>
		<div>
			<a href="<?php echo get_image('placeholder_400x200.svg'); ?>" data-lightbox-type="image" data-lightbox="{group:'group1'}" title="Title">
				<img src="<?php echo get_image('placeholder_400x200.svg'); ?>" width="400" height="400" alt="">
			</a>
		</div>
		<div>
			<a href="<?php echo get_image('placeholder_800x280.svg'); ?>" data-lightbox-type="image" data-lightbox="{group:'group1'}" title="Title">
				<img src="<?php echo get_image('placeholder_800x280.svg'); ?>" width="400" height="400" alt="">
			</a>
		</div>
	</div>
	<h2>Different content sources</h2>
	<div class="row row-col-3-12-medium" data-row-margin>
		<div>
			<a href="http://unsplash.it/800/800" data-lightbox-type="image" data-lightbox="{group:'group2'}" title="Title">
				<img src="<?php echo get_image('placeholder_400x200.svg'); ?>" width="400" height="400" alt="">
			</a>
		</div>
		<div>
			<a href="http://www.quirksmode.org/html5/videos/big_buck_bunny.mp4" data-lightbox="{group:'group2'}">
				<img src="<?php echo get_image('placeholder_400x200.svg'); ?>" width="400" height="400" alt="">
			</a>
		</div>
		<div>
			<a href="http://vimeo.com/1084537" data-lightbox="{group:'group2'}">
				<img src="<?php echo get_image('placeholder_400x200.svg'); ?>" width="400" height="400" alt="">
			</a>
		</div>
		<div>
			<a href="https://www.youtube.com/watch?v=YE7VzlLtp-4" data-lightbox="{group:'group2'}">
				<img src="<?php echo get_image('placeholder_400x200.svg'); ?>" width="400" height="400" alt="">
			</a>
		</div>
	</div>
	<h2>Dynamic lightbox</h2>
	<button id="buttonLightbox" class="button">Show dynamic lightbox</button>
</div>
