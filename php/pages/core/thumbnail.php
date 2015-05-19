
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>

			<?php get_sidebar('core'); ?>

			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/TechArticle">
					<h1 class="article-title" itemprop="name">Thumbnail</h1>
					<p class="article-lead" itemprop="description">Create different thumbnail images, which come in various styles and sizes.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>To apply this component, just add the <code>.thumbnail</code> class to an <code>&lt;img&gt;</code>, <code>&lt;a&gt;</code> or <code>&lt;figure&gt;</code> element.</p>
					<?php
					$image = get_image('placeholder_200x100.svg');
					$text = '<!-- .thumbnail applied to an `img` element -->
<img class="thumbnail" src="' . $image . '" width="200" height="100" alt="">

<!-- !pplied to an `a` tag -->
<a class="thumbnail" href="#">
	<img src="' . $image . '" width="200" height="100" alt="">
</a>

<!-- Applied to a parent `figure` tag -->
<figure class="thumbnail">
	<img src="' . $image . '" width="200" height="100" alt="">
</figure>';
						print_example($text);
					?>
					<hr>
					<h3>Caption</h3>
					<p>Add the <code>.thumbnail-caption</code> class to a <code>&lt;div&gt;</code> element to apply a text caption under the image.</p>
					<?php
					$image = get_image('placeholder_200x100.svg');
					$text = '<div class="margin" data-margin>
	<div class="thumbnail">
		<img src="' . $image . '" width="200" height="100" alt="">
		<div class="thumbnail-caption">Caption on a <code>&lt;div&gt;</code></div>
	</div>
	<a class="thumbnail" href="#">
		<img src="' . $image . '" width="200" height="100" alt="">
		<div class="thumbnail-caption">Caption on an <code>&lt;a&gt;</code> tag</div>
	</a>
	<figure class="thumbnail">
		<img src="' . $image . '" width="200" height="100" alt="">
		<figcaption class="thumbnail-caption">Caption on a <code>&lt;figure&gt;</code></figcaption>
	</figure>
</div>';
						print_example($text);
					?>
					<hr>
					<h2 id="size-modifiers"><a href="#size-modifiers" class="link-reset">Size modifiers</a></h2>
					<p>Apply the <code>.thumbnail-large</code>, <code>.thumbnail-medium</code>, <code>.thumbnail-small</code> or <code>.thumbnail-mini</code> classes to resize images. The <a href="<?php echo get_url('core/base'); ?>">Base component</a> is required to make the images responsive by default.</p>
					<div class="overflow-container">
						<table class="table-striped text-nowrap">
							<thead>
								<tr>
									<th class="col-2-12">Class</th>
									<th class="col-2-12">CSS</th>
									<th class="col-8-12">Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>.thumbnail-expand</code></td>
									<td>width: 100%;</td>
									<td>Expands width of element and child <code>img</code> to 100% of the container width.</td>
								</tr>
								<tr>
									<td><code>.thumbnail-large</code></td>
									<td>width: 400px;</td>
									<td>Sets width of <code>.thumbnail</code> element to 400px.</td>
								</tr>
								<tr>
									<td><code>.thumbnail-medium</code></td>
									<td>width: 300px;</td>
									<td>Sets width of <code>.thumbnail</code> element to 300px.</td>
								</tr>
								<tr>
									<td><code>.thumbnail-small</code></td>
									<td>width: 200px;</td>
									<td>Sets width of <code>.thumbnail</code> element to 200px.</td>
								</tr>
								<tr>
									<td><code>.thumbnail-mini</code></td>
									<td>width: 150px;</td>
									<td>Sets width of <code>.thumbnail</code> element to 150px.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<?php
					$image = get_image('placeholder_200x100.svg');
					$text = '<div class="thumbnail thumbnail-expand">
	<img src="' . $image . '" width="600" height="400" alt="">
	<div class="thumbnail-caption"><code>.thumbnail-expand</code></div>
</div>';
						print_example($text);
					?>
					<?php
					$image = get_image('placeholder_200x100.svg');
					$text = '<div class="thumbnail thumbnail-large">
	<img src="' . $image . '" width="600" height="400" alt="">
	<div class="thumbnail-caption"><code>.thumbnail-large</code></div>
</div>';
						print_example($text);
					?>
					<?php
					$image = get_image('placeholder_200x100.svg');
					$text = '<div class="thumbnail thumbnail-medium">
	<img src="' . $image . '" width="600" height="400" alt="">
	<div class="thumbnail-caption"><code>.thumbnail-medium</code></div>
</div>';
						print_example($text);
					?>
					<?php
					$image = get_image('placeholder_200x100.svg');
					$text = '<div class="thumbnail thumbnail-small">
	<img src="' . $image . '" width="600" height="400" alt="">
	<div class="thumbnail-caption"><code>.thumbnail-small</code></div>
</div>';
						print_example($text);
					?>
					<?php
					$image = get_image('placeholder_200x100.svg');
					$text = '<div class="thumbnail thumbnail-mini">
	<img src="' . $image . '" width="600" height="400" alt="">
	<div class="thumbnail-caption"><code>.thumbnail-mini</code></div>
</div>';
						print_example($text);
					?>
					<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
