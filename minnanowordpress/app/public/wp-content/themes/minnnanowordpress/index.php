<?php

/**
 * The main template file
 *
 * @package minnanowordpress
 */

get_header();
?>
<main class="container my-5">
  <div class="row">
    <div class="col-md-8">
      <?php if (have_posts()) : ?>
        <?php if (is_home() && !is_front_page()) : ?>
          <header class="fs-4 fw-bold mb-5 serif_font">
            <h1>
              <?php single_post_title(); ?>
            </h1>
          </header>
        <?php endif; ?>
        <?php while (have_posts()) : ?>
          <?php the_post(); ?>

          <?php get_template_part('template-parts/content', get_post_type()); ?>
        <?php endwhile; ?>

        <?php the_posts_navigation(); ?>

      <?php else : ?>

        <?php get_template_part('template-parts/content', 'none') ?>

      <?php endif; ?>
    </div>

    <div class="col-md-4">
      <?php get_sidebar(); ?>
    </div>
  </div>
</main>

<?php
get_footer();
