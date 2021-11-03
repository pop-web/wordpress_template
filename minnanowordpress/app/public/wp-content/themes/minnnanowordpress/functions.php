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


/**
 * Post Type: テーマ一覧
 **/

function themelist_post_type()
{
  //投稿時に使用できる投稿用のパーツを指定
  $supports = array(
    'title', //タイトルフォーム
    //'editor', //エディター(内容の編集)
    'thumbnail', //アイキャッチ画像
    //'author', //投稿者
    //'excerpt', //抜粋
    'revisions', //リビジョンを保存
  );
  register_post_type(
    'themelist', // 投稿タイプ名の定義
    [
      'labels' => [
        'name' => 'テーマ一覧', // 管理画面上で表示する投稿タイプ名
      ],
      'public'        => true,  // カスタム投稿タイプの表示(trueにする)
      'has_archive'   => true, // カスタム投稿一覧(true:表示/false:非表示)
      'menu_position' => 5,     // 管理画面上での表示位置
      'show_in_rest'  => true,  // true:「Gutenberg」/ false:「ClassicEditor」
      'supports' => $supports
    ]
  );
}
add_action('init', 'themelist_post_type');

function insert_custom_fields()
{
  global $post;
  $themelist = get_post_meta($post->ID, 'price', true);
?>

  <form method="post" action="admin.php?page=site_settings">
    <label for="price">価格</label>
    <input id="price" type="text" name="price" value="<?php echo $themelist ?>">
  </form>

<?php
}
function create_custom_fields()
{
  add_meta_box(
    'themelist_setting', //編集画面セクションID
    'サンプルカスタムフィールド', //編集画面セクションのタイトル
    'insert_custom_fields', //編集画面セクションにHTML出力する関数
    'themelist', //投稿タイプ名
    'normal' //編集画面セクションが表示される部分
  );
}
add_action('admin_menu', 'create_custom_fields');

function save_custom_fields($post_id)
{
  if (isset($_POST['price'])) {
    update_post_meta($post_id, 'price', $_POST['price']);
  }
}
add_action('save_post', 'save_custom_fields');
