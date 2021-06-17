<?php

function update_item ($data) {
  $my_post = array(
    'ID'           => $data['ID'],
    'post_content' => $data['post_content']
  );

  wp_update_post( $my_post );
}

add_action( 'rest_api_init', function () {
  register_rest_route( 'wiki/v1', '/update-item', array(
    'methods' => 'POST',
    'callback' => 'update_item',
  ) );
} );
