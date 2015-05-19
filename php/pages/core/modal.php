<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>

			<?php get_sidebar('core'); ?>

			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Modal</h1>
					<p class="article-lead" itemprop="about">Create modal dialogs with different styles and transitions.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>The modal component consists of an overlay, a dialog and a close button.</p>
					<div class="overflow-container">
						<table class="table-striped">
							<thead>
								<tr>
									<th>Class</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>.modal</code></td>
									<td>Add this class to a <code>&lt;div&gt;</code> element to create the dialog container and an overlay that blanks out the page. It is important to add an id to indicate the element for toggling.</td>
								</tr>
								<tr>
									<td><code>.modal-dialog</code></td>
									<td>Add this class to a child <code>&lt;div&gt;</code> element to create the dialog box.</td>
								</tr>
								<tr>
									<td><code>.modal-close</code></td>
									<td>Add this class to an <code>&lt;a&gt;</code> or <code>&lt;button&gt;</code> element to create a close button within the dialog box. We recommend adding the <code>.close</code> class from the <a href="<?php echo get_url('core/close'); ?>">Close component</a> to give the button a proper styling, though you can also use text or an image.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<p>You can use any element to toggle a modal dialog. An <code>&lt;a&gt;</code> element needs to be linked to the modal's id. To enable the necessary JavaScript, add the <code>data-modal</code> attribute. If you are using another element, like a button, just add the <code>data-modal="{target:'#ID'}"</code> attribute to target the modal's id.</p>
					<?php
					$text = '<button data-modal="{target:\'#modal\'}">Open</button>
<a href="#modal" data-modal>Open</a>
<div id="modal" class="modal">
	<div class="modal-dialog">
		<a href="#" class="modal-close close"></a>
		<h1>Headline</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</div>';
						print_example($text);
					?>
					<hr>
					<h3>JavaScript options</h3>
					<p>By default, the modal closes automatically when clicking on the modal overlay. To prevent this from happening, just add the <code>data-modal="{target:'#ID',bgclose:false}"</code> attribute.</p>
					<hr>
					<h2 id="modal-header-footer"><a href="#modal-header-footer" class="link-reset">Modal header and footer</a></h2>
					<p>You can create a header and footer for your modal, which are seperated from the content. Just add the <code>.modal-header</code> or the <code>.modal-footer</code> class to a <code>&lt;div&gt;</code> element inside the modal dialog.</p>
					<?php
					$text = '<button data-modal="{target:\'#modal6\'}">Open</button>
<div id="modal6" class="modal">
	<div class="modal-dialog">
		<button class="modal-close close"></button>
		<div class="modal-header">
			<h2>Headline</h2>
		</div>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<div class="modal-footer text-right">
			<button class="button">Cancel</button>
			<button class="button button-primary">Save</button>
		</div>
	</div>
</div>';
						print_example($text);
					?>
					<hr>
					<h2 id="modal-with-caption"><a href="#modal-with-caption" class="link-reset">Modal caption</a></h2>
					<p>You can also create a caption that will be placed outside the modal. Just add the <code>.modal-caption</code> class to a <code>&lt;div&gt;</code> element inside the modal dialog.</p>
					<?php
					$text = '<button data-modal="{target:\'#modal7\'}">Open</button>
<div id="modal7" class="modal">
	<div class="modal-dialog">
		<a href="#" class="modal-close close"></a>
		<h1>Headline</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<div class="modal-caption">Caption</div>
	</div>
</div>';
						print_example($text);
					?>
					<hr>
					<h2 id="lightbox-modifier"><a href="#lightbox-modifier" class="link-reset">Lightbox modifier</a></h2>
					<p>To create a lightbox-like modal dialog, just add the <code>.modal-dialog-lightbox</code> class. This can be useful, if you want to use the modal as a lightbox for your images. The close button will adjust its position automatically to the dialog.</p>
					<?php
					$text = '<button data-modal="{target:\'#modal-3\'}">Open</button>
<div id="modal-3" class="modal">
	<div class="modal-dialog modal-dialog-lightbox">
		<a href="#" class="modal-close close close-alt"></a>
		<img src="<?php echo get_image(\'placeholder_600x400.jpg\'); ?>" width="600" height="400" alt="">
	</div>
</div>';
						print_example($text);
					?>
					<p><span class="badge">NOTE</span> When creating a close button within the lightbox modifier, we also recommend adding the <code>.close-alt</code> class from the <a href="<?php echo get_url('core/close'); ?>">Close component</a> to the close button to give your button a styling that fits the lightbox modal.</p>
					<hr>
					<h2 id="modal-with-spinner"><a href="#modal-with-spinner" class="link-reset">Modal spinner</a></h2>
					<p>To place a spinning icon inside your modal, add the <code>.modal-spinner</code> class to a <code>&lt;div&gt;</code> element inside the modal dialog.</p>
					<?php
					$text = '<a class="button" href="#modal-spinner" data-modal>Open</a>
