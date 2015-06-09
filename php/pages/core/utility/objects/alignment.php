<hr>
<h3>Alignment of images and objects</h3>
<p>Align images or other elements with spacing between the text and the element.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#alignment-tabs'}">
			<li><a href="#">Classes</a></li>
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="alignment-tabs" class="switcher margin">
	<li>
		<div class="overflow-container">
			<table class="table-striped">
				<thead>
					<tr>
						<th>Class</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><code>.align-left</code></td>
						<td>Floats the element to the left and creates right and bottom margin.</td>
					</tr>
					<tr>
						<td><code>.align-right</code></td>
						<td>Floats the element to the right and creates left and bottom margin.</td>
					</tr>
					<tr>
						<td><code>.align-center</code></td>
						<td>Centers the element and creates bottom margin.</td>
					</tr>
					<tr>
						<td><code>.align-left-medium</code></td>
						<td>Only affects device widths of <em>768px</em> and higher.</td>
					</tr>
					<tr>
						<td><code>.align-right-medium</code></td>
						<td>Only affects device widths of <em>768px</em> and higher.</td>
					</tr>
				</tbody>
			</table>
		</div>
	</li>
	<li>
		<p class="clearfix">
			<img class="align-right-medium" src="<?php echo get_image('placeholder_400x200.svg'); ?>" width="400" height="200" alt="">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
		<p class="clearfix">
			<img class="align-left-medium" src="<?php echo get_image('placeholder_400x200.svg'); ?>" width="400" height="200" alt="">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
	</li>
	<li>
		<pre><code>&lt;p class="clearfix"&gt;
    &lt;img class="align-right-medium" src="sample.jpg"&gt;
    ...
&lt;/p&gt;

&lt;p class="clearfix"&gt;
    &lt;img class="align-left" src="sample.jpg"&gt;
    ...
&lt;/p&gt;</code></pre>
	</li>
</ul>
