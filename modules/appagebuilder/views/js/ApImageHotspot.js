/**
 *  @Website: apollotheme.com - prestashop template provider
 *  @author Apollotheme <apollotheme@gmail.com>
 *  @copyright  Apollotheme
 *  @description: 
 */

(function(a) {
    a.fn.LiteTooltip = function(d, c) {
        return this.each(function() {
            var f = a.extend({}, a.fn.LiteTooltip.defaultSettings, d || {});
            var e = a(this);
            var g = new b(f, e);
            if (g.settings.title != "") {
                if (!e.is("input")) {
                    e.css({cursor: "pointer"})
                }
                var debug = (g.settings.debug != null ) ? ((g.settings.debug == "true" || g.settings.debug == true) ? true : false) : false;
                
                if (g.settings.trigger == "hoverable") {
                    this.toggle = false;
                    e.bind("mouseenter", {settings: g.settings, element: e, $plugin: g, $toggle: this.toggle}, g.mouseOverHandler);
                    if(!debug){
                        e.bind("mouseleave", {settings: g.settings, element: e, $plugin: g, $toggle: this.toggle}, g.mouseOutHandler)
                    }
                } else {
                    if (g.settings.trigger == "hover") {
                        e.bind("mouseenter", {settings: g.settings, element: e, $plugin: g}, g.mouseOverHandler);
                        if(!debug){
                            e.bind("mouseleave", {settings: g.settings, element: e, $plugin: g}, g.mouseOutHandler)
                        }
                    } else {
                        if (g.settings.trigger == "focus") {
                            e.bind("focus", {settings: g.settings, element: e, $plugin: g}, g.mouseOverHandler);
                            e.bind("blur", {settings: g.settings, element: e, $plugin: g}, g.mouseOutHandler)
                        } else {
                            if (g.settings.trigger == "click") {
                                this.toggle = false;
                                e.bind("click", {settings: g.settings, element: e, $plugin: g, $toggle: this.toggle}, g.mouseOverHandler);
                                if (!g.settings.issticky) {
                                    if(!debug){
                                        e.bind("mouseleave", {settings: g.settings, element: e, $plugin: g, $toggle: this.toggle}, g.mouseOutHandler)
                                    }
                                }
                            }
                        }
                    }
                }
            }
        })
    };
    function b(d, c) {
        this.settings = this.getSettings(d, c);
        this.$element = c;
        return this
    }
    b.prototype = {
        getSettings: function(f, d) {
            var e = (d.data("issticky") != null) ? ((d.data("issticky") == "true") ? true : false) : true;
            var c = a.extend({}, f, {
                location: d.data("location"),
                title: d.data("title"),
                backcolor: d.data("backcolor"),
                textalign: d.data("textalign"),
                trigger: d.data("trigger"),
                textcolor: d.data("textcolor"),
                opacity: d.data("opacity"),
                templatename: d.data("templatename"),
                width: d.data("width"),
                margin: d.data("margin"),
                padding: d.data("padding"),
                delay: d.data("delay"),
                issticky: e,
                container: d.data("container"),
                shadow: d.data("shadow")
            });
            return c
        }, mouseOverHandler: function(n) {
            if (typeof n.data.settings.onUpdate == "function") {
                n.data.settings.title = n.data.settings.onUpdate.call(this)
            }
            if (n.data.element.is("input")) {
                if (n.data.element.val() != "") {
                    return false
                }
            }
            if (n.data.settings.trigger == "click") {
                if (!n.data.$toggle) {
                    n.data.$toggle = true;
                    this.toggle = true;
                    n.data.element.unbind("click");
                    n.data.element.bind("click", {
                        settings: n.data.settings,
                        element: n.data.element,
                        $plugin: n.data.$plugin,
                        $toggle: n.data.$toggle
                    },
                    n.data.$plugin.mouseOutHandler)
                } else {
                    n.data.$toggle = false;
                    this.toggle = false;
                    return false
                }
            }
            var c = n.data.element;
            var d = n.data.settings;
            var R = parseInt(d.margin.toString().replace("px", ""));
            var T = parseInt(d.padding.toString().replace("px", ""));
            var Y = parseInt(d.width.toString().replace("px", ""));
            var Q = d.container == "body" ? d.location : "none";
            var N = d.backcolor;
            var X = d.textcolor;
            var W = d.textalign;
            var V = d.templatename;
            var P = d.delay;
            var K = a(d.template);
            K.css({opacity: d.opacity});
            K.css("visibility", "visible");
            K.find(".tooltip-content").css({"text-align": W}).html(d.title + d.clearfix);
            K.find(".tooltip-content").css({padding: T + "px"});
            
            K.find(".tooltip-content p").css({background: N});
            K.find(".tooltip-content p").css({color: X});
//            K.find(".tooltip-content").css({background: N});
//            K.find(".tooltip-content").css({color: X});
            if (d.shadow == 1) {
                K.find(".tooltip-content").css({"box-shadow": "1px 1px 3px 0px #888888"})
            }
            var M = Q;
            var L = Q.split("-")[0];
            var E = M;
            var D = L;
            K.removeClass(Q).addClass(M);
            K.find(".tooltip-arrow").removeClass(Q).addClass(M).css("border-" + L + "-color", N);
            var l = d.container;
            if (d.container != "body") {
                K.addClass("incontainer");
                l = "#" + d.container;
                a(l).children().each(function() {
                    a(this).remove()
                })
            } else {
                K.removeClass("incontainer");
                l = "body"
            }
            a(l).append(K);
            if (n.data.settings.trigger == "click") {
                var O = a('<div id="tooltip-clickoutside"></div>');
                O.css({
                    width: "100%",
                    height: "100%",
                    position: "absolute",
                    top: a(document).scrollTop() + "px",
                    left: "0px"
                });
                a("body").append(O);
                O.bind("click", {settings: n.data.settings, element: n.data.element, $plugin: n.data.$plugin, $toggle: n.data.$toggle}, n.data.$plugin.mouseOutHandler);
                n.data.$toggle = false;
                this.toggle = false
            } else {
                if (n.data.settings.trigger == "hoverable") {
                    n.data.element.unbind("mouseenter")
                }
            }
            if (d.container == "body") {
                K.offset({top: 0, left: 0});
                var ab = K.outerWidth();
                var Z = K.outerHeight();
                var ae = a(document).width();
                var G = scrollbarWidth();
                var ac = a(document).width() - a(window).width();
                if (ac > 0) {
                    ae = ae - G
                }
                if (ae > a(window).width()) {
                    ae = a(window).width() - G
                }
                var ad = a(document).height();
                if (ac > G) {
                    ad = ad - G
                }
                if (Y != 0) {
                    if (Y * 2 > ae) {
                        Y = Math.floor((ae / 2) - 30)
                    } else {
                        Y -= 30
                    }
                    if (Y * 1.5 > ae / 2) {
                        Y = Math.floor((ae / 2) - 30)
                    }
                } else {
                    if (340 * 2 > ae) {
                        Y = Math.floor((ae / 2) - 30)
                    } else {
                        Y = 340
                    }
                }
                K.css({"max-width": Y});
                ab = K.outerWidth();
                Z = K.outerHeight();
                var J = c[Object.keys(c)[0]];
                var r = J.offsetWidth;
                var o = J.offsetHeight;
                var q = c.offset().top;
                var p = c.offset().left;
                if (J.tagName.toLowerCase() == "area") {
                    var g = J.parentElement.getAttribute("name");
                    var h = J.getAttribute("shape").toLowerCase();
                    var x = a("img[usemap='#" + g + "']").offset().top;
                    var w = a("img[usemap='#" + g + "']").offset().left;
                    var j = parseInt(J.getAttribute("coords").split(",")[0]);
                    var k = parseInt(J.getAttribute("coords").split(",")[1]);
                    var i = parseInt(J.getAttribute("coords").split(",")[2]);
                    var f = parseInt(J.getAttribute("coords").split(",")[3] || i);
                    var v = {top: parseInt(x + k), left: parseInt(w + j)};
                    if (h == "circle") {
                        v = {top: parseInt(x + k - i), left: parseInt(w + j - i)};
                        i *= 2;
                        f *= 2
                    }
                    if (h == "rect") {
                        v = {top: parseInt(x + k), left: parseInt(w + j)};
                        i = i - j;
                        f = f - k
                    }
                    if (h == "poly") {
                        var m = new Array();
                        var H = J.getAttribute("coords").split(",");
                        for (var y = 0; y < H.length; ) {
                            m.push({x: parseInt(H[y]), y: parseInt(H[y + 1])});
                            y = y + 2
                        }
                        m.sort(function(e, af) {
                            var ag = e.x, ah = af.x;
                            if (ag == ah) {
                                return 0
                            }
                            return ag < ah ? 1 : -1
                        });
                        var z = m[0].x;
                        m.sort(function(e, af) {
                            var ag = e.y, ah = af.y;
                            if (ag == ah) {
                                return 0
                            }
                            return ag < ah ? 1 : -1
                        });
                        var A = m[0].y;
                        m.sort(function(e, af) {
                            var ag = e.x, ah = af.x;
                            if (ag == ah) {
                                return 0
                            }
                            return ag > ah ? 1 : -1
                        });
                        var B = m[0].x;
                        m.sort(function(e, af) {
                            var ag = e.y, ah = af.y;
                            if (ag == ah) {
                                return 0
                            }
                            return ag > ah ? 1 : -1
                        });
                        var C = m[0].y;
                        v = {top: parseInt(x + C), left: parseInt(w + B)};
                        i = z - B;
                        f = A - C
                    }
                    p = v.left;
                    q = v.top;
                    r = i;
                    o = f
                }
                p = Math.round(p);
                q = Math.round(q);
                r = Math.round(r);
                o = Math.round(o);
                K.offset({top: 0, left: 0});
                var S;
                switch (Q) {
                    case "top":
                        S = {top: (q - Z - R), left: p - (ab / 2) + (r / 2)};
                        break;
                    case "top-left":
                        S = {top: (q - Z - R), left: p};
                        break;
                    case "top-right":
                        S = {top: (q - Z - R), left: p - ab + r};
                        break;
                    case "right":
                        S = {top: (q + (o / 2) - (Z / 2)), left: p + r + R};
                        break;
                    case "right-top":
                        S = {top: (q + o - Z + 8), left: p + r + R};
                        break;
                    case "right-bottom":
                        S = {top: q - 8, left: p + r + R};
                        break;
                    case "bottom":
                        S = {top: (q + o + R), left: p - (ab / 2) + (r / 2)};
                        break;
                    case "bottom-left":
                        S = {top: (q + o + R), left: p};
                        break;
                    case "bottom-right":
                        S = {top: (q + o + R), left: p - ab + r};
                        break;
                    case "left":
                        S = {top: (q + (o / 2) - (Z / 2)), left: p - ab - R};
                        break;
                    case "left-top":
                        S = {top: (q + o - Z + 8), left: p - ab - R};
                        break;
                    case "left-bottom":
                        S = {top: q - 8, left: p - ab - R};
                        break
                }
                var F = {top: 0, left: 0};
                F.left = S.left;
                F.top = S.top;
                var aa = (((M.match("bottom") != null) || (M == "left") || (M == "right")) ? (((M == "left") || (M == "right")) ? (Z / 2) : (Z)) > (ad - q - o) : false);
                if ((S.left < 0) || (S.top < 0) || (S.left + ab > ae) || aa) {
                    if (L == "top" || L == "bottom" || L == "left" || L == "right") {
                        var u = false;
                        switch (L) {
                            case "top":
                                S.top = q - Z - R;
                                S.left = p - (ab / 2) + (r / 2);
                                u = true;
                                break;
                            case "bottom":
                                S.top = q - Z - R;
                                S.left = p - (ab / 2) + (r / 2);
                                u = true;
                                break;
                            case "left":
                                var I = M.replace(L + "-", "");
                                if (I == "top") {
                                    L = "top";
                                    M = "top-left";
                                    K.removeClass(E).addClass(M);
                                    K.find(".tooltip-arrow").removeClass(E).css("border-" + D + "-color", "").addClass(M).css("border-" + L + "-color", N);
                                    D = "top";
                                    E = "top-left";
                                    K.removeClass(Q).addClass(M);
                                    K.find(".tooltip-arrow").removeClass(Q).addClass(M).css("border-" + L + "-color", N);
                                    ab = K.outerWidth();
                                    Z = K.outerHeight();
                                    S.top = q - Z - R;
                                    S.left = p - (ab / 2) + (r / 2);
                                    F.left = p;
                                    F.top = q - Z - R;
                                    aa = (((M.match("bottom") != null) || (M == "left") || (M == "right")) ? (((M == "left") || (M == "right")) ? (Z / 2) : (Z)) > (ad - q - o) : false);
                                    if ((S.left < 0) || (S.top < 0) || (S.left + ab > ae) || aa) {
                                        u = true
                                    } else {
                                        S.left = F.left;
                                        S.top = F.top
                                    }
                                } else {
                                    if (I == "bottom") {
                                        L = "bottom";
                                        M = "bottom-left";
                                        K.removeClass(E).addClass(M);
                                        K.find(".tooltip-arrow").removeClass(E).css("border-" + D + "-color", "").addClass(M).css("border-" + L + "-color", N);
                                        D = "bottom";
                                        E = "bottom-left";
                                        K.removeClass(Q).addClass(M);
                                        K.find(".tooltip-arrow").removeClass(Q).addClass(M).css("border-" + L + "-color", N);
                                        ab = K.outerWidth();
                                        Z = K.outerHeight();
                                        S.top = q + o + R;
                                        S.left = p - (ab / 2) + (r / 2);
                                        F.left = p;
                                        F.top = q + o + R;
                                        aa = (((M.match("bottom") != null) || (M == "left") || (M == "right")) ? (((M == "left") || (M == "right")) ? (Z / 2) : (Z)) > (ad - q - o) : false);
                                        if ((S.left < 0) || (S.top < 0) || (S.left + ab > ae) || aa) {
                                            u = true
                                        } else {
                                            S.left = F.left;
                                            S.top = F.top
                                        }
                                    } else {
                                        L = "top";
                                        M = "top";
                                        K.removeClass(E).addClass(M);
                                        K.find(".tooltip-arrow").removeClass(E).css("border-" + D + "-color", "").addClass(M).css("border-" + L + "-color", N);
                                        D = "top";
                                        E = "top";
                                        K.removeClass(Q).addClass(M);
                                        K.find(".tooltip-arrow").removeClass(Q).addClass(M).css("border-" + L + "-color", N);
                                        ab = K.outerWidth();
                                        Z = K.outerHeight();
                                        S.top = q - Z - R;
                                        S.left = p - (ab / 2) + (r / 2);
                                        F.left = S.left;
                                        F.top = S.top;
                                        aa = (((M.match("bottom") != null) || (M == "left") || (M == "right")) ? (((M == "left") || (M == "right")) ? (Z / 2) : (Z)) > (ad - q - o) : false);
                                        if ((S.left < 0) || (S.top < 0) || (S.left + ab > ae) || aa) {
                                            u = true
                                        } else {
                                            S.left = F.left;
                                            S.top = F.top
                                        }
                                    }
                                }
                                break;
                            case "right":
                                var I = M.replace(L + "-", "");
                                if (I == "top") {
                                    L = "top";
                                    M = "top-left";
                                    K.removeClass(E).addClass(M);
                                    K.find(".tooltip-arrow").removeClass(E).css("border-" + D + "-color", "").addClass(M).css("border-" + L + "-color", N);
                                    D = "top";
                                    E = "top-left";
                                    K.removeClass(Q).addClass(M);
                                    K.find(".tooltip-arrow").removeClass(Q).addClass(M).css("border-" + L + "-color", N);
                                    ab = K.outerWidth();
                                    Z = K.outerHeight();
                                    S.top = q - Z - R;
                                    S.left = p - (ab / 2) + (r / 2);
                                    F.left = p;
                                    F.top = q - Z - R;
                                    aa = (((M.match("bottom") != null) || (M == "left") || (M == "right")) ? (((M == "left") || (M == "right")) ? (Z / 2) : (Z)) > (ad - q - o) : false);
                                    if ((S.left < 0) || (S.top < 0) || (S.left + ab > ae) || aa) {
                                        u = true
                                    } else {
                                        S.left = F.left;
                                        S.top = F.top
                                    }
                                } else {
                                    if (I == "bottom") {
                                        L = "bottom";
                                        M = "bottom-left";
                                        K.removeClass(E).addClass(M);
                                        K.find(".tooltip-arrow").removeClass(E).css("border-" + D + "-color", "").addClass(M).css("border-" + L + "-color", N);
                                        D = "bottom";
                                        E = "bottom-left";
                                        K.removeClass(Q).addClass(M);
                                        K.find(".tooltip-arrow").removeClass(Q).addClass(M).css("border-" + L + "-color", N);
                                        ab = K.outerWidth();
                                        Z = K.outerHeight();
                                        S.top = q - Z - R;
                                        S.left = p - (ab / 2) + (r / 2);
                                        F.left = p;
                                        F.top = q + o + R;
                                        aa = (((M.match("bottom") != null) || (M == "left") || (M == "right")) ? (((M == "left") || (M == "right")) ? (Z / 2) : (Z)) > (ad - q - o) : false);
                                        if ((S.left < 0) || (S.top < 0) || (S.left + ab > ae) || aa) {
                                            u = true
                                        } else {
                                            S.left = F.left;
                                            S.top = F.top
                                        }
                                    } else {
                                        L = "top";
                                        M = "top";
                                        K.removeClass(E).addClass(M);
                                        K.find(".tooltip-arrow").removeClass(E).css("border-" + D + "-color", "").addClass(M).css("border-" + L + "-color", N);
                                        D = "top";
                                        E = "top";
                                        K.removeClass(Q).addClass(M);
                                        K.find(".tooltip-arrow").removeClass(Q).addClass(M).css("border-" + L + "-color", N);
                                        ab = K.outerWidth();
                                        Z = K.outerHeight();
                                        S.top = q - Z - R;
                                        S.left = p - (ab / 2) + (r / 2);
                                        F.left = S.left;
                                        F.top = S.top;
                                        aa = (((M.match("bottom") != null) || (M == "left") || (M == "right")) ? (((M == "left") || (M == "right")) ? (Z / 2) : (Z)) > (ad - q - o) : false);
                                        if ((S.left < 0) || (S.top < 0) || (S.left + ab > ae) || aa) {
                                            u = true
                                        } else {
                                            S.left = F.left;
                                            S.top = F.top
                                        }
                                    }
                                }
                                break
                        }
                        if (u) {
                            var s = false;
                            var t = false;
                            if (S.top < 0) {
                                L = "bottom";
                                M = "bottom";
                                S.top = q + o + R;
                                t = true;
                                if (S.left < 0) {
                                    L = "bottom";
                                    M = "bottom-left";
                                    S.left = p;
                                    s = true
                                }
                                if (S.left + ab > ae) {
                                    S.left = p - ab + r;
                                    if (S.left < 0) {
                                        L = "bottom";
                                        M = "bottom";
                                        S.left = p - (ab / 2) + (r / 2);
                                        s = true
                                    } else {
                                        L = "bottom";
                                        M = "bottom-right";
                                        S.left = p - ab + r;
                                        s = true
                                    }
                                }
                            } else {
                                L = "top";
                                M = "top";
                                S.top = q - Z - R;
                                t = false;
                                if (S.left < 0) {
                                    L = "top";
                                    M = "top-left";
                                    S.left = p;
                                    s = true
                                }
                                if (S.left + ab > ae) {
                                    S.left = p - ab + r;
                                    if (S.left < 0) {
                                        L = "top";
                                        M = "top";
                                        S.left = p - (ab / 2) + (r / 2);
                                        s = true
                                    } else {
                                        L = "top";
                                        M = "top-right";
                                        S.left = p - ab + r;
                                        s = true
                                    }
                                }
                            }
                            if (!s) {
                                if (t) {
                                    M = E.replace("top", "bottom");
                                    L = D.replace("top", "bottom");
                                    if (F.left < 0) {
                                        if (L == "bottom" || L == "top") {
                                            M = M.replace("right", "left");
                                            S.left = p
                                        }
                                    } else {
                                        S.left = F.left
                                    }
                                } else {
                                    M = E.replace("bottom", "top");
                                    L = D.replace("bottom", "top");
                                    if (F.left < 0) {
                                        if (L == "bottom" || L == "top") {
                                            M = M.replace("right", "left");
                                            S.left = p
                                        }
                                    } else {
                                        S.left = F.left
                                    }
                                }
                            }
                        }
                    }
                }
                K.removeClass(E).addClass(M);
                K.find(".tooltip-arrow").removeClass(E).css("border-" + D + "-color", "").addClass(M).css("border-" + L + "-color", N);
                if (V != "") {
                    if (K.find(".tooltip-content > .template").hasClass("template")) {
                        K.find(".tooltip-content > .template").addClass(V);
                        var U = K.find("." + V).css("background-color");
//                        K.find(".tooltip-arrow").css("border-" + D + "-color", "");
//                        K.find(".tooltip-arrow").css("border-" + L + "-color", U);
                        //K.find(".tooltip-content").css({background: U})       // Fix background-color
                    } else {
                        if (K.find(".tooltip-content > .tooltip-menu").hasClass("tooltip-menu")) {
                            K.find(".tooltip-content > .tooltip-menu").addClass(V);
                            var U = K.find("." + V).css("background-color");
                            K.find(".tooltip-arrow").css("border-" + D + "-color", "");
                            K.find(".tooltip-arrow").css("border-" + L + "-color", U);
                            K.find(".tooltip-content").css({background: U})
                        }
                    }
                }
                K.find(".tooltip-content > .video-wrapper").css({width: (K.width() - (T * 2)) + "px"});
                K.offset(S)
            }
            K.hide();
            c.removeAttr("title");
            c.removeAttr("alt");
            if (n.data.settings.trigger == "hoverable" || n.data.settings.trigger == "click") {
                P = 0
            }
            switch (L) {
                case "top":
                    K.delay(P).css({top: "-=20", opacity: 0, display: "block"}).stop(true, true).animate({top: "+=20", opacity: d.opacity}, 150);
                    break;
                case "bottom":
                    K.delay(P).css({top: "+=20", opacity: 0, display: "block"}).stop(true, true).animate({top: "-=20", opacity: d.opacity}, 150);
                    break;
                case "left":
                    K.delay(P).css({left: "-=20", opacity: 0, display: "block"}).stop(true, true).animate({left: "+=20", opacity: d.opacity}, 150);
                    break;
                case "right":
                    K.delay(P).css({left: "+=20", opacity: 0, display: "block"}).stop(true, true).animate({left: "-=20", opacity: d.opacity}, 150);
                    break;
                default:
                    K.delay(P).css({opacity: 0, display: "block"}).stop(true, true).animate({opacity: d.opacity}, 150);
                    break
            }
            n.data.$plugin.tooltip = K;
            n.data.$plugin.location = Q;
            n.data.$plugin.tooltip_arrow_border = L;
            K = null;
            return false
        }, mouseOutHandler: function(d) {
            var f = d.data.$plugin.tooltip;
            var g = d.data.$plugin.location;
            var c = false;
            if (d.data.settings.trigger != "hoverable") {
                if (d.data.settings.trigger == "hover") {
                    a(f).delay(d.data.settings.delay);
                    c = true
                } else {
                    c = true;
                    if (d.data.settings.trigger == "click") {
                        if (!d.data.settings.issticky) {
                            d.data.settings.interval = setInterval(function() {
                                a(f).fadeOut(0, function() {
                                    a(d.data.$plugin.tooltip).remove()
                                });
                                clearInterval(d.data.settings.interval);
                                this.toggle = false;
                                d.data.$toggle = false;
                                d.data.element.unbind("click");
                                d.data.element.unbind("mouseleave");
                                d.data.element.bind("click", {settings: d.data.settings, element: d.data.element, $plugin: d.data.$plugin, $toggle: false}, d.data.$plugin.mouseOverHandler);
                                d.data.element.bind("mouseleave", {settings: d.data.settings, element: d.data.element, $plugin: d.data.$plugin, $toggle: false}, d.data.$plugin.mouseOutHandler)
                            }, d.data.settings.delay == 0 ? 2000 : d.data.settings.delay);
                            d.data.element.unbind("mouseleave");
                            a(f).find(".tooltip-content").bind("mouseenter", {settings: d.data.settings, element: d.data.element, $plugin: d.data.$plugin, $toggle: true}, function() {
                                d.data.element.unbind("click");
                                d.data.element.unbind("mouseleave");
                                this.toggle = true;
                                d.data.$toggle = true;
                                clearInterval(d.data.settings.interval)
                            });
                            a(f).find(".tooltip-content").bind("mouseleave", {settings: d.data.settings, element: d.data.element, $plugin: d.data.$plugin, $toggle: d.data.$toggle}, function() {
                                a(f).fadeOut(0, function() {
                                    a(d.data.$plugin.tooltip).remove()
                                });
                                this.toggle = false;
                                d.data.$toggle = false;
                                d.data.element.unbind("click");
                                d.data.element.unbind("mouseleave");
                                d.data.element.bind("click", {settings: d.data.settings, element: d.data.element, $plugin: d.data.$plugin, $toggle: false}, d.data.$plugin.mouseOverHandler);
                                d.data.element.bind("mouseleave", {settings: d.data.settings, element: d.data.element, $plugin: d.data.$plugin, $toggle: false}, d.data.$plugin.mouseOutHandler)
                            });
                            c = false
                        } else {
                            c = true
                        }
                    }
                }
            } else {
                d.data.settings.interval = setInterval(function() {
                    a(f).fadeOut(0, function() {
                        a(d.data.$plugin.tooltip).remove()
                    });
                    clearInterval(d.data.settings.interval);
                    d.data.element.unbind("mouseleave");
                    d.data.element.unbind("mouseenter");
                    d.data.element.bind("mouseenter", {settings: d.data.settings, element: d.data.element, $plugin: d.data.$plugin, $toggle: false}, d.data.$plugin.mouseOverHandler);
                    d.data.element.bind("mouseleave", {settings: d.data.settings, element: d.data.element, $plugin: d.data.$plugin, $toggle: false}, d.data.$plugin.mouseOutHandler)
                }, d.data.settings.delay == 0 ? 2000 : d.data.settings.delay);
                d.data.element.unbind("mouseleave");
                a(f).find(".tooltip-content").bind("mouseenter", {settings: d.data.settings, element: d.data.element, $plugin: d.data.$plugin, $toggle: true}, function() {
                    d.data.element.unbind("mouseenter");
                    d.data.element.unbind("mouseleave");
                    this.toggle = true;
                    d.data.$toggle = true;
                    clearInterval(d.data.settings.interval)
                });
                a(f).find(".tooltip-content").bind("mouseleave", {settings: d.data.settings, element: d.data.element, $plugin: d.data.$plugin, $toggle: true}, function() {
                    a(f).fadeOut(0, function() {
                        a(d.data.$plugin.tooltip).remove()
                    });
                    this.toggle = false;
                    d.data.$toggle = false;
                    d.data.element.unbind("mouseleave");
                    d.data.element.unbind("mouseenter");
                    d.data.element.bind("mouseenter", {settings: d.data.settings, element: d.data.element, $plugin: d.data.$plugin, $toggle: false}, d.data.$plugin.mouseOverHandler);
                    d.data.element.bind("mouseleave", {settings: d.data.settings, element: d.data.element, $plugin: d.data.$plugin, $toggle: false}, d.data.$plugin.mouseOutHandler)
                });
                c = false
            }
            if (c) {
                switch (d.data.$plugin.tooltip_arrow_border) {
                    case "top":
                        a(f).stop(true, true).animate({top: "-=20", opacity: 0}, 150, function() {
                            a(d.data.$plugin.tooltip).remove()
                        });
                        break;
                    case "bottom":
                        a(f).stop(true, true).animate({top: "+=20", opacity: 0}, 150, function() {
                            a(d.data.$plugin.tooltip).remove()
                        });
                        break;
                    case "left":
                        a(f).stop(true, true).animate({left: "-=20", opacity: 0}, 150, function() {
                            a(d.data.$plugin.tooltip).remove()
                        });
                        break;
                    case "right":
                        a(f).stop(true, true).animate({left: "+=20", opacity: 0}, 150, function() {
                            a(d.data.$plugin.tooltip).remove()
                        });
                        break
                }
                a(d.data.$plugin.tooltip).remove()
            }
            if (d.data.settings.trigger == "click") {
                if (d.data.$toggle) {
                    a("body").find("#tooltip-clickoutside").remove();
                    this.toggle = false;
                    d.data.$toggle = false;
                    d.data.element.unbind("click");
                    d.data.element.unbind("mouseleave");
                    d.data.element.bind("click", {settings: d.data.settings, element: d.data.element, $plugin: d.data.$plugin, $toggle: d.data.$toggle}, d.data.$plugin.mouseOverHandler);
                    if (!d.data.settings.issticky) {
                        d.data.element.bind("mouseleave", {settings: d.data.settings, element: d.data.element, $plugin: d.data.$plugin, $toggle: d.data.$toggle}, d.data.$plugin.mouseOutHandler)
                    }
                }
            }
            return false
        }};
    scrollbarWidth = function() {
        var c = a('<div style="width:50px;height:50px;overflow:hidden;position:absolute;top:-200px;left:-200px;"><div style="height:100px;"></div>');
        a("body").append(c);
        var d = a("div", c).innerWidth();
        c.css("overflow", "scroll");
        var e = a("div", c).innerWidth();
        a(c).remove();
        return (d - e)
    };
    a.fn.LiteTooltip.defaultSettings = {
        location: "top",
        title: "",
        opacity: 0.89,
        backcolor: "#000000",
        textcolor: "#ffffff",
        template: '<div class="litetooltip-wrapper"><div class="tooltip-arrow"></div><div class="tooltip-content"></div></div>',
        margin: 5,
        padding: 10,
        width: 0,
        textalign: "center",
        trigger: "hover",
        templatename: "",
        delay: 0,
        issticky: true,
        clearfix: '<div class="clear"></div>',
        container: "body",
        shadow: 1
    }
})(jQuery);