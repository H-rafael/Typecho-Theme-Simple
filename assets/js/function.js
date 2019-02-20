/**
 * Created by ipmac on 2019/1/14.
 */

$(function () {
    if ($("#comment-cur-avatar").length) {
        var t = document.getElementById("comment-cur-avatar"),
            n = document.getElementById("mail");
        function e() {
            email_value = n.value,
                email_md5 = hex_md5(email_value),
                new_gravatar = THEME_CONFIG.GRAVATAR_PREFIX + email_md5 + "?s=128&r=G",
                t.setAttribute("src", new_gravatar)
        }
        n.value && e(),
            -1 != navigator.userAgent.toLowerCase().indexOf("webkit") ? n.onblur = e: n.onchange = e,
            e()
    }
})
var hexcase = 0,
    b64pad = "";
function hex_md5(t) {
    return rstr2hex(rstr_md5(str2rstr_utf8(t)))
}

function rstr2hex(t) {
    for (var n, e = hexcase ? "0123456789ABCDEF": "0123456789abcdef", o = "", i = 0; i < t.length; i++) n = t.charCodeAt(i),
        o += e.charAt(n >>> 4 & 15) + e.charAt(15 & n);
    return o
}
function rstr_md5(t) {
    return binl2rstr(binl_md5(rstr2binl(t), 8 * t.length))
}

function str2rstr_utf8(t) {
    for (var n, e, o = "",
             i = -1; ++i < t.length;) n = t.charCodeAt(i),
        e = i + 1 < t.length ? t.charCodeAt(i + 1) : 0,
    55296 <= n && n <= 56319 && 56320 <= e && e <= 57343 && (n = 65536 + ((1023 & n) << 10) + (1023 & e), i++),
        n <= 127 ? o += String.fromCharCode(n) : n <= 2047 ? o += String.fromCharCode(192 | n >>> 6 & 31, 128 | 63 & n) : n <= 65535 ? o += String.fromCharCode(224 | n >>> 12 & 15, 128 | n >>> 6 & 63, 128 | 63 & n) : n <= 2097151 && (o += String.fromCharCode(240 | n >>> 18 & 7, 128 | n >>> 12 & 63, 128 | n >>> 6 & 63, 128 | 63 & n));
    return o
}

