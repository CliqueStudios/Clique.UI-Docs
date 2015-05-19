
	<script src="../../dist/js/components/upload.js"></script>

	<div class="container container-center">

		<h1>Upload</h1>

		<h2>On select</h2>

		<div class="margin">

			<div class="form-file">
				<button class="button">Select</button>
				<input id="upload-select1" type="file">
			</div>

		</div>

		<h2>Drop area</h2>

		<div id="upload-drop" class="placeholder text-center">
			<i class="icon-cloud-upload icon-medium text-muted margin-small-right"></i> Attach binaries by dropping them here or <a class="form-file">selecting one<input id="upload-select2" type="file"></a>.
		</div>

		<div id="progressbar" class="progress hidden">
			<div class="progress-bar" style="width: 0%;">0%</div>
		</div>

	</div>

	<script>
		jQuery(function($) {

			var progressbar = $("#progressbar"),
				bar = progressbar.find('.progress-bar'),
				settings = {

					action: '/', // upload url

					loadstart: function() {
						bar.css("width", "0%").text("0%");
						progressbar.removeClass("hidden");
					},

					progress: function(percent) {
						percent = Math.ceil(percent);
						bar.css("width", percent + "%").text(percent + "%");
					},

					allcomplete: function(response) {

						bar.css("width", "100%").text("100%");

						setTimeout(function() {
							progressbar.addClass("hidden");
						}, 250);

						alert("Upload Completed")
					}
				};

			$.Clique.uploadSelect($("#upload-select1"), settings);
			$.Clique.uploadSelect($("#upload-select2"), settings);
			$.Clique.uploadDrop($("#upload-drop"), settings);
		});
	</script>
