<?php
/*
Plugin Name: My First Plugin
*/
add_action('admin_head','my_favicon');

function my_favicon() {
  echo '<link rel="shortcut icon" type="image/x-icon" href="' . get_stylesheet_directory_uri() . '/img/favicon.ico" />';
}