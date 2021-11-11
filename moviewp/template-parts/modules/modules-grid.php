<?php
/*
 * Displays the list grid view module 
 * ----------------------------------------------------
 * @author: fr0zen
 * @author URI: https://fr0zen.shop/
 * @copyright: (c) 2021 Vincenzo Piromalli. All rights reserved
 * ----------------------------------------------------
 * @since 3.8.5
 * 9 november 2021
 */

/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
 
?>

<li class="dropdown grid gridView" id="id1" onclick='active("id1");'>
	<a href="javascript:void(0)" aria-label="grid" class="fa fa-th-large gridView"></a>
</li>
<li class="dropdown grid listView" id="id2" onclick='active("id2");'>
	<a href="javascript:void(0)" aria-label="list" class="fa fa-list listView"></a>
</li>

