<h3>Events</h3>
					<p>You can bind callbacks to following events for custom functionality:</p>
					<div class="overflow-container">
						<table class="table-striped text-nowrap">
							<thead>
								<tr>
									<th>Name</th>
									<th>Parameter</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>show.clique.switcher</code></td>
									<td>event, active item</td>
									<td>On switcher item show/change</td>
								</tr>
							</tbody>
						</table>
					</div>
					<h3 class="docs-article-subtitle">Example</h3>
					<pre><code>$('[data-switcher]').on('show.clique.switcher', function(event, area){
    console.log("Switcher switched to ", area);
});</code></pre>
