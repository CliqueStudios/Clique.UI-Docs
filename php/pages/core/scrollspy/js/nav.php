<hr>
					<h2 id="scrollspy-nav"><a href="#scrollspy-nav" class="link-reset">Scrollspy Nav</a></h2>
					<p>To automatically update the active menu item in a menu depending on the scroll position of your site, just add the data attribute <code>data-scrollspy-nav</code> to any navigation. Each menu item must link to the ID of its corresponding part of the site.</p>
					<div class="overflow-container">
						<table class="table-striped">
							<thead>
								<tr>
									<th>Data attribute</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>data-scrollspy-nav</code></td>
									<td>Triggers the JavaScript necessary for the functionality of the scrollspy nav.</td>
								</tr>
								<tr>
									<td><code>data-scrollspy-nav="{closest:'MY-SELECTOR'}"</code></td>
									<td>Looks for the closest element that matches the selector by testing the element itself and traversing up through its ancestors in the DOM tree.</td>
								</tr>
								<tr>
									<td><code>data-scrollspy-nav="{smoothscroll:true}"</code></td>
									<td>Applies the
										<a href="<?php echo get_url('core/smooth-scroll'); ?>">Smooth scroll component</a> when skipping between different sections of the site.</td>
								</tr>
								<tr>
									<td><code>data-scrollspy-nav="{cls:'MY-CLASS'}"</code></td>
									<td>By default ScrollspyNav toggles the
										<code>active</code> class. Use the
										<code>cls</code> option to use your own class name.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<p>For an example of the scrollspy nav, just check out our <a href="../tests/core/<?php echo get_url('core/scrollspy'); ?>">Scrollspy test page</a>.</p>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;ul class="nav nav-side" data-scrollspy-nav="{closest:'li', smoothscroll:true}"&gt;
    &lt;li&gt;&lt;a href="#my-id"&gt;...&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#my-id2"&gt;...&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;

&lt;div id="my-id"&gt;...&lt;/div&gt;
&lt;div id="my-id2"&gt;...&lt;/div&gt;</code></pre>