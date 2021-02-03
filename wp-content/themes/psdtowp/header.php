<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PSDtoWP
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'psdtowp' ); ?></a>

	<header id="masthead" class="site-header">

		<div class="small-header row">
			<div class="container">
				<div class="pull-left col-lg-7 col-md-7 col-sm-12 sol-xs-12">
					<div class="topbar-left-section">
						<div class="topbar-info">
							<i class="fa fa-mobile"></i> +565 975 658
						</div>
						<div class="topbar-info">
							<i class="fa fa-envelope"></i> info@revenant.com
						</div>
						<div class="topbar-info">
							<i class="fa fa-clock-o"></i> Monday-Friday, 8.00-20.00
						</div>
					</div>
				</div>
				<div class="pull-right col-lg-5 col-md-5 col-sm-12 sol-xs-12">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-2',
								'menu_id'        => 'top-bar-menu',
								'container_class' => 'top-bar-menu-container',
								'menu_class' => 'top-bar-menu'
							)
						);
					?>
				</div>
			</div>
		</div>
		<div class="site-branding row ml-0 mr-0">
			<div class="container">
				<?php
					the_custom_logo();
				?>
			</div>
		</div><!-- .site-branding -->
		<div class="nav-row row ml-o mr-0">
			<div class="container">
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'psdtowp' ); ?></button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'container_class' => 'main-menu'
						)
					);
					?>
				</nav><!-- #site-navigation -->
			</div>
		</div>
	
	</header><!-- #masthead -->
