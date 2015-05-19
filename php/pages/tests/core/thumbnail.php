

	<div class="container container-center">

		<h1>Thumbnail</h1>

		<h2>Image, anchor, figure</h2>

		<div class="margin" data-margin>
			<img class="thumbnail" src="<?php echo get_image('placeholder_200x100.svg'); ?>" alt="">
			<a class="thumbnail" href="#">
				<img src="<?php echo get_image('placeholder_200x100.svg'); ?>" alt="">
			</a>
			<figure class="thumbnail">
				<img src="<?php echo get_image('placeholder_200x100.svg'); ?>" alt="">
			</figure>
		</div>

		<div class="margin" data-margin>
			<div class="thumbnail">
				<img src="<?php echo get_image('placeholder_200x100.svg'); ?>" alt="">
				<div class="thumbnail-caption">Caption <code>&lt;div&gt;</code></div>
			</div>
			<a class="thumbnail" href="#">
				<img src="<?php echo get_image('placeholder_200x100.svg'); ?>" alt="">
				<div class="thumbnail-caption">Caption <code>&lt;a&gt;</code></div>
			</a>
			<figure class="thumbnail">
				<img src="<?php echo get_image('placeholder_200x100.svg'); ?>" alt="">
				<figcaption class="thumbnail-caption">Caption <code>&lt;figure&gt;</code></figcaption>
			</figure>
		</div>

		<h2>Auto sizes</h2>

		<div class="margin" data-margin>
			<img class="thumbnail thumbnail-large" src="<?php echo get_image('placeholder_600x400.jpg'); ?>" alt="">
			<a class="thumbnail thumbnail-large" href="#">
				<img src="<?php echo get_image('placeholder_600x400.jpg'); ?>" alt="">
			</a>
		</div>
		<div class="margin" data-margin>
			<img class="thumbnail thumbnail-medium" src="<?php echo get_image('placeholder_600x400.jpg'); ?>" alt="">
			<a class="thumbnail thumbnail-medium" href="#">
				<img src="<?php echo get_image('placeholder_600x400.jpg'); ?>" alt="">
			</a>
		</div>
		<div class="margin" data-margin>
			<img class="thumbnail thumbnail-small" src="<?php echo get_image('placeholder_600x400.jpg'); ?>" alt="">
			<a class="thumbnail thumbnail-small" href="#">
				<img src="<?php echo get_image('placeholder_600x400.jpg'); ?>" alt="">
			</a>
		</div>
		<div class="margin" data-margin>
			<img class="thumbnail thumbnail-mini" src="<?php echo get_image('placeholder_600x400.jpg'); ?>" alt="">
			<a class="thumbnail thumbnail-mini" href="#">
				<img src="<?php echo get_image('placeholder_600x400.jpg'); ?>" alt="">
			</a>
		</div>

		<h2>List of thumbnails as floating grid boxes</h2>

		<ul class="row" data-row-margin>
			<li class="col-6-12-medium">
				<img class="thumbnail" src="<?php echo get_image('placeholder_600x400.jpg'); ?>" alt="">
			</li>
			<li class="col-3-10-medium">
				<img class="thumbnail" src="<?php echo get_image('placeholder_600x400.jpg'); ?>" alt="">
			</li>
			<li class="col-2-10-medium">
				<img class="thumbnail" src="<?php echo get_image('placeholder_600x400.jpg'); ?>" alt="">
			</li>
			<li class="col-3-10-medium">
				<img class="thumbnail" src="<?php echo get_image('placeholder_600x400.jpg'); ?>" alt="">
			</li>
			<li class="col-2-10-medium">
				<a class="thumbnail" href="#">
					<img src="<?php echo get_image('placeholder_600x400.jpg'); ?>" alt="">
				</a>
			</li>
			<li class="col-4-12-medium">
				<a class="thumbnail thumbnail-expand" href="#">
					<img src="<?php echo get_image('placeholder_200x200.svg'); ?>" alt="">
				</a>
			</li>
			<li class="col-4-12-medium">
				<a class="thumbnail" href="#">
					<img src="<?php echo get_image('placeholder_600x400.jpg'); ?>" alt="">
				</a>
			</li>
			<li class="col-4-12-medium">
				<a class="thumbnail" href="#">
					<img src="<?php echo get_image('placeholder_600x400.jpg'); ?>" alt="">
				</a>
			</li>
		</ul>

	</div>
