
	<div class="container container-center">
		<h1>Form</h1>
		<form class="form margin">
			<fieldset data-margin>
				<legend>Legend</legend>
				<input type="text" placeholder="Text input">
				<input type="password" placeholder="Password input">
				<select>
					<option>Option 01</option>
					<option>Option 02</option>
				</select>
				<button class="button">Button</button>
				<button class="button button-primary">Button</button>
				<label>
					<input type="checkbox"> Checkbox</label>
			</fieldset>
		</form>
		<form class="form margin grid" data-row-margin>
			<fieldset class="col-3-12-medium">
				<legend>Rows</legend>
				<div class="form-row">
					<input type="text" placeholder="Text input">
				</div>
				<div class="form-row">
					<input type="password" placeholder="Password input">
				</div>
				<div class="form-row">
					<select>
						<option>Option 01</option>
						<option>Option 02</option>
					</select>
				</div>
				<div class="form-row">
					<label>
						<input type="checkbox"> Checkbox</label>
				</div>
				<div class="form-row">
					<button class="button">Button</button>
				</div>
			</fieldset>
			<fieldset class="col-3-12-medium">
				<legend>States</legend>
				<div class="form-row">
					<input type="text" placeholder=":focus">
				</div>
				<div class="form-row">
					<input type="text" placeholder=":disabled" disabled>
				</div>
				<div class="form-row">
					<input type="text" placeholder="form-danger" class="form-danger" value="form-danger">
				</div>
				<div class="form-row">
					<input type="text" placeholder="form-success" class="form-success" value="form-success">
				</div>
			</fieldset>
			<fieldset class="col-6-12-medium">
				<legend>Sizes and styles</legend>
				<div class="form-row">
					<input type="text" placeholder="form-large" class="form-large">
					<select class="form-large">
						<option>Option 01</option>
						<option>Option 02</option>
					</select>
					<button class="button button-large">Button</button>
				</div>
				<div class="form-row">
					<input type="text" placeholder="Default">
					<select>
						<option>Option 01</option>
						<option>Option 02</option>
					</select>
					<button class="button">Button</button>
				</div>
				<div class="form-row">
					<input type="text" placeholder="form-small" class="form-small">
					<select class="form-small">
						<option>Option 01</option>
						<option>Option 02</option>
					</select>
					<button class="button button-small">Button</button>
				</div>
				<div class="form-row">
					<input type="text" placeholder="form-blank" class="form-blank">
				</div>
			</fieldset>
		</form>
		<form class="form margin">
			<fieldset>
				<legend>Widths</legend>
				<div class="form-row" data-margin>
					<input type="text" placeholder="form-col-large" class="form-col-large">
					<input type="text" placeholder="form-col-medium" class="form-col-medium">
					<input type="text" placeholder="form-col-small" class="form-col-small">
					<input type="text" placeholder="form-col-mini" class="form-col-mini">
				</div>
				<div class="form-row" data-margin>
					<select class="form-col-large">
						<option>form-col-large</option>
					</select>
					<select class="form-col-medium">
						<option>form-col-medium</option>
					</select>
					<select class="form-col-small">
						<option>form-col-small</option>
					</select>
					<select class="form-col-mini">
						<option>form-col-mini</option>
					</select>
				</div>
				<div class="form-row" data-margin>
					<textarea cols="30" rows="1" placeholder="form-col-large" class="form-col-large"></textarea>
					<textarea cols="30" rows="1" placeholder="form-col-medium" class="form-col-medium"></textarea>
					<textarea cols="30" rows="1" placeholder="form-col-small" class="form-col-small"></textarea>
				</div>
				<div class="form-row">
					<input type="text" placeholder="col-1-120" class="col-1-12">
				</div>
				<div class="form-row">
					<select class="col-1-12">
						<option>col-1-120</option>
					</select>
				</div>
				<div class="form-row">
					<textarea cols="30" rows="1" placeholder="col-1-120" class="col-1-12"></textarea>
				</div>
			</fieldset>
		</form>
		<form class="form">
			<fieldset>
				<legend>Form icon</legend>
				<div class="form-row">
					<span class="form-label">Date</span>
					<div class="form-controls" data-margin>
						<div class="form-icon">
							<i class="icon-calendar"></i>
							<input type="text">
						</div>
						<div class="form-icon">
							<i class="icon-clock-o"></i>
							<input type="text">
						</div>
						<div class="form-icon form-icon-flip">
							<i class="icon-calendar"></i>
							<input type="text">
						</div>
						<div class="form-icon form-icon-flip">
							<i class="icon-clock-o"></i>
							<input type="text">
						</div>
					</div>
				</div>
			</fieldset>
		</form>
		<form class="form margin form-stacked">
			<fieldset>
				<legend>Form stacked</legend>
				<div class="form-row">
					<label class="form-label" for="form-s-it">Text input</label>
					<div class="form-controls">
						<input type="text" id="form-s-it" placeholder="Text input">
						<span class="form-help-inline">Add the class <code>.form-help-inline</code> for inline help text.</span>
					</div>
				</div>
				<div class="form-row">
					<label class="form-label" for="form-s-ip">Password input</label>
					<div class="form-controls">
						<input type="password" id="form-s-ip" placeholder="Password input">
					</div>
				</div>
				<div class="form-row">
					<label class="form-label" for="form-s-s">Select field</label>
					<div class="form-controls">
						<select id="form-s-s">
							<option>Option 01</option>
							<option>Option 02</option>
						</select>
					</div>
				</div>
				<div class="form-row">
					<label class="form-label" for="form-s-t">Textarea</label>
					<div class="form-controls">
						<textarea id="form-s-t" cols="30" rows="5" placeholder="Textarea text"></textarea>
						<p class="form-help-block">Add the class <code>.form-help-block</code> for help text in block elements.</p>
					</div>
				</div>
				<div class="form-row">
					<span class="form-label">Radio input</span>
					<div class="form-controls">
						<input type="radio" id="form-s-r" name="radio">
						<label for="form-s-r">Radio input</label>
						<br>
						<input type="radio" id="form-s-r1" name="radio">
						<label for="form-s-r1">1</label>
						<label>
							<input type="radio" name="radio"> 2</label>
						<label>
							<input type="radio" name="radio"> 3</label>
					</div>
				</div>
				<div class="form-row">
					<span class="form-label">Checkbox input</span>
					<div class="form-controls">
						<input type="checkbox" id="form-s-c">
						<label for="form-s-c">Checkbox input</label>
						<br>
						<input type="checkbox" id="form-s-c1">
						<label for="form-s-c1">1</label>
						<label>
							<input type="checkbox"> 2</label>
						<label>
							<input type="checkbox"> 3</label>
					</div>
				</div>
				<div class="form-row">
					<span class="form-label">Mixed controls</span>
					<div class="form-controls">
						<p class="form-controls-condensed">
							<input type="checkbox" id="form-s-mix1">
							<label for="form-s-mix1">Checkbox input</label>
							<input type="number" id="form-s-mix2" min="0" max="10" value="5" class="form-col-mini form-small">
							<label for="form-s-mix2">Number input</label>
							<select id="form-s-mix3" class="form-small">
								<option selected="selected">Option 01</option>
								<option>Option 02</option>
							</select>
							<label for="form-s-mix3">Select field</label>
						</p>
						<p class="form-controls-condensed">
							<label>
								<input type="checkbox"> Checkbox input</label>
							<label>
								<input type="number" min="0" max="10" value="5" class="form-col-mini form-small"> Number input</label>
							<label>
								<select class="form-small">
									<option selected="selected">Option 01</option>
									<option>Option 02</option>
								</select>
								Select field
							</label>
						</p>
					</div>
				</div>
			</fieldset>
		</form>
		<form class="form margin form-horizontal">
			<fieldset>
				<legend>Form horizontal</legend>
				<div class="form-row">
					<label class="form-label" for="form-h-it">Text input</label>
					<div class="form-controls">
						<input type="text" id="form-h-it" placeholder="Text input">
						<span class="form-help-inline">Add the class <code>.form-help-inline</code> for inline help text.</span>
					</div>
				</div>
				<div class="form-row">
					<label class="form-label" for="form-h-ip">Password input</label>
					<div class="form-controls">
						<input type="password" id="form-h-ip" placeholder="Password input">
					</div>
				</div>
				<div class="form-row">
					<label class="form-label" for="form-h-ie">Email input</label>
					<div class="form-controls">
						<input type="email" id="form-h-ie" placeholder="name@domain.com">
					</div>
				</div>
				<div class="form-row">
					<label class="form-label" for="form-h-is">Search input</label>
					<div class="form-controls">
						<input type="search" id="form-h-is" placeholder="Search...">
					</div>
				</div>
				<div class="form-row">
					<label class="form-label" for="form-h-ite">Tel input</label>
					<div class="form-controls">
						<input type="tel" id="form-h-ite" placeholder="+49 555 123456">
					</div>
				</div>
				<div class="form-row">
					<label class="form-label" for="form-h-iu">URL input</label>
					<div class="form-controls">
						<input type="url" id="form-h-iu" placeholder="http://">
					</div>
				</div>
				<div class="form-row">
					<label class="form-label" for="form-h-if">File input</label>
					<div class="form-controls">
						<input type="file" id="form-h-if">
					</div>
				</div>
				<div class="form-row">
					<label class="form-label" for="form-h-s">Select field</label>
					<div class="form-controls">
						<select id="form-h-s">
							<option>Option 01</option>
							<option>Option 02</option>
						</select>
					</div>
				</div>
				<div class="form-row">
					<label class="form-label" for="form-h-sm">Select field</label>
					<div class="form-controls">
						<select id="form-h-sm" multiple="multiple">
							<option>Option 01</option>
							<option>Option 02</option>
							<option>Option 03</option>
							<option>Option 04</option>
						</select>
					</div>
				</div>
				<div class="form-row">
					<label class="form-label" for="form-h-t">Textarea</label>
					<div class="form-controls">
						<textarea id="form-h-t" cols="30" rows="5" placeholder="Textarea text"></textarea>
						<p class="form-help-block">Add the class <code>.form-help-block</code> for help text in block elements.</p>
					</div>
				</div>
				<div class="form-row">
					<span class="form-label">Radio input</span>
					<div class="form-controls form-controls-text">
						<input type="radio" id="form-h-r" name="radio">
						<label for="form-h-r">Radio input</label>
						<br>
						<input type="radio" id="form-h-r1" name="radio">
						<label for="form-h-r1">1</label>
						<label>
							<input type="radio" name="radio"> 2</label>
						<label>
							<input type="radio" name="radio"> 3</label>
					</div>
				</div>
				<div class="form-row">
					<span class="form-label">Checkbox input</span>
					<div class="form-controls form-controls-text">
						<input type="checkbox" id="form-h-c">
						<label for="form-h-c">Checkbox input</label>
						<br>
						<input type="checkbox" id="form-h-c1">
						<label for="form-h-c1">1</label>
						<label>
							<input type="checkbox"> 2</label>
						<label>
							<input type="checkbox"> 3</label>
					</div>
				</div>
				<div class="form-row">
					<span class="form-label">Mixed controls</span>
					<div class="form-controls form-controls-text">
						<p class="form-controls-condensed">
							<input type="checkbox" id="form-h-mix1">
							<label for="form-h-mix1">Checkbox input</label>
							<input type="number" id="form-h-mix2" min="0" max="10" value="5" class="form-col-mini form-small">
							<label for="form-h-mix2">Number input</label>
							<select id="form-h-mix3" class="form-small">
								<option selected="selected">Option 01</option>
								<option>Option 02</option>
							</select>
							<label for="form-h-mix3">Select field</label>
						</p>
						<p class="form-controls-condensed">
							<label>
								<input type="checkbox"> Checkbox input</label>
							<label>
								<input type="number" min="0" max="10" value="5" class="form-col-mini form-small"> Number input</label>
							<label>
								<select class="form-small">
									<option selected="selected">Option 01</option>
									<option>Option 02</option>
								</select>
								Select field
							</label>
						</p>
					</div>
				</div>
				<div class="form-row">
					<label class="form-label" for="form-h-ic">Color input</label>
					<div class="form-controls">
						<input type="color" id="form-h-ic" placeholder="#000000">
					</div>
				</div>
				<div class="form-row">
					<label class="form-label" for="form-h-in">Number input</label>
					<div class="form-controls">
						<input type="number" id="form-h-in" min="0" max="10" value="5">
					</div>
				</div>
				<div class="form-row">
					<label class="form-label" for="form-h-ir">Range input</label>
					<div class="form-controls">
						<input type="range" id="form-h-ir" value="10">
					</div>
				</div>
				<div class="form-row">
					<label class="form-label" for="form-h-id">Date input</label>
					<div class="form-controls">
						<input type="date" id="form-h-id" placeholder="1970-01-01">
					</div>
				</div>
				<div class="form-row">
					<label class="form-label" for="form-h-im">Month input</label>
					<div class="form-controls">
						<input type="month" id="form-h-im" placeholder="1970-01">
					</div>
				</div>
				<div class="form-row">
					<label class="form-label" for="form-h-iw">Week input</label>
					<div class="form-controls">
						<input type="week" id="form-h-iw" placeholder="1970-W01">
					</div>
				</div>
				<div class="form-row">
					<label class="form-label" for="form-h-iti">Time input</label>
					<div class="form-controls">
						<input type="time" id="form-h-iti" placeholder="00:00:00">
					</div>
				</div>
				<div class="form-row">
					<label class="form-label" for="form-h-idt">Datetime input</label>
					<div class="form-controls">
						<input type="datetime" id="form-h-idt" placeholder="1970-01-01T00:00:00Z">
					</div>
				</div>
				<div class="form-row">
					<label class="form-label" for="form-h-idtl">Datetime-local input</label>
					<div class="form-controls">
						<input type="datetime-local" id="form-h-idtl" placeholder="1970-01-01T00:00">
					</div>
				</div>
				<div class="form-row">
					<label class="form-label" for="form-h-it">Disabled input</label>
					<div class="form-controls">
						<input type="text" id="form-h-itd" placeholder="Text input" disabled>
					</div>
				</div>
				<div class="form-row">
					<label class="form-label" for="form-h-it">Required input</label>
					<div class="form-controls">
						<input type="text" id="form-h-itr" placeholder="Text input" required>
					</div>
				</div>
			</fieldset>
		</form>
		<form class="form margin">
			<fieldset>
				<legend>Form grid</legend>
				<div class="row">
					<div class="col-1-12">
						<input type="text" placeholder="100" class="col-1-12">
					</div>
				</div>
				<div class="row">
					<div class="col-6-12">
						<input type="text" placeholder="50" class="col-1-12">
					</div>
					<div class="col-3-12">
						<input type="text" placeholder="25" class="col-1-12">
					</div>
					<div class="col-3-12">
						<input type="text" placeholder="25" class="col-1-12">
					</div>
				</div>
				<div class="row" data-row-margin>
					<div class="col-6-12-medium">
						<label for="form-g-a">Label</label>
						<div class="form-controls">
							<input type="text" id="form-g-a" placeholder="50" class="col-1-12">
						</div>
					</div>
					<div class="col-6-12-medium">
						<label for="form-g-b">Label</label>
						<div class="form-controls">
							<input type="text" id="form-g-b" placeholder="50" class="col-1-12">
						</div>
					</div>
				</div>
			</fieldset>
		</form>
		<form class="form margin form-stacked">
			<fieldset>
				<legend>Form stacked grid</legend>
				<div class="row">
					<div class="col-1-12">
						<label class="form-label" for="form-gs-street">Address</label>
						<div class="form-controls">
							<input type="text" id="form-gs-street" placeholder="Street" class="col-1-12">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6-12">
						<input type="text" placeholder="City" class="col-1-12">
					</div>
					<div class="col-3-12">
						<input type="text" placeholder="State" class="col-1-12">
					</div>
					<div class="col-3-12">
						<input type="text" placeholder="ZIP" class="col-1-12">
					</div>
				</div>
				<div class="row" data-row-margin>
					<div class="col-6-12-medium">
						<label class="form-label" for="form-gs-a">Label</label>
						<div class="form-controls">
							<input type="text" id="form-gs-a" placeholder="50" class="col-1-12">
						</div>
					</div>
					<div class="col-6-12-medium">
						<label class="form-label" for="form-gs-b">Label</label>
						<div class="form-controls">
							<input type="text" id="form-gs-b" placeholder="50" class="col-1-12">
						</div>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
