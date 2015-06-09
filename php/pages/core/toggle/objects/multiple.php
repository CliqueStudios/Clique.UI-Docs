<hr>
<h2 id="multiple-items"><a href="#multiple-items" class="link-reset">Multiple items</a></h2>
<p>You can also toggle multiple items at the same time. Just use the appropriate selector.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#toggle-multiple-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="toggle-multiple-tabs" class="switcher margin">
	<li>
		<p><button class="button" data-toggle="{target:'.toggle2'}">Click to toggle</button></p>
		<div class="toggle2 panel panel-box">Item 1</div>
		<div class="toggle2 panel panel-box hidden">Item 2</div>
	</li>
	<li>
		<pre><code>&lt;button class="button" data-toggle="{target:'.target'}"&gt;...&lt;/button&gt;
&lt;div class="target"&gt;...&lt;/div&gt;
&lt;div class="target hidden"&gt;...&lt;/div&gt;</code></pre>
	</li>
</ul>
