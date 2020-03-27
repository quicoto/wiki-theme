<?php

function admin_default_page() {
  return get_home_url();
}

add_filter('login_redirect', 'admin_default_page');