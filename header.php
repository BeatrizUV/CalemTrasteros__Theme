<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Header Template
 *
 *
 * @file           header.php
 * @package        Calem TRasteros
 * @author         Beatriz Urbano Vega
 * @filesource     wp-content/themes/calem-trasteros/header.php
 */
?>
	<!doctype html>
	<!--[if !IE]>
	<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 7 ]>
	<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 8 ]>
	<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 9 ]>
	<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
	<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title><?php wp_title( '&#124;', true, 'right' ); ?></title>

		<link rel="profile" href="http://gmpg.org/xfn/11"/>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>

		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>

<?php responsive_container(); // before container hook ?>
<div id="container" class="hfeed">

<?php responsive_header(); // before header hook ?>
	<div class="skip-container cf">
		<a class="skip-link screen-reader-text focusable" href="#main"><?php _e( '&darr; Skip to Main Content', 'responsive' ); ?></a>
	</div><!-- .skip-container -->
	<div id="header">

		<?php responsive_header_top(); // before header content hook ?>

		<?php if( has_nav_menu( 'top-menu', 'responsive' ) ) { ?>
			<?php wp_nav_menu( array(
								   'container'      => '',
								   'fallback_cb'    => false,
								   'menu_class'     => 'top-menu',
								   'theme_location' => 'top-menu'
							   )
			);
			?>
		<?php } ?>

		<?php responsive_in_header(); // header hook ?>

		<?php if( get_header_image() != '' ) : ?>

			<div id="logo">
				<a title="<?php bloginfo( 'name' ); ?>" href="<?php echo home_url( '/' ); ?>"><h1 style="display: block; border: 0; margin: 0; background: url('<?php header_image(); ?>') top left no-repeat; width: <?php echo get_custom_header()->width; ?>px; height: <?php echo get_custom_header()->height; ?>px; text-indent: -9999px;"><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></h1></a>
			</div><!-- end of #logo -->

		<?php endif; // header image was removed ?>

		<?php if( !get_header_image() ) : ?>

			<div id="logo">
				<span class="site-name"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
				<span class="site-description"><?php bloginfo( 'description' ); ?></span>
			</div><!-- end of #logo -->

		<?php endif; // header image was removed (again) ?>
    
    <h2 id="servicios">Alquiler de trasteros - Alquiler de almacenes - Alquiler de Minialmacenes - Self Storage</h2>

		<?php get_sidebar( 'top' ); ?>
		<?php wp_nav_menu( array(
							   'container'       => 'div',
							   'container_class' => 'main-nav',
							   'fallback_cb'     => 'responsive_fallback_menu',
							   'theme_location'  => 'header-menu'
						   )
		);
		?>

		<?php if( has_nav_menu( 'sub-header-menu', 'responsive' ) ) { ?>
			<?php wp_nav_menu( array(
								   'container'      => '',
								   'menu_class'     => 'sub-header-menu',
								   'theme_location' => 'sub-header-menu'
							   )
			);
			?>
		<?php } ?>

		<?php responsive_header_bottom(); // after header content hook ?>

	</div><!-- end of #header -->
<?php responsive_header_end(); // after header container hook ?>

<?php responsive_wrapper(); // before wrapper container hook ?>
	<div id="wrapper" class="clearfix">
<?php responsive_wrapper_top(); // before wrapper content hook ?>
<?php responsive_in_wrapper(); // wrapper hook ?>