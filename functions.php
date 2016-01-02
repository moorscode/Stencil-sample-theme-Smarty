<?php
/**
 * Bare minimum Stencil theme functions.php
 *
 * @package Stencil
 * @subpackage Theme
 */

// Make sure WordPress is loaded.
if ( ! function_exists( 'add_filter' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden', true, 403 );
	exit();
}

// Load Stencil framework.
require_once 'stencil/stencil-loader.php';

// Include WordPress Objects (Optional).
require_once 'functions/wordpress-objects.php';

// All requests are handled by index.php (Optional).
add_filter( 'stencil:template_index_only', '__return_true' );

// All permalinks are enforced (Optional).
add_filter( 'stencil:force_permalink', '__return_true' );

// Hook into the require filter to tell Stencil what Implementation we need (Required).
add_filter( 'stencil:require', 'smarty3_theme_implementation' );

/**
 * Tell Stencil what implementation this theme needs
 *
 * @return string
 */
function smarty3_theme_implementation() {
	return 'Smarty 3.x';
}

// Load the router, which handles running controllers (Optional).
add_action( 'after_setup_theme', 'smarty3_theme_router' );

/**
 * Load the router script that calls specific controllers
 */
function smarty3_theme_router() {
	if ( ! is_admin() ) {
		include( 'router/router.php' );
	}
}
