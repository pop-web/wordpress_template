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
      the_title('<h1>', '</h1>');
    else :
      the_title('<h2 class="mb-3"><a href="' . esc_url(get_permalink()) . '" rel="bookmark" class="text-decoration-none text-dark">', '</a></h2>');
    endif;
    ?>
  </header>

  <?php post_thumbnail(); ?>

  <div>
    <?php the_excerpt(); ?>
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