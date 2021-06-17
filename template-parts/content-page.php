<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wiki
 */

?>

<div class="row">
	<div class="col mb-2">
		<?php echo do_shortcode("[breadcrumb]"); ?>
	</div>
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title d-inline-block pb-0">', '</h1>' ); ?>
		<button id="edit-button" class="btn btn-outline-primary float-right" role="button">Edit</button>
		<button type="button" class="btn btn-primary frontend-editor-update float-right" hidden>Update</button>
	</header><!-- .entry-header -->

	<?php wiki_post_thumbnail(); ?>

	<div
		class="frontend-editor"
		hidden
		data-wpurl="<?=get_rest_url()?>"
		data-postid="<?=get_the_ID()?>"
		>
		<div class="mb-2">
			<?php
					// default settings - Kv_front_editor.php
					$editor_id = 'frontend_editor';
					$settings =   array(
							'wpautop' => true, // use wpautop?
							'media_buttons' => true, // show insert/upload button(s)
							'textarea_name' => $editor_id, // set the textarea name to something different, square brackets [] can be used here
							'textarea_rows' => get_option('default_post_edit_rows', 10), // rows="..."
							'tabindex' => '',
							'editor_css' => '', //  extra styles for both visual and HTML editors buttons,
							'editor_class' => 'frontend_editor_textarea', // add extra class(es) to the editor textarea
							'teeny' => false, // output the minimal editor config used in Press This
							'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
							'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
							'quicktags' => true // load Quicktags, can be used to pass settings directly to Quicktags using an array()
					);

						wp_editor( get_the_content(), $editor_id, $settings = array() );
			?>
		</div>
	</div>

	<div class="entry-content">
		<?php
			echo do_shortcode( '[wiki_childpages]' );
			the_content();
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
