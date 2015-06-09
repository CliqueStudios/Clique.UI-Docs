<hr>
					<h3 id="javascript-scrollspy-nav-options"><a href="#javascript-scrollspy-nav-options" class="link-reset">JavaScript options</a></h3>
					<p>This is an example of how to set options via attribute:</p>
					<pre><code>data-scrollspy-nav=&quot;{smoothscroll:true}&quot;</code></pre>
					<div class="overflow-container">
						<table class="table-striped">
							<thead>
								<tr>
									<th>Option</th>
									<th>Possible value</th>
									<th>Default</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<code>cls</code>
									</td>
									<td>string</td>
									<td>'active'</td>
									<td>Class to add to active element</td>
								</tr>
								<tr>
									<td>
										<code>closest</code>
									</td>
									<td>CSS selector</td>
									<td>false</td>
									<td>Element selector to which to apply the active class</td>
								</tr>
								<tr>
									<td>
										<code>topoffset</code>
									</td>
									<td>integer</td>
									<td>0</td>
									<td>Scroll top-offsset</td>
								</tr>
								<tr>
									<td>
										<code>leftoffset</code>
									</td>
									<td>integer</td>
									<td>0</td>
									<td>Scroll left-offsset</td>
								</tr>
								<tr>
									<td>
										<code>smoothscroll</code>
									</td>
									<td>boolean</td>
									<td>false</td>
									<td>Scroll animation</td>
								</tr>
							</tbody>
						</table>
					</div>
					<h3>Events</h3>
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
									<td>
										<code>init.clique.scrollspy</code>
									</td>
									<td>event</td>
									<td>On scrollspy first init</td>
								</tr>
								<tr>
									<td>
										<code>inview.clique.scrollspy</code>
									</td>
									<td>event</td>
									<td>Element entered view-port</td>
								</tr>
								<tr>
									<td>
										<code>outview.clique.scrollspy</code>
									</td>
									<td>event</td>
									<td>Element left view-port</td>
								</tr>
							</tbody>
						</table>
					</div>