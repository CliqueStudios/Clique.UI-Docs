
	<style type="text/css">
		/*
             * Responsive utility classes
             */
		.tm-test .panel {
			position: relative;
			padding: 10px;
			border: 1px solid #ddd;
			background: #f0f0f0;
			text-align: center;
		}
		.tm-test .panel > span {
			position: absolute;
			left: -1px;
			right: -1px;
			top: -1px;
			bottom: -1px;
			padding: 10px;
		}
		.tm-test-visible .panel > span {
			border: 1px solid #D6E9C6;
			background: #DFF0D8;
			color: #468847;
		}
		.tm-test-hidden .panel {
			border: 1px solid #F1C1B6;
			background: #F7CFCC;
			color: #d85030;
		}
		.tm-test-hidden .panel > span {
			border: 1px solid #ddd;
			background: #f0f0f0;
			color: #444;
		}
	</style>
	<div class="container container-center">
		<h1>Alignment</h1>
		<p class="clearfix">
			<img class="align-medium-right" src="<?php echo get_image('placeholder_400x200.svg'); ?>" alt="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p class="clearfix">
			<img class="align-right" src="<?php echo get_image('placeholder_200x100.svg'); ?>" alt="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p class="clearfix">
			<img class="align-center" src="<?php echo get_image('placeholder_400x200.svg'); ?>" alt="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<h1>Vertical alignment</h1>
		<div class="row margin" data-row-margin>
			<div class="col-6-12-medium">
				<div class="text-center vertical-align" style="height: 200px; background: #f0f0f0;">
					<div class="vertical-align-middle" style="width: 300px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
				</div>
			</div>
			<div class="col-6-12-medium">
				<div class="text-center vertical-align" style="height: 200px; background: #f0f0f0;">
					<div class="vertical-align-bottom" style="width: 300px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
				</div>
			</div>
		</div>
		<h1>Respsonsive width and height</h1>
		<p>
			<video controls class="responsive-width" width="600" height="350"></video>
		</p>
		<p>
			<audio controls class="responsive-width"></audio>
		</p>
		<p style="height: 50px; ">
			<img class="responsive-height" src="<?php echo get_image('placeholder_400x200.svg'); ?>" alt="">
		</p>
		<h1 class="heading-large">Heading large</h1>
		<h1 class="link-muted"><a href="">Link muted</a></h1>
		<ul class="list col-3-12-medium link-muted">
			<li><a href="">List item 1</a></li>
			<li><a href="">List item 2</a></li>
			<li><a href="">List item 3</a></li>
			<li><a href="">List item 3</a></li>
		</ul>
		<h1>Scrollable text</h1>
		<pre class="scrollable-text col-6-12-medium"><code>&lt;div class="row"&gt;
    &lt;div class="col-6-12"&gt;...&lt;/div&gt;
    &lt;div class="col-6-12"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
    &lt;div class="col-6-12"&gt;...&lt;/div&gt;
    &lt;div class="col-6-12"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
    &lt;div class="col-6-12"&gt;...&lt;/div&gt;
    &lt;div class="col-6-12"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
    &lt;div class="col-6-12"&gt;...&lt;/div&gt;
    &lt;div class="col-6-12"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
    &lt;div class="col-6-12"&gt;...&lt;/div&gt;
    &lt;div class="col-6-12"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
    &lt;div class="col-6-12"&gt;...&lt;/div&gt;
    &lt;div class="col-6-12"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
    &lt;div class="col-6-12"&gt;...&lt;/div&gt;
    &lt;div class="col-6-12"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
    &lt;div class="col-6-12"&gt;...&lt;/div&gt;
    &lt;div class="col-6-12"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
		<h1>Scrollable box</h1>
		<div class="scrollable-box col-6-12-medium">
			<ul class="list">
				<li>
					<label>
						<input type="checkbox"> Category 1</label>
				</li>
				<li>
					<label>
						<input type="checkbox"> Category 2</label>
					<ul>
						<li>
							<label>
								<input type="checkbox"> Category 2.1</label>
						</li>
						<li>
							<label>
								<input type="checkbox"> Category 2.2</label>
						</li>
						<li>
							<label>
								<input type="checkbox"> Category 2.3</label>
							<ul>
								<li>
									<label>
										<input type="checkbox"> Category 2.3.1</label>
								</li>
								<li>
									<label>
										<input type="checkbox"> Category 2.3.2</label>
								</li>
							</ul>
						</li>
						<li>
							<label>
								<input type="checkbox"> Category 2.4</label>
						</li>
					</ul>
				</li>
				<li>
					<label>
						<input type="checkbox"> Category 3</label>
				</li>
				<li>
					<label>
						<input type="checkbox"> Category 4</label>
				</li>
			</ul>
		</div>
		<h1>Overflow container</h1>
		<div class="overflow-container">
			<table class="table table-striped table-condensed text-nowrap">
				<thead>
					<tr>
						<th>Table Heading</th>
						<th>Table Heading</th>
						<th>Table Heading</th>
						<th>Table Heading</th>
						<th>Table Heading</th>
						<th>Table Heading</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<td>Table Footer</td>
						<td>Table Footer</td>
						<td>Table Footer</td>
						<td>Table Footer</td>
						<td>Table Footer</td>
						<td>Table Footer</td>
					</tr>
				</tfoot>
				<tbody>
					<tr>
						<td>Table Data</td>
						<td>Table Data</td>
						<td>Table Data</td>
						<td>Table Data</td>
						<td>Table Data</td>
						<td>Table Data</td>
					</tr>
					<tr>
						<td>Table Data</td>
						<td>Table Data</td>
						<td>Table Data</td>
						<td>Table Data</td>
						<td>Table Data</td>
						<td>Table Data</td>
					</tr>
					<tr>
						<td>Table Data</td>
						<td>Table Data</td>
						<td>Table Data</td>
						<td>Table Data</td>
						<td>Table Data</td>
						<td>Table Data</td>
					</tr>
				</tbody>
			</table>
		</div>
		<h1>Visibility</h1>
		<ul class="list grid text-center tm-test tm-test-visible">
			<li class="col-4-12">
				<div class="panel">Small
					<br>(Phone)
					<span class="visible-small">✔ Small
						<br>(Phone)</span>
				</div>
			</li>
			<li class="col-4-12">
				<div class="panel">Medium
					<br>(Tablet)
					<span class="visible-medium">✔ Medium
						<br>(Tablet)</span>
				</div>
			</li>
			<li class="col-4-12">
				<div class="panel">Large
					<br>(Desktop)
					<span class="visible-large">✔ Large
						<br>(Desktop)</span>
				</div>
			</li>
		</ul>
		<ul class="list grid text-center tm-test tm-test-hidden">
			<li class="col-4-12">
				<div class="panel">✔ Small
					<br>(Phone)
					<span class="hidden-small">Small
						<br>(Phone)</span>
				</div>
			</li>
			<li class="col-4-12">
				<div class="panel">✔ Medium
					<br>(Tablet)
					<span class="hidden-medium">Medium
						<br>(Tablet)</span>
				</div>
			</li>
			<li class="col-4-12">
				<div class="panel">✔ Large
					<br>(Desktop)
					<span class="hidden-large">Large
						<br>(Desktop)</span>
				</div>
			</li>
		</ul>
		<h2>Visible on hover</h2>
		<div class="visible-hover margin clearfix">
			<div class="float-left">Hover me...</div>
			<div class="hidden">World!</div>
		</div>
		<div class="visible-hover-inline margin">Hover me...
			<div class="hidden">World!</div>
		</div>
		<h1>Auto margins</h1>
		<p data-margin>
			<button class="button">Button</button>
			<button class="button">Button</button>
			<button class="button">Button</button>
			<button class="button">Button</button>
			<button class="button">Button</button>
			<button class="button">Button</button>
			<button class="button">Button</button>
			<button class="button">Button</button>
			<button class="button">Button</button>
			<button class="button">Button</button>
			<button class="button">Button</button>
			<button class="button">Button</button>
			<button class="button">Button</button>
			<button class="button">Button</button>
			<button class="button">Button</button>
			<button class="button">Button</button>
			<button class="button">Button</button>
		</p>
	</div>
