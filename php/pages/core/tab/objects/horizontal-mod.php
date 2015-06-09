<hr>
					<h2 id="horizontal-modifiers"><a href="#horizontal-modifiers" class="link-reset">Horizontal modifiers</a></h2>
					<p>Add one of the following classes to alter your tabs' styling. These modifiers can also be combined.</p>
					<h3>Align tabs</h3>
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
									<td><code>.tab-flip</code></td>
									<td>Add this class to align tabs right and in reversed order.</td>
								</tr>
								<tr>
									<td><code>.tab-bottom</code></td>
									<td>Add this class to the <code>&lt;ul&gt;</code> to place tabs at the bottom. This can also be combined with the other modifiers.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#tab1-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="tab1-tabs" class="switcher margin">
						<li>
							<div class="row" data-row-margin>
								<div class="col-6-12-medium">
									<ul class="tab tab-flip" data-tab>
										<li class="active"><a href="#">Active</a></li>
										<li><a href="#">Item</a></li>
										<li><a href="#">Item</a></li>
									</ul>
								</div>
								<div class="col-6-12-medium">
									<ul class="tab tab-bottom" data-tab>
										<li class="active"><a href="#">Active</a></li>
										<li><a href="#">Item</a></li>
										<li><a href="#">Item</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;ul class="tab tab-flip" data-tab&gt;...&lt;/ul&gt;
&lt;ul class="tab tab-bottom" data-tab&gt;...&lt;/ul&gt;</code></pre>
						</li>
					</ul>