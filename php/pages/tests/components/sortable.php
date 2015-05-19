
	<script src="../../dist/js/components/sortable.js"></script>
	<style>
		.test {
			height: 100px;
		}

		.test-item > * {
			display: block;
			padding: 5px 15px;
			background: #f0f0f0;
			color: #444;
		}
	</style>
	<div class="container container-center">
		<h1>Sortable</h1>
		<h2>Grid</h2>
		<ul class="sortable row row-5-col" data-sortable="{handleClass:'panel'}" data-row-margin>
			<li>
				<div class="panel panel-box test"><a href="http://www.getuikit.com">Test 1</a></div>
			</li>
			<li><a class="panel panel-box test" href="http://www.getuikit.com">Test 2</a></li>
			<li>
				<div class="panel panel-box test">Test 3</div>
			</li>
			<li>
				<div class="panel panel-box test">Test 4</div>
			</li>
			<li>
				<div class="panel panel-box test">Test 5</div>
			</li>
			<li>
				<div class="panel panel-box test">Test 6</div>
			</li>
			<li>
				<div class="panel panel-box test">Test 7</div>
			</li>
			<li>
				<div class="panel panel-box test">Test 8</div>
			</li>
			<li>
				<div class="panel panel-box test">Test 9</div>
			</li>
			<li>
				<div class="panel panel-box test">Test 10</div>
			</li>
			<li>
				<div class="panel panel-box test">Test 11</div>
			</li>
			<li>
				<div class="panel panel-box test">Test 12</div>
			</li>
		</ul>
		<h2>Stacked</h2>
		<div class="sortable margin" data-sortable>
			<div class="margin">
				<div class="panel panel-box">Test 1</div>
			</div>
			<div class="margin">
				<div class="panel panel-box">Test 2</div>
			</div>
			<div class="margin">
				<div class="panel panel-box">Test 3</div>
			</div>
			<div class="margin">
				<div class="panel panel-box">Test 4</div>
			</div>
			<div class="margin">
				<div class="panel panel-box">Test 5</div>
			</div>
		</div>
		<h2>Nav</h2>
		<div class="col-3-12-medium">
			<ul class="sortable nav nav-side" data-sortable="{dragCustomClass:'test-item'}">
				<li class="active"><a href="#">Active</a></li>
				<li><a href="#">Item</a></li>
				<li><a href="#">Item</a></li>
				<li><a href="#">Item</a></li>
				<li><a href="#">Item</a></li>
				<li><a href="#">Item</a></li>
				<li><a href="#">Item</a></li>
				<li><a href="#">Item</a></li>
				<li><a href="#">Item</a></li>
			</ul>
		</div>
	</div>
