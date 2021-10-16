<?php
/*
* ----------------------------------------------------
* @author: VincenzoPiromalli
* @author URI: https://github.com/VincenzoPiromalli
* @copyright: (c) 2021 Vincenzo Piromalli. All rights reserved
* ----------------------------------------------------
* @since 3.8.5
* 16 ottobre 2021
*/

if (isset($_GET['player_tv'])) {
$post_id = $_GET['player_tv'];
$imdb = get_post_meta($post_id, 'imdb_id', true);
$tmdb = get_post_meta($post_id, 'id', true);
$season = $_GET['s'];
$episode = $_GET['e'];
$string = 'emarfi';
$film = strrev ( $string );

//servers
$server1 = 'https://www.2embed.ru/embed/tmdb/tv?id='.$tmdb.'&s='.$season.'&e='.$episode.'';
$server2 = 'https://dbgo.fun/imdbse.php?id='.$imdb.'&s='.$season.'&e='.$episode.'';
$server3 = 'https://stream.nontongo.win/tv-series/tmdb?id='.$tmdb.'&s='.$season.'&e='.$episode.'';
$server4 = 'https://v2.apimdb.net/e/tmdb/tv/'.$tmdb.'/'.$season.'/'.$episode.'/';
$server5 = 'https://databasegdriveplayer.co/player.php?type=series&tmdb='.$tmdb.'&season='.$season.'&episode='.$episode.''; 
$server6 = 'https://v2.vidsrc.me/embed/'.$imdb.'/'.$season.'-'.$episode.'/';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
		
		<script src='//cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js?ver=3.5.1'></script>
		<script src='<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/player.js?ver=3.8.5'></script>
		<link href='<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/player.css?ver=3.8.5' rel='stylesheet' type='text/css' media='all' />
	</head>	
	<body>
		<div class="wrapper">
			<div class="videocontent">
				<div id="list-server-more">
					<a href="javascript:void(0)" id="show-server" title="Servers"></a>
					<ul class="list-server-items">
						<li onclick="loadServer(s.Server1)" class="active">2embed</li>
						<li onclick="loadServer(s.Server2)">dbgo.fun</li>
						<li onclick="loadServer(s.Server3)">nontongo</li>
						<li onclick="loadServer(s.Server4)">apimdb</li>
						<li onclick="loadServer(s.Server5)">gdriveplayer</li>
						<li onclick="loadServer(s.Server6)">vidsrc</li>
					</ul>
				</div>
				<div id="load-iframe">
					<<?php echo $film; ?> id='<?php echo $film; ?>' src='<?php echo $server1; ?>' marginwidth='0' marginheight='0' scrolling='no' frameborder='0' style='width:100%; height:100%' allowfullscreen></<?php echo $film; ?>>
				</div>
			</div>
			<div id="loader-wrapper">
				<div id="loader"></div>
			</div>
		</div>
		<script>
			var s = {"Server1":"<?php echo $server1; ?>","Server2":"<?php echo $server2; ?>","Server3":"<?php echo $server3; ?>","Server4":"<?php echo $server4; ?>","Server5":"<?php echo $server5; ?>","Server6":"<?php echo $server6; ?>"};
		</script>
	</body>
</html>
<?php
} else {
    echo "Missing video_id";
}
?>
