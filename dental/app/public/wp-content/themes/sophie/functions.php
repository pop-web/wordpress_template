<?php

// global $wp_rewrite;
// $wp_rewrite->flush_rules();

/**
 * minnanowordpress functions and definitions
 *
 * @package minnanowordpress
 */

if (!defined('VERSION')) {
  // Replace the version number of the theme on each release.
  define('VERSION', '1.0.0');
}

function widgets_init()
{
  register_sidebar(
    array(
      'name'          => esc_html__('Sidebar', 'minnanowordpress'),
      'id'            => 'sidebar-1',
      'description'   => esc_html__('Add widgets here.', 'minnanowordpress'),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    )
  );
}
add_action('widgets_init', 'widgets_init');


// ウィジェットブロックエディターの停止
function my_remove_widgets_block_editor()
{
  remove_theme_support('widgets-block-editor');
}
add_action('after_setup_theme', 'my_remove_widgets_block_editor');

// 冒頭抜粋文の文字数変更
function custom_excerpt_length( $length ) {
  return 100;	//表示したい文字数
}
add_filter( 'excerpt_length', 'custom_excerpt_length');

// 抜粋文の文末[…]の変更
function new_excerpt_more($more) {
	return '…'; //変更後の内容
}
add_filter('excerpt_more', 'new_excerpt_more');

// title タグの出力
add_theme_support('title-tag');

// メニュー
register_nav_menus(
  array(
    'headernav' => 'ヘッダーナビ',
    'footernav' => 'フッターナビ',
  )
);

/**
 * Load theme style
 *
 * @return void
 */
function theme_style()
{
  // bootstrap.min.css
  wp_enqueue_style('bootstrap-style', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css", array(), VERSION);
  // bootstrap-icons.css
  wp_enqueue_style('bootstrap-icons', "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css", array('bootstrap-style'), VERSION);
  wp_enqueue_style('theme-style', get_stylesheet_uri(), array('bootstrap-style'), VERSION);
  // bootstrap.bundle.min.js
  wp_enqueue_script('bootstrap-script', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js", array(), VERSION);
}
add_action('wp_enqueue_scripts', 'theme_style');


/*
* Enable support for Post Thumbnails on posts and pages.
*
* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
*/
add_theme_support('post-thumbnails');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
  require get_template_directory() . '/inc/jetpack.php';
}