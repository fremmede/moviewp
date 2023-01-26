<?php
/**
 * Template part for displaying single items
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * ----------------------------------------------------
 * @author: fr0zen
 * @author URI: https://sellix.io/fr0zen
 * @copyright: (c) 2022 Vincenzo Piromalli. All rights reserved
 * ----------------------------------------------------
 * @since 3.8.7
 * 20 May 2022
 */

/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$moviewp_postviews = get_option('moviewppanel_postviews');
?>

<div id="post-<?php the_ID(); ?>" <?php post_class( 'item movie' ); ?>>
	<a href="<?php the_permalink() ?>" rel="bookmark">
		<div class="item-flip">

			<div class="item-details">
				<div class="item-details-inner">
					<?php the_title( '<h2 class="movie-title">', '</h2>' ); ?>
					<p class="movie-description"><?php SinglePlot('500'); ?></p>
					<div style="color: rgba(255, 255, 255, 0.7);">
						<span class="genre"><?php echo esc_html__('Blog', 'moviewp'); ?></span>
						<?php //echo itemGenreList(); ?> 
						<span><?php echo get_the_date(); ?></span>
						<span><?php the_time('H:i');?></span>
						<span><?php the_author(); ?></span>
						<?php if ($moviewp_postviews == 1) { ?><span><?php echo getPostViews(get_the_ID()) . ' '.mostwatched.''; ?></span><?php } ?>
					</div>

				</div>
			</div>
		</div>
	</a>
</div><!-- #post-<?php the_ID(); ?> -->
