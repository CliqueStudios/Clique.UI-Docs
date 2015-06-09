<h3>Nav Side</h3>
<p>When used inside a <a href="<?php echo get_url('core/panel'); ?>">panel</a>, or other component this class applies the <em>nav</em> style.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#nav-side-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="nav-side-tabs" class="switcher margin">
	<li>
		<div class="col-4-12-medium">
			<div class="panel panel-box">
				<h3 class="panel-title">Nav side in panel</h3>
				<ul class="nav nav-side nav-parent-icon" data-nav>
					<li class="active"><a href="#">Active</a></li>
					<li class="parent"><a href="#">Parent</a>
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
					<li class="parent"><a href="#">Parent</a>
						<ul class="nav-sub">
							<li><a href="#">Sub item</a></li>
							<li><a href="#">Sub item</a></li>
						</ul>
					</li>
					<li><a href="#">Item</a></li>
					<li class="nav-header">Header</li>
					<li class="parent"><a href="#"><i class="icon-star"></i> Parent</a></li>
					<li><a href="#"><i class="icon-twitter"></i> Item</a></li>
					<li class="nav-divider"></li>
					<li><a href="#"><i class="icon-rss"></i> Item</a></li>
				</ul>
			</div>
		</div>
	</li>
	<li>
		<pre><code>&lt;div class="panel panel-box"&gt;
	&lt;h3 class="panel-title"&gt;...&lt;/h3&gt;
	&lt;ul class="nav nav-side"&gt;
    	...
	&lt;/ul&gt;
&lt;/div&gt;</code></pre>
	</li>
</ul>
