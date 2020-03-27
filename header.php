<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wiki
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page">
	<header id="masthead" class="site-header bg-primary text-white pt-3 pb-3 mb-3 pt-md-5 pb-md-5 mb-md-5">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6">
				<div class="site-branding text-center text-md-left">
					<?php
						the_custom_logo(); ?>
							<h1 class="site-title"><a class="text-white" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

						<?php
						$wiki_description = get_bloginfo( 'description', 'display' );
						if ( $wiki_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $wiki_description; /* WPCS: xss ok. */ ?></p>
						<?php endif; ?>
					</div><!-- .site-branding -->
				</div> <!-- .col -->

				<div class="col-12 col-md-6">
					<nav id="site-navigation" class="navbar">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'wiki' ); ?></button>
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
						?>
					</nav><!-- #site-navigation -->
				</div> <!-- .col -->

				<div class="col-12 col-lg-6 offset-lg-3 pt-3 pt-md-5">
					<?php get_search_form(); ?>
				</div>
			</div> <!-- .row -->
		</div> <!-- .container -->

	</header><!-- #masthead -->

	<div id="content" class="container mb-5">
