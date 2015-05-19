(function(_c) {
  var $, escape;
  $ = _c.$;
  escape = function(html) {
    return String(html).replace(/&/g, '&amp;').replace(/\"/g, '&quot;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
  };
  return $('#compile-template').on('click', function(e) {
    var data, results, template;
    e.preventDefault();
    template = $('#template').val();
    data = $('#data').val();
    results = _c.utils.template(template, JSON.parse(data));
    return $('#result').html(escape(results));
  });
})(Clique);
