<?php

function wiki_childpages() {
  global $post;

  $childpages = wp_list_pages( 'sort_column=post_name&title_li=&child_of=' . $post->ID . '&echo=0' );

  if ( $childpages ) {
    $string = '<span class="h3 d-block">Sub pages</span>';
    $string = $string . '<ul>' . $childpages . '</ul>';
    $string = $string . '<hr>';
  }

  return $string;
}

add_shortcode('wiki_childpages', 'wiki_childpages');