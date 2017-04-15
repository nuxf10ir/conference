//скрипт для получения информации о пользователе
var aktion = aktion || [];
(function () {
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = '//m.action-media.ru/js/all.2.js';
    var es = document.getElementsByTagName('script')[0];
    es.parentNode.insertBefore(s, es);
})();

window.AsyncInit = function () {

    //передаем appid и emid
    window.inits = aktionid.init({
        appid: 10555,
        emid: 457,
        rater: false
    });

    // библиотека для передачи событий id2
    function ace() { return window === this ? new ace : (this.cookiepath = "/", this.cookiedomain = "", this.cookiename = "_aceuid", this.cookielife = 31536e5, this.aceuid = this.getuid(), this.appid = 0, this) } ace.prototype.init = function (a) { a.appid && (this.appid = a.appid) }, ace.prototype.save = function (a, b, c, d, e, f) { if (this.appid > 0 && b) { "undefined" == typeof c && (c = ""), "undefined" == typeof d && (d = ""), "undefined" == typeof e && (e = ""), "undefined" == typeof f && (f = ""); var g = document.createElement("img"), h = (new Date).getTime(); g.src = "http://dm.action-media.ru/stat/save/?sessionid=" + this.aceuid + "&userid=" + a + "&action=" + b + "&source=" + escape(c) + "&appid=" + this.appid + "&category1=" + d + "&category2=" + e + "&actionvalue=" + f + "&r=" + h } }, ace.prototype.getuid = function () { var a = this.readstorage(); return null === a && (a = this.randString(), this.writestorage(a)), a }, ace.prototype.writestorage = function (a) { var b = new Date; b.setTime(b.getTime() + this.cookielife); var c = "; expires=" + b.toGMTString(), d = this.cookiepath ? "; path=" + this.cookiepath : "", e = this.cookiedomain ? "; domain=" + this.cookiedomain : ""; document.cookie = [this.cookiename, "=", encodeURIComponent(a), c, d, e].join("") }, ace.prototype.readstorage = function () { var a = null; if (document.cookie && "" !== document.cookie) for (var b = document.cookie.split(";"), c = 0; c < b.length; c++) { var d = b[c].trim(); if (d.substring(0, this.cookiename.length + 1) == this.cookiename + "=") { a = decodeURIComponent(d.substring(this.cookiename.length + 1)); break } } return a }, ace.prototype.randString = function () { for (var a = "", b = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789", c = 0; 10 > c; c++) a += b.charAt(Math.floor(Math.random() * b.length)); return a }, String.prototype.trim = function () { return this.replace(/^\s+|\s+$/g, "") };
    var ace = new ace || [];
    ace.init({ appid: aktionid.config.emid });

    //ждем пока выполнится запрос для получения информации о пользователе
    //setTimeout(function () {
        // отправляем событие, время уже передается в самой библиотеке
        //ace.save(aktionid.iduser ? aktionid.iduser.Id : 0, 'viewPromo', window.location.href, '', '', '');
    //});


    $('.js-download').on('click touchstart', function (e) {
        e.preventDefault();
        ace.save(aktionid.iduser ? aktionid.iduser.Id : 0, 'Eventxcc', window.location.href, 1213, 457, '');
        window.location.href = $(this).attr('href');
        return;
    });

    $('.js-open').on('click touchstart', function (e) {
        e.preventDefault();
        ace.save(aktionid.iduser ? aktionid.iduser.Id : 0, 'Eventxcc', window.location.href, 1213, 457, '');
        window.location.href = $(this).attr('href');
        return;
    });

};


