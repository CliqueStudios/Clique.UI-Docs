<hr>
					<h2 id="previous-and-next"><a href="#previous-and-next" class="link-reset">Previous and next</a></h2>
					<p>Creating a simple previous and next pagination is very easy. Just add the <code>.pagination-previous</code> or <code>.pagination-next</code> class to a <code>&lt;li&gt;</code> element to align previous and next buttons left or right.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#pagination2-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="pagination2-tabs" class="switcher margin">
						<li>
							<ul class="pagination">
								<li class="pagination-previous">
									<a href="#">
										<i class="icon-chevron-left"></i> Previous
									</a>
								</li>
								<li class="pagination-next">
									<a href="#">Next
										<i class="icon-chevron-right"></i>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<pre><code>&lt;li class="pagination-previous"&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
&lt;li class="pagination-next"&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;</code></pre>
						</li>
					</ul>