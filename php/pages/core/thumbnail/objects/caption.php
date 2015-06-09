<hr>
					<h3>Caption</h3>
					<p>Add the <code>.thumbnail-caption</code> class to a <code>&lt;div&gt;</code> element to apply a text caption under the image.</p>
					<?php
					$image = get_image('placeholder_200x100.svg');
					$text = '<div class="margin" data-margin>
	<div class="thumbnail">
		<img src="' . $image . '" width="200" height="100" alt="">
		<div class="thumbnail-caption">Caption on a <code>&lt;div&gt;</code></div>
	</div>
	<a class="thumbnail" href="#">
		<img src="' . $image . '" width="200" height="100" alt="">
		<div class="thumbnail-caption">Caption on an <code>&lt;a&gt;</code> tag</div>
	</a>
	<figure class="thumbnail">
		<img src="' . $image . '" width="200" height="100" alt="">
		<figcaption class="thumbnail-caption">Caption on a <code>&lt;figure&gt;</code></figcaption>
	</figure>
</div>';
						print_example($text);
					?>