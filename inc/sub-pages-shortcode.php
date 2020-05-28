<?php

function wiki_childpages() {
  global $post;

  if ( is_page() && $post->post_parent )
    $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
  else
    $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );

  if ( $childpages ) {
    $string = '<span class="h3 d-block">Sub pages</span>';
    $string = $string . '<ul>' . $childpages . '</ul>';
    $string = $string . '<hr>';
  }

  return $string;
}

add_shortcode('wiki_childpages', 'wiki_childpages');