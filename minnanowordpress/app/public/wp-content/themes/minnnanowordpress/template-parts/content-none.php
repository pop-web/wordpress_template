<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package minnanowordpress
 */

?>

<section>
  <header class="fs-4 fw-bold mb-5 serif_font">
    <h1><?php esc_html_e('何も見つかりませんでした'); ?></h1>
  </header>

  <div>
    <?php
    if (is_home() && current_user_can('publish_posts')) :

      printf(
        '<p>' . wp_kses(
          /* translators: 1: link to WP admin new post page. */
          __('最初の投稿を公開する準備はできましたか ? <a href=\"%s\">ここから始めましょう</a>。'),
          array(
            'a' => array(
              'href' => array(),
            ),
          )
        ) . '</p>',
        esc_url(admin_url('post-new.php'))
      );

    elseif (is_search()) :
    ?>

      <p><?php esc_html_e('検索キーワードに一致するものが見つかりませんでした。 別のキーワードで試してみてください。'); ?></p>
    <?php
      get_search_form();

    else :
    ?>

      <p><?php esc_html_e('お探しのコンテンツを見つけられませんでした。検索をお試しください。'); ?></p>
      <?php get_search_form(); ?>

    <?php endif; ?>

  </div>
</section>