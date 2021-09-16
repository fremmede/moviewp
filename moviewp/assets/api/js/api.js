jQuery(document).ready(function($) {
    $("input[name=fetchmovie]").on("click", function() {
        var w = $("input[name=fetchm]").get(0).value
          , e = "&language=" + Xapilanguage + "&include_image_language=" + Xapilanguage.slice(0, 2) + ",null"
          , t = "&api_key=" + Xapikey;
        $.getJSON("https://api.themoviedb.org/3/movie/" + w + "?append_to_response=credits,images,trailers,external_ids,keywords,releases" + e + t, function(l) {
            var u = ""
              , m = ""
              , g = ""
              , d = ""
              , v = ""
              , h = ""
              , _ = ""
              , z = ""
              , w = ""
              , y = "";
            $.each(l, function(e, t) {
                var a, n, i, r, c, s, o, p;
                $("input[name=" + e + "]").val(t),
                "title" == e && ((u += "" + t),
                $('input[name="Title"]').val(u),
                $("#api_status").empty(),
                $("input#term").hide(),
                $("#hideme").hide(),
                $("#Generator > div > h2").hide(),
                $("#api_status").prepend("<span><strong>" + u + '</strong></span><span class="import_completed"><a href="https://www.imdb.com/title/' + w + '/" target="_blank"><strong>imported</strong></a></span>')),
                "runtime" == e && ((d += t + " min"),
                $('#Runtime input').val(d)),
                "imdb_id" == e && ((y += "" + t),
                $('#imdb_id input, input[name="fetchm"]').val(y)),
                "id" == e && ((z += "" + t),
                $('#id input, input[name="id"]').val(z)),
                "overview" == e && ((m += "" + t),
                $('textarea[name="overview"]').val(m),
                $("#excerpt").val(m)),
                e == "overview" && "undefined" != typeof tinymce && ((editor = tinymce.get("content")) && editor instanceof tinymce.Editor ? (editor.setContent(t),
                editor.save({
                    no_events: !0
                })) : $("textarea#content").val(t)),
                "poster_path" == e && (g += "" + t),
                $("#poster_path input").val(g),
                "backdrop_path" == e && (w += "" + t),
                $("#backdrop_path input").val(w),
                "original_title" == e && ((h += "" + t),
                $('#originalTitle input').val(h)),
                "vote_average" == e && ((_ += "" + t),
                $('#imdbRating input').val(_)),
                "release_date" == e && ((v += "" + t),
                $('#release_date input').val(v.slice(0, 4)),
                $("#new-tag-" + Xyear).val(v.slice(0, 4))),
                "genres" == e && ((a = ""),
                (n = []),
                jQuery.each(l.genres, function(e, t) {
                    (a += t.name + ", "),
                    (genr1 = t.name),
                    jQuery("input[name=newcategory]").val(genr1),
                    jQuery("#category-add-submit").trigger("click"),
                    jQuery("#category-add-submit").prop("disabled", !1),
                    jQuery("input[name=newcategory]").val(""),
                    n.push(genr1);
                }),
                jQuery("input[name=" + e + "]").val(a),
                jQuery("#categorychecklist .selectit").each(function() {
                    jQuery(this).children("input[type=checkbox]").prop("checked", !1);
                }),
                jQuery("#categorychecklist .selectit").each(function() {
                    (gen = jQuery.trim(jQuery(this).text())),
                    -1 !== jQuery.inArray(gen, n) && (console.log("Perfect!"),
                    jQuery(this).children("input[type=checkbox]").prop("checked", !0));
                })),
                jQuery("#in-category-2").prop("checked", !0),
                "credits" == e ? ((i = valCast2 = ""),
                (r = l.credits.cast),
                $.each(r.slice(0, 3), function(e, t) {
                    (i += "https://image.tmdb.org/t/p/w185" + t.profile_path + "\n"),
                    (valCast2 += t.name + ", ");
                }),
                $('textarea[name="cast"]').val(i),
                $("#new-tag-" + Xactors).val(valCast2),
                $('input[name="Actors"]').val(valCast2)) : ((c = crew_w = crew_a = ""),
                $.each(l.credits.crew, function(e, t) {
                    "Director" == t.job && ((c += "https://image.tmdb.org/t/p/w185" + t.profile_path + "\n"),
                    (crew_w += t.name + ", "),
                    $('input[name="Director"]').val(crew_w));
                }),
                $("#new-tag-" + Xdirector).val(crew_w),
                $('textarea[name="crew"]').val(c)),
                "releases" == e && $.each(l.releases.countries, function(e, t) {
                    var rated;
                    "US" == t.iso_3166_1 && ((rated = ""),
                    (rated += "" + t.certification),
                    $('#Rated input').val(rated));
                }),
                "trailers" == e && ((s = ""),
                $.each(l.trailers.youtube, function(e, t) {
                    s += "[" + t.source + "]";
                }),
                $('#youtube_id input').val(s.slice(0, 13))),
                "production_countries" == e && ((o = ""),
                $.each(l.production_countries, function(e, t) {
                    (o += t.name + ", "),
                    "United States of America" === t.name ? (o = "USA, ") : "United Kingdom" === t.name && (o = "UK, ");
                }),
                $("#new-tag-" + Xcountry).val(o)),
                "keywords" == e && ((tag = ""),
                $.each(l.keywords.keywords, function(e, t) {
                    tag += t.name + ", ";
                    return e < 0;
                }),
                $("#new-tag-post_tag").val(tag));
            }),
            $('#remote_thumb').val('https://image.tmdb.org/t/p/w600_and_h900_bestv2' + g),
            $("#title").val(u),
            snd.play(),
            $("#message").remove();
        });
    }),
    $("input[name=TV], input[name=fetchtv]").on("click", function() {
        var h = $("input[name=fetcht]").get(0).value
          , _ = ($("input[name=fetcht]").get(0).value,
        "https://api.themoviedb.org/3/tv/")
          , e = "&language=" + Xapilanguage + "&include_image_language=" + Xapilanguage.slice(0, 2) + ",null"
          , y = "&api_key=" + Xapikey;
        $('#custom_post_template, input[name="custom_post_template"]').val("tv.php"),
        $("#custom_post_template").val("tv.php"),
        $("#custom_post_template").change(),
        $.getJSON(_ + h + "?append_to_response=credits,external_ids,images,trailers,content_ratings,keywords,videos" + e + y, function(l) {
            var u = ""
              , m = ""
              , g = ""
              , d = ""
              , w = ""
              , o = ""
              , z = ""
              , external = ""
              , v = "";
            $.each(l, function(e, t) {
                var a, n, i, r, c, p;
                $("input[name=" + e + "]").val(t),
                "title" == e && (valTit += "" + t),
                "id" == e && ((v += "" + t),
                $('#id input, input[name="fetcht"]').val(v)),
                "name" == e && ((u += "" + t),
                $("input#term").hide(),
                $("#api_status").empty(),
                $("#api_status").prepend("<span><strong>" + u + '</strong></span><span class="import_completed"><a href="https://www.themoviedb.org/tv/' + h + '/" target="_blank"><strong>imported</strong></a></span>')),
                "overview" == e && (m += "" + t),
                e == "overview" && "undefined" != typeof tinymce && ((editor = tinymce.get("content")) && editor instanceof tinymce.Editor ? (editor.setContent(t),
                editor.save({
                    no_events: !0
                })) : $("textarea#content").val(t)),
                "poster_path" == e && (g += "" + t),
                $("#poster_path input").val(g),
                $('#remote_thumb').val('https://image.tmdb.org/t/p/w600_and_h900_bestv2' + g),
                "backdrop_path" == e && (w += "" + t),
                $("#backdrop_path input").val(w),
                "vote_average" == e && ((z += "" + t),
                $('#imdbRating input').val(z)),
                "networks" == e && ((a = ""),
                $.each(l.networks, function(e, t) {
                    a += t.name + ",";
                }),
                $("#new-tag-" + Xnetwork).val(a)),
                "episode_run_time" == e && ($.each(l.episode_run_time, function(e, t) {
                    return !(0 < e) && void (d += t + " min");
                }),
                $('#Runtime input').val(d)),
                "created_by" == e && ((n = crea_2 = ""),
                $.each(l.created_by, function(e, t) {
                    (n += t.name + ",");
                }),
                $("#new-tag-" + Xcreator).val(n)),
                "keywords" == e && ((tag = ""),
                $.each(l.keywords.results, function(e, t) {
                    tag += t.name + ", ";
                    return e < 0;
                }),
                $("#new-tag-post_tag").val(tag)),
                "genres" == e && ((i = ""),
                (r = []),
                jQuery.each(l.genres, function(e, t) {
                    (i += t.name + ", "),
                    (genr1 = t.name),
                    "Action & Adventure" === genr1 ? (genr1 = "" + XAdventure) : "Sci-Fi & Fantasy" === genr1 && (genr1 = "" + XSciFi),
                    jQuery("input[name=newcategory]").val(genr1),
                    jQuery("#category-add-submit").trigger("click"),
                    jQuery("#category-add-submit").prop("disabled", !1),
                    jQuery("input[name=newcategory]").val(""),
                    r.push(genr1);
                }),
                jQuery("input[name=" + e + "]").val(i),
                jQuery("#categorychecklist .selectit").each(function() {
                    jQuery(this).children("input[type=checkbox]").prop("checked", !1);
                }),
                jQuery("#categorychecklist .selectit").each(function() {
                    (gen = jQuery.trim(jQuery(this).text())),
                    -1 !== jQuery.inArray(gen, r) && (console.log("Perfect!"),
                    jQuery(this).children("input[type=checkbox]").prop("checked", !0));
                })),
                jQuery("#in-category-1").prop("checked", !0),
                "credits" == e ? ((o = valCast2 = ""),
                (p = l.credits.cast),
                $.each(p.slice(0, 3), function(e, t) {
                    (o += "https://image.tmdb.org/t/p/w185" + t.profile_path + "\n"),
                    (valCast2 += t.name + ", ");
                }),
                $("#new-tag-" + Xactors).val(valCast2)) : ((crew_w = crew_a = ""),
                $.each(l.credits.crew, function(e, t) {
                    "Writing" == t.department && (t.profile_path,
                    (crew_w += t.name + ","));
                })),
                "content_ratings" == e && $.each(l.content_ratings.results, function(e, t) {
                    var rated;
                    "US" == t.iso_3166_1 && ((rated = ""),
                    (rated += "" + t.rating),
                    $('#Rated input').val(rated));
                }),
                "first_air_date" == e && ($('input[name=" +key+ "]').val(t.slice(0, 4)),
                $('#release_date input').val(t.slice(0, 4)),
                $("#new-tag-" + Xyear).val(t.slice(0, 4))),

                "external_ids" == e && ((external = l.external_ids.imdb_id),
                $('#imdb_id input').val(external));
            }),
            $.getJSON(_ + h + "/videos?" + y, function(n) {
                    $.each(n, function(e, t) {
                        var a = "";
                        $.each(n.results, function(e, t) {
                            a += "[" + t.key + "]";
                        }),
                        $("#youtube_id input").val(a.slice(0, 13));
                });
            }),
            $.getJSON("https://omdbapi.com/?apikey=128fb1d4&type=series&i=" + external, function(tmdbdata) {
                    $.each(tmdbdata, function(key, val) {
                    "Country" == key && $("#new-tag-" + Xcountry).val(val);
                    //"Rated" == key && $('#Rated input').val(val);
                });
            });
            $("#title").val(u),
            $("#excerpt").val(m);
        }),
        $("#movie_fetch_details").remove(),
        snd.play(),
        $("#message").remove();
    });
});
