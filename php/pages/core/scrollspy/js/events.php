<h3>Events</h3>
					<p>You can bind callbacks to following events for custom functionality:</p>
					<div class="overflow-container">
						<table class="table-striped">
							<thead>
								<tr>
									<th>Name</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>init.clique.scrollspy</code></td>
									<td>Triggered when the element is initially in the viewport.</td>
								</tr>
								<tr>
									<td><code>inview.clique.scrollspy</code></td>
									<td>Triggered when the element is in the viewport.</td>
								</tr>
								<tr>
									<td><code>outview.clique.scrollspy</code></td>
									<td>Triggered when the element leaves the viewport.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<h3 class="docs-article-subtitle">Example</h3>
					<pre><code class="javascript">$('[data-scrollspy]').on('inview.clique.scrollspy', function(){
    // custom code...
});</code></pre>