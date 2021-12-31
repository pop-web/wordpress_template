<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package minnanowordpress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("mb-5"); ?>>
  <header>
    <?php
    if (is_singular()) :
      the_title('<h1 class="entry-title">', '</h1>');
    else :
      the_title('<h2><a href="' . esc_url(get_permalink()) . '" rel="bookmark" class="text-decoration-none text-dark">', '</a></h2>');
    endif;
    ?>
  </header>

  <?php post_thumbnail(); ?>

  <div>
    <?php
    if (mb_strlen($post->post_content, 'UTF-8') > 100) {
      var_dump($post->post_content);
      $content = mb_substr(strip_tags($post->post_content, '<br>'), 0, 100, 'UTF-8');
      echo $content . '…';
    } else {
      echo strip_tags($post->post_content, '<br>');
    }
    ?>
  </div>

  <footer class="text-end">
    <?php if ('post' === get_post_type()) : ?>
      <div>
        <?php
        posted_on();
        posted_by();
        ?>
      </div>
    <?php endif; ?>
    <?php entry_footer(); ?>
  </footer>
</article>