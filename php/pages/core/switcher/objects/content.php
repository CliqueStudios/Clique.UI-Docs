<hr>
					<h3 id="switcher-content-switch"><a href="#switcher-content-switch" class="link-reset">Switch items from within content</a></h3>
					<p>In some cases you want to switch to another content section from within the active content. This is possible using the <code>data-switcher-item</code> attribute. To target the items, you need to set the data attribute to the number of the respective content item.</p>
					<?php
					$text = '<div class="row" data-row-margin>
	<div class="col-3-12-medium">
		<ul class="subnav subnav-pill" data-switcher="{connect:\'#switch-from-content\'}">
			<li class="active"><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
		</ul>
	</div>
	<div class="col-9-12-medium">
		<ul id="switch-from-content" class="switcher">
			<li class="active">Hello! <a href="#" data-switcher-item="next">Switch to the next content section</a></li>
			<li>Hello again! <a href="#" data-switcher-item="2">Switch to third content section 3</a></li>
			<li>World! <a href="#" data-switcher-item="previous">Switch to the previous content section</a></li>
		</ul>
	</div>
</div>';
						print_example($text);
					?>
					<p>Setting the attribute to <code>next</code> and <code>previous</code> will switch to the adjacent items.</p>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;li&gt; ... &lt;a href="#" data-switcher-item="next"&gt;...&lt;/a&gt;&lt;/li&gt;
&lt;li&gt; ... &lt;a href="#" data-switcher-item="previous"&gt;...&lt;/a&gt;&lt;/li&gt;</code></pre>