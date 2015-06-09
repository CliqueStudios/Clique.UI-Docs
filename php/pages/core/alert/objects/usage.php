<hr>
<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
<p>To apply this component, add the <code>.alert</code> class to a block element.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#alert-tabs'}">
			<li><a href="#">Classes</a></li>
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="alert-tabs" class="switcher margin">
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
						<td><code>.alert</code></td>
						<td>Defines the base structural style for an alert.</td>
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
						<td><code>.alert-close</code></td>
						<td>While no CSS is applied to this element, this class is necessary to identifiy the element which will dismiss the alert.</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
			<div class="col">
				<h3>Modifiers</h3>
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
						<td><code>.alert-success</code></td>
						<td>Applies the "success" color pallete to an alert.</td>
					</tr>
					<tr>
						<td><code>.alert-warning</code></td>
						<td>Applies the "warning" color pallete to an alert.</td>
					</tr>
					<tr>
						<td><code>.alert-danger</code></td>
						<td>Applies the "danger" color pallete to an alert.</td>
					</tr>
					<tr>
						<td><code>.alert-large</code></td>
						<td>Increases the padding of an alert and spaces the <code>.close</code> element if necessary.</td>
					</tr>
				</tbody>
			</table>
		</div>
	</li>
	<li>
		<div class="alert" data-alert>
			<a href="#" class="alert-close close"></a>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.
		</div>
	</li>
	<li>
		<pre><code>&lt;div class="alert" data-alert&gt;
    &lt;a href="#" class="alert-close close"&gt;&lt;/a&gt;
        ...
&lt;/div&gt;</code></pre>
	</li>
</ul>
