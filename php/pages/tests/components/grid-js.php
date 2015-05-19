
	<script src="../../dist/js/components/grid.js"></script>
	<style>
		.panel {
			padding: 10px;
			text-align: center;
		}

		:nth-child(8n-7) > .panel {
			height: 100px;
			background: rgba(0, 0, 0, 0.1);
		}

		:nth-child(8n-6) > .panel {
			height: 120px;
			background: rgba(0, 0, 0, 0.15);
		}

		:nth-child(8n-5) > .panel {
			height: 180px;
			background: rgba(0, 0, 0, 0.2);
		}

		:nth-child(8n-4) > .panel {
			height: 140px;
			background: rgba(0, 0, 0, 0.25);
		}

		:nth-child(8n-3) > .panel {
			height: 200px;
			background: rgba(0, 0, 0, 0.3);
		}

		:nth-child(8n-2) > .panel {
			height: 150px;
			background: rgba(0, 0, 0, 0.35);
		}

		:nth-child(8n-1) > .panel {
			height: 170px;
			background: rgba(0, 0, 0, 0.40);
		}

		:nth-child(8n) > .panel {
			height: 130px;
			background: rgba(0, 0, 0, 0.45);
		}

		.equal-height > * > .panel {
			height: 150px;
		}
	</style>
	<script>
		// Event logging
		jQuery(function($) {
			var count = 0;
			$('[data-grid]:first').on('beforeupdate.uk.grid afterupdate.uk.grid', function(e) {
				console.log((count++), e.type);
			});
		});
	</script>
	<div class="container container-center">
		<h1>Dynamic Grid</h1>
		<h2>Different Heights and Gutter</h2>
		<div class="row-2-cols-small row-3-cols-medium row-4-cols-large" data-grid="{gutter: 20}">

			<div>
				<div class="panel">A</div>
			</div>

			<div>
				<div class="panel">B</div>
			</div>

			<div>
				<div class="panel">C</div>
			</div>

			<div>
				<div class="panel">D</div>
			</div>

			<div>
				<div class="panel">E</div>
			</div>

			<div>
				<div class="panel">F</div>
			</div>

			<div>
				<div class="panel">G</div>
			</div>

			<div>
				<div class="panel">H</div>
			</div>

		</div>

		<p class="text-muted">You can see the events fired by this grid in the console of your browser.</p>

		<h2>Different Widths and No Gutter</h2>

		<div class="equal-height" data-grid>

			<div class="col-6-12-small col-8-12-medium col-6-12-large">
				<div class="panel">A</div>
			</div>

			<div class="col-6-12-small col-4-12-medium col-3-12-large">
				<div class="panel">B</div>
			</div>

			<div class="col-1-12-small col-4-12-medium col-3-12-large">
				<div class="panel">C</div>
			</div>

			<div class="col-6-12-small col-4-12-medium col-3-12-large">
				<div class="panel">D</div>
			</div>

			<div class="col-6-12-small col-4-12-medium col-6-12-large">
				<div class="panel">E</div>
			</div>

			<div class="col-1-12-small col-4-12-medium col-3-12-large">
				<div class="panel">F</div>
			</div>

			<div class="col-6-12-small col-8-12-medium col-6-12-large">
				<div class="panel">G</div>
			</div>

			<div class="col-6-12-small col-4-12-medium col-6-12-large">
				<div class="panel">H</div>
			</div>

		</div>

		<h2>Filtering</h2>

		<ul id="filter" class="subnav">
			<li data-filter="test-a"><a href="#">Test A</a></li>
			<li data-filter="test-b"><a href="#">Test B</a></li>
			<li class="active" data-filter=""><a href="#">Reset</a></li>
		</ul>

		<div class="row-2-cols-small row-3-cols-medium row-4-cols-large" data-grid="{controls: '#filter'}">

			<div data-filter="test-a">
				<div class="panel">A 1</div>
			</div>

			<div data-filter="test-b">
				<div class="panel">B 2</div>
			</div>

			<div data-filter="test-a">
				<div class="panel">A 3</div>
			</div>

			<div data-filter="test-b">
				<div class="panel">B 4</div>
			</div>

			<div data-filter="test-b">
				<div class="panel">B 5</div>
			</div>

			<div data-filter="test-a">
				<div class="panel">A 6</div>
			</div>

			<div data-filter="test-b">
				<div class="panel">B 7</div>
			</div>

			<div data-filter="test-a">
				<div class="panel">A 8</div>
			</div>

		</div>

		<h2>Sorting</h2>

		<ul id="sort" class="subnav">
			<li class="active" data-sort="test"><a href="#">Character (Asc)</a></li>
			<li data-sort="test:desc"><a href="#">Character (Desc)</a></li>
			<li data-sort="test2"><a href="#">Number (Asc)</a></li>
			<li data-sort="test2:desc"><a href="#">Number (Desc)</a></li>
		</ul>

		<div class="row-2-cols-small row-3-cols-medium row-4-cols-large" data-grid="{controls: '#sort'}">

			<div data-test="a" data-test2="8">
				<div class="panel">A 8</div>
			</div>

			<div data-test="b" data-test2="7">
				<div class="panel">B 7</div>
			</div>

			<div data-test="c" data-test2="6">
				<div class="panel">C 6</div>
			</div>

			<div data-test="d" data-test2="1">
				<div class="panel">D 1</div>
			</div>

			<div data-test="e" data-test2="5">
				<div class="panel">E 5</div>
			</div>

			<div data-test="f" data-test2="3">
				<div class="panel">F 3</div>
			</div>

			<div data-test="g" data-test2="2">
				<div class="panel">G 2</div>
			</div>

			<div data-test="h" data-test2="4">
				<div class="panel">H 4</div>
			</div>

		</div>

	</div>
