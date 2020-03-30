<script>
jQuery( document ).ready(function() {
  const drawerTogglerClass = 'drawer-toggler';

  $checkbox = jQuery('#drawer-checkbox');
  $drawerToggle = jQuery(`.${drawerTogglerClass}`);

  if ($checkbox && $drawerToggle) {
    $drawerToggle.on('click', () => {
      $checkbox.prop("checked", !$checkbox.prop("checked"));
    });
  }

  jQuery('body').on('click', (event) => {
    if (!event.target.classList.contains(drawerTogglerClass) && $checkbox) {
      $checkbox.prop("checked", false);
    }
  });
});
</script>