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

/*====================================*\
	Window Unload Error Final Fix
\*====================================*/

add_action('admin_print_footer_scripts', 'wp_561_window_unload_error_final_fix');
function wp_561_window_unload_error_final_fix(){
?>
<script>
jQuery(document).ready(function($){

            // Check screen
            if(typeof window.wp.autosave === 'undefined')
                return;

            // Data Hack
            var initialCompareData = {
                post_title: $( '#title' ).val() || '',
                content: $( '#content' ).val() || '',
                excerpt: $( '#excerpt' ).val() || ''
            };

            var initialCompareString = window.wp.autosave.getCompareString(initialCompareData);

            // Fixed postChanged()
            window.wp.autosave.server.postChanged = function(){

                var changed = false;

                // If there are TinyMCE instances, loop through them.
                if ( window.tinymce ) {
                    window.tinymce.each( [ 'content', 'excerpt' ], function( field ) {
                        var editor = window.tinymce.get( field );

                        if ( ( editor && editor.isDirty() ) || ( $( '#' + field ).val() || '' ) !== initialCompareData[ field ] ) {
                            changed = true;
                            return false;
                        }

                    } );

                    if ( ( $( '#title' ).val() || '' ) !== initialCompareData.post_title ) {
                        changed = true;
                    }

                    return changed;
                }

                return window.wp.autosave.getCompareString() !== initialCompareString;

            }
        });
</script>
<?php
}