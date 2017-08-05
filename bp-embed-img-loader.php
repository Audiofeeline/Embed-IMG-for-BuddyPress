<?php
/*
Plugin Name: Embed Images for BuddyPress
Description: Permet d'afficher des images de n'importe quel site (y compris le vôtre) dans votre timeline BuddyPress
Author: George Desmyter
Author URI: http://bargeo.fr
Plugin URI: http://glob.bargeo.fr/?p=5102
Version: 0.1
License: CC-GNU-GPL http://creativecommons.org/licenses/GPL/2.0/
*/

/* Only load the plugin if BP is loaded and initialized. */
function bp_oembed_img_init() {
	require( dirname( __FILE__ ) . '/bp-embed-img.php' );
}
add_action( 'bp_init', 'bp_oembed_img_init' );
?>
