<hr>
					<h2 id="control-modifiers"><a href="#control-modifiers" class="link-reset">Control modifiers</a></h2>
					<h3>Size modifiers</h3>
					<p>Add the <code>.form-large</code> or <code>.form-small</code> class to an <code>&lt;input&gt;</code>, <code>&lt;select&gt;</code> or <code>&lt;textarea&gt;</code> element to make it smaller or larger.</p>
					<?php
					$text = '<p><input type="text" class="form-large" placeholder=".form-large"></p>
<p><input type="text" placeholder="Default"></p>
<p><input type="text" class="form-small" placeholder=".form-small"></p>';
						print_example($text, array('remove' => 'p'));
					?>