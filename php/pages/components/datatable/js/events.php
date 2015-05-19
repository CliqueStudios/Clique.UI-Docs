<h3>Events</h3>
<div class="overflow-container">
	<table class="table-striped">
		<thead>
			<tr>
				<th>Name</th>
				<th>Parameters</th>
				<th>Description</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="text-nowrap"><code>showpage.datatable.clique</code></td>
				<td>event, pageIndex</td>
				<td>The bound event listener to show a page at a given index.</td>
			</tr>
			<tr>
				<td class="text-nowrap"><code>didshowpage.datatable.clique</code></td>
				<td>event, currentPage, startingIndex, endingIndex, tableLength</td>
				<td>Triggered after a new page has been displayed</td>
			</tr>
			<tr>
				<td class="text-nowrap"><code>next.datatable.clique</code></td>
				<td>event, active, toggle, content</td>
				<td>Bound event listener to trigger the method to show the next page</td>
			</tr>
			<tr>
				<td class="text-nowrap"><code>previous.datatable.clique</code></td>
				<td>event, active, toggle, content</td>
				<td>Bound event listener to trigger the method to show the previous page</td>
			</tr>
			<tr>
				<td class="text-nowrap"><code>sort.datatable.clique</code></td>
				<td>event, columnIndex, sortOrder</td>
				<td>Bound event listener to sort the table rows by <code>columnIndex</code> and <code>sortOrder</code></td>
			</tr>
		</tbody>
	</table>
</div>
