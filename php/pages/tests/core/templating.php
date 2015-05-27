<div class="container container-center">
	<div class="row">
		<div class="col-6-12">
			<strong>Data</strong>
			<textarea id="data" class="col-12-12" style="min-height:200px;">{"bool":1, "list":["hello","world"], "set":{"test":123}}</textarea>
			<strong>Template</strong>
			<textarea id="template" class="col-12-12" style="min-height:200px;">{{#bool}} bool is true {{/bool}}
{{^bool}} bool is false {{/bool}}
{{~list}}
   {{$i+1}} {{$item}}
{{/list}}
{{:set}}
   {{$key}} {{$val}}
{{/set}}</textarea>
			<button id="compile-template">Compile</button>
		</div>
		<div class="col-6-12">
			<strong>Result</strong>
			<pre><code id="result"></code></pre>
		</div>
	</div>
</div>
