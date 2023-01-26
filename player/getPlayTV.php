<?php
/*
* ----------------------------------------------------
* @author: fr0zen
* @author URI: https://fr0zen.sellix.io
* @copyright: (c) 2022 Vincenzo Piromalli. All rights reserved
* ----------------------------------------------------
* @since 3.8.7
* 20 May 2022
*/

$id = $_GET['id'];
$sv = $_GET['sv'];
$season = $_GET['s'];
$episode = $_GET['e'];
$site = "";

if ($sv == "2embed") {
$site = 'https://www.2embed.to/embed/tmdb/tv?id='.$id.'&s='.$season.'&e='.$episode;
} 
else if ($sv == "apimdb") {
$site = esc_url( get_template_directory_uri() ).'/player/se_player.php?video_id='.$id.'&tmdb=1&s='.$season.'&e='.$episode;
}
else if ($sv == "gdriveplayer") {
$site = 'https://databasegdriveplayer.co/player.php?type=series&tmdb='.$id.'&season='.$season.'&episode='.$episode; 
}
else if ($sv == "") {
$site = 'https://www.2embed.to/embed/tmdb/tv?id='.$id.'&s='.$season.'&e='.$episode;
} 
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<style>
		body,html{
			padding:0;
			left: 0;
			background: transparent;
		}

		iframe{
			position: fixed;
			top: 0px;
			left: 0px;
			width: 100%;
			height: 100%;
		}
	</style>
</head>
<body>
	<script>
		window.location.href="<?php echo $site; ?>";
	</script>
</body>
</html>