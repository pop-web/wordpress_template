<?php

// global $wp_rewrite;
// $wp_rewrite->flush_rules();

// update_option('fresh_site', 1);
// echo get_option('fresh_site');
// exit;
/**
 * sophie functions and definitions
 *
 * @link https://developer.wordpress.org/themes/
 *
 * basics/theme-functions/
 *
 * @package sophie
 */

if (!defined('VERSION')) {
  // Replace the version number of the theme on each release.
  define('VERSION', '1.0.0');
}

// テーマのデフォルト設定とWordPressの各種機能への対応登録
if (!function_exists('setup')) :
  function setup()
  {
    // headにデフォルトの投稿とコメントのRSSフィードのリンクを追加
    add_theme_support('automatic-feed-links');

    // title タグの出力
    add_theme_support('title-tag');


    /*
		 * 投稿とページで投稿サムネイルをサポート
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
    add_theme_support('post-thumbnails');

    // メニュー設定
    register_nav_menus(
      array(
        'headernav' => 'ヘッダーナビ',
        'footernav' => 'フッターナビ',
      )
    );

    /*
		 * 検索フォーム、コメントフォーム、コメントのデフォルトコアマークアップの切り替え
		 * 有効な HTML5 を出力するように
		 */
    add_theme_support(
      'html5',
      array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
      )
    );

    // カスタム背景機能を設定
    add_theme_support(
      'custom-background',
      apply_filters(
        'custom_background_args',
        array(
          'default-color' => 'ffffff',
          'default-image' => '',
        )
      )
    );

    // ウィジェットの選択的更新をサポートするテーマの追加
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * カスタムロゴのサポート追加
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
      'custom-logo',
      array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
      )
    );
  }
endif;
add_action('after_setup_theme', 'setup');