function rstr2binl(t) {
    for (var n = Array(t.length >> 2), e = 0; e < n.length; e++) n[e] = 0;
    for (e = 0; e < 8 * t.length; e += 8) n[e >> 5] |= (255 & t.charCodeAt(e / 8)) << e % 32;
    return n
}
function binl2rstr(t) {
    for (var n = "",
             e = 0; e < 32 * t.length; e += 8) n += String.fromCharCode(t[e >> 5] >>> e % 32 & 255);
    return n
}
function binl_md5(t, n) {
    t[n >> 5] |= 128 << n % 32,
        t[14 + (n + 64 >>> 9 << 4)] = n;
    for (var e = 1732584193,
             o = -271733879,
             i = -1732584194,
             r = 271733878,
             a = 0; a < t.length; a += 16) {
        var s = e,
            c = o,
            l = i,
            d = r;
        o = md5_ii(o = md5_ii(o = md5_ii(o = md5_ii(o = md5_hh(o = md5_hh(o = md5_hh(o = md5_hh(o = md5_gg(o = md5_gg(o = md5_gg(o = md5_gg(o = md5_ff(o = md5_ff(o = md5_ff(o = md5_ff(o, i = md5_ff(i, r = md5_ff(r, e = md5_ff(e, o, i, r, t[a + 0], 7, -680876936), o, i, t[a + 1], 12, -389564586), e, o, t[a + 2], 17, 606105819), r, e, t[a + 3], 22, -1044525330), i = md5_ff(i, r = md5_ff(r, e = md5_ff(e, o, i, r, t[a + 4], 7, -176418897), o, i, t[a + 5], 12, 1200080426), e, o, t[a + 6], 17, -1473231341), r, e, t[a + 7], 22, -45705983), i = md5_ff(i, r = md5_ff(r, e = md5_ff(e, o, i, r, t[a + 8], 7, 1770035416), o, i, t[a + 9], 12, -1958414417), e, o, t[a + 10], 17, -42063), r, e, t[a + 11], 22, -1990404162), i = md5_ff(i, r = md5_ff(r, e = md5_ff(e, o, i, r, t[a + 12], 7, 1804603682), o, i, t[a + 13], 12, -40341101), e, o, t[a + 14], 17, -1502002290), r, e, t[a + 15], 22, 1236535329), i = md5_gg(i, r = md5_gg(r, e = md5_gg(e, o, i, r, t[a + 1], 5, -165796510), o, i, t[a + 6], 9, -1069501632), e, o, t[a + 11], 14, 643717713), r, e, t[a + 0], 20, -373897302), i = md5_gg(i, r = md5_gg(r, e = md5_gg(e, o, i, r, t[a + 5], 5, -701558691), o, i, t[a + 10], 9, 38016083), e, o, t[a + 15], 14, -660478335), r, e, t[a + 4], 20, -405537848), i = md5_gg(i, r = md5_gg(r, e = md5_gg(e, o, i, r, t[a + 9], 5, 568446438), o, i, t[a + 14], 9, -1019803690), e, o, t[a + 3], 14, -187363961), r, e, t[a + 8], 20, 1163531501), i = md5_gg(i, r = md5_gg(r, e = md5_gg(e, o, i, r, t[a + 13], 5, -1444681467), o, i, t[a + 2], 9, -51403784), e, o, t[a + 7], 14, 1735328473), r, e, t[a + 12], 20, -1926607734), i = md5_hh(i, r = md5_hh(r, e = md5_hh(e, o, i, r, t[a + 5], 4, -378558), o, i, t[a + 8], 11, -2022574463), e, o, t[a + 11], 16, 1839030562), r, e, t[a + 14], 23, -35309556), i = md5_hh(i, r = md5_hh(r, e = md5_hh(e, o, i, r, t[a + 1], 4, -1530992060), o, i, t[a + 4], 11, 1272893353), e, o, t[a + 7], 16, -155497632), r, e, t[a + 10], 23, -1094730640), i = md5_hh(i, r = md5_hh(r, e = md5_hh(e, o, i, r, t[a + 13], 4, 681279174), o, i, t[a + 0], 11, -358537222), e, o, t[a + 3], 16, -722521979), r, e, t[a + 6], 23, 76029189), i = md5_hh(i, r = md5_hh(r, e = md5_hh(e, o, i, r, t[a + 9], 4, -640364487), o, i, t[a + 12], 11, -421815835), e, o, t[a + 15], 16, 530742520), r, e, t[a + 2], 23, -995338651), i = md5_ii(i, r = md5_ii(r, e = md5_ii(e, o, i, r, t[a + 0], 6, -198630844), o, i, t[a + 7], 10, 1126891415), e, o, t[a + 14], 15, -1416354905), r, e, t[a + 5], 21, -57434055), i = md5_ii(i, r = md5_ii(r, e = md5_ii(e, o, i, r, t[a + 12], 6, 1700485571), o, i, t[a + 3], 10, -1894986606), e, o, t[a + 10], 15, -1051523), r, e, t[a + 1], 21, -2054922799), i = md5_ii(i, r = md5_ii(r, e = md5_ii(e, o, i, r, t[a + 8], 6, 1873313359), o, i, t[a + 15], 10, -30611744), e, o, t[a + 6], 15, -1560198380), r, e, t[a + 13], 21, 1309151649), i = md5_ii(i, r = md5_ii(r, e = md5_ii(e, o, i, r, t[a + 4], 6, -145523070), o, i, t[a + 11], 10, -1120210379), e, o, t[a + 2], 15, 718787259), r, e, t[a + 9], 21, -343485551),
            e = safe_add(e, s),
            o = safe_add(o, c),
            i = safe_add(i, l),
            r = safe_add(r, d)
    }
    return Array(e, o, i, r)
}
function md5_cmn(t, n, e, o, i, r) {
    return safe_add(bit_rol(safe_add(safe_add(n, t), safe_add(o, r)), i), e)
}
function md5_ff(t, n, e, o, i, r, a) {
    return md5_cmn(n & e | ~n & o, t, n, i, r, a)
}
function md5_gg(t, n, e, o, i, r, a) {
    return md5_cmn(n & o | e & ~o, t, n, i, r, a)
}
function md5_hh(t, n, e, o, i, r, a) {
    return md5_cmn(n ^ e ^ o, t, n, i, r, a)
}
function md5_ii(t, n, e, o, i, r, a) {
    return md5_cmn(e ^ (n | ~o), t, n, i, r, a)
}
function safe_add(t, n) {
    var e = (65535 & t) + (65535 & n);
    return (t >> 16) + (n >> 16) + (e >> 16) << 16 | 65535 & e
}
function binl2rstr(t) {
    for (var n = "",
             e = 0; e < 32 * t.length; e += 8) n += String.fromCharCode(t[e >> 5] >>> e % 32 & 255);
    return n
}


