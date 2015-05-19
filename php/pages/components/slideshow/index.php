
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('components'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Slideshow</h1>
					<p class="article-lead" itemprop="about">Create a responsive image or video slideshow with stunning transition effects, fullscreen mode and overlays.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>To create a slideshow, just add the <code>.slideshow</code> class to a <code>&lt;ul&gt;</code> element and place your images inside the list items. In order to load the necessary JavaScript, you also need to add the <code>data-slideshow</code> attribute.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<ul class="slideshow" data-slideshow="{autoplay:true}">
						<li>
							<img src="<?php echo get_image('placeholder_800x400_1.jpg'); ?>" width="800" height="400" alt="">
						</li>
						<li>
							<img src="<?php echo get_image('placeholder_800x400_2.jpg'); ?>" width="800" height="400" alt="">
						</li>
						<li>
							<img src="<?php echo get_image('placeholder_800x400_3.jpg'); ?>" width="800" height="400" alt="">
						</li>
					</ul>
					<p><span class="badge">Note</span> To activate autoplay, just add the <code>{autoplay:true}</code> option to the data attribute.</p>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;ul class="slideshow" data-slideshow="{autoplay:true}"&gt;
    &lt;li&gt;&lt;img src="images/placeholder.svg" width="" height=""&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
					<hr>
					<h2 id="navigations"><a href="#navigations" class="link-reset">Navigations</a></h2>
					<p>To navigate through your slides, just use the <code>data-slideshow-item</code> attribute. To target the slides, you need to set the data attribute of every nav item to the number of the respective slideshow item. The elements with the <code>data-slideshow-item</code> attribute need to be inside the <code>data-slideshow</code> container.</p>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;div data-slideshow&gt;
    &lt;ul class="slideshow"&gt;
        &lt;li&gt;&lt;/li&gt;
        &lt;li&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;li data-slideshow-item="0"&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
    &lt;li data-slideshow-item="1"&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
&lt;/div&gt;</code></pre>
					<p>Setting the attribute to <code>next</code> and <code>previous</code> will switch to the adjacent slides.</p>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;div data-slideshow&gt;
    &lt;ul class="slideshow"&gt;
        &lt;li&gt;&lt;/li&gt;
        &lt;li&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;a href="#" data-slideshow-item="previous"&gt;&lt;/a&gt;
    &lt;a href="#" data-slideshow-item="next"&gt;&lt;/a&gt;
&lt;/div&gt;</code></pre>
					<hr>
					<h3 id="slide-dot-nav"><a href="#slide-dot-nav" class="link-reset">Slidenav and Dotnav</a></h3>
					<p>The flexibility of the Slideshow component enables you to use any of the other <?php echo SITENAME; ?> components to navigate through items. For example the <a href="slide<?php echo get_url('core/nav'); ?>">Slidenav</a> and <a href="dot<?php echo get_url('core/nav'); ?>">Dotnav</a> can be used to style the slideshow navigations as you can see below.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="slidenav-position" data-slideshow>
						<ul class="slideshow">
							<li>
								<img src="<?php echo get_image('placeholder_800x400_1.jpg'); ?>" width="800" height="400" alt="">
							</li>
							<li>
								<img src="<?php echo get_image('placeholder_800x400_2.jpg'); ?>" width="800" height="400" alt="">
							</li>
							<li>
								<img src="<?php echo get_image('placeholder_800x400_3.jpg'); ?>" width="800" height="400" alt="">
							</li>
						</ul>
						<a href="#" class="slidenav slidenav-contrast slidenav-previous" data-slideshow-item="previous" style="color: rgba(255,255,255,0.4)"></a>
						<a href="#" class="slidenav slidenav-contrast slidenav-next" data-slideshow-item="next" style="color: rgba(255,255,255,0.4)"></a>
						<ul class="dotnav dotnav-contrast position-bottom flex-center">
							<li data-slideshow-item="0">
								<a href="#">Item 1</a>
							</li>
							<li data-slideshow-item="1">
								<a href="#">Item 2</a>
							</li>
							<li data-slideshow-item="2">
								<a href="#">Item 3</a>
							</li>
						</ul>
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;div class="slidenav-position" data-slideshow&gt;
    &lt;ul class="slideshow"&gt;
        &lt;li&gt;&lt;/li&gt;
        &lt;li&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;a href="#" class="slidenav slidenav-contrast slidenav-previous" data-slideshow-item="previous"&gt;&lt;/a&gt;
    &lt;a href="#" class="slidenav slidenav-contrast slidenav-next" data-slideshow-item="next"&gt;&lt;/a&gt;
    &lt;ul class="dotnav dotnav-contrast position-bottom text-center"&gt;
        &lt;li data-slideshow-item="0"&gt;&lt;a href="#"&gt;&lt;/a&gt;&lt;/li&gt;
        &lt;li data-slideshow-item="1"&gt;&lt;a href="#"&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code></pre>
					<hr>
					<h2 id="animations"><a href="#animations" class="link-reset">Transitions</a></h2>
					<p>The Slideshow component allows you to add different animations to items when switching between them. All you need to do is add the <code>animation</code> parameter to the data-attribute and define the animation that you want to apply. Check the table below for an overview of the animations provided.</p>
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
									<td><code>fade</code></td>
									<td>The item fades in.</td>
								</tr>
								<tr>
									<td><code>scroll</code></td>
									<td>The items scroll in.</td>
								</tr>
								<tr>
									<td><code>scale</code></td>
									<td>The items scale up on out.</td>
								</tr>
								<tr>
									<td><code>swipe</code></td>
									<td>The items swipe in and out.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<h3 class="docs-article-subtitle">Example</h3>
					<ul class="row row-col-12-12 row-2-cols-medium" data-row-margin>
						<li>
							<h3>Fade</h3>
							<div class="slidenav-position" data-slideshow="{animation: 'fade'}">
								<ul class="slideshow">
									<li>
										<img src="<?php echo get_image('placeholder_800x400_1.jpg'); ?>" width="800" height="400" alt="">
									</li>
									<li>
										<img src="<?php echo get_image('placeholder_800x400_2.jpg'); ?>" width="800" height="400" alt="">
									</li>
									<li>
										<img src="<?php echo get_image('placeholder_800x400_3.jpg'); ?>" width="800" height="400" alt="">
									</li>
								</ul>
								<a href="#" class="slidenav slidenav-contrast slidenav-previous" data-slideshow-item="previous" style="color: rgba(255,255,255,0.4)"></a>
								<a href="#" class="slidenav slidenav-contrast slidenav-next" data-slideshow-item="next" style="color: rgba(255,255,255,0.4)"></a>
							</div>
						</li>
						<li>
							<h3>Scroll</h3>
							<div class="slidenav-position" data-slideshow="{animation: 'scroll'}">
								<ul class="slideshow">
									<li>
										<img src="<?php echo get_image('placeholder_800x400_1.jpg'); ?>" width="800" height="400" alt="">
									</li>
									<li>
										<img src="<?php echo get_image('placeholder_800x400_2.jpg'); ?>" width="800" height="400" alt="">
									</li>
									<li>
										<img src="<?php echo get_image('placeholder_800x400_3.jpg'); ?>" width="800" height="400" alt="">
									</li>
								</ul>
								<a href="#" class="slidenav slidenav-contrast slidenav-previous" data-slideshow-item="previous" style="color: rgba(255,255,255,0.4)"></a>
								<a href="#" class="slidenav slidenav-contrast slidenav-next" data-slideshow-item="next" style="color: rgba(255,255,255,0.4)"></a>
							</div>
						</li>
						<li>
							<h3>Scale</h3>
							<div class="slidenav-position" data-slideshow="{animation: 'scale'}">
								<ul class="slideshow">
									<li>
										<img src="<?php echo get_image('placeholder_800x400_1.jpg'); ?>" width="800" height="400" alt="">
									</li>
									<li>
										<img src="<?php echo get_image('placeholder_800x400_2.jpg'); ?>" width="800" height="400" alt="">
									</li>
									<li>
										<img src="<?php echo get_image('placeholder_800x400_3.jpg'); ?>" width="800" height="400" alt="">
									</li>
								</ul>
								<a href="#" class="slidenav slidenav-contrast slidenav-previous" data-slideshow-item="previous" style="color: rgba(255,255,255,0.4)"></a>
								<a href="#" class="slidenav slidenav-contrast slidenav-next" data-slideshow-item="next" style="color: rgba(255,255,255,0.4)"></a>
							</div>
						</li>
						<li>
							<h3>Swipe</h3>
							<div class="slidenav-position" data-slideshow="{animation: 'swipe'}">
								<ul class="slideshow">
									<li>
										<img src="<?php echo get_image('placeholder_800x400_1.jpg'); ?>" width="800" height="400" alt="">
									</li>
									<li>
										<img src="<?php echo get_image('placeholder_800x400_2.jpg'); ?>" width="800" height="400" alt="">
									</li>
									<li>
										<img src="<?php echo get_image('placeholder_800x400_3.jpg'); ?>" width="800" height="400" alt="">
									</li>
								</ul>
								<a href="#" class="slidenav slidenav-contrast slidenav-previous" data-slideshow-item="previous" style="color: rgba(255,255,255,0.4)"></a>
								<a href="#" class="slidenav slidenav-contrast slidenav-next" data-slideshow-item="next" style="color: rgba(255,255,255,0.4)"></a>
							</div>
						</li>
					</ul>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;ul class="slideshow" data-slideshow="{animation: 'random-fx'}"&gt;...&lt;/ul&gt;</code></pre>
					<hr>
					<h2 id="ken-burns-effect"><a href="#ken-burns-effect" class="link-reset">Ken Burns effect</a></h2>
					<p>The Ken Burns effect can also be applied to slideshow items. Just add the <code>{kenburns:true}</code> option to the data attribute. This effect can also be applied to videos.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="slidenav-position" data-slideshow="{kenburns:true, autoplay:true}">
						<ul class="slideshow">
							<li>
								<img src="<?php echo get_image('placeholder_800x400_1.jpg'); ?>" width="800" height="400" alt="">
							</li>
							<li>
								<img src="<?php echo get_image('placeholder_800x400_2.jpg'); ?>" width="800" height="400" alt="">
							</li>
							<li>
								<img src="<?php echo get_image('placeholder_800x400_3.jpg'); ?>" width="800" height="400" alt="">
							</li>
						</ul>
						<a href="#" class="slidenav slidenav-contrast slidenav-previous" data-slideshow-item="previous" style="color: rgba(255,255,255,0.4)"></a>
						<a href="#" class="slidenav slidenav-contrast slidenav-next" data-slideshow-item="next" style="color: rgba(255,255,255,0.4)"></a>
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;ul class="slideshow" data-slideshow="{kenburns:true}"&gt;...&lt;/ul&gt;</code></pre>
					<hr>
					<h2 id="fullscreen"><a href="#fullscreen" class="link-reset">Fullscreen slideshow</a></h2>
					<p>To create a fullscreen slideshow that stretches to fill the entire viewport, just add the <code>.slideshow-fullscreen</code> class.</p>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;ul class="slideshow slideshow-fullscreen" data-slideshow&gt;...&lt;/ul&gt;</code></pre>
					<hr>
					<h2 id="overlays"><a href="#overlays" class="link-reset">Overlays</a></h2>
					<p>You can also enhance slideshows with different overlays. Just add the <code>.overlay-panel</code> to a <code>&lt;div&gt;</code> element inside the list item. Also add <code>.overlay-background</code> and <code>.overlay-fade</code> to show a background and a transition. To toggle the overlay once a slide becomes active add the <code>.overlay-active</code> to the list container. For more options, check out the <a href="<?php echo get_url('core/overlay'); ?>">Overlay component</a>.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="slidenav-position" data-slideshow>
						<ul class="slideshow overlay-active">
							<li>
								<img src="<?php echo get_image('placeholder_800x400_1.jpg'); ?>" width="800" height="400" alt="">
								<div class="overlay-panel overlay-background overlay-fade flex flex-center flex-middle text-center">
									<div>
										<h3>Overlay</h3>
										<p>Lorem
											<a href="#">ipsum dolor</a> sit amet, consetetur sadipscing elitr,
											<br>sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
										<button class="button-primary">Button</button>
									</div>
								</div>
							</li>
							<li>
								<img src="<?php echo get_image('placeholder_800x400_2.jpg'); ?>" width="800" height="400" alt="">
								<div class="overlay-panel overlay-background overlay-top overlay-slide-top">
									<h3>Overlay Top</h3>
									<p>Lorem
										<a href="#">ipsum dolor</a> sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
									<button class="button-primary">Button</button>
								</div>
							</li>
							<li>
								<img src="<?php echo get_image('placeholder_800x400_3.jpg'); ?>" width="800" height="400" alt="">
								<div class="overlay-panel overlay-background overlay-bottom overlay-slide-bottom">
									<h3>Overlay Bottom</h3>
									<p>Lorem
										<a href="#">ipsum dolor</a> sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
									<button class="button-primary">Button</button>
								</div>
							</li>
							<li>
								<img src="<?php echo get_image('placeholder_800x400_1.jpg'); ?>" width="800" height="400" alt="">
								<div class="overlay-panel overlay-background overlay-left overlay-slide-left col-3-12">
									<h3>Overlay Left</h3>
									<p>Lorem
										<a href="#">ipsum dolor</a> sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
									<button class="button-primary">Button</button>
								</div>
							</li>
							<li>
								<img src="<?php echo get_image('placeholder_800x400_2.jpg'); ?>" width="800" height="400" alt="">
								<div class="overlay-panel overlay-background overlay-right overlay-slide-right col-3-12">
									<h3>Overlay Right</h3>
									<p>Lorem
										<a href="#">ipsum dolor</a> sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
									<button class="button-primary">Button</button>
								</div>
							</li>
						</ul>
						<a href="#" class="slidenav slidenav-contrast slidenav-previous" data-slideshow-item="previous" style="color: rgba(255,255,255,0.4)"></a>
						<a href="#" class="slidenav slidenav-contrast slidenav-next" data-slideshow-item="next" style="color: rgba(255,255,255,0.4)"></a>
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;ul class="slideshow overlay-active" data-slideshow&gt;
    &lt;li&gt;
        &lt;img src="images/placeholder.svg" width="" height=""&gt;
        &lt;div class="overlay-panel overlay-background overlay-fade"&gt;...&lt;/div&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
					<hr>
					<h2 id="video"><a href="#video" class="link-reset">Video</a></h2>
					<p><?php echo SITENAME; ?> allows you to present both video elements and Iframes within a slideshow.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="slidenav-position" data-slideshow>
						<ul class="slideshow">
							<li>
								<video width="600" height="400" autoplay loop muted controls>
									<source src="http://www.quirksmode.org/html5/videos/big_buck_bunny.mp4?test1" type="video/mp4">
									<source src="http://www.quirksmode.org/html5/videos/big_buck_bunny.ogv?test2" type="video/ogg">
								</video>
							</li>
							<li>
								<iframe src="http://player.vimeo.com/video/1084537?title=0&amp;byline=0&amp;autoplay=1&amp;loop=1&amp;setVolume=0" width="500" height="281" frameborder="0" allowfullscreen></iframe>
							</li>
						</ul>
						<a href="#" class="slidenav slidenav-contrast slidenav-previous" data-slideshow-item="previous"></a>
						<a href="#" class="slidenav slidenav-contrast slidenav-next" data-slideshow-item="next"></a>
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;!-- This is a slideshow with a video element --&gt;
&lt;ul class="slideshow"&gt;
    &lt;li&gt;
        &lt;video width="" height="" autoplay loop muted controls&gt;
            &lt;source src="..." type=""&gt;
        &lt;/video&gt;
    &lt;/li&gt;
&lt;/ul&gt;

&lt;!-- This is a slideshow with an Iframe --&gt;
&lt;ul class="slideshow"&gt;
    &lt;li&gt;
        &lt;iframe src="images/placeholder.svg" width="" height="" frameborder="0" allowfullscreen&gt;&lt;/iframe&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
					<hr>
					<h2 id="content"><a href="#content" class="link-reset">Content</a></h2>
					<p>You can basically insert any content, like text or an entire grid as slideshow items.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="slidenav-position" data-slideshow>
						<ul class="slideshow text-center">
							<li>
								<div class="panel panel-box">
									<div class="row">
										<div class="col-4-12">
											<img src="<?php echo get_image('placeholder_200x200.svg'); ?>" width="200" height="200" alt="">
										</div>
										<div class="col-8-12">
											<h3 class="panel-title">Headline 1</h3>
											<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
											<button>Read more</button>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="panel panel-box panel-box-primary">
									<div class="row">
										<div class="col-8-12">
											<h3 class="panel-title">Headline 2</h3>
											<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
											<button>Read more</button>
										</div>
										<div class="col-4-12">
											<img src="<?php echo get_image('placeholder_200x200.svg'); ?>" width="200" height="200" alt="">
										</div>
									</div>
								</div>
							</li>
						</ul>
						<a href="#" class="slidenav slidenav-contrast slidenav-previous" data-slideshow-item="previous"></a>
						<a href="#" class="slidenav slidenav-contrast slidenav-next" data-slideshow-item="next"></a>
					</div>
					<hr>
					<h2 id="javascript"><a href="#javascript-options" class="link-reset">JavaScript Options</a></h2>
					<div class="overflow-container">
						<table class="table-striped text-nowrap">
							<thead>
								<tr>
									<th>Option</th>
									<th>Default</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>animation</code></td>
									<td>'fade'</td>
									<td>Defines the preferred transition between items.</td>
								</tr>
								<tr>
									<td><code>duration</code></td>
									<td>500</td>
									<td>Defines the transition duration.</td>
								</tr>
								<tr>
									<td><code>height</code></td>
									<td>'auto'</td>
									<td>Defines the slideshow height.</td>
								</tr>
								<tr>
									<td><code>start</code></td>
									<td>0</td>
									<td>Defines the first slideshow item to be displayed.</td>
								</tr>
								<tr>
									<td><code>autoplay</code></td>
									<td>false</td>
									<td>Defines whether or not the slideshow items should switch automatically.</td>
								</tr>
								<tr>
									<td><code>pauseOnHover</code></td>
									<td>true</td>
									<td>Pause autoplay when hovering a slideshow.</td>
								</tr>
								<tr>
									<td><code>autoplayInterval</code></td>
									<td>7000</td>
									<td>Defines the timespan between switching slideshow items.</td>
								</tr>
								<tr>
									<td><code>videoautoplay</code></td>
									<td>true</td>
									<td>Defines whether or not a video starts automatically.</td>
								</tr>
								<tr>
									<td><code>videomute</code></td>
									<td>true</td>
									<td>Defines whether or not a video is muted.</td>
								</tr>
								<tr>
									<td><code>kenburns</code></td>
									<td>false</td>
									<td>Defines whether or not the Ken Burns effect is active.</td>
								</tr>
								<tr>
									<td><code>slices</code></td>
									<td>15</td>
									<td>Defines the number of slices, if a "Slice" transition is set.</td>
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
