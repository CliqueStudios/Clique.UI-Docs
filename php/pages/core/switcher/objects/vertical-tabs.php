<hr>
					<h3>Vertical tab</h3>
					<p>Use the <a href="<?php echo get_url('core/grid'); ?>">Grid component</a> to display content correctly with a vertical tabbed navigation.</p>
					<?php
					$text = '<div class="row" data-row-margin>
	<div class="col-6-12-medium">
		<div class="row">
			<div class="col-6-12-medium">
				<ul class="tab tab-left" data-tab="{connect:\'#tab-left-content\'}">
					<li class="active"><a href="#">Tab</a></li>
					<li><a href="#">Tab</a></li>
					<li><a href="#">Tab</a></li>
				</ul>
			</div>
			<div class="col-6-12-medium">
				<ul id="tab-left-content" class="switcher">
					<li class="active">Hello!</li>
					<li>Hello again!</li>
					<li>World!</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-6-12-medium">
		<div class="row" data-row-margin>
			<div class="col-6-12-medium push-6-12">
				<ul class="tab tab-right" data-tab="{connect:\'#tab-right-content\'}">
					<li class="active"><a href="#">Tab</a></li>
					<li><a href="#">Tab</a></li>
					<li><a href="#">Tab</a></li>
				</ul>
			</div>
			<div class="col-6-12-medium pull-6-12">
				<ul id="tab-right-content" class="switcher">
					<li class="active">Hello!</li>
					<li>Hello again!</li>
					<li>World!</li>
				</ul>
			</div>
		</div>
	</div>
</div>';
						print_example($text);
					?>