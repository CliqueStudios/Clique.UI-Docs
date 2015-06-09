<hr>
<h3>Nav Sub</h3>
<p>To create nested nav menus, add the <code>.nav-sub</code> class to a <code>&lt;ul&gt;</code> item within the nav.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#nav-sub-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="nav-sub-tabs" class="switcher margin">
	<li>
		<div class="col-4-12-medium">
			<div class="panel panel-box">
				<ul class="nav nav-side nav-parent-icon">
					<li class="parent open"><a href="#">Parent</a>
						<ul class="nav-sub">
							<li><a href="#">Sub item</a></li>
							<li><a href="#">Sub item</a>
								<ul class="nav-sub">
									<li><a href="#">Sub item</a></li>
									<li><a href="#">Sub item</a></li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</li>
	<li>
		<pre><code>&lt;ul class="nav" data-nav&gt;
	&lt;li class="parent"&gt;
		&lt;ul class="nav-sub"&gt;
			&lt;li&gt;...&lt;/li&gt;
			&lt;li&gt;
				&lt;ul class="nav-sub"&gt;
					...
				&lt;/ul&gt;
			&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/li&gt;
&lt;/ul&gt;</code></pre>
	</li>
</ul>
