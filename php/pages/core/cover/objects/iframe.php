<hr>
<h2>On Iframes</h2>
<p>To apply the Cover component to an iframe include the <code>cover.js</code> file in your document and add the <code>data-cover</code> attribute to the iframe. This will update the <code>width</code> and <code>height</code> attributes of the iframe to that of the element itself, expanding the video.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#cover-iframe-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="cover-iframe-tabs" class="switcher margin">
	<li>
		<div class="cover" style="height: 300px;">
			<iframe data-cover src="http://www.youtube.com/embed/YE7VzlLtp-4?autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;loop=1&amp;modestbranding=1&amp;wmode=transparent" width="560" height="315" frameborder="0" allowfullscreen=""></iframe>
		</div>
	</li>
	<li>
		<pre><code>&lt;div class="cover" style="height: 300px;"&gt;
    &lt;iframe data-cover src="images/placeholder.svg" width="600" height="400" frameborder="0" allowfullscreen&gt;&lt;/iframe&gt;
&lt;/div&gt;</code></pre>
	</li>
</ul>
