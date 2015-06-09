<?php

function get_started_links()
{
	$links = array(
		'Beginners' => array(
			(object)array(
				'title' => 'Get started',
				'slug' => 'get-started/',
			),
			(object)array(
				'title' => 'About Clique.UI',
				'slug' => 'get-started/about-cliqueui/',
			),
			(object)array(
				'title' => 'Layout examples',
				'slug' => 'get-started/layouts/',
			),
			(object)array(
				'title' => 'Acknowledgements',
				'slug' => 'get-started/acknowledgements/',
			),
		),
		'Developers' => array(
			(object)array(
				'title' => 'Project structure',
				'slug' => 'get-started/project-structure/',
			),
			(object)array(
				'title' => 'Source Files',
				'slug' => 'get-started/source-files/',
			),
			(object)array(
				'title' => 'Less',
				'slug' => 'get-started/less/',
			),
			(object)array(
				'title' => 'CoffeeScript & JavaScript',
				'slug' => 'get-started/coffeescript/',
			),
			(object)array(
				'title' => 'Compiling &amp; Building',
				'slug' => 'get-started/compiling/',
			),
			(object)array(
				'title' => 'Tests',
				'slug' => 'get-started/tests/',
			),
		)
	);
	return $links;
}

function get_core_links()
{
	$links = array(
		'Core Components' => array(
			(object)array(
				'title' => 'Base',
				'slug' => 'core/base',
			),
			(object)array(
				'title' => 'Print',
				'slug' => 'core/print',
			),
		),
		'Layout' => array(
			(object)array(
				'title' => 'Grid',
				'slug' => 'core/grid',
			),
			(object)array(
				'title' => 'Flexbox',
				'slug' => 'core/flexbox',
			),
			(object)array(
				'title' => 'Panel',
				'slug' => 'core/panel',
			),
			(object)array(
				'title' => 'Article',
				'slug' => 'core/article',
			),
			(object)array(
				'title' => 'Comment',
				'slug' => 'core/comment',
			),
			(object)array(
				'title' => 'Cover',
				'slug' => 'core/cover',
			),
			(object)array(
				'title' => 'Utility',
				'slug' => 'core/utility',
			),
		),
		'Navigations' => array(
			(object)array(
				'title' => 'Nav',
				'slug' => 'core/nav',
			),
			(object)array(
				'title' => 'Navbar',
				'slug' => 'core/navbar',
			),
			(object)array(
				'title' => 'Subnav',
				'slug' => 'core/subnav',
			),
			(object)array(
				'title' => 'Breadcrumb',
				'slug' => 'core/breadcrumb',
			),
			(object)array(
				'title' => 'Pagination',
				'slug' => 'core/pagination',
			),
			(object)array(
				'title' => 'Tab',
				'slug' => 'core/tab',
			),
		),
		'Form' => array(
			(object)array(
				'title' => 'Form',
				'slug' => 'core/form',
			),
			(object)array(
				'title' => 'Text Inputs',
				'slug' => 'core/text-inputs'
			),
			(object)array(
				'title' => 'Selects',
				'slug' => 'core/selects'
			),
			(object)array(
				'title' => 'Radios/Checkboxes',
				'slug' => 'core/checkboxes'
			),
			(object)array(
				'title' => 'File Upload',
				'slug' => 'core/form-file'
			),
			(object)array(
				'title' => 'Validation States',
				'slug' => 'core/validation-states'
			)
		),
		'Common' => array(
			(object)array(
				'title' => 'List',
				'slug' => 'core/list',
			),
			(object)array(
				'title' => 'Description list',
				'slug' => 'core/description-list',
			),
			(object)array(
				'title' => 'Table',
				'slug' => 'core/table',
			),
			(object)array(
				'title' => 'Button',
				'slug' => 'core/button',
			),
			(object)array(
				'title' => 'Icon',
				'slug' => 'core/icon',
			),
			(object)array(
				'title' => 'Close',
				'slug' => 'core/close',
			),
			(object)array(
				'title' => 'Badge',
				'slug' => 'core/badge',
			),
			(object)array(
				'title' => 'Alert',
				'slug' => 'core/alert',
			),
			(object)array(
				'title' => 'Thumbnail',
				'slug' => 'core/thumbnail',
			),
			(object)array(
				'title' => 'Overlay',
				'slug' => 'core/overlay',
			),
			(object)array(
				'title' => 'Text',
				'slug' => 'core/text',
			),
			(object)array(
				'title' => 'Animation',
				'slug' => 'core/animation',
			),
		),
		'JavaScript' => array(
			(object)array(
				'title' => 'Dropdown',
				'slug' => 'core/dropdown',
			),
			(object)array(
				'title' => 'Modal',
				'slug' => 'core/modal',
			),
			(object)array(
				'title' => 'Switcher',
				'slug' => 'core/switcher',
			),
			(object)array(
				'title' => 'Scrollspy',
				'slug' => 'core/scrollspy',
			),
			(object)array(
				'title' => 'ScrollTo',
				'slug' => 'core/scrollto',
			),
			(object)array(
				'title' => 'Toggle',
				'slug' => 'core/toggle',
			),
		),
	);
	return $links;
}

