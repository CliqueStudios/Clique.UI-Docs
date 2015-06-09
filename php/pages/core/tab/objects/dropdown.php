<hr>
					<h2 id="tabs-with-dropdowns"><a href="#tabs-with-dropdowns" class="link-reset">Tabs with dropdowns</a></h2>
					<p>This is an example of how to use tabs with the<a href="<?php echo get_url('core/dropdown'); ?>">Dropdown component</a>.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#tab5-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="tab5-tabs" class="switcher margin">
						<li>
							<ul class="tab col-7-10-medium" data-tab>
								<li class="active"><a href="#">Active</a></li>
								<li><a href="#">Item</a></li>
								<li><a href="#">Item</a></li>
								<li data-dropdown="{mode:'click'}">
									<a href="#">More <i class="icon-chevron-down"></i>
									</a>
									<div class="dropdown dropdown-small">
										<ul class="nav nav-dropdown">
											<li><a href="#">Item</a></li>
											<li><a href="#">Another item</a></li>
											<li class="nav-header">Header</li>
											<li><a href="#">Item</a></li>
											<li><a href="#">Another item</a></li>
											<li class="nav-divider"></li>
											<li><a href="#">Separated item</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</li>
						<li>
							<pre><code>&lt;ul class="tab"&gt;
    &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;

    &lt;!-- This is the container enabling the JavaScript --&gt;
    &lt;li data-dropdown="{mode:'click'}"&gt;

        &lt;!-- This is the menu item toggling the dropdown --&gt;
        &lt;a href="#"&gt;...&lt;/a&gt;

        &lt;!-- This is the dropdown --&gt;
        &lt;div class="dropdown dropdown-small"&gt;
            &lt;ul class="nav nav-dropdown"&gt;
                &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
						</li>
					</ul>