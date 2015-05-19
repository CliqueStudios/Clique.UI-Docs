<h3>Options</h3>
<div class="overflow-container">
	<table class="table-striped">
		<thead>
			<tr class="text-nowrap">
				<th>Option</th>
				<th>Possible value</th>
				<th>Default</th>
				<th>Description</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><code>paginationWrapper</code></td>
				<td class="text-nowrap">selector (string)</td>
				<td>'.datatable-pagination'</td>
				<td>Selector to identify the pagination wrapper element</td>
			</tr>
			<tr>
				<td><code>perPage</code></td>
				<td class="text-nowrap">int</td>
				<td>10</td>
				<td>Number of rows to display per page</td>
			</tr>
			<tr>
				<td><code>infoWrapper</code></td>
				<td class="text-nowrap">selector (string)</td>
				<td>'.datatable-info'</td>
				<td>Selector to identify the table information display wrapper</td>
			</tr>
			<tr>
				<td><code>infoString</code></td>
				<td class="text-nowrap">string</td>
				<td>'Showing items #{start} through #{end} of #{length}'</td>
				<td>
					Template to display the table's information. Possible replace-values are:
					<ul>
						<li><code>#{current}</code>: Indicates the current page</li>
						<li><code>#{start}</code>: Index of the first row of the current page</li>
						<li><code>#{end}</code>: Index of the last of the current page</li>
						<li><code>#{length}</code>: Total number of rows</li>
					</ul>
				</td>
			</tr>
			<tr>
				<td><code>sortColumn</code></td>
				<td class="text-nowrap">int</td>
				<td>0</td>
				<td>The column to initially sort data by</td>
			</tr>
			<tr>
				<td><code>sortOrder</code></td>
				<td class="text-nowrap">string</td>
				<td>'asc'</td>
				<td>The initial sort order. Can be <code>'asc'</code> to sort in ascending order, or <code>'desc'</code> to sort in descending order.</td>
			</tr>
		</tbody>
	</table>
</div>
