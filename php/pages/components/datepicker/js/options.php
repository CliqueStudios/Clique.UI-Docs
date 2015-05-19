<h3>Options</h3>
<p>This is an example of how to set options via attribute:</p>
<pre><code>data-datepicker=&quot;{weekstart:0, format:'MM/DD/YYYY'}&quot;</code></pre>
<div class="overflow-container">
	<table class="table-striped text-nowrap">
		<thead>
			<tr>
				<th>Option</th>
				<th>Possible value</th>
				<th>Default</th>
				<th>Description</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><code>weekstart</code></td>
				<td>integer (0..6)</td>
				<td>1</td>
				<td>Start of the week</td>
			</tr>
			<tr>
				<td><code>i18n</code></td>
				<td>JSON object</td>
				<td>{ months:['January',...], weekdays:['Sun',..,'Sat'] }</td>
				<td>Language string definitions</td>
			</tr>
			<tr>
				<td><code>format</code></td>
				<td>any combination of DD, MM and YY</td>
				<td>'MM/DD/YYYY'</td>
				<td>Date format string</td>
			</tr>
			<tr>
				<td><code>offsettop</code></td>
				<td>integer</td>
				<td>5</td>
				<td>Offset to the input value</td>
			</tr>
		</tbody>
	</table>
</div>
<hr>
