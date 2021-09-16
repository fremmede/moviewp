<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @author: Moviewordpress
 * @author URI: http://moviewordpress.com/
 * @copyright: (c) 2020 Moviewordpress. All rights reserved
 * ----------------------------------------------------
 * @since 3.8.4
 * 14 aprile 2021
 */

/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section id="content">
		<div <?php html_tag_schema(); ?> class="inner-container">
			<?php echo MovieSchema(); ?>
			<div class="movie-image">
				<?php echo MovieImage(); ?>
			</div>
			<div class="movie-info">
				<?php //echo SingleRating(); ?>
				<span class="rating">
					<div class="progress progress-circle" data-percentage="<?php echo DataPercentage(); ?>">
						<span class="progress-left">
							<span class="progress-bar progress-<?php echo ProgressBar(); ?>"></span>
						</span>
						<span class="progress-right">
							<span class="progress-bar progress-<?php echo ProgressBar(); ?>"></span>
						</span>
						<span class="progress-value"><?php echo ProgressValue(); ?></span>
					</div>
				</span>
				<?php the_title( '<h1 itemprop="name" class="entry-title">', '</h1>' ); ?>
				<em class="tagline"></em>
				<?php echo SchemaRating(); ?>
				<div class="movie-data">
					<div class="details">
						<?php echo MovieData(); ?>
					</div>
				</div>
				<p class="movie-description">
					<?php echo MovieDescription(); ?>
				</p>
			</div>
			<?php get_template_part( 'template-parts/actions/actions' ); ?>
			<?php get_template_part( 'template-parts/content/content', 'related' ); ?>
			<?php comments_template(); ?>
		</div>
		<div id="slideshow">
		</div>
	</section>
</article><!-- #post-<?php the_ID(); ?> -->
