<?php

/**
 * カスタムヘッダー機能の実装例
 *
 * header.phpにオプションでカスタムヘッダー画像を以下のように追加することができます ...
 *
 * <?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package sophie
 */

/**
 *  WordPressコアのカスタムヘッダー機能を設定
 *
 * @uses header_style()
 */
function custom_header_setup()
{
  add_theme_support(
    'custom-header',
    apply_filters(
      'custom_header_args',
      array(
        'default-image'      => '',
        'default-text-color' => '3e3e3e',
        'width'              => 1000,
        'height'             => 250,
        'flex-height'        => true,
        'wp-head-callback'   => 'header_style',
      )
    )
  );
}
add_action('after_setup_theme', 'custom_header_setup');

if (!function_exists('header_style')) :
  /**
   * ブログに表示されるヘッダー画像やテキストをスタイル設定
   *
   * @see custom_header_setup().
   */
  function header_style()
  {
    $header_text_color = get_header_textcolor();

    /*
    * テキストに関するカスタムオプションが設定されていない場合は、ベールしましょう。
    * get_header_textcolor() オプション。任意の16進数値、テキストを隠すには 'blank' とします。デフォルト: add_theme_support( 'custom-header' ).
    */
    if (get_theme_support('custom-header', 'default-text-color') === $header_text_color) {
      return;
    }

?>
    <style type="text/css">
      <?php
      // タイトルと説明を隠す
      if (!display_header_text()) :
      ?>.site-title,
      .site-description {
        position: absolute;
        clip: rect(1px, 1px, 1px, 1px);
      }

      <?php
      // ユーザーがテキストにカスタムカラーを設定している場合はそれを使用
      else :
      ?>.site-title a,
      .site-description {
        color: #<?php echo esc_attr($header_text_color); ?>;
      }

      <?php endif; ?>
    </style>
<?php
  }
endif;
