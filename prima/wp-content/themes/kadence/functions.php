<?php
/**
 * Kadence functions and definitions
 *
 * This file must be parseable by PHP 5.2.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kadence
 */

define( 'KADENCE_VERSION', '1.2.14' );
define( 'KADENCE_MINIMUM_WP_VERSION', '6.0' );
define( 'KADENCE_MINIMUM_PHP_VERSION', '7.4' );

// Bail if requirements are not met.
if ( version_compare( $GLOBALS['wp_version'], KADENCE_MINIMUM_WP_VERSION, '<' ) || version_compare( phpversion(), KADENCE_MINIMUM_PHP_VERSION, '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}
// Include WordPress shims.
require get_template_directory() . '/inc/wordpress-shims.php';

// Load the `kadence()` entry point function.
require get_template_directory() . '/inc/class-theme.php';

// Load the `kadence()` entry point function.
require get_template_directory() . '/inc/functions.php';

// Initialize the theme.
call_user_func( 'Kadence\kadence' );


add_action( 'wp_enqueue_scripts', 'add_styles_and_scripts' );
function add_styles_and_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css' );
}


add_shortcode( 'header_menu', 'call_header_menu' );
function call_header_menu( $atts ){
	$params = shortcode_atts( array(
		'menu-id' => 101,

	), $atts );

	ob_start();

	echo '<div class="main-navigation header-navigation nav--toggle-sub header-navigation-style-underline header-navigation-dropdown-animation-fade-up">';

	wp_nav_menu( [
		'theme_location'  => '',
		'menu'            => $params['menu-id'],
		'container'       => 'div',
		'container_class' => 'primary-menu-container header-menu-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => '',
	]);

	echo '</div>';

	$result = ob_get_clean();

	return $result;
}