<hr>
<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
<p>By including the <code>core/form.js</code> file in your project, any input with the <code>[type="checkbox"]</code> or <code>[type="radio"]</code> will automatically be wrapped in customizable, cross-browser compatible elements creating beautifully styled checkboxes and radios.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#checkboxes-tabs'}">
			<li><a href="#">Classes</a></li>
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="checkboxes-tabs" class="switcher margin">
	<li>
		<div class="overflow-container">
			<table class="table-striped">
				<thead>
					<tr>
						<th>Class</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><code>.form-radio</code></td>
						<td>This class is added to the wrapping element of a radio button element.</td>
					</tr>
					<tr>
						<td><code>.form-checkbox</code></td>
						<td>This class is added to the wrapping element of a checkbox element.</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
			<div class="col">
				<h3>Sub Objects</h3>
			</div>
		</div>
		<div class="overflow-container">
			<table class="table-striped">
				<thead>
					<tr>
						<th>Class</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><code>.form-{type}-check</code></td>
						<td>This class is applied to the <code>&lt;span&gt;</code> element that defines the check visibile when the input is in an active state.</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
			<div class="col">
				<h3>States</h3>
			</div>
		</div>
		<div class="overflow-container">
			<table class="table-striped">
				<thead>
					<tr>
						<th>Class</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><code>.checked</code></td>
						<td>Added to the <code>.form-{type}</code> element when the input is checked.</td>
					</tr>
					<tr>
						<td><code>.unchecked</code></td>
						<td>Added to the <code>.form-{type}</code> element when the input is <em>not</em> checked.</td>
					</tr>
					<tr>
						<td><code>.disabled</code></td>
						<td>Added to the <code>.form-{type}</code> element when the input is disabled.</td>
					</tr>
				</tbody>
			</table>
		</div>
	</li>
	<li>
		<form class="form">
			<div class="form-row">
				<label><input type="radio" name="radio"> Default</label>
				<label><input type="radio" name="radio" checked> Checked</label>
				<label><input type="radio" name="radio" disabled> Disabled</label>
				<label><input type="radio" name="radio1" disabled checked> Disabled &amp; Checked</label>
			</div>
			<div class="form-row">
				<label><input type="checkbox"> Default</label>
				<label><input type="checkbox" checked> Checked</label>
				<label><input type="checkbox" disabled> Disabled</label>
				<label><input type="checkbox" disabled checked> Disabled &amp; Checked</label>
			</div>
		</form>
	</li>
	<li>
		<pre><code>&lt;span class="form-radio unchecked"&gt;&lt;input type="radio"&gt;&lt;span class="form-radio-check"&gt;&lt;/span&gt;&lt;/span&gt; Unchecked
&lt;span class="form-radio checked">&lt;input type="radio" checked>&lt;span class="form-radio-check">&lt;/span>&lt;/span&gt; Checked
&lt;span class="form-radio disabled"&gt;&lt;input type="radio" disabled&gt;&lt;span class="form-radio-check"&gt;&lt;/span&gt;&lt;/span&gt; Disabled

&lt;span class="form-checkebox unchecked"&gt;&lt;input type="checkebox"&gt;&lt;span class="form-checkebox-check"&gt;&lt;/span>&lt;/span&gt; Unchecked
&lt;span class="form-checkebox checked"&gt;&lt;input type="checkebox" checked&gt;&lt;span class="form-checkebox-check"&gt;&lt;/span&gt;&lt;/span&gt; Checked
&lt;span class="form-checkebox disabled"&gt;&lt;input type="checkebox" disabled&gt;&lt;span class="form-checkebox-check"&gt;&lt;/span&gt;&lt;/span&gt; Disabled
		</code></pre>
	</li>
</ul>
