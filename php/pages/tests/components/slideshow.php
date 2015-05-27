
<div class="container container-center">
	<h1>Slideshow</h1>
	<h2>Controls</h2>
	<div class="row" data-margin>
		<div class="col-4-12-medium">
			<ul class="slideshow" data-slideshow="{autoplay:true}">
				<li><img src="http://unsplash.it/600/200" width="600" height="200" alt=""></li>
				<li><img src="http://unsplash.it/600/300" width="600" height="300" alt=""></li>
				<li><img src="http://unsplash.it/600/400" width="600" height="400" alt=""></li>
			</ul>
		</div>
		<div class="col-4-12-medium">
			<div data-slideshow>
				<div class="slidenav-position margin">
					<ul class="slideshow">
						<li><img src="http://unsplash.it/600/200" alt=""></li>
						<li><img src="http://unsplash.it/600/300" alt=""></li>
						<li><img src="http://unsplash.it/600/400" alt=""></li>
					</ul>
					<a href="#" class="slidenav slidenav-contrast slidenav-previous" data-slideshow-item="previous"></a>
					<a href="#" class="slidenav slidenav-contrast slidenav-next" data-slideshow-item="next"></a>
				</div>
				<ul class="dotnav flex-center">
					<li data-slideshow-item="0"><a href="#">Item 1</a></li>
					<li data-slideshow-item="1"><a href="#">Item 2</a></li>
					<li data-slideshow-item="2"><a href="#">Item 3</a></li>
				</ul>
			</div>
		</div>
		<div class="col-4-12-medium">
			<div data-slideshow>
				<ul class="slideshow">
					<li><img src="http://unsplash.it/600/400" alt=""></li>
					<li><img src="http://unsplash.it/600/401" alt=""></li>
					<li><img src="http://unsplash.it/600/402" alt=""></li>
				</ul>
				<ul class="row row-3-col">
					<li><a data-slideshow-item="0"><img src="http://unsplash.it/600/400"></a></li>
					<li><a data-slideshow-item="1"><img src="http://unsplash.it/600/401"></a></li>
					<li><a data-slideshow-item="2"><img src="http://unsplash.it/600/402"></a></li>
				</ul>
			</div>
		</div>
	</div>
	<h2>Content</h2>
	<div class="row">
		<div class="col-4-12-medium">
			<div class="slidenav-position" data-slideshow>
				<ul class="slideshow">
					<li><div><img src="http://placehold.it/600x200&amp;text=nocover"></div></li>
					<li><img src="http://placehold.it/600x300&amp;text=cover"></li>
					<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</li>
				</ul>
				<a href="#" class="slidenav slidenav-contrast slidenav-previous" data-slideshow-item="previous"></a>
				<a href="#" class="slidenav slidenav-contrast slidenav-next" data-slideshow-item="next"></a>
			</div>
		</div>
		<div class="col-4-12-medium">
			<div class="slidenav-position" data-slideshow>
				<ul class="slideshow">
					<li>
						<div class="text-center">
							<h1>Headline</h1>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
							<button class="button">Read more</button>
						</div>
					</li>
					<li>
						<div class="text-center">
							<h1>Headline</h1>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
							<button class="button">Read more</button>
						</div>
					</li>
					<li><div><img src="http://placehold.it/600x200&amp;text=nocover"></div></li>
				</ul>
				<a href="#" class="slidenav slidenav-contrast slidenav-previous" data-slideshow-item="previous"></a>
				<a href="#" class="slidenav slidenav-contrast slidenav-next" data-slideshow-item="next"></a>
			</div>
		</div>
		<div class="col-4-12-medium">
			<div data-slideshow>
				<div class="slidenav-position">
					<ul class="slideshow">
						<li>
							<video width="600" height="400" autoplay loop muted controls>
								<source src="http://www.quirksmode.org/html5/videos/big_buck_bunny.mp4?test1" type="video/mp4">
								<source src="http://www.quirksmode.org/html5/videos/big_buck_bunny.ogv?test1" type="video/ogg">
							</video>
						</li>
						<li><iframe src="http://player.vimeo.com/video/1084537?autoplay=1&amp;loop=1&amp;badge=0&amp;byline=0&amp;portrait=0&amp;title=0" width="500" height="281" frameborder="0" allowfullscreen></iframe></li>
						<li><iframe src="http://www.youtube.com/embed/YE7VzlLtp-4?autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;loop=1&amp;modestbranding=1&amp;wmode=transparent" width="560" height="315" frameborder="0" allowfullscreen></iframe></li>
					</ul>
					<a href="#" class="slidenav slidenav-contrast slidenav-previous" data-slideshow-item="previous"></a>
					<a href="#" class="slidenav slidenav-contrast slidenav-next" data-slideshow-item="next"></a>
				</div>
			</div>
		</div>
	</div>
	<h2>Overlays</h2>
	<div class="margin" data-slideshow>
		<div class="slidenav-position">
			<ul class="slideshow overlay-active">
				<li>
					<img src="http://unsplash.it/1000/500" alt="">
					<div class="overlay-panel overlay-background overlay-fade flex flex-center flex-middle text-center">
						<div>
							<h3>Overlay</h3>
							<p>Lorem <a href="#">ipsum dolor</a> sit amet, consetetur sadipscing elitr, <br>sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
							<button class="button button-primary">Button</button>
						</div>
					</div>
				</li>
				<li>
					<img src="http://unsplash.it/1000/502" alt="">
					<div class="overlay-panel overlay-top overlay-background overlay-slide-top">
						<h3>Overlay Top</h3>
						<p>Lorem <a href="#">ipsum dolor</a> sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
						<button class="button button-primary">Button</button>
					</div>
				</li>
				<li>
					<img src="http://unsplash.it/1000/503" alt="">
					<div class="overlay-panel overlay-bottom overlay-background overlay-slide-bottom">
						<h3>Overlay Bottom</h3>
						<p>Lorem <a href="#">ipsum dolor</a> sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
						<button class="button button-primary">Button</button>
					</div>
				</li>
				<li>
					<img src="http://unsplash.it/1000/504" alt="">
					<div class="overlay-panel overlay-left overlay-background overlay-slide-left col-3-12">
						<h3>Overlay Left</h3>
						<p>Lorem <a href="#">ipsum dolor</a> sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
						<button class="button button-primary">Button</button>
					</div>
				</li>
				<li>
					<img src="http://unsplash.it/1000/505" alt="">
					<div class="overlay-panel overlay-right overlay-background overlay-slide-right col-3-12">
						<h3>Overlay Right</h3>
						<p>Lorem <a href="#">ipsum dolor</a> sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
						<button class="button button-primary">Button</button>
					</div>
				</li>
			</ul>
			<a href="#" class="slidenav slidenav-contrast slidenav-previous" data-slideshow-item="previous"></a>
			<a href="#" class="slidenav slidenav-contrast slidenav-next" data-slideshow-item="next"></a>
		</div>
	</div>
	<h2>Animations</h2>
	<div class="row" data-margin>
		<div class="col-4-12-medium">
			<h3>None</h3>
			<div data-slideshow="{animation: 'none'}">
				<div class="slidenav-position">
					<ul class="slideshow">
						<li><img src="http://unsplash.it/600/200" alt=""></li>
						<li><img src="http://unsplash.it/600/300" alt=""></li>
						<li><img src="http://unsplash.it/600/400" alt=""></li>
					</ul>
					<a href="#" class="slidenav slidenav-contrast slidenav-previous" data-slideshow-item="previous"></a>
					<a href="#" class="slidenav slidenav-contrast slidenav-next" data-slideshow-item="next"></a>
					<ul class="dotnav dotnav-contrast position-bottom flex-center">
						<li data-slideshow-item="0"><a href="#">Item 1</a></li>
						<li data-slideshow-item="1"><a href="#">Item 2</a></li>
						<li data-slideshow-item="2"><a href="#">Item 3</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-4-12-medium">
			<h3>Fade and Kenburns</h3>
			<div data-slideshow="{kenburns:true,autoplay:true}">
				<div class="slidenav-position">
					<ul class="slideshow">
						<li><img src="http://unsplash.it/600/200" alt=""></li>
						<li><img src="http://unsplash.it/600/300" alt=""></li>
						<li><img src="http://unsplash.it/600/400" alt=""></li>
					</ul>
					<a href="#" class="slidenav slidenav-contrast slidenav-previous" data-slideshow-item="previous"></a>
					<a href="#" class="slidenav slidenav-contrast slidenav-next" data-slideshow-item="next"></a>
					<ul class="dotnav dotnav-contrast position-bottom flex-center">
						<li data-slideshow-item="0"><a href="#">Item 1</a></li>
						<li data-slideshow-item="1"><a href="#">Item 2</a></li>
						<li data-slideshow-item="2"><a href="#">Item 3</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-4-12-medium">
			<h3>Scroll</h3>
			<div data-slideshow="{animation: 'scroll'}">
				<div class="slidenav-position">
					<ul class="slideshow">
						<li><img src="http://unsplash.it/600/200" alt=""></li>
						<li><img src="http://unsplash.it/600/300" alt=""></li>
						<li><img src="http://unsplash.it/600/400" alt=""></li>
					</ul>
					<a href="#" class="slidenav slidenav-contrast slidenav-previous" data-slideshow-item="previous"></a>
					<a href="#" class="slidenav slidenav-contrast slidenav-next" data-slideshow-item="next"></a>
					<ul class="dotnav dotnav-contrast position-bottom flex-center">
						<li data-slideshow-item="0"><a href="#">Item 1</a></li>
						<li data-slideshow-item="1"><a href="#">Item 2</a></li>
						<li data-slideshow-item="2"><a href="#">Item 3</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-4-12-medium">
			<h3>Scale</h3>
			<div data-slideshow="{animation: 'scale'}">
				<div class="slidenav-position">
					<ul class="slideshow">
						<li><img src="http://unsplash.it/600/200" alt=""></li>
						<li><img src="http://unsplash.it/600/300" alt=""></li>
						<li><img src="http://unsplash.it/600/400" alt=""></li>
					</ul>
					<a href="#" class="slidenav slidenav-contrast slidenav-previous" data-slideshow-item="previous"></a>
					<a href="#" class="slidenav slidenav-contrast slidenav-next" data-slideshow-item="next"></a>
					<ul class="dotnav dotnav-contrast position-bottom flex-center">
						<li data-slideshow-item="0"><a href="#">Item 1</a></li>
						<li data-slideshow-item="1"><a href="#">Item 2</a></li>
						<li data-slideshow-item="2"><a href="#">Item 3</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-4-12-medium">
			<h3>Swipe</h3>
			<div data-slideshow="{animation: 'swipe'}">
				<div class="slidenav-position">
					<ul class="slideshow">
						<li><img src="http://unsplash.it/600/200" alt=""></li>
						<li><img src="http://unsplash.it/600/300" alt=""></li>
						<li><img src="http://unsplash.it/600/400" alt=""></li>
					</ul>
					<a href="#" class="slidenav slidenav-contrast slidenav-previous" data-slideshow-item="previous"></a>
					<a href="#" class="slidenav slidenav-contrast slidenav-next" data-slideshow-item="next"></a>
					<ul class="dotnav dotnav-contrast position-bottom flex-center">
						<li data-slideshow-item="0"><a href="#">Item 1</a></li>
						<li data-slideshow-item="1"><a href="#">Item 2</a></li>
						<li data-slideshow-item="2"><a href="#">Item 3</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-4-12-medium">
			<h3>Slice Down</h3>
			<div data-slideshow="{animation: 'slice-down'}">
				<div class="slidenav-position">
					<ul class="slideshow">
						<li><img src="http://unsplash.it/600/200" alt=""></li>
						<li><img src="http://unsplash.it/600/300" alt=""></li>
						<li><img src="http://unsplash.it/600/400" alt=""></li>
					</ul>
					<a href="#" class="slidenav slidenav-contrast slidenav-previous" data-slideshow-item="previous"></a>
					<a href="#" class="slidenav slidenav-contrast slidenav-next" data-slideshow-item="next"></a>
					<ul class="dotnav dotnav-contrast position-bottom flex-center">
						<li data-slideshow-item="0"><a href="#">Item 1</a></li>
						<li data-slideshow-item="1"><a href="#">Item 2</a></li>
						<li data-slideshow-item="2"><a href="#">Item 3</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-4-12-medium">
			<h3>Slice Up</h3>
			<div data-slideshow="{animation: 'slice-up'}">
				<div class="slidenav-position">
					<ul class="slideshow">
						<li><img src="http://unsplash.it/600/200" alt=""></li>
						<li><img src="http://unsplash.it/600/300" alt=""></li>
						<li><img src="http://unsplash.it/600/400" alt=""></li>
					</ul>
					<a href="#" class="slidenav slidenav-contrast slidenav-previous" data-slideshow-item="previous"></a>
					<a href="#" class="slidenav slidenav-contrast slidenav-next" data-slideshow-item="next"></a>
					<ul class="dotnav dotnav-contrast position-bottom flex-center">
						<li data-slideshow-item="0"><a href="#">Item 1</a></li>
						<li data-slideshow-item="1"><a href="#">Item 2</a></li>
						<li data-slideshow-item="2"><a href="#">Item 3</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-4-12-medium">
			<h3>Slice Up Down</h3>
			<div data-slideshow="{animation: 'slice-up-down'}">
				<div class="slidenav-position">
					<ul class="slideshow">
						<li><img src="http://unsplash.it/600/200" alt=""></li>
						<li><img src="http://unsplash.it/600/300" alt=""></li>
						<li><img src="http://unsplash.it/600/400" alt=""></li>
					</ul>
					<a href="#" class="slidenav slidenav-contrast slidenav-previous" data-slideshow-item="previous"></a>
					<a href="#" class="slidenav slidenav-contrast slidenav-next" data-slideshow-item="next"></a>
					<ul class="dotnav dotnav-contrast position-bottom flex-center">
						<li data-slideshow-item="0"><a href="#">Item 1</a></li>
						<li data-slideshow-item="1"><a href="#">Item 2</a></li>
						<li data-slideshow-item="2"><a href="#">Item 3</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-4-12-medium">
			<h3>Fold</h3>
			<div data-slideshow="{animation: 'fold'}">
				<div class="slidenav-position">
					<ul class="slideshow">
						<li><img src="http://unsplash.it/600/200" alt=""></li>
						<li><img src="http://unsplash.it/600/300" alt=""></li>
						<li><img src="http://unsplash.it/600/400" alt=""></li>
					</ul>
					<a href="#" class="slidenav slidenav-contrast slidenav-previous" data-slideshow-item="previous"></a>
					<a href="#" class="slidenav slidenav-contrast slidenav-next" data-slideshow-item="next"></a>
					<ul class="dotnav dotnav-contrast position-bottom flex-center">
						<li data-slideshow-item="0"><a href="#">Item 1</a></li>
						<li data-slideshow-item="1"><a href="#">Item 2</a></li>
						<li data-slideshow-item="2"><a href="#">Item 3</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-4-12-medium">
			<h3>Puzzle</h3>
			<div data-slideshow="{animation: 'puzzle'}">
				<div class="slidenav-position">
					<ul class="slideshow">
						<li><img src="http://unsplash.it/600/200" alt=""></li>
						<li><img src="http://unsplash.it/600/300" alt=""></li>
						<li><img src="http://unsplash.it/600/400" alt=""></li>
					</ul>
					<a href="#" class="slidenav slidenav-contrast slidenav-previous" data-slideshow-item="previous"></a>
					<a href="#" class="slidenav slidenav-contrast slidenav-next" data-slideshow-item="next"></a>
					<ul class="dotnav dotnav-contrast position-bottom flex-center">
						<li data-slideshow-item="0"><a href="#">Item 1</a></li>
						<li data-slideshow-item="1"><a href="#">Item 2</a></li>
						<li data-slideshow-item="2"><a href="#">Item 3</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-4-12-medium">
			<h3>Boxes</h3>
			<div data-slideshow="{animation: 'boxes'}">
				<div class="slidenav-position">
					<ul class="slideshow">
						<li><img src="http://unsplash.it/600/200" alt=""></li>
						<li><img src="http://unsplash.it/600/300" alt=""></li>
						<li><img src="http://unsplash.it/600/400" alt=""></li>
					</ul>
					<a href="#" class="slidenav slidenav-contrast slidenav-previous" data-slideshow-item="previous"></a>
					<a href="#" class="slidenav slidenav-contrast slidenav-next" data-slideshow-item="next"></a>
					<ul class="dotnav dotnav-contrast position-bottom flex-center">
						<li data-slideshow-item="0"><a href="#">Item 1</a></li>
						<li data-slideshow-item="1"><a href="#">Item 2</a></li>
						<li data-slideshow-item="2"><a href="#">Item 3</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-4-12-medium">
			<h3>Boxes-reverse</h3>
			<div data-slideshow="{animation: 'boxes-reverse'}">
				<div class="slidenav-position">
					<ul class="slideshow">
						<li><img src="http://unsplash.it/600/200" alt=""></li>
						<li><img src="http://unsplash.it/600/300" alt=""></li>
						<li><img src="http://unsplash.it/600/400" alt=""></li>
					</ul>
					<a href="#" class="slidenav slidenav-contrast slidenav-previous" data-slideshow-item="previous"></a>
					<a href="#" class="slidenav slidenav-contrast slidenav-next" data-slideshow-item="next"></a>
					<ul class="dotnav dotnav-contrast position-bottom flex-center">
						<li data-slideshow-item="0"><a href="#">Item 1</a></li>
						<li data-slideshow-item="1"><a href="#">Item 2</a></li>
						<li data-slideshow-item="2"><a href="#">Item 3</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<h2>Fullscreen</h2>
