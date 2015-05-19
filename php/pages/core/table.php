
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>

			<?php get_sidebar('core'); ?>

			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Table</h1>
					<p class="article-lead" itemprop="about">Easily create nicely looking tables, which come in different styles.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>By default, the table component is applied to all native <code>&lt;table&gt;</code> elements - no additional or unique classes need to be added.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#table-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="table-tabs" class="switcher margin">
						<li>
							<div class="overflow-container">
								<table>
									<caption>Table caption</caption>
									<thead>
										<tr>
											<th>Table Heading</th>
											<th>Table Heading</th>
											<th>Table Heading</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<td>Table Footer</td>
											<td>Table Footer</td>
											<td>Table Footer</td>
										</tr>
									</tfoot>
									<tbody>
										<tr>
											<td>Table Data</td>
											<td>Table Data</td>
											<td>Table Data</td>
										</tr>
										<tr>
											<td>Table Data</td>
											<td>Table Data</td>
											<td>Table Data</td>
										</tr>
										<tr>
											<td>Table Data</td>
											<td>Table Data</td>
											<td>Table Data</td>
										</tr>
									</tbody>
								</table>
							</div>
						</li>
						<li>
							<pre><code>&lt;table&gt;
    &lt;caption&gt;...&lt;/caption&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;...&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tfoot&gt;
        &lt;tr&gt;
            &lt;td&gt;...&lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tfoot&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;td&gt;...&lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3>Columns</h3>
					<p>To modify the column width or content, you can use other components. Here are some useful examples:</p>
					<div class="overflow-container">
						<table class="table-striped">
							<thead>
								<tr>
									<th>Style</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Column width</td>
									<td>Add one of the <code>.col-*</code> classes from the <a href="<?php echo get_url('core/grid'); ?>">Grid component</a>.</td>
								</tr>
								<tr>
									<td>Text alignment</td>
									<td>Add the <code>.text-left</code>, <code>.text-right</code> or <code>.text-center</code> class from the <a href="<?php echo get_url('core/text'); ?>">Text component</a>.</td>
								</tr>
								<tr>
									<td>Text style</td>
									<td>Take a look at the <a href="<?php echo get_url('core/text'); ?>">Text component</a>. For example add the <code>.text-bold</code> class.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;td class="col-12-12 text-right"&gt;...&lt;/td&gt;
