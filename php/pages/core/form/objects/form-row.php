<hr>
<h2 id="sub-objects"><a href="#sub-objects" class="link-reset">Sub Objects</a></h2>
<h3>Form Row</h3>
<p>Add the <code>.form-row</code> class to a <code>&lt;div&gt;</code> element to stack form controls.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#form-row-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="form-row-tabs" class="switcher margin">
	<li>
		<form class="form">
			<fieldset>
				<legend>Legend</legend>
				<div class="form-row">
					<input type="text" placeholder="Text input">
				</div>
				<div class="form-row">
					<input type="password" placeholder="Password input">
				</div>
				<div class="form-row">
					<select>
						<option>Option 1</option>
						<option>Option 2</option>
						<option>Option 3</option>
					</select>
				</div>
				<div class="form-row">
					<button class="button">Button</button>
				</div>
				<div class="form-row">
					<label>
						<input type="checkbox"> Checkbox
					</label>
				</div>
			</fieldset>
		</form>
	</li>
	<li>
		<pre><code>&lt;form class="form"&gt;
    &lt;div class="form-row"&gt;
    	...
    &lt;/div&gt;
    &lt;div class="form-row"&gt;
    	...
    &lt;/div&gt;
&lt;/form&gt;</code></pre>
	</li>
</ul>
