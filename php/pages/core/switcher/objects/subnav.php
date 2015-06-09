<hr>
					<h2 id="switcher-with-subnav"><a href="#switcher-with-subnav" class="link-reset">Switcher with subnav</a></h2>
					<p>The switcher is easily applied to the <a href="sub<?php echo get_url('core/nav'); ?>">Subnav component</a>.</p>
					<?php
					$text = '<ul class="subnav subnav-pill" data-switcher="{connect:\'#subnav-pill-content-2\'}">
	<li class="active">
		<a href="#">Item</a></li>
	<li><a href="#">Item</a></li>
	<li><a href="#">Item</a></li>
</ul>
<ul id="subnav-pill-content-2" class="switcher">
	<li class="active">Hello!</li>
	<li>Hello again!</li>
	<li>World!</li>
</ul>';
						print_example($text);
					?>
