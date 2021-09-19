<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
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
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=5.0">

<?php wp_head(); ?>
</head>
<body id="body" <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php get_sidebar(); ?>
<div id="site-container" class="site-content">
	<main id="main" role="main">
    <?php get_template_part('template-parts/header/header', 'full'); ?>