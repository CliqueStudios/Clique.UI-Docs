<hr>
					<h2 id="text-wrapping"><a href="#text-wrapping" class="link-reset">Text wrapping</a></h2>
					<p>Add one of these useful classes to wrap your text.</p>
					<div class="overflow-container">
						<table class="table-striped text-nowrap">
							<thead>
								<tr>
									<th class="col-3-12">Class</th>
									<th class="col-9-12">Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>.text-truncate</code></td>
									<td>Prevents text from wrapping into multiple lines, truncating it instead.</td>
								</tr>
								<tr>
									<td><code>.text-break</code></td>
									<td>Breaks strings if their length exceeds the width of their container.</td>
								</tr>
								<tr>
									<td><code>.text-nowrap</code></td>
									<td>Prevents text from wrapping into multiple lines.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#list-tabs2'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="list-tabs2" class="switcher margin">
						<li>
							<div class="row margin" data-row-margin>
								<div class="col-4-12-medium">
									<div class="panel panel-box text-truncate">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt. Lorem ipsum dolor sit amet, consetetur sadipscing elit <code>.text-truncate</code>
									</div>
								</div>
								<div class="col-4-12-medium">
									<div class="panel panel-box text-break">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt. Lorem ipsum dolor sit amet, consetetur sadipscing elit <code>.text-break</code>
									</div>
								</div>
								<div class="col-4-12-medium">
									<div class="panel panel-box text-nowrap">
										Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac. <code>.text-nowrap</code>
									</div>
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="row"&gt;
	&lt;div class="col"&gt;
		&lt;div class="panel panel-box text-truncate"&gt;
			...
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class="col"&gt;
		&lt;div class="panel panel-box text-break"&gt;
			...
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class="col"&gt;
		&lt;div class="panel panel-box text-nowrap"&gt;
			...
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
						</li>
					</ul>