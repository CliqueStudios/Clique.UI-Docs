<hr>
<h3>Nav Off Canvas</h3>
<p>Apply this class when creating a nav inside of the <a href="<?php echo get_url('components/off canvas'); ?>">off canvas</a> component.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#nav-offcanvas-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="nav-offcanvas-tabs" class="switcher margin">
	<li>
		<button class="button" data-offcanvas="{target:'#offcanvas-1'}">Click to open Off Canvas Nav</button>
		<div id="offcanvas-1" class="offcanvas">
			<div class="offcanvas-bar">
				<ul class="nav nav-offcanvas nav-parent-icon" data-nav>
					<li><a href="#">Item</a></li>
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
		<pre><code>&lt;div class="offcanvas-bar"&gt;
    &lt;ul class="nav nav-offcanvas"&gt;...&lt;/ul&gt;
&lt;/div&gt;</code></pre>
	</li>
</ul>
