
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('components'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Lightbox</h1>
					<p class="article-lead" itemprop="about">Create a fancy lightbox for images and videos utilizing the <a href="<?php echo get_url('core/modal'); ?>">Modal component</a>.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>To apply this component, add the <code>data-lightbox</code> attribute to an anchor linking to the image you wish to display. If a title attribute exists it will be displayed as a caption for the lightbox.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<a class="button" href="<?php echo 'http:' . get_image('placeholder_800x600_1.jpg'); ?>" data-lightbox title="Title">Open lightbox</a>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;a href="my-image.jpg" data-lightbox title=""&gt;...&lt;/a&gt;</code></pre>
					<hr>
					<h2 id="groups"><a href="#groups" class="link-reset">Groups</a></h2>
					<p>You can link multiple images to the same lightbox and switch between them from within the lightbox, thus creating a gallery. Just add the <code>{group:'my-group'}</code> option to the data attribute of each item using the same name on all items that you want to group.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="row row-4-cols-medium" data-row-margin>
						<div>
							<a href="<?php echo get_image('placeholder_800x600_1.jpg'); ?>" data-lightbox="{group:'group1'}" title="Title">
								<img src="<?php echo get_image('placeholder_800x600_1.jpg'); ?>" width="800" height="600" alt="">
							</a>
						</div>
						<div>
							<a href="<?php echo get_image('placeholder_800x600_2.jpg'); ?>" data-lightbox-type="image" data-lightbox="{group:'group1'}" title="Title">
								<img src="<?php echo get_image('placeholder_800x600_2.jpg'); ?>" width="800" height="600" alt="">
							</a>
						</div>
						<div>
							<a href="<?php echo get_image('placeholder_800x600_3.jpg'); ?>" data-lightbox-type="image" data-lightbox="{group:'group1'}" title="Title">
								<img src="<?php echo get_image('placeholder_800x600_3.jpg'); ?>" width="800" height="600" alt="">
							</a>
						</div>
						<div>
							<a href="<?php echo get_image('placeholder_800x600_4.jpg'); ?>" data-lightbox-type="image" data-lightbox="{group:'group1'}" title="Title">
								<img src="<?php echo get_image('placeholder_800x600_4.jpg'); ?>" width="800" height="600" alt="">
							</a>
						</div>
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;a href="#" data-lightbox="{group:'my-group'}"&gt;...&lt;/a&gt;</code></pre>
					<hr>
					<h2 id="different-content-sources"><a href="#different-content-sources" class="link-reset">Different content sources</a></h2>
					<p>A lightbox is not restricted to images. Other media, like videos, can be displayed inside a lightbox and it will automatically generate the correct output by evaluating your path.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<p>
						<a class="button" href="images/placeholder_800x600_1.jpg" data-lightbox="{group:'group2'}" title="Title">Image</a>
						<a class="button" href="http://www.quirksmode.org/html5/videos/big_buck_bunny.mp4" data-lightbox="{group:'group2'}">MP4</a>
						<a class="button" href="http://vimeo.com/1084537" data-lightbox="{group:'group2'}">Vimeo</a>
						<a class="button" href="https://www.youtube.com/watch?v=YE7VzlLtp-4" data-lightbox="{group:'group2'}">YouTube</a>
					</p>
					<hr>
					<h3 id="content-types"><a href="#different-content-sources" class="link-reset">Content types</a>
					</h3>
					<p>If no filename extension is defined in the image path, just add the <code>data-lightbox-type="image"</code> attribute. This works for videos as well.</p>
					<hr>
					<h2 id="javascript"><a href="#javascript-options" class="link-reset">JavaScript options</a></h2>
					<div class="overflow-container">
						<table class="table-striped text-nowrap">
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
									<td><code>group</code></td>
									<td>string</td>
									<td>false</td>
									<td>Group name to group elements as a gallery to show</td>
								</tr>
								<tr>
									<td><code>duration</code></td>
									<td>integer</td>
									<td>400</td>
									<td>Animation duration between gallery item change</td>
								</tr>
								<tr>
									<td><code>keyboard</code></td>
									<td>boolean</td>
									<td>true</td>
									<td>Allow keyboard navigation</td>
								</tr>
							</tbody>
						</table>
					</div>
					<h3 class="docs-article-subtitle">Init element manually</h3>
					<pre><code>var lightbox = Clique.lightbox(element, {
    /* options */
});</code></pre>
					<h3 class="docs-article-subtitle">Create dynamic lightbox</h3>
					<pre><code>var lightbox = Clique.lightbox.create([
    {
        'source': 'http://url/to/video.mp4',
        'type':'video'
    }, {
        'source': 'http://url/to/image.jpg',
        'type':'image'
    }
]);

lightbox.show();</code></pre>
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
									<td><code>showitem.clique.lightbox</code></td>
									<td>event, data</td>
									<td>On lightbox show</td>
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
