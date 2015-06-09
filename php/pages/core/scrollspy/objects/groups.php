<hr>
<h2 id="groups"><a href="#groups" class="link-reset">Groups</a></h2>
<p>You can also group scrollspy elements, so you won't have to apply the data attribute to each of them. Just add the <code>data-scollspy"{target:'MY-CLASS'}"</code> attribute to a parent container, targetting the selector of its child items. When using a delay it will be applied cumulatively to the items within the row that scrolls into view. The delay will be resetted for the next row within the group when it scrolls into view.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#scrollspy-groups-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="scrollspy-groups-tabs" class="switcher margin">
	<li>
		<div class="row" data-scrollspy="{class:'animation-fade invisible',repeat:true,delay:300,target:'> div > .panel'}">
			<?php
				$i = 10;
				while($i > 0) {
					?>

						<div class="col-3-12-medium margin-bottom">
							<div class="panel panel-box invisible">
								<h3>In View</h3>
								<p>Lorem ipsum dolor sit amet.</p>
							</div>
						</div>

					<?php
					$i--;
				}
			?>
		</div>
	</li>
	<li>
		<pre><code>&lt;div data-scrollspy="{class:'animation-fade invisible',repeat:true,delay:300,target:'> div > .panel'}"&gt;
	&lt;div&gt;
		&lt;div class="panel panel-box invisible"&gt;
			...
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
	</li>
</ul>