function binl_md5(t, n) {
    t[n >> 5] |= 128 << n % 32,
        t[14 + (n + 64 >>> 9 << 4)] = n;
    for (var e = 1732584193,
             o = -271733879,
             i = -1732584194,
             r = 271733878,
             a = 0; a < t.length; a += 16) {
        var s = e,
            c = o,
            l = i,
            d = r;
        o = md5_ii(o = md5_ii(o = md5_ii(o = md5_ii(o = md5_hh(o = md5_hh(o = md5_hh(o = md5_hh(o = md5_gg(o = md5_gg(o = md5_gg(o = md5_gg(o = md5_ff(o = md5_ff(o = md5_ff(o = md5_ff(o, i = md5_ff(i, r = md5_ff(r, e = md5_ff(e, o, i, r, t[a + 0], 7, -680876936), o, i, t[a + 1], 12, -389564586), e, o, t[a + 2], 17, 606105819), r, e, t[a + 3], 22, -1044525330), i = md5_ff(i, r = md5_ff(r, e = md5_ff(e, o, i, r, t[a + 4], 7, -176418897), o, i, t[a + 5], 12, 1200080426), e, o, t[a + 6], 17, -1473231341), r, e, t[a + 7], 22, -45705983), i = md5_ff(i, r = md5_ff(r, e = md5_ff(e, o, i, r, t[a + 8], 7, 1770035416), o, i, t[a + 9], 12, -1958414417), e, o, t[a + 10], 17, -42063), r, e, t[a + 11], 22, -1990404162), i = md5_ff(i, r = md5_ff(r, e = md5_ff(e, o, i, r, t[a + 12], 7, 1804603682), o, i, t[a + 13], 12, -40341101), e, o, t[a + 14], 17, -1502002290), r, e, t[a + 15], 22, 1236535329), i = md5_gg(i, r = md5_gg(r, e = md5_gg(e, o, i, r, t[a + 1], 5, -165796510), o, i, t[a + 6], 9, -1069501632), e, o, t[a + 11], 14, 643717713), r, e, t[a + 0], 20, -373897302), i = md5_gg(i, r = md5_gg(r, e = md5_gg(e, o, i, r, t[a + 5], 5, -701558691), o, i, t[a + 10], 9, 38016083), e, o, t[a + 15], 14, -660478335), r, e, t[a + 4], 20, -405537848), i = md5_gg(i, r = md5_gg(r, e = md5_gg(e, o, i, r, t[a + 9], 5, 568446438), o, i, t[a + 14], 9, -1019803690), e, o, t[a + 3], 14, -187363961), r, e, t[a + 8], 20, 1163531501), i = md5_gg(i, r = md5_gg(r, e = md5_gg(e, o, i, r, t[a + 13], 5, -1444681467), o, i, t[a + 2], 9, -51403784), e, o, t[a + 7], 14, 1735328473), r, e, t[a + 12], 20, -1926607734), i = md5_hh(i, r = md5_hh(r, e = md5_hh(e, o, i, r, t[a + 5], 4, -378558), o, i, t[a + 8], 11, -2022574463), e, o, t[a + 11], 16, 1839030562), r, e, t[a + 14], 23, -35309556), i = md5_hh(i, r = md5_hh(r, e = md5_hh(e, o, i, r, t[a + 1], 4, -1530992060), o, i, t[a + 4], 11, 1272893353), e, o, t[a + 7], 16, -155497632), r, e, t[a + 10], 23, -1094730640), i = md5_hh(i, r = md5_hh(r, e = md5_hh(e, o, i, r, t[a + 13], 4, 681279174), o, i, t[a + 0], 11, -358537222), e, o, t[a + 3], 16, -722521979), r, e, t[a + 6], 23, 76029189), i = md5_hh(i, r = md5_hh(r, e = md5_hh(e, o, i, r, t[a + 9], 4, -640364487), o, i, t[a + 12], 11, -421815835), e, o, t[a + 15], 16, 530742520), r, e, t[a + 2], 23, -995338651), i = md5_ii(i, r = md5_ii(r, e = md5_ii(e, o, i, r, t[a + 0], 6, -198630844), o, i, t[a + 7], 10, 1126891415), e, o, t[a + 14], 15, -1416354905), r, e, t[a + 5], 21, -57434055), i = md5_ii(i, r = md5_ii(r, e = md5_ii(e, o, i, r, t[a + 12], 6, 1700485571), o, i, t[a + 3], 10, -1894986606), e, o, t[a + 10], 15, -1051523), r, e, t[a + 1], 21, -2054922799), i = md5_ii(i, r = md5_ii(r, e = md5_ii(e, o, i, r, t[a + 8], 6, 1873313359), o, i, t[a + 15], 10, -30611744), e, o, t[a + 6], 15, -1560198380), r, e, t[a + 13], 21, 1309151649), i = md5_ii(i, r = md5_ii(r, e = md5_ii(e, o, i, r, t[a + 4], 6, -145523070), o, i, t[a + 11], 10, -1120210379), e, o, t[a + 2], 15, 718787259), r, e, t[a + 9], 21, -343485551),
            e = safe_add(e, s),
            o = safe_add(o, c),
            i = safe_add(i, l),
            r = safe_add(r, d)
    }
    return Array(e, o, i, r)
}
function md5_cmn(t, n, e, o, i, r) {
    return safe_add(bit_rol(safe_add(safe_add(n, t), safe_add(o, r)), i), e)
}
function md5_ff(t, n, e, o, i, r, a) {
    return md5_cmn(n & e | ~n & o, t, n, i, r, a)
}
function md5_gg(t, n, e, o, i, r, a) {
    return md5_cmn(n & o | e & ~o, t, n, i, r, a)
}
function md5_hh(t, n, e, o, i, r, a) {
    return md5_cmn(n ^ e ^ o, t, n, i, r, a)
}
function md5_ii(t, n, e, o, i, r, a) {
    return md5_cmn(e ^ (n | ~o), t, n, i, r, a)
}
function safe_add(t, n) {
    var e = (65535 & t) + (65535 & n);
    return (t >> 16) + (n >> 16) + (e >> 16) << 16 | 65535 & e
}
function bit_rol(t, n) {
    return t << n | t >>> 32 - n
}

