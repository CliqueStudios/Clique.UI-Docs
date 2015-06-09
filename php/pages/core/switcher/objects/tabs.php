<hr>
					<h2 id="switcher-with-tabs"><a href="#switcher-with-tabs" class="link-reset">Switcher with tabs</a></h2>
					<p>As an exception to the rule, add the <code>data-tab="{connect:'#ID'}"</code> attribute, using the parameter "tab" instead of "switcher", to the tabbed navigation to combine the switcher with the <a href="<?php echo get_url('core/tab'); ?>">Tab component</a>.</p>
					<?php
					$text = '<div class="margin grid" data-row-margin>
	<div class="col-6-12-medium">
		<ul class="tab" data-tab="{connect:\'#tab-content\'}">
			<li class="active"><a href="#">Tab</a></li>
			<li><a href="#">Tab</a></li>
			<li><a href="#">Tab</a></li>
		</ul>
		<ul id="tab-content" class="switcher margin">
			<li class="active">Hello!</li>
			<li>Hello again!</li>
			<li>World!</li>
		</ul>
	</div>
	<div class="col-6-12-medium">
		<ul id="tab-bottom-content" class="switcher margin">
			<li class="active">Hello!</li>
			<li>Hello again!</li>
			<li>World!</li>
		</ul>
		<ul class="tab tab-bottom" data-tab="{connect:\'#tab-bottom-content\'}">
			<li class="active"><a href="#">Tab</a></li>
			<li><a href="#">Tab</a></li>
			<li><a href="#">Tab</a></li>
		</ul>
	</div>
</div>';
						print_example($text);
					?>
					<p><span class="badge">NOTE</span> When using the tab bottom modifier, navigation and content need to be arranged in reversed order, so that the content appears above the tabs.</p>