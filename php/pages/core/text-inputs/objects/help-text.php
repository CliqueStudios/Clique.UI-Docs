<hr>
					<h3>Help text</h3>
					<p>Use the <code>.form-help-inline</code> or <code>.form-help-block</code> class to add inline and block level help text for the controls.</p>
					<?php
					$text = '<div class="form-row">
	<input type="text" placeholder="Text input"> <span class="form-help-inline">The <code>.form-help-inline</code> class creates spacing to the left.</span>
</div>
<div class="form-row">
	<textarea placeholder="Textarea"></textarea>
	<p class="form-help-block">The <code>.form-help-block</code> class creates an associated paragraph.</p>
</div>';
						print_example($text);
					?>