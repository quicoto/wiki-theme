<?php

add_action( 'save_post', 'redirect_user_page_list', 10, 3 );

function redirect_user_page_list( $post_ID) {
  wp_redirect(get_post_permalink($post_ID));
}