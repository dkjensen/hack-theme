<?php
/**
 * Download functions.
 *
 * @package Dkjensen\Hack
 */

namespace Dkjensen\Hack\Functions;

/**
 * Force file download of resource or return 404
 *
 * @return void
 */
function resource_download() {
	global $wp_query;

	if ( is_singular( 'resource' ) && ! post_password_required() ) {
		$download = get_post_meta( get_the_ID(), 'download', true );

		if ( $download ) {
			$file = get_attached_file( $download );

			if ( $file ) {
				header( 'Content-Disposition: attachment; filename="' . basename( $file ) . '"' );
				header( 'Content-Type: application/octet-stream' );
				header( 'Expires: 0' );
				header( 'Cache-Control: must-revalidate' );
				header( 'Pragma: public' );
				header( 'Content-Length: ' . filesize( $file ) );
				readfile( $file );
				exit;
			}
		}

		$wp_query->set_404();
		status_header( 404 );
	}
}
add_action( 'wp', __NAMESPACE__ . '\resource_download' );
