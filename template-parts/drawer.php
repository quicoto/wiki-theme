<div class="drawer">
  <nav class="nav-main">
    <label>
      <input type="checkbox" id="drawer-checkbox" />
      <ul class="drawer-pages">
        <?php
          print_r(wp_list_pages(array(
            'sort_column' => 'post_name',
            'title_li' => '',
            'exclude' => '24',
          )));
        ?>
      </ul>
    </label>
  </nav>
</div>