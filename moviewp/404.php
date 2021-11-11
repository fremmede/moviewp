<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * ----------------------------------------------------
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
 
get_header(); ?>

<section id="content" class="error-404 not-found inner-container">
	<div class="item-container">
			<img class="aligncenter" id="404" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/404.png" width="90%" height="auto" alt="404" />
	</div>
</section>
<?php get_footer(); ?>