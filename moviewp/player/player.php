<?php
/*
* ----------------------------------------------------
* @author: fr0zen
* @author URI: https://sellix.io/fr0zen
* @copyright: (c) 2021 Vincenzo Piromalli. All rights reserved
* ----------------------------------------------------
* @since 3.8.4
* 14 aprile 2021
*/

/*====================================*\
	Autoembed Multiplayer
\*====================================*/

//get IMDB ID
$id=$_GET['id'];
$string = 'emarfi';
$film = strrev ( $string );
?>
<!doctype html>
<html>
	<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		
		<!-- jquery JS -->
		<script src="//cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.js"></script>
		<!-- UIkit JS -->
		<script src="//cdn.jsdelivr.net/npm/uikit@3.4.6/dist/js/uikit.min.js"></script>
		<script src="//cdn.jsdelivr.net/npm/uikit@3.4.6/dist/js/uikit-icons.min.js"></script>
		<!-- UIkit CSS -->
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/uikit@3.4.6/dist/css/uikit.min.css" />
		<!-- Style CSS -->
		<style type="text/css" media="screen">
			html,body.hide-scroll{overflow:hidden;position:relative;padding:0;margin:0;height:100%;background:#18191b url(https://i.imgur.com/IGuF7mW.gif) no-repeat fixed center}#video-container iframe{position:absolute;top:4%;padding-bottom:0;box-sizing:border-box;left:0;width:100%;height:97%;display:inline-block}.uk-button-secondary.uk-active,.uk-button-secondary:active{background-color:#111;color:#fff}.uk-button-secondary:focus,.uk-button-secondary:hover{background-color:#2d2b2b;color:#fff}
		</style>
	</head>
	<body style="background: black;">
		<div id="header-bar" class="uk-card" style="border: 1px solid #000; z-index: 5;">
			<div id="header-slider">
				<div class="uk-position-relative  uk-slider uk-nav-navbar uk-toggle" uk-slider="">
					<ul class=" uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@m uk-child-width-1-6@l uk-grid uk-grid-small" style="transform: translateX(9px);">
						<button onclick="changeSrc('')" class="server uk-button uk-button-secondary uk-button-small uk-inline uk-text-capitalize" data-id="1"><span uk-icon="icon: play;ratio: 2"></span> Source 1</button>
						<button onclick="changeSrc('https://databasegdriveplayer.co/player.php?imdb=<?php echo $id; ?>')" class="server uk-button uk-button-secondary uk-button-small uk-inline uk-text-capitalize" data-id="2"><span uk-icon="icon: play;ratio: 2"></span> Source 2</button>
						<button onclick="changeSrc('')" class="server uk-button uk-button-secondary uk-button-small uk-inline uk-text-capitalize" data-id="3"><span uk-icon="icon: play;ratio: 2"></span> Source 3</button>
						<button onclick="changeSrc('')" class="server uk-button uk-button-secondary uk-button-small uk-inline uk-text-capitalize" data-id="4"><span uk-icon="icon: play;ratio: 2"></span> Source 4</button>
						<button onclick="changeSrc('')" class="server uk-button uk-button-secondary uk-button-small uk-inline uk-text-capitalize" data-id="5"><span uk-icon="icon: play;ratio: 2"></span> Source 5</button>
						<button onclick="changeSrc('')" class="server uk-button uk-button-secondary uk-button-small uk-inline uk-text-capitalize" data-id="6"><span uk-icon="icon: play;ratio: 2"></span> Source 6</button>
					</ul>
					<a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
					<a class="uk-position-center-right uk-position-small " href="#" uk-slidenav-next uk-slider-item="next"></a>
				</div>
			</div>
		</div>
		<div id="video-container">
			<div class="server1 servers">
				<<?php echo $film; ?> src="https://www.2embed.ru/embed/imdb/movie?id=<?php echo $id; ?>" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" frameborder="0"></<?php echo $film; ?>>
			</div>
			<div class="server2 servers" style="display:none">
				<<?php echo $film; ?> id="sampleVideo" src="" allowfullscreen="true" autoplay="0" autoplay="false" webkitallowfullscreen="true" mozallowfullscreen="true" frameborder="0"></<?php echo $film; ?>>
			</div>
			<div class="server3 servers" style="display:none">
				<<?php echo $film; ?> src="https://v2.vidsrc.me/embed/<?php echo $id; ?>" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" frameborder="0"></<?php echo $film; ?>>
			</div>
			<div class="server4 servers" style="display:none">
				<<?php echo $film; ?> src="https://dbgo.fun/video.php?id=<?php echo $id; ?>" style="top:-6%;height:120%!important" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" frameborder="0"></<?php echo $film; ?>>
			</div>
			<div class="server5 servers" style="display:none">
				<<?php echo $film; ?> src="https://apimdb.net/e/movie/<?php echo $id; ?>" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" frameborder="0"></<?php echo $film; ?>>
			</div>
			<!--<div class="server6 servers" style="display:none">
				<<?php echo $film; ?> src="https://movies.nontongo.win/imdb?id=<?php echo $id; ?>" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" frameborder="0"></<?php echo $film; ?>>
			</div>-->
			<div class="server6 servers" style="display:none">
				<<?php echo $film; ?> src="?auto=true&video_id=<?php echo $id; ?>" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" frameborder="0"></<?php echo $film; ?>>
			</div>
		</div>
		<script> 
			function changeSrc(e){document.getElementById("sampleVideo").src=e}$(document).ready(function(e){$(".server").on("click",function(e){e.preventDefault();var t=$(this).data("id");$("<?php echo $film; ?>").each(function(){var e=$(this).attr("src");$(this).attr("src",e)}),$(".server").removeClass("active"),$(this).addClass("active"),$(".servers").hide(),$(".server"+t).show()})});
		</script>
	</body>
</html>