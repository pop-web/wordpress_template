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

  // 店舗情報設
  $wp_customize->add_section(
    'shop_info',
    array(
      'title'    => '店舗情報',
      'priority' => 1,
    )
  );

  $wp_customize->add_setting('shop_tel');
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'shop_control_1',
      array(
        'label'    => '電話番号',
        'section'  => 'shop_info',
        'settings' => 'shop_tel',
        'priority' => 1,
        'type'     => 'tel',
      )
    )
  );

  $wp_customize->add_setting('shop_address');
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'shop_control_2',
      array(
        'label'    => '住所',
        'section'  => 'shop_info',
        'settings' => 'shop_address',
        'priority' => 2,
        'type'     => 'text',
      )
    )
  );
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