new OwO({
    logo: '<i class="iconfont icon-aria-emotion"></i>表情',
    container: document.getElementsByClassName("OwO")[0],
    target: document.getElementsByClassName("textarea")[0],
    api: THEME_CONFIG.OWO_JSON,
    position: "down",
    width: "100%",
    maxHeight: "250px"
})


$('.el-menu-item').mousemove(function () {
    var val = $(this).attr('val');
    $('#menu_'+val).show();
})
$('.el-menu-item').mouseout(function () {
    var val = $(this).attr('val');
    $('#menu_'+val).hide();//就隐藏div
})

$(function () {
    var url = $('#hitokoto').attr('val_url');
    $.get(url,function (t) {
        $("#hitokoto").html(t)
    })
})
function menu_select(sign) {
    if($('#dropdown-menu-5411').is(':hidden')){//如果当前隐藏
        $('#dropdown-menu-5411').show();//那么就显示div
    }else{//否则
        $('#dropdown-menu-5411').hide();//就隐藏div
    }
}

$(function () {
    $("#search-box").css("display") && $("#search-box").css("display", "none");
    $("#nav-search-btn").on("click", function() {
        $("#search-box").css("display", "flex");
        $("#search-box").animateCss("zoomIn", function(t) {})
    });
    $("#search-box>.close").on("click", function() {
        $("#search-box").hide()
    })
})

$('.post-reward').click(function () {
    if($('.post-reward ul').is(':hidden')){//如果当前隐藏
        $('.post-reward ul').show();
    }else{//否则
        $('.post-reward ul').hide();//就隐藏div
    }
})


$.fn.extend({
    animateCss: function(t, n) {
        var e = function(t) {
            var n = {
                animation: "animationend",
                OAnimation: "oAnimationEnd",
                MozAnimation: "mozAnimationEnd",
                WebkitAnimation: "webkitAnimationEnd"
            };
            for (var e in n) if (void 0 !== t.style[e]) return n[e]
        } (document.createElement("div"));
        return this.addClass("animated " + t).one(e,
            function() {
                $(this).removeClass("animated " + t),
                "function" == typeof n && n($(this))
            }),
            this
    }
})

