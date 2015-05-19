<h3>Callback Events</h3>
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
				<td><code>init.clique.switch</code></td>
				<td>event</td>
				<td>Triggered when a switch is fully intiialized - all HTML has been built and event listeners bound.</td>
			</tr>
			<tr>
				<td><code>willswitch.clique.switch</code></td>
				<td>event</td>
				<td>Fires when a user has click or dragged the switch, but before the element's state has changed.</td>
			</tr>
			<tr>
				<td><code>didswitch.clique.switch</code></td>
				<td>event, newState</td>
				<td>Fires after the transition has completed and state has changed.</td>
			</tr>
		</tbody>
	</table>
</div>
