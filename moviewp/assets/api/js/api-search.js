jQuery(document).ready(function ($) {
  $("#fetchmovie").prop("value", "Movie"),
    $("#fetchtv").prop("value", "TV"),
    $("input[name=test]").change(function () {
      $("input[name=test]:checked").val(), console.log("changed");
    }),
    $("input[name=test]").click(function () {
      "movie" == this.value
        ? ($("#tvform").addClass("hide"), $("#movieform").removeClass("hide"))
        : $("#tvform").removeClass("hide"),
        $("#movieform").removeClass("hide");
    }),
    $("input[name=test]").click(function () {
      "tv" == this.value
        ? $("#movieform").addClass("hide")
        : $("#movieform").removeClass("hide");
    }),
    setTimeout(function () {
      $("#publishing-action > span > i").css("color", "#8be71f");
    }, 2e3),
    $("#reset").click(function (e) {
      location.reload();
    }),
    $("#term").keyup(function (e) {
      var t,
        a,
        n = $(".textInput").val();
      new RegExp(n, "i"),
        this.value.length < 4 ||
          ((a = "") == $(".textInput").val() && (a += "? Enter Search Text"),
          "" == $("input[name=fetchmovie]").val() &&
            (a += "? Enter Search Text"),
          (t = a),
          e.preventDefault(),
          e.stopPropagation(),
          $("#message").html(t),
          0 == t.length &&
            (function c(e) {
              var p =
                  "https://api.themoviedb.org/3/search/" +
                  $("input[name=test]:checked").val(),
                t = $("#year").val();
              $("#year").on("keyup change click", function (e) {
                this.value !== t && (console.log("changed"), (t = this.value));
              }),
                $.ajax({
                  url:
                    p +
                    "?language=" +
                    Xapilanguage +
                    "&query=" +
                    $(".textInput").val() +
                    "&year=" +
                    t +
                    "&page=" +
                    e +
                    "&sort_by=popularity.desc&include_image_language=" +
                    Xapilanguage.substring(0, 2) +
                    ",null&append_to_response=images,trailers",
                  data: {
                    api_key: "" + Xapikey
                  },
                  dataType: "json",
                  success: function (e, t, a) {
                    var n,
                      r,
                      s = $('<ul id="suggestedTitles">');
                    for (i = 0; i < e.results.length; i++) {
                      "https://api.themoviedb.org/3/search/movie" == p
                        ? (n = e.results[i].title)
                        : "https://api.themoviedb.org/3/search/tv" == p &&
                          (n = e.results[i].name),
                        "null" == n && (n = "No Title");
                      var o =
                        null == e.results[i].poster_path
                          ? "https://via.placeholder.com/370x556?text=no+poster"
                          : "https://image.tmdb.org/t/p/w370_and_h556_bestv2" +
                            e.results[i].poster_path;
                      s.append(
                        '<li class="result" resourceId="' +
                          e.results[i].id +
                          '"><div class="item"><div class="image"><img title="' +
                          n +
                          '" src="' +
                          o +
                          '"></div><div class="data"><h3 class="filmTitle">' +
                          n +
                          "</h3></div></div></li>"
                      );
                    }
                    s.append("</ul>"),
                      $("#message").html(s),
                      $("#publishing-action > span > i").remove(),
                      "https://api.themoviedb.org/3/search/movie" == p
                        ? $("#api_status").html(
                            '<span><i class="fa fa-film"></i>&nbsp;&nbsp;  ' +
                              e.total_results +
                              " Movies found...</span>"
                          )
                        : "https://api.themoviedb.org/3/search/tv" == p &&
                          $("#api_status").html(
                            '<span><i class="fa fa-television"></i>&nbsp;&nbsp;  ' +
                              e.total_results +
                              " TV Shows found...</span>"
                          ),
                      (r = e.total_pages),
                      $("#pagination").twbsPagination({
                        totalPages: r,
                        prev:
                          '<i class="fa fa-chevron-left"></i>',
                        next:
                          '<i class="fa fa-chevron-right"></i>',
                        hideOnlyOnePage: !0,
                        visiblePages: 3,
                        onPageClick: function (e, t) {
                          c(t);
                        }
                      });
                  },
                  error: function (e, t, a) {
                    $("#message").html(
                      "Result: " +
                        t +
                        " " +
                        a +
                        " " +
                        e.status +
                        " " +
                        e.statusText
                    );
                  }
                });
            })(1));
    }),
    $("#message").on("click", ".result", function () {
      var e = $("input[name=test]:checked").val(),
        t = $(this).attr("resourceId");
      $.ajax({
        url:
          "https://api.themoviedb.org/3/" +
          e +
          "/" +
          t +
          "?language=" +
          Xapilanguage +
          "&include_image_language=" +
          Xapilanguage.substring(0, 2) +
          ",null&append_to_response=credits,images,trailers,external_ids,keywords",
        data: {
          api_key: "" + Xapikey
        },
        dataType: "json",
        success: function (e, t, a) {
          $("#excerpt").val(e.overview),
            $('#imdbRating input').val(e.vote_average),
            $('#id input, input[name="fetcht"]').val(e.id),
            $('input[name="Title"]').val(e.title),
            $("#excerpt").val(e.overview),
            $('textarea[name="overview"]').val(e.overview),
            null == e.poster_path || e.poster_path,
            null == e.overview || e.overview;
        },
        error: function (e, t, a) {
          $("#message").html(
            "Result: " + t + " " + a + " " + e.status + " " + e.statusText
          );
        }
      });
    }),
    $("#message").on("click", ".result", function () {
      var e =
          "https://api.themoviedb.org/3/search/" +
          $("input[name=test]:checked").val(),
        f = $(this).attr("resourceId");
        $(".pagination").empty(),
        $("#api_status").empty(),
        $("input#term").hide(),
        $("#hideme").hide(),
        $("#search").remove(),
        $(".textInput").val(" ");
      var y = "https://api.themoviedb.org/3/movie/",
        d = "https://api.themoviedb.org/3/tv/",
        t = "?append_to_response=credits,images,trailers,external_ids,keywords",
        a =
          "&language=" +
          Xapilanguage +
          "&include_image_language=" +
          Xapilanguage.substring(0, 2) +
          ",null",
        b = "&api_key=" + Xapikey;
      "https://api.themoviedb.org/3/search/movie" == e
        ? $.getJSON(y + f + t + a + b, function (l) {
            var u = "",
              m = "",
              g = "",
              v = "",
              d = "",
              h = "",
              z = "",
              _ = "";
            $.each(l, function (e, t) {
              var a, i, n, r, s, o, c, p;
              $("input[name=" + e + "]").val(t),
                "title" == e &&
                  ((u += "" + t),
                  $("#api_status").prepend(
                    "<span><strong>" +
                      u +
                      '</strong></span><span class="import_completed"><a href="https://www.imdb.com/title/' +
                      d +
                      '/" target="_blank"><strong>imported</strong></a></span>'
                  ),
                  $(".textInput").val(u)),
                "runtime" == e &&
                  ((v += t + " min"), $('#Runtime input').val(v)),
                "overview" == e && (m += "" + t),
                e == 'overview' && 'undefined' !=typeof tinymce&&(
                    (editor=tinymce.get('content'))&&editor instanceof tinymce.Editor?(editor.setContent(t),
                    editor.save({no_events:!0})):
                    $('textarea#content').val(t)),
                "original_title" == e &&
                  ((_ += "" + t), $('input[name="originalTitle"]').val(_)),
                "poster_path" == e && (g += "" + t),
                $('#poster_path input').val(g),
                $('#remote_thumb').val('https://image.tmdb.org/t/p/w600_and_h900_bestv2' + g),
                "backdrop_path" == e && (z += "" + t),
                $('#backdrop_path input').val(z),
                "imdb_id" == e &&
                  ((d += "" + t), $('#imdb_id input, input[name="Checkbx2"]').val(d)),
                "release_date" == e &&
                  ((h += "" + t),
                  $('#release_date input').val(h.slice(0, 4)),
                  $("#new-tag-" + Xyear).val(h.slice(0, 4))),
                "keywords" == e &&
                  ((tag = ""),
                   $.each(l.keywords.results, function (e, t) {
                   tag += t.name + ", ";
                   return e<0;
                  }),
                  $("#new-tag-post_tag").val(tag)),
                "genres" == e &&
                  ((a = ""),
                  (i = []),
                  jQuery.each(l.genres, function (e, t) {
                    (a += t.name + ", "),
                      (genr1 = t.name),
                      jQuery("input[name=newcategory]").val(genr1),
                      jQuery("#category-add-submit").trigger("click"),
                      jQuery("#category-add-submit").prop("disabled", !1),
                      jQuery("input[name=newcategory]").val(""),
                      i.push(genr1);
                  }),
                  jQuery("input[name=" + e + "]").val(a),
                  jQuery("#categorychecklist .selectit").each(function () {
                    jQuery(this)
                      .children("input[type=checkbox]")
                      .prop("checked", !1);
                  }),
                  jQuery("#categorychecklist .selectit").each(function () {
                    (gen = jQuery.trim(jQuery(this).text())),
                      -1 !== jQuery.inArray(gen, i) &&
                        (console.log("Perfect!"),
                        jQuery(this)
                          .children("input[type=checkbox]")
                          .prop("checked", !0));
                  })),
                jQuery("#in-category-2").prop("checked", !0),
                "credits" == e
                  ? ((n = valCast2 = ""),
                    (r = l.credits.cast),
                    $.each(r.slice(0, 3), function (e, t) {
                      (n +=
                        "https://image.tmdb.org/t/p/w185" +
                        t.profile_path +
                        "\n"),
                        (valCast2 += t.name + ", ");
                    }),
                    $('textarea[name="cast"]').val(n),
                    $("#new-tag-" + Xactors).val(valCast2),
                    $('input[name="Actors"]').val(valCast2))
                  : ((s = crew_w = crew_a = ""),
                    $.each(l.credits.crew, function (e, t) {
                      "Director" == t.job &&
                        ((s +=
                          "https://image.tmdb.org/t/p/w185" +
                          t.profile_path +
                          "\n"),
                        (crew_w += t.name + ","),
                        $('input[name="Director"]').val(crew_w));
                    }),
                    $("#new-tag-" + Xdirector).val(crew_w),
                    $('textarea[name="crew"]').val(s)),
                "trailers" == e &&
                  ((o = ""),
                  $.each(l.trailers.youtube, function (e, t) {
                    o += "[" + t.source + "]";
                  }),
                  $('#youtube_id input').val(o.slice(0, 13))),
                "production_countries" == e &&
                  ((c = ""),
                  $.each(l.production_countries, function (e, t) {
                    (c += t.name + ", "),
                      "United States of America" === t.name
                        ? (c = "USA, ")
                        : "United Kingdom" === t.name && (c = "UK, ");
                  }),
                  $("#new-tag-" + Xcountry).val(c)),
                "images" == e &&
                  ((p = ""),
                  $.each(l.images.backdrops, function (e, t) {
                    p += "https://image.tmdb.org/t/p/w300" + t.file_path + "\n";
                  }),
                  $('textarea[name="images"]').val(p)),
                  "keywords" == e && ((tag = ""),
                   $.each(l.keywords.keywords, function(e, t) {
                    tag += t.name + ", ";
                    return e < 0;
                  }),
                  $("#new-tag-post_tag").val(tag));
                $.getJSON(y + f + "/releases?" + b, function (a) {
                  $.each(a, function (e, t) {
                    "countries" == e &&
                      $.each(a.countries, function (e, t) {
                        var a;
                        "US" == t.iso_3166_1 &&
                          ((a = ""),
                          (a += "" + t.certification),
                          $('#Rated input').val(a));
                      });
                  });
                }),
                $("#message").remove(),
                $("#pagination").remove()
                snd.play();
            }),
              $("#title").val(u),
              $("#excerpt").val(m);
          })
        : "https://api.themoviedb.org/3/search/tv" == e &&
          $.getJSON(d + f + t + a + b, function (l) {
            var u = "",
              m = "",
              g = "",
              z = "",
              v = "";
            $('input[name="Checkbx3"]').val(f),
              $.each(l, function (e, t) {
                var a, i, n, r, s, o, c, p;
                $("input[name=" + e + "]").val(t),
                  "name" == e &&
                    ((u += "" + t),
                    $("#api_status").prepend(
                      "<span><strong>" +
                        u +
                        '</strong></span><span class="import_completed"><a href="https://www.themoviedb.org/tv/' +
                        f +
                        '/" target="_blank"><strong>imported</strong></a></span>'
                    ),
                    $(".textInput").val(u)),
                  "overview" == e && (m += "" + t),
                    e == 'overview' && 'undefined' !=typeof tinymce&&(
                    (editor=tinymce.get('content'))&&editor instanceof tinymce.Editor?(editor.setContent(t),
                    editor.save({no_events:!0})):
                    $('textarea#content').val(t)),
                    "poster_path" == e && (g += "" + t),
                    $('#poster_path input').val(g),
                    $('#remote_thumb').val('https://image.tmdb.org/t/p/w600_and_h900_bestv2' + g),
                    "backdrop_path" == e && (z += "" + t),
                    $('#backdrop_path input').val(z),
                  "networks" == e &&
                    ((a = ""),
                    $.each(l.networks, function (e, t) {
                      a += t.name + ",";
                    }),
                    $("#new-tag-" + Xnetwork).val(a)),
                  "episode_run_time" == e &&
                    ($.each(l.episode_run_time, function (e, t) {
                      return !(0 < e) && void (v += t + " min");
                    }),
                    $('#Runtime input').val(v)),
                  "created_by" == e &&
                    ((i = crea_2 = ""),
                    $.each(l.created_by, function (e, t) {
                      (i += t.name + ","),
                        (crea_2 +=
                          "https://image.tmdb.org/t/p/w185" +
                          t.profile_path +
                          "\n");
                    }),
                    $("#new-tag-" + Xcreator).val(i)),
                    "keywords" == e && ((tag = ""),
                    $.each(l.keywords.results, function(e, t) {
                    tag += t.name + ", ";
                    return e < 0;
                    }),
                    $("#new-tag-post_tag").val(tag)),
                  "genres" == e &&
                    ((r = ""),
                    (n = []),
                    jQuery.each(l.genres, function (e, t) {
                      (r += t.name + ", "),
                        (genr1 = t.name),
                        "Action & Adventure" === genr1
                          ? (genr1 = "" + XAdventure)
                          : "Sci-Fi & Fantasy" === genr1 &&
                            (genr1 = "" + XSciFi),
                        jQuery("input[name=newcategory]").val(genr1),
                        jQuery("#category-add-submit").trigger("click"),
                        jQuery("#category-add-submit").prop("disabled", !1),
                        jQuery("input[name=newcategory]").val(""),
                        n.push(genr1);
                    }),
                    jQuery("input[name=" + e + "]").val(r),
                    jQuery("#categorychecklist .selectit").each(function () {
                      jQuery(this)
                        .children("input[type=checkbox]")
                        .prop("checked", !1);
                    }),
                    jQuery("#categorychecklist .selectit").each(function () {
                      (gen = jQuery.trim(jQuery(this).text())),
                        -1 !== jQuery.inArray(gen, n) &&
                          jQuery(this)
                            .children("input[type=checkbox]")
                            .prop("checked", !0);
                    })),
                  jQuery("#in-category-1").prop("checked", !0),
                  "images" == e &&
                    ((s = ""),
                    $.each(l.images.backdrops, function (e, t) {
                      s +=
                        "https://image.tmdb.org/t/p/w300" + t.file_path + "\n";
                    }),
                    $('textarea[name="images"]').val(s)),
                  "external_ids" == e &&
                    ((o = l.external_ids.imdb_id),
                    $('#imdb_id input, input[name="imdb_id"]').val(o)),
                  "credits" == e
                    ? ((c = valCast2 = ""),
                      (p = l.credits.cast),
                      $.each(p.slice(0, 3), function (e, t) {
                        (c +=
                          "https://image.tmdb.org/t/p/w185" +
                          t.profile_path +
                          "\n"),
                          (valCast2 += t.name + ", ");
                      }),
                      $('textarea[name="cast"]').val(c),
                      $("#new-tag-" + Xactors).val(valCast2))
                    : ((crew_w = crew_a = ""),
                      $.each(l.credits.crew, function (e, t) {
                        "Writing" == t.department &&
                          (t.profile_path, (crew_w += t.name + ","));
                      })),
                  "first_air_date" == e &&
                    ($('#release_date input').val(t.slice(0, 4)),
                    $("#new-tag-" + Xyear).val(t.slice(0, 4))),
                  $.getJSON(d + f + "/videos?" + b, function (i) {
                    $.each(i, function (e, t) {
                      var a = "";
                      $.each(i.results, function (e, t) {
                        a += "[" + t.key + "]";
                      }),
                        $("#youtube_id input").val(a.slice(0, 13));
                    });
                  }),
                  $.getJSON(
                    "https://omdbapi.com/?apikey=128fb1d4&type=series&i=" +
                      o,
                    function (e) {
                      $.each(e, function (e, t) {
                        $("#" + e + " input").val(t),
                          "Country" == e && $("#new-tag-" + Xcountry).val(t);
                      });
                    }
                  );
              }),
              $("#title").val(u),
              $("#excerpt").val(m),
              $('input[name="custom_post_template"]').val("tv.php"),
              $("#custom_post_template").val("tv.php"),
              $("#custom_post_template").change(),
              $("#message").remove(),
              $("#pagination").remove(),
              snd.play();
          });
    }),
    $(document).ajaxStart(function () {
      $(".imageDiv img").show();
    }),
    $(document).ajaxStop(function () {
      $(".imageDiv img").hide();
    });
});