!
    function(t, n) {
        "use strict";
        "function" == typeof define && define.amd ? define([], n) : "object" == typeof exports ? module.exports = n() : t.Headroom = n()
    }(this,
        function() {
            "use strict";
            function t(t) {
                this.callback = t,
                    this.ticking = !1
            }
            function o(t, n) {
                var e;
                n = function t(n) {
                    if (arguments.length <= 0) throw new Error("Missing arguments in extend function");
                    var e, o, i, r = n || {};
                    for (o = 1; o < arguments.length; o++) {
                        var a = arguments[o] || {};
                        for (e in a)"object" != typeof r[e] || (i = r[e]) && "undefined" != typeof window && (i === window || i.nodeType) ? r[e] = r[e] || a[e] : r[e] = t(r[e], a[e])
                    }
                    return r
                } (n, o.options),
                    this.lastKnownScrollY = 0,
                    this.elem = t,
                    this.tolerance = (e = n.tolerance) === Object(e) ? e: {
                        down: e,
                        up: e
                    },
                    this.classes = n.classes,
                    this.offset = n.offset,
                    this.scroller = n.scroller,
                    this.initialised = !1,
                    this.onPin = n.onPin,
                    this.onUnpin = n.onUnpin,
                    this.onTop = n.onTop,
                    this.onNotTop = n.onNotTop,
                    this.onBottom = n.onBottom,
                    this.onNotBottom = n.onNotBottom
            }
            var n = {
                bind: !!
                    function() {}.bind,
                classList: "classList" in document.documentElement,
                rAF: !!(window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame)
            };
            return window.requestAnimationFrame = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame,
                t.prototype = {
                    constructor: t,
                    update: function() {
                        this.callback && this.callback(),
                            this.ticking = !1
                    },
                    requestTick: function() {
                        this.ticking || (requestAnimationFrame(this.rafCallback || (this.rafCallback = this.update.bind(this))), this.ticking = !0)
                    },
                    handleEvent: function() {
                        this.requestTick()
                    }
                },
                o.prototype = {
                    constructor: o,
                    init: function() {
                        if (o.cutsTheMustard) return this.debouncer = new t(this.update.bind(this)),
                            this.elem.classList.add(this.classes.initial),
                            setTimeout(this.attachEvent.bind(this), 100),
                            this
                    },
                    destroy: function() {
                        var t = this.classes;
                        for (var n in this.initialised = !1,
                            t) t.hasOwnProperty(n) && this.elem.classList.remove(t[n]);
                        this.scroller.removeEventListener("scroll", this.debouncer, !1)
                    },
                    attachEvent: function() {
                        this.initialised || (this.lastKnownScrollY = this.getScrollY(), this.initialised = !0, this.scroller.addEventListener("scroll", this.debouncer, !1), this.debouncer.handleEvent())
                    },
                    unpin: function() {
                        var t = this.elem.classList,
                            n = this.classes; ! t.contains(n.pinned) && t.contains(n.unpinned) || (t.add(n.unpinned), t.remove(n.pinned), this.onUnpin && this.onUnpin.call(this))
                    },
                    pin: function() {
                        var t = this.elem.classList,
                            n = this.classes;
                        t.contains(n.unpinned) && (t.remove(n.unpinned), t.add(n.pinned), this.onPin && this.onPin.call(this))
                    },
                    top: function() {
                        var t = this.elem.classList,
                            n = this.classes;
                        t.contains(n.top) || (t.add(n.top), t.remove(n.notTop), this.onTop && this.onTop.call(this))
                    },
                    notTop: function() {
                        var t = this.elem.classList,
                            n = this.classes;
                        t.contains(n.notTop) || (t.add(n.notTop), t.remove(n.top), this.onNotTop && this.onNotTop.call(this))
                    },
                    bottom: function() {
                        var t = this.elem.classList,
                            n = this.classes;
                        t.contains(n.bottom) || (t.add(n.bottom), t.remove(n.notBottom), this.onBottom && this.onBottom.call(this))
                    },
                    notBottom: function() {
                        var t = this.elem.classList,
                            n = this.classes;
                        t.contains(n.notBottom) || (t.add(n.notBottom), t.remove(n.bottom), this.onNotBottom && this.onNotBottom.call(this))
                    },
                    getScrollY: function() {
                        return void 0 !== this.scroller.pageYOffset ? this.scroller.pageYOffset: void 0 !== this.scroller.scrollTop ? this.scroller.scrollTop: (document.documentElement || document.body.parentNode || document.body).scrollTop
                    },
                    getViewportHeight: function() {
                        return window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight
                    },
                    getElementPhysicalHeight: function(t) {
                        return Math.max(t.offsetHeight, t.clientHeight)
                    },
                    getScrollerPhysicalHeight: function() {
                        return this.scroller === window || this.scroller === document.body ? this.getViewportHeight() : this.getElementPhysicalHeight(this.scroller)
                    },
                    getDocumentHeight: function() {
                        var t = document.body,
                            n = document.documentElement;
                        return Math.max(t.scrollHeight, n.scrollHeight, t.offsetHeight, n.offsetHeight, t.clientHeight, n.clientHeight)
                    },
                    getElementHeight: function(t) {
                        return Math.max(t.scrollHeight, t.offsetHeight, t.clientHeight)
                    },
                    getScrollerHeight: function() {
                        return this.scroller === window || this.scroller === document.body ? this.getDocumentHeight() : this.getElementHeight(this.scroller)
                    },
                    isOutOfBounds: function(t) {
                        var n = t < 0,
                            e = t + this.getScrollerPhysicalHeight() > this.getScrollerHeight();
                        return n || e
                    },
                    toleranceExceeded: function(t, n) {
                        return Math.abs(t - this.lastKnownScrollY) >= this.tolerance[n]
                    },
                    shouldUnpin: function(t, n) {
                        var e = t > this.lastKnownScrollY,
                            o = t >= this.offset;
                        return e && o && n
                    },
                    shouldPin: function(t, n) {
                        var e = t < this.lastKnownScrollY,
                            o = t <= this.offset;
                        return e && n || o
                    },
                    update: function() {
                        var t = this.getScrollY(),
                            n = t > this.lastKnownScrollY ? "down": "up",
                            e = this.toleranceExceeded(t, n);
                        this.isOutOfBounds(t) || (t <= this.offset ? this.top() : this.notTop(), t + this.getViewportHeight() >= this.getScrollerHeight() ? this.bottom() : this.notBottom(), this.shouldUnpin(t, e) ? this.unpin() : this.shouldPin(t, e) && this.pin(), this.lastKnownScrollY = t)
                    }
                },
                o.options = {
                    tolerance: {
                        up: 0,
                        down: 0
                    },
                    offset: 0,
                    scroller: window,
                    classes: {
                        pinned: "headroom--pinned",
                        unpinned: "headroom--unpinned",
                        top: "headroom--top",
                        notTop: "headroom--not-top",
                        bottom: "headroom--bottom",
                        notBottom: "headroom--not-bottom",
                        initial: "headroom"
                    }
                },
                o.cutsTheMustard = void 0 !== n && n.rAF && n.bind && n.classList,
                o
        });
