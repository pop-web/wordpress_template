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
      <div class="">
        <?php
        // minnanowordpress_posted_on();
        // minnanowordpress_posted_by();
        ?>
      </div>
    </header>

    <?php //minnanowordpress_post_thumbnail();
    ?>

    <?php the_excerpt(); ?>

    <footer class="text-end">
      <?php //minnanowordpress_entry_footer();
      ?>
    </footer>
  </article>
<?php endif; ?>