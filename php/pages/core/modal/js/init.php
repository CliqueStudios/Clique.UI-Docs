<p>You can handle modal dialogs via raw javascript.</p>
<pre><code>var modal = Clique.modal(".modal-selector");

if ( modal.isActive() ) {
    modal.hide();
} else {
    modal.show();
}</code></pre>
