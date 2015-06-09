
<div class="container container-center">
	<h2>Grid</h2>
	<div class="clearfix" style="background: rgba(0,0,0,0.1);">
		<div style="margin: 20px 0;">Clearfix method test for not colapsing margin. (Safari)</div>
	</div>
	<div class="clearfix">
		<div class="float-left" style="margin-top: 40px;">Float Test</div>
	</div>
	<div class="row">
		<div class="col-6-12">
			<div class="panel">1-2</div>
		</div>
		<div class="col-6-12">
			<div class="panel">1-2</div>
		</div>
	</div>
	<div class="row" data-row-margin>
		<div class="col-6-12-medium">
			<div class="panel">M-1-2</div>
		</div>
		<div class="col-6-12-medium">
			<div class="panel">M-1-2</div>
		</div>
	</div>
	<div class="row" data-row-margin>
		<div class="col-6-12-large">
			<div class="panel">L-1-2</div>
		</div>
		<div class="col-6-12-large">
			<div class="panel">L-1-2</div>
		</div>
	</div>
	<h2>Grid Nested</h2>
	<div class="row">
		<div class="col-6-12">
			<div class="panel">1-2</div>
		</div>
		<div class="col-6-12">
			<div class="row">
				<div class="col-6-12">
					<div class="panel">1-2</div>
				</div>
				<div class="col-6-12">
					<div class="panel">1-2</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row" data-row-margin>
		<div class="col-6-12-medium">
			<div class="panel">M-1-2</div>
		</div>
		<div class="col-6-12-medium">
			<div class="row" data-row-margin>
				<div class="col-6-12-medium">
					<div class="panel">M-1-2</div>
				</div>
				<div class="col-6-12-medium">
					<div class="panel">M-1-2</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row" data-row-margin>
		<div class="col-6-12-large">
			<div class="panel">L-1-2</div>
		</div>
		<div class="col-6-12-large">
			<div class="row" data-row-margin>
				<div class="col-6-12-large">
					<div class="panel">L-1-2</div>
				</div>
				<div class="col-6-12-large">
					<div class="panel">L-1-2</div>
				</div>
			</div>
		</div>
	</div>
	<h2>Grid Combined</h2>
	<p>Using <code>visible-*</code> and <code>hidden-*</code> classes.</p>
	<div class="row" data-row-margin>
		<div class="col-4-12-large col-6-12-medium">
			<div class="panel">M-1-2 L-1-3</div>
		</div>
		<div class="col-4-12-large hidden-medium">
			<div class="panel">hidden-medium</div>
		</div>
		<div class="col-4-12-large col-6-12-medium">
			<div class="panel">M-1-2 L-1-3</div>
		</div>
	</div>
	<div class="row" data-row-margin>
		<div class="col-4-12-medium col-6-12">
			<div class="panel">1-2 M-1-3</div>
		</div>
		<div class="col-4-12-medium hidden-small">
			<div class="panel">hidden-small</div>
		</div>
		<div class="col-4-12-medium col-6-12">
			<div class="panel">1-2 M-1-3</div>
		</div>
	</div>
	<div class="row" data-row-margin>
		<div class="col-1-12 visible-small">
			<div class="panel">1-1 visible-small</div>
		</div>
		<div class="col-1-12-medium visible-medium">
			<div class="panel">M-1-1 visible-medium</div>
		</div>
		<div class="col-1-12-large visible-large">
			<div class="panel">L-1-1 visible-large</div>
		</div>
	</div>
	<div class="row" data-row-margin>
		<div class="col-1-12 hidden-large">
			<div class="panel">1-1 hidden-large</div>
		</div>
		<div class="col-6-12-large">
			<div class="panel">L-1-2</div>
		</div>
		<div class="col-6-12-large">
			<div class="panel">L-1-2</div>
		</div>
	</div>
	<h2>Push/Pull</h2>
	<p>Works only with <code>col-medium-*</code></p>
	<div class="row" data-row-margin>
		<div class="col-4-12-medium push-2-3">
			<div class="panel">First</div>
		</div>
		<div class="col-8-12-medium pull-1-3">
			<div class="panel">Last</div>
		</div>
	</div>
	<h2>More Complexity</h2>
	<div class="row" data-row-margin>
		<div class="col-3-12-medium">
			<div class="panel">Here is some multiline text for testing purpose.</div>
		</div>
		<div class="col-3-12-medium">
			<div class="panel">M-1-4</div>
		</div>
		<div class="col-3-12-medium">
			<div class="panel">M-1-4</div>
		</div>
		<div class="col-3-12-medium">
			<div class="row" data-row-margin>
				<div class="col-4-12-medium">
					<div class="panel">M-1-3</div>
				</div>
				<div class="col-4-12-medium">
					<div class="panel">M-1-3</div>
				</div>
				<div class="col-4-12-medium">
					<div class="panel">M-1-3</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row" data-row-margin>
		<div class="col-4-12-medium">
			<div class="panel">M-1-3</div>
		</div>
		<div class="col-4-12-medium">
			<div class="panel">M-1-3</div>
		</div>
		<div class="col-4-12-medium">
			<div class="row" data-row-margin>
				<div class="col-3-12-medium">
					<div class="panel">M-1-4</div>
				</div>
				<div class="col-3-12-medium">
					<div class="panel">M-1-4</div>
				</div>
				<div class="col-3-12-medium">
					<div class="panel">M-1-4</div>
				</div>
				<div class="col-3-12-medium">
					<div class="panel">M-1-4</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-6-12">
			<div class="panel">1-2</div>
		</div>
		<div class="col-6-12">
			<div class="panel">1-2</div>
		</div>
	</div>
	<div class="row" data-row-margin>
		<div class="col-6-12-medium push-1-4">
			<div class="row">
				<div class="col-6-12">
					<div class="panel">1-2</div>
				</div>
				<div class="col-6-12">
					<div class="panel">1-2</div>
				</div>
			</div>
			<p>Some paragraph</p>
			<p>Another paragraph</p>
			<div class="row" data-row-margin>
				<div class="col-6-12-medium">
					<div class="panel">M-1-2</div>
				</div>
				<div class="col-6-12-medium">
					<div class="panel">M-1-2</div>
				</div>
			</div>
		</div>
		<div class="col-6-12 col-3-12-medium pull-1-2">
			<div class="panel">Panel</div>
			<div class="panel">Panel</div>
			<div class="panel">Panel</div>
			<div class="panel">Panel</div>
		</div>
		<div class="col-6-12 col-3-12-medium">
			<div class="panel">Panel</div>
			<div class="panel">Panel</div>
			<div class="panel">Panel</div>
			<div class="panel">Panel</div>
		</div>
	</div>
	<div class="row">
		<div class="col-6-12">
			<div class="row" data-row-margin>
				<div class="col-3-12">
					<div class="panel">1-4</div>
				</div>
				<div class="col-3-12">
					<div class="panel">1-4</div>
				</div>
				<div class="col-3-12">
					<div class="panel">1-4</div>
				</div>
				<div class="col-3-12">
					<div class="panel">1-4</div>
				</div>
				<div class="col-3-12">
					<div class="panel">1-4</div>
				</div>
				<div class="col-3-12">
					<div class="panel">1-4</div>
				</div>
				<div class="col-3-12">
					<div class="panel">1-4</div>
				</div>
				<div class="col-3-12">
					<div class="panel">1-4</div>
				</div>
			</div>
		</div>
		<div class="col-6-12">
			<div class="panel">1-2</div>
		</div>
	</div>
	<h2>Multi-row</h2>
	<p>This grid contains multiple boxes which floats into multiple rows.</p>
	<ul class="row" data-row-margin>
		<li class="col-6-12-medium">
			<div class="panel">M-1-2</div>
		</li>
		<li class="col-3-12-medium">
			<div class="panel">M-1-4</div>
		</li>
		<li class="col-3-12-medium">
			<div class="panel">M-1-4</div>
		</li>
		<li class="col-2-10-medium">
			<div class="panel">M-1-5</div>
		</li>
		<li class="col-2-10-medium">
			<div class="panel">M-1-5</div>
		</li>
		<li class="col-6-10-medium">
			<div class="panel">M-6-10</div>
		</li>
	</ul>
	<p>Custom pixel widths</p>
	<ul class="row" data-row-margin>
		<li class="width">
			<div class="panel">Custom</div>
		</li>
		<li class="width">
			<div class="panel">Custom</div>
		</li>
		<li class="width">
			<div class="panel">Custom</div>
		</li>
		<li class="width">
			<div class="panel">Custom</div>
		</li>
		<li class="width">
			<div class="panel">Custom</div>
		</li>
		<li class="width">
			<div class="panel">Custom</div>
		</li>
		<li class="width">
			<div class="panel">Custom</div>
		</li>
		<li class="width">
			<div class="panel">Custom</div>
		</li>
	</ul>
	<h2>Even widths</h2>
	<ul class="row row-2-col row-3-cols-small row-col-3-12-medium row-5-cols-large row-6-cols-xlarge" data-row-margin>
		<li>
			<div class="panel">
				1-2
				<br>S-1-3
				<br>M-1-4
				<br>L-1-5
				<br>XL-1-6
			</div>
		</li>
		<li>
			<div class="panel">
				1-2
				<br>S-1-3
				<br>M-1-4
				<br>L-1-5
				<br>XL-1-6
			</div>
		</li>
		<li>
			<div class="panel">
				1-2
				<br>S-1-3
				<br>M-1-4
				<br>L-1-5
				<br>XL-1-6
			</div>
		</li>
		<li>
			<div class="panel">
				1-2
				<br>S-1-3
				<br>M-1-4
				<br>L-1-5
				<br>XL-1-6
			</div>
		</li>
		<li>
			<div class="panel">
				1-2
				<br>S-1-3
				<br>M-1-4
				<br>L-1-5
				<br>XL-1-6
			</div>
		</li>
		<li>
			<div class="panel">
				1-2
				<br>S-1-3
				<br>M-1-4
				<br>L-1-5
				<br>XL-1-6
			</div>
		</li>
	</ul>
	<h2>Collapse gutter</h2>
	<div class="row row-collapse">
		<div class="col-6-12">
			<div class="panel">1-2</div>
		</div>
		<div class="col-6-12">
			<div class="panel">1-2</div>
		</div>
	</div>
	<div class="row row-collapse" data-row-margin>
		<div class="col-6-12-medium">
			<div class="panel">M-1-2</div>
		</div>
		<div class="col-6-12-medium">
			<div class="panel">M-1-2</div>
		</div>
	</div>
	<div class="row row-collapse" data-row-margin>
		<div class="col-6-12-large">
			<div class="panel">L-1-2</div>
		</div>
		<div class="col-6-12-large">
			<div class="panel">L-1-2</div>
		</div>
	</div>
	<ul class="row row-collapse row-2-col row-3-cols-small row-col-3-12-medium row-5-cols-large row-6-cols-xlarge" data-row-margin>
		<li>
			<div class="panel">
				1-2
				<br>S-1-3
				<br>M-1-4
				<br>L-1-5
				<br>XL-1-6
			</div>
		</li>
		<li>
			<div class="panel">
				1-2
				<br>S-1-3
				<br>M-1-4
				<br>L-1-5
				<br>XL-1-6
			</div>
		</li>
		<li>
			<div class="panel">
				1-2
				<br>S-1-3
				<br>M-1-4
				<br>L-1-5
				<br>XL-1-6
			</div>
		</li>
		<li>
			<div class="panel">
				1-2
				<br>S-1-3
				<br>M-1-4
				<br>L-1-5
				<br>XL-1-6
			</div>
		</li>
		<li>
			<div class="panel">
				1-2
				<br>S-1-3
				<br>M-1-4
				<br>L-1-5
				<br>XL-1-6
			</div>
		</li>
		<li>
			<div class="panel">
				1-2
				<br>S-1-3
				<br>M-1-4
				<br>L-1-5
				<br>XL-1-6
			</div>
		</li>
	</ul>
	<h2>Small gutter</h2>
	<div class="row grid-small">
		<div class="col-6-12">
			<div class="panel">1-2</div>
		</div>
		<div class="col-6-12">
			<div class="panel">1-2</div>
		</div>
	</div>
	<div class="row grid-small" data-row-margin>
		<div class="col-6-12-medium">
			<div class="panel">M-1-2</div>
		</div>
		<div class="col-6-12-medium">
			<div class="panel">M-1-2</div>
		</div>
	</div>
	<div class="row grid-small" data-row-margin>
		<div class="col-6-12-large">
			<div class="panel">L-1-2</div>
		</div>
		<div class="col-6-12-large">
			<div class="panel">L-1-2</div>
		</div>
	</div>
	<ul class="row grid-small row-2-col row-3-cols-small row-col-3-12-medium row-5-cols-large row-6-cols-xlarge" data-row-margin>
		<li>
			<div class="panel">1-2
				<br>S-1-3
				<br>M-1-4
				<br>L-1-5
				<br>XL-1-6
			</div>
		</li>
		<li>
			<div class="panel">
				1-2
				<br>S-1-3
				<br>M-1-4
				<br>L-1-5
				<br>XL-1-6
			</div>
		</li>
		<li>
			<div class="panel">
				1-2
				<br>S-1-3
				<br>M-1-4
				<br>L-1-5
				<br>XL-1-6
			</div>
		</li>
		<li>
			<div class="panel">
				1-2
				<br>S-1-3
				<br>M-1-4
				<br>L-1-5
				<br>XL-1-6
			</div>
		</li>
		<li>
			<div class="panel">
				1-2
				<br>S-1-3
				<br>M-1-4
				<br>L-1-5
				<br>XL-1-6
			</div>
		</li>
		<li>
			<div class="panel">
				1-2
				<br>S-1-3
				<br>M-1-4
				<br>L-1-5
				<br>XL-1-6
			</div>
		</li>
	</ul>
	<h2>Medium gutter</h2>
	<div class="row row-medium">
		<div class="col-6-12">
			<div class="panel">1-2</div>
		</div>
		<div class="col-6-12">
			<div class="panel">1-2</div>
		</div>
	</div>
	<div class="row row-medium" data-row-margin>
		<div class="col-6-12-medium">
			<div class="panel">M-1-2</div>
		</div>
		<div class="col-6-12-medium">
			<div class="panel">M-1-2</div>
		</div>
	</div>
	<div class="row row-medium" data-row-margin>
		<div class="col-6-12-large">
			<div class="panel">L-1-2</div>
		</div>
		<div class="col-6-12-large">
			<div class="panel">L-1-2</div>
		</div>
	</div>
	<ul class="row row-medium row-2-col row-3-cols-small row-col-3-12-medium row-5-cols-large row-6-cols-xlarge" data-row-margin>
		<li>
			<div class="panel">
				1-2
				<br>S-1-3
				<br>M-1-4
				<br>L-1-5
				<br>XL-1-6
			</div>
		</li>
		<li>
			<div class="panel">
				1-2
				<br>S-1-3
				<br>M-1-4
				<br>L-1-5
				<br>XL-1-6
			</div>
		</li>
		<li>
			<div class="panel">
				1-2
				<br>S-1-3
				<br>M-1-4
				<br>L-1-5
				<br>XL-1-6
			</div>
		</li>
		<li>
			<div class="panel">
				1-2
				<br>S-1-3
				<br>M-1-4
				<br>L-1-5
				<br>XL-1-6
			</div>
		</li>
		<li>
			<div class="panel">
				1-2
				<br>S-1-3
				<br>M-1-4
				<br>L-1-5
				<br>XL-1-6
			</div>
		</li>
		<li>
			<div class="panel">
				1-2
				<br>S-1-3
				<br>M-1-4
				<br>L-1-5
				<br>XL-1-6
			</div>
		</li>
	</ul>
	<h2>Divider</h2>
	<div class="row row-divider">
		<div class="col-6-12">
			<div class="panel">1-2</div>
		</div>
		<div class="col-6-12">
			<div class="row row-divider">
				<div class="col-6-12">
					<div class="panel">1-2</div>
				</div>
				<div class="col-6-12">
					<div class="panel">1-2</div>
				</div>
			</div>
		</div>
	</div>
	<hr class="row-divider">
	<div class="row row-divider" data-row-margin>
		<div class="col-6-12-medium">
			<div class="panel">M-1-2</div>
		</div>
		<div class="col-6-12-medium">
			<div class="row row-divider" data-row-margin>
				<div class="col-6-12-medium">
					<div class="panel">M-1-2</div>
				</div>
				<div class="col-6-12-medium">
					<div class="panel">M-1-2</div>
				</div>
			</div>
		</div>
	</div>
	<hr class="row-divider">
	<div class="row row-divider" data-row-margin>
		<div class="col-6-12-large">
			<div class="panel">L-1-2</div>
		</div>
		<div class="col-6-12-large">
			<div class="row row-divider" data-row-margin>
				<div class="col-6-12-large">
					<div class="panel">L-1-2</div>
				</div>
				<div class="col-6-12-large">
					<div class="panel">L-1-2</div>
				</div>
			</div>
		</div>
	</div>
	<hr class="row-divider">
	<div class="row row-divider" data-row-margin>
		<div class="col-4-12-large col-6-12-medium">
			<div class="panel">M-1-2 L-1-3</div>
		</div>
		<div class="col-4-12-large hidden-medium">
			<div class="panel">hidden-medium</div>
		</div>
		<div class="col-4-12-large col-6-12-medium">
			<div class="panel">M-1-2 L-1-3</div>
		</div>
	</div>
	<hr class="row-divider">
	<div class="row row-divider" data-row-margin>
		<div class="col-4-12-medium col-6-12">
			<div class="panel">1-2 M-1-3</div>
		</div>
		<div class="col-4-12-medium hidden-small">
			<div class="panel">hidden-small</div>
		</div>
		<div class="col-4-12-medium col-6-12">
			<div class="panel">1-2 M-1-3</div>
		</div>
	</div>
	<hr class="row-divider">
	<div class="row row-divider" data-row-margin>
		<div class="col-1-12 visible-small">
			<div class="panel">100 visible-small</div>
		</div>
		<div class="col-1-12-medium visible-medium">
			<div class="panel">M-1-1 visible-medium</div>
		</div>
		<div class="col-1-12-large visible-large">
			<div class="panel">L-1-1 visible-large</div>
		</div>
	</div>

	<h2>Auto-match column heights</h2>
	<div class="row row-divider" data-grid-match>
		<div class="col-4-12-medium">Lorem ipsum dolor sit amet.</div>
		<div class="col-4-12-medium">Lorem ipsum dolor sit amet.</div>
		<div class="col-4-12-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
	</div>
	<h3>With target selector</h3>
	<div class="row grid-match" data-grid-match="{target:'> div > .panel'}" data-row-margin>
		<div class="col-4-12-medium">
			<div class="panel">Lorem ipsum dolor sit amet.</div>
		</div>
		<div class="col-4-12-medium">
			<div class="panel">Lorem ipsum dolor sit amet.</div>
		</div>
		<div class="col-4-12-medium">
			<div class="panel">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
		</div>
	</div>
	<h3>Match only within rows</h3>
	<div class="row grid-match" data-grid-match="{target:'> div > .panel', row:true}" data-row-margin>
		<div class="col-4-12-medium">
			<div class="panel">Lorem ipsum dolor sit amet.</div>
		</div>
		<div class="col-4-12-medium">
			<div class="panel">Lorem ipsum dolor sit amet.</div>
		</div>
		<div class="col-4-12-medium">
			<div class="panel">Lorem ipsum dolor sit amet.</div>
		</div>
		<div class="col-4-12-medium">
			<div class="panel">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
		</div>
		<div class="col-4-12-medium">
			<div class="panel">Lorem ipsum dolor sit amet.</div>
		</div>
		<div class="col-4-12-medium">
			<div class="panel">Lorem ipsum dolor sit amet.</div>
		</div>
		<div class="col-4-12-medium">
			<div class="panel">Lorem ipsum dolor sit amet.</div>
		</div>
		<div class="col-4-12-medium">
			<div class="panel">Lorem ipsum dolor sit amet.</div>
		</div>
		<div class="col-4-12-medium">
			<div class="panel">Lorem ipsum dolor sit amet.</div>
		</div>
	</div>
	<ul class="row grid-match row-2-col row-3-cols-small row-col-3-12-medium row-5-cols-large row-6-cols-xlarge" data-grid-match="{target:'> li > .panel', row:true}" data-row-margin>
		<li>
			<div class="panel">Lorem ipsum dolor sit amet.</div>
		</li>
		<li>
			<div class="panel">Lorem ipsum dolor sit amet, consectetur.</div>
		</li>
		<li>
			<div class="panel">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
		</li>
		<li>
			<div class="panel">Lorem ipsum dolor sit amet.</div>
		</li>
		<li>
			<div class="panel">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</div>
		</li>
		<li>
			<div class="panel">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
		</li>
		<li>
			<div class="panel">Lorem ipsum dolor sit amet.</div>
		</li>
		<li>
			<div class="panel">Lorem ipsum dolor sit amet, consectetur.</div>
		</li>
	</ul>
</div>
