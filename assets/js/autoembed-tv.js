function getIframe(url) {
    return '<iframe src="' + url + '" scrolling="no" frameborder="0" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen=""></iframe>';
}
$(document).on("click", "[data-load-embed]", function () {
    var id = $(this).attr("data-load-embed");
    var sv = $(this).attr("data-load-embed-host");
    var season = $(this).attr("data-load-season");
    var episode = $(this).attr("data-load-episode");

    $("[data-load-embed]").removeClass("active");
    $(this).addClass("active");

    var url = "getEmbedTV.php?id=" + id + "&s=" + season + "&e=" + episode + "&sv=" + sv + "&embedtv=true";
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
$(document).ready(function () {
    var api_url = "//api.themoviedb.org/3/tv/" + tmdb + "/season/" + season + "/episode/" + episode + "?api_key=" + api_key + "&language=en-US";
    $.getJSON(api_url, function (data) {
        var posterFullUrl = "//image.tmdb.org/t/p/w1280" + data.still_path;
        $("#backgroundautoembed").css("background-image", 'url("' + posterFullUrl + '")');
    });
});
