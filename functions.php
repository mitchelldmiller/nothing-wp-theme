<?php
/**
 * Nothing theme function
 *
 * One function to display nothing.
 *
 * @package Nothing
 */

function show_nothing() {
	if ( is_admin() ) {
		return;
	} // Ignore admin requests

	$filename = get_template_directory() . '/nothing.html';
	$html     = file_exists( $filename ) ? file_get_contents( $filename ) : '<h1>Under Construction</h1>';
	echo $html;
	exit;
}

add_action( 'template_redirect', 'show_nothing', 9999, 0 );
