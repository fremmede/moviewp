<?php
/*
* ----------------------------------------------------
* @author: VincenzoPiromalli
* @author URI: https://github.com/VincenzoPiromalli
* @copyright: (c) 2021 Vincenzo Piromalli. All rights reserved
* ----------------------------------------------------
* @since 3.8.5
* 18 settembre 2021
*/

if (isset($_GET['player_movie'])) {

$post_id = $_GET['player_movie'];
$imdb = get_post_meta($post_id, 'imdb_id', true);
$string = 'emarfi';
$film = strrev ( $string );

//servers
$server1 = 'https://www.2embed.ru/embed/imdb/movie?id='.$imdb;
$server2 = 'https://vidcloud.stream/'.$imdb.'.html';
$server3 = 'https://v2.vidsrc.me/embed/'.$imdb.'/';
$server4 = 'https://v2.apimdb.net/e/movie/'.$imdb;
$server5 = 'https://embedforfree.co/imdb?id='.$imdb;
$server6 = 'https://databasegdriveplayer.co/player.php?imdb='.$imdb;
$server7 = 'https://gomo.to/movie/'.$imdb;
$server8 = 'https://movies.nontongo.win/imdb?id='.$imdb;
$server9 = 'https://embed.warezcdn.net/filme/'.$imdb;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta name="HandheldFriendly" content="true">
		<meta name="robots" content="noindex,nofollow">
		
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
						<li onclick="loadServer(s.Server2)">vidcloud</li>
						<li onclick="loadServer(s.Server3)">vidsrc</li>
						<li onclick="loadServer(s.Server4)">apimdb</li>
						<li onclick="loadServer(s.Server5)">embedforfree</li>
						<li onclick="loadServer(s.Server6)">gdriveplayer</li>
						<li onclick="loadServer(s.Server7)">gomo.to</li>
						<li onclick="loadServer(s.Server8)">nontongo</li>
						<li onclick="loadServer(s.Server9)">warezcdn</li>
					</ul>
				</div>
				<div id="load-iframe">
					<<?php echo $film; ?> id='iframe' src='<?php echo $server1; ?>' marginwidth='0' marginheight='0' scrolling='no' frameborder='0' style='width:100%; height:100%' allowfullscreen></<?php echo $film; ?>>
				</div>
			</div>
			<div id="loader-wrapper">
				<div id="loader"></div>
			</div>
		</div>
		<script>
			var s = {"Server1":"<?php echo $server1; ?>","Server2":"<?php echo $server2; ?>","Server3":"<?php echo $server3; ?>","Server4":"<?php echo $server4; ?>","Server5":"<?php echo $server5; ?>","Server6":"<?php echo $server6; ?>","Server7":"<?php echo $server7; ?>","Server8":"<?php echo $server8; ?>","Server9":"<?php echo $server9; ?>"};
		</script>
	</body>
</html>
<?php
} else {
    echo "Missing video_id";
}
?>
