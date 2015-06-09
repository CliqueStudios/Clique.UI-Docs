<hr>
<h2 id="sub-objects"><a href="#sub-objects" class="link-reset">Sub Objects</a></h2>
<h3>Modal Header &amp; Footer</h3>
<p>You can create a header and footer for your modal, which are seperated from the content. Just add the <code>.modal-header</code> or the <code>.modal-footer</code> class to a <code>&lt;div&gt;</code> element inside the modal dialog.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#modal-header-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="modal-header-tabs" class="switcher margin">
	<li>
		<button class="button" data-modal="{target:'#modal6'}">Open Modal w/ Header &amp; Footer</button>
		<div id="modal6" class="modal">
			<div class="modal-dialog">
				<button class="modal-close close"></button>
				<div class="modal-header">
					<h2>Headline</h2>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<div class="modal-footer text-right">
					<button class="button">Cancel</button>
					<button class="button button-primary">Save</button>
				</div>
			</div>
		</div>
	</li>
	<li>
		<pre><code>&lt;div id="modal-target" class="modal"&gt;
	&lt;div class="modal-dialog"&gt;
		&lt;a href="#" class="modal-close close"&gt;&lt;/a&gt;
		&lt;div class="modal-header"&gt;
			...
		&lt;/div&gt;
		...
		&lt;div class="modal-footer text-right"&gt;
			...
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
	</li>
</ul>
