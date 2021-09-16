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

get_template_part('moviewppanel/header'); ?>

<div class="moviewppanel-column">
	<?php if (isset($_POST["update_options"])) { ?>
		<?php moviewppanel_options('update_option'); ?>
		<div class="moviewppanel-box moviewppanel-updated"><?php echo __('The Reset complete successfully', 'moviewp'); ?></div>		
	<?php } ?>
	<div class="moviewppanel-box">
		<h2><?php echo __('Reset', 'moviewp'); ?></h2>
	</div>
	<div class="moviewppanel-box">
		<form action="" method="post" enctype="multipart/form-data">
		<h3><?php echo __('Reset MovieWP', 'moviewp'); ?></h3>
		<p><?php echo __('Restore theme options to default settings', 'moviewp'); ?></p>
		<hr>
		<p><input type="submit" name="update_options" value="<?php echo __('Reset settings', 'moviewp'); ?>" class="moviewppanel-button moviewppanel-button-color-1" onclick="answer = window.confirm('<?php echo __('Are you sure you want to reset all settings to the default values?', 'moviewp'); ?>'); return answer;"></p>
		</form>
	</div>
</div>

<?php get_template_part('moviewppanel/footer'); ?>