function get_component_links()
{
	$links = array(
		'Layout' => array(
			(object)array(
				'title' => 'Dynamic Grid',
				'slug' => 'components/grid-js',
			),
		),
		'Common' => array(
			(object)array(
				'title' => 'Parallax',
				'slug' => 'components/parallax',
			),
			(object)array(
				'title' => 'DataTable',
				'slug' => 'components/datatable',
			),
			(object)array(
				'title' => 'Datepicker',
				'slug' => 'components/datepicker',
			),
			(object)array(
				'title' => 'Accordion',
				'slug' => 'components/accordion',
			),
			(object)array(
				'title' => 'Off Canvas',
				'slug' => 'components/offcanvas',
			),
		),
		'Form' => array(
			(object)array(
				'title' => 'Button',
				'slug' => 'components/button',
			),
			(object)array(
				'title' => 'Upload',
				'slug' => 'components/upload',
			),
			(object)array(
				'title' => 'Password',
				'slug' => 'components/password'
			),
			(object)array(
				'title' => 'Progress',
				'slug' => 'components/progress',
			),
			(object)array(
				'title' => 'Switch',
				'slug' => 'components/switch',
			),
			(object)array(
				'title' => 'Autocomplete',
				'slug' => 'components/autocomplete',
			),
		),
		'JavaScript' => array(
			(object)array(
				'title' => 'Lightbox',
				'slug' => 'components/lightbox',
			),
			(object)array(
				'title' => 'Slideshow',
				'slug' => 'components/slideshow',
			),
			(object)array(
				'title' => 'Nestable',
				'slug' => 'components/nestable',
			),
			(object)array(
				'title' => 'Sortable',
				'slug' => 'components/sortable',
			),
			(object)array(
				'title' => 'Sticky',
				'slug' => 'components/sticky',
			),
			(object)array(
				'title' => 'Timepicker',
				'slug' => 'components/timepicker',
			),
		),
	);
	return $links;
}

