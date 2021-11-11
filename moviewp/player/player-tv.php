<?php
/*
* ----------------------------------------------------
* @author: fr0zen
* @author URI: https://fr0zen.shop/
* @copyright: (c) 2021 Vincenzo Piromalli. All rights reserved
* ----------------------------------------------------
* @since 3.8.5
* 9 november 2021
*/

if (isset($_GET['player_tv'])) {
$post_id = $_GET['player_tv'];
$imdb = get_post_meta($post_id, 'imdb_id', true);
$tmdb = get_post_meta($post_id, 'id', true);
$season = $_GET['s'];
$episode = $_GET['e'];
$string = 'emarfi';
$film = strrev ( $string );
$backdrop_path = esc_html(get_post_meta($post_id, 'backdrop_path', true));
$cover3 = 'https://image.tmdb.org/t/p/w1280' . $backdrop_path;
$server1 = 'https:\/\/www.2embed.ru\/embed\/tmdb\/tv?id='.$tmdb.'&s='.$season.'&e='.$episode.'';
$server2 = 'https:\/\/moviewp.com\/se.php?video_id='.$tmdb.'&tmdb=1&s='.$season.'&e='.$episode;
$server3 = 'https:\/\/vidcloud.stream\/series\/'.$imdb.'\/'.$season.'\/'.$episode.'.html';
$server4 = 'https:\/\/v2.apimdb.net\/e\/tmdb\/tv\/'.$tmdb.'\/'.$season.'\/'.$episode.'\/';
$server5 = 'https:\/\/databasegdriveplayer.co\/player.php?type=series&tmdb='.$tmdb.'&season='.$season.'&episode='.$episode; 
$server6 = 'https:\/\/v2.vidsrc.me\/embed\/'.$imdb.'\/'.$season.'-'.$episode.'\/';
$server7 = 'https:\/\/dbgo.fun\/imdbse.php?id='.$imdb.'&s='.$season.'&e='.$episode;
$server8 = 'https:\/\/fsapi.xyz\/anime\/'.$tmdb.'-'.$season.'-'.$episode;
$server9 = 'https:\/\/1movietv.com\/playstream\/'.$tmdb.'-'.$season.'-'.$episode;
$server10= 'https:\/\/curtstream.com\/series\/tmdb\/'.$tmdb.'\/'.$season.'\/'.$episode.'\/';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<script src='https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js?ver=3.5.1'></script>
		<script src='<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/player.js?ver=3.8.5'></script>
		<link href='<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/player.css?ver=3.8.5' rel='stylesheet' type='text/css' media='all' />
		<style>#loader-wrapper{background-image:url(<?php echo $cover3;?>)!important;background-position:center center;background-repeat:no-repeat;background-attachment:fixed;background-size:cover;background-color:#000}</style>
	</head>	
	<body>
		<div class="wrapper">
			<div class="videocontent">
				<div id="list-server-more">
					<a href="javascript:void(0)" id="show-server" title="<?php echo esc_attr__( 'Servers', 'moviewp' ) ?>"></a>
					<ul class="list-server-items">
						<li onclick="loadServer(s.Server1)" class="active"><?php echo esc_html__('2embed', 'moviewp'); ?></li>
						<li onclick="loadServer(s.Server2)"><?php echo esc_html__('superembed', 'moviewp'); ?></li>
						<li onclick="loadServer(s.Server3)"><?php echo esc_html__('stremio', 'moviewp'); ?></li>
						<li onclick="loadServer(s.Server4)"><?php echo esc_html__('apimdb', 'moviewp'); ?></li>
						<li onclick="loadServer(s.Server5)"><?php echo esc_html__('gdriveplayer', 'moviewp'); ?></li>
						<li onclick="loadServer(s.Server6)"><?php echo esc_html__('vidsrc', 'moviewp'); ?></li>
						<li onclick="loadServer(s.Server7)"><?php echo esc_html__('dbgo.fun', 'moviewp'); ?></li>
						<li onclick="loadServer(s.Server8)"><?php echo esc_html__('fsapi', 'moviewp'); ?></li>
						<li onclick="loadServer(s.Server9)"><?php echo esc_html__('1movietv', 'moviewp'); ?></li>
						<li onclick="loadServer(s.Server10)"><?php echo esc_html__('curtstream', 'moviewp'); ?></li>
					</ul>
				</div>
				<div id="load-iframe">
					<<?php echo $film; ?> id="<?php echo $film; ?>" src="" width="100%" height="100%" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" allowfullscreen></<?php echo $film; ?>>
				</div>
			</div>
			<div id="loader-wrapper">
				<div id="loader"></div>
				</div>
			</div>
			<script>
				var s = {"Server1":"<?php echo $server1; ?>","Server2":"<?php echo $server2; ?>","Server3":"<?php echo $server3; ?>","Server4":"<?php echo $server4; ?>","Server5":"<?php echo $server5; ?>","Server6":"<?php echo $server6; ?>","Server7":"<?php echo $server7; ?>","Server8":"<?php echo $server8; ?>","Server9":"<?php echo $server9; ?>","Server10":"<?php echo $server10; ?>"};
			</script>
		</body>
	</html>
	<?php
		} else {
		echo "Missing video_id";
	}
?>