&lt;td class="col-9-10 text-bold"&gt;...&lt;/td&gt;</code></pre>
					<hr>
					<h3>Vertical modifier</h3>
					<p>To vertically center table content, just add the <code>.table-middle</code> class to the <code>&lt;tr&gt;</code> or <code>&lt;td&gt;</code> elements.</p>
					<hr>
					<h2 id="modifiers"><a href="#modifiers" class="link-reset">Modifiers</a></h2>
					<p>To display the table in a different style, just add a modifier class to the the <code>table</code> element.</p>
					<h3>Table hover</h3>
					<p>Add the <code>.table-hover</code> class to display a hover state on table rows.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#table1-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="table1-tabs" class="switcher margin">
						<li>
							<div class="overflow-container">
								<table class="table-hover">
									<thead>
										<tr>
											<th>Table Heading</th>
											<th>Table Heading</th>
											<th>Table Heading</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Table Data</td>
											<td>Table Data</td>
											<td>Table Data</td>
										</tr>
										<tr>
											<td>Table Data</td>
											<td>Table Data</td>
											<td>Table Data</td>
										</tr>
										<tr>
											<td>Table Data</td>
											<td>Table Data</td>
											<td>Table Data</td>
										</tr>
									</tbody>
								</table>
							</div>
						</li>
						<li>
							<pre><code>&lt;table class="table-hover"&gt;...&lt;/table&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3>Table striped</h3>
					<p>Add zebra-striping to a table by adding the <code>.table-striped</code> class.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#table2-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="table2-tabs" class="switcher margin">
						<li>
							<div class="overflow-container">
								<table class="table-striped">
									<thead>
										<tr>
											<th>Table Heading</th>
											<th>Table Heading</th>
											<th>Table Heading</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Table Data</td>
											<td>Table Data</td>
											<td>Table Data</td>
										</tr>
										<tr>
											<td>Table Data</td>
											<td>Table Data</td>
											<td>Table Data</td>
										</tr>
										<tr>
											<td>Table Data</td>
											<td>Table Data</td>
											<td>Table Data</td>
										</tr>
									</tbody>
								</table>
							</div>
						</li>
						<li>
							<pre><code>&lt;table class="table-striped"&gt;...&lt;/table&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3>Table condensed</h3>
					<p>Add the <code>.table-condensed</code> class to make table cells more compact.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#table3-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="table3-tabs" class="switcher margin">
						<li>
							<div class="overflow-container">
								<table class="table-condensed">
									<thead>
										<tr>
											<th>Table Heading</th>
											<th>Table Heading</th>
											<th>Table Heading</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Table Data</td>
											<td>Table Data</td>
											<td>Table Data</td>
										</tr>
										<tr>
											<td>Table Data</td>
											<td>Table Data</td>
											<td>Table Data</td>
										</tr>
										<tr>
											<td>Table Data</td>
											<td>Table Data</td>
											<td>Table Data</td>
										</tr>
									</tbody>
								</table>
							</div>
						</li>
						<li>
							<pre><code>&lt;table class="table-condensed"&gt;...&lt;/table&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3>Combine modifiers</h3>
					<p>The modifiers of the Table component are combinable with each other.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#table4-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="table4-tabs" class="switcher margin">
						<li>
							<div class="overflow-container">
								<table class="table-hover table-striped table-condensed">
									<thead>
										<tr>
											<th>Table Heading</th>
											<th>Table Heading</th>
											<th>Table Heading</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Table Data</td>
											<td>Table Data</td>
											<td>Table Data</td>
										</tr>
										<tr>
											<td>Table Data</td>
											<td>Table Data</td>
											<td>Table Data</td>
										</tr>
										<tr>
											<td>Table Data</td>
											<td>Table Data</td>
											<td>Table Data</td>
										</tr>
									</tbody>
								</table>
							</div>
						</li>
						<li>
							<pre><code>&lt;table class="table-hover table-striped table-condensed"&gt;...&lt;/table&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="overflow-container"><a href="#overflow-container" class="link-reset">Responsive Table</a></h2>
					<p>If your table happens to be wider than its container element or would eventually get too big on a specific viewport width, just wrap it inside a <code>&lt;div&gt;</code> element and add the <code>.overflow-container</code> class. This creates a container that provides a horizontal scrollbar whenever the elements inside it are wider than the container itself.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#table5-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="table5-tabs" class="switcher margin">
						<li>
							<div class="overflow-container">
								<table class="table-striped table-condensed text-nowrap">
									<thead>
										<tr>
											<th>Table Heading</th>
											<th>Table Heading</th>
											<th>Table Heading</th>
											<th>Table Heading</th>
											<th>Table Heading</th>
											<th>Table Heading</th>
											<th>Table Heading</th>
											<th>Table Heading</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<td>Table Footer</td>
											<td>Table Footer</td>
											<td>Table Footer</td>
											<td>Table Footer</td>
											<td>Table Footer</td>
											<td>Table Footer</td>
											<td>Table Footer</td>
											<td>Table Footer</td>
										</tr>
									</tfoot>
									<tbody>
										<tr>
											<td>Table Data</td>
											<td>Table Data</td>
											<td>Table Data</td>
											<td>Table Data</td>
											<td>Table Data</td>
											<td>Table Data</td>
											<td>Table Data</td>
											<td>Table Data</td>
										</tr>
										<tr>
											<td>Table Data</td>
											<td>Table Data</td>
											<td>Table Data</td>
											<td>Table Data</td>
											<td>Table Data</td>
											<td>Table Data</td>
											<td>Table Data</td>
											<td>Table Data</td>
										</tr>
										<tr>
											<td>Table Data</td>
											<td>Table Data</td>
											<td>Table Data</td>
											<td>Table Data</td>
											<td>Table Data</td>
											<td>Table Data</td>
											<td>Table Data</td>
											<td>Table Data</td>
										</tr>
									</tbody>
								</table>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="overflow-container"&gt;
    &lt;table&gt;...&lt;/table&gt;
&lt;/div&gt;</code></pre>
						</li>
					</ul>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
