<h3 class="docs-article-subtitle">Example</h3>
				<pre><code class="javascript">$('[data-dropdown]').on('show.clique.dropdown', function(){
    // Executed after the dropdown is shown
});

$('[data-dropdown]').on('stack.clique.dropdown', function(){
    // Executed when a dropdown restacks
});

$('[data-dropdown]').on('hide.clique.dropdown', function(){
    // Executed after a dropdown is hidden
});</code></pre>
