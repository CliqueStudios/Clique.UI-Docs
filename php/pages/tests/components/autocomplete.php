
	<script src="../../dist/js/components/autocomplete.js"></script>

	<div class="container container-center">

		<h1>Autocomplete</h1>

		<p>Type: Hamburg, New York, Moscow or Amsterdam</p>

		<h2>Sources</h2>

		<h3>Array</h3>

		<div class="autocomplete form" data-autocomplete="{source:[{value:'Hamburg'},{value:'New York'},{value:'Moscow'},{value:'Amsterdam'}]}">
			<input type="text">
		</div>

		<h3>Ajax</h3>

		<div class="autocomplete form" data-autocomplete="{source:'_autocomplete.json'}">
			<input type="text">
		</div>

		<h2>Custom Templates</h2>

		<h3>Custom</h3>

		<div class="autocomplete form" data-autocomplete="{source:'_autocomplete.json'}">
			<input type="text">
			<script type="text/autocomplete">
				<ul class="nav nav-autocomplete autocomplete-results">
					{{~items}}
					<li data-value="{{ $item.value }}">
						<a>
                                {{ $item.title }}
                                <div>{{{ $item.text }}}</div>
                            </a>
					</li>
					{{/items}}
				</ul>
			</script>
		</div>

	</div>
