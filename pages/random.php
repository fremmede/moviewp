<?php
/**
 * Template Name: random
 * 
 * Template part for displaying random page content in random.php
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

get_header(); ?>

<section id="content" class="inner-container">
	<div class="item-container">
		<?php 
			$rand_posts = get_posts('numberposts=24&orderby=rand'); 
			foreach( $rand_posts as $post ) :
			  get_template_part('template-parts/content/content', 'loop');
			endforeach; 
		?>
	</div>
</section>
<?php get_footer(); ?>