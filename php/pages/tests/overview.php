
	<div class="container container-center">
		<div class="row">
			<div class="col-12-12">
				<nav class="navbar">
					<a class="navbar-brand hidden-small" href="">Brand</a>
					<ul class="navbar-nav hidden-small">
						<li class="parent" data-dropdown>
							<a href="">Parent</a>
							<div class="dropdown dropdown-navbar">
								<ul class="nav nav-navbar">
									<li class="nav-header">Header</li>
									<li><a href="#">Item</a></li>
									<li><a href="#">Item</a></li>
									<li class="nav-divider"></li>
									<li><a href="#">Separated item</a></li>
									<li class="parent">
										<a href="#">Parent</a>
										<ul class="nav-sub">
											<li><a href="#">Sub item</a>
												<ul>
													<li><a href="#">Sub item</a></li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</li>
						<li class="parent active" data-dropdown>
							<a href="">Active</a>
							<div class="dropdown dropdown-navbar">
								<div class="panel">Lorem ipsum dolor sit amet, consectetur <a href="#">adipisicing</a> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
							</div>
						</li>
						<li>
							<a href="">Item</a>
						</li>
					</ul>
					<a href="#" class="navbar-toggle visible-small" data-offcanvas="{target:'#offcanvas-1'}"></a>
				</nav>
			</div>
		</div>
		<hr class="row-divider">
		<div class="row">
			<div class="col-12-12" data-margin>
				<div class="button-group">
					<button class="button">Button</button>
					<div data-dropdown="{mode:'click'}">
						<button class="button">
							<i class="icon-chevron-down"></i>
						</button>
						<div class="dropdown dropdown-col-2-12">
							<div class="row dropdown-grid">
								<div class="col-6-12">
									<ul class="nav nav-dropdown panel">
										<li class="nav-header">Header</li>
										<li><a href="#">Item</a></li>
										<li><a href="#">Item</a></li>
										<li class="nav-divider"></li>
										<li><a href="#">Separated item</a></li>
										<li class="parent">
											<a href="#">Parent</a>
											<ul class="nav-sub">
												<li><a href="#">Sub item</a>
													<ul>
														<li><a href="#">Sub item</a></li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="col-6-12">
									<ul class="nav nav-dropdown panel">
										<li class="nav-header">Header</li>
										<li><a href="#">Item</a></li>
										<li><a href="#">Item</a></li>
										<li class="nav-divider"></li>
										<li><a href="#">Separated item</a></li>
										<li class="parent">
											<a href="#">Parent</a>
											<ul class="nav-sub">
												<li><a href="#">Sub item</a>
													<ul>
														<li><a href="#">Sub item</a></li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="button-group">
					<button class="button button-primary">Primary</button>
					<div data-dropdown="{mode:'click'}">
						<button class="button button-primary">
							<i class="icon-chevron-down"></i>
						</button>
						<div class="dropdown dropdown-small">
							<ul class="nav nav-dropdown">
								<li class="nav-header">Header</li>
								<li><a href="#">Item</a></li>
								<li><a href="#">Item</a></li>
								<li class="nav-divider"></li>
								<li><a href="#">Separated item</a></li>
								<li class="parent">
									<a href="#">Parent</a>
									<ul class="nav-sub">
										<li><a href="#">Sub item</a>
											<ul>
												<li><a href="#">Sub item</a></li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="button-group">
					<button class="button button-success">Success</button>
					<div data-dropdown="{mode:'click'}">
						<button class="button button-success">
							<i class="icon-chevron-down"></i>
						</button>
						<div class="dropdown">
							<ul class="nav nav-dropdown">
								<li class="nav-header">Header</li>
								<li><a href="#">Item</a></li>
								<li><a href="#">Item</a></li>
								<li class="nav-divider"></li>
								<li><a href="#">Separated item</a></li>
								<li class="parent">
									<a href="#">Parent</a>
									<ul class="nav-sub">
										<li><a href="#">Sub item</a>
											<ul>
												<li><a href="#">Sub item</a></li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="button-group">
					<button class="button button-danger">Danger</button>
					<div data-dropdown="{mode:'click'}">
						<button class="button button-danger">
							<i class="icon-chevron-down"></i>
						</button>
						<div class="dropdown">
							<ul class="nav nav-dropdown">
								<li class="nav-header">Header</li>
								<li><a href="#">Item</a></li>
								<li><a href="#">Item</a></li>
								<li class="nav-divider"></li>
								<li><a href="#">Separated item</a></li>
								<li class="parent">
									<a href="#">Parent</a>
									<ul class="nav-sub">
										<li><a href="#">Sub item</a>
											<ul>
												<li><a href="#">Sub item</a></li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<button class="button" disabled>Disabled</button>
				<button class="button" data-tooltip title="Bazinga!">Tooltip</button>
				<button class="button" data-modal="{target:'#modal-1'}">Modal</button>
				<button class="button" data-offcanvas="{target:'#offcanvas-1'}">Off Canvas</button>
				<button class="button button-link">Button link</button>
			</div>
		</div>
		<hr class="row-divider">
		<div class="row" data-row-margin>
			<div class="col-6-12-medium">
				<div class="row" data-row-margin>
					<div class="col-12-12">
						<ul class="breadcrumb">
							<li><a href="#">Home</a></li>
							<li><a href="#">Blog</a></li>
							<li>
								<span>Category</span>
							</li>
							<li class="active">
								<span>Post</span>
							</li>
						</ul>
					</div>
					<div class="col-12-12">
						<article class="article">
							<h1 class="article-title">Article title</h1>
							<p class="article-meta">Written by Super User on 12 April. Posted in Blog</p>
							<div class="row" data-row-margin>
								<div class="col-6-12-medium">
									<a class="thumbnail overlay-hover" href="#">
										<figure class="overlay">
											<img src="<?php echo get_image('placeholder_200x100.svg'); ?>" alt="">
											<figcaption class="overlay-panel overlay-icon overlay-background overlay-fade"></figcaption>
										</figure>
										<div class="thumbnail-caption">Caption</div>
									</a>
								</div>
								<div class="col-6-12-medium">
									<a class="thumbnail overlay-hover" href="#">
										<figure class="overlay">
											<img src="<?php echo get_image('placeholder_200x100.svg'); ?>" alt="">
											<figcaption class="overlay-panel overlay-background overlay-bottom overlay-slide-bottom">Overlay</figcaption>
										</figure>
										<div class="thumbnail-caption">Caption</div>
									</a>
								</div>
							</div>
							<p class="article-lead">Lorem ipsum dolor sit amet.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<pre><code>&lt;div class="myclass"&gt;...&lt;/div&gt;</code></pre>
							<hr class="article-divider">
							<div class="row" data-row-margin>
								<div class="col-2-10-medium">
									<span class="text-muted">text-muted</span>
									<br>
									<span class="text-primary">text-primary</span>
									<br>
									<span class="text-success">text-success</span>
									<br>
									<span class="text-warning">text-warning</span>
									<br>
									<span class="text-danger">text-danger</span>
								</div>
								<div class="col-3-10-medium">
									<a href="#">a element</a>
									<br>
									<em>em element</em>
									<br>
									<strong>strong</strong>
									<br>
									<code>code element</code>
									<br>
									<del>del element</del>
								</div>
								<div class="col-4-10-medium">
									<ins>ins element</ins>
									<br>
									<mark>mark element</mark>
									<br>
									<q>q
										<q>inside</q> a q element </q>
									<br>
									<abbr title="Abbreviation Element">abbr element</abbr>
									<br>
									<dfn title="Defines a definition term">dfn element</dfn>
								</div>
								<div class="col-12-12">
									<p class="text-center">
										<span class="badge">Badge</span>
										<span class="badge badge-notification">1</span>
										<span class="badge badge-success">Success</span>
										<span class="badge badge-success badge-notification">4</span>
										<span class="badge badge-warning">Warning</span>
										<span class="badge badge-warning badge-notification">3</span>
										<span class="badge badge-danger">Danger</span>
										<span class="badge badge-danger badge-notification">4</span>
									</p>
								</div>
								<div class="col-6-12-medium">
									<h1 class="display-inline">h1</h1>
									<h2 class="display-inline">h2</h2>
									<h3 class="display-inline">h3</h3>
									<h4 class="display-inline">h4</h4>
									<h5 class="display-inline">h5</h5>
									<h6 class="display-inline">h6</h6>
								</div>
								<div class="col-6-12-medium">
									<blockquote>
										<p> Lorem ipsum dolor.</p>
										<small>Someone famous</small>
									</blockquote>
								</div>
							</div>
						</article>
					</div>
					<div class="col-12-12">
						<ul class="comment-list">
							<li>
								<article class="comment">
									<header class="comment-header">
										<img class="comment-avatar" src="<?php echo get_image('avatar.png'); ?>" alt="">
										<h4 class="comment-title">Author</h4>
										<p class="comment-meta">May 2, 2090 at 1:55 pm</p>
									</header>
									<div class="comment-body">
										<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
									</div>
								</article>
							</li>
						</ul>
					</div>
					<div class="col-12-12">
						<ul class="pagination">
							<li class="disabled">
								<span>
									<i class="icon-chevron-left"></i>
								</span>
							</li>
							<li class="active">
								<span>1</span>
							</li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li>
								<span>...</span>
							</li>
							<li><a href="#">20</a></li>
							<li>
								<a href="#">
									<i class="icon-chevron-right"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-6-12-medium">
				<div class="row" data-row-margin>
					<div class="col-6-12-medium">
						<div class="panel">
							<ul class="nav nav-side nav-parent-icon" data-nav>
								<li class="nav-header">Header</li>
								<li class="nav-divider"></li>
								<li class="active"><a href="#">Active</a></li>
								<li class="parent">
									<a href="#">Parent</a>
									<ul class="nav-sub">
										<li><a href="#">Sub item</a></li>
										<li><a href="#">Sub item</a>
											<ul>
												<li><a href="#">Sub item</a></li>
												<li><a href="#">Sub item</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="#">Item</a></li>
							</ul>
						</div>
						<div class="panel panel-divider">
							<h3 class="panel-title">Divider</h3>
							Lorem ipsum <a href="#">dolor</a> sit amet, consectetur adipisicing elit.
						</div>
						<div class="panel panel-header">
							<h3 class="panel-title">Header</h3>
							Lorem ipsum <a href="#">dolor</a> sit amet, consectetur adipisicing elit.
						</div>
					</div>
					<div class="col-6-12-medium">
						<div class="panel panel-box">
							<h3 class="panel-title">Box</h3>
							Lorem ipsum <a href="#">dolor</a> sit amet, consectetur adipisicing elit.
						</div>
						<div class="panel panel-box panel-box-primary">
							<h3 class="panel-title">Box primary</h3>
							Lorem ipsum <a href="#">dolor</a> sit amet, consectetur adipisicing elit.
						</div>
						<div class="panel panel-box panel-box-secondary">
							<h3 class="panel-title">Box secondary</h3>
							Lorem ipsum <a href="#">dolor</a> sit amet, consectetur adipisicing elit.
						</div>
					</div>
				</div>
				<div class="row" data-row-margin>
					<div class="col-6-12">
						<div class="alert" data-alert>
							<a class="alert-close close"></a>
							<p>Info message</p>
						</div>
					</div>
					<div class="col-6-12">
						<div class="alert alert-success" data-alert>
							<a class="alert-close close"></a>
							<p>Success message</p>
						</div>
					</div>
					<div class="col-6-12">
						<div class="alert alert-warning" data-alert>
							<a class="alert-close close"></a>
							<p>Warning message</p>
						</div>
					</div>
					<div class="col-6-12">
						<div class="alert alert-danger" data-alert>
							<a class="alert-close close"></a>
							<p>Danger message</p>
						</div>
					</div>
					<div class="col-6-12">
						<div class="progress">
							<div class="progress-bar" style="width: 55%;">55%</div>
						</div>
					</div>
					<div class="col-6-12">
						<div class="progress progress-success">
							<div class="progress-bar" style="width: 55%;">55%</div>
						</div>
					</div>
					<div class="col-6-12">
						<div class="progress progress-warning">
							<div class="progress-bar" style="width: 55%;">55%</div>
						</div>
					</div>
					<div class="col-6-12">
						<div class="progress progress-danger">
							<div class="progress-bar" style="width: 55%;">55%</div>
						</div>
					</div>
					<div class="col-6-12 form">
						<fieldset>
							<legend>Form states</legend>
							<div class="form-row">
								<input type="text" placeholder="Text Input" class="col-12-12">
							</div>
							<div class="form-row">
								<input type="text" placeholder="form-success" value="form-success" class="col-12-12 form-success">
							</div>
							<div class="form-row">
								<input type="text" placeholder="form-danger" value="form-danger" class="col-12-12 form-danger">
							</div>
							<div class="form-row">
								<input type="text" placeholder="form disabled" class="col-12-12" disabled>
							</div>
						</fieldset>
					</div>
					<div class="col-6-12 form">
						<fieldset>
							<legend>Form styles</legend>
							<div class="form-row">
								<input type="text" placeholder="form-large" class="form-large form-col-small">
								<button class="button button-large" type="reset">Large</button>
							</div>
							<div class="form-row">
								<input type="text" placeholder="form-small" class="form-small form-col-small">
								<button class="button button-small" type="reset">Small</button>
							</div>
							<div class="form-row">
								<input type="text" placeholder="form-blank" class="form-col-small form-blank">
								<button class="button button-mini" type="reset">Mini</button>
							</div>
						</fieldset>
					</div>
				</div>
			</div>
		</div>
		<hr class="row-divider">
		<div class="row" data-row-margin>
			<div class="col-3-12-medium">
				<ul class="subnav subnav-line">
					<li class="active"><a href="#">Active</a></li>
					<li><a href="#">Item</a></li>
					<li class="disabled"><a href="#">Disabled</a></li>
				</ul>
			</div>
			<div class="col-3-12-medium">
				<ul class="subnav subnav-pill">
					<li class="active"><a href="#">Active</a></li>
					<li><a href="#">Item</a></li>
					<li class="disabled"><a href="#">Disabled</a></li>
				</ul>
			</div>
			<div class="col-3-12-medium">
				<ul class="tab" data-tab>
					<li class="active"><a href="#">Active</a></li>
					<li><a href="#">Item</a></li>
					<li class="disabled"><a href="#">Disabled</a></li>
				</ul>
			</div>
			<div class="col-3-12-medium">
				<a href="#" class="icon-button icon-github"></a>
				<a href="#" class="icon-button icon-twitter"></a>
				<a href="#" class="icon-button icon-dribbble"></a>
				<a href="#" class="icon-button icon-html5"></a>
			</div>
		</div>
		<hr class="row-divider">
		<div class="row row-divider" data-row-margin>
			<div class="col-3-12-medium">
				<ul class="list list-line">
					<li>List item 1</li>
					<li>List item 2</li>
					<li>List item 3</li>
				</ul>
			</div>
			<div class="col-3-12-medium">
				<ul class="list list-striped">
					<li>List item 1</li>
					<li>List item 2</li>
					<li>List item 3</li>
				</ul>
			</div>
			<div class="col-3-12-medium">
				<table class="table table-striped table-condensed table-hover">
					<caption>Table caption</caption>
					<thead>
						<tr>
							<th>Table</th>
							<th>Heading</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Table</td>
							<td>Data</td>
						</tr>
						<tr>
							<td>Table</td>
							<td>Data</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-3-12-medium">
				<dl class="description-list description-list-line">
					<dt>Description lists</dt>
					<dd>Description text.</dd>
					<dt>Description lists</dt>
					<dd>Description text.</dd>
				</dl>
			</div>
		</div>
	</div>
	<div id="offcanvas-1" class="offcanvas">
		<div class="offcanvas-bar">
			<ul class="nav nav-offcanvas nav-parent-icon" data-nav>
				<li><a href="#">Item</a></li>
				<li class="active"><a href="#">Active</a></li>
				<li class="parent">
					<a href="#">Parent</a>
					<ul class="nav-sub">
						<li><a href="#">Sub item</a></li>
						<li><a href="#">Sub item</a>
							<ul>
								<li><a href="#">Sub item</a></li>
								<li><a href="#">Sub item</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="parent">
					<a href="#">Parent</a>
					<ul class="nav-sub">
						<li><a href="#">Sub item</a></li>
						<li><a href="#">Sub item</a></li>
					</ul>
				</li>
				<li><a href="#">Item</a></li>
				<li class="nav-header">Header</li>
				<li>
					<a href="#">
						<i class="icon-star"></i> Item</a>
				</li>
				<li>
					<a href="#">
						<i class="icon-twitter"></i> Item</a>
				</li>
				<li class="nav-divider"></li>
				<li>
					<a href="#">
						<i class="icon-rss"></i> Item</a>
				</li>
			</ul>
			<div class="panel">
				<h3 class="panel-title">Title</h3>
				Lorem ipsum dolor sit amet, <a href="#">consetetur</a> sadipscing elitr.
			</div>
			<div class="panel">
				<h3 class="panel-title">Title</h3>
				Lorem ipsum dolor sit amet, <a href="#">consetetur</a> sadipscing elitr.
			</div>
		</div>
	</div>
	<div id="modal-1" class="modal">
		<div class="modal-dialog">
			<button type="button" class="modal-close close"></button>
			<h1>Headline</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
