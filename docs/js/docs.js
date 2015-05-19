(function(_c) {
  var $, bar, drop, preCode, progressbar, select, settings, win;
  $ = _c.$;
  win = _c.$win[0];

  /* Upload */
  progressbar = $("#progressbar");
  bar = progressbar.find('.progress-bar');
  settings = {
    action: '/',
    allow: '*.(jpg|gif|png)',
    loadstart: function() {
      bar.css("width", "0%").text("0%");
      return progressbar.removeClass("hidden");
    },
    progress: function(percent) {
      percent = Math.ceil(percent);
      return bar.css("width", percent + "%").text(percent + "%");
    },
    allcomplete: function(response) {
      bar.css("width", "100%").text("100%");
      setTimeout(function() {
        return progressbar.addClass("hidden");
      }, 250);
      return alert("Upload Completed");
    }
  };
  select = _c.uploadSelect($("#upload-select"), settings);
  drop = _c.uploadDrop($("#upload-drop"), settings);
  $(function() {
    preCode('pre code, textarea');
    if (win.hljs) {
      hljs.configure({
        languages: ["html", "css", "javascript", "less", "bash"]
      });
      hljs.initHighlightingOnLoad();
    }
    return $('article').on('click', '[href="#"], [href=""]', function(e) {
      return e.preventDefault();
    });
  });
  if ($("[data-stellar-background-ratio]").length) {
    $.stellar({
      hideDistantElements: false,
      positionProperty: "transform"
    });
  }
  if ($("#loadWidth").length) {
    _c.$win.on("load", function() {
      var w;
      w = clique.$win.width();
      return $("#loadWidth, #widthAfterResize").text(w);
    });
    _c.$win.on("resizeend.clique.dom", function() {
      var w;
      w = clique.$win.width();
      return $("#widthAfterResize").text(w);
    });
  }
  return preCode = function(selector) {
    return $(selector).each(function(idx, el) {
      var content, length, mat, min, re, str;
      el = $(this);
      content = el.text().replace(/^[\r\n]+/, "").replace(/\s+$/g, "");
      if (/^\S/gm.test(content)) {
        el.text(content);
        return true;
      }
      re = /^[\t ]+/gm;
      min = 1e3;
      while (mat = re.exec(content)) {
        length = mat[0].length;
        if (len < min) {
          min = len;
          str = mat[0];
        }
      }
      if (min === 1e3) {
        return true;
      }
      return el.text(content.replace(new RegExp("^" + str, "gm"), ""));
    });
  };
})(Clique);
