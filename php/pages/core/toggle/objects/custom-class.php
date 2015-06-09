<hr>
<h2 id="custom-class"><a href="#custom-class" class="link-reset">Custom class</a></h2>
<p>If you don't want to toggle the <code>.hidden</code> class, you can also add your own custom class.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#toggle-custom-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="toggle-custom-tabs" class="switcher margin">
	<li>
		<p><button class="button" data-toggle="{target:'#toggle3',class:'panel-box-primary'}">Click to toggle</button></p>
		<div id="toggle3" class="panel panel-box">Item 1</div>
	</li>
	<li>
		<pre><code>&lt;button class="button" data-toggle="{target:'#target'}"&gt;...&lt;/button&gt;
&lt;div id="target" class="panel panel-box"&gt;...&lt;/div&gt;</code></pre>
	</li>
</ul>