<div id="modal-spinner" class="modal">
	<div class="modal-dialog">
		<div class="modal-spinner"></div>
	</div>
</div>';
						print_example($text);
					?>
					<hr>
					<h2 id="center-modal"><a href="#center-modal" class="link-reset">Center Modal</a></h2>
					<p>To vertically center the modal, add the <code>{center:true}</code> option to the data-attribute.</p>
					<?php
					$text = '<a class="button" href="#modal" data-modal="{center:true}">Open</a>';
						print_example($text);
					?>
					<hr>
					<h2 id="large-dialog-modifier"><a href="#large-dialog-modifier" class="link-reset">Large dialog modifier</a></h2>
					<p>To apply the site's container width to the modal dialog, just add the <code>.modal-dialog-large</code> class.</p>
					<?php
					$text = '<a href="#modal-4" class="button" data-modal>Open</a>
<div id="modal-4" class="modal">
	<div class="modal-dialog modal-dialog-large">
		<button class="modal-close close"></button>
		<h1>Headline</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</div>';
						print_example($text);
					?>
					<hr>
					<h2 id="overflow-container-in-modal"><a href="#overflow-container-in-modal" class="link-reset">Overflow container in modal</a></h2>
					<p>You can also display the modal's content in a scrollable container. Just add the <code>.overflow-container</code> class to a <code>&lt;div&gt;</code> element inside the modal dialog. The modal will automatically expand and fill the site's height.</p>
					<?php
					$text = '<a href="#modal-5" class="button" data-modal>Open</a>
<div id="modal-5" class="modal">
	<div class="modal-dialog modal-dialog-large">
		<button class="modal-close close"></button>
		<h1>Headline</h1>
		<h2>Some text above the scrollable box</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<div class="overflow-container">
			<h2>Overflow container</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<h2>Some text below the overflow container</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</div>';
						print_example($text);
					?>
					<hr>
					<h2 id="javascript"><a href="#javascript" class="link-reset">JavaScript</a></h2>
					<p>You can handle modal dialogs via raw javascript.</p>
					<?php
					$text = '<ul class="col-4-12-medium list list-line">
	<li><i class="icon-cog"></i> Uses the <code>.icon-cog</code> class</li>
	<li><i class="icon-user"></i> Uses the <code>.icon-user</code> class</li>
	<li><i class="icon-home"></i> Uses the <code>.icon-home</code> class</li>
	<li><a href="#"><i class="icon-link"></i> An icon in a link</a></li>
</ul>
<a href="#" class="button"><i class="icon-envelop"></i> A button with an icon</a>';
						print_example($text);
					?>
					<h3 class="docs-article-subtitle">Example</h3>
					<pre><code>var modal = Clique.modal(".modal-selector");

if ( modal.isActive() ) {
    modal.hide();
} else {
    modal.show();
}</code></pre>
					<hr>
					<h3>Events</h3>
					<p>The modal component triggers an <code>show.clique.modal</code> event every time a modal is opened and <code>hide.clique.modal</code> when a modal is closed.</p>
					<?php
					$text = '<ul class="col-4-12-medium list list-line">
	<li><i class="icon-cog"></i> Uses the <code>.icon-cog</code> class</li>
	<li><i class="icon-user"></i> Uses the <code>.icon-user</code> class</li>
	<li><i class="icon-home"></i> Uses the <code>.icon-home</code> class</li>
	<li><a href="#"><i class="icon-link"></i> An icon in a link</a></li>
</ul>
<a href="#" class="button"><i class="icon-envelop"></i> A button with an icon</a>';
						print_example($text);
					?>
					<h3 class="docs-article-subtitle">Example</h3>
					<pre><code>$('.modal-selector').on({
    'show.clique.modal' : function() {
        console.log("Modal is visible.");
    },
    'hide.clique.modal' : function(){
        console.log("Element is not visible.");
    }
});</code></pre>
					<h3>Events</h3>
					<div class="overflow-container">
						<table class="table-striped text-nowrap">
							<thead>
								<tr>
									<th>Name</th>
									<th>Parameter</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>show.clique.modal</code></td>
									<td>event</td>
									<td>On modal show</td>
								</tr>
								<tr>
									<td><code>hide.clique.modal</code></td>
									<td>event</td>
									<td>On modal hide</td>
								</tr>
							</tbody>
						</table>
					</div>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
