!(function (t) {
    t.moviewpscroll = {
        containerSelector: '.item-container',
        postSelector: '.item',
        paginationSelector: '.infinite',
        nextSelector: 'a.next',
        loadingHtml: '<div style="text-align: center;opacity:1;"><div class="lds-ripple"><div></div><div></div></div></div>',
        show: function (o) {
            check_storage();
            o.show();
        },
        nextPageUrl: null,
        init: function (o) {
            for (var e in o) t.moviewpscroll[e] = o[e];
            t(function () {
                t.moviewpscroll.extractNextPageUrl(t("body")), t(window).on("scroll", t.moviewpscroll.scroll), t.moviewpscroll.scroll();
            });
        },
        scroll: function () {
            check_storage();
            t.moviewpscroll.nearBottom() && t.moviewpscroll.shouldLoadNextPage() && t.moviewpscroll.loadNextPage();
        },
        nearBottom: function () {
            var o = t(window).scrollTop(),
                e = t(window).height(),
                l = t(t.moviewpscroll.containerSelector).find(t.moviewpscroll.postSelector).last().offset();
            if (l) return o > l.top - e;
        },
        shouldLoadNextPage: function () {
            return !!t.moviewpscroll.nextPageUrl;
        },
        loadNextPage: function () {
            var o = t.moviewpscroll.nextPageUrl,
                r = t(t.moviewpscroll.loadingHtml);
            (t.moviewpscroll.nextPageUrl = null),
                r.appendTo(t.moviewpscroll.containerSelector),
                t.get(o, function (o) {
                    var e = t(o),
                        l = e.find(t.moviewpscroll.containerSelector).find(t.moviewpscroll.postSelector);
                    r.remove(), t.moviewpscroll.show(l.hide().appendTo(t.moviewpscroll.containerSelector)), t.moviewpscroll.extractNextPageUrl(e), t.moviewpscroll.scroll();
                });
        },
        extractNextPageUrl: function (o) {
            var e = o.find(t.moviewpscroll.paginationSelector);
            (t.moviewpscroll.nextPageUrl = e.find(t.moviewpscroll.nextSelector).attr("href")), e.remove();
        },
    };
})(jQuery);
