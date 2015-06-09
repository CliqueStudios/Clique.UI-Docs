<hr>
<h2 id="sub-objects"><a href="#sub-objects" class="link-reset">Sub Objects</a></h2>
<h3>Nav Header</h3>
<p>Add this class to an <code>&lt;li&gt;</code> element to create a header.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#nav-header-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="nav-header-tabs" class="switcher margin">
	<li>
		<div class="col-4-12-medium">
			<div class="panel panel-box">
				<ul class="nav nav-side nav-parent-icon">
					<li class="nav-header">Header</li>
					<li><a href="#">Item <div>Subtitle</div></a></li>
					<li class="active"><a href="#">Active</a></li>
					<li><a href="#">Item</a></li>
					<li class="nav-header">Header</li>
					<li class="parent open"><a href="#">Parent</a>
						<ul class="nav-sub">
							<li><a href="#">Sub item</a></li>
							<li><a href="#">Sub item</a>
								<ul>
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
		<pre><code>&lt;ul class="nav nav-side" data-nav&gt;
	&lt;li class="nav-header"&gt;...&lt;/li&gt;
	...
&lt;/ul&gt;</code></pre>
	</li>
</ul>
