
	<style type="text/css">
		body .container:last-child {
			padding-bottom: 250px;
		}
		.test .dropdown {
			display: block;
			position: relative;
			z-index: 0;
			top: 0;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			width: 100%;
		}
	</style>
	<div class="container container-center">
		<h1>Dropdown</h1>
		<div class="row test" data-row-margin>
			<div class="col-3-12-medium">
				<div class="dropdown">
					<ul class="nav nav-dropdown">
						<li><a href="#">Item</a></li>
						<li><a href="#">Another item</a></li>
						<li class="nav-header">Header</li>
						<li><a href="#">Item</a></li>
						<li><a href="#">Another item</a></li>
						<li class="nav-divider"></li>
						<li><a href="#">Separated item</a></li>
					</ul>
				</div>
			</div>
			<div class="col-9-12-medium">
				<div class="dropdown">
					<div class="row dropdown-grid">
						<div class="col-4-12">
							<ul class="nav nav-dropdown panel">
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
								<li class="nav-header">Header</li>
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
								<li class="nav-divider"></li>
								<li><a href="#">Separated item</a></li>
							</ul>
							<div class="panel">Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing</a> elit, sed do eiusmod tempor incididunt.</div>
						</div>
						<div class="col-4-12">
							<ul class="nav nav-dropdown panel">
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
								<li class="nav-header">Header</li>
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
								<li class="nav-divider"></li>
								<li><a href="#">Separated item</a></li>
							</ul>
							<div class="panel">Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing</a> elit, sed do eiusmod tempor incididunt.</div>
						</div>
						<div class="col-4-12">
							<div class="panel">Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing</a> elit, sed do eiusmod tempor incididunt.</div>
							<div class="panel">Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing</a> elit, sed do eiusmod tempor incididunt.</div>
						</div>
					</div>
					<div class="row dropdown-grid">
						<div class="col-1-12">
							<div class="panel">Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing</a> elit, sed do eiusmod tempor incididunt.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="margin" id="justify1" data-margin>
			<div class="button-dropdown" data-dropdown>
				<button class="button">Hover
					<i class="icon-chevron-down"></i>
				</button>
				<div class="dropdown dropdown-small">
					<ul class="nav nav-dropdown">
						<li><a href="#">Item</a></li>
						<li><a href="#">Another item</a></li>
						<li class="nav-header">Header</li>
						<li><a href="#">Item</a></li>
						<li><a href="#">Another item</a></li>
						<li class="nav-divider"></li>
						<li><a href="#">Separated item</a></li>
					</ul>
				</div>
			</div>
			<div class="button-dropdown" data-dropdown>
				<button class="button">Flip
					<i class="icon-chevron-down"></i>
				</button>
				<div class="dropdown dropdown-small dropdown-flip">
					<ul class="nav nav-dropdown">
						<li><a href="#">Item</a></li>
						<li><a href="#">Another item</a></li>
						<li class="nav-header">Header</li>
						<li><a href="#">Item</a></li>
						<li><a href="#">Another item</a></li>
						<li class="nav-divider"></li>
						<li><a href="#">Separated item</a></li>
					</ul>
				</div>
			</div>
			<div class="button-dropdown" data-dropdown>
				<button class="button">Center
					<i class="icon-chevron-down"></i>
				</button>
				<div class="dropdown dropdown-small dropdown-center">
					<ul class="nav nav-dropdown">
						<li><a href="#">Item</a></li>
						<li><a href="#">Another item</a></li>
						<li class="nav-header">Header</li>
						<li><a href="#">Item</a></li>
						<li><a href="#">Another item</a></li>
						<li class="nav-divider"></li>
						<li><a href="#">Separated item</a></li>
					</ul>
				</div>
			</div>
			<div class="button-dropdown" data-dropdown="{justify:'#justify1'}">
				<button class="button">Justify
					<i class="icon-chevron-down"></i>
				</button>
				<div class="dropdown dropdown-small">
					<ul class="nav nav-dropdown">
						<li><a href="#">Item</a></li>
						<li><a href="#">Another item</a></li>
						<li class="nav-header">Header</li>
						<li><a href="#">Item</a></li>
						<li><a href="#">Another item</a></li>
						<li class="nav-divider"></li>
						<li><a href="#">Separated item</a></li>
					</ul>
				</div>
			</div>
			<div class="button-dropdown" data-dropdown>
				<button class="button">Up
					<i class="icon-caret-up"></i>
				</button>
				<div class="dropdown dropdown-small dropdown-up">
					<ul class="nav nav-dropdown">
						<li><a href="#">Item</a></li>
						<li><a href="#">Another item</a></li>
						<li class="nav-header">Header</li>
						<li><a href="#">Item</a></li>
						<li><a href="#">Another item</a></li>
						<li class="nav-divider"></li>
						<li><a href="#">Separated item</a></li>
					</ul>
				</div>
			</div>
			<div class="button-dropdown" data-dropdown>
				<button class="button">Scrollable
					<i class="icon-chevron-down"></i>
				</button>
				<div class="dropdown dropdown-small dropdown-scrollable">
					<ul class="nav nav-dropdown">
						<li><a href="#">Item</a></li>
						<li><a href="#">Item</a></li>
						<li><a href="#">Item</a></li>
						<li><a href="#">Item</a></li>
						<li class="nav-header">Header</li>
						<li><a href="#">Item</a></li>
						<li><a href="#">Item</a></li>
						<li><a href="#">Item</a></li>
						<li><a href="#">Item</a></li>
						<li class="nav-divider"></li>
						<li><a href="#">Item</a></li>
						<li><a href="#">Item</a></li>
						<li><a href="#">Item</a></li>
					</ul>
				</div>
			</div>
			<div class="button-dropdown" data-dropdown>
				<button class="button">2 Columns
					<i class="icon-chevron-down"></i>
				</button>
				<div class="dropdown dropdown-col-2-12">
					<div class="row dropdown-grid" data-row-margin>
						<div class="col-6-12-medium">
							<ul class="nav nav-dropdown panel">
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
								<li class="nav-header">Header</li>
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
								<li class="nav-divider"></li>
								<li><a href="#">Separated item</a></li>
							</ul>
						</div>
						<div class="col-6-12-medium">
							<ul class="nav nav-dropdown panel">
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
								<li class="nav-header">Header</li>
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
								<li class="nav-divider"></li>
								<li><a href="#">Separated item</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="button-dropdown" data-dropdown>
				<button class="button">3 Columns
					<i class="icon-chevron-down"></i>
				</button>
				<div class="dropdown dropdown-col-3-12">
					<div class="row dropdown-grid">
						<div class="col-4-12">
							<ul class="nav nav-dropdown panel">
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
								<li class="nav-header">Header</li>
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
								<li class="nav-divider"></li>
								<li><a href="#">Separated item</a></li>
							</ul>
							<div class="panel">Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing</a> elit, sed do eiusmod tempor incididunt.</div>
						</div>
						<div class="col-4-12">
							<ul class="nav nav-dropdown panel">
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
								<li class="nav-header">Header</li>
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
								<li class="nav-divider"></li>
								<li><a href="#">Separated item</a></li>
							</ul>
							<div class="panel">Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing</a> elit, sed do eiusmod tempor incididunt.</div>
						</div>
						<div class="col-4-12">
							<div class="panel">Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing</a> elit, sed do eiusmod tempor incididunt.</div>
							<div class="panel">Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing</a> elit, sed do eiusmod tempor incididunt.</div>
						</div>
					</div>
				</div>
			</div>
			<div class="button-dropdown" data-dropdown>
				<button class="button">Stack
					<i class="icon-chevron-down"></i>
				</button>
				<div class="dropdown dropdown-col-2-12 dropdown-stack">
					<div class="row dropdown-grid">
						<div class="col-6-12">
							<ul class="nav nav-dropdown panel">
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
							</ul>
						</div>
						<div class="col-6-12">
							<ul class="nav nav-dropdown panel">
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="button-dropdown" data-dropdown="{mode:'click'}">
				<button class="button">Click
					<i class="icon-chevron-down"></i>
				</button>
				<div class="dropdown dropdown-small">
					<ul class="nav nav-dropdown">
						<li><a href="#">Item</a></li>
						<li><a href="#">Another item</a></li>
						<li class="nav-header">Header</li>
						<li><a href="#">Item</a></li>
						<li><a href="#">Another item</a></li>
						<li class="nav-divider"></li>
						<li><a href="#">Separated item</a></li>
					</ul>
				</div>
			</div>
			<div class="button-dropdown" data-dropdown>
				<button class="button" disabled>Disabled
					<i class="icon-chevron-down"></i>
				</button>
				<div class="dropdown dropdown-small">
					<ul class="nav nav-dropdown">
						<li><a href="#">Item</a></li>
						<li><a href="#">Another item</a></li>
						<li class="nav-header">Header</li>
						<li><a href="#">Item</a></li>
						<li><a href="#">Another item</a></li>
						<li class="nav-divider"></li>
						<li><a href="#">Separated item</a></li>
					</ul>
				</div>
			</div>
			<div class="button-group">
				<button class="button">Button</button>
				<div data-dropdown>
					<a href="#" class="button">
						<i class="icon-chevron-down"></i>
					</a>
					<div class="dropdown dropdown-small">
						<ul class="nav nav-dropdown">
							<li><a href="#">Item</a></li>
							<li><a href="#">Another item</a></li>
							<li class="nav-header">Header</li>
							<li><a href="#">Item</a></li>
							<li><a href="#">Another item</a></li>
							<li class="nav-divider"></li>
							<li><a href="#">Separated item</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="margin" data-margin>
			<div class="button-group">
				<div class="button-dropdown" data-dropdown>
					<button class="button">Link
						<i class="icon-chevron-down"></i>
					</button>
					<div class="dropdown dropdown-small">
						<ul class="nav nav-dropdown">
							<li><a href="#">Item</a></li>
							<li><a href="#">Another item</a></li>
							<li class="nav-header">Header</li>
							<li><a href="#">Item</a></li>
							<li><a href="#">Another item</a></li>
							<li class="nav-divider"></li>
							<li><a href="#">Separated item</a></li>
						</ul>
					</div>
				</div>
				<div class="button-dropdown" data-dropdown>
					<button class="button">Link
						<i class="icon-chevron-down"></i>
					</button>
					<div class="dropdown dropdown-small">
						<ul class="nav nav-dropdown">
							<li><a href="#">Item</a></li>
							<li><a href="#">Another item</a></li>
							<li class="nav-header">Header</li>
							<li><a href="#">Item</a></li>
							<li><a href="#">Another item</a></li>
							<li class="nav-divider"></li>
							<li><a href="#">Separated item</a></li>
						</ul>
					</div>
				</div>
				<div class="button-dropdown" data-dropdown>
					<button class="button">Button
						<i class="icon-chevron-down"></i>
					</button>
					<div class="dropdown dropdown-small dropdown-flip">
						<ul class="nav nav-dropdown">
							<li><a href="#">Item</a></li>
							<li><a href="#">Another item</a></li>
							<li class="nav-header">Header</li>
							<li><a href="#">Item</a></li>
							<li><a href="#">Another item</a></li>
							<li class="nav-divider"></li>
							<li><a href="#">Separated item</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="button-group">
				<div class="button-dropdown" data-dropdown>
					<button class="button">Link
						<i class="icon-chevron-down"></i>
					</button>
					<div class="dropdown dropdown-small">
						<ul class="nav nav-dropdown">
							<li><a href="#">Item</a></li>
							<li><a href="#">Another item</a></li>
							<li class="nav-header">Header</li>
							<li><a href="#">Item</a></li>
							<li><a href="#">Another item</a></li>
							<li class="nav-divider"></li>
							<li><a href="#">Separated item</a></li>
						</ul>
					</div>
				</div>
				<a href="#" class="button">Link</a>
				<button class="button">Button</button>
			</div>
			<div class="button-group">
				<a href="#" class="button">Link</a>
				<div class="button-dropdown" data-dropdown>
					<button class="button">Link
						<i class="icon-chevron-down"></i>
					</button>
					<div class="dropdown dropdown-small">
						<ul class="nav nav-dropdown">
							<li><a href="#">Item</a></li>
							<li><a href="#">Another item</a></li>
							<li class="nav-header">Header</li>
							<li><a href="#">Item</a></li>
							<li><a href="#">Another item</a></li>
							<li class="nav-divider"></li>
							<li><a href="#">Separated item</a></li>
						</ul>
					</div>
				</div>
				<button class="button">Button</button>
			</div>
			<div class="button-group">
				<a href="#" class="button">Link</a>
				<button class="button">Button</button>
				<div class="button-dropdown" data-dropdown>
					<button class="button">Link
						<i class="icon-chevron-down"></i>
					</button>
					<div class="dropdown dropdown-small dropdown-flip">
						<ul class="nav nav-dropdown">
							<li><a href="#">Item</a></li>
							<li><a href="#">Another item</a></li>
							<li class="nav-header">Header</li>
							<li><a href="#">Item</a></li>
							<li><a href="#">Another item</a></li>
							<li class="nav-divider"></li>
							<li><a href="#">Separated item</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<h2>Dropdown navbar</h2>
		<div class="row test" data-row-margin>
			<div class="col-3-12-medium">
				<div class="dropdown dropdown-navbar">
					<ul class="nav nav-navbar">
						<li><a href="#">Item</a></li>
						<li><a href="#">Another item</a></li>
						<li class="nav-header">Header</li>
						<li><a href="#">Item</a></li>
						<li><a href="#">Another item</a></li>
						<li class="nav-divider"></li>
						<li><a href="#">Separated item</a></li>
					</ul>
				</div>
			</div>
			<div class="col-9-12-medium">
				<div class="dropdown dropdown-navbar">
					<div class="row dropdown-grid">
						<div class="col-4-12">
							<ul class="nav nav-navbar panel">
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
								<li class="nav-header">Header</li>
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
								<li class="nav-divider"></li>
								<li><a href="#">Separated item</a></li>
							</ul>
							<div class="panel">Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing</a> elit, sed do eiusmod tempor incididunt.</div>
						</div>
						<div class="col-4-12">
							<ul class="nav nav-navbar panel">
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
								<li class="nav-header">Header</li>
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
								<li class="nav-divider"></li>
								<li><a href="#">Separated item</a></li>
							</ul>
							<div class="panel">Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing</a> elit, sed do eiusmod tempor incididunt.</div>
						</div>
						<div class="col-4-12">
							<div class="panel">Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing</a> elit, sed do eiusmod tempor incididunt.</div>
							<div class="panel">Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing</a> elit, sed do eiusmod tempor incididunt.</div>
						</div>
					</div>
					<div class="row dropdown-grid">
						<div class="col-1-12">
							<div class="panel">Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing</a> elit, sed do eiusmod tempor incididunt.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="margin">
			<nav class="navbar" id="justify2">
				<ul class="navbar-nav">
					<li class="parent" data-dropdown>
						<a href="">Hover</a>
						<div class="dropdown dropdown-navbar">
							<ul class="nav nav-navbar">
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
								<li class="nav-header">Header</li>
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
								<li class="nav-divider"></li>
								<li><a href="#">Separated item</a></li>
							</ul>
						</div>
					</li>
					<li class="parent" data-dropdown>
						<a href="">Flip</a>
						<div class="dropdown dropdown-navbar dropdown-flip">
							<ul class="nav nav-navbar">
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
								<li class="nav-header">Header</li>
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
								<li class="nav-divider"></li>
								<li><a href="#">Separated item</a></li>
							</ul>
						</div>
					</li>
					<li class="parent" data-dropdown>
						<a href="">Center</a>
						<div class="dropdown dropdown-navbar dropdown-center">
							<ul class="nav nav-navbar">
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
								<li class="nav-header">Header</li>
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
								<li class="nav-divider"></li>
								<li><a href="#">Separated item</a></li>
							</ul>
						</div>
					</li>
					<li class="parent" data-dropdown="{justify:'#justify2'}">
						<a href="">Justify</a>
						<div class="dropdown dropdown-navbar">
							<ul class="nav nav-navbar">
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
								<li class="nav-header">Header</li>
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
								<li class="nav-divider"></li>
								<li><a href="#">Separated item</a></li>
							</ul>
						</div>
					</li>
					<li class="parent" data-dropdown>
						<a href="">Up</a>
						<div class="dropdown dropdown-navbar dropdown-up">
							<ul class="nav nav-navbar">
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
								<li class="nav-header">Header</li>
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
								<li class="nav-divider"></li>
								<li><a href="#">Separated item</a></li>
							</ul>
						</div>
					</li>
					<li class="parent" data-dropdown>
						<a href="">2 Columns</a>
						<div class="dropdown dropdown-navbar dropdown-col-2-12">
							<div class="row dropdown-grid">
								<div class="col-6-12">
									<ul class="nav nav-navbar panel">
										<li><a href="#">Item</a></li>
										<li><a href="#">Another item</a></li>
										<li class="nav-header">Header</li>
										<li><a href="#">Item</a></li>
										<li><a href="#">Another item</a></li>
										<li class="nav-divider"></li>
										<li><a href="#">Separated item</a></li>
									</ul>
								</div>
								<div class="col-6-12">
									<ul class="nav nav-navbar panel">
										<li><a href="#">Item</a></li>
										<li><a href="#">Another item</a></li>
										<li class="nav-header">Header</li>
										<li><a href="#">Item</a></li>
										<li><a href="#">Another item</a></li>
										<li class="nav-divider"></li>
										<li><a href="#">Separated item</a></li>
									</ul>
								</div>
							</div>
						</div>
					</li>
					<li class="parent" data-dropdown>
						<a href="">3 Columns</a>
						<div class="dropdown dropdown-navbar dropdown-col-3-12">
							<div class="row dropdown-grid">
								<div class="col-4-12">
									<ul class="nav nav-navbar panel">
										<li><a href="#">Item</a></li>
										<li><a href="#">Another item</a></li>
										<li class="nav-header">Header</li>
										<li><a href="#">Item</a></li>
										<li><a href="#">Another item</a></li>
										<li class="nav-divider"></li>
										<li><a href="#">Separated item</a></li>
									</ul>
									<div class="panel">Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing</a> elit, sed do eiusmod tempor incididunt.</div>
								</div>
								<div class="col-4-12">
									<ul class="nav nav-navbar panel">
										<li><a href="#">Item</a></li>
										<li><a href="#">Another item</a></li>
										<li class="nav-header">Header</li>
										<li><a href="#">Item</a></li>
										<li><a href="#">Another item</a></li>
										<li class="nav-divider"></li>
										<li><a href="#">Separated item</a></li>
									</ul>
									<div class="panel">Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing</a> elit, sed do eiusmod tempor incididunt.</div>
								</div>
								<div class="col-4-12">
									<div class="panel">Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing</a> elit, sed do eiusmod tempor incididunt.</div>
									<div class="panel">Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing</a> elit, sed do eiusmod tempor incididunt.</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
				<ul class="navbar-nav">
					<li class="parent" data-dropdown><a href="">Stack</a>
						<div class="dropdown dropdown-navbar dropdown-col-2-12 dropdown-stack">
							<div class="row dropdown-grid">
								<div class="col-6-12">
									<ul class="nav nav-navbar panel">
										<li><a href="#">Item</a></li>
										<li><a href="#">Another item</a></li>
									</ul>
								</div>
								<div class="col-6-12">
									<ul class="nav nav-navbar panel">
										<li><a href="#">Item</a></li>
										<li><a href="#">Another item</a></li>
									</ul>
								</div>
							</div>
						</div>
					</li>
					<li class="parent" data-dropdown="{mode:'click'}">
						<a href="">Click</a>
						<div class="dropdown dropdown-navbar">
							<ul class="nav nav-navbar">
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
								<li class="nav-header">Header</li>
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
								<li class="nav-divider"></li>
								<li><a href="#">Separated item</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<div class="navbar-flip">
					<ul class="navbar-nav">
						<li class="parent" data-dropdown>
							<a href="">Flip</a>
							<div class="dropdown dropdown-navbar">
								<ul class="nav nav-navbar">
									<li><a href="#">Item</a></li>
									<li><a href="#">Another item</a></li>
									<li class="nav-header">Header</li>
									<li><a href="#">Item</a></li>
									<li><a href="#">Another item</a></li>
									<li class="nav-divider"></li>
									<li><a href="#">Separated item</a></li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<h2>Subnav</h2>
		<div class="row" data-row-margin>
			<div class="col-4-12-medium">
				<ul class="subnav">
					<li class="active"><a href="#">Active</a></li>
					<li><a href="#">Item</a></li>
					<li data-dropdown="{mode:'click'}">
						<a href="#">More <i class="icon-chevron-down"></i></a>
						<div class="dropdown dropdown-small">
							<ul class="nav nav-dropdown">
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
								<li class="nav-header">Header</li>
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
								<li class="nav-divider"></li>
								<li><a href="#">Separated item</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
			<div class="col-4-12-medium">
				<ul class="subnav subnav-line">
					<li class="active"><a href="#">Active</a></li>
					<li><a href="#">Item</a></li>
					<li data-dropdown="{mode:'click'}">
						<a href="#">More <i class="icon-chevron-down"></i></a>
						<div class="dropdown dropdown-small">
							<ul class="nav nav-dropdown">
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
								<li class="nav-header">Header</li>
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
								<li class="nav-divider"></li>
								<li><a href="#">Separated item</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
			<div class="col-4-12-medium">
				<ul class="subnav subnav-pill">
					<li class="active"><a href="#">Active</a></li>
					<li><a href="#">Item</a></li>
					<li data-dropdown="{mode:'click'}">
						<a href="#">More <i class="icon-chevron-down"></i></a>
						<div class="dropdown dropdown-small">
							<ul class="nav nav-dropdown">
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
								<li class="nav-header">Header</li>
								<li><a href="#">Item</a></li>
								<li><a href="#">Another item</a></li>
								<li class="nav-divider"></li>
								<li><a href="#">Separated item</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<h2>Tab</h2>
		<div class="margin">
			<ul class="tab col-6-12-medium">
				<li class="active"><a href="#">Tab One</a></li>
				<li><a href="#">Tab Two</a></li>
				<li><a href="#">Tab Three</a></li>
				<li data-dropdown="{mode:'click'}">
					<a href="#">More <i class="icon-chevron-down"></i></a>
					<div class="dropdown dropdown-small">
						<ul class="nav nav-dropdown">
							<li><a href="#">Item</a></li>
							<li><a href="#">Another item</a></li>
							<li class="nav-header">Header</li>
							<li><a href="#">Item</a></li>
							<li><a href="#">Another item</a></li>
							<li class="nav-divider"></li>
							<li><a href="#">Separated item</a></li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
	</div>
