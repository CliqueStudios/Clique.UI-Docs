
do(_c = Clique)->

	$ = _c.$
	win = _c.$win[0]

	### Upload ###
	progressbar = $("#progressbar")
	bar = progressbar.find('.progress-bar')
	settings =
		action : '/'
		allow : '*.(jpg|gif|png)'
		loadstart : ->
			bar.css("width", "0%").text "0%"
			progressbar.removeClass "hidden"
		progress : (percent)->
			percent = Math.ceil percent
			bar.css("width", percent + "%").text percent + "%"
		allcomplete : (response)->
			bar.css("width", "100%").text "100%"
			setTimeout ->
				progressbar.addClass "hidden"
			, 250
			alert "Upload Completed"
	select = _c.uploadSelect $("#upload-select"), settings
	drop = _c.uploadDrop $("#upload-drop"), settings

	$ ->
		preCode 'pre code, textarea'

		if win.hljs
			hljs.configure
				languages : [ "html", "css", "javascript", "less", "bash" ]
			hljs.initHighlightingOnLoad()

		$('article').on 'click', '[href="#"], [href=""]', (e)->
			e.preventDefault()

	if $("[data-stellar-background-ratio]").length
		$.stellar
			hideDistantElements : false
			positionProperty : "transform"

	if $("#loadWidth").length
		_c.$win.on "load", ->
			w = clique.$win.width()
			$("#loadWidth, #widthAfterResize").text(w)

		_c.$win.on "resizeend.clique.dom", ->
			w = clique.$win.width()
			$("#widthAfterResize").text(w)

	preCode = (selector)->
		$(selector).each (idx, el)->
			el = $(@)
			content = el.text().replace(/^[\r\n]+/, "").replace(/\s+$/g, "")
			if /^\S/gm.test content
				el.text content
				return true
			re = /^[\t ]+/gm
			min = 1e3
			while mat = re.exec(content)
				length = mat[0].length
				if len < min
					min = len
					str = mat[0]
			if min is 1e3
				return true
			el.text content.replace(new RegExp("^" + str, "gm"), "")
