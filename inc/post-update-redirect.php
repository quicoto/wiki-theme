<?php

add_filter( 'redirect_post_location', 'wpse_124132_redirect_post_location' );

/**
 * Redirect to the edit.php on post save or publish.
 */
function wpse_124132_redirect_post_location( $location ) {
    if ( isset( $_POST['save'] ) || isset( $_POST['publish'] ) ) {
      return admin_url( "edit.php" );
    }

    return $location;
}