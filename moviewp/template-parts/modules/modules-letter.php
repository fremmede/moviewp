<?php
/*
 * Displays the alphabetic letter module 
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
 
?>

<li class="dropdown abc-filter">
	<div class="dropdown-toggle abc" data-toggle="dropdown"><i class="fa fa-sort-alpha-asc"></i></div>
	<ul class="dropdown-menu">
		<?php foreach (range(0, 9) as $number) { ?>
			<li class="abc<?php if (isset($_GET['ap'])) { if ($_GET['ap'] == ''.$number.'') echo " active"; } else { echo ""; } ?>"><a href="<?php echo esc_url( home_url() ); ?>/letter/?ap=<?php echo $number; ?>"><?php echo $number; ?></a></li>
		<?php } ?>
		<?php foreach (range('A', 'Z') as $letter) { ?>
			<li class="abc<?php if (isset($_GET['ap'])) { if ($_GET['ap'] == ''.$letter.'') echo " active"; } else { echo ""; } ?>"><a href="<?php echo esc_url( home_url() ); ?>/letter/?ap=<?php echo $letter; ?>"><?php echo $letter; ?></a></li>
		<?php } ?>
	</ul>
</li>

