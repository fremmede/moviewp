function getIframe(url) {
    return '<iframe src="' + url + '" scrolling="no" frameborder="0" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen=""></iframe>';
}

$(document).on("click", "[data-load-embed]", function () {
    var id = $(this).attr("data-load-embed");
    var sv = $(this).attr("data-load-embed-host");

    $("[data-load-embed]").removeClass("active");
    $(this).addClass("active");

    var url = "getEmbed.php?id=" + id + "&sv=" + sv + "&embed=true";
    $("#autoembed").html(getIframe(url));
    $("#autoembed").addClass("active");
    $("#mainautoembed").addClass("hidden");
});

$(document).on("click", "#showMainButton", function () {
    var $menu = $("#mainautoembed");
    var $embed = $("#autoembed");
    if ($menu.hasClass("hidden")) {
        $menu.removeClass("hidden");
        $embed.removeClass("active");
    } else {
        $menu.addClass("hidden");
        $embed.addClass("active");
    }
});
