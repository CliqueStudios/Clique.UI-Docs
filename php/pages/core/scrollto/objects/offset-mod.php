<hr>
<h2 id="offset"><a href="#offset" class="link-reset">Offset</a></h2>
<p>The offset-option adds a specified distance to the target when calculating the scroll position. The offset is passed via the data-attribute. The value can be positive to stop scrolling before the target or negative to stop scrolling after the target.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#scrollto-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="scrollto-tabs" class="switcher margin">
	<li>
		<a href="#" class="button" data-scrollto="{offset:-150}">Go Up!</a>
		<a href="#" class="button" data-scrollto="{offset:150}">Go Down!</a>
	</li>
	<li>
		<pre><code>&lt;a href="#" class="button" data-scrollto="{offset:-150}"&gt;...&lt;/a&gt;
&lt;a href="#" class="button" data-scrollto="{offset:150}"&gt;...&lt;/a&gt;</code></pre>
	</li>
</ul>
