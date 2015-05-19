
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Grid</h1>
					<p class="article-lead" itemprop="about">Create a fully responsive, fluid and nestable grid layout.</p>
					<p>The grid system of <?php echo SITENAME; ?> follows the mobile-first development approach and allows for two approaches to grid-based layouts &ndash; 10 and 12 columns. It uses units with semantic, predefined classes inside each grid which defines the width of eac column.</p>
					<p>In addition to the standard "float left and clear" approach to grid development, the Grid component also incorporates Flexbox technology, giving you greater control of grid layout and alignment in modern browsers.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Basic Usage</a></h2>
					<p>Each grid is bound by a <code>.row</code> element, and populated by <code>.col</code> elements. Both the <code>.row</code> and <code>.col</code> elements have different modifier classes that we'll explore later.</p>
					<p>The <code>.col</code> element class with a predefined width is prefixed with <code>col</code>, to represent a column within the row. The class is then followed by two integers, seperated by a single dash, which represents the fraction of space it takes up within the parent <code>.row</code> element. Let's look at how this plays out in the Base 12 and Base 10 grid systems.</p>
					<p><span class="badge">NOTE</span> The grid has no style related CSS. In these examples we included elements from the <a href="<?php echo get_url('core/panel'); ?>">Panel component</a>.</p>
					<hr>
					<h2 id="base-12-grid"><a href="#base-12-grid" class="link-reset">Base 12 Grid</a></h2>
					<p>As previously stated, the Grid component includes two grid systems. Thanks to frameworks like <a href="http://960.gs/" target="_blank">960.gs</a>, <a href="http://getskeleton.com/" target="_blank">Skeleton</a>, and <a href="http://getbootstrap.com/" target="_blank">Bootstrap</a> the Base 12 Grid is by far the most widely used.</p>
					<p>The Base 12 Grid's column classes, exmaples, and markup samples are as follows:</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#base-12-tabs'}">
								<li class="active" aria-expanded="true"><a href="#">Classes</a></li>
								<li aria-expanded="false" class=""><a href="#">Example</a></li>
								<li aria-expanded="false" class=""><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="base-12-tabs" class="switcher margin">
						<li>
							<div class="overflow-container">
								<table class="table-striped text-nowrap">
									<thead>
										<tr>
											<th class="col-2-12">Class</th>
											<th class="col-2-12">Width (as % of parent element)</th>
											<th class="col-8-12">Example</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$i = 12;
										while($i > 0) {
											?>
											<tr>
												<td><code>.col-<?php echo $i; ?>-12</code></td>
												<td><?php echo round(($i / 12) * 100, 4) . '%'; ?></td>
												<td>
													<div class="row">
														<div class="col-<?php echo $i; ?>-12">
															<div class="panel panel-box"></div>
														</div>
													</div>
												</td>
											</tr>
											<?php
											$i--;
										}
										?>
									</tbody>
								</table>
							</div>
						</li>
						<li>
							<div class="docs-grid-truncate text-center">
								<div class="row">
									<div class="col-4-12">
										<div class="panel panel-box">
											<code>.col-4-12</code>
										</div>
									</div>
									<div class="col-4-12">
										<div class="panel panel-box">
											<code>.col-4-12</code>
										</div>
									</div>
									<div class="col-4-12">
										<div class="panel panel-box">
											<code>.col-4-12</code>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-6-12">
										<div class="panel panel-box">
											<code>.col-6-12</code>
										</div>
									</div>
									<div class="col-6-12">
										<div class="panel panel-box">
											<code>.col-6-12</code>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-3-12">
										<div class="panel panel-box">
											<code>.col-3-12</code>
										</div>
									</div>
									<div class="col-2-12">
										<div class="panel panel-box">
											<code>.col-2-12</code>
										</div>
									</div>
									<div class="col-7-12">
										<div class="panel panel-box">
											<code>.col-7-12</code>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<p>Below is the markup found on the "Example" tab of this section:</p>
							<pre><code>&lt;div class="row"&gt;
    &lt;div class="col-4-12"&gt;...&lt;/div&gt;
    &lt;div class="col-4-12"&gt;...&lt;/div&gt;
    &lt;div class="col-4-12"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
    &lt;div class="col-6-12"&gt;...&lt;/div&gt;
    &lt;div class="col-6-12"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
    &lt;div class="col-3-12"&gt;...&lt;/div&gt;
    &lt;div class="col-2-12"&gt;...&lt;/div&gt;
    &lt;div class="col-7-12"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="base-10-grid"><a href="#base-10-grid" class="link-reset">Base 10 Grid</a></h2>
					<p>In additional to a classic Base 12 Grid, the Grid Component also includes a layout based on 10 columns. It has the same layout properties and box-model values as the Base 12 Grid.</p>
					<p>The Base 10 Grid's column classes, exmaples, and markup samples are as follows:</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#base-10-tabs'}">
								<li><a href="#">Classes</a></li>
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="base-10-tabs" class="switcher margin">
						<li>
							<div class="overflow-container">
								<table class="table-striped text-nowrap">
									<thead>
										<tr>
											<th class="col-2-12">Class</th>
											<th class="col-2-12">Width (as % of parent element)</th>
											<th class="col-8-12">Example</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$i = 10;
										while($i > 0) {
											?>
											<tr>
												<td><code>.col-<?php echo $i; ?>-10</code></td>
												<td><?php echo round(($i / 10) * 100) . '%'; ?></td>
												<td>
													<div class="row">
														<div class="col-<?php echo $i; ?>-10">
															<div class="panel panel-box"></div>
														</div>
													</div>
												</td>
											</tr>
											<?php
											$i--;
										}
										?>
									</tbody>
								</table>
							</div>
						</li>
						<li>
							<div class="docs-grid-truncate text-center">
								<div class="row">
									<div class="col-5-10">
										<div class="panel panel-box">
											<code>.col-5-10</code>
										</div>
									</div>
									<div class="col-5-10">
										<div class="panel panel-box">
											<code>.col-5-10</code>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-7-10">
										<div class="panel panel-box">
											<code>.col-7-10</code>
										</div>
									</div>
									<div class="col-3-10">
										<div class="panel panel-box">
											<code>.col-3-10</code>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-2-10">
										<div class="panel panel-box">
											<code>.col-2-10</code>
										</div>
									</div>
									<div class="col-2-10">
										<div class="panel panel-box">
											<code>.col-2-10</code>
										</div>
									</div>
									<div class="col-2-10">
										<div class="panel panel-box">
											<code>.col-2-10</code>
										</div>
									</div>
									<div class="col-2-10">
										<div class="panel panel-box">
											<code>.col-2-10</code>
										</div>
									</div>
									<div class="col-2-10">
										<div class="panel panel-box">
											<code>.col-2-10</code>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<p>Below is the markup found on the "Example" tab of this section:</p>
							<pre><code>&lt;div class="row"&gt;
    &lt;div class="col-5-10"&gt;...&lt;/div&gt;
    &lt;div class="col-5-10"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
    &lt;div class="col-7-10"&gt;...&lt;/div&gt;
    &lt;div class="col-3-10"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
    &lt;div class="col-2-10"&gt;...&lt;/div&gt;
    &lt;div class="col-2-10"&gt;...&lt;/div&gt;
    &lt;div class="col-2-10"&gt;...&lt;/div&gt;
    &lt;div class="col-2-10"&gt;...&lt;/div&gt;
    &lt;div class="col-2-10"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="responsive-width"><a href="#responsive-width" class="link-reset">Responsive width</a></h2>
					<p><?php echo SITENAME; ?> provides a number of very useful responsive widths classes. Basicall they work just like the usual width classes, except they are prefixed, so that they only come to effect at certain breakpoints. These classes can be combined with the visibility classes from the <a href="<?php echo get_url('core/utility'); ?>">Utility component</a>. This is great to adjust your layout and content for different device sizes.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#responsive-width-tabs'}">
								<li><a href="#">Classes</a></li>
								<li><a href="#">Example</a></li>
							</ul>
						</div>
					</div>
					<ul id="responsive-width-tabs" class="switcher margin">
						<li>
							<div class="overflow-container">
								<table class="table-striped text-nowrap">
									<thead>
										<tr>
											<th>Class</th>
											<th>Description</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><code>.col-*</code></td>
											<td>Affects all device widths, grid columns stay side by side.</td>
										</tr>
										<tr>
											<td><code>.col-*-xsmall</code></td>
											<td>Affects device widths of <em>480px</em> and small.</td>
										</tr>
										<tr>
											<td><code>.col-*-small</code></td>
											<td>Affects device widths of <em>480px</em> and higher. Grid columns will stack on smaller sizes.</td>
										</tr>
										<tr>
											<td><code>.col-*-medium</code></td>
											<td>Affects device widths of <em>768px</em> and higher. Grid columns will stack on smaller sizes.</td>
										</tr>
										<tr>
											<td><code>.col-*-large</code></td>
											<td>Affects device widths of <em>960px</em> and higher. Grid columns will stack on smaller sizes.</td>
										</tr>
									</tbody>
								</table>
							</div>
						</li>
						<li>
							<div class="docs-grid-truncate text-center">
								<div class="row" data-row-margin>
									<div class="col-4-12-large col-6-12-medium">
										<div class="panel panel-box panel-box-primary">
											<code>.col-6-12-medium</code>
											<code>.col-4-12-large</code>
										</div>
									</div>
									<div class="col-4-12-large hidden-medium">
										<div class="panel panel-box">
											<code>.hidden-medium</code>
											<code>.col-4-12-large</code>
										</div>
									</div>
									<div class="col-4-12-large col-6-12-medium">
										<div class="panel panel-box panel-box-primary">
											<code>.col-6-12-medium</code>
											<code>.col-4-12-large</code>
										</div>
									</div>
								</div>
								<div class="row" data-row-margin>
									<div class="col-4-12-medium col-6-12">
										<div class="panel panel-box panel-box-secondary">
											<code>.col-6-12</code>
											<code>.col-4-12-medium</code>
										</div>
									</div>
									<div class="col-4-12-medium hidden-small">
										<div class="panel panel-box">
											<code>.hidden-small</code>
											<code>.col-4-12-medium</code>
										</div>
									</div>
									<div class="col-4-12-medium col-6-12">
										<div class="panel panel-box panel-box-secondary">
											<code>.col-6-12</code>
											<code>.col-4-12-medium</code>
										</div>
									</div>
								</div>
								<div class="row" data-row-margin>
									<div class="col-12-12 visible-small">
										<div class="panel panel-box panel-box-secondary">
											<code>.col-12-12 .visible-small</code>
										</div>
									</div>
									<div class="col-12-12-medium visible-medium">
										<div class="panel panel-box panel-box-primary">
											<code>.col-12-12-medium .visible-medium</code>
										</div>
									</div>
									<div class="col-12-12-large visible-large">
										<div class="panel panel-box panel-box">
											<code>.col-12-12-large .visible-large</code>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
					<hr>
					<h2 id="grid-gutter"><a href="#grid-gutter" class="link-reset">Grid gutter</a></h2>
					<p>Grids automatically create a horizontal gutter between columns and a vertical one between two succeeding grids. By default, the grid gutter is wider on large screens.</p>
					<h3>Medium gutter</h3>
					<p>To apply a medium sized gutter between grid columns, just add the <code>.row-medium</code> class.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#gutter-med-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="gutter-med-tabs" class="switcher margin">
						<li>
							<div class="row row-medium">
								<div class="col-4-12">
									<div class="panel panel-box panel-box-primary">Lorem ipsum</div>
								</div>
								<div class="col-4-12">
									<div class="panel panel-box panel-box-primary">Lorem ipsum</div>
								</div>
								<div class="col-4-12">
									<div class="panel panel-box panel-box-primary">Lorem ipsum</div>
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="row row-medium"&gt;
    &lt;div class="col-4-12"&gt;...&lt;/div&gt;
    &lt;div class="col-4-12"&gt;...&lt;/div&gt;
    &lt;div class="col-4-12"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3>Small gutter</h3>
					<p>To apply a smaller gutter between grid columns, just add the <code>.row-small</code> class.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#gutter-small-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="gutter-small-tabs" class="switcher margin">
						<li>
							<div class="row row-small">
								<div class="col-4-12">
									<div class="panel panel-box panel-box-primary">Lorem ipsum</div>
								</div>
								<div class="col-4-12">
									<div class="panel panel-box panel-box-primary">Lorem ipsum</div>
								</div>
								<div class="col-4-12">
									<div class="panel panel-box panel-box-primary">Lorem ipsum</div>
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="row row-small"&gt;
    &lt;div class="col-4-12"&gt;...&lt;/div&gt;
    &lt;div class="col-4-12"&gt;...&lt;/div&gt;
    &lt;div class="col-4-12"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3>Collapse gutter</h3>
					<p>To remove the gutter entirely, just add the <code>.row-collapse</code> class.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#gutter-collapse-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="gutter-collapse-tabs" class="switcher margin">
						<li>
							<div class="row row-collapse">
								<div class="col-4-12">
									<div class="panel panel-box panel-box-primary">Lorem ipsum</div>
								</div>
								<div class="col-4-12">
									<div class="panel panel-box panel-box-primary">Lorem ipsum</div>
								</div>
								<div class="col-4-12">
									<div class="panel panel-box panel-box-primary">Lorem ipsum</div>
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="row row-collapse"&gt;
    &lt;div class="col-4-12"&gt;...&lt;/div&gt;
    &lt;div class="col-4-12"&gt;...&lt;/div&gt;
    &lt;div class="col-4-12"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="nested-grid"><a href="#nested-grid" class="link-reset">Nested grid</a></h2>
					<p>You can easily extend your grid layout with nested grids.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#nested-grid-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="nested-grid-tabs" class="switcher margin">
						<li>
							<div class="docs-grid-truncate text-center">
								<div class="row">
									<div class="col-6-12">
										<div class="panel panel-box">
											<code>.col-6-12</code>
										</div>
									</div>
									<div class="col-6-12">
										<div class="row">
											<div class="col-6-12">
												<div class="panel panel-box panel-box-primary">
													<code>.col-6-12</code>
												</div>
											</div>
											<div class="col-6-12">
												<div class="panel panel-box panel-box-primary">
													<code>.col-6-12</code>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="row"&gt;
    &lt;div class="col-6-12"&gt;...&lt;/div&gt;
    &lt;div class="col-6-12"&gt;
        &lt;div class="row"&gt;
            &lt;div class="col-6-12"&gt;...&lt;/div&gt;
            &lt;div class="col-6-12"&gt;...&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="center-grid"><a href="#center-grid" class="link-reset">Centered grid</a></h2>
					<p>Add the <code>.container-center</code> class from the <a href="<?php echo get_url('core/utility'); ?>">Utility component</a> to center a grid column.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#centered-grid-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="centered-grid-tabs" class="switcher margin">
						<li>
							<div class="col-6-12 container-center text-center">
								<div class="panel panel-box text-center">
									<code>.container-center</code>
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="row"&gt;
    &lt;div class="col-6-12 container-center"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="row-divider"><a href="#row-divider" class="link-reset">Grid Divider</a></h2>
					<p>Add the <code>.row-divider</code> class to separate grid columns with lines. To separate grids with a horizontal line, just add the class to a <code>&lt;hr&gt;</code> or <code>&lt;div&gt;</code> element.</p>
					<p><span class="badge">NOTE</span> The horizontal divider cannot be applied to grids with any of the <code>push-*</code> or <code>pull-*</code> classes.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#grid-divider-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="grid-divider-tabs" class="switcher margin">
						<li>
							<div class="docs-grid-truncate row row-divider text-center" data-row-margin>
								<div class="col-4-12-medium">
									<div class="panel panel-box"><code>.col-4-12-medium</code></div>
								</div>
								<div class="col-4-12-medium">
									<div class="panel panel-box"><code>.col-4-12-medium</code></div>
								</div>
								<div class="col-4-12-medium">
									<div class="panel panel-box"><code>.col-4-12-medium</code></div>
								</div>
							</div>
							<hr class="row-divider">
							<div class="row row-divider text-center" data-row-margin>
								<div class="col-4-12-medium">
									<div class="panel panel-box"><code>.col-4-12-medium</code></div>
								</div>
								<div class="col-4-12-medium">
									<div class="panel panel-box"><code>.col-4-12-medium</code></div>
								</div>
								<div class="col-4-12-medium">
									<div class="panel panel-box"><code>.col-4-12-medium</code></div>
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="row row-divider text-center" data-row-margin&gt;
    &lt;div class="col-4-12-medium"&gt;...&lt;/div&gt;
    &lt;div class="col-4-12-medium"&gt;...&lt;/div&gt;
    &lt;div class="col-4-12-medium"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;hr class="row-divider"&gt;
