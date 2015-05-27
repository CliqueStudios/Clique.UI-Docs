
	<style type="text/css">
		body.container {
			padding-bottom: 20px;
		}
	</style>
	<div class="container container-center">
		<h1>Smooth scroll</h1>
		<a href="#bottom" class="button" data-smooth-scroll>Go Down!</a>
		<a id="top-callback" href="#bottom" class="button">Go Down with callback!</a>
		<div style="height: 2000px;"></div>
		<a id="bottom" href="#top" class="button" data-smooth-scroll>Go Up!</a>
	</div>
	<script type="text/javascript">
		jQuery(function($) {
			var ele = $('#top-callback'),
				complete = function() {
					alert("I'm down!");
				};
			Clique.smoothScroll(ele, {
				complete: complete
			});
		});
	</script>
