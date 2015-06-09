<hr>
<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
<p>The <em>modal</em> component consists of a block of content and overlay that appears in front of all other page content.</p>
<p>You can use any element to toggle a modal dialog. An <code>&lt;a&gt;</code> element needs to be linked to the modal's id. To enable the necessary JavaScript, add the <code>data-modal</code> attribute.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#modal-tabs'}">
			<li><a href="#">Classes</a></li>
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="modal-tabs" class="switcher margin">
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
						<td><code>.modal</code></td>
						<td>Add this class to a <code>&lt;div&gt;</code> element to create the dialog container and an overlay that blanks out the page. It is important to add an id to indicate the element for toggling.</td>
					</tr>
					<tr>
						<td><code>.open</code></td>
						<td>Add this class to a child <code>&lt;div&gt;</code> element to create the dialog box.</td>
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
						<td><code>.modal-dialog</code></td>
						<td>Add this class to an <code>&lt;div&gt;</code> element to group and align navigations and items to the right.</td>
					</tr>
					<tr>
						<td><code>.modal-close</code></td>
						<td><span class="badge">JS Only</span> Apply this class to any element that you want to use to close the modal. This class applies no style.</td>
					</tr>
					<tr>
						<td><code>.modal-header</code></td>
						<td>Add this class to a <code>&lt;div&gt;</code> element, which serves as a container for your custom content. The content will be centered vertically.</td>
					</tr>
					<tr>
						<td><code>.modal-footer</code></td>
						<td>Add this class to an <code>&lt;a&gt;</code> or <code>&lt;div&gt;</code> element to indicate your brand.</td>
					</tr>
					<tr>
						<td><code>.modal-caption</code></td>
						<td>Add this class to center your navbar content or brand. The element needs to be the last child in the navbar.</td>
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
						<td><code>.modal-dialog-lightbox</code></td>
						<td>Add this class to an <code>&lt;div&gt;</code> element to group and align navigations and items to the right.</td>
					</tr>
					<tr>
						<td><code>.modal-close-large</code></td>
						<td>Apply this class to any element that you want to use to close the modal. This class applies no style.</td>
					</tr>
				</tbody>
			</table>
		</div>
	</li>
	<li>
		<button class="button" data-modal="{target:'#modal'}">Open from a button</button>
		<a href="#modal" data-modal>Open from a link</a>
		<div id="modal" class="modal">
			<div class="modal-dialog">
				<a href="#" class="modal-close close"></a>
				<h1>Headline</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</li>
	<li>
		<pre><code>&lt;button class="button" data-modal="{target:'#modal'}"&gt;Open from a button&lt;/button&gt;
&lt;a href="#modal" data-modal&gt;Open from a link&lt;/a&gt;
&lt;div id="modal" class="modal"&gt;
	&lt;div class="modal-dialog"&gt;
		&lt;a href="#" class="modal-close close"&gt;&lt;/a&gt;
		...
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
	</li>
</ul>
