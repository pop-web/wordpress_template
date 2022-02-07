<?php

/**
 * sophie Theme Customizer
 *
 * @package sophie
 */

/**
 * テーマカスタマイザーのサイトタイトルと説明文にpostMessageのサポートを追加
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function customize_register($wp_customize)
{
  $wp_customize->get_setting('blogname')->transport         = 'postMessage';
  $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
  $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

  if (isset($wp_customize->selective_refresh)) {
    $wp_customize->selective_refresh->add_partial(
      'blogname',
      array(
        'selector'        => '.site-title a',
        'render_callback' => 'customize_partial_blogname',
      )
    );
    $wp_customize->selective_refresh->add_partial(
      'blogdescription',
      array(
        'selector'        => '.site-description',
        'render_callback' => 'customize_partial_blogdescription',
      )
    );
  }
}
add_action('customize_register', 'customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function customize_partial_blogname()
{
  bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function customize_partial_blogdescription()
{
  bloginfo('description');
}



/**
 * テーマカスタマイザーのプレビューが非同期に変更を再読み込みするようにJSハンドラをバインド
 */
function customize_preview_js()
{
  wp_enqueue_script('customizer', get_template_directory_uri() . '/js/src/customizer.js', array('customize-preview'), VERSION, true);
}
add_action('customize_preview_init', 'customize_preview_js');
