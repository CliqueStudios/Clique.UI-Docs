<hr>
					<h2 id="vertical-modifiers"><a href="#vertical-modifiers" class="link-reset">Vertical modifiers</a></h2>
					<p>Add the <code>.tab-left</code> or <code>.tab-right</code> class to align tabs vertically to the left or right side.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#tab4-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="tab4-tabs" class="switcher margin">
						<li>
							<div class="row" data-row-margin>
								<div class="col-6-12-medium">
									<ul class="tab tab-left col-6-12-medium" data-tab>
										<li class="active"><a href="#">Active</a></li>
										<li><a href="#">Item</a></li>
										<li><a href="#">Item</a></li>
									</ul>
								</div>
								<div class="col-6-12-medium">
									<ul class="tab tab-right col-6-12-medium" data-tab>
										<li class="active"><a href="#">Active</a></li>
										<li><a href="#">Item</a></li>
										<li><a href="#">Item</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li>
							<div class="row" data-row-margin>
								<div class="col-6-12-medium">
									<pre><code>&lt;ul class="tab tab-left col-6-12-medium"&gt;
&lt;li&gt;...&lt;/li&gt;
    &lt;/ul&gt;</code></pre>
								</div>
								<div class="col-6-12-medium">
							<pre><code>&lt;ul class="tab tab-right col-6-12-medium"&gt;
    &lt;li&gt;...&lt;/li&gt;
&lt;/ul&gt;</code></pre>
								</div>
							</div>
						</li>
					</ul>
					<h3>Responsive behavior</h3>
					<p>In narrower viewports, like phones, vertical tabs align themselves horizontally. Adding the <code>data-tab</code> attribute will apply the same responsive behavior as horizontal tabs.</p>