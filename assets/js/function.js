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