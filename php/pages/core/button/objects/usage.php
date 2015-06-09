<hr>
<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
<p>To apply this component, add the <code>.button</code> class to an <code>&lt;a&gt;</code> or <code>&lt;button&gt;</code> element.</p>
<p>Add the <code>[disabled]</code> attribute to a <code>&lt;button&gt;</code> or the <code>.disabled</code> class to an <code>&lt;a&gt;</code> element to disable the button.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#button-tabs'}">
			<li><a href="#">Classes</a></li>
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="button-tabs" class="switcher margin">
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
						<td><code>.button</code></td>
						<td>The base class for a Button component.</td>
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
						<td><code>.button-group</code></td>
						<td>Add this class to an element that wraps a group of buttons.</td>
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
						<td><code>.button-block</code></td>
						<td>Applies <code>display: block;</code> CSS property to expand the button to the width of it's container.</td>
					</tr>
					<tr>
						<td><code>.button-primary</code></td>
						<td>A color modifier - give the button the "primary" color pallete.</td>
					</tr>
					<tr>
						<td><code>.button-success</code></td>
						<td>A color modifier - give the button the "success" color pallete</td>
					</tr>
					<tr>
						<td><code>.button-danger</code></td>
						<td>A color modifier - give the button the "danger" color pallete</td>
					</tr>
					<tr>
						<td><code>.button-link</code></td>
						<td>Removes all aesthetic style from the element, leaving only the structural CSS.</td>
					</tr>
					<tr>
						<td><code>.button-mini</code></td>
						<td>A size modifier - shrinks the button to the smallest size.</td>
					</tr>
					<tr>
						<td><code>.button-small</code></td>
						<td>A size modifier - shrinks the button to a smaller-than-normal.</td>
					</tr>
					<tr>
						<td><code>.button-large</code></td>
						<td>A size modifier - grows the button to a larger size.</td>
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
						<td><code>.active</code></td>
						<td>Applies the CSS properties expressed during the state in which a button is pressed.</td>
					</tr>
					<tr>
						<td><code>.disabled</code></td>
						<td>Indicates that the button is disabled.</td>
					</tr>
				</tbody>
			</table>
		</div>
	</li>
	<li>
		<a class="button" href="#">Link</a>
		<button class="button">Button</button>
		<button class="button active">Active</button>
		<button class="button disabled" disabled>Disabled</button>
	</li>
	<li>
		<pre><code>&lt;a class="button" href="#"&gt;Link&lt;/a&gt;
&lt;button class="button"&gt;Button&lt;/button&gt;
&lt;button class="button active"&gt;Active&lt;/button&gt;
&lt;button class="button disabled" disabled&gt;Disabled&lt;/button&gt;</code></pre>
	</li>
</ul>
