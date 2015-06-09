<hr>
<h2 id="link-reset"><a href="#link-reset" class="link-reset">Link</a></h2>
<p>If a link should not have the default link color, just add the <code>.link-reset</code> class to the anchor element or the parent element. The anchor element will then inherit the color of it's parent (unless specified, that of the body). This class also removes the <code>text-decoration: underline;</code> on hover and focus.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#link-reset-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="link-reset-tabs" class="switcher margin">
	<li>
		<div class="row row-3-cols">
			<div class="col">
				<a href="#" class="link-reset">Anchor Tag</a>
			</div>
			<div class="col">
				<h2 class="link-reset"><a href="#">Heading</a></h2>
			</div>
			<div class="col">
				<ul class="list col-3-12-medium link-reset">
					<li><a href="#">Link</a></li>
					<li><a href="#">Link</a></li>
					<li><a href="#">Link</a></li>
				</ul>
			</div>
		</div>
	</li>
	<li>
		<pre><code>&lt;!-- Class applied directly to 'a' element --&gt;
&lt;a class="link-reset"&gt;...&lt;a&gt;

&lt;!-- Applied to immediate parent --&gt;
&lt;h1 class="link-reset"&gt;&lt;a href="#"&gt;...&lt;a&gt;&lt;h1&gt;

&lt;!-- Applied to containing element --&gt;
&lt;ul class="link-reset"&gt;
    &lt;li&gt;&lt;a href="#"&gt;...&lt;a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;...&lt;a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;...&lt;a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
	</li>
</ul>