function get_api_links()
{
	$links = array(
		'Basic' => array(
			(object)array(
				'title' => 'Overview',
				'slug' => 'api/',
			),
			(object)array(
				'title' => 'Data attributes',
				'slug' => 'api/data-attributes',
			),
			// (object)array(
			// 	'title' => 'AMD Support',
			// 	'slug' => 'api/amd-support',
			// ),
			(object)array(
				'title' => 'Overriding Defaults',
				'slug' => 'api/overriding-defaults/',
			),
			(object)array(
				'title' => 'DOM Observers',
				'slug' => 'api/dom-observers/',
			),
		),
		'Properties' => array(
			(object)array(
				'title' => 'Overview',
				'slug' => 'api/objects/',
			),
			(object)array(
				'title' => '.$',
				'slug' => 'api/objects/$',
				'description' => 'A cached instance of the jQuery object - stored prior to additional manipulation for fast, global access.'
			),
			(object)array(
				'title' => '.$win',
				'slug' => 'api/objects/$win',
				'description' => 'The window, cached, as a jQuery object.'
			),
			(object)array(
				'title' => '.$doc',
				'slug' => 'api/objects/$doc',
				'description' => 'The browser document, cached as a jQuery object.'
			),
			(object)array(
				'title' => '.$html',
				'slug' => 'api/objects/$html',
				'description' => 'The document\'s root object, cached as a jQuery object.'
			),
			(object)array(
				'title' => '.$body',
				'slug' => 'api/objects/$body',
				'description' => 'The HTML document body, cached as a jQuery object.'
			),
			(object)array(
				'title' => '.browser',
				'slug' => 'api/objects/browser/',
				'description' => 'An object that returns information about the browser.'
			),
			(object)array(
				'title' => '.events',
				'slug' => 'api/objects/events',
				'description' => 'A collection of custom DOM events fired by ' . SITENAME . '.'
			),
			(object)array(
				'title' => '.support',
				'slug' => 'api/objects/support',
				'description' => 'A collection of functions and browser features used by Clique.UI to provide cross-browser compatibility across all event handlers.'
			),
			(object)array(
				'title' => '.utils',
				'slug' => 'api/objects/utils',
				'description' => 'A collection of utility functions globally accessible through the <code>Clique</code> object.'
			),
		),
		'Methods' => array(
			(object)array(
				'title' => 'Overview',
				'slug' => 'api/methods/',
				'description' => ''
			),
			(object)array(
				'title' => '.fn',
				'slug' => 'api/methods/fn',
				'description' => 'Binds a new function or object to the global <code>Clique</code> object.'
			),
			(object)array(
				'title' => '.component',
				'slug' => 'api/methods/component/',
				'description' => 'Registers a new component with the global <code>Clique</code> object.'
			),
			(object)array(
				'title' => '.on',
				'slug' => 'api/methods/on',
				'description' => 'Binds an event a DOM object.'
			),
			(object)array(
				'title' => '.one',
				'slug' => 'api/methods/one',
				'description' => 'Binds an event a DOM object, to be handled only once (will unbind after the first time the event is triggered).'
			),
			(object)array(
				'title' => '.plugin',
				'slug' => 'api/methods/plugin',
				'description' => 'Registers a new dependent object to a ' . SITENAME . ' component.'
			),
			(object)array(
				'title' => '.ready',
				'slug' => 'api/methods/ready',
				'description' => 'Callback function that\'s fired when the global <code>Clique</code> object is full initialized.'
			),
			(object)array(
				'title' => '.trigger',
				'slug' => 'api/methods/trigger',
				'description' => 'Triggers a DOM event.'
			),
			(object)array(
				'title' => '.domObserve',
				'slug' => 'api/methods/domobserve',
				'description' => 'Registers a new DOM observer (watcher) with the <code>Clique</code> global object.'
			),
			(object)array(
				'title' => '.delay',
				'slug' => 'api/methods/delay',
				'description' => 'Executes a function after a period of delay.'
			),
		),
		// 'Events' => array(
		// 	(object)array(
		// 		'title' => 'Overview',
		// 		'slug' => 'api/events/'
		// 	),
		// /*

		// 	// Alert
		// 	close.clique.alert
		// 	closed.clique.alert

		// 	// Button
		// 	change.clique.button

		// 	// Core
		// 	display.clique.check
		// 	init.clique.component
		// 	changed.clique.dom
		// 	beforeready.clique.dom
		// 	scrolling.clique.dom
		// 	domready.clique.dom
		// 	afterready.clique.dom

		// 	// Dropdown
		// 	show.clique.dropdown
		// 	hide.clique.dropdown
		// 	stack.clique.dropdown

		// 	// Events
		// 	scrollstart
		// 	scrollstop
		// 	resizeend

		// 	// Grid
		// 	init.clique.grid');

		// 	// Modal
		// 	show.clique.modal');
		// 	hide.clique.modal');

		// 	// Nav
		// 	display.clique.check

		// 	// Offcanvas
		// 	show.clique.offcanvas
		// 	hide.clique.offcanvas

		// 	// Scrollspy
		// 	init.clique.scrollspy
		// 	outview.clique.scrollspy
		// 	inview.clique.scrollspynav

		// 	// smooth-scroll
		// 	didscroll.clique.smooth-scroll
		// 	willscroll.clique.smooth-scroll

		// 	// Switcher
		// 	show.clique.switcher

		// 	// Tab
		// 	change.clique.tab

		// 	// Toggle
		// 	toggle.clique

		// 	// Touch
		// 	swipe
		// 	swipeLeft
		// 	swipeRight
		// 	swipeUp
		// 	swipeDown
		// 	doubleTap
		// 	tap
		// 	singleTap
		// 	longTap
		// */
		// 	(object)array(
		// 		'title' => 'afterready.clique.dom',
		// 		'slug' => 'api/events/afterready.clique.dom'
		// 	),
		// 	(object)array(
		// 		'title' => 'beforeready.clique.dom',
		// 		'slug' => 'api/events/beforeready.clique.dom'
		// 	),
		// 	(object)array(
		// 		'title' => 'change.clique.button',
		// 		'slug' => 'api/events/change.clique.button'
		// 	),
		// 	(object)array(
		// 		'title' => 'change.clique.tab',
		// 		'slug' => 'api/events/change.clique.tab'
		// 	),
		// 	(object)array(
		// 		'title' => 'changed.clique.dom',
		// 		'slug' => 'api/events/changed.clique.dom'
		// 	),
		// 	(object)array(
		// 		'title' => 'close.clique.alert',
		// 		'slug' => 'api/events/close.clique.alert'
		// 	),
		// 	(object)array(
		// 		'title' => 'closed.clique.alert',
		// 		'slug' => 'api/events/closed.clique.alert'
		// 	),
		// 	(object)array(
		// 		'title' => 'didscroll.clique.smooth-scroll',
		// 		'slug' => 'api/events/didscroll.clique.smooth-scroll'
		// 	),
		// 	(object)array(
		// 		'title' => 'display.clique.check',
		// 		'slug' => 'api/events/display.clique.check'
		// 	),
		// 	(object)array(
		// 		'title' => 'domready.clique.dom',
		// 		'slug' => 'api/events/domready.clique.dom'
		// 	),
		// 	(object)array(
		// 		'title' => 'doubleTap',
		// 		'slug' => 'javascrip/doubleTapt/events'
		// 	),
		// 	(object)array(
		// 		'title' => 'hide.clique.dropdown',
		// 		'slug' => 'api/events/hide.clique.dropdown'
		// 	),
		// 	(object)array(
		// 		'title' => 'hide.clique.modal',
		// 		'slug' => 'api/events/hide.clique.modal'
		// 	),
		// 	(object)array(
		// 		'title' => 'hide.clique.offcanvas',
		// 		'slug' => 'api/events/hide.clique.offcanvas'
		// 	),
		// 	(object)array(
		// 		'title' => 'init.clique.component',
		// 		'slug' => 'api/events/init.clique.component'
		// 	),
		// 	(object)array(
		// 		'title' => 'init.clique.grid',
		// 		'slug' => 'api/event/init.clique.grids'
		// 	),
		// 	(object)array(
		// 		'title' => 'init.clique.scrollspy',
		// 		'slug' => 'api/events/init.clique.scrollspy'
		// 	),
		// 	(object)array(
		// 		'title' => 'inview.clique.scrollspynav',
		// 		'slug' => 'api/events/inview.clique.scrollspynav'
		// 	),
		// 	(object)array(
		// 		'title' => 'longTap',
		// 		'slug' => 'javascr/longTapipt/events'
		// 	),
		// 	(object)array(
		// 		'title' => 'outview.clique.scrollspy',
		// 		'slug' => 'api/events/outview.clique.scrollspy'
		// 	),
		// 	(object)array(
		// 		'title' => 'resizeend.clique.dom',
		// 		'slug' => 'javascrip/events/resizeend.clique.dom/'
		// 	),
		// 	(object)array(
		// 		'title' => 'scrolling.clique.dom',
		// 		'slug' => 'api/events/scrolling.clique.dom/'
		// 	),
		// 	(object)array(
		// 		'title' => 'scrollstart.clique.dom',
		// 		'slug' => 'api/events/scrollstart.clique.dom/'
		// 	),
		// 	(object)array(
		// 		'title' => 'scrollstop.clique.dom',
		// 		'slug' => 'api/events/scrollstop.clique.dom/'
		// 	),
		// 	(object)array(
		// 		'title' => 'show.clique.dropdown',
		// 		'slug' => 'api/events/show.clique.dropdown'
		// 	),
		// 	(object)array(
		// 		'title' => 'show.clique.modal',
		// 		'slug' => 'api/events/show.clique.modal'
		// 	),
		// 	(object)array(
		// 		'title' => 'show.clique.offcanvas',
		// 		'slug' => 'api/events/show.clique.offcanvas'
		// 	),
		// 	(object)array(
		// 		'title' => 'show.clique.switcher',
		// 		'slug' => 'api/events/show.clique.switcher'
		// 	),
		// 	(object)array(
		// 		'title' => 'singleTap',
		// 		'slug' => 'javascrip/singleTapt/events'
		// 	),
		// 	(object)array(
		// 		'title' => 'stack.clique.dropdown',
		// 		'slug' => 'api/events/stack.clique.dropdown'
		// 	),
		// 	(object)array(
		// 		'title' => 'swipe',
		// 		'slug' => 'javas/swipecript/events'
		// 	),
		// 	(object)array(
		// 		'title' => 'swipeDown',
		// 		'slug' => 'javascrip/swipeDownt/events'
		// 	),
		// 	(object)array(
		// 		'title' => 'swipeLeft',
		// 		'slug' => 'javascrip/swipeLeftt/events'
		// 	),
		// 	(object)array(
		// 		'title' => 'swipeRight',
		// 		'slug' => 'api/swipeRight/events'
		// 	),
		// 	(object)array(
		// 		'title' => 'swipeUp',
		// 		'slug' => 'javascr/swipeUpipt/events'
		// 	),
		// 	(object)array(
		// 		'title' => 'tap',
		// 		'slug' => 'jav/tapascript/events'
		// 	),
		// 	(object)array(
		// 		'title' => 'toggle.clique',
		// 		'slug' => 'api/ev/toggle.cliqueents'
		// 	),
		// 	(object)array(
		// 		'title' => 'willscroll.clique.smooth-scroll',
		// 		'slug' => 'api/events/willscroll.clique.smooth-scroll'
		// 	),
		// ),
	);
	return $links;
}
