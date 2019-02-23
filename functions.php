<?php
/**
 * Nothing theme function
 *
 * One function to display nothing.
 *
 * @package Nothing
 * @version 1.0
 * @since 1.0
 */

function show_nothing() {
	if ( is_admin() ) {
		return;
	} // Ignore admin requests

	$filename = get_template_directory() . '/nothing.html';
	$html     = file_exists( $filename ) ? file_get_contents( $filename ) : '';
	echo $html;
	exit;
}

add_action( 'template_redirect', 'show_nothing', 9999, 0 );
