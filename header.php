<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fistiland
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text"
			href="#content"><?php esc_html_e( 'Skip to content', 'fistiland' ); ?></a>

		<header id="masthead" class="site-header">
			<div class="site-branding">
				<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
						rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
						rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			
			$fistiland_description = get_bloginfo( 'description', 'display' );
			if ( $fistiland_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $fistiland_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu"
					aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'fistiland' ); ?></button>
				<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
			</nav><!-- #site-navigation -->

			<h3>Découvrir Fistiland</h3>

			<button type="button" class="btn btn-primary" id="btnticket">Acheter un billet<a href="#"></a></button>
			<button type="button" class="btn btn-primary" id="btnroom">Réserver une place<a href="#"></a></button>
			
			<p id="dealtext" class="dealtext">Offre exceptionnelle -25% si vous réservez un mois à l'avance</p>

		</header><!-- #masthead -->

		<div id="content" class="site-content">

			</body>