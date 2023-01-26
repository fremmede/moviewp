(function (a, b, c) {
    function d(b, c) {
        (this.el = b), (this.$el = a(this.el)), (this.options = a.extend({}, e, c)), (this._defaults = e), (this._name = "modalBox"), this.init();
    }
    var e = {
        effect: "slideUp",
        skin: "default",
        keyboardNav: !0,
        clickImgToClose: !1,
        clickOverlayToClose: !0,
        onInit: function () {},
        beforeShowModal: function () {},
        afterShowModal: function () {},
        beforeHideModal: function () {},
        afterHideModal: function () {},
        beforePrev: function () {},
        onPrev: function () {},
        beforeNext: function () {},
        onNext: function () {},
        errorMessage: "The requested content cannot be loaded. Please try again later.",
    };
    (d.prototype = {
        init: function () {
            var b = this;
            a("html").hasClass("modal-notouch") || a("html").addClass("modal-notouch"),
                "ontouchstart" in c && a("html").removeClass("modal-notouch"),
                this.$el.on("click", function (a) {
                    b.showModal(a);
                }),
                this.options.keyboardNav &&
                    a("body")
                        .off("keyup")
                        .on("keyup", function (c) {
                            var d = c.keyCode ? c.keyCode : c.which;
                            27 == d && b.destructModal(), 37 == d && a(".modal-prev").trigger("click"), 39 == d && a(".modal-next").trigger("click");
                        }),
                this.options.onInit.call(this);
        },
        showModal: function (b) {
            var c = this,
                d = this.$el,
                e = this.checkContent(d);
            if (e) {
                b.preventDefault(), this.options.beforeShowModal.call(this);
                var f = this.constructModal();
                if (f) {
                    var g = f.find(".modal-content");
                    if (g) {
                        if ((a("body").addClass("modal-body-effect-" + this.options.effect), this.processContent(g, d), this.$el.attr("data-modal-movie"))) {
                            var h = a('[data-modal-movie="' + this.$el.attr("data-modal-movie") + '"]');
                            a(".modal-nav").show(),
                                a(".modal-prev, #quality-button > div > label.hd")
                                    .off("click")
                                    .on("click", function (b) {
                                        b.preventDefault(), a("#quality-button .switch input[type=checkbox]").trigger("click");
                                        var e = h.index(d);
                                        (d = h.eq(e - 1)),
                                            a(d).length || (d = h.last()),
                                            a.when(c.options.beforePrev.call(this, [d])).done(function () {
                                                c.processContent(g, d), c.options.onPrev.call(this, [d]);
                                            });
                                    }),
                                a(".modal-next, #quality-button > div > label.fullhd")
                                    .off("click")
                                    .on("click", function (b) {
                                        b.preventDefault(), a("#quality-button .switch input[type=checkbox]").trigger("click");
                                        var e = h.index(d);
                                        (d = h.eq(e + 1)),
                                            a(d).length || (d = h.first()),
                                            a.when(c.options.beforeNext.call(this, [d])).done(function () {
                                                c.processContent(g, d), c.options.onNext.call(this, [d]);
                                            });
                                    });
                        }
                        setTimeout(function () {
                            f.addClass("modal-open"), c.options.afterShowModal.call(this, [f]);
                        }, 1);
                    }
                }
            }
        },
        checkContent: function (a) {
            var b = this,
                c = a.attr("href"),
                d = c.match(/(youtube|youtube-nocookie|youtu|vimeo)\.(com|be)\/(watch\?v=([\w-]+)|([\w-]+))/);
            if (null !== c.match(/\.(jpeg|jpg|gif|png)$/i)) return !0;
            return !!d || !("ajax" != a.attr("data-modal-type")) || !("#" != c.substring(0, 1) || "inline" != a.attr("data-modal-type")) || !("iframe" != a.attr("data-modal-type"));
        },
        processContent: function (c, d) {
            var e = this,
                f = d.attr("href"),
                g = f.match(/(youtube|youtube-nocookie|youtu|vimeo)\.(com|be)\/(watch\?v=([\w-]+)|([\w-]+))/);
            if ((c.html("").addClass("modal-loading"), this.isHidpi() && d.attr("data-modal-hidpi") && (f = d.attr("data-modal-hidpi")), null !== f.match(/\.(jpeg|jpg|gif|png)$/i))) {
                var h = a("<img>", { src: f, class: "modal-image-display" });
                h
                    .on("load", function () {
                        var d = a('<div class="modal-image" />');
                        d.append(h),
                            c.html(d).removeClass("modal-loading"),
                            d.css({ "line-height": a(".modal-content").height() + "px", height: a(".modal-content").height() + "px" }),
                            a(b).on("resize", function () {
                                d.css({ "line-height": a(".modal-content").height() + "px", height: a(".modal-content").height() + "px" });
                            });
                    })
                    .each(function () {
                        this.complete && a(this).load();
                    }),
                    h.error(function () {
                        var b = a('<div class="modal-error"><p>' + e.options.errorMessage + "</p></div>");
                        c.html(b).removeClass("modal-loading");
                    });
            } else if (g) {
                var i = "",
                    j = "modal-video";
                if (
                    ("youtube" == g[1] && ((i = "//www.youtube.com/embed/" + g[4]), (j = "modal-youtube")),
                    "youtube-nocookie" == g[1] && ((i = f), (j = "modal-youtube")),
                    "youtu" == g[1] && ((i = "//www.youtube.com/embed/" + g[3]), (j = "modal-youtube")),
                    "vimeo" == g[1] && ((i = "//player.vimeo.com/video/" + g[3]), (j = "modal-vimeo")),
                    i)
                ) {
                    var k = a("<iframe>", { src: i, class: j, frameborder: 0, allowfullscreen: !0, vspace: 0, hspace: 0, scrolling: "auto" });
                    c.html(k),
                        k.on("load", function () {
                            c.removeClass("modal-loading");
                        });
                }
            } else if ("ajax" == d.attr("data-modal-type"))
                a.ajax({
                    url: f,
                    cache: !1,
                    success: function (d) {
                        var e = a('<div class="modal-ajax" />');
                        e.append(d),
                            c.html(e).removeClass("modal-loading"),
                            e.outerHeight() < c.height() && e.css({ position: "relative", top: "50%", "margin-top": -(e.outerHeight() / 2) + "px" }),
                            a(b).on("resize", function () {
                                e.outerHeight() < c.height() && e.css({ position: "relative", top: "50%", "margin-top": -(e.outerHeight() / 2) + "px" });
                            });
                    },
                    error: function () {
                        var b = a('<div class="modal-error"><p>' + e.options.errorMessage + "</p></div>");
                        c.html(b).removeClass("modal-loading");
                    },
                });
            else if ("#" == f.substring(0, 1) && "inline" == d.attr("data-modal-type")) {
                if (a(f).length) {
                    var l = a('<div class="modal-inline" />');
                    l.append(a(f).clone().show()),
                        c.html(l).removeClass("modal-loading"),
                        l.outerHeight() < c.height() && l.css({ position: "relative", top: "50%", "margin-top": -(l.outerHeight() / 2) + "px" }),
                        a(b).on("resize", function () {
                            l.outerHeight() < c.height() && l.css({ position: "relative", top: "50%", "margin-top": -(l.outerHeight() / 2) + "px" });
                        });
                } else {
                    var m = a('<div class="modal-error"><p>' + e.options.errorMessage + "</p></div>");
                    c.html(m).removeClass("modal-loading");
                }
            } else if ("iframe" == d.attr("data-modal-type")) {
                var n = a("<iframe>", { src: f, class: "modal-item", frameborder: 0, allowfullscreen: !0, vspace: 0, hspace: 0, scrolling: "auto" });
                c.html(n),
                    n.on("load", function () {
                        c.removeClass("modal-loading");
                    });
            } else return !1;
            if (d.attr("title")) {
                var o = d.attr("title"),
                    p = a("<span>", { class: "modal-title" });
                p.append(o), a(".modal-title-wrap").html(p);
            } else a(".modal-title-wrap").html("");
        },
        constructModal: function () {
            if (a(".modal-overlay").length) return a(".modal-overlay");
            var b = a("<div>", { class: "modal-overlay modal-skin-" + this.options.skin + " modal-effect-" + this.options.effect }),
                c = a("<div>", { class: "modal-wrap" }),
                d = a("<div>", { class: "modal-content" }),
                e = a('<a href="#" class="modal-nav modal-prev">Previous</a><a href="#" class="modal-nav modal-next">Next</a>'),
                f = a('<a href="#" class="modal-close" title="Close">Close</a>'),
                g = a("<div>", { class: "modal-title-wrap" });
            0 && b.addClass("modal-ie"), c.append(d), c.append(g), b.append(c), b.append(e), b.append(f), a("body").append(b);
            var h = this;
            return (
                h.options.clickOverlayToClose &&
                    b.on("click", function (b) {
                        (b.target === this || a(b.target).hasClass("modal-content") || a(b.target).hasClass("modal-image")) && h.destructModal();
                    }),
                h.options.clickImgToClose &&
                    b.on("click", function (b) {
                        (b.target === this || a(b.target).hasClass("modal-image-display")) && h.destructModal();
                    }),
                f.on("click", function (a) {
                    a.preventDefault(), h.destructModal();
                }),
                b
            );
        },
        destructModal: function () {
            var b = this;
            this.options.beforeHideModal.call(this), a(".modal-overlay").removeClass("modal-open"), a(".modal-nav").hide(), a("body").removeClass("modal-body-effect-" + b.options.effect);
            0, a(".modal-prev, a.modal-prev img").off("click"), a(".modal-next, a.modal-next img").off("click"), a(".modal-content").empty(), this.options.afterHideModal.call(this);
        },
        isHidpi: function () {
            return (
                !!(1 < b.devicePixelRatio) ||
                !!(
                    b.matchMedia &&
                    b.matchMedia(
                        "(-webkit-min-device-pixel-ratio: 1.5),                              (min--moz-device-pixel-ratio: 1.5),                              (-o-min-device-pixel-ratio: 3/2),                              (min-resolution: 1.5dppx)"
                    ).matches
                )
            );
        },
    }),
        (a.fn.modalBox = function (b) {
            return this.each(function () {
                a.data(this, "modalBox") || a.data(this, "modalBox", new d(this, b));
            });
        });
})(jQuery, window, document),
    jQuery(document).ready(function (a) {
        a(document).on("ready", function () {
            a.each(a('a[rel*="modal"]'), function () {
                var b = a(this)
                    .attr("rel")
                    .match(/modal\[(movie\-(?:[\da-z]{1,4}))\]/gi);
                null !== b && a(this).attr("data-modal-movie", b[0]);
            }),
                a('a[rel*="modal"]').modalBox();
        }),
            a('a[rel="modal"]').modalBox();
    });
 