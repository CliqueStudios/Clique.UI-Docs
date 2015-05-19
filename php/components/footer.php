
	<div class="docs-footer">
		<div class="container container-center text-center">
			<ul class="subnav subnav-line flex-center">
				<li><a href="<?php echo REPOSITORY_LINK; ?>" target="_blank">GitHub</a></li>
				<li><a href="<?php echo ISSUES_LINK; ?>" target="_blank">Issues</a></li>
				<li><a href="<?php echo CHANGELOG_LINK; ?>" target="_blank">Changelog</a></li>
				<li><a href="<?php echo TWITTER_LINK; ?>" target="_blank">Twitter</a></li>
			</ul>
			<div class="panel">
				<h4>Clique Studios</h4>
				<address> 410 S. Michigan Ave, Suite 908
					<br> Chicago, IL 60605 (
					<a href="https://goo.gl/maps/dkVBQ" target="_blank">map</a> ) </address>
				<p class="tel">312-379-9329</p>
			</div>
		</div>
	</div>
	<div id="docs-offcanvas" class="offcanvas">
		<div class="offcanvas-bar">
			<ul class="nav nav-offcanvas nav-parent-icon" data-nav>
				<?php
					// Get Started Docs
					echo '<li class="nav-header">Documentation</li>' . "\n";
					get_footer_links(get_started_links());

					// Core
					echo '<li class="nav-header">Core</li>' . "\n";
					get_footer_links(get_core_links());

					// Components
					echo '<li class="nav-header">Components</li>' . "\n";
					get_footer_links(get_component_links());

					// API
					echo '<li class="nav-header">Components</li>' . "\n";
					get_footer_links(get_api_links());
				?>
			</ul>
		</div>
	</div>
	<?php get_docs_js(); ?>
</body>
</html>
