<?php
/**
 * Plugin Name: Hey Wapuu
 * Plugin URI:
 * Description: Hello Dolly, but with your WordPress buddy, Wapuu.
 * Version: 1.0
 * Author: Nikhil Vimal
 * Author URI: http://nik.techvoltz.com
 * License: GPL2
 */
 */

function get_wapuu() {

	$wapuu = "https://github.com/marktimemedia/my-wapuu/raw/master/png/wapuu-sleepy-wordcamp.png
	https://github.com/marktimemedia/my-wapuu/raw/master/png/wapuu-brainhurts.png
	https://github.com/marktimemedia/my-wapuu/raw/master/png/wapuu-dev.png
	https://github.com/marktimemedia/my-wapuu/raw/master/png/wapuu-struggle.png";

	$$wapuu = explode( "\n", $$wapuu );
	return wptexturize( $wapuu[ mt_rand( 0, count( $wapuu ) - 1 ) ] );
}

/**
 * The main function
 */
function hey_wapuu() {
	$wapuus = get_wapuu();
	echo "<img src='$wapuus' width='7%' style='float: right' height='10%'>";
}
add_action( 'admin_notices', 'hey_wapuu' );