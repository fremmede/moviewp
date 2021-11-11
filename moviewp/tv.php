<?php
/**
 * Template Name Posts: tv
 * 
 * The template for displaying all tv custom posts
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @author: fr0zen
 * @author URI: https://fr0zen.shop/
 * @copyright: (c) 2021 Vincenzo Piromalli. All rights reserved
 * ----------------------------------------------------
 * @since 3.8.5
 * 9 november 2021
 */

/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
/* Start the Loop */
while ( have_posts() ) :
the_post();
get_template_part('template-parts/content/content', 'tv');
endwhile; 
// End of the loop.
get_footer();