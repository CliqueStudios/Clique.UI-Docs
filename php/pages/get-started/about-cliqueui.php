
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>

			<?php get_sidebar('get-started'); ?>

			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">About <?php echo SITENAME; ?></h1>
					<p class="article-lead" itemprop="about">What <?php echo SITENAME; ?> is, and why we made it.</p>
					<hr>
					<h2 id="what-is-cliqueui"><a href="#what-is-cliqueui" class="link-reset">What <?php echo SITENAME; ?> is &amp; isn't</a></h2>
					<p><?php echo SITENAME; ?> is a slim, modular front-end framework designed to help user-interface developers create sites &amp; web applications quickly, easily, and without hassle. It melds the better parts of existing frameworks while eliminating the dependence on older browsers, the fluff of gregarious style and JavaScript practices, and implementation of antiquated front-end design patterns. In short, it's a fast, slimmed down framework upon which beautiful websites are made.</p>
					<p>By contrast (and unlike other frameworks), <?php echo SITENAME; ?> does not claim to be the end-all-be-all of front-end frameworks. It is simply a highly modular base upon which sites &amp; web apps can be built upon. It should be picked apart and used in pieces - that's why we wrote as modular as we did.</p>
					<hr>
					<h2 id="why-we-created-cliqueui"><a href="#why-we-created-cliqueui" class="link-reset">Why we created <?php echo SITENAME; ?></a></h2>
					<p>There are plenty of existing frameworks already out there, and these can get the job done for other design agencies. But at <a href="http://cliquestudios.com" target="_blank">Clique Studios</a> we have some of the best designers and developers in the world, and are expected to meet our clients' needs with precision, on time, and at or under budget. Having to hunt and peck around the web for bits and pieces of each framework that we needed (and elimate those we didn't), reading documentation on individual GitHub repos, and then trying to bring together all these disparate pieces simply wasn't cutting it.</p>
					<p>Essentially, <?php echo SITENAME; ?> was created to fill the gap left by bloated open-source projects and leave just a slim easy-to-use base to meet our clients' needs.</p>
					<hr>
					<h2 id="browser-support"><a href="#browser-support" class="link-reset">Supported Browsers &amp; Platforms</a></h2>
					<h3 class="margin-large-top margin-large-bottom">Desktop</h3>
					<div class="row">
						<div class="col-12-12 col-2-10-large">
							<div class="text-center">
								<img src="<?php echo get_image('chrome.svg'); ?>" alt="">
							</div>
							<table>
								<tr>
									<td colspan="2" class="text-center">
										<strong>Chrome</strong>
									</td>
								</tr>
								<tr>
									<th>Version</th>
									<td>21+</td>
								</tr>
							</table>
						</div>
						<div class="col-12-12 col-2-10-large">
							<div class="text-center">
								<img src="<?php echo get_image('firefox.svg'); ?>" alt="">
							</div>
							<table>
								<tr>
									<td colspan="2" class="text-center">
										<strong>FireFox</strong>
									</td>
								</tr>
								<tr>
									<th>Version</th>
									<td>20+</td>
								</tr>
							</table>
						</div>
						<div class="col-12-12 col-2-10-large">
							<div class="text-center">
								<img src="<?php echo get_image('ie.svg'); ?>" alt="">
							</div>
							<table>
								<tr>
									<td colspan="2" class="text-center">
										<strong>Internet Explorer</strong>
									</td>
								</tr>
								<tr>
									<th>Version</th>
									<td>9+</td>
								</tr>
							</table>
						</div>
						<div class="col-12-12 col-2-10-large">
							<div class="text-center">
								<img src="<?php echo get_image('safari.svg'); ?>" alt="">
							</div>
							<table>
								<tr>
									<td colspan="2" class="text-center">
										<strong>Safari</strong>
									</td>
								</tr>
								<tr>
									<th>Version</th>
									<td>3.1+</td>
								</tr>
							</table>
						</div>
						<div class="col-12-12 col-2-10-large">
							<div class="text-center">
								<img src="<?php echo get_image('opera.svg'); ?>" alt="">
							</div>
							<table>
								<tr>
									<td colspan="2" class="text-center">
										<strong>Opera</strong>
									</td>
								</tr>
								<tr>
									<th>Version</th>
									<td>12.12+</td>
								</tr>
							</table>
						</div>
					</div>
					<h3 class="margin-large-top margin-large-bottom">Mobile/Tablet</h3>
					<div class="row">
						<div class="col-4-12">
							<div class="text-center">
								<img src="<?php echo get_image('apple.svg'); ?>" alt="">
							</div>
							<table>
								<tr>
									<td colspan="2" class="text-center">
										<strong>iOS</strong>
									</td>
								</tr>
								<tr>
									<th>Version</th>
									<td>7+</td>
								</tr>
							</table>
						</div>
						<div class="col-4-12">
							<div class="text-center">
								<img src="<?php echo get_image('android.svg'); ?>" alt="">
							</div>
							<table>
								<tr>
									<td colspan="2" class="text-center">
										<strong>Android</strong>
									</td>
								</tr>
								<tr>
									<th>Version</th>
									<td>4.4+</td>
								</tr>
							</table>
						</div>
						<div class="col-4-12">
							<div class="text-center">
								<img src="<?php echo get_image('microsoft.svg'); ?>" alt="">
							</div>
							<table>
								<tr>
									<td colspan="2" class="text-center">
										<strong>Windows Phone</strong>
									</td>
								</tr>
								<tr>
									<th>Version</th>
									<td>8.1+</td>
								</tr>
							</table>
						</div>
					</div>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
