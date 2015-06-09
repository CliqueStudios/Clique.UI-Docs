<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>The Pagination component consists of button-like styled links, that are aligned side by side.</p>
					<p>To apply an ellipsis without any styling, just use a <code>&lt;span&gt;</code> element instead of an <code>&lt;a&gt;</code> element.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#pagination-tabs'}">
								<li><a href="#">Classes</a></li>
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="pagination-tabs" class="switcher margin">
						<li>
							<div class="overflow-container">
								<table class="table-striped">
									<thead>
										<tr>
											<th>Class</th>
											<th>Description</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><code>.pagination</code></td>
											<td>Add this class to a <code>&lt;ul&gt;</code> element to define the Pagination component. Use <code>&lt;a&gt;</code> elements as pagination items within the list.</td>
										</tr>
										<tr>
											<td><code>.active</code></td>
											<td>Add this class to a list item to apply an active state and use a <code>&lt;span&gt;</code> instead of an <code>&lt;a&gt;</code> element.</td>
										</tr>
										<tr>
											<td><code>.disabled</code></td>
											<td>Add this class to a list item to apply a disabled state and use a <code>&lt;span&gt;</code> instead of an <code>&lt;a&gt;</code> element.</td>
										</tr>
									</tbody>
								</table>
							</div>
						</li>
						<li>
							<ul class="pagination">
								<li class="disabled">
									<span>
										<i class="icon-chevron-left"></i>
									</span>
								</li>
								<li class="active">
									<span>1</span>
								</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li>
									<span>...</span>
								</li>
								<li><a href="#">20</a></li>
								<li>
									<a href="#">
										<i class="icon-chevron-right"></i>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<pre><code>&lt;ul class="pagination"&gt;
    &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
    &lt;li class="active"&gt;
        &lt;span&gt;...&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class="disabled"&gt;
        &lt;span&gt;...&lt;/span&gt;
    &lt;/li&gt;
    &lt;li&gt;
        &lt;span&gt;...&lt;/span&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
					</ul>