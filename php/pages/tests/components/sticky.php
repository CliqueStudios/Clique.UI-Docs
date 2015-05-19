
	<script src="../../dist/js/components/sticky.js"></script>
	<div class="container container-center" style="height: 3500px;">
		<h1>Sticky</h1>
		<div class="col-3-12">
			<p>Margin before sticky</p>
			<div class="margin" data-sticky>Stick at the top</div>
			<p>Margin after sticky</p>
		</div>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<div class="col-4-12">
			<div class="panel panel-box" data-sticky="{top:100}">Stick 100px below the top</div>
		</div>
		<div class="margin grid">
			<div class="col-6-12">
				<div class="panel panel-box panel-box-primary" style="height:300px;">
					<div class="panel panel-box" data-sticky="{boundary:true}">Sticky bound to parent container</div>
				</div>
			</div>
			<div class="col-6-12">
				<div class="panel panel-box panel-box-primary" style="height:300px;">
					<div class="panel panel-box" data-sticky="{boundary:'#test'}">Sticky bound to next paragraph</div>
				</div>
			</div>
		</div>
		<p id="test">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<div class="col-6-12">
			<div class="panel panel-box panel-box-primary" data-sticky="{top:-200, animation: 'animation-slide-top', media: 640}">Stick at the top but only after 200px scrolling and min. device width of 640px</div>
		</div>
	</div>
