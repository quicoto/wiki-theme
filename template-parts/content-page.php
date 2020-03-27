<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wiki
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<p class="text-right">
		<a class="btn btn-outline-primary" href="<?=get_edit_post_link()?>" role="button"><span class="edit-icon">✏️</span> Edit</a>
	</p>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php wiki_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
			the_content();
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
