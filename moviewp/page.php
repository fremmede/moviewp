<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @author: VincenzoPiromalli
 * @author URI: https://github.com/VincenzoPiromalli
 * @copyright: (c) 2021 Vincenzo Piromalli. All rights reserved
 * ----------------------------------------------------
 * @since 3.8.5
 * 18 settembre 2021
 */

/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
/* Start the Loop */
while ( have_posts() ) :
the_post();
get_template_part('template-parts/content/content', 'page');
endwhile; 
// End of the loop.
get_footer();