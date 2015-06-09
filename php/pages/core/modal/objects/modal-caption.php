<hr>
<h3>Modal Caption</h3>
<p>You can also create a caption that will be placed outside the modal. Just add the <code>.modal-caption</code> class to a <code>&lt;div&gt;</code> element inside the modal dialog.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#modal-caption-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="modal-caption-tabs" class="switcher margin">
	<li>
		<button class="button" data-modal="{target:'#modal7'}">Open Modal w/ Caption</button>
		<div id="modal7" class="modal">
			<div class="modal-dialog">
				<a href="#" class="modal-close close"></a>
				<h1>Headline</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<div class="modal-caption">Caption</div>
			</div>
		</div>
	</li>
	<li>
		<pre><code>&lt;div id="modal-target" class="modal"&gt;
	&lt;div class="modal-dialog"&gt;
		&lt;a href="#" class="modal-close close"&gt;&lt;/a&gt;
		...
		&lt;div class="modal-caption"&gt;Caption&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
	</li>
</ul>
