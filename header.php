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

	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/site.webmanifest">
	<link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/safari-pinned-tab.svg" color="#00b4b3">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00b4b3">
	<meta name="msapplication-config" content="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/browserconfig.xml">
	<meta name="theme-color" content="#00b4b3">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php get_template_part( 'template-parts/drawer' ); ?>

<?php wp_body_open(); ?>
<div id="page">
	<header id="masthead" class="site-header text-white mb-3 bg-primary">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-md navbar-dark">
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">📝 <?php bloginfo( 'name' ); ?></a>
						<button class="navbar-toggler drawer-toggler" type="button">
								<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto">
								<?php
									wp_nav_menu( array(
											'theme_location'    => 'primary',
											'depth'             => 2,
											'container'         => 'div',
											'container_class'   => 'collapse navbar-collapse',
											'container_id'      => 'primary-menu',
											'menu_class'        => 'nav navbar-nav ml-auto',
											'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
											'walker'            => new WP_Bootstrap_Navwalker(),
									) );
									?>
							</ul>
							<?php get_search_form(); ?>
						</div>
					</nav>
				</div> <!-- .col -->
			</div> <!-- .row -->
		</div> <!-- .container -->

	</header><!-- #masthead -->

	<div id="content" class="container mb-1">
		<div class="row">
			<div class="col-12 col-md-4 col-lg-3 d-none d-md-block">
				<?php get_sidebar(); ?>
			</div>

			<div class="col-12 col-md-8 col-lg-9">

