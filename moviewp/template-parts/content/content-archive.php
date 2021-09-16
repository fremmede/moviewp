<?php
/**
 * Template part for displaying archive pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @author: fr0zen
 * @author URI: https://sellix.io/fr0zen
 * @copyright: (c) 2021 Vincenzo Piromalli. All rights reserved
 * ----------------------------------------------------
 * @since 3.8.4
 * 14 aprile 2021
 */

/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

echo '<section id="content" class="inner-container">';
echo '<div class="item-container">';
if ( have_posts() ) :
// Load posts loop.
while ( have_posts() ) : the_post();
get_template_part('template-parts/content/content', 'loop');
endwhile;
endif;
pagination(); 
echo '</div>';
echo '</section>';