function widgets_init()
{
  register_sidebar(
    array(
      'name'          => esc_html__('Sidebar', 'sophie'),
      'id'            => 'sidebar-1',
      'description'   => esc_html__('Add widgets here.', 'sophie'),
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
function custom_excerpt_length($length)
{
  return 100;  //表示したい文字数
}
add_filter('excerpt_length', 'custom_excerpt_length');

// 抜粋文の文末[…]の変更
function new_excerpt_more($more)
{
  return '…'; //変更後の内容
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
 * Load theme style
 *
 * @return void
 */
function theme_style()
{
  wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), VERSION);
  wp_enqueue_script('theme-script', get_theme_file_uri('js/dist/bundle.js'),  array('jquery', 'jquery-ui-accordion'), VERSION);
  // bootstrap-icons.css
  wp_enqueue_style('bootstrap-icons', "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css", array(), VERSION);
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

/**
 * Format Phone Number
 */
require get_template_directory() . '/inc/format-phone-number.php';

/**
 * 記事並び替え
 */
require get_template_directory() . '/inc/post-order.php';


/**
 * Post Type: テーマ
 **/

function about_post_type()
{
  //投稿時に使用できる投稿用のパーツを指定
  $supports = array(
    'title', //タイトルフォーム
    'editor', //エディター(内容の編集)
    'thumbnail', //アイキャッチ画像
    //'author', //投稿者
    //'excerpt', //抜粋
    // 'revisions', //リビジョンを保存
  );
  register_post_type(
    'about', // 投稿タイプ名の定義
    [
      'labels' => [
        'name' => '当院ついて', // 管理画面上で表示する投稿タイプ名
        'menu_name' => '当院ついて', //メニュー名のテキスト
        'all_items' => '当院ついて一覧' //  すべてのメニュー名
      ],
      'public'        => true,  // カスタム投稿タイプの表示(trueにする)
      'has_archive'   => true, // カスタム投稿一覧(true:表示/false:非表示)
      'menu_position' => 5,     // 管理画面上での表示位置
      'show_in_rest'  => true,  // true:「Gutenberg」/ false:「ClassicEditor」
      'supports' => $supports
    ]
  );
}
add_action('init', 'about_post_type');

function service_post_type()
{
  //投稿時に使用できる投稿用のパーツを指定
  $supports = array(
    'title', //タイトルフォーム
    'editor', //エディター(内容の編集)
    'thumbnail', //アイキャッチ画像
    //'author', //投稿者
    //'excerpt', //抜粋
    // 'revisions', //リビジョンを保存
  );
  register_post_type(
    'service', // 投稿タイプ名の定義
    [
      'labels' => [
        'name' => '診察内容', // 管理画面上で表示する投稿タイプ名
        'menu_name' => '診察内容', //メニュー名のテキスト
        'all_items' => '診察内容一覧' //  すべてのメニュー名
      ],
      'public'        => true,  // カスタム投稿タイプの表示(trueにする)
      'has_archive'   => true, // カスタム投稿一覧(true:表示/false:非表示)
      'menu_position' => 6,     // 管理画面上での表示位置
      'show_in_rest'  => true,  // true:「Gutenberg」/ false:「ClassicEditor」
      'supports' => $supports
    ]
  );
}
add_action('init', 'service_post_type');



function qa_post_type()
{
  //投稿時に使用できる投稿用のパーツを指定
  $supports = array(
    'title', //タイトルフォーム
    'editor', //エディター(内容の編集)
    'thumbnail', //アイキャッチ画像
    //'author', //投稿者
    //'excerpt', //抜粋
    // 'revisions', //リビジョンを保存
  );
  register_post_type(
    'qa', // 投稿タイプ名の定義
    [
      'labels' => [
        'name' => 'よくある質問', // 管理画面上で表示する投稿タイプ名
        'menu_name' => 'よくある質問', //メニュー名のテキスト
        'all_items' => 'よくある質問一覧' //  すべてのメニュー名
      ],
      'public'        => true,  // カスタム投稿タイプの表示(trueにする)
      'has_archive'   => true, // カスタム投稿一覧(true:表示/false:非表示)
      'menu_position' => 7,     // 管理画面上での表示位置
      'show_in_rest'  => true,  // true:「Gutenberg」/ false:「ClassicEditor」
      'supports' => $supports
    ]
  );
}
add_action('init', 'qa_post_type');


function news_post_type()
{
  //投稿時に使用できる投稿用のパーツを指定
  $supports = array(
    'title', //タイトルフォーム
    'editor', //エディター(内容の編集)
    'thumbnail', //アイキャッチ画像
    //'author', //投稿者
    //'excerpt', //抜粋
    // 'revisions', //リビジョンを保存
  );
  register_post_type(
    'news', // 投稿タイプ名の定義
    [
      'labels' => [
        'name' => 'お知らせ', // 管理画面上で表示する投稿タイプ名
        'menu_name' => 'お知らせ', //メニュー名のテキスト
        'all_items' => 'お知らせ一覧' //  すべてのメニュー名
      ],
      'public'        => true,  // カスタム投稿タイプの表示(trueにする)
      'has_archive'   => true, // カスタム投稿一覧(true:表示/false:非表示)
      'menu_position' => 8,     // 管理画面上での表示位置
      'show_in_rest'  => true,  // true:「Gutenberg」/ false:「ClassicEditor」
      'supports' => $supports
    ]
  );
}
add_action('init', 'news_post_type');




// $starter_content = [
//   'posts' => [
//     'custom' => [
//       'post_type' => 'post',
//       'post_title' => 'Hello, Dolly',
//       'post_excerpt' => 'This is a example Starter Contnet Blog post.',
//       'post_name' => 'example-blog-post',
//       'post_content' => "Hello, Dolly
// Well, hello, Dolly
// It's so nice to have you back where you belong
// You're lookin' swell, Dolly
// I can tell, Dolly
// You're still glowin', you're still crowin'
// You're still goin' strong
// We feel the room swayin'
// While the band's playin'
// One of your old favourite songs from way back when
// So, take her wrap, fellas
// Find her an empty lap, fellas
// Dolly'll never go away again
// Hello, Dolly
// Well, hello, Dolly
// It's so nice to have you back where you belong
// You're lookin' swell, Dolly
// I can tell, Dolly
// You're still glowin', you're still crowin'
// You're still goin' strong
// We feel the room swayin'
// While the band's playin'
// One of your old favourite songs from way back when
// Golly, gee, fellas
// Find her a vacant knee, fellas
// Dolly'll never go away
// Dolly'll never go away
// Dolly'll never go away again",
//       'comment_status' => 'closed',
//     ]
//   ],
// ];

// add_theme_support('starter-content', $starter_content);
