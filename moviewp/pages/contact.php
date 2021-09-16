<?php
/**
 * Template Name: contact
 * 
 * Template part for displaying contact page content in contact.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * ----------------------------------------------------
 * @author: fr0zen
 * @author URI: https://sellix.io/fr0zen
 * @copyright: (c) 2021 Vincenzo Piromalli. All rights reserved
 * ----------------------------------------------------
 * 
 * 
 * @since 3.8.4
 * 14 aprile 2021
 */
    
/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section id="content" class="dmca clearfix">
		<div class="inner-container">
			<?php the_title( '<h3>', '</h3>' );?>
			<p><?php the_content(); ?></p>
		</div>
	</section>
</article><!-- #post-<?php the_ID(); ?> -->
<?php get_footer(); ?>