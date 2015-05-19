
<div class="container container-center">
	<h1>Close</h1>
	<ul class="list list-space">
		<li>Close as a element:
			<a href="#" class="close"></a>
		</li>
		<li>Close as button element:
			<button class="close"></button>
		</li>
		<li>Close alt as a element:
			<a href="#" class="close close-alt"></a>
		</li>
		<li>Close alt as button element:
			<button class="close close-alt"></button>
		</li>
	</ul>
	<h2>Alert</h2>
	<div class="alert" data-alert>
		<a href="#" class="alert-close close"></a>
		<p>This is a alert using an a element as close button.</p>
	</div>
	<h2>Modal</h2>
	<p>
		<button class="button" data-modal="{target:'#modal'}">Button</button>
	</p>
	<div id="modal" class="modal">
		<div class="modal-dialog modal-dialog-lightbox">
			<button type="button" class="modal-close close close-alt"></button>
			<img src="<?php echo get_image('placeholder.jpg'); ?>" style="width:600px;" alt="">
		</div>
	</div>
</div>
