
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('get-started'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Less</h1>
					<p class="article-lead" itemprop="about">Pre-compiled CSS that <?php echo SITENAME; ?> is built on</p>
					<p>All CSS files included with <?php echo SITENAME; ?> are built with a CSS pre-processor language, Less. Less allows us to extend the CSS markup for greater consistency and to take advantage of it's many features and benefits.</p>
					<hr>
					<h2 id="css-architecture"><a href="#css-architecture" class="link-reset">CSS architecture</a></h2>
					<p>Components are divided into the component itself, sub-objects and modifiers, whose class names always pick up the component name.</p>
					<h3>Definitions</h3>
					<div class="overflow-container">
						<table class="table-striped">
							<thead>
								<tr>
									<th>Object</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Component</td>
									<td>Components abstract recurring parts of a website into class-based modules, like buttons for example. These can be reused and combined.</td>
								</tr>
								<tr>
									<td>Sub-object</td>
									<td>Sub-objects are placed within a component to enhance its funtionality, for example a close button in an alert box.</td>
								</tr>
								<tr>
									<td>Modifier</td>
									<td>Modifier classes alter the style of components and their sub-objects, like button colors and sizes.</td>
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
