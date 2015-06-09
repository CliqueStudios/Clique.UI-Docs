
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Validation States</h1>
					<p class="article-lead">Convey submission states with simple, extendible style</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Update</a></h2>
					<p>Add the <code>.form-danger</code> or <code>.form-success</code> class to a form control to notify the user whether or not the value is validated.</p>
					<?php
					$text = '<!-- .form-danger -->
<div class="form-row">
	<label>Form Danger</label><br>
	<input type="text" value="Text" class="form-danger">
	<input type="password" value="Password" class="form-danger">
	<label>
		<input type="checkbox" class="form-danger"> Checkbox
	</label>
	<label>
		<input type="radio" class="form-danger"> Radio
	</label>
	<select class="form-danger">
		<option>Option 1</option>
		<option>Option 2</option>
		<option>Option 3</option>
	</select>
</div>

<!-- .form-success -->
<div class="form-row">
	<label>Form Success</label><br>
	<input type="text" value="Text" class="form-success">
	<input type="password" value="Password" class="form-success">
	<label>
		<input type="checkbox" class="form-success"> Checkbox
	</label>
	<label>
		<input type="radio" class="form-success"> Radio
	</label>
	<select class="form-success">
		<option>Option 1</option>
		<option>Option 2</option>
		<option>Option 3</option>
	</select>
</div>';
						print_example($text);
					?>
					<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
