<?php

function private_mode() {
  if ( !is_user_logged_in() ) {
    header('Location: '.get_home_url() . '/wp-admin/');
  }
}

add_action("get_header", "private_mode");
