<hr>
<h3>Responsive visibility</h3>
<p>You can show or hide content on specific viewport widths. Breakpoints are set by LESS variables and can easily be modified. Since the line between different device sizes keeps blurring, class names are kept general and do not refer to particular devices.</p>
<div class="overflow-container">
	<table class="table-line text-nowrap">
		<thead>
			<tr>
				<th class="col-3-12">Class</th>
				<th class="col-3-12">Small
					<br>
					<small>(Phones)</small>
					<br>
					<small style="font-weight: normal;">up to 767</small>
				</th>
				<th class="col-3-12">Medium
					<br>
					<small>(Tablets)</small>
					<br>
					<small style="font-weight: normal;">768 to 959</small>
				</th>
				<th class="col-3-12">Large
					<br>
					<small>(Desktops)</small>
					<br>
					<small style="font-weight: normal;">960 and larger</small>
				</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><code>.visible-small</code></td>
				<td class="text-success">Visible</td>
				<td class="text-muted">Hidden</td>
				<td class="text-muted">Hidden</td>
			</tr>
			<tr>
				<td><code>.visible-medium</code></td>
				<td class="text-muted">Hidden</td>
				<td class="text-success">Visible</td>
				<td class="text-muted">Hidden</td>
			</tr>
			<tr>
				<td><code>.visible-large</code></td>
				<td class="text-muted">Hidden</td>
				<td class="text-muted">Hidden</td>
				<td class="text-success">Visible</td>
			</tr>
			<tr class="sep">
				<td><code>.hidden-small</code></td>
				<td class="text-muted">Hidden</td>
				<td class="text-success">Visible</td>
				<td class="text-success">Visible</td>
			</tr>
			<tr>
				<td><code>.hidden-medium</code></td>
				<td class="text-success">Visible</td>
				<td class="text-muted">Hidden</td>
				<td class="text-success">Visible</td>
			</tr>
			<tr>
				<td><code>.hidden-large</code></td>
				<td class="text-success">Visible</td>
				<td class="text-success">Visible</td>
				<td class="text-muted">Hidden</td>
			</tr>
		</tbody>
	</table>
</div>
