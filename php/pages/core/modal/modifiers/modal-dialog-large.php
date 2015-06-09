<hr>
<h3>Modal Dialog Large</h3>
<p>To apply the site's container width to the modal dialog, just add the <code>.modal-dialog-large</code> class.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#modal-large-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="modal-large-tabs" class="switcher margin">
	<li>
		<button class="button" data-modal="{target:'#modal-large'}">Open Large Modal</button>
		<div id="modal-large" class="modal">
			<div class="modal-dialog modal-dialog-large">
				<button class="modal-close close"></button>
				<h1>Headline</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</li>
	<li>
		<pre><code>&lt;div id="modal-target" class="modal"&gt;
	&lt;div class="modal-dialog modal-dialog-large"&gt;
		...
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
	</li>
</ul>