</div>
<div data-slideshow="{kenburns:true}">
	<div class="slidenav-position">
		<ul class="slideshow slideshow-fullscreen">
			<li><img src="http://unsplash.it/1600/1200" alt=""></li>
			<li><img src="http://unsplash.it/1600/1300" alt=""></li>
			<li><img src="http://unsplash.it/1600/1400" alt=""></li>
		</ul>
		<a href="#" class="slidenav slidenav-contrast slidenav-previous" data-slideshow-item="previous"></a>
		<a href="#" class="slidenav slidenav-contrast slidenav-next" data-slideshow-item="next"></a>
		<ul class="dotnav dotnav-contrast position-bottom flex-center">
			<li data-slideshow-item="0"><a href="#">Item 1</a></li>
			<li data-slideshow-item="1"><a href="#">Item 2</a></li>
			<li data-slideshow-item="2"><a href="#">Item 3</a></li>
		</ul>
	</div>
</div>
<div data-slideshow="{animation:'random-fx'}">
	<div class="slidenav-position">
		<ul class="slideshow slideshow-fullscreen">
			<li><img src="http://unsplash.it/1600/1200" alt=""></li>
			<li><img src="http://unsplash.it/1600/1300" alt=""></li>
			<li><img src="http://unsplash.it/1600/1400" alt=""></li>
		</ul>
		<a href="#" class="slidenav slidenav-contrast slidenav-previous" data-slideshow-item="previous"></a>
		<a href="#" class="slidenav slidenav-contrast slidenav-next" data-slideshow-item="next"></a>
		<ul class="dotnav dotnav-contrast position-bottom flex-center">
			<li data-slideshow-item="0"><a href="#">Item 1</a></li>
			<li data-slideshow-item="1"><a href="#">Item 2</a></li>
			<li data-slideshow-item="2"><a href="#">Item 3</a></li>
		</ul>
	</div>
</div>
