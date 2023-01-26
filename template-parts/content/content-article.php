<?php
/**
 * Template part for displaying article posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
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
$content = get_the_content();
$content = str_replace("&nbsp;","<br clear='none'/>", $content);
$moviewp_comments = get_option('moviewppanel_comments');
$moviewp_postviews = get_option('moviewppanel_postviews');
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section id="content">
		<div class="inner-container">
			<?php the_title( '<h1>', '</h1>' );?>
			<div class="entry-content">
				<?php echo $content; ?>
				<br>
				<hr>
				<?php echo esc_html__('Blog', 'moviewp'); ?> &#8226; <?php echo get_the_date(); ?> &#8226; <?php the_time('H:i');?> &#8226; <?php the_author(); ?><?php if ($moviewp_postviews == 1) { ?> &#8226; <?php echo getPostViews(get_the_ID()) . ' '.mostwatched.''; ?><?php } ?><?php echo edit_post_link( __( 'Edit', 'moviewp' ), ' &#8226; ', '' ); ?>
				<hr>
			</div>
			<?php comments_template(); ?>
		</div>
	</section>
</article><!-- #post-<?php the_ID(); ?> -->
<?php if ($moviewp_comments == 1) { ?>
<script>
! function() {
    var disqus_shortname = "<?php echo disqus; ?>";
    var e = document.createElement("script");
    e.type = "text/javascript", e.async = !1, e.src = "//" + disqus_shortname + ".disqus.com/embed.js", (document.getElementsByTagName("head")[0] || document.getElementsByTagName("body")[0]).appendChild(e)
}();
(function($){
    setInterval(() => {
        $.each($('iframe'), (arr,x) => {
            let src = $(x).attr('src');
            if (src && src.match(/(ads-iframe)|(disqusads)/gi)) {
                $(x).remove();
            }
        });
    }, 300);
})(jQuery);
</script>
<?php } ?>