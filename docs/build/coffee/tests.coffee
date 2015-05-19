
do(_c = Clique)->

	$ = _c.$

	escape = (html)->
		String(html).replace(/&/g, '&amp;').replace(/\"/g, '&quot;').replace(/</g, '&lt;').replace(/>/g, '&gt;')

	$('#compile-template').on 'click', (e)->
		e.preventDefault()
		template = $('#template').val()
		data = $('#data').val()
		results = _c.utils.template template, JSON.parse(data)
		$('#result').html escape(results)
