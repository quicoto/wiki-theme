<?php


/**
 * Get accessible color for an area.
 *
 * @since 1.0.0
 *
 * @param string $area The area we want to get the colors for.
 * @param string $context Can be 'text' or 'accent'.
 * @return string Returns a HEX color.
 */
function twentytwenty_get_color_for_area( $area = 'content', $context = 'text' ) {

	// Get the value from the theme-mod.
	$settings = get_theme_mod(
		'accent_accessible_colors',
		array(
			'content'       => array(
				'text'      => '#212529',
				'primary'    => '#00b4b3',
				'white' => '#FFF',
				'borders'   => '#dcd7ca',
				'success'   => '#28a745',
				'danger'   => '#dc3545',
        'info'   => '#17a2b8',
        'warning'   => '#ffc107',
			),
			'header-footer' => array(
				'text'      => '#212529',
				'primary'    => '#00b4b3',
				'white' => '#FFF',
        'borders'   => '#dcd7ca',
        'success'   => '#28a745',
        'danger'   => '#dc3545',
        'info'   => '#17a2b8',
        'warning'   => '#ffc107',
			),
		)
	);

	// If we have a value return it.
	if ( isset( $settings[ $area ] ) && isset( $settings[ $area ][ $context ] ) ) {
		return $settings[ $area ][ $context ];
	}

	// Return false if the option doesn't exist.
	return false;
}

/**
 * Block Editor Settings.
 * Add custom colors and font sizes to the block editor.
 */
function wiki_block_editor_settings() {

	// Block Editor Palette.
	$editor_color_palette = array(
		array(
			'name'  => __( 'Primary', 'twentytwenty' ),
			'slug'  => 'primary',
			'color' => twentytwenty_get_color_for_area( 'content', 'primary' ),
		),
		array(
			'name'  => __( 'Body text', 'twentytwenty' ),
			'slug'  => 'Body text',
			'color' => twentytwenty_get_color_for_area( 'content', 'text' ),
		),
		array(
			'name'  => __( 'White', 'twentytwenty' ),
			'slug'  => 'white',
			'color' => twentytwenty_get_color_for_area( 'content', 'white' ),
		),
		array(
			'name'  => __( 'Subtle Background', 'twentytwenty' ),
			'slug'  => 'subtle-background',
			'color' => twentytwenty_get_color_for_area( 'content', 'borders' ),
    ),
    array(
			'name'  => __( 'Danger', 'twentytwenty' ),
			'slug'  => 'danger',
			'color' => twentytwenty_get_color_for_area( 'content', 'danger' ),
    ),
    array(
			'name'  => __( 'Warning', 'twentytwenty' ),
			'slug'  => 'warning',
			'color' => twentytwenty_get_color_for_area( 'content', 'warning' ),
    ),
    array(
			'name'  => __( 'Info', 'twentytwenty' ),
			'slug'  => 'info',
			'color' => twentytwenty_get_color_for_area( 'content', 'info' ),
    ),
    array(
			'name'  => __( 'Success', 'twentytwenty' ),
			'slug'  => 'success',
			'color' => twentytwenty_get_color_for_area( 'content', 'success' ),
		),
	);

	// If we have accent colors, add them to the block editor palette.
	if ( $editor_color_palette ) {
		add_theme_support( 'editor-color-palette', $editor_color_palette );
	}

	// If we have a dark background color then add support for dark editor style.
	// We can determine if the background color is dark by checking if the text-color is white.
	if ( '#ffffff' === strtolower( twentytwenty_get_color_for_area( 'content', 'text' ) ) ) {
		add_theme_support( 'dark-editor-style' );
	}

}

add_action( 'after_setup_theme', 'wiki_block_editor_settings' );
