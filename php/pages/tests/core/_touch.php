

	<script>
		jQuery(window).bind('swipeRight', 'body', function(e) {
			jQuery('#output').prepend('<li>swipe right</li>');
		});
		jQuery(window).bind('swipeLeft', 'body', function(e) {
			jQuery('#output').prepend('<li>swipe left</li>');
		});
		jQuery(window).bind('tap', 'body', function(e) {
			jQuery('#output').prepend('<li>tap</li>');
		});
	</script>

	<style>
		.prevent-ie11-navigation {
			touch-action: pan-y pinch-zoom double-tap-zoom;
		}

		.notouch .touch-detected {
			visibility: hidden;
			display: none;
		}

		.touch .notouch-detected {
			visibility: hidden;
			display: none;
		}
	</style>

	<div class="container container-center">

		<h1>Touch</h1>

		<div class="panel panel-box overflow-container prevent-ie11-navigation" style="min-height: 200px;">
			<ul id="output" class="list">
				<li class="touch-detected text-success">Clique.UI detected touch support on your device! :)</li>
				<li class="notouch-detected text-danger">Clique.UI did not detect touch support on your device! :(</li>
			</ul>
		</div>

		<p class="text-muted">In IE11, swipe-gestures are only detected on the grey panel.</p>
	</div>
