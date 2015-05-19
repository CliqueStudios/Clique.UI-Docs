
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>

			<?php get_sidebar('javascript'); ?>

			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title text-lowercase" itemprop="headline">.browser</h1>
					<p class="article-lead" itemprop="about">Returns a plain object containing information about the device and browser being used.</p>
					<p>The <code>Clique.browser</code> object returns information such as rendering engine, vendor, version, plugin capabilities, and media-query size.</p>
					<p>It should be noted that this object should not be used to execute different functions on a browser-by-browser basis.  Feature detection is preferred.</p>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>;(function(clique) {
	var browser = clique.browser;
	if(browser.browser.name === 'chrome') {
		// Do stuff for Chrome here...
	}

	// Logging the `browser` variable will display the following information:
	Clique.browser = {
		browser : {
			engine : 'webkit', // 'trident', 'gecko', 'presto', 'webkit'
			language : 'en-US',
			major : '41',
			minor : '0',
			name : 'chrome', // 'ie', 'firefox', 'opera', 'konqueror', 'chrome', 'iron', 'safari'
			patch : '2272.104',
			version : '41.0.2272.104'
		},
		device : {
			model : 'mac'
			orientation : ''
			type : 'desktop' // 'tv', 'tablet', 'mobile', 'desktop'
		},
		os : {
			addressRegisterSize : '32bit', // '64bit', '32bit'
			major : '10'
			minor : '10'
			name : 'mac os' // 'ios', 'android', 'blackberry', 'windows', 'mac os', 'webtv', 'linux', 'sun', 'irix', 'freebsd', 'bsd'
			patch : '2'
			version : '10.10.2'
		},
		plugins : [
			"Widevine Content Decryption Module"
			"Shockwave Flash"
			"Chrome Remote Desktop Viewer"
			"Native Client"
			"Chrome PDF Viewer"
			"AdobeAAMDetect"
			"Adobe Acrobat NPAPI Plug-in, Version 11.0.10"
			"Default Browser Helper"
			"Google Talk Plugin"
			"Google Talk Plugin Video Renderer"
		],
		screen : {
			size : 'xlarge' // 'xlarge', 'large', 'medium', 'small'
			touch : false // false, true
		}
	};
})(Clique);</code></pre>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
