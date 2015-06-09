<hr>
					<h2 id="switcher-with-navs"><a href="#switcher-with-navs" class="link-reset">Switcher with navs</a></h2>
					<p>To apply the switcher to the <a href="<?php echo get_url('core/nav'); ?>">Nav component</a>, add the data attribute to the nav <code>&lt;ul&gt;</code>. Use the <a href="<?php echo get_url('core/grid'); ?>">Grid component</a> to arrange nav and content in a grid layout.</p>
					<?php
					$text = '<div class="row" data-row-margin>
	<div class="col-3-12-medium">
		<ul class="nav nav-side" data-switcher="{connect:\'#nav-content\'}">
			<li class="active"><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
		</ul>
	</div>
	<div class="col-9-12-medium">
		<ul id="nav-content" class="switcher">
			<li class="active">Hello!</li>
			<li>Hello again!</li>
			<li>World!</li>
		</ul>
	</div>
</div>';
						print_example($text);
					?>