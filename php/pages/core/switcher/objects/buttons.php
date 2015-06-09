<hr>
					<h2 id="switcher-with-buttons"><a href="#switcher-with-buttons" class="link-reset">Switcher with buttons</a></h2>
					<p>The switcher can also be applied to buttons or button groups from the <a href="<?php echo get_url('core/button'); ?>">Button component</a>. Just add the switcher data attribute to a <code>&lt;div&gt;</code> element around a group of buttons or to the element with the <code>.button-group</code> class.</p>
					<?php
					$text = '<div class="margin grid" data-row-margin>
	<div class="col-6-12-medium">
		<div data-switcher="{connect:\'#button-content\'}">
			<a class="button" href="#">Link</a>
			<button class="button">Button</button>
			<button class="button">Button</button>
		</div>
		<ul id="button-content" class="switcher margin">
			<li class="active">Hello!</li>
			<li>Hello again!</li>
			<li>World!</li>
		</ul>
	</div>
	<div class="col-6-12-medium">
		<div class="button-group" data-switcher="{connect:\'#button-group-content\'}">
			<a class="button" href="#">Link</a>
			<button class="button">Button</button>
			<button class="button">Button</button>
		</div>
		<ul id="button-group-content" class="switcher margin">
			<li class="active">Hello!</li>
			<li>Hello again!</li>
			<li>World!</li>
		</ul>
	</div>
</div>';
						print_example($text);
					?>