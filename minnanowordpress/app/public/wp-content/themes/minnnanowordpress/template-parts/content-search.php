<?php

/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package minnanowordpress
 */

?>

<?php if ('post' === get_post_type()) : ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
      <?php the_title(sprintf('<h2><a href="%s" rel="bookmark" class="text-decoration-none text-dark">', esc_url(get_permalink())), '</a></h2>'); ?>
    </header>

    <?php post_thumbnail(); ?>

    <?php the_excerpt(); ?>

    <footer class="text-end">
      <div>
        <?php
        posted_on();
        posted_by();
        ?>
      </div>
      <?php entry_footer();
      ?>
    </footer>
  </article>
<?php endif; ?>