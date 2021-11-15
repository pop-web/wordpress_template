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
    <?php the_title('<h1>', '</h1>'); ?>
    <?php if ('post' === get_post_type()) : ?>
      <div class="text-end">
        <div>
          <?php posted_on(); ?>
        </div>
        <div>
          <?php posted_by(); ?>
        </div>
      </div>
    <?php endif; ?>
  </header>

  <?php post_thumbnail();
  ?>

  <div class="mt-3">
    <?php
    the_content(
      sprintf(
        wp_kses(
          /* translators: %s: Name of current post. Only visible to screen readers */
          __('<span class=\"screen-reader-text\">\"%s\" の</span>続きを読む'),
          array(
            'span' => array(
              'class' => array(),
            ),
          )
        ),
        wp_kses_post(get_the_title())
      )
    );

    wp_link_pages(
      array(
        'before' => '<div class="page-links">' . esc_html__('Pages:', 'minnanowordpress'),
        'after'  => '</div>',
      )
    );
    ?>
  </div>

  <footer class="text-end">
    <?php entry_footer(); ?>
  </footer>
</article>