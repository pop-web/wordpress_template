<?php

/**
 * The main template file
 *
 * @package minnanowordpress
 */

get_header();
?>
<main class="container my-5">
  <?php if (is_home() && !is_front_page()) : ?>
    <header class="fs-4 fw-bold mb-5 serif_font">
      <h1>
        <?php single_post_title(); ?>
      </h1>
    </header>
  <?php endif; ?>
  <div class="row">
    <div class="col-md-8">
      <?php if (have_posts()) : ?>

        <?php while (have_posts()) : ?>
          <?php the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class("mb-5"); ?>>
            <header>
              <?php the_title('<h2><a href="' . esc_url(get_permalink()) . '" rel="bookmark" class="text-decoration-none text-dark">', '</a></h2>'); ?>
            </header>

            <?php the_content(); ?>

            <footer class="text-end">
              <?php if ('post' === get_post_type()) : ?>
                <div class="">
                  <?php
                  //minnanowordpress_posted_on();
                  // minnanowordpress_posted_by();
                  ?>
                </div>
              <?php endif; ?>
              <?php //minnanowordpress_entry_footer(); 
              ?>
            </footer>
          </article>

        <?php endwhile; ?>

        <?php the_posts_navigation(); ?>

      <?php else : ?>
        <p>記事はありません</p>
      <?php endif; ?>
    </div>
    <div class="col-md-4">
      <?php get_sidebar(); ?>
    </div>
  </div>
</main>

<?php get_footer();
