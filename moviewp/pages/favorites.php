<?php
/**
 * Template Name: favorites
 * 
 * Template part for displaying favorites page content in favorites.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * ----------------------------------------------------
 * @author: VincenzoPiromalli
 * @author URI: https://github.com/VincenzoPiromalli
 * @copyright: (c) 2021 Vincenzo Piromalli. All rights reserved
 * ----------------------------------------------------
 * 
 * 
 * @since 3.8.5
 * 18 settembre 2021
 */
	
/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header(); ?>

<section id="content" class="inner-container">
	<div class="item-container" id="page-favorites">
		<div id="loader" style="text-align: center;opacity:1;"><div class="lds-ripple"><div></div><div></div></div></div>
	</div>
</section>
<?php get_footer(); ?>