window.Aria = {
    init: function() {
        this.action.init(),
        THEME_CONFIG.USE_PJAX && this.pjax(),
        THEME_CONFIG.USE_FANCYBOX && this.fancybox(),
        THEME_CONFIG.SHOW_HITOKOTO && this.hitokoto(),
            this.hljs.init(),
            this.commentPlus.init(),
        THEME_CONFIG.USE_LAZYLOAD && this.lazyload(),
            this.postOther.init(),
            console.log("%cVer " + THEME_CONFIG.THEME_VERSION + "%cAria By Siphils http://qqexit.com", "color: #fff; background: #435561; padding:6px;", "color: #fff; background: #435561cf; padding:6px;")
    },
    pjax: function() {
        $(document).pjax('a[href^="' + THEME_CONFIG.SITE_URL + '"]:not(a[target="_blank"], [no-pjax],a[rel~="nofollow"])', {
            container: "#pjax-container",
            fragment: "#pjax-container",
            timeout: 8e3
        }).on("pjax:send",
            function() {
                NProgress.start(),
                    Aria.doPjaxStartAction()
            }).on("pjax:complete",
            function() {
                NProgress.done(),
                    Aria.doPjaxCompleteAction(),
                "function" == typeof Aria.reloadAction && Aria.reloadAction()
            })
    },
    doPjaxStartAction: function() {
        $("#header").toggleClass("slideOutUp"),
            $("#body").toggleClass("fadeOut"),
            $("#wrapper").hide()
    },
    doPjaxCompleteAction: function() {
        $("#header").removeClass("slideOutUp").addClass("slideInDown"),
            $("#body").removeClass("fadeOut").addClass("fadeIn"),
        THEME_CONFIG.USE_FANCYBOX && this.fancybox(),
        THEME_CONFIG.SHOW_HITOKOTO && this.hitokoto(),
        THEME_CONFIG.USE_LAZYLOAD && this.lazyload(),
            this.hljs.init(),
            this.commentPlus.init(),
            this.postOther.init(),
        "undefined" != typeof _hmt && _hmt.push(["_trackPageview", location.pathname + location.search]),
        window._gaq && _gaq.push(["_trackPageview"]),
        window.ga && ga("send", "pageview", {
            page: location.pathname,
            title: document.title
        }),
        "undefined" != typeof MathJax && MathJax.Hub.Queue(["Typeset", MathJax.Hub]),
        "function" == typeof loadMeting && loadMeting(),
            this.action.closeNav()
    },
    fancybox: function() { ($(".post-content img").length || $(".comment-content img").length) && ($("img:not([class~='link-avatar'],[no-fancybox])", ".post-content").wrap(function() {
        return '<a href="' + this.src + '" data-caption="' + this.title + '" no-pjax class="fancybox" data-fancybox="gallery" style="outline:0"></a>'
    }), $("img", ".comment-text").wrap(function() {
        return '<a href="' + this.src + '" data-caption="' + this.title + '" no-pjax class="fancybox" style="outline:0"></a>'
    }), $("a.fancybox").fancybox({
        animationEffect: "zoom-in-out",
        animationDuration: 500,
        transitionEffect: "tube",
        transitionDuration: 500,
        spinnerTpl: '<img style="position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);" src="' + THEME_CONFIG.THEME_URL + '/assets/img/loading.gif">'
    }))
    },
    hitokoto: function() {
        $.ajax({
            type: "GET",
            url: THEME_CONFIG.HITOKOTO_ORIGIN,
            success: function(t) {
                $("#hitokoto").html(t)
            }
        })
    },
    hljs: {
        init: function() {
            $("pre code").each(function(t, n) {
                hljs.highlightBlock(n),
                    $(n).parent().attr("class", "highlight-wrap")
            }),
                this.addLineNumber(),
                this.addLangType()
        },
        addLineNumber: function() {
            $("div.line-number").length <= 0 && $("pre>code").each(function() {
                for (var t = $(this), n = parseInt(t.data("line-start")), e = (parseInt(t.data("line-focus")), (r = t.html().split("\n")).length), o = '<div class="line-number" ' + (isNaN(n) ? "": 'start="' + n + '"') + ">", i = 0; i < e; i++) o += '<span class="highlight" data-line="' + (i + 1) + '"><span class="hl-child">',
                    o += r[i] + "</span></span>";
                o += "</div>";
                var r = t.empty().append(o)
            })
        },
        addLangType: function() {
            $("code[class~='hljs']").each(function() {
                var t = null == $(this).attr("class").match(/lang-(\w+)/) ? "CODE": $(this).attr("class").match(/lang-(\w+)/)[1].toUpperCase();
                $(this).attr("data-lang", t)
            })
        }
    },
    lazyload: function() {
        $("img:not([no-lazyload])").each(function() {
            $(this).attr("data-original", $(this).attr("src")),
                $(this).attr("src", THEME_CONFIG.THEME_URL + "/assets/img/loading.gif")
        }),
            $(".lazyload").lazyload({
                effect: "fadeIn"
            }),
            $("img:not([no-lazyload])").lazyload({
                effect: "fadeIn"
            })
    },
    postOther: {
        init: function() {
            this.postQrCode(),
                this.postReward()
        },
        postQrCode: function() {
            THEME_CONFIG.SHOW_QRCODE && $(".post-qrcode").length && $(".post-qrcode>a").on("click",
                function() {
                    "none" !== $(".post-qrcode>div").css("display") ? $(".post-qrcode>div").fadeOut() : $(".post-qrcode>div").fadeIn().css("display", "block")
                })
        },
        postReward: function() {
            THEME_CONFIG.SHOW_REWARD && $(".post-reward").length && $(".post-reward>a").on("click",
                function() {
                    "none" !== $(".post-reward>ul").css("display") ? $(".post-reward>ul").fadeOut() : $(".post-reward>ul").fadeIn().css("display", "block")
                })
        }
    }
};