<?php
/*
* ----------------------------------------------------
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

get_header(); 
get_template_part('template-parts/content/content', 'person');
get_footer();