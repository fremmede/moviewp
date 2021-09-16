<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * 
 * @package moviewp
 * @since moviewp 3.8.4
 *
 * @author: fr0zen
 * @author URI: https://sellix.io/fr0zen
 * @copyright: (c) 2021 Vincenzo Piromalli. All rights reserved
 * ----------------------------------------------------
 * 
 */

/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


require_once get_template_directory() . '/inc/moviewp-init.php';
require_once get_template_directory() . '/license.php';
require_once get_template_directory() . '/inc/moviewp-inc.php';
require_once get_template_directory() . '/inc/moviewp-global.php';
require_once get_template_directory() . '/inc/moviewp-hook.php';
require_once get_template_directory() . '/inc/moviewp-api.php';
require_once get_template_directory() . '/inc/moviewp-fields.php';
require_once get_template_directory() . '/inc/moviewp-tgm.php';
require_once get_template_directory() . '/inc/moviewp-plugin.php';
require_once get_template_directory() . '/inc/moviewp-comments.php';
require_once get_template_directory() . '/inc/moviewp-fix.php';
require_once get_template_directory() . '/inc/moviewp-like.php';
require_once get_template_directory() . '/inc/moviewp-favorites.php';
require_once get_template_directory() . '/inc/moviewp-views.php';
require_once get_template_directory() . '/inc/moviewp-widget.php';
require_once get_template_directory() . '/inc/moviewp-minifier.php';
require_once get_template_directory() . '/inc/moviewp-transient.php';
require_once get_template_directory() . '/inc/moviewp-customizer.php';
//include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
//here your code
