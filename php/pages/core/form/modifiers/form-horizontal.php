<hr>
<h3>Form horizontal</h3>
<p>Add the <code>.form-horizontal</code> class to display labels and controls side by side.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#form-horizontal-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="form-horizontal-tabs" class="switcher margin">
	<li>
		<form class="form form-horizontal">
			<div class="form-row">
				<label class="form-label" for="form-s-it">Text input</label>
				<div class="form-controls">
					<input type="text" id="form-s-it" placeholder="Text input">
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
						<option>Option 1</option>
						<option>Option 2</option>
						<option>Option 3</option>
					</select>
				</div>
			</div>
			<div class="form-row">
				<label class="form-label" for="form-s-t">Textarea</label>
				<div class="form-controls">
					<textarea id="form-s-t" placeholder="Textarea text"></textarea>
				</div>
			</div>
			<div class="form-row">
				<span class="form-label">Radio input</span>
				<div class="form-controls">
					<label><input type="radio" name="radio" checked> 1</label>
					<label><input type="radio" name="radio"> 2</label>
					<label><input type="radio" name="radio"> 3</label>
				</div>
			</div>
			<div class="form-row">
				<span class="form-label">Checkbox input</span>
				<div class="form-controls">
					<label><input type="checkbox" checked> 1</label>
					<label><input type="checkbox"> 2</label>
					<label><input type="checkbox"> 3</label>
				</div>
			</div>
		</form>
	</li>
	<li>
		<pre><code>&lt;form class="form form-horizontal"&gt;
	&lt;div class="form-row"&gt;
		&lt;label class="form-label"&gt;...&lt;/label&gt;
		&lt;div class="form-controls"&gt;
			...
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/form&gt;</code></pre>
	</li>
</ul>
