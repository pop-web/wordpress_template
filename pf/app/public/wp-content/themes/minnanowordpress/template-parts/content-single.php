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
  <header class="entry-header">
    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
    <?php if ('post' === get_post_type()) : ?>
      <div class="text-end">
        <div class="entry-meta">
          <?php
          minnanowordpress_posted_on();
          // minnanowordpress_posted_by();
          ?>
        </div><!-- .entry-meta -->
      </div>
    <?php endif; ?>
  </header><!-- .entry-header -->

  <?php minnanowordpress_post_thumbnail(); ?>

  <div class="entry-content mt-3">
    <?php
    the_content(
      sprintf(
        wp_kses(
          /* translators: %s: Name of current post. Only visible to screen readers */
          __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'minnanowordpress'),
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
  </div><!-- .entry-content -->

  <footer class="entry-footer text-end">

    <?php minnanowordpress_entry_footer(); ?>
  </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->