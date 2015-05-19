
		<div class="row" data-row-margin>
			<div class="col-12-12">
				<h1 class="heading-large">Portfolio</h1>
				<p class="text-large">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
			</div>
		</div>
		<div class="row" data-row-margin>
			<div class="col-12-12">
				<ul class="subnav subnav-pill" id="portfolio-controls">
					<li class="active" data-filter="">
						<a href="#">All</a>
					</li>
					<li data-filter="logos">
						<a href="#">Logo</a>
					</li>
					<li data-filter="web">
						<a href="#">Web</a>
					</li>
					<li data-filter="app">
						<a href="#">App</a>
					</li>
				</ul>
				<ul class="row" data-grid="{controls:'#portfolio-controls',gutter:30}">
					<?php
						$i = 0;
						$cats = array('web', 'app', 'logos');
						while($i < 12) {
							$idx = array_rand($cats);
							$cat = $cats[$idx];
							?>
							<li class="col-4-12-medium" data-filter="<?php echo $cat; ?>">
								<div class="thumbnail overlay-hover">
									<figure class="overlay">
										<img width="600" height="400" src="<?php echo get_image('placeholder_200x150_1.svg'); ?>" alt="">
										<figcaption class="overlay-panel overlay-icon overlay-background overlay-fade"></figcaption>
										<a class="position-cover" href="#" data-modal="{target:'#modal-<?php echo ($i + 1); ?>'}"></a>
									</figure>
								</div>
								<div id="modal-<?php echo ($i + 1); ?>" class="modal">
									<div class="modal-dialog modal-dialog-lightbox"><a href="#" class="modal-close close close-alt"></a>
										<img width="600" height="400" src="<?php echo get_image('placeholder_200x150_1.svg'); ?>" alt="">
									</div>
								</div>
							</li>
							<?php
							$i++;
						}
					?>
				</ul>
			</div>
		</div>
