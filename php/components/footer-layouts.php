
	</div>
	<div id="offcanvas" class="offcanvas">
		<div class="offcanvas-bar">
			<ul class="nav nav-offcanvas">
				<?php
					$links = array(
						(object)array(
							'title' => 'Frontpage',
							'slug' => 'get-started/layouts/frontpage',
						),
						(object)array(
							'title' => 'Portfolio',
							'slug' => 'get-started/layouts/portfolio',
						),
						(object)array(
							'title' => 'Blog',
							'slug' => 'get-started/layouts/blog',
						),
						(object)array(
							'title' => 'Documentation',
							'slug' => 'get-started/layouts/documentation',
						),
						(object)array(
							'title' => 'Contact',
							'slug' => 'get-started/layouts/contact',
						),
						(object)array(
							'title' => 'Login',
							'slug' => 'get-started/layouts/login',
						),
					);
					foreach($links as $page) {
						echo '<li><a href="' . get_url($page->slug) . '">' . $page->title . '</a></li>' . "\n";
					}
				?>
			</ul>
		</div>
	</div>
	<?php get_docs_js(); ?>
</body>
</html>
