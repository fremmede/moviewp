! function() {
    var disqus_shortname = MoviewpAPI.disqus_shortname;
    var e = document.createElement("script");
    e.type = "text/javascript", e.async = !1, e.src = "//" + disqus_shortname + ".disqus.com/embed.js", (document.getElementsByTagName("head")[0] || document.getElementsByTagName("body")[0]).appendChild(e)
}();
(function($){
    setInterval(() => {
        $.each($('iframe'), (arr,x) => {
            let src = $(x).attr('src');
            if (src && src.match(/(ads-iframe)|(disqusads)/gi)) {
                $(x).remove();
            }
        });
    }, 300);
})(jQuery);