<hr>
<h3>Nav Parent Icon</h3>
<p>Adds an icon to all <code>.parent</code> elements within the nav.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#nav-parent-icon-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="nav-parent-icon-tabs" class="switcher margin">
	<li>
		<div class="col-4-12-medium">
			<ul class="nav nav-side nav-parent-icon">
				<li class="active"><a href="#">Active</a></li>
				<li class="parent open">
					<a href="#">Parent</a>
					<ul class="nav-sub">
						<li><a href="#">Sub item</a></li>
						<li><a href="#">Sub item</a></li>
					</ul>
				</li>
				<li class="parent open">
					<a href="#">Parent</a>
					<ul class="nav-sub">
						<li><a href="#">Sub item</a></li>
						<li><a href="#">Sub item</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</li>
	<li>
		<pre><code>&lt;ul class="nav nav-parent-icon"&gt;
    &lt;li class="parent"&gt;&lt;a href="#"&gt;...&lt;/a&gt;
        &lt;ul class="nav-sub"&gt;
            ...
        &lt;/ul&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
						</li>
					</ul>
