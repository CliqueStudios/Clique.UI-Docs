
	<style type="text/css">
		.flex:not(.grid) > * {
			padding: 10px;
			text-align: center;
		}
		.flex:not(.grid) >:nth-child(8n-7) {
			background: rgba(0, 0, 0, 0.1);
		}
		.flex:not(.grid) >:nth-child(8n-6) {
			background: rgba(0, 0, 0, 0.15);
		}
		.flex:not(.grid) >:nth-child(8n-5) {
			background: rgba(0, 0, 0, 0.2);
		}
		.flex:not(.grid) >:nth-child(8n-4) {
			background: rgba(0, 0, 0, 0.25);
		}
		.flex:not(.grid) >:nth-child(8n-3) {
			background: rgba(0, 0, 0, 0.3);
		}
		.flex:not(.grid) >:nth-child(8n-2) {
			background: rgba(0, 0, 0, 0.35);
		}
		.flex:not(.grid) >:nth-child(8n-1) {
			background: rgba(0, 0, 0, 0.40);
		}
		.flex:not(.grid) >:nth-child(8n) {
			background: rgba(0, 0, 0, 0.45);
		}
		.test {
			height: 300px;
			background: #f0f0f0;
		}
		.panel {
			padding: 10px;
			text-align: center;
		}
		.grid >:nth-child(8n-7) > .panel {
			background: rgba(0, 0, 0, 0.1);
		}
		.grid >:nth-child(8n-6) > .panel {
			background: rgba(0, 0, 0, 0.15);
		}
		.grid >:nth-child(8n-5) > .panel {
			background: rgba(0, 0, 0, 0.2);
		}
		.grid >:nth-child(8n-4) > .panel {
			background: rgba(0, 0, 0, 0.25);
		}
		.grid >:nth-child(8n-3) > .panel {
			background: rgba(0, 0, 0, 0.3);
		}
		.grid >:nth-child(8n-2) > .panel {
			background: rgba(0, 0, 0, 0.35);
		}
		.grid >:nth-child(8n-1) > .panel {
			background: rgba(0, 0, 0, 0.40);
		}
		.grid >:nth-child(8n) > .panel {
			background: rgba(0, 0, 0, 0.45);
		}
	</style>
	<div class="container container-center">
		<h1>Flex</h1>
		<h2>Alignment and Justify</h2>
		<h3>Stretch / Left (Default)</h3>
		<div class="flex">
			<div class="col-3-12">1-4</div>
			<div class="col-3-12">1-4
				<br>1-4</div>
			<div class="col-3-12">1-4
				<br>1-4
				<br>1-4</div>
		</div>
		<h3>Middle / Center</h3>
		<div class="flex flex-middle flex-center">
			<div class="col-3-12">1-4</div>
			<div class="col-3-12">1-4
				<br>1-4</div>
			<div class="col-3-12">1-4
				<br>1-4
				<br>1-4</div>
		</div>
		<h3>Bottom / Right</h3>
		<div class="flex flex-bottom flex-right">
			<div class="col-3-12">1-4</div>
			<div class="col-3-12">1-4
				<br>1-4</div>
			<div class="col-3-12">1-4
				<br>1-4
				<br>1-4</div>
		</div>
		<h3>Top / Space-between</h3>
		<div class="flex flex-top flex-space-between">
			<div class="col-3-12">1-4</div>
			<div class="col-3-12">1-4
				<br>1-4</div>
			<div class="col-3-12">1-4
				<br>1-4
				<br>1-4</div>
		</div>
		<h3>Stretch / Space-around</h3>
		<div class="flex flex-space-around">
			<div class="col-3-12">1-4</div>
			<div class="col-3-12">1-4
				<br>1-4</div>
			<div class="col-3-12">1-4
				<br>1-4
				<br>1-4</div>
		</div>
		<h2>Wrap and Alignment</h2>
		<h3>Stretch</h3>
		<div class="flex flex-wrap test">
			<div class="col-4-12">1-3</div>
			<div class="col-6-12">1-2
				<br>1-2</div>
			<div class="col-4-12">1-3
				<br>1-3
				<br>1-3</div>
			<div class="col-4-12">1-3</div>
			<div class="col-6-12">1-2
				<br>1-2</div>
			<div class="col-4-12">1-3
				<br>1-3
				<br>1-3</div>
		</div>
		<h3>Top</h3>
		<div class="flex flex-wrap flex-wrap-top test">
			<div class="col-4-12">1-3</div>
			<div class="col-6-12">1-2
				<br>1-2</div>
			<div class="col-4-12">1-3
				<br>1-3
				<br>1-3</div>
			<div class="col-4-12">1-3</div>
			<div class="col-6-12">1-2
				<br>1-2</div>
			<div class="col-4-12">1-3
				<br>1-3
				<br>1-3</div>
		</div>
		<h3>Middle</h3>
		<div class="flex flex-wrap flex-wrap-middle test">
			<div class="col-4-12">1-3</div>
			<div class="col-6-12">1-2
				<br>1-2</div>
			<div class="col-4-12">1-3
				<br>1-3
				<br>1-3</div>
			<div class="col-4-12">1-3</div>
			<div class="col-6-12">1-2
				<br>1-2</div>
			<div class="col-4-12">1-3
				<br>1-3
				<br>1-3</div>
		</div>
		<h3>Bottom</h3>
		<div class="flex flex-wrap flex-wrap-bottom test">
			<div class="col-4-12">1-3</div>
			<div class="col-6-12">1-2
				<br>1-2</div>
			<div class="col-4-12">1-3
				<br>1-3
				<br>1-3</div>
			<div class="col-4-12">1-3</div>
			<div class="col-6-12">1-2
				<br>1-2</div>
			<div class="col-4-12">1-3
				<br>1-3
				<br>1-3</div>
		</div>
		<h3>Space-between</h3>
		<div class="flex flex-wrap flex-wrap-space-between test">
			<div class="col-4-12">1-3</div>
			<div class="col-6-12">1-2
				<br>1-2</div>
			<div class="col-4-12">1-3
				<br>1-3
				<br>1-3</div>
			<div class="col-4-12">1-3</div>
			<div class="col-6-12">1-2
				<br>1-2</div>
			<div class="col-4-12">1-3
				<br>1-3
				<br>1-3</div>
		</div>
		<h3>Space-around</h3>
		<div class="flex flex-wrap flex-wrap-space-around test">
			<div class="col-4-12">1-3</div>
			<div class="col-6-12">1-2
				<br>1-2</div>
			<div class="col-4-12">1-3
				<br>1-3
				<br>1-3</div>
			<div class="col-4-12">1-3</div>
			<div class="col-6-12">1-2
				<br>1-2</div>
			<div class="col-4-12">1-3
				<br>1-3
				<br>1-3</div>
		</div>
		<h2>Inline Flex</h2>
		<div class="text-center">
			<div class="flex flex-inline">
				<div>1-4</div>
				<div>1-4
					<br>1-4</div>
				<div>1-4
					<br>1-4
					<br>1-4</div>
			</div>
		</div>
		<h2>Order</h2>
		<div class="flex">
			<div class="col-4-12">1</div>
			<div class="col-4-12">2</div>
			<div class="col-4-12 flex-order-first">3</div>
		</div>
		<div class="flex">
			<div class="col-4-12 flex-order-last">1</div>
			<div class="col-4-12">2</div>
			<div class="col-4-12">3</div>
		</div>
		<div class="flex">
			<div class="col-4-12 flex-order-last">1</div>
			<div class="col-4-12">2</div>
			<div class="col-4-12 flex-order-first">3</div>
		</div>
		<h2>Used with Grid</h2>
		<div class="row" data-row-margin>
			<div class="col-4-12-medium">
				<div class="panel">
					<img src="<?php echo get_image('placeholder.jpg'); ?>" style="width:400px;" alt="">
				</div>
			</div>
			<div class="col-8-12-medium flex flex-middle">
				<div class="panel flex-item-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
			</div>
		</div>
	</div>