&lt;div class="row row-divider text-center" data-row-margin&gt;
    &lt;div class="col-4-12-medium"&gt;...&lt;/div&gt;
    &lt;div class="col-4-12-medium"&gt;...&lt;/div&gt;
    &lt;div class="col-4-12-medium"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="match-column-heights"><a href="#match-column-heights" class="link-reset">Matching Column Heights</a></h2>
					<p>The Grid component uses Flexbox, so the height of grid columns is matched automatically. To achieve the same effect in older browsers that don't support Flexbox, just add the <code>data-row-match</code> attribute to your grid. If your grid wraps into multiple rows, only grid columns within the same row are matched. To match grid columns accross all rows just use <code>data-row-match="{row: false}"</code>.</p>
					<p><span class="badge">NOTE</span> If grid columns extend to a width of 100%, their heights will no longer be matched. This makes sense, for example, if they stack vertically in narrower viewports.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#grid-match-height-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="grid-match-height-tabs" class="switcher margin">
						<li>
							<div class="row row-divider" data-row-match>
								<div class="col-4-12-medium">Lorem ipsum dolor sit amet.</div>
								<div class="col-4-12-medium">Lorem ipsum dolor sit amet.</div>
								<div class="col-4-12-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="row row-divider" data-row-match&gt;
    &lt;div class="col-4-12-medium"&gt;...&lt;/div&gt;
    &lt;div class="col-4-12-medium"&gt;...&lt;/div&gt;
    &lt;div class="col-4-12-medium"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3>Match height of panels</h3>
					<p>If you want to match the heights of panels in a grid, just add the <code>.row-match</code> class. When using the data attribute, you need to add the <code>{target:'.panel'}</code> selector.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#grid-match-panel-height-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="grid-match-panel-height-tabs" class="switcher margin">
						<li>
							<div class="row row-divider" data-row-match="{target:'.panel'}" data-row-match>
								<div class="col-4-12-medium">
									<div class="panel panel-box">Lorem ipsum dolor sit amet.</div>
								</div>
								<div class="col-4-12-medium">
									<div class="panel panel-box">Lorem ipsum dolor sit amet.</div>
								</div>
								<div class="col-4-12-medium">
									<div class="panel panel-box">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="row row-divider" data-row-match="{target:'.panel'}" data-row-match&gt;
    &lt;div class="col-4-12-medium"&gt;
        &lt;div class="panel panel-box"&gt;...&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-4-12-medium"&gt;
        &lt;div class="panel panel-box"&gt;...&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-4-12-medium"&gt;
        &lt;div class="panel panel-box"&gt;...&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="even-row-columns"><a href="#even-row-columns" class="link-reset">Even grid columns</a></h2>
					<p>To create a grid whose child elements' widths are evenly split, add one of the <code>.row-*-cols</code> classes to the row itself. This provides a significantly simpler and more elegant solution to repeatedly applying the same fixed column-width class across all row children.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#even-grid-columns-tabs'}">
								<li><a href="#">Classes</a></li>
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="even-grid-columns-tabs" class="switcher margin">
						<li>
							<div class="overflow-container">
								<table class="table-striped text-nowrap">
									<thead>
										<tr>
											<th>Class</th>
											<th>Width of each column, distributed evenly</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$i = 12;
										while($i > 1) {
											?>
											<tr>
												<td><code>.row-<?php echo $i; ?>-cols</code></td>
												<td><?php echo round((1 / $i) * 100, 4) . '%'; ?></td>
											</tr>
											<?php
											$i--;
										}
										?>
									</tbody>
								</table>
							</div>
						</li>
						<li>
							<?php
								$i = 12;
								while($i > 1) {
									?>
										<div class="docs-panel-row panel panel-box">
											<p><code><?php echo '.row-' . $i . '-cols'; ?></code></p>
											<ul class="row row-<?php echo $i; ?>-cols">
												<?php
													$c = $i;
													while($c > 0) {
														echo '<li><div class="panel panel-box panel-box-primary"></div></li>' . "\n";
														$c--;
													}
												?>
											</ul>
										</div>
									<?php
									$i--;
								}
							?>
						</li>
						<li>
							<?php
								$i = 12;
								$output = '<pre><code>';
								while($i > 1) {
									$output .= '&lt;ul class="row row-' . $i . '-cols"&gt;' . "\n";
									$output .= '    ...' . "\n";
									$output .= '&lt;/ul&gt;' . "\n\n";
									$i--;
								}
								$output .= '</code></pre>';
								echo $output;
							?>
						</li>
					</ul>
					<hr>
					<h3>Responsive width</h3>
					<p><?php echo SITENAME; ?> also provides responsive grid width classes. You can apply these to maintain evenly sized grid columns, regardless of the device width.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#even-grid-columns-responsive-tabs'}">
								<li><a href="#">Classes</a></li>
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="even-grid-columns-responsive-tabs" class="switcher margin">
						<li>
							<div class="overflow-container">
								<table class="table-striped text-nowrap">
									<thead>
										<tr>
											<th>Class</th>
											<th>Description</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><code>.row-*-cols</code></td>
											<td>Affects all device widths.</td>
										</tr>
										<tr>
											<td><code>.row-*-cols-xsmall</code></td>
											<td>Affects device widths of <em>480px</em> and lower.</td>
										</tr>
										<tr>
											<td><code>.row-*-cols-small</code></td>
											<td>Affects device widths of <em>480px</em> and higher.</td>
										</tr>
										<tr>
											<td><code>.row-*-cols-medium</code></td>
											<td>Affects device widths of <em>768px</em> and higher.</td>
										</tr>
										<tr>
											<td><code>.row-*-cols-large</code></td>
											<td>Affects device widths of <em>960px</em> and higher.</td>
										</tr>
										<tr>
											<td><code>.row-*-cols-xlarge</code></td>
											<td>Affects device widths of <em>1220px</em> and higher.</td>
										</tr>
									</tbody>
								</table>
							</div>
						</li>
						<li>
							<ul class="row row-2-cols row-3-cols-medium row-5-cols-large text-center" data-row-margin>
								<li><div class="panel panel-box">Box</div></li>
								<li><div class="panel panel-box">Box</div></li>
								<li><div class="panel panel-box">Box</div></li>
								<li><div class="panel panel-box">Box</div></li>
								<li><div class="panel panel-box">Box</div></li>
							</ul>
						</li>
						<li>
							<pre><code>&lt;ul class="row row-2-cols row-3-cols-medium row-5-cols-large"&gt;
    &lt;li&gt;...&lt;/li&gt;
    &lt;li&gt;...&lt;/li&gt;
    &lt;li&gt;...&lt;/li&gt;
    &lt;li&gt;...&lt;/li&gt;
    &lt;li&gt;...&lt;/li&gt;
&lt;/ul&gt;</code></pre>
						</li>
					</ul>
					<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
