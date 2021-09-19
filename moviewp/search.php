<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
echo '<section id="content" class="inner-container">';
echo '<div class="item-container">';
if (have_posts()) : 
while (have_posts()) : the_post();
get_template_part('template-parts/content/content', 'loop');
endwhile;
else : 
echo '<p>';
esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'moviewp' );
echo '</p>';
endif;
pagination();
echo '</div>';
echo '</section>';
get_footer();