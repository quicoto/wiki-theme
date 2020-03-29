<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wiki
 */

?>
			<p class="toc-jump text-right mb-0">
				<a href="#content">Back to top &uarr;</a>
			</p>
			</div> <!--.col -->
		</div> <!--.row -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer bg-light text-dark pt-5 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6 text-center text-md-left mb-3 mb-md-0">
					Since 2020 powered by WordPress
				</div>
				<div class="col-12 col-md-6 text-center text-md-right">
					<a href="https://github.com/quicoto/wiki-theme">Wiki Theme</a> ❤️ by <a href="https://ricard.blog/">Ricard Torres</a>
				</div> <!-- .col -->
			</div> <!-- .row -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<?php get_template_part( 'template-parts/scripts' ); ?>

</body>
</html>
