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
	<div class="col mb-4">
		<?php echo do_shortcode("[breadcrumb]"); ?>
		<a class="btn btn-outline-primary d-inline-block float-right" href="<?=get_edit_post_link()?>" role="button"><span class="edit-icon">✏️</span> Edit</a>
	</div>
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title d-inline-block pb-0">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php wiki_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
			the_content();
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
