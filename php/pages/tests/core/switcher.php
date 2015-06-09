
<div class="container container-center">
	<h1>Switcher</h1>
	<h2>Fully Featured</h2>
	<div class="margin grid" data-row-margin>
		<div class="col-6-12-medium">
			<ul class="tab" data-tab="{connect:'#content-1, #content-2', animation:'fade'}">
				<li class="active"><a href="#">Tab</a></li>
				<li><a href="#">Tab</a></li>
				<li><a href="#">Tab</a></li>
				<li class="disabled"><a href="#">Disabled</a></li>
			</ul>
			<ul id="content-1" class="switcher margin">
				<li>Hello! <a href="#" data-switcher-item="2">Switch to tab 3</a></li>
				<li>Hello again! <a href="#" data-switcher-item="next">Next tab</a></li>
				<li>World! <a href="#" data-switcher-item="previous">Previous tab</a></li>
				<li>You will never see me!</li>
			</ul>
			<ul id="content-2" class="switcher margin">
				<li>Hello! The second item.</li>
				<li>Hello again! The second item.</li>
				<li>World! The second item.</li>
				<li>You will never see me!</li>
			</ul>
		</div>
	</div>
	<h2>Tab</h2>
	<div class="margin grid" data-row-margin>
		<div class="col-6-12-medium">
			<ul class="tab" data-tab="{connect:'#tab-content'}">
				<li class="active"><a href="#">Tab</a></li>
				<li><a href="#">Tab</a></li>
				<li><a href="#">Tab</a></li>
				<li class="disabled"><a href="#">Disabled</a></li>
			</ul>
			<ul id="tab-content" class="switcher margin">
				<li>Hello! <a href="#" data-switcher-item="2">Switch to tab 3</a></li>
				<li>Hello again!</li>
				<li>World! <a href="#" data-switcher-item="0">Switch to tab 1</a></li>
				<li>You will never see me!</li>
			</ul>
		</div>
		<div class="col-6-12-medium">
			<ul id="tab-bottom-content" class="switcher margin">
				<li>Hello!</li>
				<li>Hello again!</li>
				<li>World!</li>
				<li>You will never see me!</li>
			</ul>
			<ul class="tab tab-bottom" data-tab="{connect:'#tab-bottom-content'}">
				<li class="active"><a href="#">Tab</a></li>
				<li><a href="#">Tab</a></li>
				<li><a href="#">Tab</a></li>
				<li class="disabled"><a href="#">Disabled</a></li>
			</ul>
		</div>
	</div>
	<div class="margin grid" data-row-margin>
		<div class="col-6-12-medium">
			<div class="row" data-row-margin>
				<div class="col-6-12-medium">
					<ul class="tab tab-left" data-tab="{connect:'#tab-left-content'}">
						<li class="active"><a href="#">Tab</a></li>
						<li><a href="#">Tab</a></li>
						<li><a href="#">Tab</a></li>
						<li class="disabled"><a href="#">Disabled</a></li>
					</ul>
				</div>
				<div class="col-6-12-medium">
					<ul id="tab-left-content" class="switcher">
						<li>Hello!</li>
						<li>Hello again!</li>
						<li>World!</li>
						<li>You will never see me!</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-6-12-medium">
			<div class="row" data-row-margin>
				<div class="col-6-12-medium push-1-2">
					<ul class="tab tab-right" data-tab="{connect:'#tab-right-content'}">
						<li class="active"><a href="#">Tab</a></li>
						<li><a href="#">Tab</a></li>
						<li><a href="#">Tab</a></li>
						<li class="disabled"><a href="#">Disabled</a></li>
					</ul>
				</div>
				<div class="col-6-12-medium pull-1-2">
					<ul id="tab-right-content" class="switcher">
						<li>Hello!</li>
						<li>Hello again!</li>
						<li>World!</li>
						<li>You will never see me!</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<h2>Button</h2>
	<div class="margin grid" data-row-margin>
		<div class="col-6-12-medium">
			<div data-switcher="{connect:'#button-content'}">
				<a class="button" href="#">Link</a>
				<button class="button">Button</button>
				<button class="button">Button</button>
				<button class="button" disabled>Disabled</button>
			</div>
			<ul id="button-content" class="switcher margin">
				<li class="active">Hello!</li>
				<li>Hello again!</li>
				<li>World!</li>
				<li>You will never see me!</li>
			</ul>
		</div>
		<div class="col-6-12-medium">
			<div class="button-group" data-switcher="{connect:'#button-group-content'}">
				<a class="button" href="#">Link</a>
				<button class="button">Button</button>
				<button class="button">Button</button>
				<button class="button" disabled>Disabled</button>
			</div>
			<ul id="button-group-content" class="switcher margin">
				<li class="active">Hello!</li>
				<li>Hello again!</li>
				<li>World!</li>
				<li>You will never see me!</li>
			</ul>
		</div>
	</div>
	<h2>Subnav</h2>
	<div class="margin grid" data-row-margin>
		<div class="col-6-12-medium">
			<ul class="subnav" data-switcher="{connect:'#subnav-content'}">
				<li class="active"><a href="#">Item</a></li>
				<li><a href="#">Item</a></li>
				<li><a href="#">Item</a></li>
			</ul>
			<ul id="subnav-content" class="switcher">
				<li>Hello!</li>
				<li>Hello again!</li>
				<li>World!</li>
			</ul>
		</div>
		<div class="col-6-12-medium">
			<ul class="subnav subnav-pill" data-switcher="{connect:'#subnav-pill-content'}">
				<li class="active"><a href="#">Item</a></li>
				<li><a href="#">Item</a></li>
				<li><a href="#">Item</a></li>
			</ul>
			<ul id="subnav-pill-content" class="switcher">
				<li>Hello!</li>
				<li>Hello again!</li>
				<li>World!</li>
			</ul>
		</div>
	</div>
	<h2>Nav</h2>
	<div class="row margin" data-row-margin>
		<div class="col-3-12-medium">
			<ul class="nav nav-side" data-switcher="{connect:'#nav-content', toggle:' > *:not(.nav-header)'}">
				<li class="active"><a href="">Item</a></li>
				<li><a href="">Item</a></li>
				<li class="nav-header">Header</li>
				<li><a href="">Item</a></li>
			</ul>
		</div>
		<div class="col-9-12-medium">
			<ul id="nav-content" class="switcher">
				<li>Hello!</li>
				<li>Hello again!</li>
				<li>World!</li>
			</ul>
		</div>
	</div>

	<h2>Animation</h2>
	<div class="row row-col-3-12-medium margin" data-row-margin>
		<div>
			<h4>Fade</h4>
			<ul class="tab" data-tab="{connect:'#tab-content-a-fade', animation: 'fade'}">
				<li class="active"><a href="#">Tab</a></li>
				<li><a href="#">Tab</a></li>
				<li><a href="#">Tab</a></li>
			</ul>
			<ul id="tab-content-a-fade" class="switcher margin">
				<li>Hello! <a href="#" data-switcher-item="2">Switch to tab 3</a></li>
				<li>Hello again!</li>
				<li>World! <a href="#" data-switcher-item="0">Switch to tab 1</a></li>
			</ul>
		</div>
		<div>
			<h4>Scale</h4>
			<ul class="tab" data-tab="{connect:'#tab-content-a-scale', animation: 'scale'}">
				<li class="active"><a href="#">Tab</a></li>
				<li><a href="#">Tab</a></li>
				<li><a href="#">Tab</a></li>
			</ul>
			<ul id="tab-content-a-scale" class="switcher margin">
				<li>Hello! <a href="#" data-switcher-item="2">Switch to tab 3</a></li>
				<li>Hello again!</li>
				<li>World! <a href="#" data-switcher-item="0">Switch to tab 1</a></li>
			</ul>
		</div>
		<div>
			<h4>Slide top</h4>
			<ul class="tab" data-tab="{connect:'#tab-content-a-slide-top', animation: 'slide-top'}">
				<li class="active"><a href="#">Tab</a></li>
				<li><a href="#">Tab</a></li>
				<li><a href="#">Tab</a></li>
			</ul>
			<ul id="tab-content-a-slide-top" class="switcher margin">
				<li>Hello! <a href="#" data-switcher-item="2">Switch to tab 3</a></li>
				<li>Hello again!</li>
				<li>World! <a href="#" data-switcher-item="0">Switch to tab 1</a></li>
			</ul>
		</div>
		<div>
			<h4>Slide right</h4>
			<ul class="tab" data-tab="{connect:'#tab-content-a-slide-right', animation: 'slide-right'}">
				<li class="active"><a href="#">Tab</a></li>
				<li><a href="#">Tab</a></li>
				<li><a href="#">Tab</a></li>
			</ul>
			<ul id="tab-content-a-slide-right" class="switcher margin">
				<li>Hello! <a href="#" data-switcher-item="2">Switch to tab 3</a></li>
				<li>Hello again!</li>
				<li>World! <a href="#" data-switcher-item="0">Switch to tab 1</a></li>
			</ul>
		</div>
		<div>
			<h4>Slide bottom</h4>
			<ul class="tab" data-tab="{connect:'#tab-content-a-slide-bottom', animation: 'slide-bottom'}">
				<li class="active"><a href="#">Tab</a></li>
				<li><a href="#">Tab</a></li>
				<li><a href="#">Tab</a></li>
			</ul>
			<ul id="tab-content-a-slide-bottom" class="switcher margin">
				<li>Hello! <a href="#" data-switcher-item="2">Switch to tab 3</a></li>
				<li>Hello again!</li>
				<li>World! <a href="#" data-switcher-item="0">Switch to tab 1</a></li>
			</ul>
		</div>
		<div>
			<h4>Slide left</h4>
			<ul class="tab" data-tab="{connect:'#tab-content-a-slide-left', animation: 'slide-left'}">
				<li class="active"><a href="#">Tab</a></li>
				<li><a href="#">Tab</a></li>
				<li><a href="#">Tab</a></li>
			</ul>
			<ul id="tab-content-a-slide-left" class="switcher margin">
				<li>Hello! <a href="#" data-switcher-item="2">Switch to tab 3</a></li>
				<li>Hello again!</li>
				<li>World! <a href="#" data-switcher-item="0">Switch to tab 1</a></li>
			</ul>
		</div>
		<div>
			<h4>Slide horizontal</h4>
			<ul class="tab" data-tab="{connect:'#tab-content-a-slide-horizontal', animation: 'slide-horizontal'}">
				<li class="active"><a href="#">Tab</a></li>
				<li><a href="#">Tab</a></li>
				<li><a href="#">Tab</a></li>
			</ul>
			<ul id="tab-content-a-slide-horizontal" class="switcher margin">
				<li>Hello! <a href="#" data-switcher-item="2">Switch to tab 3</a></li>
				<li>Hello again!</li>
				<li>World! <a href="#" data-switcher-item="0">Switch to tab 1</a></li>
			</ul>
		</div>
		<div>
			<h4>Slide vertical</h4>
			<ul class="tab" data-tab="{connect:'#tab-content-a-slide-vertical', animation: 'slide-vertical'}">
				<li class="active"><a href="#">Tab</a></li>
				<li><a href="#">Tab</a></li>
				<li><a href="#">Tab</a></li>
			</ul>
			<ul id="tab-content-a-slide-vertical" class="switcher margin">
				<li>Hello! <a href="#" data-switcher-item="2">Switch to tab 3</a></li>
				<li>Hello again!</li>
				<li>World! <a href="#" data-switcher-item="0">Switch to tab 1</a></li>
			</ul>
		</div>
		<div>
			<h4>Custom</h4>
			<ul class="tab" data-tab="{connect:'#tab-content-a-anim-custom', animation: 'animation-fade, animation-slide-left'}">
				<li class="active"><a href="#">Tab</a></li>
				<li><a href="#">Tab</a></li>
				<li><a href="#">Tab</a></li>
			</ul>
			<ul id="tab-content-a-anim-custom" class="switcher margin">
				<li>Hello! <a href="#" data-switcher-item="2">Switch to tab 3</a></li>
				<li>Hello again!</li>
				<li>World! <a href="#" data-switcher-item="0">Switch to tab 1</a></li>
			</ul>
		</div>
	</div>
</div>
