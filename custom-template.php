<?php
/**
 * Template Name: Custom template
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

$stencil = get_stencil();
$stencil->set( 'origin', __FILE__ );
