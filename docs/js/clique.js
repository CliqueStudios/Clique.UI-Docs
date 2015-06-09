/*!
 *  CliqueUI - v1.0.4 - 2015-06-09
 *  http://ui.cliquestudios.com
 *  Copyright (c) 2015 Clique Studios;
 */

(function(core) {
    if (typeof define === "function" && define.amd) {
        define("clique", function() {
            var clique;
            clique = window.Clique || core(window, window.jQuery, window.document);
            clique.load = function(res, req, onload, config) {
                var base, i, load, resource, resources;
                resources = res.split(",");
                load = [];
                base = (config.config && config.config.clique && config.config.clique.base ? config.config.clique.base : "").replace(/\/+$/g, "");
                if (!base) {
                    throw new Error("Please define base path to Clique in the requirejs config.");
                }
                i = 0;
                while (i < resources.length) {
                    resource = resources[i].replace(/\./g, "/");
                    load.push(base + "/components/" + resource);
                    i += 1;
                }
                req(load, function() {
                    onload(clique);
                });
            };
            return clique;
        });
    }
    if (!window.jQuery) {
        throw new Error("Clique requires jQuery");
    }
    if (window && window.jQuery) {
        core(window, window.jQuery, window.document);
    }
})(function(global, $, doc) {
    var hovercls, hoverset, selector, _c, _cTEMP;
    _c = {};
    _cTEMP = window.Clique;
    _c.version = "1.0.4";
    _c.noConflict = function() {
        if (_cTEMP) {
            window.Clique = _cTEMP;
            $.Clique = _cTEMP;
            $.fn.clique = _cTEMP.fn;
        }
        return _c;
    };
    _c.prefix = function(str) {
        return str;
    };
    _c.$ = $;
    _c.$doc = $(document);
    _c.$win = $(window);
    _c.$html = $("html");
    _c.fn = function(command, options) {
        var args, cmd, component, method;
        args = arguments;
        cmd = command.match(/^([a-z\-]+)(?:\.([a-z]+))?/i);
        component = cmd[1];
        method = cmd[2];
        if (!method && typeof options === "string") {
            method = options;
        }
        if (!_c[component]) {
            $.error("Clique component [" + component + "] does not exist.");
            return this;
        }
        return this.each(function() {
            var $this, data;
            $this = $(this);
            data = $this.data(component);
            if (!data) {
                $this.data(component, data = _c[component](this, method ? void 0 : options));
            }
            if (method) {
                data[method].apply(data, Array.prototype.slice.call(args, 1));
            }
        });
    };
    _c.support = {
        requestAnimationFrame: window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.msRequestAnimationFrame || window.oRequestAnimationFrame || function(callback) {
            setTimeout(callback, 1e3 / 60);
        },
        touch: "ontouchstart" in window && navigator.userAgent.toLowerCase().match(/mobile|tablet/) || global.DocumentTouch && document instanceof global.DocumentTouch || global.navigator.msPointerEnabled && global.navigator.msMaxTouchPoints > 0 || global.navigator.pointerEnabled && global.navigator.maxTouchPoints > 0 || false,
        mutationobserver: global.MutationObserver || global.WebKitMutationObserver || null
    };
    _c.support.transition = function() {
        var transitionEnd;
        transitionEnd = function() {
            var element, name, transEndEventNames;
            element = doc.body || doc.documentElement;
            transEndEventNames = {
                WebkitTransition: "webkitTransitionEnd",
                MozTransition: "transitionend",
                OTransition: "oTransitionEnd otransitionend",
                transition: "transitionend"
            };
            for (name in transEndEventNames) {
                if (element.style[name] !== undefined) {
                    return transEndEventNames[name];
                }
            }
        }();
        return transitionEnd && {
            end: transitionEnd
        };
    }();
    _c.support.animation = function() {
        var animationEnd;
        animationEnd = function() {
            var animEndEventNames, element, name;
            element = doc.body || doc.documentElement;
            animEndEventNames = {
                WebkitAnimation: "webkitAnimationEnd",
                MozAnimation: "animationend",
                OAnimation: "oAnimationEnd oanimationend",
                animation: "animationend"
            };
            for (name in animEndEventNames) {
                if (element.style[name] !== undefined) {
                    return animEndEventNames[name];
                }
            }
        }();
        return animationEnd && {
            end: animationEnd
        };
    }();
    _c.utils = {
        now: Date.now || function() {
            return new Date().getTime();
        },
        isString: function(obj) {
            return Object.prototype.toString.call(obj) === "[object String]";
        },
        isNumber: function(obj) {
            return !isNaN(parseFloat(obj)) && isFinite(obj);
        },
        isDate: function(obj) {
            var d;
            d = new Date(obj);
            return d !== "Invalid Date" && d.toString() !== "Invalid Date" && !isNaN(d);
        },
        str2json: function(str, notevil) {
            var e, newFN;
            try {
                if (notevil) {
                    return JSON.parse(str.replace(/([\$\w]+)\s* :/g, function(_, $1) {
                        return '"' + $1 + '" :';
                    }).replace(/'([^']+)'/g, function(_, $1) {
                        return '"' + $1 + '"';
                    }));
                } else {
                    newFN = Function;
                    return new newFN("", "var json = " + str + "; return JSON.parse(JSON.stringify(json));")();
                }
            } catch (_error) {
                e = _error;
                return false;
            }
        },
        debounce: function(func, wait, immediate) {
            return function() {
                var args, callNow, context, later, timeout;
                context = this;
                args = arguments;
                later = function() {
                    var timeout;
                    timeout = null;
                    if (!immediate) {
                        func.apply(context, args);
                    }
                };
                callNow = immediate && !timeout;
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
                if (callNow) {
                    func.apply(context, args);
                }
            };
        },
        removeCssRules: function(selectorRegEx) {
            if (!selectorRegEx) {
                return;
            }
            setTimeout(function() {
                var idx, idxs, stylesheet, _i, _j, _k, _len, _len1, _len2, _ref;
                try {
                    _ref = document.styleSheets;
                    _i = 0;
                    _len = _ref.length;
                    while (_i < _len) {
                        stylesheet = _ref[_i];
                        idxs = [];
                        stylesheet.cssRules = stylesheet.cssRules;
                        idx = _j = 0;
                        _len1 = stylesheet.cssRules.length;
                        while (_j < _len1) {
                            if (stylesheet.cssRules[idx].type === CSSRule.STYLE_RULE && selectorRegEx.test(stylesheet.cssRules[idx].selectorText)) {
                                idxs.unshift(idx);
                            }
                            idx = ++_j;
                        }
                        _k = 0;
                        _len2 = idxs.length;
                        while (_k < _len2) {
                            stylesheet.deleteRule(idxs[_k]);
                            _k++;
                        }
                        _i++;
                    }
                } catch (_error) {}
            }, 0);
        },
        isInView: function(element, options) {
            var $element, left, offset, top, window_left, window_top;
            $element = $(element);
            if (!$element.is(":visible")) {
                return false;
            }
            window_left = _c.$win.scrollLeft();
            window_top = _c.$win.scrollTop();
            offset = $element.offset();
            left = offset.left;
            top = offset.top;
            options = $.extend({
                topoffset: 0,
                leftoffset: 0
            }, options);
            if (top + $element.height() >= window_top && top - options.topoffset <= window_top + _c.$win.height() && left + $element.width() >= window_left && left - options.leftoffset <= window_left + _c.$win.width()) {
                return true;
            } else {
                return false;
            }
        },
        checkDisplay: function(context, initanimation) {
            var elements;
            elements = $("[data-margin], [data-row-match], [data-row-margin], [data-check-display]", context || document);
            if (context && !elements.length) {
                elements = $(context);
            }
            elements.trigger("display.clique.check");
            if (initanimation) {
                if (typeof initanimation !== "string") {
                    initanimation = '[class*="animation-"]';
                }
                elements.find(initanimation).each(function() {
                    var anim, cls, ele;
                    ele = $(this);
                    cls = ele.attr("class");
                    anim = cls.match(/animation\-(.+)/);
                    ele.removeClass(anim[0]).width();
                    ele.addClass(anim[0]);
                });
            }
            return elements;
        },
        options: function(string) {
            var options, start;
            if ($.isPlainObject(string)) {
                return string;
            }
            start = string ? string.indexOf("{") : -1;
            options = {};
            if (start !== -1) {
                try {
                    options = _c.utils.str2json(string.substr(start));
                } catch (_error) {}
            }
            return options;
        },
        animate: function(element, cls) {
            var d;
            d = $.Deferred();
            element = $(element);
            cls = cls;
            element.css("display", "none").addClass(cls).one(_c.support.animation.end, function() {
                element.removeClass(cls);
                d.resolve();
            }).width();
            element.css({
                display: ""
            });
            return d.promise();
        },
        uid: function(prefix) {
            return (prefix || "id") + _c.utils.now() + "RAND" + Math.ceil(Math.random() * 1e5);
        },
        template: function(str, data) {
            var cmd, fn, i, newFN, openblocks, output, prop, toc, tokens;
            tokens = str.replace(/\n/g, "\\n").replace(/\{\{\{\s*(.+?)\s*\}\}\}/g, "{{!$1}}").split(/(\{\{\s*(.+?)\s*\}\})/g);
            i = 0;
            output = [];
            openblocks = 0;
            while (i < tokens.length) {
                toc = tokens[i];
                if (toc.match(/\{\{\s*(.+?)\s*\}\}/)) {
                    i = i + 1;
                    toc = tokens[i];
                    cmd = toc[0];
                    prop = toc.substring(toc.match(/^(\^|\#|\!|\~|\:)/) ? 1 : 0);
                    switch (cmd) {
                      case "~":
                        output.push("for(var $i = 0; $i < " + prop + ".length; $i++) { var $item = " + prop + "[$i];");
                        openblocks++;
                        break;

                      case ":":
                        output.push("for(var $key in " + prop + ") { var $val = " + prop + "[$key];");
                        openblocks++;
                        break;

                      case "#":
                        output.push("if(" + prop + ") {");
                        openblocks++;
                        break;

                      case "^":
                        output.push("if(!" + prop + ") {");
                        openblocks++;
                        break;

                      case "/":
                        output.push("}");
                        openblocks--;
                        break;

                      case "!":
                        output.push("__ret.push(" + prop + ");");
                        break;

                      default:
                        output.push("__ret.push(escape(" + prop + "));");
                    }
                } else {
                    output.push("__ret.push('" + toc.replace(/\'/g, "\\'") + "');");
                }
                i = i + 1;
            }
            newFN = Function;
            fn = new newFN("$data", [ "var __ret = [];", "try {", "with($data){", !openblocks ? output.join("") : '__ret = ["Not all blocks are closed correctly."]', "};", "}catch(e){__ret = [e.message];}", 'return __ret.join("").replace(/\\n\\n/g, "\\n");', "function escape(html) { return String(html).replace(/&/g, '&amp;').replace(/\"/g, '&quot;').replace(/</g, '&lt;').replace(/>/g, '&gt;');}" ].join("\n"));
            if (data) {
                return fn(data);
            } else {
                return fn;
            }
        },
        events: {
            click: _c.support.touch ? "tap" : "click"
        }
    };
    window.Clique = _c;
    $.Clique = _c;
    $.fn.clique = _c.fn;
    _c.langdirection = _c.$html.attr("dir") === "rtl" ? "right" : "left";
    _c.components = {};
    _c.component = function(name, def) {
        var fn;
        fn = function(element, options) {
            var $this;
            $this = this;
            this.Clique = _c;
            this.element = element ? $(element) : null;
            this.options = $.extend(true, {}, this.defaults, options);
            this.plugins = {};
            if (this.element) {
                this.element.data("clique.data." + name, this);
            }
            this.init();
            (this.options.plugins.length ? this.options.plugins : Object.keys(fn.plugins)).forEach(function(plugin) {
                if (fn.plugins[plugin].init) {
                    fn.plugins[plugin].init($this);
                    $this.plugins[plugin] = true;
                }
            });
            this.trigger("init.clique.component", [ name, this ]);
            return this;
        };
        fn.plugins = {};
        $.extend(true, fn.prototype, {
            defaults: {
                plugins: []
            },
            boot: function() {},
            init: function() {},
            on: function(a1, a2, a3) {
                return $(this.element || this).on(a1, a2, a3);
            },
            one: function(a1, a2, a3) {
                return $(this.element || this).one(a1, a2, a3);
            },
            off: function(evt) {
                return $(this.element || this).off(evt);
            },
            trigger: function(evt, params) {
                return $(this.element || this).trigger(evt, params);
            },
            find: function(selector) {
                return $(this.element ? this.element : []).find(selector);
            },
            proxy: function(obj, methods) {
                var $this;
                $this = this;
                methods.split(" ").forEach(function(method) {
                    if (!$this[method]) {
                        $this[method] = function() {
                            return obj[method].apply(obj, arguments);
                        };
                    }
                });
            },
            mixin: function(obj, methods) {
                var $this;
                $this = this;
                methods.split(" ").forEach(function(method) {
                    if (!$this[method]) {
                        $this[method] = obj[method].bind($this);
                    }
                });
            },
            option: function() {
                if (arguments.length === 1) {
                    return this.options[arguments[0]] || undefined;
                } else {
                    if (arguments.length === 2) {
                        this.options[arguments[0]] = arguments[1];
                    }
                }
            }
        }, def);
        this.components[name] = fn;
        this[name] = function() {
            var element, options;
            if (arguments.length) {
                switch (arguments.length) {
                  case 1:
                    if (typeof arguments[0] === "string" || arguments[0].nodeType || arguments[0] instanceof jQuery) {
                        element = $(arguments[0]);
                    } else {
                        options = arguments[0];
                    }
                    break;

                  case 2:
                    element = $(arguments[0]);
                    options = arguments[1];
                }
            }
            if (element && element.data("clique.data." + name)) {
                return element.data("clique.data." + name);
            }
            return new _c.components[name](element, options);
        };
        if (_c.domready) {
            _c.component.boot(name);
        }
        return fn;
    };
    _c.plugin = function(component, name, def) {
        this.components[component].plugins[name] = def;
    };
    _c.component.boot = function(name) {
        if (_c.components[name].prototype && _c.components[name].prototype.boot && !_c.components[name].booted) {
            _c.components[name].prototype.boot.apply(_c, []);
            _c.components[name].booted = true;
        }
    };
    _c.component.bootComponents = function() {
        var component;
        for (component in _c.components) {
            _c.component.boot(component);
        }
    };
    _c.domObservers = [];
    _c.domready = false;
    _c.ready = function(fn) {
        _c.domObservers.push(fn);
        if (_c.domready) {
            fn(document);
        }
    };
    _c.on = function(a1, a2, a3) {
        if (a1 && a1.indexOf("ready.clique.dom") > -1 && _c.domready) {
            a2.apply(_c.$doc);
        }
        return _c.$doc.on(a1, a2, a3);
    };
    _c.one = function(a1, a2, a3) {
        if (a1 && a1.indexOf("ready.clique.dom") > -1 && _c.domready) {
            a2.apply(_c.$doc);
            return _c.$doc;
        }
        return _c.$doc.one(a1, a2, a3);
    };
    _c.trigger = function(evt, params) {
        return _c.$doc.trigger(evt, params);
    };
    _c.domObserve = function(selector, fn) {
        if (!_c.support.mutationobserver) {
            return;
        }
        fn = fn || function() {};
        $(selector).each(function() {
            var $element, element, observer;
            element = this;
            $element = $(element);
            if ($element.data("observer")) {
                return;
            }
            try {
                observer = new _c.support.mutationobserver(_c.utils.debounce(function(mutations) {
                    fn.apply(element, []);
                    $element.trigger("changed.clique.dom");
                }, 50));
                observer.observe(element, {
                    childList: true,
                    subtree: true
                });
                $element.data("observer", observer);
            } catch (_error) {}
        });
    };
    _c.delay = function(fn, timeout, args) {
        if (timeout == null) {
            timeout = 0;
        }
        fn = fn || function() {};
        return setTimeout(function() {
            return fn.apply(null, args);
        }, timeout);
    };
    _c.on("domready.clique.dom", function() {
        _c.domObservers.forEach(function(fn) {
            fn(document);
        });
        if (_c.domready) {
            _c.utils.checkDisplay(document);
        }
    });
    $(function() {
        _c.$body = $("body");
        _c.ready(function(context) {
            _c.domObserve("[data-observe]");
        });
        _c.on("changed.clique.dom", function(e) {
            var ele;
            ele = e.target;
            _c.domObservers.forEach(function(fn) {
                fn(ele);
            });
            _c.utils.checkDisplay(ele);
        });
        _c.trigger("beforeready.clique.dom");
        _c.component.bootComponents();
        setInterval(function() {
            var fn, memory;
            memory = {
                x: window.pageXOffset,
                y: window.pageYOffset
            };
            fn = function() {
                var dir;
                if (memory.x !== window.pageXOffset || memory.y !== window.pageYOffset) {
                    dir = {
                        x: 0,
                        y: 0
                    };
                    if (window.pageXOffset !== memory.x) {
                        dir.x = window.pageXOffset > memory.x ? 1 : -1;
                    }
                    if (window.pageYOffset !== memory.y) {
                        dir.y = window.pageYOffset > memory.y ? 1 : -1;
                    }
                    memory = {
                        dir: dir,
                        x: window.pageXOffset,
                        y: window.pageYOffset
                    };
                    _c.$doc.trigger("scrolling.clique.dom", [ memory ]);
                }
            };
            if (_c.support.touch) {
                _c.$html.on("touchmove touchend MSPointerMove MSPointerUp pointermove pointerup", fn);
            }
            if (memory.x || memory.y) {
                fn();
            }
            return fn;
        }(), 15);
        _c.trigger("domready.clique.dom");
        if (_c.support.touch) {
            if (navigator.userAgent.match(/(iPad|iPhone|iPod)/g)) {
                _c.$win.on("load orientationchange resize", _c.utils.debounce(function() {
                    var fn;
                    fn = function() {
                        $(".height-viewport").css("height", window.innerHeight);
                        return fn;
                    };
                    return fn();
                }(), 100));
            }
        }
        _c.trigger("afterready.clique.dom");
        _c.domready = true;
    });
    if (_c.support.touch) {
        hoverset = false;
        hovercls = "hover";
        selector = ".overlay, .overlay-hover, .overlay-toggle, .animation-hover, .has-hover";
        _c.$html.on("touchstart MSPointerDown pointerdown", selector, function() {
            if (hoverset) {
                $("." + hovercls).removeClass(hovercls);
            }
            hoverset = $(this).addClass(hovercls);
        }).on("touchend MSPointerUp pointerup", function(e) {
            var exclude;
            exclude = $(e.target).parents(selector);
            if (hoverset) {
                hoverset.not(exclude).removeClass(hovercls);
            }
        });
    }
    $.expr[":"].on = function(obj) {
        return $(obj).prop("on");
    };
    return _c;
});
(function(addon) {
    if (typeof define === "function" && define.amd) {
        define("clique-events", [ "clique" ], function() {
            return addon(Clique);
        });
    }
    if (!window.Clique) {
        throw new Error("Clique.events requires Clique.core");
    }
    if (window.Clique) {
        addon(Clique);
    }
})(function(_c) {
    var $, dispatch, evt, k, v, _ref;
    $ = _c.$;
    dispatch = $.event.dispatch || $.event.handle;
    _c.events = {};
    _c.events.scrollstart = {
        setup: function(data) {
            var handler, timer, uid, _data;
            uid = _c.utils.uid("scrollstart");
            $(this).data("clique.event.scrollstart.uid", uid);
            _data = $.extend({
                latency: $.event.special.scrollstop.latency
            }, data);
            timer = null;
            handler = function(e) {
                var _args, _self;
                _self = this;
                _args = arguments;
                if (timer) {
                    clearTimeout(timer);
                } else {
                    e.type = "scrollstart.clique.dom";
                    $(e.target).trigger("scrollstart.clique.dom", e);
                }
                timer = setTimeout(function() {
                    timer = null;
                }, _data.latency);
            };
            return $(this).on("scroll", _c.utils.debounce(handler, 100)).data(uid, handler);
        },
        teardown: function() {
            var uid;
            uid = $(this).data("clique.event.scrollstart.uid");
            $(this).off("scroll", $(this).data(uid));
            $(this).removeData(uid);
            return $(this).removeData("clique.event.scrollstart.uid");
        }
    };
    _c.events.scrollstop = {
        latency: 150,
        setup: function(data) {
            var handler, timer, uid, _data;
            uid = _c.utils.uid("scrollstop");
            $(this).data("clique.event.scrolltop.uid", uid);
            _data = $.extend({
                latency: $.event.special.scrollstop.latency
            }, data);
            timer = null;
            handler = function(e) {
                var _args, _self;
                _self = this;
                _args = arguments;
                if (timer) {
                    clearTimeout(timer);
                }
                timer = setTimeout(function() {
                    timer = null;
                    e.type = "scrollstop.clique.dom";
                    $(e.target).trigger("scrollstop.clique.dom", e);
                }, _data.latency);
            };
            $(this).on("scroll", _c.utils.debounce(handler, 100)).data(uid, handler);
        },
        teardown: function() {
            var uid;
            uid = $(this).data("clique.event.scrolltop.uid");
            $(this).off("scroll", $(this).data(uid));
            $(this).removeData(uid);
            return $(this).removeData("clique.event.scrolltop.uid");
        }
    };
    _c.events.resizeend = {
        latency: 250,
        setup: function(data) {
            var handler, timer, uid, _data;
            uid = _c.utils.uid("resizeend");
            $(this).data("clique.event.resizeend.uid", uid);
            _data = $.extend({
                latency: $.event.special.resizeend.latency
            }, data);
            timer = _data;
            handler = function(e) {
                var _args, _self;
                _self = this;
                _args = arguments;
                if (timer) {
                    clearTimeout(timer);
                }
                timer = setTimeout(function() {
                    timer = null;
                    e.type = "resizeend.clique.dom";
                    return $(e.target).trigger("resizeend.clique.dom", e);
                }, _data.latency);
            };
            return $(this).on("resize", _c.utils.debounce(handler, 100)).data(uid, handler);
        },
        teardown: function() {
            var uid;
            uid = $(this).data("clique.event.resizeend.uid");
            $(this).off("resize", $(this).data(uid));
            $(this).removeData(uid);
            return $(this).removeData("clique.event.resizeend.uid");
        }
    };
    evt = function(fn) {
        if (fn) {
            return this.on(k, fn);
        } else {
            return this.trigger(k);
        }
    };
    _ref = _c.events;
    for (k in _ref) {
        v = _ref[k];
        if (typeof v === "object") {
            $.event.special[k] = v;
            $.fn[k] = evt;
        }
    }
});
(function(addon) {
    if (typeof define === "function" && define.amd) {
        define("clique-browser", [ "clique" ], function() {
            return addon(Clique);
        });
    }
    if (!window.Clique) {
        throw new Error("Clique.browser requires Clique.core");
    }
    if (window.Clique) {
        addon(Clique);
    }
})(function(_c) {
    var $;
    $ = _c.$;
    return _c.component("browser", {
        defaults: {
            addClasses: true,
            detectDevice: true,
            detectScreen: true,
            detectOS: true,
            detectBrowser: true,
            detectLanguage: true,
            detectPlugins: true,
            detectSupport: [ "flex", "animation" ]
        },
        device: {
            type: "",
            model: "",
            orientation: ""
        },
        browser: {
            engine: "",
            major: "",
            minor: "",
            name: "",
            patch: "",
            version: ""
        },
        screen: {
            size: "",
            touch: false
        },
        deviceTypes: [ "tv", "tablet", "mobile", "desktop" ],
        screens: {
            mini: 0,
            small: 480,
            medium: 768,
            large: 960,
            xlarge: 1220
        },
        browserLanguage: {
            direction: "",
            code: ""
        },
        boot: function() {
            return _c.ready(function(context) {
                var ele, obj;
                ele = _c.$doc;
                if (!ele.data("clique.data.browser")) {
                    obj = _c.browser(ele);
                }
            });
        },
        init: function() {
            this.getProperties();
            return _c.$win.on("resize orientationchange", _c.utils.debounce(function(_this) {
                return function() {
                    return _this.getProperties();
                };
            }(this), 250));
        },
        getProperties: function() {
            var win;
            win = _c.$win[0];
            this.userAgent = (win.navigator.userAgent || win.navigator.vendor || win.opera).toLowerCase();
            if (!!this.options.detectDevice) {
                this.detectDevice();
            }
            if (!!this.options.detectScreen) {
                this.detectScreen();
            }
            if (!!this.options.detectOS) {
                this.detectOS();
            }
            if (!!this.options.detectBrowser) {
                this.detectBrowser();
            }
            if (!!this.options.detectPlugins) {
                this.detectPlugins();
            }
            if (!!this.options.detectLanguage) {
                this.detectLanguage();
            }
            if (!!this.options.detectSupport) {
                this.detectSupport();
            }
            return setTimeout(function(_this) {
                return function() {
                    if (_this.options.addClasses) {
                        _this.addClasses();
                    }
                    return _this.trigger("updated.browser.clique");
                };
            }(this), 0);
        },
        test: function(rgx) {
            return rgx.test(this.userAgent);
        },
        exec: function(rgx) {
            return rgx.exec(this.userAgent);
        },
        uamatches: function(key) {
            return this.userAgent.indexOf(key) > -1;
        },
        version: function(versionType, versionFull) {
            var versionArray;
            versionType.version = versionFull;
            versionArray = versionFull.split(".");
            if (versionArray.length > 0) {
                versionArray = versionArray.reverse();
                versionType.major = versionArray.pop();
                if (versionArray.length > 0) {
                    versionType.minor = versionArray.pop();
                    if (versionArray.length > 0) {
                        versionArray = versionArray.reverse();
                        versionType.patch = versionArray.join(".");
                    } else {
                        versionType.patch = "0";
                    }
                } else {
                    versionType.minor = "0";
                }
            } else {
                versionType.major = "0";
            }
        },
        detectDevice: function() {
            var device, h, w;
            device = this.device;
            if (this.test(/googletv|smarttv|smart-tv|internet.tv|netcast|nettv|appletv|boxee|kylo|roku|dlnadoc|roku|pov_tv|hbbtv|ce\-html/)) {
                device.type = this.deviceTypes[0];
                device.model = "smarttv";
            } else {
                if (this.test(/xbox|playstation.3|wii/)) {
                    device.type = this.deviceTypes[0];
                    device.model = "console";
                } else {
                    if (this.test(/ip(a|ro)d/)) {
                        device.type = this.deviceTypes[1];
                        device.model = "ipad";
                    } else {
                        if (this.test(/tablet/) && !this.test(/rx-34/) || this.test(/folio/)) {
                            device.type = this.deviceTypes[1];
                            device.model = String(this.exec(/playbook/) || "");
                        } else {
                            if (this.test(/linux/) && this.test(/android/) && !this.test(/fennec|mobi|htc.magic|htcX06ht|nexus.one|sc-02b|fone.945/)) {
                                device.type = this.deviceTypes[1];
                                device.model = "android";
                            } else {
                                if (this.test(/kindle/) || this.test(/mac.os/) && this.test(/silk/)) {
                                    device.type = this.deviceTypes[1];
                                    device.model = "kindle";
                                } else {
                                    if (this.test(/gt-p10|sc-01c|shw-m180s|sgh-t849|sch-i800|shw-m180l|sph-p100|sgh-i987|zt180|htc(.flyer|\_flyer)|sprint.atp51|viewpad7|pandigital(sprnova|nova)|ideos.s7|dell.streak.7|advent.vega|a101it|a70bht|mid7015|next2|nook/) || this.test(/mb511/) && this.test(/rutem/)) {
                                        device.type = this.deviceTypes[1];
                                        device.model = "android";
                                    } else {
                                        if (this.test(/bb10/)) {
                                            device.type = this.deviceTypes[1];
                                            device.model = "blackberry";
                                        } else {
                                            device.model = this.exec(/iphone|ipod|android|blackberry|opera mini|opera mobi|skyfire|maemo|windows phone|palm|iemobile|symbian|symbianos|fennec|j2me/);
                                            if (device.model !== null) {
                                                device.type = this.deviceTypes[2];
                                                device.model = String(device.model);
                                            } else {
                                                device.model = "";
                                                if (this.test(/bolt|fennec|iris|maemo|minimo|mobi|mowser|netfront|novarra|prism|rx-34|skyfire|tear|xv6875|xv6975|google.wireless.transcoder/)) {
                                                    device.type = this.deviceTypes[2];
                                                } else {
                                                    if (this.test(/opera/) && this.test(/windows.nt.5/) && this.test(/htc|xda|mini|vario|samsung\-gt\-i8000|samsung\-sgh\-i9/)) {
                                                        device.type = this.deviceTypes[2];
                                                    } else {
                                                        if (this.test(/windows.(nt|xp|me|9)/) && !this.test(/phone/) || this.test(/win(9|.9|nt)/) || this.test(/\(windows 8\)/)) {
                                                            device.type = this.deviceTypes[3];
                                                        } else {
                                                            if (this.test(/macintosh|powerpc/) && !this.test(/silk/)) {
                                                                device.type = this.deviceTypes[3];
                                                                device.model = "mac";
                                                            } else {
                                                                if (this.test(/linux/) && this.test(/x11/)) {
                                                                    device.type = this.deviceTypes[3];
                                                                } else {
                                                                    if (this.test(/solaris|sunos|bsd/)) {
                                                                        device.type = this.deviceTypes[3];
                                                                    } else {
                                                                        if (this.test(/cros/)) {
                                                                            device.type = this.deviceTypes[3];
                                                                        } else {
                                                                            if (this.test(/bot|crawler|spider|yahoo|ia_archiver|covario-ids|findlinks|dataparksearch|larbin|mediapartners-google|ng-search|snappy|teoma|jeeves|tineye/) && !this.test(/mobile/)) {
                                                                                device.type = this.deviceTypes[3];
                                                                                device.model = "crawler";
                                                                            } else {
                                                                                device.type = this.deviceTypes[3];
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
            if (device.type !== "desktop" && device.type !== "tv") {
                w = _c.$win.outerWidth();
                h = _c.$win.outerHeight();
                device.orientation = "landscape";
                if (h > w) {
                    device.orientation = "portrait";
                }
            }
            this.device = device;
        },
        detectScreen: function() {
            var k, v, w, _ref;
            w = _c.$win.width();
            _ref = this.screens;
            for (k in _ref) {
                v = _ref[k];
                if (w > v - 1) {
                    this.screen.size = k;
                }
            }
            this.detectTouch();
        },
        detectTouch: function() {
            var doc, touch, win;
            win = _c.$win[0];
            doc = _c.$doc[0];
            touch = "ontouchstart" in win && win.navigator.userAgent.toLowerCase().match(/mobile|tablet/) || win.DocumentTouch && doc instanceof win.DocumentTouch || win.navigator.msPointerEnabled && win.navigator.msMaxTouchPoints > 0 || win.navigator.pointerEnabled && win.navigator.maxTouchPoints > 0 || false;
            this.screen.touch = !!touch;
        },
        detectOS: function() {
            var device, os;
            device = this.device;
            os = {};
            if (device.model !== "") {
                if (device.model === "ipad" || device.model === "iphone" || device.model === "ipod") {
                    os.name = "ios";
                    this.version(os, (this.test(/os\s([\d_]+)/) ? RegExp.$1 : "").replace(/_/g, "."));
                } else {
                    if (device.model === "android") {
                        os.name = "android";
                        this.version(os, this.test(/android\s([\d\.]+)/) ? RegExp.$1 : "");
                    } else {
                        if (device.model === "blackberry") {
                            os.name = "blackberry";
                            this.version(os, this.test(/version\/([^\s]+)/) ? RegExp.$1 : "");
                        } else {
                            if (device.model === "playbook") {
                                os.name = "blackberry";
                                this.version(os, this.test(/os ([^\s]+)/) ? RegExp.$1.replace(";", "") : "");
                            }
                        }
                    }
                }
            }
            if (!os.name) {
                if (this.uamatches("win") || this.uamatches("16bit")) {
                    os.name = "windows";
                    if (this.uamatches("windows nt 6.3")) {
                        this.version(os, "8.1");
                    } else {
                        if (this.uamatches("windows nt 6.2") || this.test(/\(windows 8\)/)) {
                            this.version(os, "8");
                        } else {
                            if (this.uamatches("windows nt 6.1")) {
                                this.version(os, "7");
                            } else {
                                if (this.uamatches("windows nt 6.0")) {
                                    this.version(os, "vista");
                                } else {
                                    if (this.uamatches("windows nt 5.2") || this.uamatches("windows nt 5.1") || this.uamatches("windows xp")) {
                                        this.version(os, "xp");
                                    } else {
                                        if (this.uamatches("windows nt 5.0") || this.uamatches("windows 2000")) {
                                            this.version(os, "2k");
                                        } else {
                                            if (this.uamatches("winnt") || this.uamatches("windows nt")) {
                                                this.version(os, "nt");
                                            } else {
                                                if (this.uamatches("win98") || this.uamatches("windows 98")) {
                                                    this.version(os, "98");
                                                } else {
                                                    if (this.uamatches("win95") || this.uamatches("windows 95")) {
                                                        this.version(os, "95");
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                } else {
                    if (this.uamatches("mac") || this.uamatches("darwin")) {
                        os.name = "mac os";
                        if (this.uamatches("68k") || this.uamatches("68000")) {
                            this.version(os, "68k");
                        } else {
                            if (this.uamatches("ppc") || this.uamatches("powerpc")) {
                                this.version(os, "ppc");
                            } else {
                                if (this.uamatches("os x")) {
                                    this.version(os, (this.test(/os\sx\s([\d_]+)/) ? RegExp.$1 : "os x").replace(/_/g, "."));
                                }
                            }
                        }
                    } else {
                        if (this.uamatches("webtv")) {
                            os.name = "webtv";
                        } else {
                            if (this.uamatches("x11") || this.uamatches("inux")) {
                                os.name = "linux";
                            } else {
                                if (this.uamatches("sunos")) {
                                    os.name = "sun";
                                } else {
                                    if (this.uamatches("irix")) {
                                        os.name = "irix";
                                    } else {
                                        if (this.uamatches("freebsd")) {
                                            os.name = "freebsd";
                                        } else {
                                            if (this.uamatches("bsd")) {
                                                os.name = "bsd";
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
            if (this.test(/\sx64|\sx86|\swin64|\swow64|\samd64/)) {
                os.addressRegisterSize = "64bit";
            } else {
                os.addressRegisterSize = "32bit";
            }
            this.operatingSystem = os;
        },
        detectBrowser: function() {
            var browser;
            browser = {};
            if (!this.test(/opera|webtv/) && (this.test(/msie\s([\d\w\.]+)/) || this.uamatches("trident"))) {
                browser.engine = "trident";
                browser.name = "ie";
                if (!window.addEventListener && document.documentMode && document.documentMode === 7) {
                    this.version(browser, "8.compat");
                } else {
                    if (this.test(/trident.*rv[ :](\d+)\./)) {
                        this.version(browser, RegExp.$1);
                    } else {
                        this.version(browser, this.test(/trident\/4\.0/) ? "8" : RegExp.$1);
                    }
                }
            } else {
                if (this.uamatches("firefox")) {
                    browser.engine = "gecko";
                    browser.name = "firefox";
                    this.version(browser, this.test(/firefox\/([\d\w\.]+)/) ? RegExp.$1 : "");
                } else {
                    if (this.uamatches("gecko/")) {
                        browser.engine = "gecko";
                    } else {
                        if (this.uamatches("opera") || this.uamatches("opr")) {
                            browser.name = "opera";
                            browser.engine = "presto";
                            this.version(browser, this.test(/version\/([\d\.]+)/) ? RegExp.$1 : this.test(/opera(\s|\/)([\d\.]+)/) ? RegExp.$2 : "");
                        } else {
                            if (this.uamatches("konqueror")) {
                                browser.name = "konqueror";
                            } else {
                                if (this.uamatches("chrome")) {
                                    browser.engine = "webkit";
                                    browser.name = "chrome";
                                    this.version(browser, this.test(/chrome\/([\d\.]+)/) ? RegExp.$1 : "");
                                } else {
                                    if (this.uamatches("iron")) {
                                        browser.engine = "webkit";
                                        browser.name = "iron";
                                    } else {
                                        if (this.uamatches("crios")) {
                                            browser.name = "chrome";
                                            browser.engine = "webkit";
                                            this.version(browser, this.test(/crios\/([\d\.]+)/) ? RegExp.$1 : "");
                                        } else {
                                            if (this.uamatches("applewebkit/")) {
                                                browser.name = "safari";
                                                browser.engine = "webkit";
                                                this.version(browser, this.test(/version\/([\d\.]+)/) ? RegExp.$1 : "");
                                            } else {
                                                if (this.uamatches("mozilla/")) {
                                                    browser.engine = "gecko";
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
            this.browser = browser;
        },
        detectLanguage: function() {
            var body, win;
            body = _c.$body[0];
            win = _c.$win[0];
            this.browserLanguage.direction = win.getComputedStyle(body).direction || "ltr";
            this.browserLanguage.code = win.navigator.userLanguage || win.navigator.language;
        },
        detectPlugins: function() {
            var plugin, _i, _len, _ref, _results;
            this.plugins = [];
            if (typeof window.navigator.plugins !== "undefined") {
                _ref = window.navigator.plugins;
                _results = [];
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    plugin = _ref[_i];
                    _results.push(this.plugins.push(plugin.name));
                }
                return _results;
            }
        },
        detectSupport: function() {
            var check, supports, _i, _len, _ref;
            supports = function() {
                var div, vendors;
                div = _c.$doc[0].createElement("div");
                vendors = "Khtml Ms ms O Moz Webkit".split(" ");
                return function(prop) {
                    var vendor, _i, _len;
                    if (typeof div.style[prop] !== "undefined") {
                        return true;
                    }
                    prop = prop.replace(/^[a-z]/, function(val) {
                        return val.toUpperCase();
                    });
                    for (_i = 0, _len = vendors.length; _i < _len; _i++) {
                        vendor = vendors[_i];
                        if (typeof div.style[vendor + prop] !== "undefined") {
                            return true;
                        }
                    }
                    return false;
                };
            }();
            if (!this.css) {
                this.css = {};
            }
            _ref = this.options.detectSupport;
            for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                check = _ref[_i];
                this.css[check] = supports(check);
                return;
            }
        },
        addClasses: function() {
            var k, modelClass, nameClass, orientationClass, sizeClass, supportClass, touchClass, typeClass, v, _ref;
            this.removeClasses();
            if (this.browser.name) {
                nameClass = this.browser.name;
                if (nameClass === "ie") {
                    nameClass += " ie" + this.browser.major;
                }
                this.classes.push(nameClass);
                _c.$html.addClass(nameClass);
            }
            if (this.device.type) {
                typeClass = this.device.type;
                this.classes.push(typeClass);
                _c.$html.addClass(typeClass);
            }
            if (this.device.model) {
                modelClass = this.device.model;
                this.classes.push(modelClass);
                _c.$html.addClass(modelClass);
            }
            if (this.device.orientation) {
                orientationClass = this.device.orientation;
                this.classes.push(orientationClass);
                _c.$html.addClass(orientationClass);
            }
            if (this.screen.size) {
                sizeClass = "screen-" + this.screen.size;
                this.classes.push(sizeClass);
                _c.$html.addClass(sizeClass);
            }
            _ref = this.css;
            for (k in _ref) {
                v = _ref[k];
                if (!v) {
                    supportClass = "no" + k;
                    this.classes.push(supportClass);
                    _c.$html.addClass(supportClass);
                }
            }
            touchClass = this.screen.touch ? "touch" : "notouch";
            this.classes.push(touchClass);
            _c.$html.addClass(touchClass);
            if (this.browserLanguage.direction) {
                _c.$html.attr("dir", this.browserLanguage.direction);
            }
            if (this.browserLanguage.code) {
                return _c.$html.attr("lang", this.browserLanguage.code);
            }
        },
        removeClasses: function() {
            if (!this.classes) {
                this.classes = [];
            }
            $.each(this.classes, function(idx, selector) {
                return _c.$html.removeClass(selector);
            });
            this.classes = [];
        }
    });
});
(function(addon) {
    if (typeof define === "function" && define.amd) {
        define("clique-alert", [ "clique" ], function() {
            return addon(Clique);
        });
    }
    if (!window.Clique) {
        throw new Error("Clique.alert requires Clique.core");
    }
    if (window.Clique) {
        addon(Clique);
    }
})(function(_c) {
    var $;
    $ = _c.$;
    return _c.component("alert", {
        defaults: {
            fade: true,
            duration: 400,
            trigger: ".alert-close"
        },
        boot: function() {
            return _c.$html.on("click.alert.clique", "[data-alert]", function(e) {
                var ele, obj;
                ele = $(this);
                if (!ele.data("clique.data.alert")) {
                    obj = _c.alert(ele, _c.utils.options(ele.attr("data-alert")));
                    if ($(e.target).is(obj.options.trigger)) {
                        e.preventDefault();
                        return obj.close();
                    }
                }
            });
        },
        init: function() {
            return this.on("click", this.options.trigger, function(_this) {
                return function(e) {
                    e.preventDefault();
                    return _this.close();
                };
            }(this));
        },
        close: function() {
            var element, removeElement;
            element = this.trigger("close.clique.alert");
            removeElement = function(_this) {
                return function() {
                    return _this.trigger("closed.clique.alert").remove();
                };
            }(this);
            if (this.options.fade) {
                return element.css({
                    overflow: "hidden",
                    "max-height": element.height()
                }).animate({
                    height: 0,
                    opacity: 0,
                    "padding-top": 0,
                    "padding-bottom": 0,
                    "margin-top": 0,
                    "margin-bottom": 0
                }, this.options.duration, removeElement);
            } else {
                return removeElement();
            }
        }
    });
});
(function(addon) {
    if (typeof define === "function" && define.amd) {
        define("clique-cover", [ "clique" ], function() {
            return addon(Clique);
        });
    }
    if (!window.Clique) {
        throw new Error("Clique.cover requires Clique.core");
    }
    if (window.Clique) {
        addon(Clique);
    }
})(function(_c) {
    var $;
    $ = _c.$;
    return _c.component("cover", {
        defaults: {
            automute: true
        },
        boot: function() {
            return _c.ready(function(context) {
                return $("[data-cover]", context).each(function() {
                    var ele, obj;
                    ele = $(this);
                    if (!ele.data("clique.data.cover")) {
                        obj = _c.cover(ele, _c.utils.options(ele.attr("data-cover")));
                    }
                });
            });
        },
        init: function() {
            var src;
            this.parent = this.element.parent();
            _c.$win.on("load resize orientationchange", _c.utils.debounce(function(_this) {
                return function() {
                    return _this.check();
                };
            }(this), 100));
            this.on("display.clique.check", function(_this) {
                return function(e) {
                    if (_this.is(":visible")) {
                        return _this.check();
                    }
                };
            }(this));
            this.check();
            if (this.element.is("iframe") && this.options.automute) {
                src = this.element.attr("src");
                return this.element.attr("src", "").on("load", function() {
                    return this.contentWindow.postMessage('{ "event" : "command", "func" : "mute", "method" :"setVolume", "value" :0}', "*");
                }).attr("src", [ src, src.indexOf("?") > -1 ? "&" : "?", "enablejsapi=1&api=1" ].join(""));
            }
        },
        check: function() {
            var h, height, w, width;
            this.element.css({
                width: "",
                height: ""
            });
            this.dimension = {
                w: this.element.width(),
                h: this.element.height()
            };
            if (this.element.attr("width") && !isNaN(this.element.attr("width"))) {
                this.dimension.w = this.element.attr("width");
            }
            if (this.element.attr("height") && !isNaN(this.element.attr("height"))) {
                this.dimension.h = this.element.attr("height");
            }
            this.ratio = this.dimension.w / this.dimension.h;
            w = this.parent.width();
            h = this.parent.height();
            if (w / this.ratio < h) {
                width = Math.ceil(h * this.ratio);
                height = h;
            } else {
                width = w;
                height = Math.ceil(w / this.ratio);
            }
            return this.element.css({
                width: width,
                height: height
            });
        }
    });
});
(function(addon) {
    if (typeof define === "function" && define.amd) {
        define("clique-dropdown", [ "clique" ], function() {
            return addon(Clique);
        });
    }
    if (!window.Clique) {
        throw new Error("Clique.dropdown requires Clique.core");
    }
    if (window.Clique) {
        addon(Clique);
    }
})(function(_c) {
    var $, active, hoverIdle;
    $ = _c.$;
    active = false;
    hoverIdle = null;
    return _c.component("dropdown", {
        defaults: {
            trigger: "hover",
            remaintime: 800,
            delay: 0
        },
        remainIdle: false,
        boot: function() {
            var triggerevent = _c.support.touch ? "click" : "mouseenter";
            _c.$html.on(triggerevent + ".dropdown.clique", "[data-dropdown]", function(e) {
                var ele, obj;
                ele = $(this);
                if (!ele.data("clique.data.dropdown")) {
                    obj = _c.dropdown(ele, _c.utils.options(ele.data("dropdown")));
                    if (triggerevent === "click" || triggerevent === "mouseenter" && obj.options.trigger === "hover") {
                        obj.element.trigger(triggerevent);
                    }
                    if (obj.element.find(".dropdown").length) {
                        return e.preventDefault();
                    }
                }
            });
        },
        init: function() {
            var $this = this;
            this.dropdown = this.find(".dropdown");
            this.centered = this.dropdown.hasClass("dropdown-center");
            this.boundary = $(this.options.boundary).length ? $(this.options.boundary) : _c.$win;
            this.flipped = this.dropdown.hasClass("dropdown-flip");
            this.scrollable = this.dropdown.hasClass("dropdown-scrollable");
            this.setAria();
            if (this.options.trigger === "click" || _c.support.touch) {
                this.on("click.clique.dropdown", function(e) {
                    var $target;
                    $target = $(e.target);
                    if (!$target.parents(".dropdown").length) {
                        if ($target.is('a[href="#"]') || $target.parent().is('a[href="#"]') || $this.dropdown.length && !$this.dropdown.is(":visible")) {
                            e.preventDefault();
                        }
                        $target.blur();
                    }
                    if (!$this.element.hasClass("open")) {
                        return $this.show();
                    } else {
                        if ($target.is("a:not(.js-prevent)") || $target.is(".dropdown-close") || !$this.dropdown.find(e.target).length) {
                            return $this.hide();
                        }
                    }
                });
            } else {
                this.on("mouseenter", function(e) {
                    if ($this.remainIdle) {
                        clearTimeout($this.remainIdle);
                    }
                    if (hoverIdle) {
                        clearTimeout(hoverIdle);
                    }
                    hoverIdle = setTimeout($this.show.bind($this), $this.options.delay);
                }).on("mouseleave", function() {
                    if (hoverIdle) {
                        clearTimeout(hoverIdle);
                    }
                    $this.remainIdle = setTimeout(function() {
                        return $this.hide();
                    }, $this.options.remaintime);
                }).on("click", function(e) {
                    var $target;
                    $target = $(e.target);
                    if ($this.remainIdle) {
                        clearTimeout($this.remainIdle);
                    }
                    if ($target.is("a[href='#']") || $target.parent().is("a[href='#']")) {
                        e.preventDefault();
                    }
                    return $this.show();
                });
            }
        },
        show: function() {
            _c.$html.off("click.outer.dropdown");
            if (active && active[0] !== this.element[0]) {
                active.removeClass("open");
                active.attr("aria-expanded", "false");
            }
            if (hoverIdle) {
                clearTimeout(hoverIdle);
            }
            this.element.addClass("open");
            this.setAria();
            this.trigger("show.clique.dropdown", [ this ]);
            _c.utils.checkDisplay(this.dropdown, true);
            active = this.element;
            return this.registerOuterClick();
        },
        hide: function() {
            this.element.removeClass("open");
            this.remainIdle = false;
            this.setAria();
            this.trigger("hide.clique.dropdown", [ this ]);
            if (active && active[0] === this.element[0]) {
                active = false;
            }
        },
        setAria: function() {
            this.element.attr("aria-haspopup", "true");
            this.element.attr("aria-expanded", this.element.hasClass("open"));
        },
        registerOuterClick: function() {
            var $this;
            $this = this;
            _c.$html.off("click.outer.dropdown");
            return setTimeout(function() {
                return _c.$html.on("click.outer.dropdown", function(e) {
                    var $target;
                    if (hoverIdle) {
                        clearTimeout(hoverIdle);
                    }
                    $target = $(e.target);
                    if (active && active[0] === $this.element[0] && ($target.is("a:not(.js-prevent)") || $target.is(".dropdown-close") || !$this.dropdown.find(e.target).length)) {
                        $this.hide();
                        return _c.$html.off("click.outer.dropdown");
                    }
                });
            }, 10);
        }
    });
});
(function(addon) {
    if (typeof define === "function" && define.amd) {
        define("clique-radioCheckboxes", [ "clique" ], function() {
            return addon(Clique);
        });
    }
    if (!window.Clique) {
        throw new Error("Clique.radioCheckboxes requires Clique.core");
    }
    if (window.Clique) {
        addon(Clique);
    }
})(function(_c) {
    var $;
    $ = _c.$;
    _c.component("radioCheckboxes", {
        boot: function() {
            _c.$doc.on("ready", function() {
                _c.$('input[type="checkbox"]:not([data-switch]), input[type="radio"]').each(function() {
                    var ele;
                    ele = $(this);
                    if (!ele.data("clique.data.radioCheckboxes")) {
                        _c.radioCheckboxes(ele);
                    }
                });
            });
        },
        init: function() {
            var ele = $(this.element);
            this.type = ele.attr("type");
            if (!ele.closest(".form-" + this.type).length) {
                ele.wrap("<span class='form-" + this.type + "' />");
                ele.after("<span class='form-" + this.type + "-check' />");
            }
            this.updateClasses();
            this.bindListeners();
            this.bindEvents();
        },
        updateClasses: function() {
            var ele = $(this.element);
            var wrapper = ele.closest(".form-" + this.type);
            if (ele.is(":disabled")) {
                wrapper.addClass("disabled");
            } else {
                wrapper.removeClass("disabled");
            }
            if (ele.is(":checked")) {
                wrapper.removeClass("unchecked").addClass("checked");
            } else {
                wrapper.removeClass("checked").addClass("unchecked");
            }
        },
        bindListeners: function() {
            var $this = this;
            this.on("clique." + this.type + ".checked clique." + this.type + ".unchecked", function() {
                $this.updateClasses();
            });
        },
        bindEvents: function() {
            var ele = $(this.element);
            ele.on("change", function() {
                if (ele.is(":checked")) {
                    ele.trigger("clique." + this.type + ".checked");
                } else {
                    ele.trigger("clique." + this.type + ".unchecked");
                }
            });
        }
    });
});
(function(addon) {
    if (typeof define === "function" && define.amd) {
        define("clique-grid", [ "clique" ], function() {
            return addon(Clique);
        });
    }
    if (!window.Clique) {
        throw new Error("Clique.grid requires Clique.core");
    }
    if (window.Clique) {
        addon(Clique);
    }
})(function(_c) {
    var $, grids;
    $ = _c.$;
    grids = [];
    _c.component("rowMatchHeight", {
        defaults: {
            target: false,
            row: true
        },
        boot: function() {
            return _c.ready(function(context) {
                return $("[data-row-match]", context).each(function() {
                    var grid, obj;
                    grid = $(this);
                    if (!grid.data("rowMatchHeight")) {
                        obj = _c.rowMatchHeight(grid, _c.utils.options(grid.attr("data-row-match")));
                    }
                });
            });
        },
        init: function() {
            var $this;
            $this = this;
            this.columns = this.element.children();
            this.elements = this.options.target ? this.find(this.options.target) : this.columns;
            if (!this.columns.length) {
                return;
            }
            _c.$win.on("load resize orientationchange", function() {
                var fn;
                fn = function() {
                    return $this.match();
                };
                _c.$(function() {
                    return fn();
                });
                return _c.utils.debounce(fn, 50);
            }());
            _c.$html.on("changed.clique.dom", function(e) {
                $this.columns = $this.element.children();
                $this.elements = $this.options.target ? $this.find($this.options.target) : $this.columns;
                return $this.match();
            });
            this.on("display.clique.check", function(_this) {
                return function(e) {
                    if (_this.element.is(":visible")) {
                        return _this.match();
                    }
                };
            }(this));
            return grids.push(this);
        },
        match: function() {
            var firstvisible, stacked;
            firstvisible = this.columns.filter(":visible:first");
            if (!firstvisible.length) {
                return;
            }
            stacked = Math.ceil(100 * parseFloat(firstvisible.css("width")) / parseFloat(firstvisible.parent().css("width"))) >= 100;
            if (stacked) {
                this.revert();
            } else {
                _c.utils.matchHeights(this.elements, this.options);
            }
            return this;
        },
        revert: function() {
            this.elements.css("min-height", "");
            return this;
        }
    });
    _c.component("rowMargin", {
        defaults: {
            cls: "row-margin"
        },
        boot: function() {
            return _c.ready(function(context) {
                return $("[data-row-margin]", context).each(function() {
                    var grid, obj;
                    grid = $(this);
                    if (!grid.data("rowMargin")) {
                        obj = _c.rowMargin(grid, _c.utils.options(grid.attr("data-row-margin")));
                    }
                });
            });
        },
        init: function() {
            var firstChild = this.find("> *").first();
            var leftSpacing = parseInt(firstChild.css("padding-left"), 10);
            this.element.css("margin-bottom", -leftSpacing);
            this.find("> *").css("margin-bottom", leftSpacing);
        }
    });
    _c.utils.matchHeights = function(elements, options) {
        var matchHeights;
        elements = $(elements).css("min-height", "");
        options = _c.$.extend({
            row: true
        }, options);
        matchHeights = function(group) {
            var max;
            if (group.length < 2) {
                return;
            }
            max = 0;
            return group.each(function() {
                max = Math.max(max, $(this).outerHeight());
            }).each(function() {
                return $(this).css("min-height", max);
            });
        };
        if (options.row) {
            elements.first().width();
            return setTimeout(function() {
                var group, lastoffset;
                lastoffset = false;
                group = [];
                elements.each(function() {
                    var ele, offset;
                    ele = $(this);
                    offset = ele.offset().top;
                    if (offset !== lastoffset && group.length) {
                        matchHeights($(group));
                        group = [];
                        offset = ele.offset().top;
                    }
                    group.push(ele);
                    lastoffset = offset;
                });
                if (group.length) {
                    return matchHeights($(group));
                }
            }, 0);
        } else {
            return matchHeights(elements);
        }
    };
});
(function(addon) {
    if (typeof define === "function" && define.amd) {
        define("clique-modal", [ "clique" ], function() {
            return addon(Clique);
        });
    }
    if (!window.Clique) {
        throw new Error("Clique.modal requires Clique.core");
    }
    if (window.Clique) {
        addon(Clique);
    }
})(function(_c) {
    var $, active, setContent;
    $ = _c.$;
    setContent = function(content, modal) {
        if (!modal) {
            return;
        }
        if (typeof content === "object") {
            content = content instanceof jQuery ? content : $(content);
            if (content.parent().length) {
                modal.persist = content;
                modal.persist.data("modalPersistParent", content.parent());
            }
        } else {
            if (typeof content === "string" || typeof content === "number") {
                content = $("<div></div>").html(content);
            } else {
                content = $("<div></div>").html("Clique.modal Error : Unsupported data type : " + typeof content);
            }
        }
        content.appendTo(modal.element.find(".modal-dialog"));
        return modal;
    };
    active = false;
    _c.component("modal", {
        scrollable: false,
        transition: false,
        defaults: {
            keyboard: true,
            bgclose: true,
            minScrollHeight: 150,
            center: false
        },
        init: function() {
            var $this;
            $this = this;
            this.transition = _c.support.transition;
            this.paddingdir = "padding-" + (_c.langdirection === "left" ? "right" : "left");
            this.dialog = this.find(".modal-dialog");
            this.element.attr("aria-hidden", this.element.hasClass("open"));
            return this.on("click", ".modal-close", function(e) {
                e.preventDefault();
                return $this.hide();
            }).on("click", function(e) {
                var target;
                target = $(e.target);
                if (target[0] === $this.element[0] && $this.options.bgclose) {
                    return $this.hide();
                }
            });
        },
        toggle: function() {
            return this[this.isActive() ? "hide" : "show"]();
        },
        show: function() {
            var $this;
            $this = this;
            if (this.isActive()) {
                return;
            }
            if (active) {
                active.hide(true);
            }
            this.element.removeClass("open").show();
            this.resize();
            active = this;
            _c.$html.addClass("modal-page").height();
            this.element.addClass("open");
            this.element.attr("aria-hidden", "false");
            this.element.trigger("show.clique.modal");
            _c.utils.checkDisplay(this.dialog, true);
            return this;
        },
        hide: function(force) {
            var $this;
            if (!this.isActive()) {
                return;
            }
            if (!force && _c.support.transition) {
                $this = this;
                this.one(_c.support.transition.end, function() {
                    return $this._hide();
                }).removeClass("open");
            } else {
                this._hide();
            }
            return this;
        },
        resize: function() {
            var bodywidth, dh, pad;
            bodywidth = _c.$body.width();
            this.scrollbarwidth = window.innerWidth - bodywidth;
            _c.$body.css(this.paddingdir, this.scrollbarwidth);
            this.element.css("overflow-y", this.scrollbarwidth ? "scroll" : "auto");
            if (!this.updateScrollable() && this.options.center) {
                dh = this.dialog.outerHeight();
                pad = parseInt(this.dialog.css("margin-top"), 10) + parseInt(this.dialog.css("margin-bottom"), 10);
                if (dh + pad < window.innerHeight) {
                    return this.dialog.css({
                        top: window.innerHeight / 2 - dh / 2 - pad
                    });
                } else {
                    return this.dialog.css({
                        top: ""
                    });
                }
            }
        },
        updateScrollable: function() {
            var dh, h, offset, scrollable, wh;
            scrollable = this.dialog.find(".overflow-container:visible:first");
            if (scrollable.length) {
                scrollable.css("height", 0);
                offset = Math.abs(parseInt(this.dialog.css("margin-top"), 10));
                dh = this.dialog.outerHeight();
                wh = window.innerHeight;
                h = wh - 2 * (offset < 20 ? 20 : offset) - dh;
                scrollable.css("height", h < this.options.minScrollHeight ? "" : h);
                return true;
            }
            return false;
        },
        _hide: function() {
            this.element.hide().removeClass("open");
            this.element.attr("aria-hidden", "true");
            _c.$html.removeClass("modal-page");
            _c.$body.css(this.paddingdir, "");
            if (active === this) {
                active = false;
            }
            return this.trigger("hide.clique.modal");
        },
        isActive: function() {
            return active === this;
        }
    });
    _c.component("modalTrigger", {
        boot: function() {
            _c.$html.on("click.modal.clique", "[data-modal]", function(e) {
                var ele, modal;
                ele = $(this);
                if (ele.is("a")) {
                    e.preventDefault();
                }
                if (!ele.data("clique.data.modalTrigger")) {
                    modal = _c.modalTrigger(ele, _c.utils.options(ele.attr("data-modal")));
                    return modal.show();
                }
            });
            _c.$html.on("keydown.modal.clique", function(e) {
                if (active && e.keyCode === 27 && active.options.keyboard) {
                    e.preventDefault();
                    return active.hide();
                }
            });
            return _c.$win.on("resize orientationchange", _c.utils.debounce(function() {
                if (active) {
                    return active.resize();
                }
            }, 150));
        },
        init: function() {
            var $this;
            $this = this;
            this.options = _c.$.extend({
                target: $this.element.is("a") ? $this.element.attr("href") : false
            }, this.options);
            this.modal = _c.modal(this.options.target, this.options);
            this.on("click", function(e) {
                e.preventDefault();
                return $this.show();
            });
            return this.proxy(this.modal, "show hide isActive");
        }
    });
    _c.modal.dialog = function(content, options) {
        var modal;
        modal = _c.modal($(_c.modal.dialog.template).appendTo("body"), options);
        modal.on("hide.clique.modal", function() {
            if (modal.persist) {
                modal.persist.appendTo(modal.persist.data("modalPersistParent"));
                modal.persist = false;
            }
            return modal.element.remove();
        });
        setContent(content, modal);
        return modal;
    };
    _c.modal.dialog.template = '<div class="modal"><div class="modal-dialog" style="min-height :0;"></div></div>';
    _c.modal.alert = function(content, options) {
        return _c.modal.dialog([ '<div class="margin modal-content">' + String(content) + "</div>", '<div class="modal-footer text-right"><button class="button button-primary modal-close">Ok</button></div>' ].join(""), _c.$.extend({
            bgclose: false,
            keyboard: false
        }, options)).show();
    };
    _c.modal.confirm = function(content, onconfirm, options) {
        var modal;
        onconfirm = _c.$.isFunction(onconfirm) ? onconfirm : function() {};
        modal = _c.modal.dialog([ '<div class="margin modal-content">' + String(content) + "</div>", '<div class="modal-footer text-right"><button class="button button-primary js-modal-confirm">Ok</button> <button class="button modal-close">Cancel</button></div>' ].join(""), _c.$.extend({
            bgclose: false,
            keyboard: false
        }, options));
        modal.element.find(".js-modal-confirm").on("click", function() {
            onconfirm();
            return modal.hide();
        });
        return modal.show();
    };
});
(function(addon) {
    if (typeof define === "function" && define.amd) {
        define("clique-nav", [ "clique" ], function() {
            return addon(Clique);
        });
    }
    if (!window.Clique) {
        throw new Error("Clique.nav requires Clique.core");
    }
    if (window.Clique) {
        addon(Clique);
    }
})(function(_c) {
    var $, getHeight;
    $ = _c.$;
    getHeight = function(ele) {
        var $ele, height, tmp;
        $ele = $(ele);
        height = "auto";
        if ($ele.is(":visible")) {
            height = $ele.outerHeight();
        } else {
            tmp = {
                position: $ele.css("position"),
                visibility: $ele.css("visibility"),
                display: $ele.css("display")
            };
            height = $ele.css({
                position: "absolute",
                visibility: "hidden",
                display: "block"
            }).outerHeight();
            $ele.css(tmp);
        }
        return height;
    };
    return _c.component("nav", {
        defaults: {
            toggle: ">li.parent > a[href='#']",
            lists: ">li.parent > ul",
            multiple: false
        },
        boot: function() {
            return _c.ready(function(context) {
                return $("[data-nav]", context).each(function() {
                    var nav, obj;
                    nav = $(this);
                    if (!nav.data("clique.data.nav")) {
                        obj = _c.nav(nav, _c.utils.options(nav.attr("data-nav")));
                    }
                });
            });
        },
        init: function() {
            var $this;
            $this = this;
            this.on("click.clique.nav", this.options.toggle, function(e) {
                var ele;
                e.preventDefault();
                ele = $(this);
                return $this.open(ele.parent()[0] === $this.element[0] ? ele : ele.parent("li"));
            });
            return this.find(this.options.lists).each(function() {
                var $ele, parent;
                $ele = $(this);
                parent = $ele.parent();
                $ele.wrap('<div style="overflow :hidden;height :0;position :relative;"></div>');
                parent.data("list-container", $ele.parent());
                parent.attr("aria-expanded", parent.hasClass("open"));
                if (parent.hasClass("active") || parent.hasClass("open")) {
                    return $this.open(parent, true);
                }
            });
        },
        open: function(li, noAnimation) {
            var $li, $this, element;
            $this = this;
            element = this.element;
            $li = $(li);
            if (!this.options.multiple) {
                element.children(".open").not(li).each(function() {
                    var ele;
                    ele = $(this);
                    if (ele.data("list-container")) {
                        return ele.data("list-container").stop().animate({
                            height: 0
                        }, function() {
                            return $(this).parent().removeClass("open");
                        });
                    }
                });
            }
            $li.toggleClass("open");
            $li.attr("aria-expanded", $li.hasClass("open"));
            if ($li.data("list-container")) {
                if (noAnimation) {
                    $li.data("list-container").stop().height($li.hasClass("open") ? "auto" : 0);
                    return this.trigger("display.clique.check");
                } else {
                    return $li.data("list-container").stop().animate({
                        height: $li.hasClass("open") ? getHeight($li.data("list-container").find("ul:first")) : 0
                    }, function() {
                        return $this.trigger("display.clique.check");
                    });
                }
            }
        }
    });
});
(function(addon) {
    if (typeof define === "function" && define.amd) {
        define("clique-scrollspy", [ "clique" ], function() {
            return addon(Clique);
        });
    }
    if (!window.Clique) {
        throw new Error("Clique.scrollspy requires Clique.core");
    }
    if (window.Clique) {
        addon(Clique);
    }
})(function(_c) {
    var $, $doc, $win, checkScrollSpy, checkScrollSpyNavs, scrollspies, scrollspynavs;
    $ = _c.$;
    $win = _c.$win;
    $doc = _c.$doc;
    scrollspies = [];
    checkScrollSpy = function() {
        var i, _results;
        i = 0;
        _results = [];
        while (i < scrollspies.length) {
            _c.support.requestAnimationFrame.apply(window, [ scrollspies[i].check ]);
            _results.push(i++);
        }
        return _results;
    };
    _c.component("scrollspy", {
        defaults: {
            target: false,
            class: "scrollspy-inview",
            initcls: "scrollspy-init-inview",
            topoffset: 0,
            leftoffset: 0,
            repeat: false,
            delay: 0
        },
        boot: function() {
            $doc.on("scrolling.clique.dom", _c.utils.debounce(checkScrollSpy, 150));
            $win.on("load resize orientationchange", _c.utils.debounce(checkScrollSpy, 150));
            return _c.ready(function(context) {
                return $("[data-scrollspy]", context).each(function() {
                    var element, obj;
                    element = $(this);
                    if (!element.data("clique.data.scrollspy")) {
                        obj = _c.scrollspy(element, _c.utils.options(element.attr("data-scrollspy")));
                    }
                });
            });
        },
        init: function() {
            var $this, fn, togglecls;
            $this = this;
            togglecls = this.options.class.split(/,/);
            fn = function() {
                var delayIdx, elements, toggleclsIdx;
                elements = $this.options.target ? $this.element.find($this.options.target) : $this.element;
                delayIdx = elements.length === 1 ? 1 : 0;
                toggleclsIdx = 0;
                return elements.each(function(idx) {
                    var element, initinview, inview, inviewstate, toggle;
                    element = $(this);
                    inviewstate = element.data("inviewstate");
                    inview = _c.utils.isInView(element, $this.options);
                    toggle = element.data("cliqueScrollspyCls") || togglecls[toggleclsIdx].trim();
                    if (inview && !inviewstate && !element.data("scrollspy-idle")) {
                        if (!initinview) {
                            element.addClass($this.options.initcls);
                            $this.offset = element.offset();
                            initinview = true;
                            element.trigger("init.clique.scrollspy");
                        }
                        element.data("scrollspy-idle", setTimeout(function() {
                            element.addClass("scrollspy-inview").toggleClass(toggle).width();
                            element.trigger("inview.clique.scrollspy");
                            element.data("scrollspy-idle", false);
                            return element.data("inviewstate", true);
                        }, $this.options.delay * delayIdx));
                        delayIdx++;
                    }
                    if (!inview && inviewstate && $this.options.repeat) {
                        if (element.data("scrollspy-idle")) {
                            clearTimeout(element.data("scrollspy-idle"));
                        }
                        element.removeClass("scrollspy-inview").toggleClass(toggle);
                        element.data("inviewstate", false);
                        element.trigger("outview.clique.scrollspy");
                    }
                    toggleclsIdx = togglecls[toggleclsIdx + 1] ? toggleclsIdx + 1 : 0;
                });
            };
            fn();
            this.check = fn;
            return scrollspies.push(this);
        }
    });
    scrollspynavs = [];
    checkScrollSpyNavs = function() {
        var i, _results;
        i = 0;
        _results = [];
        while (i < scrollspynavs.length) {
            _c.support.requestAnimationFrame.apply(window, [ scrollspynavs[i].check ]);
            _results.push(i++);
        }
        return _results;
    };
    return _c.component("scrollspynav", {
        defaults: {
            class: "active",
            closest: false,
            topoffset: 0,
            leftoffset: 0,
            smoothscroll: false
        },
        boot: function() {
            $doc.on("scrolling.clique.dom", checkScrollSpyNavs);
            $win.on("resize orientationchange", _c.utils.debounce(checkScrollSpyNavs, 50));
            return _c.ready(function(context) {
                return $("[data-scrollspy-nav]", context).each(function() {
                    var element, obj;
                    element = $(this);
                    if (!element.data("scrollspynav")) {
                        obj = _c.scrollspynav(element, _c.utils.options(element.attr("data-scrollspy-nav")));
                    }
                });
            });
        },
        init: function() {
            var $this, clsActive, clsClosest, fn, ids, links, targets;
            ids = [];
            links = this.find("a[href^='#']").each(function() {
                return ids.push($(this).attr("href"));
            });
            targets = $(ids.join(","));
            clsActive = this.options.class;
            clsClosest = this.options.closest || this.options.closest;
            $this = this;
            fn = function() {
                var i, inviews, navitems, scrollTop, target;
                inviews = [];
                i = 0;
                while (i < targets.length) {
                    if (_c.utils.isInView(targets.eq(i), $this.options)) {
                        inviews.push(targets.eq(i));
                    }
                    i++;
                }
                if (inviews.length) {
                    scrollTop = $win.scrollTop();
                    target = function() {
                        i = 0;
                        while (i < inviews.length) {
                            if (inviews[i].offset().top >= scrollTop) {
                                return inviews[i];
                            }
                            i++;
                        }
                    }();
                    if (!target) {
                        return;
                    }
                    if ($this.options.closest) {
                        links.closest(clsClosest).removeClass(clsActive);
                        navitems = links.filter("a[href='#" + target.attr("id") + "']").closest(clsClosest).addClass(clsActive);
                    } else {
                        navitems = links.removeClass(clsActive).filter("a[href='#" + target.attr("id") + "']").addClass(clsActive);
                    }
                    return $this.element.trigger("inview.clique.scrollspynav", [ target, navitems ]);
                }
            };
            if (this.options.smoothscroll && _c.smoothScroll) {
                links.each(function() {
                    return _c.smoothScroll(this, $this.options.smoothscroll);
                });
            }
            fn();
            this.element.data("scrollspynav", this);
            this.check = fn;
            return scrollspynavs.push(this);
        }
    });
});
(function(addon) {
    if (typeof define === "function" && define.amd) {
        define("clique-scrollto", [ "clique" ], function() {
            return addon(Clique);
        });
    }
    if (!window.Clique) {
        throw new Error("Clique.scrollTo requires Clique.core");
    }
    if (window.Clique) {
        addon(Clique);
    }
})(function(_c) {
    var $ = _c.$;
    _c.component("scrollTo", {
        defaults: {
            duration: 1e3,
            transition: "easeOutExpo",
            offset: 0
        },
        boot: function() {
            return _c.$html.on("click.scrollTo.clique", "[data-scrollto]", function(e) {
                var ele, obj;
                e.preventDefault();
                ele = $(this);
                if (!ele.data("clique.data.scrollTo")) {
                    obj = _c.scrollTo(ele, _c.utils.options(ele.attr("data-scrollto")));
                    return ele.trigger("click");
                }
            });
        },
        init: function() {
            var $this;
            $this = this;
            return this.on("click", function(e) {
                e.preventDefault();
                $this.trigger("willscroll.clique.scrollTo");
                var top = _c.$win.scrollTop();
                if ($this.options.offset) {
                    top = _c.$win.scrollTop() + $this.options.offset;
                } else {
                    if ($(this).attr("href") && $($(this).attr("href")).length) {
                        top = $($(this).attr("href")).offset().top;
                    }
                }
                return $this.scrollTo(top);
            });
        },
        scrollTo: function(top) {
            var docheight, target, winheight;
            _c.$win.on("mousewheel", function() {
                $("html, body").stop(true);
            });
            var $this = this;
            var options = this.options;
            return $("html, body").stop().animate({
                scrollTop: top
            }, options.duration, options.transition).promise().done(function() {
                $this.trigger("didscroll.clique.scrollTo");
                console.log("complete");
                return _c.$win.off("mousewheel");
            });
        }
    });
    if (!_c.$.easing.easeOutExpo) {
        _c.$.easing.easeOutExpo = function(x, t, b, c, d) {
            if (t === d) {
                return b + c;
            } else {
                return c * (-Math.pow(2, -10 * t / d) + 1) + b;
            }
        };
    }
});
(function(addon) {
    if (typeof define === "function" && define.amd) {
        define("clique-select", [ "clique" ], function() {
            return addon(Clique);
        });
    }
    if (!window.Clique) {
        throw new Error("Clique.select requires Clique.core");
    }
    if (!window.Clique.dropdown) {
        throw new Error("Clique.select requires the Clique.dropdown component");
    }
    if (window.Clique) {
        addon(Clique);
    }
})(function(_c) {
    var $;
    $ = _c.$;
    _c.component("select", {
        defaults: {
            inheritClasses: true
        },
        boot: function() {
            _c.$doc.on("ready", function() {
                $("[data-select]").each(function() {
                    var ele, obj;
                    ele = $(this);
                    if (!ele.is("select")) {
                        ele.find("select").each(function() {
                            var obj;
                            if (!ele.data("clique.data.select")) {
                                obj = _c.select(ele);
                            }
                        });
                    } else {
                        if (!ele.data("clique.data.select")) {
                            obj = _c.select(ele);
                        }
                    }
                });
            });
        },
        init: function() {
            var $this;
            $this = this;
            this.element.on("clique.select.change", function(e, idx, obj) {
                return $this.updateSelect(idx, obj);
            });
            this.selectOptions = [];
            this.element.children("option").each(function(i) {
                return $this.selectOptions.push({
                    text: $(this).text(),
                    value: $(this).val()
                });
            });
            this.template();
            this.bindSelect();
            return setTimeout(function() {
                return $this.select.find(".nav-dropdown li:first-child a").trigger("click");
            }, 0);
        },
        template: function() {
            var $this, classes, cls, firstOption, width;
            cls = [];
            if (this.options.inheritClasses && this.element.attr("class")) {
                classes = this.element.attr("class").split(" ");
                $.each(classes, function(i) {
                    return cls.push(classes[i]);
                });
            }
            cls.push("select");
            width = this.element.width() + 23;
            this.select = $('<div class="' + cls.join(" ") + '" data-dropdown="{mode:\'click\'}" style="width:' + width + 'px;" />');
            firstOption = this.element.children("option").first();
            this.select.append($('<a href="#" class="select-link"></a>'));
            this.select.append($('<div class="dropdown dropdown-scrollable"><ul class="nav nav-dropdown nav-side" /></div>'));
            $this = this;
            $.each(this.selectOptions, function(i, v) {
                var option;
                option = $('<li><a href="#">' + v.text + "</a></li>");
                return $this.select.find(".nav-dropdown").append(option);
            });
            this.element.before(this.select);
            return this.element.hide();
        },
        bindSelect: function() {
            var $this;
            $this = this;
            return this.select.on("click", ".nav-dropdown a", function(e) {
                var idx, obj, option;
                e.preventDefault();
                idx = $(this).parent("li").index();
                option = $this.selectOptions[idx];
                obj = {
                    value: option.value,
                    text: option.text
                };
                return $this.element.trigger("clique.select.change", [ idx, obj ]);
            });
        },
        updateSelect: function(idx, obj) {
            var li;
            this.select.find(".nav-dropdown li").removeClass("active");
            li = this.select.find(".nav-dropdown li").eq(idx);
            li.addClass("active");
            this.select.children(".select-link").text(obj.text);
            this.element.val(obj.value);
            return this.trigger("change");
        }
    });
    return _c.select;
});
(function(addon) {
    if (typeof define === "function" && define.amd) {
        define("clique-switcher", [ "clique" ], function() {
            return addon(Clique);
        });
    }
    if (!window.Clique) {
        throw new Error("Clique.switcher requires Clique.core");
    }
    if (window.Clique) {
        addon(Clique);
    }
})(function(_c) {
    var $, Animations, coreAnimation;
    $ = _c.$;
    coreAnimation = function(cls, current, next) {
        var clsIn, clsOut, d, release;
        d = _c.$.Deferred();
        clsIn = cls;
        clsOut = cls;
        if (next[0] === current[0]) {
            d.resolve();
            return d.promise();
        }
        if (typeof cls === "object") {
            clsIn = cls[0];
            clsOut = cls[1] || cls[0];
        }
        release = function() {
            if (current) {
                current.hide().removeClass("active " + clsOut + " animation-reverse");
            }
            return next.addClass(clsIn).one(_c.support.animation.end, function(_this) {
                return function() {
                    next.removeClass("" + clsIn + "").css({
                        opacity: "",
                        display: ""
                    });
                    d.resolve();
                    if (current) {
                        return current.css({
                            opacity: "",
                            display: ""
                        });
                    }
                };
            }(this)).show();
        };
        next.css("animation-duration", this.options.duration + "ms");
        if (current && current.length) {
            current.css("animation-duration", this.options.duration + "ms");
            current.css("display", "none").addClass(clsOut + " animation-reverse").one(_c.support.animation.end, function(_this) {
                return function() {
                    return release();
                };
            }(this)).css("display", "");
        } else {
            next.addClass("active");
            release();
        }
        return d.promise();
    };
    _c.component("switcher", {
        defaults: {
            connect: false,
            toggle: ">*",
            active: 0,
            animation: false,
            duration: 200
        },
        animating: false,
        boot: function() {
            return _c.ready(function(context) {
                return $("[data-switcher]", context).each(function() {
                    var obj, switcher;
                    switcher = $(this);
                    if (!switcher.data("clique.data.switcher")) {
                        obj = _c.switcher(switcher, _c.utils.options(switcher.attr("data-switcher")));
                    }
                });
            });
        },
        init: function() {
            var $this, active, toggles;
            $this = this;
            this.on("click.clique.switcher", this.options.toggle, function(e) {
                e.preventDefault();
                return $this.show(this);
            });
            if (this.options.connect) {
                this.connect = $(this.options.connect);
                this.connect.find(".active").removeClass(".active");
                if (this.connect.length) {
                    this.connect.children().attr("aria-hidden", "true");
                    this.connect.on("click", "[data-switcher-item]", function(e) {
                        var item;
                        e.preventDefault();
                        item = $(this).attr("data-switcher-item");
                        if ($this.index === item) {
                            return;
                        }
                        switch (item) {
                          case "next":
                          case "previous":
                            return $this.show($this.index + (item === "next" ? 1 : -1));

                          default:
                            return $this.show(parseInt(item, 10));
                        }
                    }).on("swipeRight swipeLeft", function(e) {
                        e.preventDefault();
                        return $this.show($this.index + (e.type === "swipeLeft" ? 1 : -1));
                    });
                }
                toggles = this.find(this.options.toggle);
                active = toggles.filter(".active");
                if (active.length) {
                    this.show(active, false);
                } else {
                    if (this.options.active === false) {
                        return;
                    }
                    active = toggles.eq(this.options.active);
                    this.show(active.length ? active : toggles.eq(0), false);
                }
                toggles.not(active).attr("aria-expanded", "false");
                active.attr("aria-expanded", "true");
                return this.on("changed.clique.dom", function() {
                    $this.connect = $($this.options.connect);
                });
            }
        },
        show: function(tab, animate) {
            var $this, active, animation, toggles;
            if (this.animating) {
                return;
            }
            if (isNaN(tab)) {
                tab = $(tab);
            } else {
                toggles = this.find(this.options.toggle);
                tab = tab < 0 ? toggles.length - 1 : tab;
                tab = toggles.eq(toggles[tab] ? tab : 0);
            }
            $this = this;
            toggles = this.find(this.options.toggle);
            active = $(tab);
            animation = Animations[this.options.animation] || function(current, next) {
                var anim;
                if (!$this.options.animation) {
                    return Animations.none.apply($this);
                }
                anim = $this.options.animation.split(",");
                if (anim.length === 1) {
                    anim[1] = anim[0];
                }
                anim[0] = anim[0].trim();
                anim[1] = anim[1].trim();
                return coreAnimation.apply($this, [ anim, current, next ]);
            };
            if (animate === false || !_c.support.animation) {
                animation = Animations.none;
            }
            if (active.hasClass("disabled")) {
                return;
            }
            toggles.attr("aria-expanded", "false");
            active.attr("aria-expanded", "true");
            toggles.filter(".active").removeClass("active");
            active.addClass("active");
            if (this.options.connect && this.connect.length) {
                this.index = this.find(this.options.toggle).index(active);
                if (this.index === -1) {
                    this.index = 0;
                }
                this.connect.each(function() {
                    var children, container, current, next;
                    container = $(this);
                    children = $(container.children());
                    current = $(children.filter(".active"));
                    next = $(children.eq($this.index));
                    $this.animating = true;
                    return animation.apply($this, [ current, next ]).then(function() {
                        current.removeClass("active");
                        next.addClass("active");
                        current.attr("aria-hidden", "true");
                        next.attr("aria-hidden", "false");
                        _c.utils.checkDisplay(next, true);
                        $this.animating = false;
                    });
                });
            }
            return this.trigger("show.clique.switcher", [ active ]);
        }
    });
    Animations = {
        none: function() {
            var d;
            d = _c.$.Deferred();
            d.resolve();
            return d.promise();
        },
        fade: function(current, next) {
            return coreAnimation.apply(this, [ "animation-fade", current, next ]);
        },
        "slide-bottom": function(current, next) {
            return coreAnimation.apply(this, [ "animation-slide-bottom", current, next ]);
        },
        "slide-top": function(current, next) {
            return coreAnimation.apply(this, [ "animation-slide-top", current, next ]);
        },
        "slide-vertical": function(current, next, dir) {
            var anim;
            anim = [ "animation-slide-top", "animation-slide-bottom" ];
            if (current && current.index() > next.index()) {
                anim.reverse();
            }
            return coreAnimation.apply(this, [ anim, current, next ]);
        },
        "slide-left": function(current, next) {
            return coreAnimation.apply(this, [ "animation-slide-left", current, next ]);
        },
        "slide-right": function(current, next) {
            return coreAnimation.apply(this, [ "animation-slide-right", current, next ]);
        },
        "slide-horizontal": function(current, next, dir) {
            var anim;
            anim = [ "animation-slide-right", "animation-slide-left" ];
            if (current && current.index() > next.index()) {
                anim.reverse();
            }
            return coreAnimation.apply(this, [ anim, current, next ]);
        },
        scale: function(current, next) {
            return coreAnimation.apply(this, [ "animation-scale-up", current, next ]);
        }
    };
    _c.switcher.animations = Animations;
});
(function(addon) {
    if (typeof define === "function" && define.amd) {
        define("clique-tab", [ "clique" ], function() {
            return addon(Clique);
        });
    }
    if (!window.Clique) {
        throw new Error("Clique.tab requires Clique.core");
    }
    if (window.Clique) {
        addon(Clique);
    }
})(function(_c) {
    var $;
    $ = _c.$;
    return _c.component("tab", {
        defaults: {
            target: "> li:not(.tab-responsive, .disabled)",
            connect: false,
            active: 0,
            animation: false,
            duration: 200
        },
        boot: function() {
            return _c.ready(function(context) {
                return $("[data-tab]", context).each(function() {
                    var obj, tab;
                    tab = $(this);
                    if (!tab.data("clique.data.tab")) {
                        obj = _c.tab(tab, _c.utils.options(tab.attr("data-tab")));
                    }
                });
            });
        },
        init: function() {
            var $this;
            $this = this;
            this.on("click.clique.tab", this.options.target, function(e) {
                var current;
                e.preventDefault();
                if ($this.switcher && $this.switcher.animating) {
                    return;
                }
                current = $this.find($this.options.target).not(this);
                current.removeClass("active").blur();
                $this.trigger("change.clique.tab", [ $(this).addClass("active") ]);
                if (!$this.options.connect) {
                    current.attr("aria-expanded", "false");
                    return $(this).attr("aria-expanded", "true");
                }
            });
            if (this.options.connect) {
                this.connect = $(this.options.connect);
            }
            this.responsivetab = $('<li class="tab-responsive active"><a></a></li>').append('<div class="dropdown dropdown-small"><ul class="nav nav-dropdown"></ul><div>');
            this.responsivetab.dropdown = this.responsivetab.find(".dropdown");
            this.responsivetab.lst = this.responsivetab.dropdown.find("ul");
            this.responsivetab.caption = this.responsivetab.find("a:first");
            if (this.element.hasClass("tab-bottom")) {
                this.responsivetab.dropdown.addClass("dropdown-up");
            }
            this.responsivetab.lst.on("click.clique.tab", "a", function(e) {
                var link;
                e.preventDefault();
                e.stopPropagation();
                link = $(this);
                return $this.element.children(":not(.tab-responsive)").eq(link.data("index")).trigger("click");
            });
            this.on("show.clique.switcher change.clique.tab", function(e, tab) {
                return $this.responsivetab.caption.html(tab.text());
            });
            this.element.append(this.responsivetab);
            if (this.options.connect) {
                this.switcher = _c.switcher(this.element, {
                    toggle: "> li:not(.tab-responsive)",
                    connect: this.options.connect,
                    active: this.options.active,
                    animation: this.options.animation,
                    duration: this.options.duration
                });
            }
            _c.dropdown(this.responsivetab, {
                mode: "click"
            });
            $this.trigger("change.clique.tab", [ this.element.find(this.options.target).filter(".active") ]);
            this.check();
            _c.$win.on("resize orientationchange", _c.utils.debounce(function() {
                if ($this.element.is(":visible")) {
                    return $this.check();
                }
            }, 100));
            return this.on("display.clique.check", function() {
                if ($this.element.is(":visible")) {
                    return $this.check();
                }
            });
        },
        check: function() {
            var children, doresponsive, i, item, link, top;
            children = this.element.children(":not(.tab-responsive)").removeClass("hidden");
            if (!children.length) {
                return;
            }
            top = children.eq(0).offset().top + Math.ceil(children.eq(0).height() / 2);
            doresponsive = false;
            this.responsivetab.lst.empty();
            children.each(function() {
                if ($(this).offset().top > top) {
                    doresponsive = true;
                }
            });
            if (doresponsive) {
                i = 0;
                while (i < children.length) {
                    item = $(children.eq(i));
                    link = item.find("a");
                    if (item.css("float") !== "none" && !item.attr("dropdown")) {
                        item.addClass("hidden");
                        if (!item.hasClass("disabled")) {
                            this.responsivetab.lst.append('<li><a href="' + link.attr("href") + '" data-index="' + i + '">' + link.html() + "</a></li>");
                        }
                    }
                    i++;
                }
            }
            return this.responsivetab[this.responsivetab.lst.children().length ? "removeClass" : "addClass"]("hidden");
        }
    });
});
(function(addon) {
    if (typeof define === "function" && define.amd) {
        define("clique-toggle", [ "clique" ], function() {
            return addon(Clique);
        });
    }
    if (!window.Clique) {
        throw new Error("Clique.toggle requires Clique.core");
    }
    if (window.Clique) {
        addon(Clique);
    }
})(function(_c) {
    var $, toggles;
    $ = _c.$;
    toggles = [];
    return _c.component("toggle", {
        defaults: {
            target: false,
            class: "hidden",
            animation: false,
            duration: 400
        },
        boot: function() {
            return _c.ready(function(context) {
                $("[data-toggle]", context).each(function() {
                    var ele, obj;
                    ele = $(this);
                    if (!ele.data("clique.data.toggle")) {
                        obj = _c.toggle(ele, _c.utils.options(ele.attr("data-toggle")));
                    }
                });
                return setTimeout(function() {
                    return toggles.forEach(function(toggle) {
                        return toggle.getToggles();
                    });
                }, 0);
            });
        },
        init: function() {
            var $this;
            $this = this;
            this.aria = this.options.class.indexOf("hidden") !== -1;
            this.getToggles();
            this.on("click", function(e) {
                if ($this.element.is('a[href="#"]')) {
                    e.preventDefault();
                }
                return $this.toggle();
            });
            return toggles.push(this);
        },
        toggle: function() {
            var $this, animations, evt;
            if (!this.totoggle.length) {
                return;
            }
            if (this.options.animation && _c.support.animation) {
                $this = this;
                animations = this.options.animation.split(",");
                if (animations.length === 1) {
                    animations[1] = animations[0];
                }
                animations[0] = animations[0].trim();
                animations[1] = animations[1].trim();
                this.totoggle.css("animation-duration", this.options.duration + "ms");
                if (this.totoggle.hasClass(this.options.class)) {
                    this.totoggle.toggleClass(this.options.class);
                    this.totoggle.each(function() {
                        return _c.utils.animate(this, animations[0]).then(function() {
                            $(this).css("animation-duration", "");
                            return _c.utils.checkDisplay(this);
                        });
                    });
                } else {
                    this.totoggle.each(function() {
                        return _c.utils.animate(this, animations[1] + " animation-reverse").then(function(_this) {
                            return function() {
                                $(_this).toggleClass($this.options.class).css("animation-duration", "");
                                return _c.utils.checkDisplay(_this);
                            };
                        }(this));
                    });
                }
            } else {
                this.totoggle.toggleClass(this.options.class);
                evt = _c.$.Event({
                    type: "toggle.clique",
                    relatedTarget: this.element
                });
                this.totoggle.trigger(evt);
                _c.utils.checkDisplay(this.totoggle);
            }
            return this.updateAria();
        },
        getToggles: function() {
            this.totoggle = this.options.target ? $(this.options.target) : [];
            return this.updateAria();
        },
        updateAria: function() {
            if (this.aria && this.totoggle.length) {
                return this.totoggle.each(function() {
                    return $(this).attr("aria-hidden", $(this).hasClass("hidden"));
                });
            }
        }
    });
});
(function(addon) {
    if (typeof define === "function" && define.amd) {
        define("clique-utility", [ "clique" ], function() {
            return addon(Clique);
        });
    }
    if (!window.Clique) {
        throw new Error("Clique.utility requires Clique.core");
    }
    if (window.Clique) {
        addon(Clique);
    }
})(function(_c) {
    var $, stacks;
    $ = _c.$;
    stacks = [];
    _c.component("stackMargin", {
        defaults: {
            cls: "margin-small-top"
        },
        boot: function() {
            return _c.ready(function(context) {
                return $("[data-margin]", context).each(function() {
                    var ele, obj;
                    ele = $(this);
                    if (!ele.data("clique.data.stackMargin")) {
                        obj = _c.stackMargin(ele, _c.utils.options(ele.attr("data-margin")));
                    }
                });
            });
        },
        init: function() {
            var $this;
            $this = this;
            this.columns = this.element.children();
            if (!this.columns.length) {
                return;
            }
            _c.$win.on("resize orientationchange", function() {
                var fn;
                fn = function() {
                    return $this.process();
                };
                _c.$(function() {
                    fn();
                    return _c.$win.on("load", fn);
                });
                return _c.utils.debounce(fn, 20);
            }());
            _c.$html.on("changed.clique.dom", function(e) {
                $this.columns = $this.element.children();
                return $this.process();
            });
            this.on("display.clique.check", function(_this) {
                return function(e) {
                    $this.columns = $this.element.children();
                    if (_this.element.is(":visible")) {
                        return _this.process();
                    }
                };
            }(this));
            return stacks.push(this);
        },
        process: function() {
            _c.utils.stackMargin(this.columns, this.options);
            return this;
        },
        revert: function() {
            this.columns.removeClass(this.options.cls);
            return this;
        }
    });
    _c.ready(function() {
        var check, iframes;
        iframes = [];
        check = function() {
            return iframes.forEach(function(iframe) {
                var height, iwidth, ratio, width;
                if (!iframe.is(":visible")) {
                    return;
                }
                width = iframe.parent().width();
                iwidth = iframe.data("width");
                ratio = width / iwidth;
                height = Math.floor(ratio * iframe.data("height"));
                return iframe.css({
                    height: width < iwidth ? height : iframe.data("height")
                });
            });
        };
        _c.$win.on("resize", _c.utils.debounce(check, 15));
        return function(context) {
            $("iframe.responsive-width", context).each(function() {
                var iframe;
                iframe = $(this);
                if (!iframe.data("responsive") && iframe.attr("width") && iframe.attr("height")) {
                    iframe.data("width", iframe.attr("width"));
                    iframe.data("height", iframe.attr("height"));
                    iframe.data("responsive", true);
                    return iframes.push(iframe);
                }
            });
            return check();
        };
    }());
    _c.utils.stackMargin = function(elements, options) {
        var firstvisible, offset, skip;
        options = _c.$.extend({
            cls: "margin-small-top"
        }, options);
        options.cls = options.cls;
        elements = $(elements).removeClass(options.cls);
        skip = false;
        firstvisible = elements.filter(":visible:first");
        offset = firstvisible.length ? firstvisible.position().top + firstvisible.outerHeight() - 1 : false;
        if (offset === false) {
            return;
        }
        return elements.each(function() {
            var column;
            column = $(this);
            if (column.is(":visible")) {
                if (skip) {
                    return column.addClass(options.cls);
                } else {
                    if (column.position().top >= offset) {
                        skip = column.addClass(options.cls);
                    }
                }
            }
        });
    };
});
(function(addon) {
    if (typeof define === "function" && define.amd) {
        define("clique-accordion", [ "clique" ], function() {
            return addon(Clique);
        });
    }
    if (!window.Clique) {
        throw new Error("Clique.accordion requires Clique.core");
    }
    if (window.Clique) {
        addon(Clique);
    }
})(function(_c) {
    var $;
    $ = _c.$;
    _c.component("accordion", {
        defaults: {
            showfirst: true,
            collapse: true,
            animate: true,
            easing: "swing",
            duration: 300,
            toggle: ".accordion-title",
            containers: ".accordion-content",
            clsactive: "active"
        },
        boot: function() {
            return _c.ready(function(context) {
                return setTimeout(function() {
                    return _c.$("[data-accordion]", context).each(function() {
                        var ele;
                        ele = _c.$(this);
                        if (!ele.data("clique.data.accordion")) {
                            return _c.accordion(ele, _c.utils.options(ele.attr("data-accordion")));
                        }
                    });
                }, 0);
            });
        },
        init: function() {
            var $this;
            $this = this;
            this.element.on("click.clique.accordion", this.options.toggle, function(e) {
                e.preventDefault();
                return $this.toggleItem(_c.$(this).data("wrapper"), $this.options.animate, $this.options.collapse);
            });
            this.update();
            if (this.options.showfirst) {
                return this.toggleItem(this.toggle.eq(0).data("wrapper"), false, false);
            }
        },
        getHeight: function(ele) {
            var $ele, height, tmp;
            $ele = _c.$(ele);
            height = "auto";
            if ($ele.is(":visible")) {
                height = $ele.outerHeight();
            } else {
                tmp = {
                    position: $ele.css("position"),
                    visibility: $ele.css("visibility"),
                    display: $ele.css("display")
                };
                height = $ele.css({
                    position: "absolute",
                    visibility: "hidden",
                    display: "block"
                }).outerHeight();
                $ele.css(tmp);
            }
            return height;
        },
        toggleItem: function(wrapper, animated, collapse) {
            var $this, active;
            $this = this;
            wrapper.data("toggle").toggleClass(this.options.clsactive);
            active = wrapper.data("toggle").hasClass(this.options.clsactive);
            if (collapse) {
                this.toggle.not(wrapper.data("toggle")).removeClass(this.options.clsactive);
                this.content.not(wrapper.data("content")).parent().stop().animate({
                    height: 0
                }, {
                    easing: this.options.easing,
                    duration: animated ? this.options.duration : 0
                }).attr("aria-expanded", "false");
            }
            if (animated) {
                wrapper.stop().animate({
                    height: active ? $this.getHeight(wrapper.data("content")) : 0
                }, {
                    easing: this.options.easing,
                    duration: this.options.duration,
                    complete: function() {
                        if (active) {
                            _c.utils.checkDisplay(wrapper.data("content"));
                            wrapper.height("auto");
                        }
                        return $this.trigger("display.clique.check");
                    }
                });
            } else {
                wrapper.stop().height(active ? "auto" : 0);
                if (active) {
                    _c.utils.checkDisplay(wrapper.data("content"));
                }
                this.trigger("display.clique.check");
            }
            wrapper.attr("aria-expanded", active);
            return this.element.trigger("toggle.clique.accordion", [ active, wrapper.data("toggle"), wrapper.data("content") ]);
        },
        update: function() {
            var $this;
            $this = this;
            this.toggle = this.find(this.options.toggle);
            this.content = this.find(this.options.containers);
            this.content.each(function(index) {
                var $content, $toggle, $wrapper;
                $content = _c.$(this);
                if ($content.parent().data("wrapper")) {
                    $wrapper = $content.parent();
                } else {
                    $wrapper = _c.$(this).wrap('<div data-wrapper="true" style="overflow :hidden;height :0;position :relative;"></div>').parent();
                    $wrapper.attr("aria-expanded", "false");
                }
                $toggle = $this.toggle.eq(index);
                $wrapper.data("toggle", $toggle);
                $wrapper.data("content", $content);
                $toggle.data("wrapper", $wrapper);
                return $content.data("wrapper", $wrapper);
            });
            return this.element.trigger("update.clique.accordion", [ this ]);
        }
    });
    return _c.accordion;
});
(function(addon) {
    if (typeof define === "function" && define.amd) {
        define("clique-autocomplete", [ "clique" ], function() {
            return addon(Clique);
        });
    }
    if (!window.Clique) {
        throw new Error("Clique.autocomplete requires Clique.core");
    }
    if (window.Clique) {
        addon(Clique);
    }
})(function(_c) {
    var $, active;
    $ = _c.$;
    active = null;
    _c.component("autocomplete", {
        defaults: {
            minLength: 3,
            param: "search",
            method: "post",
            delay: 300,
            loadingClass: "loading",
            flipDropdown: false,
            skipClass: "skip",
            hoverClass: "active",
            source: null,
            renderer: null,
            template: '<ul class="nav nav-autocomplete autocomplete-results">{{~items}}<li data-value="{{$item.value}}"><a>{{$item.value}}</a></li>{{/items}}</ul>'
        },
        visible: false,
        value: null,
        selected: null,
        boot: function() {
            _c.$html.on("focus.autocomplete.clique", "[data-autocomplete]", function(e) {
                var ele, obj;
                ele = _c.$(this);
                if (!ele.data("clique.data.autocomplete")) {
                    obj = _c.autocomplete(ele, _c.utils.options(ele.attr("data-autocomplete")));
                }
            });
            return _c.$html.on("click.autocomplete.clique", function(e) {
                if (active && e.target !== active.input[0]) {
                    return active.hide();
                }
            });
        },
        init: function() {
            var $this, select, trigger;
            $this = this;
            select = false;
            trigger = _c.utils.debounce(function(e) {
                if (select) {
                    select = false;
                    return;
                }
                return $this.handle();
            }, this.options.delay);
            this.dropdown = this.find(".dropdown");
            this.template = this.find('script[type="text/autocomplete"]').html();
            this.template = _c.utils.template(this.template || this.options.template);
            this.input = this.find("input:first").attr("autocomplete", "off");
            if (!this.dropdown.length) {
                this.dropdown = _c.$('<div class="dropdown"></div>').appendTo(this.element);
            }
            if (this.options.flipDropdown) {
                this.dropdown.addClass("dropdown-flip");
            }
            this.dropdown.attr("aria-expanded", "false");
            this.input.on({
                keydown: function(e) {
                    if (e && e.which && !e.shiftKey) {
                        switch (e.which) {
                          case 13:
                            select = true;
                            if ($this.selected) {
                                e.preventDefault();
                                return $this.select();
                            }
                            break;

                          case 38:
                            e.preventDefault();
                            return $this.pick("prev", true);

                          case 40:
                            e.preventDefault();
                            return $this.pick("next", true);

                          case 27:
                          case 9:
                            return $this.hide();
                        }
                    }
                },
                keyup: trigger
            });
            this.dropdown.on("click", ".autocomplete-results > *", function() {
                return $this.select();
            });
            this.dropdown.on("mouseover", ".autocomplete-results > *", function() {
                return $this.pick(_c.$(this));
            });
            this.triggercomplete = trigger;
        },
        handle: function() {
            var $this, old;
            $this = this;
            old = this.value;
            this.value = this.input.val();
            if (this.value.length < this.options.minLength) {
                return this.hide();
            }
            if (this.value !== old) {
                $this.request();
            }
            return this;
        },
        pick: function(item, scrollinview) {
            var $this, dpheight, index, items, scrollTop, selected, top;
            $this = this;
            items = _c.$(this.dropdown.find(".autocomplete-results").children(":not(." + this.options.skipClass + ")"));
            selected = false;
            if (typeof item !== "string" && !item.hasClass(this.options.skipClass)) {
                selected = item;
            } else {
                if (item === "next" || item === "prev") {
                    if (this.selected) {
                        index = items.index(this.selected);
                        if (item === "next") {
                            selected = items.eq(index + 1 < items.length ? index + 1 : 0);
                        } else {
                            selected = items.eq(index - 1 < 0 ? items.length - 1 : index - 1);
                        }
                    } else {
                        selected = items[item === "next" ? "first" : "last"]();
                    }
                    selected = _c.$(selected);
                }
            }
            if (selected && selected.length) {
                this.selected = selected;
                items.removeClass(this.options.hoverClass);
                this.selected.addClass(this.options.hoverClass);
                if (scrollinview) {
                    top = selected.position().top;
                    scrollTop = $this.dropdown.scrollTop();
                    dpheight = $this.dropdown.height();
                    if (top > dpheight || top < 0) {
                        return $this.dropdown.scrollTop(scrollTop + top);
                    }
                }
            }
        },
        select: function() {
            var data;
            if (!this.selected) {
                return;
            }
            data = this.selected.data();
            this.trigger("select.clique.autocomplete", [ data, this ]);
            if (data.value) {
                this.input.val(data.value).trigger("change");
            }
            return this.hide();
        },
        show: function() {
            if (this.visible) {
                return;
            }
            this.visible = true;
            this.element.addClass("open");
            active = this;
            this.dropdown.attr("aria-expanded", "true");
            return this;
        },
        hide: function() {
            if (!this.visible) {
                return;
            }
            this.visible = false;
            this.element.removeClass("open");
            if (active === this) {
                active = false;
            }
            this.dropdown.attr("aria-expanded", "false");
            return this;
        },
        request: function() {
            var $this, items, params, release, source;
            $this = this;
            release = function(data) {
                if (data) {
                    $this.render(data);
                }
                return $this.element.removeClass($this.options.loadingClass);
            };
            this.element.addClass(this.options.loadingClass);
            if (this.options.source) {
                source = this.options.source;
                switch (typeof this.options.source) {
                  case "function":
                    return this.options.source.apply(this, [ release ]);

                  case "object":
                    if (source.length) {
                        items = [];
                        source.forEach(function(item) {
                            if (item.value && item.value.toLowerCase().indexOf($this.value.toLowerCase()) !== -1) {
                                return items.push(item);
                            }
                        });
                        return release(items);
                    }
                    break;

                  case "string":
                    params = {};
                    params[this.options.param] = this.value;
                    return _c.$.ajax({
                        url: this.options.source,
                        data: params,
                        type: this.options.method,
                        dataType: "json"
                    }).done(function(json) {
                        release(json || []);
                    });

                  default:
                    return release(null);
                }
            } else {
                return this.element.removeClass($this.options.loadingClass);
            }
        },
        render: function(data) {
            this.dropdown.empty();
            this.selected = false;
            if (this.options.renderer) {
                this.options.renderer.apply(this, [ data ]);
            } else {
                if (data && data.length) {
                    this.dropdown.append(this.template({
                        items: data
                    }));
                    this.show();
                    this.trigger("show.clique.autocomplete");
                }
            }
            return this;
        }
    });
    return _c.autocomplete;
});
(function(addon) {
    if (typeof define === "function" && define.amd) {
        define("clique-button", [ "clique" ], function() {
            return addon(Clique);
        });
    }
    if (!window.Clique) {
        throw new Error("Clique.button requires Clique.core");
    }
    if (window.Clique) {
        addon(Clique);
    }
})(function(_c) {
    var $, _target;
    $ = _c.$;
    _target = ".button, button";
    _c.component("buttonRadio", {
        defaults: {
            target: ".button"
        },
        boot: function() {
            return _c.$html.on("click.buttonRadio.clique", "[data-button-radio]", function(e) {
                var ele, obj, target;
                ele = $(this);
                if (!ele.data("clique.data.buttonRadio")) {
                    obj = _c.buttonRadio(ele, _c.utils.options(ele.attr("data-button-radio")));
                    target = $(e.target);
                    if (target.hasClass(obj.options.target) || target.is("button")) {
                        return target.trigger("click");
                    }
                }
            });
        },
        init: function() {
            var $this;
            $this = this;
            this.find(_target).attr("aria-checked", "false").filter(".active").attr("aria-checked", "true");
            return this.on("click", _target, function(e) {
                var ele;
                ele = $(this);
                if (ele.is('a[href="#"]')) {
                    e.preventDefault();
                }
                $this.find(_target).not(ele).removeClass("active").blur();
                ele.addClass("active");
                $this.find(_target).not(ele).attr("aria-checked", "false");
                ele.attr("aria-checked", "true");
                return $this.trigger("change.clique.button", [ ele ]);
            });
        },
        getSelected: function() {
            return this.find(".active");
        }
    });
    _c.component("buttonCheckbox", {
        defaults: {
            target: ".button"
        },
        boot: function() {
            return _c.$html.on("click.buttonCheckbox.clique", "[data-button-checkbox]", function(e) {
                var ele, obj, target;
                ele = $(this);
                if (!ele.data("clique.data.buttonCheckbox")) {
                    obj = _c.buttonCheckbox(ele, _c.utils.options(ele.attr("data-button-checkbox")));
                    target = $(e.target);
                    if (target.hasClass(obj.options.target) || target.is("button")) {
                        return target.trigger("click");
                    }
                }
            });
        },
        init: function() {
            var $this;
            $this = this;
            this.find(_target).attr("aria-checked", "false").filter(".active").attr("aria-checked", "true");
            return this.on("click", _target, function(e) {
                var ele;
                ele = $(this);
                if (ele.is('a[href="#"]')) {
                    e.preventDefault();
                }
                ele.toggleClass("active").blur();
                ele.attr("aria-checked", ele.hasClass("active"));
                return $this.trigger("change.clique.button", [ ele ]);
            });
        },
        getSelected: function() {
            return this.find(".active");
        }
    });
    return _c.component("button", {
        defaults: {},
        boot: function() {
            return _c.$html.on("click.button.clique", "[data-button]", function(e) {
                var ele, obj;
                ele = $(this);
                if (!ele.data("clique.data.button")) {
                    obj = _c.button(ele, _c.utils.options(ele.attr("data-button")));
                    return ele.trigger("click");
                }
            });
        },
        init: function() {
            var $this;
            $this = this;
            this.element.attr("aria-pressed", this.element.hasClass("active"));
            return this.on("click", function(e) {
                if ($this.element.is('a[href="#"]')) {
                    e.preventDefault();
                }
                $this.toggle();
                return $this.trigger("change.clique.button", [ $this.element.blur().hasClass("active") ]);
            });
        },
        toggle: function() {
            this.element.toggleClass("active");
            return this.element.attr("aria-pressed", this.element.hasClass("active"));
        }
    });
});
(function(addon) {
    if (typeof define === "function" && define.amd) {
        define("clique-datatable", [ "clique" ], function() {
            return addon(Clique);
        });
    }
    if (!window.Clique) {
        throw new Error("Clique.datatable requires Clique.core");
    }
    if (window.Clique) {
        addon(Clique);
    }
})(function(_c) {
    var $;
    $ = _c.$;
    _c.component("datatableSearch", {
        defaults: {
            table: ""
        },
        boot: function() {
            return _c.ready(function(context) {
                return $("[data-datatable-search]", context).each(function() {
                    var ele, obj;
                    ele = $(this);
                    if (!ele.data("clique.data.datatableSearch")) {
                        obj = _c.datatableSearch(ele, _c.utils.options(ele.attr("data-datatable-search")));
                    }
                });
            });
        },
        init: function() {
            var table;
            table = _c.$(this.options.table);
            return this.element.on("keyup", function(e) {
                var datatable, val;
                val = $(this).val();
                datatable = table.data("clique.data.datatable");
                return datatable.searchString(val);
            });
        }
    });
    _c.component("datatablePrevious", {
        defaults: {
            table: ""
        },
        boot: function() {
            return _c.ready(function(context) {
                return $("[data-datatable-previous]", context).each(function() {
                    var ele, obj;
                    ele = $(this);
                    if (!ele.data("clique.data.datatablePrevious")) {
                        obj = _c.datatablePrevious(ele, _c.utils.options(ele.attr("data-datatable-previous")));
                    }
                });
            });
        },
        init: function() {
            this.table = _c.$(this.options.table);
            this.tableInitHandler();
            this.showPageListener();
            return this.bindClick();
        },
        tableInitHandler: function() {
            var $this;
            $this = this;
            return this.table.on("init.datatable.clique", function(e) {
                $this.datatable = $(this).data("clique.data.datatable");
                $this.datatable.previousButton = $(this.element);
            });
        },
        showPageListener: function() {
            var $this;
            $this = this;
            return this.table.on("didshowpage.datatable.clique", function() {
                if ($this.datatable.disablePrevious) {
                    return $this.element.addClass("disabled");
                } else {
                    return $this.element.removeClass("disabled");
                }
            });
        },
        bindClick: function() {
            var $this;
            $this = this;
            return this.on("click", function(e) {
                e.preventDefault();
                if ($(this).hasClass("disabled") || $(this).attr("disabled")) {
                    return false;
                }
                return $this.table.trigger("previous.datatable.clique");
            });
        }
    });
    _c.component("datatableNext", {
        defaults: {
            table: ""
        },
        boot: function() {
            return _c.ready(function(context) {
                return $("[data-datatable-next]", context).each(function() {
                    var ele, obj;
                    ele = $(this);
                    if (!ele.data("clique.data.datatableNext")) {
                        obj = _c.datatableNext(ele, _c.utils.options(ele.attr("data-datatable-next")));
                    }
                });
            });
        },
        init: function() {
            this.table = _c.$(this.options.table);
            this.tableInitHandler();
            this.showPageListener();
            return this.bindClick();
        },
        tableInitHandler: function() {
            var $this;
            $this = this;
            return this.table.on("init.datatable.clique", function() {
                $this.datatable = $(this).data("clique.data.datatable");
                $this.datatable.nextButton = $(this.element);
            });
        },
        showPageListener: function() {
            var $this;
            $this = this;
            return this.table.on("didshowpage.datatable.clique", function() {
                if ($this.datatable.disableNext) {
                    return $this.element.addClass("disabled");
                } else {
                    return $this.element.removeClass("disabled");
                }
            });
        },
        bindClick: function() {
            var $this;
            $this = this;
            return this.on("click", function(e) {
                e.preventDefault();
                if ($(this).hasClass("disabled") || $(this).attr("disabled")) {
                    return false;
                }
                return $this.table.trigger("next.datatable.cliquet");
            });
        }
    });
    return _c.component("datatable", {
        defaults: {
            paginationWrapper: ".datatable-pagination",
            perPage: 10,
            infoWrapper: ".datatable-info",
            infoString: "Showing rows #{start} through #{end} of #{total}",
            sortColumn: 0,
            sortOrder: "asc"
        },
        currentPage: 0,
        columns: [],
        elements: {},
        boot: function() {
            _c.ready(function(context) {
                $("[data-datatable]", context).each(function() {
                    var ele, obj;
                    ele = $(this);
                    if (!ele.data("clique.data.datatable")) {
                        obj = _c.datatable(ele, _c.utils.options(ele.attr("data-datatable")));
                    }
                });
            });
        },
        init: function() {
            this.setProperties();
            this.bindListeners();
            this.bindEvents();
            this.addObserver();
            if (!this.observerIsTriggered) {
                this.observerCallback();
            }
            return setTimeout(function(_this) {
                return function() {
                    return _this.trigger("init.datatable.clique", [ _this.options ]);
                };
            }(this), 0);
        },
        findElement: function(root, selector) {
            var output, parents;
            if (selector[0] === "#") {
                return $(selector);
            }
            parents = root.parents();
            output = null;
            parents.each(function() {
                if ($(this).find(selector).length) {
                    output = $(this).find(selector);
                    return false;
                }
            });
            return output;
        },
        setProperties: function() {
            this.elements.tbody = this.find("> tbody");
            this.elements.thead = this.find("> thead");
            this.elements.th = this.elements.thead.find("> tr > th");
            if (this.options.paginationWrapper) {
                this.elements.pagination = this.findElement(this.element, this.options.paginationWrapper);
            }
            if (this.options.infoWrapper) {
                this.elements.infoWrapper = this.findElement(this.element, this.options.infoWrapper);
            }
            return this.setColumns();
        },
        setColumns: function() {
            var columns;
            columns = [];
            this.elements.th.each(function(i) {
                var html, th, _html;
                th = $(this);
                html = th.html();
                _html = $("<div></div>");
                _html.append(html);
                _html.children().each(function() {
                    return $(this).remove();
                });
                $(this).width($(this).outerWidth());
                return columns.push({
                    index: i,
                    title: _html.text().trim(),
                    width: $(this).outerWidth()
                });
            });
            this.columns = columns;
        },
        setDataProperties: function(data) {
            this.data = data;
            if (!this.originalData && this.data.length) {
                this.originalData = this.data;
            }
            this.dataLength = this.data.length;
            if (!this.options.paginationWrapper) {
                this.options.perPage = this.dataLength;
            }
            this.pages = Math.ceil(this.dataLength / this.options.perPage) - 1;
        },
        buildPagination: function() {
            var $this, hasPaginationClass, html, i, parents, selector;
            selector = this.options.paginationWrapper;
            $this = this;
            if (!this.pagination || !this.pagination.length) {
                parents = this.element.parents();
                parents.each(function() {
                    if ($(this).find(selector).length) {
                        $this.pagination = $(this).find(selector);
                        return false;
                    }
                });
            }
            console.log(this.pagination);
            if (this.pagination.length && !this.pagination.find("> *").length) {
                console.log(this.pagination);
                hasPaginationClass = this.pagination.hasClass("pagination");
                i = 0;
                html = "";
                while (i < this.pages + 1) {
                    if (i === this.pages) {
                        html += "<span>...</span>";
                    }
                    html += hasPaginationClass ? "<li><a href='#' data-datatable-page='" + i + "'>" + (i + 1) + "</a></li>" : "<a href='#' data-datatable-page='" + i + "'>" + (i + 1) + "</a>";
                    if (i === 0) {
                        html += "<span>...</span>";
                    }
                    i++;
                }
                this.pagination.append(html);
                return setTimeout(function(_this) {
                    return function() {
                        return _this.bindPaginationEvents();
                    };
                }(this), 0);
            }
        },
        buildComplexPagination: function() {
            var i, pages;
            i = 0;
            if (this.currentPage < 3) {
                this.pagination.find("> span").first().hide();
                this.pagination.find("> span").last().css("display", "inline-block");
                pages = [ 0, 1, 2, 3, this.pages ];
            } else {
                if (this.currentPage > this.pages - 3) {
                    this.pagination.find("> span").first().css("display", "inline-block");
                    this.pagination.find("> span").last().hide();
                    pages = [ 0, this.pages - 3, this.pages - 2, this.pages - 1, this.pages ];
                } else {
                    this.pagination.find("> span").css("display", "inline-block");
                    pages = [ 0, this.currentPage - 1, this.currentPage, this.currentPage + 1, this.pages ];
                }
            }
            return this.pagination.find("> [data-datatable-page]").each(function() {
                var page;
                page = $(this).data("datatable-page");
                if (pages.indexOf(page) < 0) {
                    return $(this).hide();
                } else {
                    return $(this).show();
                }
            });
        },
        updatePaginationVisibility: function() {
            var i, link, _results;
            i = 0;
            this.pagination.find("[data-datatable-page]").hide();
            _results = [];
            while (i < this.pages + 1) {
                link = this.pagination.find("[data-datatable-page='" + i + "']");
                link.css("display", "inline-block");
                _results.push(i++);
            }
            return _results;
        },
        bindPaginationEvents: function() {
            return this.pagination.on("click", "[data-datatable-page]", function(_this) {
                return function(e) {
                    var idx;
                    e.preventDefault();
                    idx = $(e.target).data("datatable-page");
                    return _this.trigger("showpage.datatable.clique", [ idx ]);
                };
            }(this));
        },
        updatePagination: function() {
            if (!this.options.paginationWrapper || !this.elements.pagination || !this.elements.pagination.length) {
                return;
            }
            this.buildPagination();
            if (this.pages > 6) {
                this.buildComplexPagination();
            } else {
                this.updatePaginationVisibility();
            }
            if (this.pagination && this.pagination.length) {
                if (this.pagination.hasClass("pagination")) {
                    this.pagination.find("[data-datatable-page]").parent().removeClass("active");
                    return this.pagination.find("[data-datatable-page='" + this.currentPage + "']").parent().addClass("active");
                } else {
                    this.pagination.find("[data-datatable-page]").removeClass("active");
                    return this.pagination.find("[data-datatable-page='" + this.currentPage + "']").addClass("active");
                }
            }
        },
        bindEvents: function() {
            return this.elements.thead.on("click", ".datatable-sort", function(_this) {
                return function(e) {
                    var idx;
                    e.preventDefault();
                    idx = $(e.target).closest("th").index();
                    return _this.sortEventHandler(idx);
                };
            }(this));
        },
        sortEventHandler: function(idx) {
            if (this.options.sortColumn === idx) {
                if (this.options.sortOrder === "desc") {
                    this.options.sortColumn = -1;
                }
                this.options.sortOrder = this.options.sortOrder === "asc" ? "desc" : "asc";
            } else {
                this.options.sortColumn = idx;
                this.options.sortOrder = "asc";
            }
            return this.trigger("sort.datatable.clique", [ this.options.sortColumn, this.options.sortOrder ]);
        },
        bindListeners: function() {
            this.on("showpage.datatable.clique", function(_this) {
                return function(e, pageIndex) {
                    return _this.showPage(pageIndex);
                };
            }(this));
            this.on("didshowpage.datatable.clique", function(_this) {
                return function(e, currentPage, start, end, dataLength) {
                    return _this.didShowPage(currentPage, start, end, dataLength);
                };
            }(this));
            this.on("next.datatable.clique", function(_this) {
                return function() {
                    return _this.showNextPage();
                };
            }(this));
            this.on("previous.datatable.clique", function(_this) {
                return function() {
                    return _this.showPreviousPage();
                };
            }(this));
            return this.on("sort.datatable.clique", function(_this) {
                return function(e, columnIndex, sortOrder) {
                    return _this.sortByColumn(columnIndex, sortOrder);
                };
            }(this));
        },
        didShowPage: function(currentPage, start, end, dataLength) {
            if (this.elements.paginationWrapper && !this.elements.paginationWrapper.find("> *").length) {
                console.log(this.elements);
                return this.buildPagination();
            }
        },
        addObserver: function() {
            var tbody;
            tbody = this.elements.tbody;
            return _c.domObserve(tbody[0], function(_this) {
                return function() {
                    return _this.observerCallback();
                };
            }(this));
        },
        removeObserver: function() {
            var observer, tbody;
            tbody = this.elements.tbody;
            observer = tbody.data("observer");
            return observer.disconnect();
        },
        observerCallback: function() {
            var tbody;
            this.observerIsTriggered = true;
            tbody = this.elements.tbody;
            this.hasRows = !!tbody.find("> tr").length;
            this.cacheData();
            if (this.options.sortColumn > -1) {
                setTimeout(function(_this) {
                    return function() {
                        return _this.trigger("sort.datatable.clique", [ _this.options.sortColumn, _this.options.sortOrder ]);
                    };
                }(this), 0);
            }
            if (this.options.paginate && this.options.sortColumn < 0) {
                setTimeout(function(_this) {
                    return function() {
                        return _this.trigger("showpage.datatable.clique", [ _this.currentPage ]);
                    };
                }(this), 0);
            }
            return setTimeout(function(_this) {
                return function() {
                    _this.observerIsTriggered = false;
                };
            }(this), 0);
        },
        cacheData: function() {
            var $this, columns, data, isDate, isNumber, tbody;
            tbody = this.elements.tbody;
            if (!this.hasRows) {
                return;
            }
            data = [];
            columns = this.columns;
            isNumber = _c.utils.isNumber;
            isDate = _c.utils.isDate;
            tbody.find("> tr").each(function() {
                var rowData;
                rowData = [];
                $(this).find("> *").each(function(i) {
                    var cell, html, text, value;
                    text = $(this).text();
                    html = $(this).html();
                    if (isNumber(text)) {
                        value = parseFloat(text);
                    } else {
                        if (isDate(text)) {
                            value = new Date(text);
                        } else {
                            value = text;
                        }
                    }
                    cell = {
                        index: i,
                        key: columns[i].title,
                        value: value,
                        text: text,
                        html: html
                    };
                    return rowData.push(cell);
                });
                return data.push(rowData);
            });
            $this = this;
            return setTimeout(function() {
                return $this.setDataProperties(data);
            }, 0);
        },
        sortByColumn: function(columnIndex, sortOrder) {
            var cellData, columnData, compare, newData, sortedData, _i, _len;
            if (sortOrder == null) {
                sortOrder = "asc";
            }
            columnIndex = parseInt(columnIndex, 10);
            if (columnIndex < 0) {
                this.printOriginalData();
                return;
            }
            sortOrder = sortOrder.toLowerCase();
            if (sortOrder !== "asc" && sortOrder !== "desc") {
                sortOrder = "asc";
            }
            columnData = this.getDataForColumn(columnIndex);
            compare = function(a, b) {
                if (sortOrder === "asc") {
                    if (a.value < b.value) {
                        return -1;
                    }
                    if (a.value > b.value) {
                        return 1;
                    }
                } else {
                    if (a.value > b.value) {
                        return -1;
                    }
                    if (a.value < b.value) {
                        return 1;
                    }
                }
                return 0;
            };
            sortedData = columnData.sort(compare);
            newData = [];
            for (_i = 0, _len = sortedData.length; _i < _len; _i++) {
                cellData = sortedData[_i];
                newData.push(this.data[cellData.index]);
            }
            this.setDataProperties(newData);
            this.addSortClass(columnIndex, sortOrder);
            return this.trigger("showpage.datatable.clique", [ this.currentPage ]);
        },
        printOriginalData: function() {
            this.setDataProperties(this.originalData);
            this.removeSortClass();
            return this.trigger("showpage.datatable.clique", [ this.currentPage ]);
        },
        addSortClass: function(columnIndex, sortOrder) {
            this.removeSortClass();
            return this.elements.th.eq(columnIndex).find(".datatable-sort").addClass("datatable-sort-active datatable-sort-" + sortOrder);
        },
        removeSortClass: function() {
            return this.elements.th.find(".datatable-sort").removeClass("datatable-sort-active datatable-sort-asc datatable-sort-desc");
        },
        showNextPage: function() {
            var pageIndex;
            pageIndex = this.currentPage + 1;
            pageIndex = pageIndex > this.pages ? this.pages : pageIndex;
            return this.showPage(pageIndex);
        },
        showPreviousPage: function() {
            var pageIndex;
            pageIndex = this.currentPage - 1;
            pageIndex = pageIndex < 0 ? 0 : pageIndex;
            return this.showPage(pageIndex);
        },
        showPage: function(pageIndex) {
            var $this, data, end, rowData, start, table, _i, _len;
            if (!this.hasRows || !this.dataLength) {
                return;
            }
            this.removeObserver();
            this.removeAllRows();
            start = this.options.perPage * pageIndex;
            end = start + this.options.perPage;
            end = end > this.dataLength ? this.dataLength : end;
            data = this.getDataForRange(start, end);
            for (_i = 0, _len = data.length; _i < _len; _i++) {
                rowData = data[_i];
                this.addRow(rowData);
            }
            $this = this;
            table = this.element;
            return setTimeout(function() {
                $this.currentPage = pageIndex;
                $this.disablePrevious = start === 0 ? true : false;
                $this.disableNext = $this.currentPage === $this.pages ? true : false;
                $this.updatePagination();
                table.trigger("didshowpage.datatable.clique", [ $this.currentPage, start === 0 ? 1 : start, end, $this.dataLength ]);
                return $this.addObserver();
            }, 0);
        },
        addRow: function(rowData) {
            var cellData, content, td, tr, _i, _len;
            tr = $("<tr />");
            for (_i = 0, _len = rowData.length; _i < _len; _i++) {
                cellData = rowData[_i];
                content = cellData.text;
                td = $("<td>" + content + "</td>");
                tr.append(td);
            }
            return this.elements.tbody.append(tr);
        },
        removeAllRows: function() {
            var tbody;
            tbody = this.elements.tbody;
            return tbody.find("> *").remove();
        },
        getDataForRange: function(start, end) {
            var i, output;
            i = start;
            output = [];
            while (i < end) {
                output.push(this.data[i]);
                i++;
            }
            return output;
        },
        getDataForColumn: function(columnIndex) {
            var columnData, i, output, rowData, _ref;
            if (!this.data || !this.dataLength) {
                return [];
            }
            output = [];
            _ref = this.data;
            for (i in _ref) {
                rowData = _ref[i];
                columnData = rowData[columnIndex];
                output.push({
                    index: parseInt(i, 10),
                    value: columnData.value
                });
            }
            return output;
        },
        columnInfo: function(columnIndex) {
            if (!this.data || !this.dataLength) {
                return {};
            }
            return {
                title: this.data[0][columnIndex].key,
                index: columnIndex
            };
        },
        searchString: function(string, columnIndexes) {
            var cellData, column, columnIndex, i, output, rowData, rowString, _i, _j, _len, _len1, _ref;
            if (columnIndexes == null) {
                columnIndexes = [];
            }
            string = string.trim();
            if (!string || !string.length) {
                this.printOriginalData();
                return;
            }
            if (!columnIndexes.length) {
                _ref = this.columns;
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    column = _ref[_i];
                    if (this.options.hidden.indexOf(column.index) < 0) {
                        columnIndexes.push(column.index);
                    }
                }
            }
            output = [];
            i = 0;
            while (i < this.originalData.length) {
                rowData = this.originalData[i];
                rowString = "";
                for (_j = 0, _len1 = columnIndexes.length; _j < _len1; _j++) {
                    columnIndex = columnIndexes[_j];
                    cellData = rowData[columnIndex];
                    rowString += " " + cellData.html;
                }
                rowString = rowString.trim();
                if (rowString.indexOf(string) > -1) {
                    output.push(rowData);
                }
                i++;
            }
            this.setDataProperties(output);
            return this.showPage(0);
        },
        destroy: function() {
            this.restoreOriginalRows();
            this.removePagination();
            this.unbindEvents();
            this.removeStyle();
            this.removeData();
            return setTimeout(function(_this) {
                return function() {
                    return _this.trigger("destroy.datatable.clique");
                };
            }(this), 0);
        },
        restoreOriginalRows: function() {
            var rowData, _i, _len, _ref, _results;
            this.removeAllRows();
            _ref = this.originalData;
            _results = [];
            for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                rowData = _ref[_i];
                _results.push(this.addRow(rowData));
            }
            return _results;
        },
        removePagination: function() {
            return this.pagination.find("> *").remove();
        },
        unbindEvents: function() {
            this.find(".datatable-sort").off("click");
            this.previousButton.off("click");
            return this.nextButton.off("click");
        },
        removeStyle: function() {
            this.elements.th.removeAttr("style");
            return this.elements.tbody.find("td").removeAttr("style");
        },
        removeData: function() {
            return this.element.removeData("clique.data.datatable");
        }
    });
});
(function(addon) {
    if (typeof define === "function" && define.amd) {
        define("clique-datepicker", [ "clique" ], function() {
            return addon(Clique);
        });
    }
    if (!window.Clique) {
        throw new Error("Clique.datepicker requires Clique.core");
    }
    if (window.Clique) {
        addon(Clique);
    }
})(function(_c) {
    var $, active, dropdown, moment;
    $ = _c.$;
    active = false;
    dropdown = null;
    moment = null;
    _c.component("datepicker", {
        defaults: {
            mobile: false,
            weekstart: 1,
            i18n: {
                months: [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ],
                weekdays: [ "Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat" ]
            },
            format: "MM/DD/YYYY",
            offsettop: 5,
            maxDate: false,
            minDate: false,
            template: function(data, opts) {
                var cls, content, currentyear, d, day, i, maxDate, maxYear, minDate, minYear, months, options, years;
                content = "";
                maxDate = null;
                minDate = null;
                i = null;
                if (opts.maxDate !== false) {
                    maxDate = isNaN(opts.maxDate) ? moment(opts.maxDate, opts.format) : moment().add(opts.maxDate, "days");
                }
                if (opts.minDate !== false) {
                    minDate = isNaN(opts.minDate) ? moment(opts.minDate, opts.format) : moment().add(opts.minDate - 1, "days");
                }
                content += '<div class="datepicker-nav">';
                content += '<a href="" class="datepicker-previous"></a>';
                content += '<a href="" class="datepicker-next"></a>';
                if (_c.formSelect) {
                    currentyear = new Date().getFullYear();
                    options = [];
                    months = null;
                    years = null;
                    minYear = null;
                    maxYear = null;
                    i = 0;
                    while (i < opts.i18n.months.length) {
                        if (i === data.month) {
                            options.push('<option value="' + i + '" selected>' + opts.i18n.months[i] + "</option>");
                        } else {
                            options.push('<option value="' + i + '">' + opts.i18n.months[i] + "</option>");
                        }
                        i++;
                    }
                    months = '<span class="form-select">' + opts.i18n.months[data.month] + '<select class="update-picker-month">' + options.join("") + "</select></span>";
                    options = [];
                    minYear = minDate ? minDate.year() : currentyear - 50;
                    maxYear = maxDate ? maxDate.year() : currentyear + 20;
                    i = minYear;
                    while (i <= maxYear) {
                        if (i === data.year) {
                            options.push('<option value="' + i + '" selected>' + i + "</option>");
                        } else {
                            options.push('<option value="' + i + '">' + i + "</option>");
                        }
                        i++;
                    }
                    years = '<span class="form-select">' + data.year + '<select class="update-picker-year">' + options.join("") + "</select></span>";
                    content += '<div class="datepicker-heading">' + months + " " + years + "</div>";
                } else {
                    content += '<div class="datepicker-heading">' + opts.i18n.months[data.month] + " " + data.year + "</div>";
                }
                content += "</div>";
                content += '<table class="datepicker-table">';
                content += "<thead>";
                i = 0;
                while (i < data.weekdays.length) {
                    if (data.weekdays[i]) {
                        content += "<th>" + data.weekdays[i] + "</th>";
                    }
                    i++;
                }
                content += "</thead>";
                content += "<tbody>";
                i = 0;
                while (i < data.days.length) {
                    if (data.days[i] && data.days[i].length) {
                        content += "<tr>";
                        d = 0;
                        while (d < data.days[i].length) {
                            if (data.days[i][d]) {
                                day = data.days[i][d];
                                cls = [];
                                if (!day.inmonth) {
                                    cls.push("datepicker-table-muted");
                                }
                                if (day.selected) {
                                    cls.push("active");
                                }
                                if (maxDate && day.day > maxDate) {
                                    cls.push("datepicker-date-disabled datepicker-table-muted");
                                }
                                if (minDate && minDate > day.day) {
                                    cls.push("datepicker-date-disabled datepicker-table-muted");
                                }
                                content += '<td><a href="" class="' + cls.join(" ") + '" data-date="' + day.day.format() + '">' + day.day.format("D") + "</a></td>";
                            }
                            d++;
                        }
                        content += "</tr>";
                    }
                    i++;
                }
                content += "</tbody>";
                content += "</table>";
                return content;
            }
        },
        boot: function() {
            _c.$win.on("resize orientationchange", function() {
                if (active) {
                    return active.hide();
                }
            });
            _c.$html.on("focus.datepicker.clique", "[data-datepicker]", function(e) {
                var ele, obj;
                ele = _c.$(this);
                if (!ele.data("clique.data.datepicker")) {
                    e.preventDefault();
                    obj = _c.datepicker(ele, _c.utils.options(ele.attr("data-datepicker")));
                    return ele.trigger("focus");
                }
            });
            return _c.$html.on("click.datepicker.clique", function(e) {
                var target;
                target = _c.$(e.target);
                if (active && target[0] !== dropdown[0] && !target.data("datepicker") && !target.parents(".datepicker:first").length) {
                    return active.hide();
                }
            });
        },
        init: function() {
            var $this;
            if (_c.support.touch && this.element.attr("type") === "date" && !this.options.mobile) {
                return;
            }
            $this = this;
            this.current = this.element.val() ? moment(this.element.val(), this.options.format) : moment();
            this.on({
                click: function() {
                    if (active !== $this) {
                        return $this.pick(this.value);
                    }
                },
                change: function() {
                    if ($this.element.val() && !moment($this.element.val(), $this.options.format).isValid()) {
                        return $this.element.val(moment().format($this.options.format));
                    }
                }
            });
            if (!dropdown) {
                dropdown = _c.$('<div class="dropdown datepicker"></div>');
                dropdown.on("click", ".datepicker-next, .datepicker-previous, [data-date]", function(e) {
                    var ele;
                    e.stopPropagation();
                    e.preventDefault();
                    ele = _c.$(this);
                    if (ele.hasClass("datepicker-date-disabled")) {
                        return false;
                    }
                    if (ele.is("[data-date]")) {
                        active.element.val(moment(ele.data("date")).format(active.options.format)).trigger("change");
                        dropdown.hide();
                        active = false;
                    } else {
                        return active.add(1 * (ele.hasClass("datepicker-next") ? 1 : -1), "months");
                    }
                });
                dropdown.on("change", ".update-picker-month, .update-picker-year", function() {
                    var select;
                    select = _c.$(this);
                    return active[select.is(".update-picker-year") ? "setYear" : "setMonth"](Number(select.val()));
                });
                return dropdown.appendTo("body");
            }
        },
        pick: function(initdate) {
            var css, offset;
            offset = this.element.offset();
            css = {
                top: offset.top + this.element.outerHeight() + this.options.offsettop,
                left: offset.left,
                right: ""
            };
            this.current = initdate ? moment(initdate, this.options.format) : moment();
            this.initdate = this.current.format("YYYY-MM-DD");
            this.update();
            if (_c.langdirection === "right") {
                css.right = window.innerWidth - (css.left + this.element.outerWidth());
                css.left = "";
            }
            dropdown.css(css).show();
            this.trigger("show.clique.datepicker");
            active = this;
        },
        add: function(unit, value) {
            this.current.add(unit, value);
            return this.update();
        },
        setMonth: function(month) {
            this.current.month(month);
            return this.update();
        },
        setYear: function(year) {
            this.current.year(year);
            return this.update();
        },
        update: function() {
            var data, tpl;
            data = this.getRows(this.current.year(), this.current.month());
            tpl = this.options.template(data, this.options);
            dropdown.html(tpl);
            return this.trigger("update.clique.datepicker");
        },
        getRows: function(year, month) {
            var after, before, cells, data, day, days, i, isDisabled, isInMonth, isSelected, isToday, now, opts, r, row;
            opts = this.options;
            now = moment().format("YYYY-MM-DD");
            days = [ 31, year % 4 === 0 && year % 100 !== 0 || year % 400 === 0 ? 29 : 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 ][month];
            before = new Date(year, month, 1).getDay();
            data = {
                month: month,
                year: year,
                weekdays: [],
                days: []
            };
            row = [];
            data.weekdays = function() {
                var arr, day, i;
                i = 0;
                arr = [];
                while (i < 7) {
                    day = i + (opts.weekstart || 0);
                    while (day >= 7) {
                        day -= 7;
                    }
                    arr.push(opts.i18n.weekdays[day]);
                    i++;
                }
                return arr;
            }();
            if (opts.weekstart && opts.weekstart > 0) {
                before -= opts.weekstart;
                if (before < 0) {
                    before += 7;
                }
            }
            cells = days + before;
            after = cells;
            while (after > 7) {
                after -= 7;
            }
            cells += 7 - after;
            day = null;
            isDisabled = null;
            isSelected = null;
            isToday = null;
            isInMonth = null;
            i = 0;
            r = 0;
            while (i < cells) {
                day = new Date(year, month, 1 + (i - before));
                isDisabled = opts.mindate && day < opts.mindate || opts.maxdate && day > opts.maxdate;
                isInMonth = !(i < before || i >= days + before);
                day = moment(day);
                isSelected = this.initdate === day.format("YYYY-MM-DD");
                isToday = now === day.format("YYYY-MM-DD");
                row.push({
                    selected: isSelected,
                    today: isToday,
                    disabled: isDisabled,
                    day: day,
                    inmonth: isInMonth
                });
                if (++r === 7) {
                    data.days.push(row);
                    row = [];
                    r = 0;
                }
                i++;
            }
            return data;
        },
        hide: function() {
            if (active && active === this) {
                dropdown.hide();
                active = false;
                return this.trigger("hide.clique.datepicker");
            }
        }
    });
    moment = function(undefined_) {
        var DATE, Duration, HOUR, Locale, MILLISECOND, MINUTE, MONTH, Moment, SECOND, VERSION, YEAR, absRound, addOrSubtractDurationFromMoment, addTimeToArrayFromToken, aspNetJsonRegex, aspNetTimeSpanJsonRegex, camelFunctions, checkOverflow, chooseLocale, compareArrays, copyConfig, createAdder, currentDateArray, dateFromConfig, dateFromObject, dayOfYearFromWeekInfo, dayOfYearFromWeeks, daysInMonth, daysInYear, daysToYears, defaultParsingFlags, deprecate, deprecateSimple, deprecations, dfl, expandFormat, extend, formatFunctions, formatMoment, formatTokenFunctions, formattingTokens, getParseRegexForToken, globalScope, hasModule, hasOwnProp, hasOwnProperty, i, isArray, isDate, isLeapYear, isValid, isoDates, isoDurationRegex, isoFormat, isoRegex, isoTimes, leftZeroFill, lists, loadLocale, localFormattingTokens, locales, makeAccessor, makeAs, makeDate, makeDateFromInput, makeDateFromString, makeDateFromStringAndArray, makeDateFromStringAndFormat, makeDurationGetter, makeFormatFunction, makeList, makeMoment, makeUTCDate, map, momentProperties, momentsDifference, normalizeLocale, normalizeObjectUnits, normalizeUnits, oldGlobalMoment, ordinalizeToken, ordinalizeTokens, padToken, paddedTokens, parseISO, parseTimezoneChunker, parseTokenDigits, parseTokenFourDigits, parseTokenOneDigit, parseTokenOneOrTwoDigits, parseTokenOneToFourDigits, parseTokenOneToSixDigits, parseTokenOneToThreeDigits, parseTokenOrdinal, parseTokenSignedNumber, parseTokenSixDigits, parseTokenT, parseTokenThreeDigits, parseTokenTimestampMs, parseTokenTimezone, parseTokenTwoDigits, parseTokenWord, parseWeekday, pickBy, positiveMomentsDifference, printMsg, proxyGettersAndSetters, rawGetter, rawMonthSetter, rawSetter, regexpEscape, relativeTime, relativeTimeThresholds, removeFormattingTokens, round, substituteTimeAgo, timezoneMinutesFromString, toInt, unescapeFormat, unitAliases, unitMillisecondFactors, weekOfYear, weeksInYear, yearsToDays;
        dfl = function(a, b, c) {
            switch (arguments.length) {
              case 2:
                if (a != null) {
                    return a;
                } else {
                    return b;
                }
                break;

              case 3:
                if (a != null) {
                    return a;
                } else {
                    if (b != null) {
                        return b;
                    } else {
                        return c;
                    }
                }
                break;

              default:
                throw new Error("Implement me");
            }
        };
        hasOwnProp = function(a, b) {
            return hasOwnProperty.call(a, b);
        };
        defaultParsingFlags = function() {
            return {
                empty: false,
                unusedTokens: [],
                unusedInput: [],
                overflow: -2,
                charsLeftOver: 0,
                nullInput: false,
                invalidMonth: null,
                invalidFormat: false,
                userInvalidated: false,
                iso: false
            };
        };
        printMsg = function(msg) {
            if (moment.suppressDeprecationWarnings === false && typeof console !== "undefined" && console.warn) {
                return console.warn("Deprecation warning: " + msg);
            }
        };
        deprecate = function(msg, fn) {
            var firstTime;
            firstTime = true;
            return extend(function() {
                if (firstTime) {
                    printMsg(msg);
                    firstTime = false;
                }
                return fn.apply(this, arguments);
            }, fn);
        };
        deprecateSimple = function(name, msg) {
            if (!deprecations[name]) {
                printMsg(msg);
                deprecations[name] = true;
            }
        };
        padToken = function(func, count) {
            return function(a) {
                return leftZeroFill(func.call(this, a), count);
            };
        };
        ordinalizeToken = function(func, period) {
            return function(a) {
                return this.localeData().ordinal(func.call(this, a), period);
            };
        };
        Locale = function() {};
        Moment = function(config, skipOverflow) {
            if (skipOverflow !== false) {
                checkOverflow(config);
            }
            copyConfig(this, config);
            this._d = new Date(+config._d);
        };
        Duration = function(duration) {
            var days, hours, milliseconds, minutes, months, normalizedInput, quarters, seconds, weeks, years;
            normalizedInput = normalizeObjectUnits(duration);
            years = normalizedInput.year || 0;
            quarters = normalizedInput.quarter || 0;
            months = normalizedInput.month || 0;
            weeks = normalizedInput.week || 0;
            days = normalizedInput.day || 0;
            hours = normalizedInput.hour || 0;
            minutes = normalizedInput.minute || 0;
            seconds = normalizedInput.second || 0;
            milliseconds = normalizedInput.millisecond || 0;
            this._milliseconds = +milliseconds + seconds * 1e3 + minutes * 6e4 + hours * 36e5;
            this._days = +days + weeks * 7;
            this._months = +months + quarters * 3 + years * 12;
            this._data = {};
            this._locale = moment.localeData();
            return this._bubble();
        };
        extend = function(a, b) {
            var i;
            for (i in b) {
                if (hasOwnProp(b, i)) {
                    a[i] = b[i];
                }
            }
            if (hasOwnProp(b, "toString")) {
                a.toString = b.toString;
            }
            if (hasOwnProp(b, "valueOf")) {
                a.valueOf = b.valueOf;
            }
            return a;
        };
        copyConfig = function(to, from) {
            var i, prop, val;
            i = null;
            prop = null;
            val = null;
            if (typeof from._isAMomentObject !== "undefined") {
                to._isAMomentObject = from._isAMomentObject;
            }
            if (typeof from._i !== "undefined") {
                to._i = from._i;
            }
            if (typeof from._f !== "undefined") {
                to._f = from._f;
            }
            if (typeof from._l !== "undefined") {
                to._l = from._l;
            }
            if (typeof from._strict !== "undefined") {
                to._strict = from._strict;
            }
            if (typeof from._tzm !== "undefined") {
                to._tzm = from._tzm;
            }
            if (typeof from._isUTC !== "undefined") {
                to._isUTC = from._isUTC;
            }
            if (typeof from._offset !== "undefined") {
                to._offset = from._offset;
            }
            if (typeof from._pf !== "undefined") {
                to._pf = from._pf;
            }
            if (typeof from._locale !== "undefined") {
                to._locale = from._locale;
            }
            if (momentProperties.length > 0) {
                for (i in momentProperties) {
                    prop = momentProperties[i];
                    val = from[prop];
                    if (typeof val !== "undefined") {
                        to[prop] = val;
                    }
                }
            }
            return to;
        };
        absRound = function(number) {
            if (number < 0) {
                return Math.ceil(number);
            } else {
                return Math.floor(number);
            }
        };
        leftZeroFill = function(number, targetLength, forceSign) {
            var output, sign;
            output = "" + Math.abs(number);
            sign = number >= 0;
            while (output.length < targetLength) {
                output = "0" + output;
            }
            return (sign ? forceSign ? "+" : "" : "-") + output;
        };
        positiveMomentsDifference = function(base, other) {
            var res;
            res = {
                milliseconds: 0,
                months: 0
            };
            res.months = other.month() - base.month() + (other.year() - base.year()) * 12;
            if (base.clone().add(res.months, "M").isAfter(other)) {
                --res.months;
            }
            res.milliseconds = +other - +base.clone().add(res.months, "M");
            return res;
        };
        momentsDifference = function(base, other) {
            var res;
            res = null;
            other = makeAs(other, base);
            if (base.isBefore(other)) {
                res = positiveMomentsDifference(base, other);
            } else {
                res = positiveMomentsDifference(other, base);
                res.milliseconds = -res.milliseconds;
                res.months = -res.months;
            }
            return res;
        };
        createAdder = function(direction, name) {
            return function(val, period) {
                var dur, tmp;
                dur = null;
                tmp = null;
                if (period !== null && !isNaN(+period)) {
                    deprecateSimple(name, "moment()." + name + "(period, number) is deprecated. Please use moment()." + name + "(number, period).");
                    tmp = val;
                    val = period;
                    period = tmp;
                }
                val = typeof val === "string" ? +val : val;
                dur = moment.duration(val, period);
                addOrSubtractDurationFromMoment(this, dur, direction);
                return this;
            };
        };
        addOrSubtractDurationFromMoment = function(mom, duration, isAdding, updateOffset) {
            var days, milliseconds, months;
            milliseconds = duration._milliseconds;
            days = duration._days;
            months = duration._months;
            updateOffset = updateOffset == null ? true : updateOffset;
            if (milliseconds) {
                mom._d.setTime(+mom._d + milliseconds * isAdding);
            }
            if (days) {
                rawSetter(mom, "Date", rawGetter(mom, "Date") + days * isAdding);
            }
            if (months) {
                rawMonthSetter(mom, rawGetter(mom, "Month") + months * isAdding);
            }
            if (updateOffset) {
                moment.updateOffset(mom, days || months);
            }
        };
        isArray = function(input) {
            return Object.prototype.toString.call(input) === "[object Array]";
        };
        isDate = function(input) {
            return Object.prototype.toString.call(input) === "[object Date]" || input instanceof Date;
        };
        compareArrays = function(array1, array2, dontConvert) {
            var diffs, i, len, lengthDiff;
            len = Math.min(array1.length, array2.length);
            lengthDiff = Math.abs(array1.length - array2.length);
            diffs = 0;
            i = null;
            i = 0;
            while (i < len) {
                if (dontConvert && array1[i] !== array2[i] || !dontConvert && toInt(array1[i]) !== toInt(array2[i])) {
                    diffs++;
                }
                i++;
            }
            return diffs + lengthDiff;
        };
        normalizeUnits = function(units) {
            var lowered;
            if (units) {
                lowered = units.toLowerCase().replace(/(.)s$/, "$1");
                units = unitAliases[units] || camelFunctions[lowered] || lowered;
            }
            return units;
        };
        normalizeObjectUnits = function(inputObject) {
            var normalizedInput, normalizedProp, prop;
            normalizedInput = {};
            normalizedProp = null;
            prop = null;
            for (prop in inputObject) {
                if (hasOwnProp(inputObject, prop)) {
                    normalizedProp = normalizeUnits(prop);
                    if (normalizedProp) {
                        normalizedInput[normalizedProp] = inputObject[prop];
                    }
                }
            }
            return normalizedInput;
        };
        makeList = function(field) {
            var count, setter;
            count = null;
            setter = null;
            if (field.indexOf("week") === 0) {
                count = 7;
                setter = "day";
            } else {
                if (field.indexOf("month") === 0) {
                    count = 12;
                    setter = "month";
                } else {
                    return;
                }
            }
            moment[field] = function(format, index) {
                var getter, i, method, results;
                i = null;
                getter = null;
                method = moment._locale[field];
                results = [];
                if (typeof format === "number") {
                    index = format;
                    format = undefined;
                }
                getter = function(i) {
                    var m;
                    m = moment().utc().set(setter, i);
                    return method.call(moment._locale, m, format || "");
                };
                if (index != null) {
                    return getter(index);
                } else {
                    i = 0;
                    while (i < count) {
                        results.push(getter(i));
                        i++;
                    }
                    return results;
                }
            };
        };
        toInt = function(argumentForCoercion) {
            var coercedNumber, value;
            coercedNumber = +argumentForCoercion;
            value = 0;
            if (coercedNumber !== 0 && isFinite(coercedNumber)) {
                if (coercedNumber >= 0) {
                    value = Math.floor(coercedNumber);
                } else {
                    value = Math.ceil(coercedNumber);
                }
            }
            return value;
        };
        daysInMonth = function(year, month) {
            return new Date(Date.UTC(year, month + 1, 0)).getUTCDate();
        };
        weeksInYear = function(year, dow, doy) {
            return weekOfYear(moment([ year, 11, 31 + dow - doy ]), dow, doy).week;
        };
        daysInYear = function(year) {
            if (isLeapYear(year)) {
                return 366;
            } else {
                return 365;
            }
        };
        isLeapYear = function(year) {
            return year % 4 === 0 && year % 100 !== 0 || year % 400 === 0;
        };
        checkOverflow = function(m) {
            var overflow;
            overflow = null;
            if (m._a && m._pf.overflow === -2) {
                overflow = m._a[MONTH] < 0 || m._a[MONTH] > 11 ? MONTH : m._a[DATE] < 1 || m._a[DATE] > daysInMonth(m._a[YEAR], m._a[MONTH]) ? DATE : m._a[HOUR] < 0 || m._a[HOUR] > 23 ? HOUR : m._a[MINUTE] < 0 || m._a[MINUTE] > 59 ? MINUTE : m._a[SECOND] < 0 || m._a[SECOND] > 59 ? SECOND : m._a[MILLISECOND] < 0 || m._a[MILLISECOND] > 999 ? MILLISECOND : -1;
                if (m._pf._overflowDayOfYear && (overflow < YEAR || overflow > DATE)) {
                    overflow = DATE;
                }
                m._pf.overflow = overflow;
            }
        };
        isValid = function(m) {
            if (m._isValid == null) {
                m._isValid = !isNaN(m._d.getTime()) && m._pf.overflow < 0 && !m._pf.empty && !m._pf.invalidMonth && !m._pf.nullInput && !m._pf.invalidFormat && !m._pf.userInvalidated;
                if (m._strict) {
                    m._isValid = m._isValid && m._pf.charsLeftOver === 0 && m._pf.unusedTokens.length === 0;
                }
            }
            return m._isValid;
        };
        normalizeLocale = function(key) {
            if (key) {
                return key.toLowerCase().replace("_", "-");
            } else {
                return key;
            }
        };
        chooseLocale = function(names) {
            var i, j, locale, next, split;
            i = 0;
            j = null;
            next = null;
            locale = null;
            split = null;
            while (i < names.length) {
                split = normalizeLocale(names[i]).split("-");
                j = split.length;
                next = normalizeLocale(names[i + 1]);
                next = next ? next.split("-") : null;
                while (j > 0) {
                    locale = loadLocale(split.slice(0, j).join("-"));
                    if (locale) {
                        return locale;
                    }
                    if (next && next.length >= j && compareArrays(split, next, true) >= j - 1) {
                        break;
                    }
                    j--;
                }
                i++;
            }
            return null;
        };
        loadLocale = function(name) {
            var oldLocale;
            oldLocale = null;
            if (!locales[name] && hasModule) {
                try {
                    oldLocale = moment.locale();
                    require("./locale/" + name);
                    moment.locale(oldLocale);
                } catch (_error) {}
            }
            return locales[name];
        };
        makeAs = function(input, model) {
            if (model._isUTC) {
                return moment(input).zone(model._offset || 0);
            } else {
                return moment(input).local();
            }
        };
        removeFormattingTokens = function(input) {
            if (input.match(/\[[\s\S]/)) {
                return input.replace(/^\[|\]$/g, "");
            }
            return input.replace(/\\/g, "");
        };
        makeFormatFunction = function(format) {
            var array, i, length;
            array = format.match(formattingTokens);
            i = null;
            length = null;
            i = 0;
            length = array.length;
            while (i < length) {
                if (formatTokenFunctions[array[i]]) {
                    array[i] = formatTokenFunctions[array[i]];
                } else {
                    array[i] = removeFormattingTokens(array[i]);
                }
                i++;
            }
            return function(mom) {
                var output;
                output = "";
                i = 0;
                while (i < length) {
                    output += array[i] instanceof Function ? array[i].call(mom, format) : array[i];
                    i++;
                }
                return output;
            };
        };
        formatMoment = function(m, format) {
            if (!m.isValid()) {
                return m.localeData().invalidDate();
            }
            format = expandFormat(format, m.localeData());
            if (!formatFunctions[format]) {
                formatFunctions[format] = makeFormatFunction(format);
            }
            return formatFunctions[format](m);
        };
        expandFormat = function(format, locale) {
            var i, replaceLongDateFormatTokens;
            replaceLongDateFormatTokens = function(input) {
                return locale.longDateFormat(input) || input;
            };
            i = 5;
            localFormattingTokens.lastIndex = 0;
            while (i >= 0 && localFormattingTokens.test(format)) {
                format = format.replace(localFormattingTokens, replaceLongDateFormatTokens);
                localFormattingTokens.lastIndex = 0;
                i -= 1;
            }
            return format;
        };
        getParseRegexForToken = function(token, config) {
            var a, strict;
            a = null;
            strict = config._strict;
            switch (token) {
              case "Q":
                return parseTokenOneDigit;

              case "DDDD":
                return parseTokenThreeDigits;

              case "YYYY":
              case "GGGG":
              case "gggg":
                if (strict) {
                    return parseTokenFourDigits;
                } else {
                    return parseTokenOneToFourDigits;
                }
                break;

              case "Y":
              case "G":
              case "g":
                return parseTokenSignedNumber;

              case "YYYYYY":
              case "YYYYY":
              case "GGGGG":
              case "ggggg":
                if (strict) {
                    return parseTokenSixDigits;
                } else {
                    return parseTokenOneToSixDigits;
                }
                break;

              case "S":
                if (strict) {
                    return parseTokenOneDigit;
                }
                break;

              case "SS":
                if (strict) {
                    return parseTokenTwoDigits;
                }
                break;

              case "SSS":
                if (strict) {
                    return parseTokenThreeDigits;
                }
                break;

              case "DDD":
                return parseTokenOneToThreeDigits;

              case "MMM":
              case "MMMM":
              case "dd":
              case "ddd":
              case "dddd":
                return parseTokenWord;

              case "a":
              case "A":
                return config._locale._meridiemParse;

              case "X":
                return parseTokenTimestampMs;

              case "Z":
              case "ZZ":
                return parseTokenTimezone;

              case "T":
                return parseTokenT;

              case "SSSS":
                return parseTokenDigits;

              case "MM":
              case "DD":
              case "YY":
              case "GG":
              case "gg":
              case "HH":
              case "hh":
              case "mm":
              case "ss":
              case "ww":
              case "WW":
                if (strict) {
                    return parseTokenTwoDigits;
                } else {
                    return parseTokenOneOrTwoDigits;
                }
                break;

              case "M":
              case "D":
              case "d":
              case "H":
              case "h":
              case "m":
              case "s":
              case "w":
              case "W":
              case "e":
              case "E":
                return parseTokenOneOrTwoDigits;

              case "Do":
                return parseTokenOrdinal;

              default:
                a = new RegExp(regexpEscape(unescapeFormat(token.replace("\\", "")), "i"));
                return a;
            }
        };
        timezoneMinutesFromString = function(string) {
            var minutes, parts, possibleTzMatches, tzChunk;
            string = string || "";
            possibleTzMatches = string.match(parseTokenTimezone) || [];
            tzChunk = possibleTzMatches[possibleTzMatches.length - 1] || [];
            parts = (tzChunk + "").match(parseTimezoneChunker) || [ "-", 0, 0 ];
            minutes = +(parts[1] * 60) + toInt(parts[2]);
            if (parts[0] === "+") {
                return -minutes;
            } else {
                return minutes;
            }
        };
        addTimeToArrayFromToken = function(token, input, config) {
            var a, datePartArray;
            a = null;
            datePartArray = config._a;
            switch (token) {
              case "Q":
                if (input != null) {
                    datePartArray[MONTH] = (toInt(input) - 1) * 3;
                }
                break;

              case "M":
              case "MM":
                if (input != null) {
                    datePartArray[MONTH] = toInt(input) - 1;
                }
                break;

              case "MMM":
              case "MMMM":
                a = config._locale.monthsParse(input);
                if (a != null) {
                    datePartArray[MONTH] = a;
                } else {
                    config._pf.invalidMonth = input;
                }
                break;

              case "D":
              case "DD":
                if (input != null) {
                    datePartArray[DATE] = toInt(input);
                }
                break;

              case "Do":
                if (input != null) {
                    datePartArray[DATE] = toInt(parseInt(input, 10));
                }
                break;

              case "DDD":
              case "DDDD":
                if (input != null) {
                    config._dayOfYear = toInt(input);
                }
                break;

              case "YY":
                datePartArray[YEAR] = moment.parseTwoDigitYear(input);
                break;

              case "YYYY":
              case "YYYYY":
              case "YYYYYY":
                datePartArray[YEAR] = toInt(input);
                break;

              case "a":
              case "A":
                config._isPm = config._locale.isPM(input);
                break;

              case "H":
              case "HH":
              case "h":
              case "hh":
                datePartArray[HOUR] = toInt(input);
                break;

              case "m":
              case "mm":
                datePartArray[MINUTE] = toInt(input);
                break;

              case "s":
              case "ss":
                datePartArray[SECOND] = toInt(input);
                break;

              case "S":
              case "SS":
              case "SSS":
              case "SSSS":
                datePartArray[MILLISECOND] = toInt(("0." + input) * 1e3);
                break;

              case "X":
                config._d = new Date(parseFloat(input) * 1e3);
                break;

              case "Z":
              case "ZZ":
                config._useUTC = true;
                config._tzm = timezoneMinutesFromString(input);
                break;

              case "dd":
              case "ddd":
              case "dddd":
                a = config._locale.weekdaysParse(input);
                if (a != null) {
                    config._w = config._w || {};
                    config._w.d = a;
                    return;
                } else {
                    config._pf.invalidWeekday = input;
                }
                break;

              case "w":
              case "ww":
              case "W":
              case "WW":
              case "d":
              case "e":
              case "E":
                token = token.substr(0, 1);
                break;

              case "gggg":
              case "GGGG":
              case "GGGGG":
                token = token.substr(0, 2);
                if (input) {
                    config._w = config._w || {};
                    config._w[token] = toInt(input);
                }
                break;

              case "gg":
              case "GG":
                config._w = config._w || {};
                config._w[token] = moment.parseTwoDigitYear(input);
            }
        };
        dayOfYearFromWeekInfo = function(config) {
            var dow, doy, temp, w, week, weekYear, weekday;
            w = null;
            weekYear = null;
            week = null;
            weekday = null;
            dow = null;
            doy = null;
            temp = null;
            w = config._w;
            if (w.GG != null || w.W != null || w.E != null) {
                dow = 1;
                doy = 4;
                weekYear = dfl(w.GG, config._a[YEAR], weekOfYear(moment(), 1, 4).year);
                week = dfl(w.W, 1);
                weekday = dfl(w.E, 1);
            } else {
                dow = config._locale._week.dow;
                doy = config._locale._week.doy;
                weekYear = dfl(w.gg, config._a[YEAR], weekOfYear(moment(), dow, doy).year);
                week = dfl(w.w, 1);
                if (w.d != null) {
                    weekday = w.d;
                    if (weekday < dow) {
                        ++week;
                    }
                } else {
                    if (w.e != null) {
                        weekday = w.e + dow;
                    } else {
                        weekday = dow;
                    }
                }
            }
            temp = dayOfYearFromWeeks(weekYear, week, weekday, doy, dow);
            config._a[YEAR] = temp.year;
            config._dayOfYear = temp.dayOfYear;
        };
        dateFromConfig = function(config) {
            var currentDate, date, i, input, yearToUse;
            i = null;
            date = null;
            input = [];
            currentDate = null;
            yearToUse = null;
            if (config._d) {
                return;
            }
            currentDate = currentDateArray(config);
            if (config._w && config._a[DATE] == null && config._a[MONTH] == null) {
                dayOfYearFromWeekInfo(config);
            }
            if (config._dayOfYear) {
                yearToUse = dfl(config._a[YEAR], currentDate[YEAR]);
                if (config._dayOfYear > daysInYear(yearToUse)) {
                    config._pf._overflowDayOfYear = true;
                }
                date = makeUTCDate(yearToUse, 0, config._dayOfYear);
                config._a[MONTH] = date.getUTCMonth();
                config._a[DATE] = date.getUTCDate();
            }
            i = 0;
            while (i < 3 && config._a[i] == null) {
                config._a[i] = input[i] = currentDate[i];
                ++i;
            }
            while (i < 7) {
                config._a[i] = input[i] = config._a[i] == null ? i === 2 ? 1 : 0 : config._a[i];
                i++;
            }
            config._d = (config._useUTC ? makeUTCDate : makeDate).apply(null, input);
            if (config._tzm != null) {
                config._d.setUTCMinutes(config._d.getUTCMinutes() + config._tzm);
            }
        };
        dateFromObject = function(config) {
            var normalizedInput;
            normalizedInput = null;
            if (config._d) {
                return;
            }
            normalizedInput = normalizeObjectUnits(config._i);
            config._a = [ normalizedInput.year, normalizedInput.month, normalizedInput.day, normalizedInput.hour, normalizedInput.minute, normalizedInput.second, normalizedInput.millisecond ];
            dateFromConfig(config);
        };
        currentDateArray = function(config) {
            var now;
            now = new Date();
            if (config._useUTC) {
                return [ now.getUTCFullYear(), now.getUTCMonth(), now.getUTCDate() ];
            } else {
                return [ now.getFullYear(), now.getMonth(), now.getDate() ];
            }
        };
        makeDateFromStringAndFormat = function(config) {
            var i, parsedInput, skipped, string, stringLength, token, tokens, totalParsedInputLength;
            if (config._f === moment.ISO_8601) {
                parseISO(config);
                return;
            }
            config._a = [];
            config._pf.empty = true;
            string = "" + config._i;
            i = null;
            parsedInput = null;
            tokens = null;
            token = null;
            skipped = null;
            stringLength = string.length;
            totalParsedInputLength = 0;
            tokens = expandFormat(config._f, config._locale).match(formattingTokens) || [];
            i = 0;
            while (i < tokens.length) {
                token = tokens[i];
                parsedInput = (string.match(getParseRegexForToken(token, config)) || [])[0];
                if (parsedInput) {
                    skipped = string.substr(0, string.indexOf(parsedInput));
                    if (skipped.length > 0) {
                        config._pf.unusedInput.push(skipped);
                    }
                    string = string.slice(string.indexOf(parsedInput) + parsedInput.length);
                    totalParsedInputLength += parsedInput.length;
                }
                if (formatTokenFunctions[token]) {
                    if (parsedInput) {
                        config._pf.empty = false;
                    } else {
                        config._pf.unusedTokens.push(token);
                    }
                    addTimeToArrayFromToken(token, parsedInput, config);
                } else {
                    if (config._strict && !parsedInput) {
                        config._pf.unusedTokens.push(token);
                    }
                }
                i++;
            }
            config._pf.charsLeftOver = stringLength - totalParsedInputLength;
            if (string.length > 0) {
                config._pf.unusedInput.push(string);
            }
            if (config._isPm && config._a[HOUR] < 12) {
                config._a[HOUR] += 12;
            }
            if (config._isPm === false && config._a[HOUR] === 12) {
                config._a[HOUR] = 0;
            }
            dateFromConfig(config);
            checkOverflow(config);
        };
        unescapeFormat = function(s) {
            return s.replace(/\\(\[)|\\(\])|\[([^\]\[]*)\]|\\(.)/g, function(matched, p1, p2, p3, p4) {
                return p1 || p2 || p3 || p4;
            });
        };
        regexpEscape = function(s) {
            return s.replace(/[-\/\\^$*+?.()|[\]{}]/g, "\\$&");
        };
        makeDateFromStringAndArray = function(config) {
            var bestMoment, currentScore, i, scoreToBeat, tempConfig;
            tempConfig = null;
            bestMoment = null;
            scoreToBeat = null;
            i = null;
            currentScore = null;
            if (config._f.length === 0) {
                config._pf.invalidFormat = true;
                config._d = new Date(NaN);
                return;
            }
            i = 0;
            while (i < config._f.length) {
                currentScore = 0;
                tempConfig = copyConfig({}, config);
                if (config._useUTC != null) {
                    tempConfig._useUTC = config._useUTC;
                }
                tempConfig._pf = defaultParsingFlags();
                tempConfig._f = config._f[i];
                makeDateFromStringAndFormat(tempConfig);
                if (!isValid(tempConfig)) {
                    continue;
                }
                currentScore += tempConfig._pf.charsLeftOver;
                currentScore += tempConfig._pf.unusedTokens.length * 10;
                tempConfig._pf.score = currentScore;
                if (scoreToBeat == null || currentScore < scoreToBeat) {
                    scoreToBeat = currentScore;
                    bestMoment = tempConfig;
                }
                i++;
            }
            extend(config, bestMoment || tempConfig);
        };
        parseISO = function(config) {
            var i, l, match, string;
            i = null;
            l = null;
            string = config._i;
            match = isoRegex.exec(string);
            if (match) {
                config._pf.iso = true;
                i = 0;
                l = isoDates.length;
                while (i < l) {
                    if (isoDates[i][1].exec(string)) {
                        config._f = isoDates[i][0] + (match[6] || " ");
                        break;
                    }
                    i++;
                }
                i = 0;
                l = isoTimes.length;
                while (i < l) {
                    if (isoTimes[i][1].exec(string)) {
                        config._f += isoTimes[i][0];
                        break;
                    }
                    i++;
                }
                if (string.match(parseTokenTimezone)) {
                    config._f += "Z";
                }
                makeDateFromStringAndFormat(config);
            } else {
                config._isValid = false;
            }
        };
        makeDateFromString = function(config) {
            parseISO(config);
            if (config._isValid === false) {
                delete config._isValid;
                moment.createFromInputFallback(config);
            }
        };
        map = function(arr, fn) {
            var i, res;
            res = [];
            i = null;
            i = 0;
            while (i < arr.length) {
                res.push(fn(arr[i], i));
                ++i;
            }
            return res;
        };
        makeDateFromInput = function(config) {
            var input, matched;
            input = config._i;
            matched = null;
            if (input === undefined) {
                config._d = new Date();
            } else {
                if (isDate(input)) {
                    config._d = new Date(+input);
                } else {
                    if ((matched = aspNetJsonRegex.exec(input)) !== null) {
                        config._d = new Date(+matched[1]);
                    } else {
                        if (typeof input === "string") {
                            makeDateFromString(config);
                        } else {
                            if (isArray(input)) {
                                config._a = map(input.slice(0), function(obj) {
                                    return parseInt(obj, 10);
                                });
                                dateFromConfig(config);
                            } else {
                                if (typeof input === "object") {
                                    dateFromObject(config);
                                } else {
                                    if (typeof input === "number") {
                                        config._d = new Date(input);
                                    } else {
                                        moment.createFromInputFallback(config);
                                    }
                                }
                            }
                        }
                    }
                }
            }
        };
        makeDate = function(y, m, d, h, M, s, ms) {
            var date;
            date = new Date(y, m, d, h, M, s, ms);
            if (y < 1970) {
                date.setFullYear(y);
            }
            return date;
        };
        makeUTCDate = function(y) {
            var date;
            date = new Date(Date.UTC.apply(null, arguments));
            if (y < 1970) {
                date.setUTCFullYear(y);
            }
            return date;
        };
        parseWeekday = function(input, locale) {
            if (typeof input === "string") {
                if (!isNaN(input)) {
                    input = parseInt(input, 10);
                } else {
                    input = locale.weekdaysParse(input);
                    if (typeof input !== "number") {
                        return null;
                    }
                }
            }
            return input;
        };
        substituteTimeAgo = function(string, number, withoutSuffix, isFuture, locale) {
            return locale.relativeTime(number || 1, !!withoutSuffix, string, isFuture);
        };
        relativeTime = function(posNegDuration, withoutSuffix, locale) {
            var args, days, duration, hours, minutes, months, seconds, years;
            duration = moment.duration(posNegDuration).abs();
            seconds = round(duration.as("s"));
            minutes = round(duration.as("m"));
            hours = round(duration.as("h"));
            days = round(duration.as("d"));
            months = round(duration.as("M"));
            years = round(duration.as("y"));
            args = seconds < relativeTimeThresholds.s && [ "s", seconds ] || minutes === 1 && [ "m" ] || minutes < relativeTimeThresholds.m && [ "mm", minutes ] || hours === 1 && [ "h" ] || hours < relativeTimeThresholds.h && [ "hh", hours ] || days === 1 && [ "d" ] || days < relativeTimeThresholds.d && [ "dd", days ] || months === 1 && [ "M" ] || months < relativeTimeThresholds.M && [ "MM", months ] || years === 1 && [ "y" ] || [ "yy", years ];
            args[2] = withoutSuffix;
            args[3] = +posNegDuration > 0;
            args[4] = locale;
            return substituteTimeAgo.apply({}, args);
        };
        weekOfYear = function(mom, firstDayOfWeek, firstDayOfWeekOfYear) {
            var adjustedMoment, daysToDayOfWeek, end;
            end = firstDayOfWeekOfYear - firstDayOfWeek;
            daysToDayOfWeek = firstDayOfWeekOfYear - mom.day();
            adjustedMoment = null;
            if (daysToDayOfWeek > end) {
                daysToDayOfWeek -= 7;
            }
            if (daysToDayOfWeek < end - 7) {
                daysToDayOfWeek += 7;
            }
            adjustedMoment = moment(mom).add(daysToDayOfWeek, "d")({
                week: Math.ceil(adjustedMoment.dayOfYear() / 7),
                year: adjustedMoment.year()
            });
        };
        dayOfYearFromWeeks = function(year, week, weekday, firstDayOfWeekOfYear, firstDayOfWeek) {
            var d, dayOfYear, daysToAdd;
            d = makeUTCDate(year, 0, 1).getUTCDay();
            daysToAdd = null;
            dayOfYear = null;
            d = d === 0 ? 7 : d;
            weekday = weekday != null ? weekday : firstDayOfWeek;
            daysToAdd = firstDayOfWeek - d + (d > firstDayOfWeekOfYear ? 7 : 0) - (d < firstDayOfWeek ? 7 : 0);
            dayOfYear = 7 * (week - 1) + (weekday - firstDayOfWeek) + daysToAdd + 1;
            return {
                year: dayOfYear > 0 ? year : year - 1,
                dayOfYear: dayOfYear > 0 ? dayOfYear : daysInYear(year - 1) + dayOfYear
            };
        };
        makeMoment = function(config) {
            var format, input;
            input = config._i;
            format = config._f;
            config._locale = config._locale || moment.localeData(config._l);
            if (input === null || format === undefined && input === "") {
                return moment.invalid({
                    nullInput: true
                });
            }
            if (typeof input === "string") {
                config._i = input = config._locale.preparse(input);
            }
            if (moment.isMoment(input)) {
                return new Moment(input, true);
            } else {
                if (format) {
                    if (isArray(format)) {
                        makeDateFromStringAndArray(config);
                    } else {
                        makeDateFromStringAndFormat(config);
                    }
                } else {
                    makeDateFromInput(config);
                }
            }
            return new Moment(config);
        };
        pickBy = function(fn, moments) {
            var i, res;
            res = null;
            i = null;
            if (moments.length === 1 && isArray(moments[0])) {
                moments = moments[0];
            }
            if (!moments.length) {
                return moment();
            }
            res = moments[0];
            i = 1;
            while (i < moments.length) {
                if (moments[i][fn](res)) {
                    res = moments[i];
                }
                ++i;
            }
            return res;
        };
        rawMonthSetter = function(mom, value) {
            var dayOfMonth;
            dayOfMonth = null;
            if (typeof value === "string") {
                value = mom.localeData().monthsParse(value);
                if (typeof value !== "number") {
                    return mom;
                }
            }
            dayOfMonth = Math.min(mom.date(), daysInMonth(mom.year(), value));
            mom._d["set" + (mom._isUTC ? "UTC" : "") + "Month"](value, dayOfMonth);
            return mom;
        };
        rawGetter = function(mom, unit) {
            return mom._d["get" + (mom._isUTC ? "UTC" : "") + unit]();
        };
        rawSetter = function(mom, unit, value) {
            if (unit === "Month") {
                return rawMonthSetter(mom, value);
            } else {
                return mom._d["set" + (mom._isUTC ? "UTC" : "") + unit](value);
            }
        };
        makeAccessor = function(unit, keepTime) {
            return function(value) {
                if (value != null) {
                    rawSetter(this, unit, value);
                    moment.updateOffset(this, keepTime);
                    return this;
                } else {
                    return rawGetter(this, unit);
                }
            };
        };
        daysToYears = function(days) {
            return days * 400 / 146097;
        };
        yearsToDays = function(years) {
            return years * 146097 / 400;
        };
        makeDurationGetter = function(name) {
            moment.duration.fn[name] = function() {
                return this._data[name];
            };
        };
        moment = null;
        VERSION = "2.8.3";
        globalScope = typeof global !== "undefined" ? global : this;
        oldGlobalMoment = null;
        round = Math.round;
        hasOwnProperty = Object.prototype.hasOwnProperty;
        i = null;
        YEAR = 0;
        MONTH = 1;
        DATE = 2;
        HOUR = 3;
        MINUTE = 4;
        SECOND = 5;
        MILLISECOND = 6;
        locales = {};
        momentProperties = [];
        hasModule = typeof module !== "undefined" && module.exports;
        aspNetJsonRegex = /^\/?Date\((\-?\d+)/i;
        aspNetTimeSpanJsonRegex = /(\-)?(?:(\d*)\.)?(\d+)\:(\d+)(?:\:(\d+)\.?(\d{3})?)?/;
        isoDurationRegex = /^(-)?P(?:(?:([0-9,.]*)Y)?(?:([0-9,.]*)M)?(?:([0-9,.]*)D)?(?:T(?:([0-9,.]*)H)?(?:([0-9,.]*)M)?(?:([0-9,.]*)S)?)?|([0-9,.]*)W)$/;
        formattingTokens = /(\[[^\[]*\])|(\\)?(Mo|MM?M?M?|Do|DDDo|DD?D?D?|ddd?d?|do?|w[o|w]?|W[o|W]?|Q|YYYYYY|YYYYY|YYYY|YY|gg(ggg?)?|GG(GGG?)?|e|E|a|A|hh?|HH?|mm?|ss?|S{1,4}|X|zz?|ZZ?|.)/g;
        localFormattingTokens = /(\[[^\[]*\])|(\\)?(LT|LL?L?L?|l{1,4})/g;
        parseTokenOneOrTwoDigits = /\d\d?/;
        parseTokenOneToThreeDigits = /\d{1,3}/;
        parseTokenOneToFourDigits = /\d{1,4}/;
        parseTokenOneToSixDigits = /[+\-]?\d{1,6}/;
        parseTokenDigits = /\d+/;
        parseTokenWord = /[0-9]*['a-z\u00A0-\u05FF\u0700-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+|[\u0600-\u06FF\/]+(\s*?[\u0600-\u06FF]+){1,2}/i;
        parseTokenTimezone = /Z|[\+\-]\d\d:?\d\d/g;
        parseTokenT = /T/i;
        parseTokenTimestampMs = /[\+\-]?\d+(\.\d{1,3})?/;
        parseTokenOrdinal = /\d{1,2}/;
        parseTokenOneDigit = /\d/;
        parseTokenTwoDigits = /\d\d/;
        parseTokenThreeDigits = /\d{3}/;
        parseTokenFourDigits = /\d{4}/;
        parseTokenSixDigits = /[+-]?\d{6}/;
        parseTokenSignedNumber = /[+-]?\d+/;
        isoRegex = /^\s*(?:[+-]\d{6}|\d{4})-(?:(\d\d-\d\d)|(W\d\d$)|(W\d\d-\d)|(\d\d\d))((T| )(\d\d(:\d\d(:\d\d(\.\d+)?)?)?)?([\+\-]\d\d(?::?\d\d)?|\s*Z)?)?$/;
        isoFormat = "YYYY-MM-DDTHH:mm:ssZ";
        isoDates = [ [ "YYYYYY-MM-DD", /[+-]\d{6}-\d{2}-\d{2}/ ], [ "YYYY-MM-DD", /\d{4}-\d{2}-\d{2}/ ], [ "GGGG-[W]WW-E", /\d{4}-W\d{2}-\d/ ], [ "GGGG-[W]WW", /\d{4}-W\d{2}/ ], [ "YYYY-DDD", /\d{4}-\d{3}/ ] ];
        isoTimes = [ [ "HH:mm:ss.SSSS", /(T| )\d\d:\d\d:\d\d\.\d+/ ], [ "HH:mm:ss", /(T| )\d\d:\d\d:\d\d/ ], [ "HH:mm", /(T| )\d\d:\d\d/ ], [ "HH", /(T| )\d\d/ ] ];
        parseTimezoneChunker = /([\+\-]|\d\d)/g;
        proxyGettersAndSetters = "Date|Hours|Minutes|Seconds|Milliseconds".split("|");
        unitMillisecondFactors = {
            Milliseconds: 1,
            Seconds: 1e3,
            Minutes: 6e4,
            Hours: 36e5,
            Days: 864e5,
            Months: 2592e6,
            Years: 31536e6
        };
        unitAliases = {
            ms: "millisecond",
            s: "second",
            m: "minute",
            h: "hour",
            d: "day",
            D: "date",
            w: "week",
            W: "isoWeek",
            M: "month",
            Q: "quarter",
            y: "year",
            DDD: "dayOfYear",
            e: "weekday",
            E: "isoWeekday",
            gg: "weekYear",
            GG: "isoWeekYear"
        };
        camelFunctions = {
            dayofyear: "dayOfYear",
            isoweekday: "isoWeekday",
            isoweek: "isoWeek",
            weekyear: "weekYear",
            isoweekyear: "isoWeekYear"
        };
        formatFunctions = {};
        relativeTimeThresholds = {
            s: 45,
            m: 45,
            h: 22,
            d: 26,
            M: 11
        };
        ordinalizeTokens = "DDD w W M D d".split(" ");
        paddedTokens = "M D H h m s w W".split(" ");
        formatTokenFunctions = {
            M: function() {
                return this.month() + 1;
            },
            MMM: function(format) {
                return this.localeData().monthsShort(this, format);
            },
            MMMM: function(format) {
                return this.localeData().months(this, format);
            },
            D: function() {
                return this.date();
            },
            DDD: function() {
                return this.dayOfYear();
            },
            d: function() {
                return this.day();
            },
            dd: function(format) {
                return this.localeData().weekdaysMin(this, format);
            },
            ddd: function(format) {
                return this.localeData().weekdaysShort(this, format);
            },
            dddd: function(format) {
                return this.localeData().weekdays(this, format);
            },
            w: function() {
                return this.week();
            },
            W: function() {
                return this.isoWeek();
            },
            YY: function() {
                return leftZeroFill(this.year() % 100, 2);
            },
            YYYY: function() {
                return leftZeroFill(this.year(), 4);
            },
            YYYYY: function() {
                return leftZeroFill(this.year(), 5);
            },
            YYYYYY: function() {
                var sign, y;
                y = this.year();
                sign = y >= 0 ? "+" : "-";
                return sign + leftZeroFill(Math.abs(y), 6);
            },
            gg: function() {
                return leftZeroFill(this.weekYear() % 100, 2);
            },
            gggg: function() {
                return leftZeroFill(this.weekYear(), 4);
            },
            ggggg: function() {
                return leftZeroFill(this.weekYear(), 5);
            },
            GG: function() {
                return leftZeroFill(this.isoWeekYear() % 100, 2);
            },
            GGGG: function() {
                return leftZeroFill(this.isoWeekYear(), 4);
            },
            GGGGG: function() {
                return leftZeroFill(this.isoWeekYear(), 5);
            },
            e: function() {
                return this.weekday();
            },
            E: function() {
                return this.isoWeekday();
            },
            a: function() {
                return this.localeData().meridiem(this.hours(), this.minutes(), true);
            },
            A: function() {
                return this.localeData().meridiem(this.hours(), this.minutes(), false);
            },
            H: function() {
                return this.hours();
            },
            h: function() {
                return this.hours() % 12 || 12;
            },
            m: function() {
                return this.minutes();
            },
            s: function() {
                return this.seconds();
            },
            S: function() {
                return toInt(this.milliseconds() / 100);
            },
            SS: function() {
                return leftZeroFill(toInt(this.milliseconds() / 10), 2);
            },
            SSS: function() {
                return leftZeroFill(this.milliseconds(), 3);
            },
            SSSS: function() {
                return leftZeroFill(this.milliseconds(), 3);
            },
            Z: function() {
                var a, b;
                a = -this.zone();
                b = "+";
                if (a < 0) {
                    a = -a;
                    b = "-";
                }
                return b + leftZeroFill(toInt(a / 60), 2) + ":" + leftZeroFill(toInt(a) % 60, 2);
            },
            ZZ: function() {
                var a, b;
                a = -this.zone();
                b = "+";
                if (a < 0) {
                    a = -a;
                    b = "-";
                }
                return b + leftZeroFill(toInt(a / 60), 2) + leftZeroFill(toInt(a) % 60, 2);
            },
            z: function() {
                return this.zoneAbbr();
            },
            zz: function() {
                return this.zoneName();
            },
            X: function() {
                return this.unix();
            },
            Q: function() {
                return this.quarter();
            }
        };
        deprecations = {};
        lists = [ "months", "monthsShort", "weekdays", "weekdaysShort", "weekdaysMin" ];
        while (ordinalizeTokens.length) {
            i = ordinalizeTokens.pop();
            formatTokenFunctions[i + "o"] = ordinalizeToken(formatTokenFunctions[i], i);
        }
        while (paddedTokens.length) {
            i = paddedTokens.pop();
            formatTokenFunctions[i + i] = padToken(formatTokenFunctions[i], 2);
        }
        formatTokenFunctions.DDDD = padToken(formatTokenFunctions.DDD, 3);
        extend(Locale.prototype, {
            set: function(config) {
                var prop;
                prop = null;
                i = null;
                for (i in config) {
                    prop = config[i];
                    if (typeof prop === "function") {
                        this[i] = prop;
                    } else {
                        this["_" + i] = prop;
                    }
                }
            },
            _months: "January_February_March_April_May_June_July_August_September_October_November_December".split("_"),
            months: function(m) {
                return this._months[m.month()];
            },
            _monthsShort: "Jan_Feb_Mar_Apr_May_Jun_Jul_Aug_Sep_Oct_Nov_Dec".split("_"),
            monthsShort: function(m) {
                return this._monthsShort[m.month()];
            },
            monthsParse: function(monthName) {
                var mom, regex;
                i = null;
                mom = null;
                regex = null;
                if (!this._monthsParse) {
                    this._monthsParse = [];
                }
                i = 0;
                while (i < 12) {
                    if (!this._monthsParse[i]) {
                        mom = moment.utc([ 2e3, i ]);
                        regex = "^" + this.months(mom, "") + "|^" + this.monthsShort(mom, "");
                        this._monthsParse[i] = new RegExp(regex.replace(".", ""), "i");
                    }
                    if (this._monthsParse[i].test(monthName)) {
                        return i;
                    }
                    i++;
                }
            },
            _weekdays: "Sunday_Monday_Tuesday_Wednesday_Thursday_Friday_Saturday".split("_"),
            weekdays: function(m) {
                return this._weekdays[m.day()];
            },
            _weekdaysShort: "Sun_Mon_Tue_Wed_Thu_Fri_Sat".split("_"),
            weekdaysShort: function(m) {
                return this._weekdaysShort[m.day()];
            },
            _weekdaysMin: "Su_Mo_Tu_We_Th_Fr_Sa".split("_"),
            weekdaysMin: function(m) {
                return this._weekdaysMin[m.day()];
            },
            weekdaysParse: function(weekdayName) {
                var mom, regex;
                i = null;
                mom = null;
                regex = null;
                if (!this._weekdaysParse) {
                    this._weekdaysParse = [];
                }
                i = 0;
                while (i < 7) {
                    if (!this._weekdaysParse[i]) {
                        mom = moment([ 2e3, 1 ]).day(i);
                        regex = "^" + this.weekdays(mom, "") + "|^" + this.weekdaysShort(mom, "") + "|^" + this.weekdaysMin(mom, "");
                        this._weekdaysParse[i] = new RegExp(regex.replace(".", ""), "i");
                    }
                    if (this._weekdaysParse[i].test(weekdayName)) {
                        return i;
                    }
                    i++;
                }
            },
            _longDateFormat: {
                LT: "h:mm A",
                L: "MM/DD/YYYY",
                LL: "MMMM D, YYYY",
                LLL: "MMMM D, YYYY LT",
                LLLL: "dddd, MMMM D, YYYY LT"
            },
            longDateFormat: function(key) {
                var output;
                output = this._longDateFormat[key];
                if (!output && this._longDateFormat[key.toUpperCase()]) {
                    output = this._longDateFormat[key.toUpperCase()].replace(/MMMM|MM|DD|dddd/g, function(val) {
                        return val.slice(1);
                    });
                    this._longDateFormat[key] = output;
                }
                return output;
            },
            isPM: function(input) {
                return (input + "").toLowerCase().charAt(0) === "p";
            },
            _meridiemParse: /[ap]\.?m?\.?/i,
            meridiem: function(hours, minutes, isLower) {
                if (hours > 11) {
                    if (isLower) {
                        return "pm";
                    } else {
                        return "PM";
                    }
                } else {
                    if (isLower) {
                        return "am";
                    } else {
                        return "AM";
                    }
                }
            },
            _calendar: {
                sameDay: "[Today at] LT",
                nextDay: "[Tomorrow at] LT",
                nextWeek: "dddd [at] LT",
                lastDay: "[Yesterday at] LT",
                lastWeek: "[Last] dddd [at] LT",
                sameElse: "L"
            },
            calendar: function(key, mom) {
                var output;
                output = this._calendar[key];
                if (typeof output === "function") {
                    return output.apply(mom);
                } else {
                    return output;
                }
            },
            _relativeTime: {
                future: "in %s",
                past: "%s ago",
                s: "a few seconds",
                m: "a minute",
                mm: "%d minutes",
                h: "an hour",
                hh: "%d hours",
                d: "a day",
                dd: "%d days",
                M: "a month",
                MM: "%d months",
                y: "a year",
                yy: "%d years"
            },
            relativeTime: function(number, withoutSuffix, string, isFuture) {
                var output;
                output = this._relativeTime[string];
                if (typeof output === "function") {
                    return output(number, withoutSuffix, string, isFuture);
                } else {
                    return output.replace(/%d/i, number);
                }
            },
            pastFuture: function(diff, output) {
                var format;
                format = this._relativeTime[diff > 0 ? "future" : "past"];
                if (typeof format === "function") {
                    return format(output);
                } else {
                    return format.replace(/%s/i, output);
                }
            },
            ordinal: function(number) {
                return this._ordinal.replace("%d", number);
            },
            _ordinal: "%d",
            preparse: function(string) {
                return string;
            },
            postformat: function(string) {
                return string;
            },
            week: function(mom) {
                return weekOfYear(mom, this._week.dow, this._week.doy).week;
            },
            _week: {
                dow: 0,
                doy: 6
            },
            _invalidDate: "Invalid date",
            invalidDate: function() {
                return this._invalidDate;
            }
        });
        moment = function(input, format, locale, strict) {
            var c;
            c = null;
            if (typeof locale === "boolean") {
                strict = locale;
                locale = undefined;
            }
            c = {};
            c._isAMomentObject = true;
            c._i = input;
            c._f = format;
            c._l = locale;
            c._strict = strict;
            c._isUTC = false;
            c._pf = defaultParsingFlags();
            return makeMoment(c);
        };
        moment.suppressDeprecationWarnings = false;
        moment.createFromInputFallback = deprecate("moment construction falls back to js Date. This is " + "discouraged and will be removed in upcoming major " + "release. Please refer to " + "https://github.com/moment/moment/issues/1407 for more info.", function(config) {
            config._d = new Date(config._i);
        });
        moment.min = function() {
            var args;
            args = [].slice.call(arguments, 0);
            return pickBy("isBefore", args);
        };
        moment.max = function() {
            var args;
            args = [].slice.call(arguments, 0);
            return pickBy("isAfter", args);
        };
        moment.utc = function(input, format, locale, strict) {
            var c;
            c = null;
            if (typeof locale === "boolean") {
                strict = locale;
                locale = undefined;
            }
            c = {};
            c._isAMomentObject = true;
            c._useUTC = true;
            c._isUTC = true;
            c._l = locale;
            c._i = input;
            c._f = format;
            c._strict = strict;
            c._pf = defaultParsingFlags();
            return makeMoment(c).utc();
        };
        moment.unix = function(input) {
            return moment(input * 1e3);
        };
        moment.duration = function(input, key) {
            var diffRes, duration, match, parseIso, ret, sign;
            duration = input;
            match = null;
            sign = null;
            ret = null;
            parseIso = null;
            diffRes = null;
            if (moment.isDuration(input)) {
                duration = {
                    ms: input._milliseconds,
                    d: input._days,
                    M: input._months
                };
            } else {
                if (typeof input === "number") {
                    duration = {};
                    if (key) {
                        duration[key] = input;
                    } else {
                        duration.milliseconds = input;
                    }
                } else {
                    if (!!(match = aspNetTimeSpanJsonRegex.exec(input))) {
                        sign = match[1] === "-" ? -1 : 1;
                        duration = {
                            y: 0,
                            d: toInt(match[DATE]) * sign,
                            h: toInt(match[HOUR]) * sign,
                            m: toInt(match[MINUTE]) * sign,
                            s: toInt(match[SECOND]) * sign,
                            ms: toInt(match[MILLISECOND]) * sign
                        };
                    } else {
                        if (!!(match = isoDurationRegex.exec(input))) {
                            sign = match[1] === "-" ? -1 : 1;
                            parseIso = function(inp) {
                                var res;
                                res = inp && parseFloat(inp.replace(",", "."));
                                return (isNaN(res) ? 0 : res) * sign;
                            };
                            duration = {
                                y: parseIso(match[2]),
                                M: parseIso(match[3]),
                                d: parseIso(match[4]),
                                h: parseIso(match[5]),
                                m: parseIso(match[6]),
                                s: parseIso(match[7]),
                                w: parseIso(match[8])
                            };
                        } else {
                            if (typeof duration === "object" && ("from" in duration || "to" in duration)) {
                                diffRes = momentsDifference(moment(duration.from), moment(duration.to));
                                duration = {};
                                duration.ms = diffRes.milliseconds;
                                duration.M = diffRes.months;
                            }
                        }
                    }
                }
            }
            ret = new Duration(duration);
            if (moment.isDuration(input) && hasOwnProp(input, "_locale")) {
                ret._locale = input._locale;
            }
            return ret;
        };
        moment.version = VERSION;
        moment.defaultFormat = isoFormat;
        moment.ISO_8601 = function() {};
        moment.momentProperties = momentProperties;
        moment.updateOffset = function() {};
        moment.relativeTimeThreshold = function(threshold, limit) {
            if (relativeTimeThresholds[threshold] === undefined) {
                return false;
            }
            if (limit === undefined) {
                return relativeTimeThresholds[threshold];
            }
            relativeTimeThresholds[threshold] = limit;
            return true;
        };
        moment.lang = deprecate("moment.lang is deprecated. Use moment.locale instead.", function(key, value) {
            return moment.locale(key, value);
        });
        moment.locale = function(key, values) {
            var data;
            data = null;
            if (key) {
                if (typeof values !== "undefined") {
                    data = moment.defineLocale(key, values);
                } else {
                    data = moment.localeData(key);
                }
                if (data) {
                    moment.duration._locale = moment._locale = data;
                }
            }
            return moment._locale._abbr;
        };
        moment.defineLocale = function(name, values) {
            if (values !== null) {
                values.abbr = name;
                if (!locales[name]) {
                    locales[name] = new Locale();
                }
                locales[name].set(values);
                moment.locale(name);
                return locales[name];
            } else {
                delete locales[name];
                return null;
            }
        };
        moment.langData = deprecate("moment.langData is deprecated. Use moment.localeData instead.", function(key) {
            return moment.localeData(key);
        });
        moment.localeData = function(key) {
            var locale;
            locale = null;
            if (key && key._locale && key._locale._abbr) {
                key = key._locale._abbr;
            }
            if (!key) {
                return moment._locale;
            }
            if (!isArray(key)) {
                locale = loadLocale(key);
                if (locale) {
                    return locale;
                }
                key = [ key ];
            }
            return chooseLocale(key);
        };
        moment.isMoment = function(obj) {
            return obj instanceof Moment || obj != null && hasOwnProp(obj, "_isAMomentObject");
        };
        moment.isDuration = function(obj) {
            return obj instanceof Duration;
        };
        i = lists.length - 1;
        while (i >= 0) {
            makeList(lists[i]);
            --i;
        }
        moment.normalizeUnits = function(units) {
            return normalizeUnits(units);
        };
        moment.invalid = function(flags) {
            var m;
            m = moment.utc(NaN);
            if (flags != null) {
                extend(m._pf, flags);
            } else {
                m._pf.userInvalidated = true;
            }
            return m;
        };
        moment.parseZone = function() {
            return moment.apply(null, arguments).parseZone();
        };
        moment.parseTwoDigitYear = function(input) {
            return toInt(input) + (toInt(input) > 68 ? 1900 : 2e3);
        };
        extend(moment.fn = Moment.prototype, {
            clone: function() {
                return moment(this);
            },
            valueOf: function() {
                return +this._d + (this._offset || 0) * 6e4;
            },
            unix: function() {
                return Math.floor(+this / 1e3);
            },
            toString: function() {
                return this.clone().locale("en").format("ddd MMM DD YYYY HH:mm:ss [GMT]ZZ");
            },
            toDate: function() {
                if (this._offset) {
                    return new Date(+this);
                } else {
                    return this._d;
                }
            },
            toISOString: function() {
                var m;
                m = moment(this).utc();
                if (0 < m.year() && m.year() <= 9999) {
                    return formatMoment(m, "YYYY-MM-DD[T]HH:mm:ss.SSS[Z]");
                } else {
                    return formatMoment(m, "YYYYYY-MM-DD[T]HH:mm:ss.SSS[Z]");
                }
            },
            toArray: function() {
                var m;
                m = this;
                return [ m.year(), m.month(), m.date(), m.hours(), m.minutes(), m.seconds(), m.milliseconds() ];
            },
            isValid: function() {
                return isValid(this);
            },
            isDSTShifted: function() {
                if (this._a) {
                    return this.isValid() && compareArrays(this._a, (this._isUTC ? moment.utc(this._a) : moment(this._a)).toArray()) > 0;
                }
                return false;
            },
            parsingFlags: function() {
                return extend({}, this._pf);
            },
            invalidAt: function() {
                return this._pf.overflow;
            },
            utc: function(keepLocalTime) {
                return this.zone(0, keepLocalTime);
            },
            local: function(keepLocalTime) {
                if (this._isUTC) {
                    this.zone(0, keepLocalTime);
                    this._isUTC = false;
                    if (keepLocalTime) {
                        this.add(this._dateTzOffset(), "m");
                    }
                }
                return this;
            },
            format: function(inputString) {
                var output;
                output = formatMoment(this, inputString || moment.defaultFormat);
                return this.localeData().postformat(output);
            },
            add: createAdder(1, "add"),
            subtract: createAdder(-1, "subtract"),
            diff: function(input, units, asFloat) {
                var daysAdjust, diff, output, that, zoneDiff;
                that = makeAs(input, this);
                zoneDiff = (this.zone() - that.zone()) * 6e4;
                diff = null;
                output = null;
                daysAdjust = null;
                units = normalizeUnits(units);
                if (units === "year" || units === "month") {
                    diff = (this.daysInMonth() + that.daysInMonth()) * 432e5;
                    output = (this.year() - that.year()) * 12 + (this.month() - that.month());
                    daysAdjust = this - moment(this).startOf("month") - (that - moment(that).startOf("month"));
                    daysAdjust -= (this.zone() - moment(this).startOf("month").zone() - (that.zone() - moment(that).startOf("month").zone())) * 6e4;
                    output += daysAdjust / diff;
                    if (units === "year") {
                        output = output / 12;
                    }
                } else {
                    diff = this - that;
                    output = units === "second" ? diff / 1e3 : units === "minute" ? diff / 6e4 : units === "hour" ? diff / 36e5 : units === "day" ? (diff - zoneDiff) / 864e5 : units === "week" ? (diff - zoneDiff) / 6048e5 : diff;
                }
                if (asFloat) {
                    return output;
                } else {
                    return absRound(output);
                }
            },
            from: function(time, withoutSuffix) {
                return moment.duration({
                    to: this,
                    from: time
                }).locale(this.locale()).humanize(!withoutSuffix);
            },
            fromNow: function(withoutSuffix) {
                return this.from(moment(), withoutSuffix);
            },
            calendar: function(time) {
                var diff, format, now, sod;
                now = time || moment();
                sod = makeAs(now, this).startOf("day");
                diff = this.diff(sod, "days", true);
                format = diff < -6 ? "sameElse" : diff < -1 ? "lastWeek" : diff < 0 ? "lastDay" : diff < 1 ? "sameDay" : diff < 2 ? "nextDay" : diff < 7 ? "nextWeek" : "sameElse";
                return this.format(this.localeData().calendar(format, this));
            },
            isLeapYear: function() {
                return isLeapYear(this.year());
            },
            isDST: function() {
                return this.zone() < this.clone().month(0).zone() || this.zone() < this.clone().month(5).zone();
            },
            day: function(input) {
                var day;
                day = this._isUTC ? this._d.getUTCDay() : this._d.getDay();
                if (input != null) {
                    input = parseWeekday(input, this.localeData());
                    return this.add(input - day, "d");
                } else {
                    return day;
                }
            },
            month: makeAccessor("Month", true),
            startOf: function(units) {
                units = normalizeUnits(units);
                switch (units) {
                  case "year":
                    this.month(0);
                    break;

                  case "quarter":
                  case "month":
                    this.date(1);
                    break;

                  case "week":
                  case "isoWeek":
                  case "day":
                    this.hours(0);
                    break;

                  case "hour":
                    this.minutes(0);
                    break;

                  case "minute":
                    this.seconds(0);
                    break;

                  case "second":
                    this.milliseconds(0);
                    break;
                }
                if (units === "week") {
                    this.weekday(0);
                } else {
                    if (units === "isoWeek") {
                        this.isoWeekday(1);
                    }
                }
                if (units === "quarter") {
                    this.month(Math.floor(this.month() / 3) * 3);
                }
                return this;
            },
            endOf: function(units) {
                units = normalizeUnits(units);
                return this.startOf(units).add(1, units === "isoWeek" ? "week" : units).subtract(1, "ms");
            },
            isAfter: function(input, units) {
                units = normalizeUnits(typeof units !== "undefined" ? units : "millisecond");
                if (units === "millisecond") {
                    input = moment.isMoment(input) ? input : moment(input);
                    return +this > +input;
                } else {
                    return +this.clone().startOf(units) > +moment(input).startOf(units);
                }
            },
            isBefore: function(input, units) {
                units = normalizeUnits(typeof units !== "undefined" ? units : "millisecond");
                if (units === "millisecond") {
                    input = moment.isMoment(input) ? input : moment(input);
                    return +this < +input;
                } else {
                    return +this.clone().startOf(units) < +moment(input).startOf(units);
                }
            },
            isSame: function(input, units) {
                units = normalizeUnits(units || "millisecond");
                if (units === "millisecond") {
                    input = moment.isMoment(input) ? input : moment(input);
                    return +this === +input;
                } else {
                    return +this.clone().startOf(units) === +makeAs(input, this).startOf(units);
                }
            },
            min: deprecate("moment().min is deprecated, use moment.min instead. https://github.com/moment/moment/issues/1548", function(other) {
                other = moment.apply(null, arguments);
                if (other < this) {
                    return this;
                } else {
                    return other;
                }
            }),
            max: deprecate("moment().max is deprecated, use moment.max instead. https://github.com/moment/moment/issues/1548", function(other) {
                other = moment.apply(null, arguments);
                if (other > this) {
                    return this;
                } else {
                    return other;
                }
            }),
            zone: function(input, keepLocalTime) {
                var localAdjust, offset;
                offset = this._offset || 0;
                localAdjust = null;
                if (input != null) {
                    if (typeof input === "string") {
                        input = timezoneMinutesFromString(input);
                    }
                    if (Math.abs(input) < 16) {
                        input = input * 60;
                    }
                    if (!this._isUTC && keepLocalTime) {
                        localAdjust = this._dateTzOffset();
                    }
                    this._offset = input;
                    this._isUTC = true;
                    if (localAdjust != null) {
                        this.subtract(localAdjust, "m");
                    }
                    if (offset !== input) {
                        if (!keepLocalTime || this._changeInProgress) {
                            addOrSubtractDurationFromMoment(this, moment.duration(offset - input, "m"), 1, false);
                        } else {
                            if (!this._changeInProgress) {
                                this._changeInProgress = true;
                                moment.updateOffset(this, true);
                                this._changeInProgress = null;
                            }
                        }
                    }
                } else {
                    return this._isUTC ? offset : this._dateTzOffset();
                }
                return this;
            },
            zoneAbbr: function() {
                if (this._isUTC) {
                    return "UTC";
                } else {
                    return "";
                }
            },
            zoneName: function() {
                if (this._isUTC) {
                    return "Coordinated Universal Time";
                } else {
                    return "";
                }
            },
            parseZone: function() {
                if (this._tzm) {
                    this.zone(this._tzm);
                } else {
                    if (typeof this._i === "string") {
                        this.zone(this._i);
                    }
                }
                return this;
            },
            hasAlignedHourOffset: function(input) {
                if (!input) {
                    input = 0;
                } else {
                    input = moment(input).zone();
                }
                return (this.zone() - input) % 60 === 0;
            },
            daysInMonth: function() {
                return daysInMonth(this.year(), this.month());
            },
            dayOfYear: function(input) {
                var dayOfYear;
                dayOfYear = round((moment(this).startOf("day") - moment(this).startOf("year")) / 864e5) + 1;
                if (input == null) {
                    return dayOfYear;
                } else {
                    return this.add(input - dayOfYear, "d");
                }
            },
            quarter: function(input) {
                if (input == null) {
                    return Math.ceil((this.month() + 1) / 3);
                } else {
                    return this.month((input - 1) * 3 + this.month() % 3);
                }
            },
            weekYear: function(input) {
                var year;
                year = weekOfYear(this, this.localeData()._week.dow, this.localeData()._week.doy).year;
                if (input == null) {
                    return year;
                } else {
                    return this.add(input - year, "y");
                }
            },
            isoWeekYear: function(input) {
                var year;
                year = weekOfYear(this, 1, 4).year;
                if (input == null) {
                    return year;
                } else {
                    return this.add(input - year, "y");
                }
            },
            week: function(input) {
                var week;
                week = this.localeData().week(this);
                if (input == null) {
                    return week;
                } else {
                    return this.add((input - week) * 7, "d");
                }
            },
            isoWeek: function(input) {
                var week;
                week = weekOfYear(this, 1, 4).week;
                if (input == null) {
                    return week;
                } else {
                    return this.add((input - week) * 7, "d");
                }
            },
            weekday: function(input) {
                var weekday;
                weekday = (this.day() + 7 - this.localeData()._week.dow) % 7;
                if (input == null) {
                    return weekday;
                } else {
                    return this.add(input - weekday, "d");
                }
            },
            isoWeekday: function(input) {
                if (input == null) {
                    return this.day() || 7;
                } else {
                    return this.day(this.day() % 7 ? input : input - 7);
                }
            },
            isoWeeksInYear: function() {
                return weeksInYear(this.year(), 1, 4);
            },
            weeksInYear: function() {
                var weekInfo;
                weekInfo = this.localeData()._week;
                return weeksInYear(this.year(), weekInfo.dow, weekInfo.doy);
            },
            get: function(units) {
                units = normalizeUnits(units);
                return this[units]();
            },
            set: function(units, value) {
                units = normalizeUnits(units);
                if (typeof this[units] === "function") {
                    this[units](value);
                }
                return this;
            },
            locale: function(key) {
                var newLocaleData;
                newLocaleData = null;
                if (key === undefined) {
                    return this._locale._abbr;
                } else {
                    newLocaleData = moment.localeData(key);
                    if (newLocaleData != null) {
                        this._locale = newLocaleData;
                    }
                    return this;
                }
            },
            lang: deprecate("moment().lang() is deprecated. Use moment().localeData() instead.", function(key) {
                if (key === undefined) {
                    return this.localeData();
                } else {
                    return this.locale(key);
                }
            }),
            localeData: function() {
                return this._locale;
            },
            _dateTzOffset: function() {
                return Math.round(this._d.getTimezoneOffset() / 15) * 15;
            }
        });
        moment.fn.millisecond = moment.fn.milliseconds = makeAccessor("Milliseconds", false);
        moment.fn.second = moment.fn.seconds = makeAccessor("Seconds", false);
        moment.fn.minute = moment.fn.minutes = makeAccessor("Minutes", false);
        moment.fn.hour = moment.fn.hours = makeAccessor("Hours", true);
        moment.fn.date = makeAccessor("Date", true);
        moment.fn.dates = deprecate("dates accessor is deprecated. Use date instead.", makeAccessor("Date", true));
        moment.fn.year = makeAccessor("FullYear", true);
        moment.fn.years = deprecate("years accessor is deprecated. Use year instead.", makeAccessor("FullYear", true));
        moment.fn.days = moment.fn.day;
        moment.fn.months = moment.fn.month;
        moment.fn.weeks = moment.fn.week;
        moment.fn.isoWeeks = moment.fn.isoWeek;
        moment.fn.quarters = moment.fn.quarter;
        moment.fn.toJSON = moment.fn.toISOString;
        extend(moment.duration.fn = Duration.prototype, {
            _bubble: function() {
                var data, days, hours, milliseconds, minutes, months, seconds, years;
                milliseconds = this._milliseconds;
                days = this._days;
                months = this._months;
                data = this._data;
                seconds = null;
                minutes = null;
                hours = null;
                years = 0;
                data.milliseconds = milliseconds % 1e3;
                seconds = absRound(milliseconds / 1e3);
                data.seconds = seconds % 60;
                minutes = absRound(seconds / 60);
                data.minutes = minutes % 60;
                hours = absRound(minutes / 60);
                data.hours = hours % 24;
                days += absRound(hours / 24);
                years = absRound(daysToYears(days));
                days -= absRound(yearsToDays(years));
                months += absRound(days / 30);
                days %= 30;
                years += absRound(months / 12);
                months %= 12;
                data.days = days;
                data.months = months;
                data.years = years;
            },
            abs: function() {
                this._milliseconds = Math.abs(this._milliseconds);
                this._days = Math.abs(this._days);
                this._months = Math.abs(this._months);
                this._data.milliseconds = Math.abs(this._data.milliseconds);
                this._data.seconds = Math.abs(this._data.seconds);
                this._data.minutes = Math.abs(this._data.minutes);
                this._data.hours = Math.abs(this._data.hours);
                this._data.months = Math.abs(this._data.months);
                this._data.years = Math.abs(this._data.years);
                return this;
            },
            weeks: function() {
                return absRound(this.days() / 7);
            },
            valueOf: function() {
                return this._milliseconds + this._days * 864e5 + this._months % 12 * 2592e6 + toInt(this._months / 12) * 31536e6;
            },
            humanize: function(withSuffix) {
                var output;
                output = relativeTime(this, !withSuffix, this.localeData());
                if (withSuffix) {
                    output = this.localeData().pastFuture(+this, output);
                }
                return this.localeData().postformat(output);
            },
            add: function(input, val) {
                var dur;
                dur = moment.duration(input, val);
                this._milliseconds += dur._milliseconds;
                this._days += dur._days;
                this._months += dur._months;
                this._bubble();
                return this;
            },
            subtract: function(input, val) {
                var dur;
                dur = moment.duration(input, val);
                this._milliseconds -= dur._milliseconds;
                this._days -= dur._days;
                this._months -= dur._months;
                this._bubble();
                return this;
            },
            get: function(units) {
                units = normalizeUnits(units);
                return this[units.toLowerCase() + "s"]();
            },
            as: function(units) {
                var days, months;
                days = null;
                months = null;
                units = normalizeUnits(units);
                if (units === "month" || units === "year") {
                    days = this._days + this._milliseconds / 864e5;
                    months = this._months + daysToYears(days) * 12;
                    if (units === "month") {
                        return months;
                    } else {
                        return months / 12;
                    }
                } else {
                    days = this._days + yearsToDays(this._months / 12);
                    switch (units) {
                      case "week":
                        return days / 7 + this._milliseconds / 6048e5;

                      case "day":
                        return days + this._milliseconds / 864e5;

                      case "hour":
                        return days * 24 + this._milliseconds / 36e5;

                      case "minute":
                        return days * 24 * 60 + this._milliseconds / 6e4;

                      case "second":
                        return days * 24 * 60 * 60 + this._milliseconds / 1e3;

                      case "millisecond":
                        return Math.floor(days * 24 * 60 * 60 * 1e3) + this._milliseconds;

                      default:
                        throw new Error("Unknown unit " + units);
                    }
                }
            },
            lang: moment.fn.lang,
            locale: moment.fn.locale,
            toIsoString: deprecate("toIsoString() is deprecated. Please use toISOString() instead " + "(notice the capitals)", function() {
                return this.toISOString();
            }),
            toISOString: function() {
                var days, hours, minutes, months, seconds, years;
                years = Math.abs(this.years());
                months = Math.abs(this.months());
                days = Math.abs(this.days());
                hours = Math.abs(this.hours());
                minutes = Math.abs(this.minutes());
                seconds = Math.abs(this.seconds() + this.milliseconds() / 1e3);
                if (!this.asSeconds()) {
                    return "P0D";
                }
                return (this.asSeconds() < 0 ? "-" : "") + "P" + (years ? years + "Y" : "") + (months ? months + "M" : "") + (days ? days + "D" : "") + (hours || minutes || seconds ? "T" : "") + (hours ? hours + "H" : "") + (minutes ? minutes + "M" : "") + (seconds ? seconds + "S" : "");
            },
            localeData: function() {
                return this._locale;
            }
        });
        moment.duration.fn.toString = moment.duration.fn.toISOString;
        for (i in unitMillisecondFactors) {
            if (hasOwnProp(unitMillisecondFactors, i)) {
                makeDurationGetter(i.toLowerCase());
            }
        }
        moment.duration.fn.asMilliseconds = function() {
            return this.as("ms");
        };
        moment.duration.fn.asSeconds = function() {
            return this.as("s");
        };
        moment.duration.fn.asMinutes = function() {
            return this.as("m");
        };
        moment.duration.fn.asHours = function() {
            return this.as("h");
        };
        moment.duration.fn.asDays = function() {
            return this.as("d");
        };
        moment.duration.fn.asWeeks = function() {
            return this.as("weeks");
        };
        moment.duration.fn.asMonths = function() {
            return this.as("M");
        };
        moment.duration.fn.asYears = function() {
            return this.as("y");
        };
        moment.locale("en", {
            ordinal: function(number) {
                var b, output;
                b = number % 10;
                output = toInt(number % 100 / 10) === 1 ? "th" : b === 1 ? "st" : b === 2 ? "nd" : b === 3 ? "rd" : "th";
                return number + output;
            }
        });
        return moment;
    }.call(this);
    _c.utils.moment = moment;
    return _c.datepicker;
});
(function(addon) {
    if (typeof define === "function" && define.amd) {
        define("clique-form.select", [ "clique" ], function() {
            return addon(Clique);
        });
    }
    if (!window.Clique) {
        throw new Error("Clique.form.select requires Clique.core");
    }
    if (window.Clique) {
        addon(Clique);
    }
})(function(_c) {
    var $;
    $ = _c.$;
    _c.component("formSelect", {
        defaults: {
            target: ">span:first"
        },
        boot: function() {
            return _c.ready(function(context) {
                return _c.$("[data-form-select]", context).each(function() {
                    var ele, obj;
                    ele = _c.$(this);
                    if (!ele.data("clique.data.formSelect")) {
                        obj = _c.formSelect(ele, _c.utils.options(ele.attr("data-form-select")));
                    }
                });
            });
        },
        init: function() {
            var $this;
            $this = this;
            this.target = this.find(this.options.target);
            this.select = this.find("select");
            this.select.on("change", function(_this) {
                return function() {
                    var fn, select;
                    select = _this.select[0];
                    fn = function() {
                        try {
                            this.target.text(select.options[select.selectedIndex].text);
                        } catch (_error) {}
                        return fn;
                    };
                    return fn();
                };
            }(this)());
            return this.element.data("formSelect", this);
        }
    });
    return _c.formSelect;
});
(function(addon) {
    if (typeof define === "function" && define.amd) {
        define("clique-grid", [ "clique" ], function() {
            return addon(Clique);
        });
    }
    if (!window.Clique) {
        throw new Error("Clique.grid requires Clique.core");
    }
    if (window.Clique) {
        addon(Clique);
    }
})(function(_c) {
    _c.component("grid", {
        defaults: {
            colwidth: "auto",
            animation: true,
            duration: 300,
            gutter: 0,
            controls: false,
            filter: false
        },
        boot: function() {
            _c.ready(function(context) {
                _c.$("[data-grid]", context).each(function() {
                    var ele = _c.$(this);
                    if (!ele.data("clique.data.grid")) {
                        var plugin = _c.grid(ele, _c.utils.options(ele.attr("data-grid")));
                    }
                });
            });
        },
        init: function() {
            var $this = this, gutter = String(this.options.gutter).trim().split(" ");
            this.gutterv = parseInt(gutter[0], 10);
            this.gutterh = parseInt(gutter[1] || gutter[0], 10);
            this.element.css({
                position: "relative"
            });
            this.controls = null;
            if (this.options.controls) {
                this.controls = _c.$(this.options.controls);
                this.controls.on("click", "[data-filter]", function(e) {
                    e.preventDefault();
                    $this.filter(_c.$(this).data("filter"));
                });
                this.controls.on("click", "[data-sort]", function(e) {
                    e.preventDefault();
                    var cmd = _c.$(this).attr("data-sort").split(":");
                    $this.sort(cmd[0], cmd[1]);
                });
            }
            _c.$win.on("load resize orientationchange", _c.utils.debounce(function() {
                if ($this.currentfilter) {
                    $this.filter($this.currentfilter);
                } else {
                    this.updateLayout();
                }
            }.bind(this), 100));
            this.on("display.clique.check", function() {
                if ($this.element.is(":visible")) {
                    $this.updateLayout();
                }
            });
            _c.$html.on("changed.clique.dom", function(e) {
                $this.updateLayout();
            });
            if (this.options.filter !== false) {
                this.filter(this.options.filter);
            } else {
                this.updateLayout();
            }
        },
        _prepareElements: function() {
            var children = this.element.children(":not([data-grid-prepared])"), css;
            if (!children.length) {
                return;
            }
            css = {
                position: "absolute",
                "box-sizing": "border-box",
                width: this.options.colwidth === "auto" ? "" : this.options.colwidth
            };
            if (this.options.gutter) {
                css["padding-left"] = this.gutterh;
                css["padding-bottom"] = this.gutterv;
                this.element.css("margin-left", this.gutterh * -1);
            }
            children.attr("data-grid-prepared", "true").css(css);
        },
        updateLayout: function(elements) {
            this._prepareElements();
            elements = elements || this.element.children(":visible");
            var $this = this, children = elements, maxwidth = this.element.width() + 2 * this.gutterh + 2, left = 0, top = 0, positions = [], item, width, height, pos, aX, aY, i, z, max, size;
            this.trigger("beforeupdate.clique.grid", [ children ]);
            children.each(function(index) {
                size = getElementSize(this);
                item = _c.$(this);
                width = size.outerWidth;
                height = size.outerHeight;
                left = 0;
                top = 0;
                for (i = 0, max = positions.length; i < max; i++) {
                    pos = positions[i];
                    if (left <= pos.aX) {
                        left = pos.aX;
                    }
                    if (maxwidth < left + width) {
                        left = 0;
                    }
                    if (top <= pos.aY) {
                        top = pos.aY;
                    }
                }
                positions.push({
                    ele: item,
                    top: top,
                    left: left,
                    width: width,
                    height: height,
                    aY: top + height,
                    aX: left + width
                });
            });
            var posPrev, maxHeight = 0;
            for (i = 0, max = positions.length; i < max; i++) {
                pos = positions[i];
                top = 0;
                for (z = 0; z < i; z++) {
                    posPrev = positions[z];
                    if (pos.left < posPrev.aX && posPrev.left + 1 < pos.aX) {
                        top = posPrev.aY;
                    }
                }
                pos.top = top;
                pos.aY = top + pos.height;
                maxHeight = Math.max(maxHeight, pos.aY);
            }
            maxHeight = maxHeight - this.gutterv;
            if (this.options.animation) {
                this.element.stop().animate({
                    height: maxHeight
                }, 100);
                positions.forEach(function(pos) {
                    pos.ele.stop().animate({
                        top: pos.top,
                        left: pos.left,
                        opacity: 1
                    }, this.options.duration);
                }.bind(this));
            } else {
                this.element.css("height", maxHeight);
                positions.forEach(function(pos) {
                    pos.ele.css({
                        top: pos.top,
                        left: pos.left,
                        opacity: 1
                    });
                }.bind(this));
            }
            setTimeout(function() {
                _c.$doc.trigger("scrolling.clique.document");
            }, 2 * this.options.duration * (this.options.animation ? 1 : 0));
            this.trigger("afterupdate.clique.grid", [ children ]);
        },
        filter: function(filter) {
            this.currentfilter = filter;
            filter = filter || [];
            if (typeof filter === "string") {
                filter = filter.split(/,/).map(function(item) {
                    return item.trim();
                });
            }
            var $this = this, children = this.element.children(), elements = {
                visible: [],
                hidden: []
            }, visible, hidden;
            children.each(function(index) {
                var ele = _c.$(this), f = ele.attr("data-filter"), infilter = filter.length ? false : true;
                if (f) {
                    f = f.split(/,/).map(function(item) {
                        return item.trim();
                    });
                    filter.forEach(function(item) {
                        if (f.indexOf(item) > -1) {
                            infilter = true;
                        }
                    });
                }
                elements[infilter ? "visible" : "hidden"].push(ele);
            });
            elements.hidden = _c.$(elements.hidden).map(function() {
                return this[0];
            });
            elements.visible = _c.$(elements.visible).map(function() {
                return this[0];
            });
            elements.hidden.attr("aria-hidden", "true").filter(":visible").fadeOut(this.options.duration);
            elements.visible.attr("aria-hidden", "false").filter(":hidden").css("opacity", 0).show();
            $this.updateLayout(elements.visible);
            if (this.controls && this.controls.length) {
                this.controls.find("[data-filter]").removeClass("active").filter('[data-filter="' + filter + '"]').addClass("active");
            }
        },
        sort: function(by, order) {
            order = order || 1;
            if (typeof order === "string") {
                order = order.toLowerCase() === "desc" ? -1 : 1;
            }
            var elements = this.element.children();
            elements.sort(function(a, b) {
                a = _c.$(a);
                b = _c.$(b);
                return (b.data(by) || "") < (a.data(by) || "") ? order : order * -1;
            }).appendTo(this.element);
            this.updateLayout(elements.filter(":visible"));
            if (this.controls && this.controls.length) {
                this.controls.find("[data-sort]").removeClass("active").filter('[data-sort="' + by + ":" + (order === -1 ? "desc" : "asc") + '"]').addClass("active");
            }
        }
    });
    var _getSize = function() {
        var prefixes = "Webkit Moz ms Ms O".split(" ");
        var docElemStyle = document.documentElement.style;
        function getStyleProperty(propName) {
            if (!propName) {
                return;
            }
            if (typeof docElemStyle[propName] === "string") {
                return propName;
            }
            propName = propName.charAt(0).toUpperCase() + propName.slice(1);
            var prefixed;
            for (var i = 0, len = prefixes.length; i < len; i++) {
                prefixed = prefixes[i] + propName;
                if (typeof docElemStyle[prefixed] === "string") {
                    return prefixed;
                }
            }
        }
        function getStyleSize(value) {
            var num = parseFloat(value);
            var isValid = value.indexOf("%") === -1 && !isNaN(num);
            return isValid && num;
        }
        function noop() {}
        var logError = typeof console === "undefined" ? noop : function(message) {
            console.error(message);
        };
        var measurements = [ "paddingLeft", "paddingRight", "paddingTop", "paddingBottom", "marginLeft", "marginRight", "marginTop", "marginBottom", "borderLeftWidth", "borderRightWidth", "borderTopWidth", "borderBottomWidth" ];
        function getZeroSize() {
            var size = {
                width: 0,
                height: 0,
                innerWidth: 0,
                innerHeight: 0,
                outerWidth: 0,
                outerHeight: 0
            };
            for (var i = 0, len = measurements.length; i < len; i++) {
                var measurement = measurements[i];
                size[measurement] = 0;
            }
            return size;
        }
        var isSetup = false;
        var getStyle, boxSizingProp, isBoxSizeOuter;
        function setup() {
            if (isSetup) {
                return;
            }
            isSetup = true;
            var getComputedStyle = window.getComputedStyle;
            getStyle = function() {
                var getStyleFn = getComputedStyle ? function(elem) {
                    return getComputedStyle(elem, null);
                } : function(elem) {
                    return elem.currentStyle;
                };
                return function getStyle(elem) {
                    var style = getStyleFn(elem);
                    if (!style) {
                        logError("Style returned " + style + ". Are you running this code in a hidden iframe on Firefox? " + "See http://bit.ly/getsizebug1");
                    }
                    return style;
                };
            }();
            boxSizingProp = getStyleProperty("boxSizing");
            if (boxSizingProp) {
                var div = document.createElement("div");
                div.style.width = "200px";
                div.style.padding = "1px 2px 3px 4px";
                div.style.borderStyle = "solid";
                div.style.borderWidth = "1px 2px 3px 4px";
                div.style[boxSizingProp] = "border-box";
                var body = document.body || document.documentElement;
                body.appendChild(div);
                var style = getStyle(div);
                isBoxSizeOuter = getStyleSize(style.width) === 200;
                body.removeChild(div);
            }
        }
        function getSize(elem) {
            setup();
            if (typeof elem === "string") {
                elem = document.querySelector(elem);
            }
            if (!elem || typeof elem !== "object" || !elem.nodeType) {
                return;
            }
            var style = getStyle(elem);
            if (style.display === "none") {
                return getZeroSize();
            }
            var size = {};
            size.width = elem.offsetWidth;
            size.height = elem.offsetHeight;
            var isBorderBox = size.isBorderBox = !!(boxSizingProp && style[boxSizingProp] && style[boxSizingProp] === "border-box");
            for (var i = 0, len = measurements.length; i < len; i++) {
                var measurement = measurements[i];
                var value = style[measurement];
                var num = parseFloat(value);
                size[measurement] = !isNaN(num) ? num : 0;
            }
            var paddingWidth = size.paddingLeft + size.paddingRight;
            var paddingHeight = size.paddingTop + size.paddingBottom;
            var marginWidth = size.marginLeft + size.marginRight;
            var marginHeight = size.marginTop + size.marginBottom;
            var borderWidth = size.borderLeftWidth + size.borderRightWidth;
            var borderHeight = size.borderTopWidth + size.borderBottomWidth;
            var isBorderBoxSizeOuter = isBorderBox && isBoxSizeOuter;
            var styleWidth = getStyleSize(style.width);
            if (styleWidth !== false) {
                size.width = styleWidth + (isBorderBoxSizeOuter ? 0 : paddingWidth + borderWidth);
            }
            var styleHeight = getStyleSize(style.height);
            if (styleHeight !== false) {
                size.height = styleHeight + (isBorderBoxSizeOuter ? 0 : paddingHeight + borderHeight);
            }
            size.innerWidth = size.width - (paddingWidth + borderWidth);
            size.innerHeight = size.height - (paddingHeight + borderHeight);
            size.outerWidth = size.width + marginWidth;
            size.outerHeight = size.height + marginHeight;
            return size;
        }
        return getSize;
    }();
    function getElementSize(ele) {
        return _getSize(ele);
    }
});
(function(addon) {
    if (typeof define === "function" && define.amd) {
        define("clique-lightbox", [ "clique" ], function() {
            return addon(Clique);
        });
    }
    if (!window.Clique) {
        throw new Error("Clique.lightbox requires Clique.core");
    }
    if (window.Clique) {
        addon(Clique);
    }
})(function(_c) {
    var $, cache, getModal, modal;
    $ = _c.$;
    modal = null;
    cache = {};
    _c.component("lightbox", {
        defaults: {
            group: false,
            duration: 400,
            keyboard: true
        },
        index: 0,
        items: false,
        boot: function() {
            _c.$html.on("click", "[data-lightbox]", function(e) {
                var link;
                e.preventDefault();
                link = _c.$(this);
                if (!link.data("clique.data.lightbox")) {
                    _c.lightbox(link, _c.utils.options(link.attr("data-lightbox")));
                }
                return link.data("clique.data.lightbox").show(link);
            });
            return _c.$doc.on("keyup", function(e) {
                if (modal && modal.is(":visible") && modal.lightbox.options.keyboard) {
                    e.preventDefault();
                    switch (e.keyCode) {
                      case 37:
                        return modal.lightbox.previous();

                      case 39:
                        return modal.lightbox.next();
                    }
                }
            });
        },
        init: function() {
            var $this, domSiblings, siblings;
            $this = this;
            siblings = [];
            this.index = 0;
            this.siblings = [];
            if (this.element && this.element.length) {
                domSiblings = this.options.group ? _c.$([ '[data-lightbox*="' + this.options.group + '"]', "[data-lightbox*='" + this.options.group + "']" ].join(",")) : this.element;
                domSiblings.each(function() {
                    var ele;
                    ele = _c.$(this);
                    return siblings.push({
                        source: ele.attr("href"),
                        title: ele.attr("title"),
                        type: ele.attr("data-lightbox-type") || "auto",
                        link: ele
                    });
                });
                this.index = domSiblings.index(this.element);
                this.siblings = siblings;
            } else {
                if (this.options.group && this.options.group.length) {
                    this.siblings = this.options.group;
                }
            }
            return this.trigger("lightbox-init", [ this ]);
        },
        show: function(index) {
            var $this, data, item, promise;
            this.modal = getModal(this);
            this.modal.dialog.stop();
            this.modal.content.stop();
            $this = this;
            promise = _c.$.Deferred();
            data = null;
            item = null;
            index = index || 0;
            if (typeof index === "object") {
                this.siblings.forEach(function(s, idx) {
                    if (index[0] === s.link[0]) {
                        index = idx;
                    }
                });
            }
            if (index < 0) {
                index = this.siblings.length - index;
            } else {
                if (!this.siblings[index]) {
                    index = 0;
                }
            }
            item = this.siblings[index];
            data = {
                lightbox: $this,
                source: item.source,
                type: item.type,
                index: index,
                promise: promise,
                title: item.title,
                item: item,
                meta: {
                    content: "",
                    width: null,
                    height: null
                }
            };
            this.index = index;
            this.modal.content.empty();
            if (!this.modal.is(":visible")) {
                this.modal.content.css({
                    width: "",
                    height: ""
                }).empty();
                this.modal.modal.show();
            }
            this.modal.loader.removeClass("hidden");
            promise.promise().done(function() {
                $this.data = data;
                return $this.fitSize(data);
            }).fail(function() {
                return alert("Loading resource failed!");
            });
            return $this.trigger("showitem.clique.lightbox", [ data ]);
        },
        fitSize: function() {
            var $this, content, data, dh, dpad, dpadBot, dpadTop, duration, h, maxheight, maxwidth, pad, t, tmp, w;
            $this = this;
            data = this.data;
            pad = this.modal.dialog.outerWidth() - this.modal.dialog.width();
            dpadTop = parseInt(this.modal.dialog.css("margin-top"), 10);
            dpadBot = parseInt(this.modal.dialog.css("margin-bottom"), 10);
            dpad = dpadTop + dpadBot;
            content = data.meta.content;
            duration = $this.options.duration;
            if (this.siblings.length > 1) {
                content = [ content, '<a href="#" class="slidenav slidenav-contrast slidenav-previous hidden-touch" data-lightbox-previous></a>', '<a href="#" class="slidenav slidenav-contrast slidenav-next hidden-touch" data-lightbox-next></a>' ].join("");
            }
            tmp = _c.$("<div>&nbsp;</div>").css({
                opacity: 0,
                position: "absolute",
                top: 0,
                left: 0,
                width: "100%",
                "max-width": $this.modal.dialog.css("max-width"),
                padding: $this.modal.dialog.css("padding"),
                margin: $this.modal.dialog.css("margin")
            });
            maxwidth = null;
            maxheight = null;
            w = data.meta.width;
            h = data.meta.height;
            tmp.appendTo("body").width();
            maxwidth = tmp.width();
            maxheight = window.innerHeight - dpad;
            tmp.remove();
            this.modal.dialog.find(".modal-caption").remove();
            if (data.title) {
                this.modal.dialog.append('<div class="modal-caption">' + data.title + "</div>");
                maxheight -= this.modal.dialog.find(".modal-caption").outerHeight();
            }
            if (maxwidth < data.meta.width) {
                h = Math.floor(h * (maxwidth / w));
                w = maxwidth;
            }
            if (maxheight < h) {
                h = Math.floor(maxheight);
                w = Math.ceil(data.meta.width * (maxheight / data.meta.height));
            }
            this.modal.content.css("opacity", 0).width(w).html(content);
            if (data.type === "iframe") {
                this.modal.content.find("iframe:first").height(h);
            }
            dh = h + pad;
            t = Math.floor(window.innerHeight / 2 - dh / 2) - dpad;
            if (t < 0) {
                t = 0;
            }
            this.modal.closer.addClass("hidden");
            if ($this.modal.data("mwidth") === w && $this.modal.data("mheight") === h) {
                duration = 0;
            }
            return this.modal.dialog.animate({
                width: w + pad,
                height: h + pad,
                top: t
            }, duration, "swing", function() {
                $this.modal.loader.addClass("hidden");
                $this.modal.content.css({
                    width: ""
                }).animate({
                    opacity: 1
                }, function() {
                    return $this.modal.closer.removeClass("hidden");
                });
                return $this.modal.data({
                    mwidth: w,
                    mheight: h
                });
            });
        },
        next: function() {
            return this.show(this.siblings[this.index + 1] ? this.index + 1 : 0);
        },
        previous: function() {
            return this.show(this.siblings[this.index - 1] ? this.index - 1 : this.siblings.length - 1);
        }
    });
    _c.plugin("lightbox", "image", {
        init: function(lightbox) {
            return lightbox.on("showitem.clique.lightbox", function(e, data) {
                var img, resolve;
                if (data.type === "image" || data.source && data.source.match(/\.(jpg|jpeg|png|gif|svg)$/)) {
                    resolve = function(source, width, height) {
                        data.meta = {
                            content: '<img class="responsive-width" width="' + width + '" height="' + height + '" src ="' + source + '">',
                            width: width,
                            height: height
                        };
                        data.type = "image";
                        return data.promise.resolve();
                    };
                    if (!cache[data.source]) {
                        img = new Image();
                        img.onerror = function() {
                            return data.promise.reject("Loading image failed");
                        };
                        img.onload = function() {
                            cache[data.source] = {
                                width: img.width,
                                height: img.height
                            };
                            return resolve(data.source, cache[data.source].width, cache[data.source].height);
                        };
                        img.src = data.source;
                    } else {
                        return resolve(data.source, cache[data.source].width, cache[data.source].height);
                    }
                }
            });
        }
    });
    _c.plugin("lightbox", "youtube", {
        init: function(lightbox) {
            var youtubeRegExp, youtubeRegExpShort;
            youtubeRegExp = /(\/\/.*?youtube\.[a-z]+)\/watch\?v=([^&]+)&?(.*)/;
            youtubeRegExpShort = /youtu\.be\/(.*)/;
            return lightbox.on("showitem.clique.lightbox", function(e, data) {
                var id, img, matches, resolve;
                id = null;
                matches = null;
                resolve = function(id, width, height) {
                    data.meta = {
                        content: '<iframe src="//www.youtube.com/embed/' + id + '" width="' + width + '" height="' + height + '" style="max-width:100%;"></iframe>',
                        width: width,
                        height: height
                    };
                    data.type = "iframe";
                    return data.promise.resolve();
                };
                matches = data.source.match(youtubeRegExp);
                if (matches) {
                    id = matches[2];
                }
                if (matches) {
                    id = matches[1];
                }
                if (id) {
                    if (!cache[id]) {
                        img = new Image();
                        img.onerror = function() {
                            cache[id] = {
                                width: 640,
                                height: 320
                            };
                            return resolve(id, cache[id].width, cache[id].height);
                        };
                        img.onload = function() {
                            cache[id] = {
                                width: img.width,
                                height: img.height
                            };
                            return resolve(id, img.width, img.height);
                        };
                        img.src = "//img.youtube.com/vi/" + id + "/0.jpg";
                    } else {
                        resolve(id, cache[id].width, cache[id].height);
                    }
                    return e.stopImmediatePropagation();
                }
            });
        }
    });
    _c.plugin("lightbox", "vimeo", {
        init: function(lightbox) {
            var matches, regex;
            regex = /(\/\/.*?)vimeo\.[a-z]+\/([0-9]+).*?/;
            matches = null;
            return lightbox.on("showitem.clique.lightbox", function(e, data) {
                var id, resolve;
                id = null;
                resolve = function(id, width, height) {
                    data.meta = {
                        content: '<iframe src="//player.vimeo.com/video/' + id + '" width="' + width + '" height="' + height + '" style="width:100%;box-sizing:border-box;"></iframe>',
                        width: width,
                        height: height
                    };
                    data.type = "iframe";
                    return data.promise.resolve();
                };
                matches = data.source.match(regex);
                if (matches) {
                    id = matches[2];
                    if (!cache[id]) {
                        _c.$.ajax({
                            type: "GET",
                            url: "http://vimeo.com/api/oembed.json?url=" + encodeURI(data.source),
                            jsonp: "callback",
                            dataType: "jsonp",
                            success: function(data) {
                                cache[id] = {
                                    width: data.width,
                                    height: data.height
                                };
                                return resolve(id, cache[id].width, cache[id].height);
                            }
                        });
                    } else {
                        resolve(id, cache[id].width, cache[id].height);
                    }
                    return e.stopImmediatePropagation();
                }
            });
        }
    });
    _c.plugin("lightbox", "video", {
        init: function(lightbox) {
            return lightbox.on("showitem.clique.lightbox", function(e, data) {
                var idle, resolve, vid;
                resolve = function(source, width, height) {
                    data.meta = {
                        content: '<video class="responsive-width" src="' + source + '" width="' + width + '" height="' + height + '" controls></video>',
                        width: width,
                        height: height
                    };
                    data.type = "video";
                    return data.promise.resolve();
                };
                if (data.type === "video" || data.source.match(/\.(mp4|webm|ogv)$/)) {
                    if (!cache[data.source]) {
                        vid = _c.$('<video style="position:fixed;visibility:hidden;top:-10000px;"></video>').attr("src", data.source).appendTo("body");
                        idle = setInterval(function() {
                            if (vid[0].videoWidth) {
                                clearInterval(idle);
                                cache[data.source] = {
                                    width: vid[0].videoWidth,
                                    height: vid[0].videoHeight
                                };
                                resolve(data.source, cache[data.source].width, cache[data.source].height);
                                return vid.remove();
                            }
                        }, 20);
                    } else {
                        return resolve(data.source, cache[data.source].width, cache[data.source].height);
                    }
                }
            });
        }
    });
    getModal = function(lightbox) {
        if (modal) {
            modal.lightbox = lightbox;
            return modal;
        }
        modal = _c.$([ '<div class="modal">', '<div class="modal-dialog modal-dialog-lightbox slidenav-position" style="margin-left:auto;margin-right:auto;width:200px;height:200px;top:' + Math.abs(window.innerHeight / 2 - 200) + 'px;">', '<a href="#" class="modal-close close close-alt"></a>', '<div class="lightbox-content"></div>', '<div class="modal-spinner hidden"></div>', "</div>", "</div>" ].join("")).appendTo("body");
        modal.dialog = modal.find(".modal-dialog:first");
        modal.content = modal.find(".lightbox-content:first");
        modal.loader = modal.find(".modal-spinner:first");
        modal.closer = modal.find(".close.close-alt");
        modal.modal = _c.modal(modal);
        modal.on("swipeRight swipeLeft", function(e) {
            return modal.lightbox[e.type === "swipeLeft" ? "next" : "previous"]();
        }).on("click", "[data-lightbox-previous], [data-lightbox-next]", function(e) {
            e.preventDefault();
            return modal.lightbox[_c.$(this).is("[data-lightbox-next]") ? "next" : "previous"]();
        });
        modal.on("hide.clique.modal", function(e) {
            return modal.content.html("");
        });
        _c.$win.on("load resize orientationchange", _c.utils.debounce(function(_this) {
            return function() {
                if (modal.is(":visible")) {
                    return modal.lightbox.fitSize();
                }
            };
        }(this), 100));
        modal.lightbox = lightbox;
        return modal;
    };
    _c.lightbox.create = function(items, options) {
        var group, o;
        if (!items) {
            return;
        }
        group = [];
        o = null;
        items.forEach(function(item) {
            return group.push(_c.$.extend({
                source: "",
                title: "",
                type: "auto",
                link: false
            }, typeof item === "string" ? {
                source: item
            } : item));
        });
        o = _c.lightbox(_c.$.extend({}, options, {
            group: group
        }));
        return o;
    };
    return _c.lightbox;
});
(function(addon) {
    if (typeof define === "function" && define.amd) {
        define("clique-nestable", [ "clique" ], function() {
            return addon(Clique);
        });
    }
    if (!window.Clique) {
        throw new Error("Clique.nestable requires Clique.core");
    }
    if (window.Clique) {
        addon(Clique);
    }
})(function(_c) {
    var $, $win, dragSource, draggingElement, eCancel, eEnd, eMove, eStart, hasPointerEvents, hasTouch, html, touchedlists;
    $ = _c.$;
    hasTouch = false;
    html = _c.$html;
    touchedlists = [];
    $win = _c.$win;
    draggingElement = void 0;
    dragSource = void 0;
    hasPointerEvents = function() {
        var docEl, el, supports;
        el = document.createElement("div");
        docEl = document.documentElement;
        if (!("pointerEvents" in el.style)) {
            return false;
        }
        el.style.pointerEvents = "auto";
        el.style.pointerEvents = "x";
        docEl.appendChild(el);
        supports = window.getComputedStyle && window.getComputedStyle(el, "").pointerEvents === "auto";
        docEl.removeChild(el);
        return !!supports;
    }();
    eStart = hasTouch ? "touchstart" : "mousedown";
    eMove = hasTouch ? "touchmove" : "mousemove";
    eEnd = hasTouch ? "touchend" : "mouseup";
    eCancel = hasTouch ? "touchcancel" : "mouseup";
    _c.component("nestable", {
        defaults: {
            prefix: "",
            listNodeName: "ul",
            itemNodeName: "li",
            listBaseClass: "{prefix}nestable",
            listClass: "{prefix}nestable-list",
            listitemClass: "{prefix}nestable-list-item",
            itemClass: "{prefix}nestable-item",
            dragClass: "{prefix}nestable-list-dragged",
            movingClass: "{prefix}nestable-moving",
            handleClass: "{prefix}nestable-handle",
            collapsedClass: "{prefix}collapsed",
            placeClass: "{prefix}nestable-placeholder",
            noDragClass: "{prefix}nestable-nodrag",
            emptyClass: "{prefix}nestable-empty",
            group: 0,
            maxDepth: 10,
            threshold: 20
        },
        boot: function() {
            _c.$html.on("mousemove touchmove", function(e) {
                var top;
                if (draggingElement) {
                    top = draggingElement.offset().top;
                    if (top < _c.$win.scrollTop()) {
                        return _c.$win.scrollTop(_c.$win.scrollTop() - Math.ceil(draggingElement.height() / 2));
                    } else {
                        if (top + draggingElement.height() > window.innerHeight + _c.$win.scrollTop()) {
                            return _c.$win.scrollTop(_c.$win.scrollTop() + Math.ceil(draggingElement.height() / 2));
                        }
                    }
                }
            });
            return _c.ready(function(context) {
                return _c.$("[data-nestable]", context).each(function() {
                    var ele, obj;
                    ele = _c.$(this);
                    if (!ele.data("clique.data.nestable")) {
                        obj = _c.nestable(ele, _c.utils.options(ele.attr("data-nestable")));
                    }
                });
            });
        },
        init: function() {
            var $this, onEndEvent, onMoveEvent, onStartEvent;
            $this = this;
            _c.$doc.on("updated.browser.clique", function() {
                var browser;
                browser = _c.$doc.data("clique.data.browser");
                hasTouch = browser.screen.touch;
            });
            Object.keys(this.options).forEach(function(key) {
                if (String($this.options[key]).indexOf("{prefix}") !== -1) {
                    $this.options[key] = $this.options[key].replace("{prefix}", $this.options.prefix);
                }
            });
            this.tplempty = '<div class="' + this.options.emptyClass + '"/>';
            this.find(">" + this.options.itemNodeName).addClass(this.options.listitemClass).end().find("ul:not(.ignore-list)").addClass(this.options.listClass).find(">li").addClass(this.options.listitemClass);
            if (!this.element.children(this.options.itemNodeName).length) {
                this.element.append(this.tplempty);
            }
            this.element.data("nestable-id", "ID" + new Date().getTime() + "RAND" + Math.ceil(Math.random() * 1e5));
            this.reset();
            this.element.data("nestable-group", this.options.group);
            this.placeEl = _c.$('<div class="' + this.options.placeClass + '"/>');
            this.find(this.options.itemNodeName).each(function() {
                return $this.setParent(_c.$(this));
            });
            this.on("click", "[data-nestable-action]", function(e) {
                var action, item, target;
                if ($this.dragEl || !hasTouch && e.button !== 0) {
                    return;
                }
                e.preventDefault();
                target = _c.$(e.currentTarget);
                action = target.data("nestableAction");
                item = target.closest($this.options.itemNodeName);
                if (action === "collapse") {
                    $this.collapseItem(item);
                }
                if (action === "expand") {
                    $this.expandItem(item);
                }
                if (action === "toggle") {
                    $this.toggleItem(item);
                }
            });
            onStartEvent = function(e) {
                var handle;
                handle = _c.$(e.target);
                if (!handle.hasClass($this.options.handleClass)) {
                    if (handle.closest("." + $this.options.noDragClass).length) {
                        return;
                    }
                    handle = handle.closest("." + $this.options.handleClass);
                }
                if (!handle.length || $this.dragEl || !hasTouch && e.button !== 0 || hasTouch && e.touches.length !== 1) {
                    return;
                }
                e.preventDefault();
                $this.dragStart(hasTouch ? e.touches[0] : e);
                $this.trigger("start.uk.nestable", [ $this ]);
            };
            onMoveEvent = function(e) {
                if ($this.dragEl) {
                    e.preventDefault();
                    $this.dragMove(hasTouch ? e.touches[0] : e);
                    return $this.trigger("move.uk.nestable", [ $this ]);
                }
            };
            onEndEvent = function(e) {
                if ($this.dragEl) {
                    e.preventDefault();
                    $this.dragStop(hasTouch ? e.touches[0] : e);
                }
                draggingElement = false;
            };
            if (hasTouch) {
                this.element[0].addEventListener(eStart, onStartEvent, false);
                window.addEventListener(eMove, onMoveEvent, false);
                window.addEventListener(eEnd, onEndEvent, false);
                return window.addEventListener(eCancel, onEndEvent, false);
            } else {
                this.on(eStart, onStartEvent);
                $win.on(eMove, onMoveEvent);
                return $win.on(eEnd, onEndEvent);
            }
        },
        serialize: function() {
            var data, depth, list, step;
            data = void 0;
            depth = 0;
            list = this;
            step = function(level, depth) {
                var array, items;
                array = [];
                items = level.children(list.options.itemNodeName);
                items.each(function() {
                    var attribute, i, item, li, sub;
                    li = _c.$(this);
                    item = {};
                    attribute = void 0;
                    sub = li.children(list.options.listNodeName);
                    i = 0;
                    while (i < li[0].attributes.length) {
                        attribute = li[0].attributes[i];
                        if (attribute.name.indexOf("data-") === 0) {
                            item[attribute.name.substr(5)] = _c.utils.str2json(attribute.value);
                        }
                        i++;
                    }
                    if (sub.length) {
                        item.children = step(sub, depth + 1);
                    }
                    return array.push(item);
                });
                return array;
            };
            data = step(list.element, depth);
            return data;
        },
        list: function(options) {
            var data, depth, list, step;
            data = [];
            list = this;
            depth = 0;
            step = function(level, depth, parent) {
                var items;
                items = level.children(options.itemNodeName);
                return items.each(function(index) {
                    var item, li, sub;
                    li = _c.$(this);
                    item = _c.$.extend({
                        parent_id: parent ? parent : null,
                        depth: depth,
                        order: index
                    }, li.data());
                    sub = li.children(options.listNodeName);
                    data.push(item);
                    if (sub.length) {
                        return step(sub, depth + 1, li.data(options.idProperty || "id"));
                    }
                });
            };
            options = _c.$.extend({}, list.options, options);
            step(list.element, depth);
            return data;
        },
        reset: function() {
            var i;
            this.mouse = {
                offsetX: 0,
                offsetY: 0,
                startX: 0,
                startY: 0,
                lastX: 0,
                lastY: 0,
                nowX: 0,
                nowY: 0,
                distX: 0,
                distY: 0,
                dirAx: 0,
                dirX: 0,
                dirY: 0,
                lastDirX: 0,
                lastDirY: 0,
                distAxX: 0,
                distAxY: 0
            };
            this.moving = false;
            this.dragEl = null;
            this.dragRootEl = null;
            this.dragDepth = 0;
            this.hasNewRoot = false;
            this.pointEl = null;
            i = 0;
            while (i < touchedlists.length) {
                this.checkEmptyList(touchedlists[i]);
                i++;
            }
            touchedlists = [];
        },
        toggleItem: function(li) {
            return this[li.hasClass(this.options.collapsedClass) ? "expandItem" : "collapseItem"](li);
        },
        expandItem: function(li) {
            return li.removeClass(this.options.collapsedClass);
        },
        collapseItem: function(li) {
            var lists;
            lists = li.children(this.options.listNodeName);
            if (lists.length) {
                return li.addClass(this.options.collapsedClass);
            }
        },
        expandAll: function() {
            var list;
            list = this;
            return this.find(list.options.itemNodeName).each(function() {
                return list.expandItem(_c.$(this));
            });
        },
        collapseAll: function() {
            var list;
            list = this;
            return this.find(list.options.itemNodeName).each(function() {
                return list.collapseItem(_c.$(this));
            });
        },
        setParent: function(li) {
            if (li.children(this.options.listNodeName).length) {
                return li.addClass("parent");
            }
        },
        unsetParent: function(li) {
            li.removeClass("parent " + this.options.collapsedClass);
            return li.children(this.options.listNodeName).remove();
        },
        dragStart: function(e) {
            var depth, dragItem, i, items, mouse, offset, target;
            mouse = this.mouse;
            target = _c.$(e.target);
            dragItem = target.closest(this.options.itemNodeName);
            offset = dragItem.offset();
            this.placeEl.css("height", dragItem.height());
            mouse.offsetX = e.pageX - offset.left;
            mouse.offsetY = e.pageY - offset.top;
            mouse.startX = mouse.lastX = offset.left;
            mouse.startY = mouse.lastY = offset.top;
            this.dragRootEl = this.element;
            this.dragEl = _c.$(document.createElement(this.options.listNodeName)).addClass(this.options.listClass + " " + this.options.dragClass);
            this.dragEl.css("width", dragItem.width());
            draggingElement = this.dragEl;
            this.tmpDragOnSiblings = [ dragItem[0].previousSibling, dragItem[0].nextSibling ];
            dragItem.after(this.placeEl);
            dragItem[0].parentNode.removeChild(dragItem[0]);
            dragItem.appendTo(this.dragEl);
            _c.$body.append(this.dragEl);
            this.dragEl.css({
                left: offset.left,
                top: offset.top
            });
            i = void 0;
            depth = void 0;
            items = this.dragEl.find(this.options.itemNodeName);
            i = 0;
            while (i < items.length) {
                depth = _c.$(items[i]).parents(this.options.listNodeName).length;
                if (depth > this.dragDepth) {
                    this.dragDepth = depth;
                }
                i++;
            }
            return html.addClass(this.options.movingClass);
        },
        dragStop: function(e) {
            var el, root;
            el = this.dragEl.children(this.options.itemNodeName).first();
            root = this.placeEl.parents("." + this.options.listBaseClass + ":first");
            el[0].parentNode.removeChild(el[0]);
            this.placeEl.replaceWith(el);
            this.dragEl.remove();
            if (this.element[0] !== root[0]) {
                root.trigger("change.uk.nestable", [ el, "added", root, root.data("nestable") ]);
                this.element.trigger("change.uk.nestable", [ el, "removed", this.element, this ]);
            } else {
                this.element.trigger("change.uk.nestable", [ el, "moved", this.element, this ]);
            }
            this.trigger("stop.uk.nestable", [ this, el ]);
            this.reset();
            return html.removeClass(this.options.movingClass);
        },
        dragMove: function(e) {
            var before, depth, isEmpty, isNewRoot, list, mouse, nestableitem, newAx, next, opt, parent, pointElRoot, prev, tmpRoot;
            list = void 0;
            parent = void 0;
            prev = void 0;
            next = void 0;
            depth = void 0;
            opt = this.options;
            mouse = this.mouse;
            this.dragEl.css({
                left: e.pageX - mouse.offsetX,
                top: e.pageY - mouse.offsetY
            });
            mouse.lastX = mouse.nowX;
            mouse.lastY = mouse.nowY;
            mouse.nowX = e.pageX;
            mouse.nowY = e.pageY;
            mouse.distX = mouse.nowX - mouse.lastX;
            mouse.distY = mouse.nowY - mouse.lastY;
            mouse.lastDirX = mouse.dirX;
            mouse.lastDirY = mouse.dirY;
            mouse.dirX = mouse.distX === 0 ? 0 : mouse.distX > 0 ? 1 : -1;
            mouse.dirY = mouse.distY === 0 ? 0 : mouse.distY > 0 ? 1 : -1;
            newAx = Math.abs(mouse.distX) > Math.abs(mouse.distY) ? 1 : 0;
            if (!mouse.moving) {
                mouse.dirAx = newAx;
                mouse.moving = true;
                return;
            }
            if (mouse.dirAx !== newAx) {
                mouse.distAxX = 0;
                mouse.distAxY = 0;
            } else {
                mouse.distAxX += Math.abs(mouse.distX);
                if (mouse.dirX !== 0 && mouse.dirX !== mouse.lastDirX) {
                    mouse.distAxX = 0;
                }
                mouse.distAxY += Math.abs(mouse.distY);
                if (mouse.dirY !== 0 && mouse.dirY !== mouse.lastDirY) {
                    mouse.distAxY = 0;
                }
            }
            mouse.dirAx = newAx;
            if (mouse.dirAx && mouse.distAxX >= opt.threshold) {
                mouse.distAxX = 0;
                prev = this.placeEl.prev(opt.itemNodeName);
                if (mouse.distX > 0 && prev.length && !prev.hasClass(opt.collapsedClass)) {
                    list = prev.find(opt.listNodeName).last();
                    depth = this.placeEl.parents(opt.listNodeName).length;
                    if (depth + this.dragDepth <= opt.maxDepth) {
                        if (!list.length) {
                            list = _c.$("<" + opt.listNodeName + "/>").addClass(opt.listClass);
                            list.append(this.placeEl);
                            prev.append(list);
                            this.setParent(prev);
                        } else {
                            list = prev.children(opt.listNodeName).last();
                            list.append(this.placeEl);
                        }
                    }
                }
                if (mouse.distX < 0) {
                    next = this.placeEl.next(opt.itemNodeName);
                    if (!next.length) {
                        parent = this.placeEl.parent();
                        this.placeEl.closest(opt.itemNodeName).after(this.placeEl);
                        if (!parent.children().length) {
                            this.unsetParent(parent.parent());
                        }
                    }
                }
            }
            isEmpty = false;
            if (!hasPointerEvents) {
                this.dragEl[0].style.visibility = "hidden";
            }
            this.pointEl = _c.$(document.elementFromPoint(e.pageX - document.body.scrollLeft, e.pageY - (window.pageYOffset || document.documentElement.scrollTop)));
            if (!hasPointerEvents) {
                this.dragEl[0].style.visibility = "visible";
            }
            if (this.pointEl.hasClass(opt.handleClass)) {
                this.pointEl = this.pointEl.closest(opt.itemNodeName);
            } else {
                nestableitem = this.pointEl.closest("." + opt.itemClass);
                if (nestableitem.length) {
                    this.pointEl = nestableitem.closest(opt.itemNodeName);
                }
            }
            if (this.pointEl.hasClass(opt.emptyClass)) {
                isEmpty = true;
            } else {
                if (this.pointEl.data("nestable") && !this.pointEl.children().length) {
                    isEmpty = true;
                    this.pointEl = _c.$(this.tplempty).appendTo(this.pointEl);
                } else {
                    if (!this.pointEl.length || !this.pointEl.hasClass(opt.listitemClass)) {
                        return;
                    }
                }
            }
            pointElRoot = this.element;
            tmpRoot = this.pointEl.closest("." + this.options.listBaseClass);
            isNewRoot = pointElRoot[0] !== this.pointEl.closest("." + this.options.listBaseClass)[0];
            if (!mouse.dirAx || isNewRoot || isEmpty) {
                if (isNewRoot && opt.group !== tmpRoot.data("nestable-group")) {
                    return;
                } else {
                    touchedlists.push(pointElRoot);
                }
                depth = this.dragDepth - 1 + this.pointEl.parents(opt.listNodeName).length;
                if (depth > opt.maxDepth) {
                    return;
                }
                before = e.pageY < this.pointEl.offset().top + this.pointEl.height() / 2;
                parent = this.placeEl.parent();
                if (isEmpty) {
                    this.pointEl.replaceWith(this.placeEl);
                } else {
                    if (before) {
                        this.pointEl.before(this.placeEl);
                    } else {
                        this.pointEl.after(this.placeEl);
                    }
                }
                if (!parent.children().length) {
                    if (!parent.data("clique.data.nestable")) {
                        this.unsetParent(parent.parent());
                    }
                }
                this.checkEmptyList(this.dragRootEl);
                this.checkEmptyList(pointElRoot);
                if (isNewRoot) {
                    this.dragRootEl = tmpRoot;
                    this.hasNewRoot = this.element[0] !== this.dragRootEl[0];
                }
            }
        },
        checkEmptyList: function(list) {
            list = list ? _c.$(list) : this.element;
            if (!list.children().length) {
                return list.find("." + this.options.emptyClass).remove().end().append(this.tplempty);
            }
        }
    });
    return _c.nestable;
});
(function(addon) {
    if (typeof define === "function" && define.amd) {
        define("clique-offcanvas", [ "clique" ], function() {
            return addon(Clique);
        });
    }
    if (!window.Clique) {
        throw new Error("Clique.offcanvas requires Clique.core");
    }
    if (window.Clique) {
        addon(Clique);
    }
})(function(_c) {
    var $, $doc, $html, $win, Offcanvas, scrollpos;
    $ = _c.$;
    scrollpos = {
        x: window.scrollX,
        y: window.scrollY
    };
    $win = _c.$win;
    $doc = _c.$doc;
    $html = _c.$html;
    Offcanvas = {
        show: function(element) {
            var bar, dir, flip, rtl;
            element = _c.$(element);
            if (!element.length) {
                return;
            }
            bar = element.find(".offcanvas-bar").first();
            rtl = _c.langdirection === "right";
            flip = bar.hasClass("offcanvas-bar-flip") ? -1 : 1;
            dir = flip * (rtl ? -1 : 1);
            scrollpos = {
                x: window.pageXOffset,
                y: window.pageYOffset
            };
            element.addClass("active");
            _c.$body.css({
                width: window.innerWidth,
                height: window.innerHeight
            }).addClass("offcanvas-page");
            _c.$body.css(rtl ? "margin-right" : "margin-left", (rtl ? -1 : 1) * (bar.outerWidth() * dir)).width();
            $html.css("margin-top", scrollpos.y * -1);
            bar.addClass("offcanvas-bar-show");
            this._initElement(element);
            $doc.trigger("show.clique.offcanvas", [ element, bar ]);
            element.attr("aria-hidden", "false");
        },
        hide: function(force) {
            var bar, finalize, panel, rtl;
            panel = _c.$(".offcanvas.active");
            rtl = _c.langdirection === "right";
            bar = panel.find(".offcanvas-bar").first();
            finalize = function() {
                _c.$body.removeClass("offcanvas-page").css({
                    width: "",
                    height: "",
                    "margin-left": "",
                    "margin-right": ""
                });
                panel.removeClass("active");
                bar.removeClass("offcanvas-bar-show");
                $html.css("margin-top", "");
                window.scrollTo(scrollpos.x, scrollpos.y);
                _c.$doc.trigger("hide.clique.offcanvas", [ panel, bar ]);
                return panel.attr("aria-hidden", "true");
            };
            if (!panel.length) {
                return;
            }
            if (_c.support.transition && !force) {
                _c.$body.one(_c.support.transition.end, function() {
                    return finalize();
                }).css(rtl ? "margin-right" : "margin-left", "");
                return setTimeout(function() {
                    return bar.removeClass("offcanvas-bar-show");
                }, 0);
            } else {
                return finalize();
            }
        },
        _initElement: function(element) {
            if (element.data("OffcanvasInit")) {
                return;
            }
            element.on("click.clique.offcanvas swipeRight.clique.offcanvas swipeLeft.clique.offcanvas", function(e) {
                var target;
                target = _c.$(e.target);
                if (!e.type.match(/swipe/)) {
                    if (!target.hasClass("offcanvas-close")) {
                        if (target.hasClass("offcanvas-bar")) {
                            return;
                        }
                        if (target.parents(".offcanvas-bar").first().length) {
                            return;
                        }
                    }
                }
                e.stopImmediatePropagation();
                return Offcanvas.hide();
            });
            element.on("click", "a[href^='#']", function(e) {
                var href;
                element = _c.$(this);
                href = element.attr("href");
                if (href === "#") {
                    return;
                }
                _c.$doc.one("hide.clique.offcanvas", function() {
                    var target;
                    target = _c.$(href);
                    if (!target.length) {
                        target = _c.$('[name="' + href.replace("#", "") + '"]');
                    }
                    if (_c.utils.scrollToElement && target.length) {
                        return _c.utils.scrollToElement(target);
                    } else {
                        window.location.href = href;
                    }
                });
                return Offcanvas.hide();
            });
            return element.data("OffcanvasInit", true);
        }
    };
    _c.component("offcanvasTrigger", {
        boot: function() {
            $html.on("click.offcanvas.clique", "[data-offcanvas]", function(e) {
                var ele, obj;
                e.preventDefault();
                ele = _c.$(this);
                if (!ele.data("clique.data.offcanvasTrigger")) {
                    obj = _c.offcanvasTrigger(ele, _c.utils.options(ele.attr("data-offcanvas")));
                    return ele.trigger("click");
                }
            });
            return $html.on("keydown.clique.offcanvas", function(e) {
                if (e.keyCode === 27) {
                    return Offcanvas.hide();
                }
            });
        },
        init: function() {
            var $this;
            $this = this;
            this.options = _c.$.extend({
                target: $this.element.is("a") ? $this.element.attr("href") : false
            }, this.options);
            return this.on("click", function(e) {
                e.preventDefault();
                return Offcanvas.show($this.options.target);
            });
        }
    });
    _c.offcanvas = Offcanvas;
});
(function(addon) {
    if (typeof define === "function" && define.amd) {
        define("clique-parallax", [ "clique" ], function() {
            return addon(Clique);
        });
    }
    if (!window.Clique) {
        throw new Error("Clique.parallax requires Clique.core");
    }
    if (window.Clique) {
        addon(Clique);
    }
})(function(_c) {
    var $, calcColor, calculateColor, checkParallaxes, colors, initBgImageParallax, parallaxes, parseColor, scrolltop, supports3d, wh;
    $ = _c.$;
    initBgImageParallax = function(obj, prop, opts) {
        var check, element, img, ratio, url;
        img = new Image();
        ratio = null;
        element = obj.element.css({
            "background-size": "cover",
            "background-repeat": "no-repeat"
        });
        url = element.css("background-image").replace(/^url\(/g, "").replace(/\)$/g, "").replace(/("|')/g, "");
        check = function() {
            var h, height, w, width;
            w = element.width();
            h = element.height();
            h += prop === "bg" ? opts.diff : opts.diff / 100 * h;
            if (w / ratio < h) {
                width = Math.ceil(h * ratio);
                height = h;
            } else {
                width = w;
                height = Math.ceil(w / ratio);
                return obj.element.css({
                    "background-size": width + "px " + height + "px"
                });
            }
        };
        img.onerror = function() {};
        img.onload = function() {
            var size;
            size = {
                w: img.width,
                height: img.height
            };
            ratio = img.width / img.height;
            _c.$win.on("load resize orientationchange", _c.utils.debounce(function() {
                return check();
            }, 50));
            return check();
        };
        img.src = url;
        return true;
    };
    calcColor = function(start, end, pos) {
        start = parseColor(start);
        end = parseColor(end);
        pos = pos || 0;
        return calculateColor(start, end, pos);
    };
    calculateColor = function(begin, end, pos) {
        var color;
        color = "rgba(" + parseInt(begin[0] + pos * (end[0] - begin[0]), 10) + "," + parseInt(begin[1] + pos * (end[1] - begin[1]), 10) + "," + parseInt(begin[2] + pos * (end[2] - begin[2]), 10) + "," + (begin && end ? parseFloat(begin[3] + pos * (end[3] - begin[3])) : 1);
        color += ")";
        return color;
    };
    parseColor = function(color) {
        var match1, match2, match3, match4, quadruplet;
        match1 = /#([0-9a-fA-F]{2})([0-9a-fA-F]{2})([0-9a-fA-F]{2})/.exec(color);
        match2 = /#([0-9a-fA-F])([0-9a-fA-F])([0-9a-fA-F])/.exec(color);
        match3 = /rgb\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*\)/.exec(color);
        match4 = /rgba\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9\.]*)\s*\)/.exec(color);
        if (match1) {
            quadruplet = [ parseInt(match1[1], 16), parseInt(match1[2], 16), parseInt(match1[3], 16), 1 ];
        } else {
            if (match2) {
                quadruplet = [ parseInt(match2[1], 16) * 17, parseInt(match2[2], 16) * 17, parseInt(match2[3], 16) * 17, 1 ];
            } else {
                if (match3) {
                    quadruplet = [ parseInt(match3[1]), parseInt(match3[2]), parseInt(match3[3]), 1 ];
                } else {
                    if (match4) {
                        quadruplet = [ parseInt(match4[1], 10), parseInt(match4[2], 10), parseInt(match4[3], 10), parseFloat(match4[4]) ];
                    } else {
                        quadruplet = colors[color] || [ 255, 255, 255, 0 ];
                    }
                }
            }
        }
        return quadruplet;
    };
    parallaxes = [];
    supports3d = false;
    scrolltop = 0;
    wh = window.innerHeight;
    checkParallaxes = function() {
        scrolltop = _c.$win.scrollTop();
        return _c.support.requestAnimationFrame.apply(window, [ function() {
            var i, _results;
            i = 0;
            _results = [];
            while (i < parallaxes.length) {
                parallaxes[i].process();
                _results.push(i++);
            }
            return _results;
        } ]);
    };
    _c.component("parallax", {
        defaults: {
            velocity: .5,
            target: false,
            viewport: false
        },
        boot: function() {
            supports3d = function() {
                var el, has3d, t, transforms;
                el = document.createElement("div");
                transforms = {
                    WebkitTransform: "-webkit-transform",
                    MSTransform: "-ms-transform",
                    MozTransform: "-moz-transform",
                    Transform: "transform"
                };
                document.body.insertBefore(el, null);
                for (t in transforms) {
                    if (el.style[t] !== void 0) {
                        el.style[t] = "translate3d(1px,1px,1px)";
                        has3d = window.getComputedStyle(el).getPropertyValue(transforms[t]);
                    }
                }
                document.body.removeChild(el);
                return typeof has3d !== "undefined" && has3d.length > 0 && has3d !== "none";
            }();
            _c.$doc.on("scrolling.clique.dom", checkParallaxes);
            _c.$win.on("load resize orientationchange", _c.utils.debounce(function() {
                wh = window.innerHeight;
                checkParallaxes();
            }, 50));
            return _c.ready(function(context) {
                return _c.$("[data-parallax]", context).each(function() {
                    var ele, obj;
                    ele = _c.$(this);
                    if (!ele.data("clique.data.parallax")) {
                        obj = _c.parallax(ele, _c.utils.options(ele.attr("data-parallax")));
                    }
                });
            });
        },
        init: function() {
            var reserved;
            this.base = this.options.target ? _c.$(this.options.target) : this.element;
            this.props = {};
            this.velocity = this.options.velocity || 1;
            reserved = [ "target", "velocity", "viewport", "plugins" ];
            Object.keys(this.options).forEach(function(_this) {
                return function(prop) {
                    var diff, dir, end, start, startend;
                    if (reserved.indexOf(prop) !== -1) {
                        return;
                    }
                    startend = String(_this.options[prop]).split(",");
                    if (prop.match(/color/i)) {
                        start = startend[1] ? startend[0] : _this._getStartValue(prop);
                        end = startend[1] ? startend[1] : startend[0];
                        if (!start) {
                            start = "rgba(255, 255, 255, 0)";
                            return;
                        }
                    } else {
                        start = parseFloat(startend[1] ? startend[0] : _this._getStartValue(prop));
                        end = parseFloat(startend[1] ? startend[1] : startend[0]);
                        diff = start < end ? end - start : start - end;
                        dir = start < end ? 1 : -1;
                    }
                    _this.props[prop] = {
                        start: start,
                        end: end,
                        dir: dir,
                        diff: diff
                    };
                };
            }(this));
            return parallaxes.push(this);
        },
        process: function() {
            var percent;
            percent = this.percentageInViewport();
            if (this.options.viewport !== false) {
                percent = this.options.viewport === 0 ? 1 : percent / this.options.viewport;
            }
            return this.update(percent);
        },
        percentageInViewport: function() {
            var distance, height, percent, percentage, top;
            top = this.base.offset().top;
            height = this.base.outerHeight();
            if (top > scrolltop + wh) {
                percent = 0;
            } else {
                if (top + height < scrolltop) {
                    percent = 1;
                } else {
                    if (top + height < wh) {
                        percent = (scrolltop < wh ? scrolltop : scrolltop - wh) / (top + height);
                    } else {
                        distance = scrolltop + wh - top;
                        percentage = Math.round(distance / ((wh + height) / 100));
                        percent = percentage / 100;
                    }
                }
            }
            return percent;
        },
        update: function(percent) {
            var compercent, css;
            css = {
                transform: ""
            };
            compercent = percent * (1 - (this.velocity - this.velocity * percent));
            if (compercent < 0) {
                compercent = 0;
            }
            if (compercent > 1) {
                compercent = 1;
            }
            if (this._percent !== void 0 && this._percent === compercent) {
                return;
            }
            Object.keys(this.props).forEach(function(_this) {
                return function(prop) {
                    var opts, val;
                    opts = _this.props[prop];
                    if (percent === 0) {
                        val = opts.start;
                    } else {
                        if (percent === 1) {
                            val = opts.end;
                        } else {
                            if (opts.diff !== void 0) {
                                val = opts.start + opts.diff * compercent * opts.dir;
                            }
                        }
                    }
                    if ((prop === "bg" || prop === "bgp") && !_this._bgcover) {
                        _this._bgcover = initBgImageParallax(_this, prop, opts);
                    }
                    switch (prop) {
                      case "x":
                        css.transform += supports3d ? " translate3d(" + val + "px, 0, 0)" : " translateX(" + val + "px)";
                        break;

                      case "xp":
                        css.transform += supports3d ? " translate3d(" + val + "%, 0, 0)" : " translateX(" + val + "%)";
                        break;

                      case "y":
                        css.transform += supports3d ? " translate3d(0, " + val + "px, 0)" : " translateY(" + val + "px)";
                        break;

                      case "yp":
                        css.transform += supports3d ? " translate3d(0, " + val + "%, 0)" : " translateY(" + val + "%)";
                        break;

                      case "rotate":
                        css.transform += " rotate(" + val + "deg)";
                        break;

                      case "scale":
                        css.transform += " scale(" + val + ")";
                        break;

                      case "bg":
                        css["background-position"] = "50% " + val + "px";
                        break;

                      case "bgp":
                        css["background-position"] = "50% " + val + "%";
                        break;

                      case "color":
                      case "background-color":
                      case "border-color":
                        css[prop] = calcColor(opts.start, opts.end, compercent);
                        break;

                      default:
                        css[prop] = val;
                        break;
                    }
                };
            }(this));
            this.element.css(css);
            this._percent = compercent;
        },
        _getStartValue: function(prop) {
            var value;
            value = 0;
            switch (prop) {
              case "scale":
                value = 1;
                break;

              default:
                value = this.element.css(prop);
            }
            return value || 0;
        }
    });
    colors = {
        black: [ 0, 0, 0, 1 ],
        blue: [ 0, 0, 255, 1 ],
        brown: [ 165, 42, 42, 1 ],
        cyan: [ 0, 255, 255, 1 ],
        fuchsia: [ 255, 0, 255, 1 ],
        gold: [ 255, 215, 0, 1 ],
        green: [ 0, 128, 0, 1 ],
        indigo: [ 75, 0, 130, 1 ],
        khaki: [ 240, 230, 140, 1 ],
        lime: [ 0, 255, 0, 1 ],
        magenta: [ 255, 0, 255, 1 ],
        maroon: [ 128, 0, 0, 1 ],
        navy: [ 0, 0, 128, 1 ],
        olive: [ 128, 128, 0, 1 ],
        orange: [ 255, 165, 0, 1 ],
        pink: [ 255, 192, 203, 1 ],
        purple: [ 128, 0, 128, 1 ],
        violet: [ 128, 0, 128, 1 ],
        red: [ 255, 0, 0, 1 ],
        silver: [ 192, 192, 192, 1 ],
        white: [ 255, 255, 255, 1 ],
        yellow: [ 255, 255, 0, 1 ],
        transparent: [ 255, 255, 255, 0 ]
    };
    return _c.parallax;
});
(function(addon) {
    if (typeof define === "function" && define.amd) {
        define("clique-password", [ "clique" ], function() {
            return addon(Clique);
        });
    }
    if (!window.Clique) {
        throw new Error("Clique.password requires Clique.core");
    }
    if (window.Clique) {
        addon(Clique);
    }
})(function(_c) {
    var $;
    $ = _c.$;
    _c.component("password", {
        defaults: {
            lblShow: "Show",
            lblHide: "Hide"
        },
        boot: function() {
            return _c.$html.on("click.password.clique", "[data-password]", function(e) {
                var ele, obj;
                ele = _c.$(this);
                if (!ele.data("clique.data.password")) {
                    e.preventDefault();
                    obj = _c.password(ele, _c.utils.options(ele.attr("data-password")));
                    return ele.trigger("click");
                }
            });
        },
        init: function() {
            var $this;
            $this = this;
            this.on("click", function(_this) {
                return function(e) {
                    var type;
                    e.preventDefault();
                    if (_this.input.length) {
                        type = _this.input.attr("type");
                        _this.input.attr("type", type === "text" ? "password" : "text");
                        return _this.element.text(_this.options[type === "text" ? "lblShow" : "lblHide"]);
                    }
                };
            }(this));
            this.input = this.element.next("input").length ? this.element.next("input") : this.element.prev("input");
            this.element.text(this.options[this.input.is("[type='password']") ? "lblShow" : "lblHide"]);
            return this.element.data("password", this);
        }
    });
    return _c.password;
});
(function(addon) {
    var component;
    if (window.Clique) {
        component = addon(Clique);
    }
    if (typeof define == "function" && define.amd) {
        define("clique-slideshow", [ "clique" ], function() {
            return component || addon(Clique);
        });
    }
})(function(_c) {
    "use strict";
    var Animations, playerId = 0;
    _c.component("slideshow", {
        defaults: {
            animation: "fade",
            duration: 500,
            height: "auto",
            start: 0,
            autoplay: false,
            autoplayInterval: 7e3,
            videoautoplay: true,
            videomute: true,
            kenburns: false,
            slices: 15,
            pauseOnHover: true
        },
        current: false,
        interval: null,
        hovering: false,
        boot: function() {
            _c.ready(function(context) {
                _c.$("[data-slideshow]", context).each(function() {
                    var slideshow = _c.$(this);
                    if (!slideshow.data("clique.data.slideshow")) {
                        var obj = _c.slideshow(slideshow, _c.utils.options(slideshow.attr("data-slideshow")));
                    }
                });
            });
        },
        init: function() {
            var $this = this, canvas, kbanimduration;
            this.container = this.element.hasClass("slideshow") ? this.element : _c.$(this.find(".slideshow"));
            this.slides = this.container.children();
            this.slidesCount = this.slides.length;
            this.current = this.options.start;
            this.animating = false;
            this.triggers = this.find("[data-slideshow-item]");
            this.fixFullscreen = navigator.userAgent.match(/(iPad|iPhone|iPod)/g) && this.container.hasClass("slideshow-fullscreen");
            if (this.options.kenburns) {
                kbanimduration = this.options.kenburns === true ? "15s" : this.options.kenburns;
                if (!String(kbanimduration).match(/(ms|s)$/)) {
                    kbanimduration += "ms";
                }
            }
            this.slides.each(function(index) {
                var slide = _c.$(this), media = slide.children("img,video,iframe").eq(0);
                slide.data("media", media);
                slide.data("sizer", media);
                if (media.length) {
                    var placeholder;
                    switch (media[0].nodeName) {
                      case "IMG":
                        var cover = _c.$('<div class="cover-background position-cover"></div>').css({
                            "background-image": "url(" + media.attr("src") + ")"
                        });
                        media.css({
                            width: "100%",
                            height: "auto"
                        });
                        slide.prepend(cover).data("cover", cover);
                        break;

                      case "IFRAME":
                        var src = media[0].src, iframeId = "sw-" + ++playerId;
                        media.attr("src", "").on("load", function() {
                            if (index !== $this.current || index == $this.current && !$this.options.videoautoplay) {
                                $this.pausemedia(media);
                            }
                            if ($this.options.videomute) {
                                $this.mutemedia(media);
                                var inv = setInterval(function(ic) {
                                    return function() {
                                        $this.mutemedia(media);
                                        if (++ic >= 4) {
                                            clearInterval(inv);
                                        }
                                    };
                                }(0), 250);
                            }
                        }).data("slideshow", $this).attr("data-player-id", iframeId).attr("src", [ src, src.indexOf("?") > -1 ? "&" : "?", "enablejsapi=1&api=1&player_id=" + iframeId ].join("")).addClass("position-absolute");
                        if (!_c.support.touch) {
                            media.css("pointer-events", "none");
                        }
                        placeholder = true;
                        if (_c.cover) {
                            _c.cover(media);
                            media.attr("data-cover", "{}");
                        }
                        break;

                      case "VIDEO":
                        media.addClass("cover-object position-absolute");
                        placeholder = true;
                        if ($this.options.videomute) {
                            $this.mutemedia(media);
                        }
                    }
                    if (placeholder) {
                        canvas = _c.$("<canvas></canvas>").attr({
                            width: media[0].width,
                            height: media[0].height
                        });
                        var img = _c.$('<img style="width:100%;height:auto;">').attr("src", canvas[0].toDataURL());
                        slide.prepend(img);
                        slide.data("sizer", img);
                    }
                } else {
                    slide.data("sizer", slide);
                }
                if ($this.hasKenBurns(slide)) {
                    slide.data("cover").css({
                        "-webkit-animation-duration": kbanimduration,
                        "animation-duration": kbanimduration
                    });
                }
            });
            this.on("click.clique.slideshow", "[data-slideshow-item]", function(e) {
                e.preventDefault();
                var slide = _c.$(this).attr("data-slideshow-item");
                if ($this.current == slide) {
                    return;
                }
                switch (slide) {
                  case "next":
                  case "previous":
                    $this[slide == "next" ? "next" : "previous"]();
                    break;

                  default:
                    $this.show(parseInt(slide, 10));
                }
                $this.stop();
            });
            this.slides.attr("aria-hidden", "true").eq(this.current).addClass("active").attr("aria-hidden", "false");
            this.triggers.filter('[data-slideshow-item="' + this.current + '"]').addClass("active");
            _c.$win.on("resize load", _c.utils.debounce(function() {
                $this.resize();
                if ($this.fixFullscreen) {
                    $this.container.css("height", window.innerHeight);
                    $this.slides.css("height", window.innerHeight);
                }
            }, 100));
            setTimeout(function() {
                $this.resize();
            }, 80);
            if (this.options.autoplay) {
                this.start();
            }
            if (this.options.videoautoplay && this.slides.eq(this.current).data("media")) {
                this.playmedia(this.slides.eq(this.current).data("media"));
            }
            if (this.options.kenburns) {
                this.applyKenBurns(this.slides.eq(this.current));
            }
            this.container.on({
                mouseenter: function() {
                    if ($this.options.pauseOnHover) {
                        $this.hovering = true;
                    }
                },
                mouseleave: function() {
                    $this.hovering = false;
                }
            });
            this.on("swipeRight swipeLeft", function(e) {
                $this[e.type == "swipeLeft" ? "next" : "previous"]();
            });
            this.on("display.uk.check", function() {
                if ($this.element.is(":visible")) {
                    $this.resize();
                    if ($this.fixFullscreen) {
                        $this.container.css("height", window.innerHeight);
                        $this.slides.css("height", window.innerHeight);
                    }
                }
            });
        },
        resize: function() {
            if (this.container.hasClass("slideshow-fullscreen")) {
                return;
            }
            var $this = this, height = this.options.height;
            if (this.options.height === "auto") {
                height = 0;
                this.slides.css("height", "").each(function() {
                    height = Math.max(height, _c.$(this).height());
                });
            }
            this.container.css("height", height);
            this.slides.css("height", height);
        },
        show: function(index, direction) {
            if (this.animating || this.current == index) {
                return;
            }
            this.animating = true;
            var $this = this, current = this.slides.eq(this.current), next = this.slides.eq(index), dir = direction ? direction : this.current < index ? -1 : 1, currentmedia = current.data("media"), animation = Animations[this.options.animation] ? this.options.animation : "fade", nextmedia = next.data("media"), finalize = function() {
                if (!$this.animating) {
                    return;
                }
                if (currentmedia && currentmedia.is("video,iframe")) {
                    $this.pausemedia(currentmedia);
                }
                if (nextmedia && nextmedia.is("video,iframe")) {
                    $this.playmedia(nextmedia);
                }
                next.addClass("active").attr("aria-hidden", "false");
                current.removeClass("active").attr("aria-hidden", "true");
                $this.animating = false;
                $this.current = index;
                _c.utils.checkDisplay(next, '[class*="animation-"]:not(.cover-background.position-cover)');
                $this.trigger("show.uk.slideshow", [ next ]);
            };
            $this.applyKenBurns(next);
            if (!_c.support.animation) {
                animation = "none";
            }
            current = _c.$(current);
            next = _c.$(next);
            Animations[animation].apply(this, [ current, next, dir ]).then(finalize);
            $this.triggers.removeClass("active");
            $this.triggers.filter('[data-slideshow-item="' + index + '"]').addClass("active");
        },
        applyKenBurns: function(slide) {
            if (!this.hasKenBurns(slide)) {
                return;
            }
            var animations = [ "animation-middle-left", "animation-top-right", "animation-bottom-left", "animation-top-center", "", "animation-bottom-right" ], index = this.kbindex || 0;
            slide.data("cover").attr("class", "cover-background position-cover").width();
            slide.data("cover").addClass([ "animation-scale", "animation-reverse", animations[index] ].join(" "));
            this.kbindex = animations[index + 1] ? index + 1 : 0;
        },
        hasKenBurns: function(slide) {
            return this.options.kenburns && slide.data("cover");
        },
        next: function() {
            this.show(this.slides[this.current + 1] ? this.current + 1 : 0);
        },
        previous: function() {
            this.show(this.slides[this.current - 1] ? this.current - 1 : this.slides.length - 1);
        },
        start: function() {
            this.stop();
            var $this = this;
            this.interval = setInterval(function() {
                if (!$this.hovering) {
                    $this.next();
                }
            }, this.options.autoplayInterval);
        },
        stop: function() {
            if (this.interval) {
                clearInterval(this.interval);
            }
        },
        playmedia: function(media) {
            if (!(media && media[0])) {
                return;
            }
            switch (media[0].nodeName) {
              case "VIDEO":
                if (!this.options.videomute) {
                    media[0].muted = false;
                }
                media[0].play();
                break;

              case "IFRAME":
                if (!this.options.videomute) {
                    media[0].contentWindow.postMessage('{ "event": "command", "func": "unmute", "method":"setVolume", "value":1}', "*");
                }
                media[0].contentWindow.postMessage('{ "event": "command", "func": "playVideo", "method":"play"}', "*");
                break;
            }
        },
        pausemedia: function(media) {
            switch (media[0].nodeName) {
              case "VIDEO":
                media[0].pause();
                break;

              case "IFRAME":
                media[0].contentWindow.postMessage('{ "event": "command", "func": "pauseVideo", "method":"pause"}', "*");
                break;
            }
        },
        mutemedia: function(media) {
            switch (media[0].nodeName) {
              case "VIDEO":
                media[0].muted = true;
                break;

              case "IFRAME":
                media[0].contentWindow.postMessage('{ "event": "command", "func": "mute", "method":"setVolume", "value":0}', "*");
                break;
            }
        }
    });
    Animations = {
        none: function() {
            var d = _c.$.Deferred();
            d.resolve();
            return d.promise();
        },
        scroll: function(current, next, dir) {
            var d = _c.$.Deferred();
            current.css("animation-duration", this.options.duration + "ms");
            next.css("animation-duration", this.options.duration + "ms");
            next.css("opacity", 1).one(_c.support.animation.end, function() {
                current.removeClass(dir === 1 ? "slideshow-scroll-backward-out" : "slideshow-scroll-forward-out");
                next.css("opacity", "").removeClass(dir === 1 ? "slideshow-scroll-backward-in" : "slideshow-scroll-forward-in");
                d.resolve();
            }.bind(this));
            current.addClass(dir == 1 ? "slideshow-scroll-backward-out" : "slideshow-scroll-forward-out");
            next.addClass(dir == 1 ? "slideshow-scroll-backward-in" : "slideshow-scroll-forward-in");
            next.width();
            return d.promise();
        },
        swipe: function(current, next, dir) {
            var d = _c.$.Deferred();
            current.css("animation-duration", this.options.duration + "ms");
            next.css("animation-duration", this.options.duration + "ms");
            next.css("opacity", 1).one(_c.support.animation.end, function() {
                current.removeClass(dir === 1 ? "slideshow-swipe-backward-out" : "slideshow-swipe-forward-out");
                next.css("opacity", "").removeClass(dir === 1 ? "slideshow-swipe-backward-in" : "slideshow-swipe-forward-in");
                d.resolve();
            }.bind(this));
            current.addClass(dir == 1 ? "slideshow-swipe-backward-out" : "slideshow-swipe-forward-out");
            next.addClass(dir == 1 ? "slideshow-swipe-backward-in" : "slideshow-swipe-forward-in");
            next.width();
            return d.promise();
        },
        scale: function(current, next, dir) {
            var d = _c.$.Deferred();
            current.css("animation-duration", this.options.duration + "ms");
            next.css("animation-duration", this.options.duration + "ms");
            next.css("opacity", 1);
            current.one(_c.support.animation.end, function() {
                current.removeClass("slideshow-scale-out");
                next.css("opacity", "");
                d.resolve();
            }.bind(this));
            current.addClass("slideshow-scale-out");
            current.width();
            return d.promise();
        },
        fade: function(current, next, dir) {
            var d = _c.$.Deferred();
            current.css("animation-duration", this.options.duration + "ms");
            next.css("animation-duration", this.options.duration + "ms");
            next.css("opacity", 1);
            current.one(_c.support.animation.end, function() {
                current.removeClass("slideshow-fade-out");
                next.css("opacity", "");
                d.resolve();
            }.bind(this));
            current.addClass("slideshow-fade-out");
            current.width();
            return d.promise();
        }
    };
    _c.slideshow.animations = Animations;
    window.addEventListener("message", function onMessageReceived(e) {
        var data = e.data, iframe;
        if (typeof data == "string") {
            try {
                data = JSON.parse(data);
            } catch (err) {
                data = {};
            }
        }
        if (e.origin && e.origin.indexOf("vimeo") > -1 && data.event == "ready" && data.player_id) {
            iframe = _c.$('[data-player-id="' + data.player_id + '"]');
            if (iframe.length) {
                iframe.data("slideshow").mutemedia(iframe);
            }
        }
    }, false);
});
(function(addon) {
    if (typeof define === "function" && define.amd) {
        define("clique-sortable", [ "clique" ], function() {
            return addon(Clique);
        });
    }
    if (!window.Clique) {
        throw new Error("Clique.sortable requires Clique.core");
    }
    if (window.Clique) {
        addon(Clique);
    }
})(function(_c) {
    "use strict";
    var supportsTouch = "ontouchstart" in window || window.DocumentTouch && document instanceof DocumentTouch, draggingPlaceholder, moving, dragging, clickedlink, delayIdle;
    var supportsDragAndDrop = false;
    _c.component("sortable", {
        defaults: {
            warp: false,
            animation: 150,
            threshold: 10,
            childClass: "sortable-item",
            placeholderClass: "sortable-placeholder",
            overClass: "sortable-over",
            draggingClass: "sortable-dragged",
            dragMovingClass: "sortable-moving",
            dragCustomClass: "",
            handleClass: false,
            stop: function() {},
            start: function() {},
            change: function() {}
        },
        boot: function() {
            _c.ready(function(context) {
                _c.$("[data-sortable]", context).each(function() {
                    var ele = _c.$(this);
                    if (!ele.data("clique.data.sortable")) {
                        var plugin = _c.sortable(ele, _c.utils.options(ele.attr("data-sortable")));
                    }
                });
            });
            _c.$html.on("mousemove touchmove", function(e) {
                if (delayIdle) {
                    var src = e.originalEvent.targetTouches ? e.originalEvent.targetTouches[0] : e;
                    if (Math.abs(src.pageX - delayIdle.pos.x) > delayIdle.threshold || Math.abs(src.pageY - delayIdle.pos.y) > delayIdle.threshold) {
                        delayIdle.apply();
                    }
                }
                if (draggingPlaceholder) {
                    if (!moving) {
                        moving = true;
                        draggingPlaceholder.show();
                        draggingPlaceholder.$current.addClass(draggingPlaceholder.$sortable.options.placeholderClass);
                        draggingPlaceholder.$sortable.element.children().addClass(draggingPlaceholder.$sortable.options.childClass);
                        _c.$html.addClass(draggingPlaceholder.$sortable.options.dragMovingClass);
                    }
                    var offset = draggingPlaceholder.data("mouse-offset"), left = parseInt(e.originalEvent.pageX, 10) + offset.left, top = parseInt(e.originalEvent.pageY, 10) + offset.top;
                    draggingPlaceholder.css({
                        left: left,
                        top: top
                    });
                    if (top < _c.$win.scrollTop()) {
                        _c.$win.scrollTop(_c.$win.scrollTop() - Math.ceil(draggingPlaceholder.height() / 2));
                    } else {
                        if (top + draggingPlaceholder.height() > window.innerHeight + _c.$win.scrollTop()) {
                            _c.$win.scrollTop(_c.$win.scrollTop() + Math.ceil(draggingPlaceholder.height() / 2));
                        }
                    }
                }
            });
            _c.$html.on("mouseup touchend", function() {
                if (!moving && clickedlink) {
                    location.href = clickedlink.attr("href");
                }
                delayIdle = clickedlink = false;
            });
        },
        init: function() {
            var $this = this, element = this.element[0], currentlyDraggingElement = null, currentlyDraggingTarget = null, children;
            Object.keys(this.options).forEach(function(key) {
                if (String($this.options[key]).indexOf("Class") !== -1) {
                    $this.options[key] = $this.options[key];
                }
            });
            if (supportsDragAndDrop) {
                this.element.children().attr("draggable", "true");
            } else {
                this.element.on("mousedown touchstart", "a[href]", function(e) {
                    if (!e.ctrlKey && !e.metaKey && !e.shiftKey) {
                        clickedlink = _c.$(this);
                        e.preventDefault();
                    }
                }).on("click", "a[href]", function(e) {
                    if (!e.ctrlKey && !e.metaKey && !e.shiftKey) {
                        clickedlink = _c.$(this);
                        e.stopImmediatePropagation();
                        return false;
                    }
                });
            }
            var handleDragStart = delegate(function(e) {
                moving = false;
                dragging = false;
                var target = _c.$(e.target), children = $this.element.children();
                if (!supportsTouch && e.button === 2) {
                    return;
                }
                if ($this.options.handleClass) {
                    var handle = target.hasClass($this.options.handleClass) ? target : target.closest("." + $this.options.handleClass, element);
                    if (!handle.length) {
                        return;
                    }
                }
                if (target.is(":input")) {
                    return;
                }
                if (e.dataTransfer) {
                    e.dataTransfer.effectAllowed = "move";
                    e.dataTransfer.dropEffect = "move";
                }
                currentlyDraggingElement = this;
                if (draggingPlaceholder) {
                    draggingPlaceholder.remove();
                }
                var $current = _c.$(currentlyDraggingElement), offset = $current.offset();
                delayIdle = {
                    pos: {
                        x: e.pageX,
                        y: e.pageY
                    },
                    threshold: $this.options.threshold,
                    apply: function() {
                        draggingPlaceholder = _c.$('<div class="' + [ $this.options.draggingClass, $this.options.dragCustomClass ].join(" ") + '"></div>').css({
                            display: "none",
                            top: offset.top,
                            left: offset.left,
                            width: $current.width(),
                            height: $current.height(),
                            padding: $current.css("padding")
                        }).data("mouse-offset", {
                            left: offset.left - parseInt(e.pageX, 10),
                            top: offset.top - parseInt(e.pageY, 10)
                        }).append($current.html()).appendTo("body");
                        draggingPlaceholder.$current = $current;
                        draggingPlaceholder.$sortable = $this;
                        addFakeDragHandlers();
                        $this.options.start(this, currentlyDraggingElement);
                        $this.trigger("start.clique.sortable", [ $this, currentlyDraggingElement ]);
                        delayIdle = false;
                    }
                };
                if (!supportsDragAndDrop) {
                    e.preventDefault();
                }
            });
            var handleDragOver = delegate(function(e) {
                if (!currentlyDraggingElement) {
                    return true;
                }
                if (e.preventDefault) {
                    e.preventDefault();
                }
                return false;
            });
            var handleDragEnter = delegate(_c.utils.debounce(function(e) {
                if (!currentlyDraggingElement || currentlyDraggingElement === this) {
                    return true;
                }
                var previousCounter = $this.dragenterData(this);
                $this.dragenterData(this, previousCounter + 1);
                if (previousCounter === 0) {
                    _c.$(this).addClass($this.options.overClass);
                    if (!$this.options.warp) {
                        $this.moveElementNextTo(currentlyDraggingElement, this);
                    }
                }
                return false;
            }), 40);
            var handleDragLeave = delegate(function(e) {
                var previousCounter = $this.dragenterData(this);
                $this.dragenterData(this, previousCounter - 1);
                if (!$this.dragenterData(this)) {
                    _c.$(this).removeClass($this.options.overClass);
                    $this.dragenterData(this, false);
                }
            });
            var handleDrop = delegate(function(e) {
                if (e.type === "drop") {
                    if (e.stopPropagation) {
                        e.stopPropagation();
                    }
                    if (e.preventDefault) {
                        e.preventDefault();
                    }
                }
                if (!dragging && !$this.options.warp) {
                    return;
                }
                if ($this.options.warp) {
                    var thisSibling = currentlyDraggingElement.nextSibling;
                    this.parentNode.insertBefore(currentlyDraggingElement, this);
                    this.parentNode.insertBefore(this, thisSibling);
                    _c.utils.checkDisplay($this.element.parent());
                }
                $this.options.change(this, currentlyDraggingElement);
                $this.trigger("change.clique.sortable", [ $this, currentlyDraggingElement ]);
            });
            var handleDragEnd = function(e) {
                currentlyDraggingElement = null;
                currentlyDraggingTarget = null;
                $this.element.children().each(function() {
                    if (this.nodeType === 1) {
                        _c.$(this).removeClass($this.options.overClass).removeClass($this.options.placeholderClass).removeClass($this.options.childClass);
                        $this.dragenterData(this, false);
                    }
                });
                _c.$("html").removeClass($this.options.dragMovingClass);
                removeFakeDragHandlers();
                $this.options.stop(this);
                $this.trigger("stop.clique.sortable", [ $this ]);
                draggingPlaceholder.remove();
                draggingPlaceholder = null;
            };
            var handleTouchMove = delegate(function(e) {
                if (!currentlyDraggingElement || currentlyDraggingElement === this || currentlyDraggingTarget === this) {
                    return true;
                }
                $this.element.children().removeClass($this.options.overClass);
                currentlyDraggingTarget = this;
                if (!$this.options.warp) {
                    $this.moveElementNextTo(currentlyDraggingElement, this);
                } else {
                    _c.$(this).addClass($this.options.overClass);
                }
                return prevent(e);
            });
            function delegate(fn) {
                return function(e) {
                    var touch = supportsTouch && e.touches && e.touches[0] || {}, target = touch.target || e.target;
                    if (supportsTouch && document.elementFromPoint) {
                        target = document.elementFromPoint(e.pageX - document.body.scrollLeft, e.pageY - document.body.scrollTop);
                    }
                    if (_c.$(target).hasClass($this.options.childClass)) {
                        fn.apply(target, [ e ]);
                    } else {
                        if (target !== element) {
                            var context = moveUpToChildNode(element, target);
                            if (context) {
                                fn.apply(context, [ e ]);
                            }
                        }
                    }
                };
            }
            function addFakeDragHandlers() {
                if (!supportsDragAndDrop) {
                    if (supportsTouch) {
                        element.addEventListener("touchmove", handleTouchMove, false);
                    } else {
                        element.addEventListener("mouseover", handleDragEnter, false);
                        element.addEventListener("mouseout", handleDragLeave, false);
                    }
                    element.addEventListener(supportsTouch ? "touchend" : "mouseup", handleDrop, false);
                    document.addEventListener(supportsTouch ? "touchend" : "mouseup", handleDragEnd, false);
                    document.addEventListener("selectstart", prevent, false);
                }
            }
            function removeFakeDragHandlers() {
                if (!supportsDragAndDrop) {
                    if (supportsTouch) {
                        element.removeEventListener("touchmove", handleTouchMove, false);
                    } else {
                        element.removeEventListener("mouseover", handleDragEnter, false);
                        element.removeEventListener("mouseout", handleDragLeave, false);
                    }
                    element.removeEventListener(supportsTouch ? "touchend" : "mouseup", handleDrop, false);
                    document.removeEventListener(supportsTouch ? "touchend" : "mouseup", handleDragEnd, false);
                    document.removeEventListener("selectstart", prevent, false);
                }
            }
            if (supportsDragAndDrop) {
                element.addEventListener("dragstart", handleDragStart, false);
                element.addEventListener("dragenter", handleDragEnter, false);
                element.addEventListener("dragleave", handleDragLeave, false);
                element.addEventListener("drop", handleDrop, false);
                element.addEventListener("dragover", handleDragOver, false);
                element.addEventListener("dragend", handleDragEnd, false);
            } else {
                element.addEventListener(supportsTouch ? "touchstart" : "mousedown", handleDragStart, false);
            }
        },
        dragenterData: function(element, val) {
            element = _c.$(element);
            if (arguments.length === 1) {
                return parseInt(element.attr("data-child-dragenter"), 10) || 0;
            } else {
                if (!val) {
                    element.removeAttr("data-child-dragenter");
                } else {
                    element.attr("data-child-dragenter", Math.max(0, val));
                }
            }
        },
        moveElementNextTo: function(element, elementToMoveNextTo) {
            dragging = true;
            var $this = this, list = _c.$(element).parent().css("min-height", ""), next = isBelow(element, elementToMoveNextTo) ? elementToMoveNextTo : elementToMoveNextTo.nextSibling, children = list.children(), count = children.length;
            if ($this.options.warp || !$this.options.animation) {
                elementToMoveNextTo.parentNode.insertBefore(element, next);
                _c.utils.checkDisplay($this.element.parent());
                return;
            }
            list.css("min-height", list.height());
            children.stop().each(function() {
                var ele = _c.$(this), offset = ele.position();
                offset.width = ele.width();
                ele.data("offset-before", offset);
            });
            elementToMoveNextTo.parentNode.insertBefore(element, next);
            _c.utils.checkDisplay($this.element.parent());
            children = list.children().each(function() {
                var ele = _c.$(this);
                ele.data("offset-after", ele.position());
            }).each(function() {
                var ele = _c.$(this), before = ele.data("offset-before");
                ele.css({
                    position: "absolute",
                    top: before.top,
                    left: before.left,
                    "min-width": before.width
                });
            });
            children.each(function() {
                var ele = _c.$(this), before = ele.data("offset-before"), offset = ele.data("offset-after");
                ele.css("pointer-events", "none").width();
                setTimeout(function() {
                    ele.animate({
                        top: offset.top,
                        left: offset.left
                    }, $this.options.animation, function() {
                        ele.css({
                            position: "",
                            top: "",
                            left: "",
                            "min-width": "",
                            "pointer-events": ""
                        }).removeClass($this.options.overClass).attr("data-child-dragenter", "");
                        count--;
                        if (!count) {
                            list.css("min-height", "");
                            _c.utils.checkDisplay($this.element.parent());
                        }
                    });
                }, 0);
            });
        },
        serialize: function() {
            var data = [], item, attribute;
            this.element.children().each(function(j, child) {
                item = {};
                for (var i = 0; i < child.attributes.length; i++) {
                    attribute = child.attributes[i];
                    if (attribute.name.indexOf("data-") === 0) {
                        item[attribute.name.substr(5)] = _c.utils.str2json(attribute.value);
                    }
                }
                data.push(item);
            });
            return data;
        }
    });
    function isBelow(el1, el2) {
        var parent = el1.parentNode;
        if (el2.parentNode !== parent) {
            return false;
        }
        var cur = el1.previousSibling;
        while (cur && cur.nodeType !== 9) {
            if (cur === el2) {
                return true;
            }
            cur = cur.previousSibling;
        }
        return false;
    }
    function moveUpToChildNode(parent, child) {
        var cur = child;
        if (cur === parent) {
            return null;
        }
        while (cur) {
            if (cur.parentNode === parent) {
                return cur;
            }
            cur = cur.parentNode;
            if (!cur || !cur.ownerDocument || cur.nodeType === 11) {
                break;
            }
        }
        return null;
    }
    function prevent(e) {
        if (e.stopPropagation) {
            e.stopPropagation();
        }
        if (e.preventDefault) {
            e.preventDefault();
        }
        e.returnValue = false;
    }
    return _c.sortable;
});
(function(addon) {
    var component;
    if (window.Clique) {
        component = addon(Clique);
    }
    if (typeof define === "function" && define.amd) {
        define("clique-sticky", [ "clique" ], function() {
            console.log("something");
            return component || addon(Clique);
        });
    }
})(function(_c) {
    var $;
    $ = _c.$;
    var $win = _c.$win, $doc = _c.$doc, sticked = [];
    _c.component("sticky", {
        defaults: {
            top: 0,
            bottom: 0,
            animation: "",
            clsinit: "sticky-init",
            clsactive: "active",
            getWidthFrom: "",
            boundary: false,
            media: false,
            target: false,
            disabled: false
        },
        boot: function() {
            _c.$doc.on("scrolling.clique.dom", function() {
                checkscrollposition();
            });
            _c.$win.on("resize orientationchange", _c.utils.debounce(function() {
                if (!sticked.length) {
                    return;
                }
                for (var i = 0; i < sticked.length; i++) {
                    sticked[i].reset(true);
                    sticked[i].self.computeWrapper();
                }
                checkscrollposition();
            }, 100));
            _c.ready(function(context) {
                setTimeout(function() {
                    _c.$("[data-sticky]", context).each(function() {
                        var ele = $(this);
                        if (!ele.data("clique.data.sticky")) {
                            _c.sticky(ele, _c.utils.options(ele.attr("data-sticky")));
                        }
                    });
                    checkscrollposition();
                }, 0);
            });
        },
        init: function() {
            var wrapper = _c.$('<div class="sticky-placeholder"></div>'), boundary = this.options.boundary, boundtoparent;
            this.wrapper = this.element.css("margin", 0).wrap(wrapper).parent();
            this.computeWrapper();
            if (boundary) {
                if (boundary === true) {
                    boundary = this.wrapper.parent();
                    boundtoparent = true;
                } else {
                    if (typeof boundary === "string") {
                        boundary = _c.$(boundary);
                    }
                }
            }
            this.sticky = {
                self: this,
                options: this.options,
                element: this.element,
                currentTop: null,
                wrapper: this.wrapper,
                init: false,
                getWidthFrom: this.options.getWidthFrom || this.wrapper,
                boundary: boundary,
                boundtoparent: boundtoparent,
                reset: function(force) {
                    var finalize = function() {
                        this.element.css({
                            position: "",
                            top: "",
                            width: "",
                            left: "",
                            margin: "0"
                        });
                        this.element.removeClass([ this.options.animation, "animation-reverse", this.options.clsactive ].join(" "));
                        this.currentTop = null;
                        this.animate = false;
                    }.bind(this);
                    if (!force && this.options.animation && _c.support.animation) {
                        this.animate = true;
                        this.element.removeClass(this.options.animation).one(_c.support.animation.end, function() {
                            finalize();
                        }).width();
                        this.element.addClass(this.options.animation + " " + "animation-reverse");
                    } else {
                        finalize();
                    }
                },
                check: function() {
                    if (this.options.disabled) {
                        return false;
                    }
                    if (this.options.media) {
                        switch (typeof this.options.media) {
                          case "number":
                            if (window.innerWidth < this.options.media) {
                                return false;
                            }
                            break;

                          case "string":
                            if (window.matchMedia && !window.matchMedia(this.options.media).matches) {
                                return false;
                            }
                            break;
                        }
                    }
                    var scrollTop = $win.scrollTop(), documentHeight = $doc.height(), dwh = documentHeight - window.innerHeight, extra = scrollTop > dwh ? dwh - scrollTop : 0, elementTop = this.wrapper.offset().top, etse = elementTop - this.options.top - extra;
                    return scrollTop >= etse;
                }
            };
            sticked.push(this.sticky);
        },
        update: function() {
            checkscrollposition(this.sticky);
        },
        enable: function() {
            this.options.disabled = false;
            this.update();
        },
        disable: function(force) {
            this.options.disabled = true;
            this.sticky.reset(force);
        },
        computeWrapper: function() {
            this.wrapper.css({
                height: this.element.css("position") !== "absolute" ? this.element.outerHeight() : "",
                float: this.element.css("float") !== "none" ? this.element.css("float") : "",
                margin: this.element.css("margin")
            });
        }
    });
    function checkscrollposition() {
        var stickies = arguments.length ? arguments : sticked;
        if (!stickies.length || $win.scrollTop() < 0) {
            return;
        }
        var scrollTop = $win.scrollTop(), documentHeight = $doc.height(), windowHeight = $win.height(), dwh = documentHeight - windowHeight, extra = scrollTop > dwh ? dwh - scrollTop : 0, newTop, containerBottom, stickyHeight, sticky;
        for (var i = 0; i < stickies.length; i++) {
            sticky = stickies[i];
            if (!sticky.element.is(":visible") || sticky.animate) {
                continue;
            }
            if (!sticky.check()) {
                if (sticky.currentTop !== null) {
                    sticky.reset();
                }
            } else {
                if (sticky.options.top < 0) {
                    newTop = 0;
                } else {
                    stickyHeight = sticky.element.outerHeight();
                    newTop = documentHeight - stickyHeight - sticky.options.top - sticky.options.bottom - scrollTop - extra;
                    newTop = newTop < 0 ? newTop + sticky.options.top : sticky.options.top;
                }
                if (sticky.boundary && sticky.boundary.length) {
                    var bTop = sticky.boundary.position().top;
                    if (sticky.boundtoparent) {
                        containerBottom = documentHeight - (bTop + sticky.boundary.outerHeight()) + parseInt(sticky.boundary.css("padding-bottom"));
                    } else {
                        containerBottom = documentHeight - bTop - parseInt(sticky.boundary.css("margin-top"));
                    }
                    newTop = scrollTop + stickyHeight > documentHeight - containerBottom - (sticky.options.top < 0 ? 0 : sticky.options.top) ? documentHeight - containerBottom - (scrollTop + stickyHeight) : newTop;
                }
                if (sticky.currentTop !== newTop) {
                    sticky.element.css({
                        position: "fixed",
                        top: newTop,
                        width: typeof sticky.getWidthFrom !== "undefined" ? _c.$(sticky.getWidthFrom).width() : sticky.element.width(),
                        left: sticky.wrapper.offset().left
                    });
                    if (!sticky.init) {
                        sticky.element.addClass(sticky.options.clsinit);
                        if (location.hash && scrollTop > 0 && sticky.options.target) {
                            var $target = _c.$(location.hash);
                            if ($target.length) {
                                setTimeout(function($target, sticky) {
                                    return function() {
                                        sticky.element.width();
                                        var offset = $target.offset(), maxoffset = offset.top + $target.outerHeight(), stickyOffset = sticky.element.offset(), stickyHeight = sticky.element.outerHeight(), stickyMaxOffset = stickyOffset.top + stickyHeight;
                                        if (stickyOffset.top < maxoffset && offset.top < stickyMaxOffset) {
                                            scrollTop = offset.top - stickyHeight - sticky.options.target;
                                            window.scrollTo(0, scrollTop);
                                        }
                                    };
                                }($target, sticky), 0);
                            }
                        }
                    }
                    sticky.element.addClass(sticky.options.clsactive);
                    sticky.element.css("margin", "");
                    if (sticky.options.animation && sticky.init) {
                        sticky.element.addClass(sticky.options.animation);
                    }
                    sticky.currentTop = newTop;
                }
            }
            sticky.init = true;
        }
    }
    return _c.sticky;
});
(function(addon) {
    if (typeof define === "function" && define.amd) {
        define("clique-switch", [ "clique" ], function() {
            return addon(Clique);
        });
    }
    if (!window.Clique) {
        throw new Error("Clique.switch requires Clique.core");
    }
    if (window.Clique) {
        addon(Clique);
    }
})(function(_c) {
    var $;
    $ = _c.$;
    _c.component("switch", {
        defaults: {
            labels: {
                off: "Off",
                on: "On"
            }
        },
        boot: function() {
            return _c.ready(function(context) {
                return _c.$("[data-switch]", context).each(function() {
                    var ele, obj;
                    ele = _c.$(this);
                    if (!ele.data("clique.data.switch")) {
                        obj = _c["switch"](ele, _c.utils.options(ele.attr("data-switch")));
                    }
                });
            });
        },
        init: function() {
            var $this;
            $this = this;
            this.create(this.element);
            this.destroy = this.destroy;
            return this.element.data("switch", this);
        },
        create: function($input) {
            var $container, $this, $wrapper, elementArray, i;
            if (typeof $input === "undefined") {
                $input = this.element;
            }
            $this = this;
            $input.wrap('<div class="switch" />');
            $wrapper = this.$wrapper = $input.closest(".switch");
            $wrapper.wrapInner('<div class="switch-container" />');
            $container = $wrapper.children(".switch-container");
            elementArray = [ '<div class="switch-handle on"><label>' + this.options.labels.on + "</label></div>", '<div class="switch-label" />', '<div class="switch-handle off"><label>' + this.options.labels.off + "</label></div>" ];
            i = 0;
            while (i < elementArray.length) {
                $container.append(elementArray[i]);
                i++;
            }
            this.set("state", $input.is(":checked"));
            this.$wrapper.on("click", function(e) {
                return $this.toggle($this.element);
            });
            return this.element.trigger("init.clique.switch");
        },
        destroy: function() {
            this.$wrapper.find(".switch-handle, .switch-label").remove();
            this.element.unwrap().unwrap();
            return this.element.removeData([ "clique.data.switch", "switch" ]);
        },
        toggle: function($input) {
            var $this, state;
            if (typeof $input === "undefined") {
                $input = this.element;
            }
            $this = this;
            $input.trigger("willswitch.clique.switch");
            this.$wrapper.one(_c.support.transition.end, function() {
                return $input.trigger("didswitch.clique.switch", [ $this.state ]);
            });
            state = this.state === "on" ? true : false;
            return this.set("state", !state);
        },
        set: function(prop, val) {
            if (prop === "state") {
                if (_c.utils.isString(val)) {
                    if (val.toLowerCase() === "on") {
                        val = true;
                    } else {
                        val = false;
                    }
                }
                this.state = val ? "on" : "off";
                this.$wrapper.removeClass("on off");
                this.$wrapper.addClass(this.state);
                this.element.prop("checked", val);
                return this.element.prop("on", val);
            }
        }
    });
    return _c["switch"];
});
(function(addon) {
    if (typeof define === "function" && define.amd) {
        define("clique-timepicker", [ "clique" ], function() {
            return addon(Clique);
        });
    }
    if (!window.Clique || !window.Clique.autocomplete) {
        throw new Error("Clique.timepicker requires Clique.core and Clique.autocomplete");
    }
    if (window.Clique) {
        addon(Clique);
    }
})(function(_c) {
    var $, h, i, times;
    $ = _c.$;
    times = {
        "12h": [],
        "24h": []
    };
    i = 0;
    h = "";
    while (i < 24) {
        h = "" + i;
        if (i < 10) {
            h = "0" + h;
        }
        times["24h"].push({
            value: h + ":00"
        });
        times["24h"].push({
            value: h + ":30"
        });
        if (i > 0 && i < 13) {
            times["12h"].push({
                value: h + ":00 AM"
            });
            times["12h"].push({
                value: h + ":30 AM"
            });
        }
        if (i > 12) {
            h = h - 12;
            if (h < 10) {
                h = "0" + String(h);
            }
            times["12h"].push({
                value: h + ":00 PM"
            });
            times["12h"].push({
                value: h + ":30 PM"
            });
        }
        i++;
    }
    return _c.component("timepicker", {
        defaults: {
            format: "24h",
            delay: 0
        },
        boot: function() {
            return _c.$html.on("focus.timepicker.clique", "[data-timepicker]", function(e) {
                var ele, obj;
                ele = _c.$(this);
                if (!ele.data("clique.data.timepicker")) {
                    obj = _c.timepicker(ele, _c.utils.options(ele.attr("data-timepicker")));
                    return setTimeout(function() {
                        return obj.autocomplete.input.focus();
                    }, 40);
                }
            });
        },
        init: function() {
            var $this;
            $this = this;
            this.options.minLength = 0;
            this.options.template = '<ul class="nav nav-autocomplete autocomplete-results">{{~items}}<li data-value="{{$item.value}}"><a>{{$item.value}}</a></li>{{/items}}</ul>';
            this.options.source = function(release) {
                return release(times[$this.options.format] || times["12h"]);
            };
            this.element.wrap('<div class="autocomplete"></div>');
            this.autocomplete = _c.autocomplete(this.element.parent(), this.options);
            this.autocomplete.dropdown.addClass("dropdown-small dropdown-scrollable");
            this.autocomplete.on("show.clique.autocomplete", function() {
                var selected;
                selected = $this.autocomplete.dropdown.find('[data-value="' + $this.autocomplete.input.val() + '"]');
                return setTimeout(function() {
                    return $this.autocomplete.pick(selected, true);
                }, 10);
            });
            this.autocomplete.input.on({
                focus: function() {
                    $this.autocomplete.value = Math.random();
                    return $this.autocomplete.triggercomplete();
                },
                blur: function() {
                    return $this.checkTime();
                }
            });
            return this.element.data("timepicker", this);
        },
        checkTime: function() {
            var arr, hour, meridian, minute, time, timeArray;
            arr = null;
            timeArray = null;
            meridian = "AM";
            hour = null;
            minute = null;
            time = this.autocomplete.input.val();
            if (this.options.format === "12h") {
                arr = time.split(" ");
                timeArray = arr[0].split(":");
                meridian = arr[1];
            } else {
                timeArray = time.split(":");
            }
            hour = parseInt(timeArray[0], 10);
            minute = parseInt(timeArray[1], 10);
            if (isNaN(hour)) {
                hour = 0;
            }
            if (isNaN(minute)) {
                minute = 0;
            }
            if (this.options.format === "12h") {
                if (hour > 12) {
                    hour = 12;
                } else {
                    if (hour < 0) {
                        hour = 12;
                    }
                }
                if (meridian === "am" || meridian === "a") {
                    meridian = "AM";
                } else {
                    if (meridian === "pm" || meridian === "p") {
                        meridian = "PM";
                    }
                }
                if (meridian !== "AM" && meridian !== "PM") {
                    meridian = "AM";
                }
            } else {
                if (hour >= 24) {
                    hour = 23;
                } else {
                    if (hour < 0) {
                        hour = 0;
                    }
                }
            }
            if (minute < 0) {
                minute = 0;
            } else {
                if (minute >= 60) {
                    minute = 0;
                }
            }
            return this.autocomplete.input.val(this.formatTime(hour, minute, meridian)).trigger("change");
        },
        formatTime: function(hour, minute, meridian) {
            hour = hour < 10 ? "0" + hour : hour;
            minute = minute < 10 ? "0" + minute : minute;
            return hour + ":" + minute + (this.options.format === "12h" ? " " + meridian : "");
        }
    });
});
(function(addon) {
    if (typeof define === "function" && define.amd) {
        define("clique-upload", [ "clique" ], function() {
            return addon(Clique);
        });
    }
    if (!window.Clique) {
        throw new Error("Clique.upload requires Clique.core");
    }
    if (window.Clique) {
        addon(Clique);
    }
})(function(_c) {
    var $, matchName, xhrupload;
    $ = _c.$;
    xhrupload = function(files, settings) {
        var allow, complete, count, file, upload, uploaded, _i, _len;
        upload = function(files, settings) {
            var file, formData, i, param, xhr, _i, _len, _ref;
            formData = new FormData();
            xhr = new XMLHttpRequest();
            if (settings.before(settings, files) === false) {
                return;
            }
            for (_i = 0, _len = files.length; _i < _len; _i++) {
                file = files[_i];
                formData.append(settings.params, file);
            }
            _ref = settings.params;
            for (i in _ref) {
                param = _ref[i];
                formData.append(i, param);
            }
            xhr.upload.addEventListener("progress", function(e) {
                var percent;
                percent = e.loaded / e.total * 100;
                return settings.progress(percent, e);
            }, false);
            xhr.addEventListener("loadstart", function(e) {
                return settings.loadstart(e);
            }, false);
            xhr.addEventListener("load", function(e) {
                return settings.load(e);
            }, false);
            xhr.addEventListener("loadend", function(e) {
                return settings.loadend(e);
            }, false);
            xhr.addEventListener("error", function(e) {
                return settings.error(e);
            }, false);
            xhr.addEventListener("abort", function(e) {
                return settings.abort(e);
            }, false);
            xhr.open(settings.method, settings.action, true);
            xhr.onreadystatechange = function() {
                var e, response;
                settings.readystatechange(xhr);
                if (xhr.readyState === 4) {
                    response = xhr.responseText;
                    if (settings.type === "json") {
                        try {
                            response = _c.$.parseJSON(response);
                        } catch (_error) {
                            e = _error;
                            response = false;
                        }
                    }
                    return settings.complete(response, xhr);
                }
            };
            settings.beforeSend(xhr);
            return xhr.send(formData);
        };
        if (!_c.support.ajaxupload) {
            return this;
        }
        settings = _c.$.extend({}, xhrupload.defaults, settings);
        if (!files.length) {
            return;
        }
        if (settings.allow !== "*.*") {
            for (_i = 0, _len = files.length; _i < _len; _i++) {
                file = files[_i];
                if (!matchName(settings.allow, file.name)) {
                    if (typeof settings.notallowed === "string") {
                        alert(settings.notallowed);
                    } else {
                        settings.notallowed(file, settings);
                    }
                }
            }
        }
        complete = settings.complete;
        if (settings.single) {
            count = files.length;
            uploaded = 0;
            allow = true;
            settings.beforeAll(files);
            settings.complete = function(response, xhr) {
                uploaded = uploaded + 1;
                complete(response, xhr);
                if (settings.filelimit && uploaded >= settings.filelimit) {
                    allow = false;
                }
                if (allow && uploaded < count) {
                    return upload([ files[uploaded] ], settings);
                } else {
                    return settings.allcomplete(response, xhr);
                }
            };
            return upload([ files[0] ], settings);
        } else {
            settings.complete = function(response, xhr) {
                complete(response, xhr);
                return settings.allcomplete(response, xhr);
            };
            return upload(files, settings);
        }
    };
    matchName = function(pattern, path) {
        var parsedPattern;
        parsedPattern = "^" + pattern.replace(/\//g, "\\/").replace(/\*\*/g, "(\\/[^\\/]+)*").replace(/\*/g, "[^\\/]+").replace(/((?!\\))\?/g, "$1.") + "$";
        parsedPattern = "^" + parsedPattern + "$";
        return path.match(new RegExp(parsedPattern, "i")) !== null;
    };
    _c.component("uploadSelect", {
        init: function() {
            var $this;
            $this = this;
            return this.on("change", function() {
                var twin;
                xhrupload($this.element[0].files, $this.options);
                twin = $this.element.clone(true).data("uploadSelect", $this);
                $this.element.replaceWith(twin);
                $this.element = twin;
            });
        }
    });
    _c.component("uploadDrop", {
        defaults: {
            dragoverClass: "dragover"
        },
        init: function() {
            var $this, hasdragCls;
            $this = this;
            hasdragCls = false;
            return this.on("drop", function(e) {
                if (e.dataTransfer && e.dataTransfer.files) {
                    e.stopPropagation();
                    e.preventDefault();
                    $this.element.removeClass($this.options.dragoverClass);
                    $this.element.trigger("dropped.clique.upload", [ e.dataTransfer.files ]);
                    return xhrupload(e.dataTransfer.files, $this.options);
                }
            }).on("dragenter", function(e) {
                e.stopPropagation();
                return e.preventDefault();
            }).on("dragover", function(e) {
                e.stopPropagation();
                e.preventDefault();
                if (!hasdragCls) {
                    $this.element.addClass($this.options.dragoverClass);
                    hasdragCls = true;
                }
            }).on("dragleave", function(e) {
                e.stopPropagation();
                e.preventDefault();
                $this.element.removeClass($this.options.dragoverClass);
                hasdragCls = false;
            });
        }
    });
    _c.support.ajaxupload = function() {
        var supportAjaxUploadProgressEvents, supportFileAPI, supportFormData;
        supportFileAPI = function() {
            var fi;
            fi = document.createElement("INPUT");
            fi.type = "file";
            return "files" in fi;
        };
        supportAjaxUploadProgressEvents = function() {
            var xhr;
            xhr = new XMLHttpRequest();
            return !!(xhr && "upload" in xhr && "onprogress" in xhr.upload);
        };
        supportFormData = function() {
            return !!window.FormData;
        };
        return supportFileAPI() && supportAjaxUploadProgressEvents() && supportFormData();
    }();
    if (_c.support.ajaxupload) {
        _c.$.event.props.push("dataTransfer");
    }
    xhrupload.defaults = {
        action: "",
        single: true,
        method: "POST",
        param: "files[]",
        params: {},
        allow: "*.*",
        type: "text",
        filelimit: false,
        before: function(o) {},
        beforeSend: function(xhr) {},
        beforeAll: function() {},
        loadstart: function() {},
        load: function() {},
        loadend: function() {},
        error: function() {},
        abort: function() {},
        progress: function() {},
        complete: function() {},
        allcomplete: function() {},
        readystatechange: function() {},
        notallowed: function(file, settings) {
            return alert("Only the following file types are allowed : " + settings.allow);
        }
    };
    _c.utils.xhrupload = xhrupload;
    return xhrupload;
});