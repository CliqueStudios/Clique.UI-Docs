
	<style>
		.nav {
			position: fixed;
			top: 20px;
			right: 20px;
		}

		.test {
			margin-bottom: 200px;
		}
	</style>

	<?php /*
	<ul class="nav nav-side" data-scrollspy-nav="{closest:'li', smoothscroll:true}">
		<li><a href="#animation-repeat">Single</a></li>
		<li><a href="#animation-delay">Group</a></li>
		<li><a href="#animation-fade">Fade</a></li>
		<li><a href="#animation-scale-up">Scale Up</a></li>
		<li><a href="#animation-scale-down">Scale Down</a></li>
		<li><a href="#animation-slide-left">Slide Left</a></li>
		<li><a href="#animation-slide-right">Slide Right</a></li>
		<li><a href="#animation-slide-top">Slide Top</a></li>
		<li><a href="#animation-slide-bottom">Slide Bottom</a></li>
		<li><a href="#animation-different">Different Animations</a></li>
	</ul>
	*/ ?>

	<div class="container container-center">

		<h1>ScrollSpy</h1>

		<h2 id="animation-repeat">Single, Repeat, Delay</h2>

		<div class="row" data-grid-match="{target:'> div > .panel'}" data-row-margin>
			<div class="col-3-12-medium">
				<div class="panel panel-box" data-scrollspy="{cls:'animation-fade'}">
					<p>The element is animated only the first time it appears in the viewport.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box" data-scrollspy="{cls:'animation-slide-right', repeat: true}">
					<p>The element is animated everytime it appears in the viewport.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box" data-scrollspy="{cls:'animation-slide-right', delay:1500, repeat: true}">
					<p>The element is animated everytime it appears in the viewport but delayed by 1.5s.</p>
				</div>
			</div>
		</div>

		<h2 id="animation-delay">Group, Repeat, Delay</h2>

		<div class="row" data-scrollspy="{cls:'animation-fade invisible', target:'> div > .panel', delay:300, repeat: true}">
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<p>The animation of this element is delayed by some milliseconds.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<p>The animation of this element is delayed by some milliseconds.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<p>The animation of this element is delayed by some milliseconds.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<p>The animation of this element is delayed by some milliseconds.</p>
				</div>
			</div>
		</div>

		<h2 class="test">Use nav to the right</h2>

		<h2 id="animation-fade">Group Fade</h2>

		<div class="test grid" data-scrollspy="{cls:'animation-fade invisible', target:'> div > .panel', delay:300, repeat: true}">
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Fade</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Fade</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Fade</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Fade</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
		</div>

		<h2 id="animation-scale-up">Large Group Scale up</h2>

		<div class="test grid" data-scrollspy="{cls:'animation-scale-up invisible', target:'> div > .panel', delay:300, repeat: true}" data-row-margin>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Scale up</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Scale up</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Scale up</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Scale up</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>

			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Scale up</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Scale up</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Scale up</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Scale up</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Scale up</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Scale up</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Scale up</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Scale up</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Scale up</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Scale up</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Scale up</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Scale up</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Scale up</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Scale up</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Scale up</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Scale up</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>

		</div>

		<h2 id="animation-scale-down">Group Scale down</h2>

		<div class="test grid" data-scrollspy="{cls:'animation-scale-down invisible', target:'> div > .panel', delay:300, repeat: true}">
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Scale down</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Scale down</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Scale down</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Scale down</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
		</div>

		<h2 id="animation-slide-left">Group Slide left</h2>

		<div class="test grid" data-scrollspy="{cls:'animation-slide-left invisible', target:'> div > .panel', delay:300, repeat: true}">
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Slide left</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Slide left</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Slide left</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Slide left</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
		</div>

		<h2 id="animation-slide-right">Group Slide right</h2>

		<div class="test grid" data-scrollspy="{cls:'animation-slide-right invisible', target:'> div > .panel', delay:300, repeat: true}">
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Slide right</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Slide right</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Slide right</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Slide right</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
		</div>

		<h2 id="animation-slide-top">Group Slide top</h2>

		<div class="test grid" data-scrollspy="{cls:'animation-slide-top invisible', target:'> div > .panel', delay:300, repeat: true}">
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Slide top</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Slide top</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Slide top</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Slide top</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
		</div>

		<h2 id="animation-slide-bottom">Group Slide bottom</h2>

		<div class="test grid" data-scrollspy="{cls:'animation-slide-bottom invisible', target:'> div > .panel', delay:300, repeat: true}">
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Slide bottom</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Slide bottom</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Slide bottom</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Slide bottom</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
		</div>

		<h2 id="animation-different">Different animations</h2>

		<div class="test grid" data-scrollspy="{cls:'animation-slide-bottom invisible', target:'> div > .panel', delay:300, repeat: true}">
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Slide bottom</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible" data-scrollspy-cls="animation-slide-top invisible">
					<h3 class="panel-title">Slide bottom</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible">
					<h3 class="panel-title">Slide bottom</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-3-12-medium">
				<div class="panel panel-box invisible" data-scrollspy-cls="animation-slide-top invisible">
					<h3 class="panel-title">Slide bottom</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
		</div>

	</div>
