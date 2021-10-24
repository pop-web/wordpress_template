<?php

/**
 * minnanowordpress functions and definitions
 *
 * @package minnanowordpress
 */

if (!defined('VERSION')) {
  // Replace the version number of the theme on each release.
  define('VERSION', '1.0.0');
}


/**
 * Load theme style
 *
 * @return void
 */
function theme_style()
{
  wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), VERSION);
}
add_action('wp_enqueue_scripts', 'theme_style');
