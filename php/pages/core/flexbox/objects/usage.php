<hr>
<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
<p>To apply this component, just add the <code>.flex</code> class to a <code>&lt;div&gt;</code> element. This will create the flex container. By default, all flex items will be aligned to the left and equally matched in height and width.</p>
<p><span class="badge">NOTE</span> No style is applied to elements using the Flexbox component. In our examples, we include classes from the <a href="<?php echo get_url('core/panel'); ?>">Panel</a> component and additional style applied to highlight the wrapper and the child elements.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#flex-tabs'}">
			<li><a href="#">Classes</a></li>
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="flex-tabs" class="switcher margin">
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
						<td><code>.flex</code></td>
						<td>Applies <code>display: flex;</code> to an element. Along with <code>.flex-inline</code>, the immediate children of this class are given a flex value of <code>flex: 0 1 auto;</code>.</td>
					</tr>
					<tr>
						<td><code>.flex-inline</code></td>
						<td>Applies <code>display: inline-flex;</code> to an element</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
			<div class="col">
				<h3>Modifiers</h3>
			</div>
		</div>
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
						<td><code>.flex-top</code></td>
						<td>Vertically aligns all children of the component to the top of the element.</td>
					</tr>
					<tr>
						<td><code>.flex-middle</code></td>
						<td>Vertically aligns all children of the component to the middle of the element.</td>
					</tr>
					<tr>
						<td><code>.flex-bottom</code></td>
						<td>Vertically aligns all children of the component to the bottom of the element.</td>
					</tr>
					<tr>
						<td><code>.flex-left</code></td>
						<td>Horizontally aligns all children of the component to the beginning (left side) of the element.</td>
					</tr>
					<tr>
						<td><code>.flex-center</code></td>
						<td>Horizontally aligns all children of the component to the center of the element.</td>
					</tr>
					<tr>
						<td><code>.flex-right</code></td>
						<td>Horizontally aligns all children of the component to the end (right side) of the element.</td>
					</tr>
					<tr>
						<td><code>.flex-space-around</code></td>
						<td>Child items are spaced evenly within the element, with spacing applied before and after the element.</td>
					</tr>
					<tr>
						<td><code>.flex-space-between</code></td>
						<td>Child items are spaced evenly in the element and all space is removed before the first element and after the last element.</td>
					</tr>
					<tr>
						<td><code>.flex-row</code></td>
						<td>Items are aligned horizontally in a row.</td>
					</tr>
					<tr>
						<td><code>.flex-row-reverse</code></td>
						<td>Items are aligned horizontally in a row, but displayed in the reverse order in which they are interpreted in the DOM.</td>
					</tr>
					<tr>
						<td><code>.flex-column</code></td>
						<td>Items are aligned vertically in a column.</td>
					</tr>
					<tr>
						<td><code>.flex-column-reverse</code></td>
						<td>Items are aligned vertically in a clumn, but displayed in the reverse order in which they are interpreted in the DOM.</td>
					</tr>
					<tr>
						<td><code>.flex-wrap</code></td>
						<td>Items can wrap onto a new line if necessary (by default, flex items <em>do no</em> wrap).</td>
					</tr>
					<tr>
						<td><code>.flex-wrap-reverse</code></td>
						<td>Items can wrap onto a new line if necessary, but in the reverse order in which they are interpreted in the DOM.</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
			<div class="col">
				<h3>Sub Objects</h3>
			</div>
		</div>
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
						<td><code>.order-first</code></td>
						<td>When added to an immediate child of a <code>.flex</code> or <code>.flex-inline</code> element, this class displays the element first in the order.</td>
					</tr>
					<tr>
						<td><code>.order-last</code></td>
						<td>Displays the order last in the <code>.flex</code> or <code>.flex-inline</code> order.</td>
					</tr>
					<tr>
						<td><code>.item-grow</code></td>
						<td>Applies the css <code>flex: 1 0 100%;</code> to the element.</td>
					</tr>
					<tr>
						<td><code>.item-shrink</code></td>
						<td>Applies the css <code>flex: 0 1 auto;</code> - the default flex value - to the element.</td>
					</tr>
				</tbody>
			</table>
		</div>
	</li>
	<li>
		<div class="docs-flex-example">
			<div class="row">
			<?php
				$classes = array(
					'flex',
					'flex-inline',
					'flex flex-top',
					'flex flex-middle',
					'flex flex-bottom',
					'flex flex-left',
					'flex flex-center',
					'flex flex-right',
					'flex flex-space-around',
					'flex flex-space-between',
					'flex flex-row',
					'flex flex-row-reverse',
					'flex flex-column',
					'flex flex-column-reverse'
				);
				$three_cols = array(
					'flex flex-top',
					'flex flex-middle',
					'flex flex-bottom',
					'flex flex-left',
					'flex flex-center',
					'flex flex-right',
				);
				foreach($classes as $class) {
					$display_class = '.' . str_replace(' ', ' .', $class);
					$wrap = 'col-6-12-medium';
					if(in_array($class, $three_cols)) {
						$wrap = 'col-4-12-medium';
					}
					?>
					<div class="<?php echo $wrap; ?>">
						<p><code><?php echo $display_class; ?></code></p>
						<div class="docs-panel-row docs-flex-row">
							<div class="<?php echo $class; ?>">
								<div class="col">
									<div class="panel panel-box" style="height:125px;">Item 1</div>
								</div>
								<div class="col">
									<div class="panel panel-box" style="height:100px;">Item 2</div>
								</div>
								<div class="col">
									<div class="panel panel-box" style="height:75px;">Item 3</div>
								</div>
							</div>
						</div>
					</div>
					<?php
				}
			?>
			</div>
		</div>
	</li>
	<li>
		<pre><code><?php
				foreach($classes as $i => $class) {
					$display_class = '.' . str_replace(' ', ' .', $class);
					$last = $i == count($classes) - 1 ? "\n" : "\n\n";

					echo '&lt;div class="' . $class . '"&gt;' . "\n";
						echo "\t" . '...' . "\n";
					echo '&lt;/div&gt;' . $last;
				}
			?></code></pre>
	</li>
</ul>
