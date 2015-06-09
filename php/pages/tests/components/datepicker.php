
<div class="container container-center">
	<h1>Datepicker</h1>
	<form class="form">
		<div class="form-row">
			<label class="form-label" for="form-date">Date</label>
			<div class="form-controls">
				<input type="text" id="form-date" data-datepicker="{format:'DD.MM.YYYY'}">
			</div>
		</div>
		<div class="form-row">
			<label class="form-label" for="form-date">Date</label>
			<div class="form-controls">
				<input type="text" data-datepicker="{format:'DD.MM.YYYY', minDate:0, maxDate:7}">
				<p class="form-help-block">Only allowed current date + 7 days</p>
			</div>
		</div>
		<div class="form-row">
			<label class="form-label" for="form-date">Date</label>
			<div class="form-controls">
				<input type="text" data-datepicker="{format:'DD.MM.YYYY', minDate:0, maxDate:'31.12.2015'}">
				<p class="form-help-block">Only allowed current date + until 31.12.2015</p>
			</div>
		</div>
	</form>
</div>
