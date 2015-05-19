
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Selects</h1>
					<p class="article-lead" itemprop="about">Create styleable, cross-browser compatible selects.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>To apply this component, just add the <code>data-select</code> attribute to an individual select or a parent element (like a form). When applied to a parent, all selects within that element will be transformed.</p>
					<?php
					$text = '<select data-select>
	<option>Option 01</option>
	<option>Option 02</option>
	<option>Option 03</option>
	<option>Option 04</option>
</select>';
						print_example($text);
					?>
					<hr>
					<h3>Native Element</h3>
					<p>If you choose to not include the Select Component, select elements will default to a nicely styled native element</p>
					<?php
					$text = '<select>
	<option>Option 01</option>
	<option>Option 02</option>
	<option>Option 03</option>
	<option>Option 04</option>
</select>';
						print_example($text);
					?>
					<hr>
					<h2 id="javascript"><a href="#javascript" class="link-reset">JavaScript</a></h2>
					<h3 class="docs-article-subtitle">Manual Initialization</h3>
					<pre><code>&lt;!-- Clique.UI API --&gt;
Clique.select('.my-select', {
    // Options...
});

&lt;!-- jQuery API --&gt;
$('.my-select').clique('select', {
    // Options...
});
</code></pre>
					<h3 class="docs-article-subtitle">Options</h3>
					<div class="overflow-container">
						<table class="table-striped text-nowrap">
							<thead>
								<tr>
									<th>Option</th>
									<th>Type</th>
									<th>Default</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>inheritClasses</code></td>
									<td>Boolean</td>
									<td>true</td>
									<td>Whether the created component should inherit the classes of the native element.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<h3 class="docs-article-subtitle">Events</h3>
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
									<td><code>clique.select.change</code></td>
									<td>
										<table>
											<tbody>
												<tr>
													<td>Event</td>
													<td><em>jQuery Object</em></td>
												</tr>
												<tr>
													<td>Index of Item</td>
													<td><em>Integer</em></td>
												</tr>
												<tr>
													<td>Selected Item</td>
													<td><em>Object</em></td>
												</tr>
											</tbody>
										</table>
									</td>
									<td>On selection change</td>
								</tr>
							</tbody>
						</table>
					</div>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
