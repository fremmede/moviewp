<?php
/**
 * Template part for displaying category pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @author: fr0zen
 * @author URI: https://fr0zen.sellix.io
 * @copyright: (c) 2022 Vincenzo Piromalli. All rights reserved
 * ----------------------------------------------------
 * @since 3.8.7
 * 20 May 2022
 */

/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


echo '<section id="content" class="inner-container">';
echo '<div class="item-container">';

global $wp_query;
$current_category = get_queried_object();
$parent_id = $current_category -> parent;
$this_cat_slug = $current_category -> slug;
$paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

$args = array(
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => get_option('posts_per_page'),
    'paged' => $paged,
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field' => 'id',
            'terms' => $current_category -> term_id,
            ),
        ),
    );

if (!isset($_GET['order'])) {
    $_GET['order'] = '';
} 

if ($_GET['order'] == 'views') {
    $args['meta_key'] = 'post_views_count';
    $args['orderby'] = 'meta_value_num';
} 
if ($_GET['order'] == 'like') {
    $args['meta_key'] = '_post_like_count';
    $args['orderby'] = 'meta_value_num';
} 
if ($_GET['order'] == 'comments') {
    $args['orderby'] = 'comment_count';
} 
if ($_GET['order'] == 'rating') {
    $args['meta_key'] = 'imdbRating';
    $args['orderby'] = 'meta_value_num';
} 
if ($_GET['order'] == 'years-desc') {
    $args['meta_key'] = 'release_date';
    $args['orderby'] = 'meta_value_num';
} 
if ($_GET['order'] == 'years-asc') {
    $args['meta_key'] = 'release_date';
    $args['orderby'] = 'meta_value_num';
    $args['order'] = 'ASC';
} 
if ($_GET['order'] == 'title-asc') {
    $args['orderby'] = 'title';
    $args['order'] = 'ASC';
} 
if ($_GET['order'] == 'title-desc') {
    $args['orderby'] = 'title';
} 
if ($_GET['order'] == 'date-desc') {
    $args['orderby'] = 'post_date';
} 
if ($_GET['order'] == 'date-asc') {
    $args['orderby'] = 'post_date';
    $args['order'] = 'ASC';
} 
if ($_GET['order'] == 'random') {
    $args['orderby'] = 'rand';
} 

// Load posts loop.
$loop = new WP_Query($args);
if ($loop -> have_posts()) :
while ($loop -> have_posts()) : $loop -> the_post();

get_template_part( 'template-parts/content/content', 'loop' );

endwhile;

if ($_GET['order'] == 'random') {

// no paging

} else {

pagination();

}

endif;

wp_reset_query();
wp_reset_postdata();

echo '</div>';
echo '</section>';
