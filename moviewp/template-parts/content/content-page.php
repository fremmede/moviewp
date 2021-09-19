<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * ----------------------------------------------------
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

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section id="content">
		<div class="inner-container">
			<?php the_title( '<h3 style="font-weight: 700;">', '</h3>' );?>
			<p><?php the_content(); ?></p>
			<?php wp_link_pages(); ?>
		</div>
	</section>
</article><!-- #post-<?php the_ID(); ?> -->