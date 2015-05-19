
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Core</h1>
					<p class="article-lead" itemprop="about">All <?php echo SITENAME; ?> core components at a glance.</p>
					<p><?php echo SITENAME; ?> offers over 30 modular and extendible components, which can be combined with each other. Components are divided into different compartments according to their purpose and functionality.</p>
					<div class="row" data-row-margin>
						<div class="col-4-12-medium">
							<div class="panel">
								<h2 class="panel-title">Defaults</h2>
								<p>These components generally normalize HTML elements for cross browser functionality and add some very basic styling.</p>
							</div>
						</div>
						<div class="col-4-12-medium">
							<div class="panel">
								<h2 class="panel-title">Layout</h2>
								<p>Apply our fully responsive fluid grid system and panels, common layout parts like blog articles and comments and useful utility classes.</p>
							</div>
						</div>
						<div class="col-4-12-medium">
							<div class="panel">
								<h2 class="panel-title">Navigations</h2>
								<p><?php echo SITENAME; ?> offers different types of navigations, like navigation bars and side navigations. Use breadcrumbs or a pagination to steer through articles.</p>
							</div>
						</div>
					</div>
					<div class="row" data-row-margin>
						<div class="col-4-12-medium">
							<div class="panel">
								<h2 class="panel-title">Form</h2>
								<p>Style basic form elements, including different states of validation, visibility, and accessibility.</p>
							</div>
						</div>
						<div class="col-4-12-medium">
							<div class="panel">
								<h2 class="panel-title">Common</h2>
								<p>Here you'll find components that you often use within your content, like buttons, icons, badges, thumbnails, and much more.</p>
							</div>
						</div>
						<div class="col-4-12-medium">
							<div class="panel">
								<h2 class="panel-title">JavaScript</h2>
								<p>These components rely mostly on JavaScript to fade in hidden content, like dropdowns, modal dialogs, off-canvas bars and tooltips.</p>
							</div>
						</div>
					</div>
					<hr>
					<h2 id="breakpoints"><a href="#breakpoints" class="link-reset">Breakpoints</a></h2>
					<p><?php echo SITENAME; ?> includes a number of responsive classes to style your content for different viewport widths. This table gives you an overview of the available breakpoints and the associated devices.</p>
					<div class="overflow-container">
						<table class="table-striped text-nowrap">
							<thead>
								<tr>
									<th>Size</th>
									<th>Breakpoints</th>
									<th>Device</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Mini</td>
									<td>up to 479px</td>
									<td>Phones portrait</td>
								</tr>
								<tr>
									<td>Small</td>
									<td>480px to 767px</td>
									<td>Phones landscape</td>
								</tr>
								<tr>
									<td>Medium</td>
									<td>768px to 959px</td>
									<td>Tablets portrait</td>
								</tr>
								<tr>
									<td>Large</td>
									<td>960px to 1199px</td>
									<td>Desktops &amp; tablets landscape</td>
								</tr>
								<tr>
									<td>Xlarge</td>
									<td>1200px and larger</td>
									<td>Large Desktops</td>
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
