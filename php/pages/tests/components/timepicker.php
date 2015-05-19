
	<script src="../../dist/js/components/autocomplete.js"></script>
	<script src="../../dist/js/components/timepicker.js"></script>

	<div class="container container-center">

		<h1>Timepicker</h1>

		<form class="form">

			<div class="form-row">
				<label class="form-label" for="form-time">12 Hour Notation</label>
				<div class="form-controls">
					<input type="text" id="form-time" data-timepicker="{format:'12h'}">
				</div>
			</div>

			<div class="form-row">
				<label class="form-label" for="form-time-meridian">24 Hour Notation (default)</label>
				<div class="form-controls">
					<input type="text" id="form-time-meridian" data-timepicker>
				</div>
			</div>

		</form>

	</div>
