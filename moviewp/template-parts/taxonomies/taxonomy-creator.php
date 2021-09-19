<?php
/*
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

get_header(); 
get_template_part('template-parts/content/content', 'person');
get_footer();