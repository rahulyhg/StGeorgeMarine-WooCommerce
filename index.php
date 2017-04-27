<?php

$allowed_ips = array(
	// Derek
	"71.63.134.245",
	// Derek (Work)
	"107.1.156.225",
	// Brianna & Sean
	"76.121.42.104"
);

if(!in_array($_SERVER['REMOTE_ADDR'], $allowed_ips))
{
	header("Location: http://fvbrennaa.com/coming-soon/index.html");
	die();
}

/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
