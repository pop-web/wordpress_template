<?php

global $wp_rewrite;
$wp_rewrite->flush_rules();

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
 * JavaScript APIの呼び出し
 **/
function add_api()
{
  wp_enqueue_media();
}
add_action('admin_enqueue_scripts', 'add_api');

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
 * Post Type: テーマ
 **/

function theme_post_type()
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
    'theme', // 投稿タイプ名の定義
    [
      'labels' => [
        'name' => 'テーマ', // 管理画面上で表示する投稿タイプ名
      ],
      'public'        => true,  // カスタム投稿タイプの表示(trueにする)
      'has_archive'   => true, // カスタム投稿一覧(true:表示/false:非表示)
      'menu_position' => 5,     // 管理画面上での表示位置
      'show_in_rest'  => false,  // true:「Gutenberg」/ false:「ClassicEditor」
      'supports' => $supports
    ]
  );
}
add_action('init', 'theme_post_type');


/**
 * Custome Fields: テーマ
 **/

function create_custom_fields()
{
  add_meta_box(
    'theme_setting', //編集画面セクションID
    'テーマ', //編集画面セクションのタイトル
    'insert_custom_fields', //編集画面セクションにHTML出力する関数
    'theme', //投稿タイプ名
    'normal' //編集画面セクションが表示される部分
  );
}
add_action('admin_menu', 'create_custom_fields');

function insert_custom_fields()
{
  global $post;
  $image = get_post_meta($post->ID, 'image', true);
  $price = get_post_meta($post->ID, 'price', true);
  $description = get_post_meta($post->ID, 'description', true);
?>
  <p>
  <div id="media">
    <img src="<?php echo $image; ?>" alt="">
  </div>
  <input style="display:none" name="image" type="text" value="<?php echo $image ?>" />
  <input style="width:80px" type="button" name="media" value="画像選択" />
  <input style="width:80px" type="button" name="media-clear" value="削除" />
  </p>
  <p>
    <label for="price" style="display: block;">価格</label>
    <input id="price" type="text" name="price" value="<?php echo $price ?>" style="width:100%;">
  </p>
  <p>
    <label for="description" style="display: block;">説明</label>
    <textarea id="description" name="description" value="<?php echo $description ?>" rows="5" style="width:100%;"></textarea>
  </p>

  <script>
    (function($) {
      var custom_uploader;
      //メディアアップローダーボタン
      $("input:button[name=media]").click(function(e) {
        e.preventDefault();
        if (custom_uploader) {
          custom_uploader.open();
          return;
        }
        custom_uploader = wp.media({
          title: "画像を選択", //タイトルのテキストラベル
          button: {
            text: "画像を設定" //ボタンのテキストラベル
          },
          library: {
            type: "image" //imageにしておく。
          },
          multiple: false //選択できる画像を1つだけにする。
        });
        custom_uploader.on("select", function() {
          var images = custom_uploader.state().get("selection");
          /* file の中に選択された画像の各種情報が入っている */
          images.each(function(file) {
            console.log(file)

            $("input:text[name=image]").val(""); //テキストフォームをクリア
            $("#media").empty(); //id mediaタグの中身をクリア
            $("input:text[name=image]").val(file.attributes.url); //テキストフォームに選択したURLを追加
            $("#media").append('<img src="' + file.attributes.url + '" />'); //プレビュー用にメディアアップローダーで選択した画像を表示させる
          });
        });
        custom_uploader.open();
      });
      //クリアボタンを押した時の処理
      $("input:button[name=media-clear]").click(function() {
        $("input:text[name=image]").val(""); //テキストフォームをクリア
        $("#media").empty(); //id mediaタグの中身をクリア
      });
    })(jQuery);
  </script>

<?php
}

function save_custom_fields($post_id)
{
  if (isset($_POST['price'])) {
    update_post_meta($post_id, 'price', $_POST['price']);
  }
  if (isset($_POST['description'])) {
    update_post_meta($post_id, 'description', $_POST['description']);
  }
  if (isset($_POST['image'])) {
    update_post_meta($post_id, 'image', $_POST['image']);
  }
}
add_action('save_post', 'save_custom_fields');
