<?php
/**
 * Template Name: networks
 * 
 * Template part for displaying networks page content in networks.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * ----------------------------------------------------
 * @author: fr0zen
 * @author URI: https://fr0zen.sellix.io
 * @copyright: (c) 2022 Vincenzo Piromalli. All rights reserved
 * ----------------------------------------------------
 * 
 * 
 * @since 3.8.7
 * 20 May 2022
 */
	
/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$networks = get_terms('networks');
get_header(); ?>
<section id="content" class="inner-container">
	<div class="item-container networks">

			<ul class="d-f f-w ls-n jc-lg-c">
				<?php 
					foreach($networks as $network) {
						$networkName = str_replace(' ', '+', $network->name);
						$image = get_wp_term_image(intval($network->term_id),'networks');
						$link = get_term_link(intval($network->term_id),'networks');
						$error = esc_url( '//via.placeholder.com/300x150/FFFFFF/000000/?text='.$network->name ); 
						if ($image == 'https://image.tmdb.org/t/p/w500') {
		                $image = esc_url( '//via.placeholder.com/300x150/FFFFFF/000000/?text='.$network->name ); 
	                    } 
						else if(empty($image)){
							$image = esc_url( '//via.placeholder.com/300x150/FFFFFF/000000/?text='.$network->name ); 
						}
						
					?>
					<a id="post-<?php echo $network->term_id; ?>" class="px-2 py-2 d-f fd-c network-image" href="<?php echo $link; ?>">
						<div class="container-network bc-w px-2 d-f ai-c jc-c c-p"><img src="<?php echo $image ?>" alt="<?php echo $network->name; ?>"></div>
						<p class="c-w tt-u ta-c mt-1 w-d-n t-o-e w-100 mb-lg-0"><?php echo $network->name; ?><span class="network-number"><?php echo $network->count; ?></span></p>
					</a>
				<?php } ?>
			</ul>
	</div>
</section>
<?php get_footer(); ?>