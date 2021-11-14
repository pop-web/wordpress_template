<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package minnanowordpress
 */

get_header();
?>

<main class="container my-5">

  <div class="row">
    <div class="col-md-8">
      <?php while (have_posts()) : ?>
        <?php the_post(); ?>

        <?php get_template_part('template-parts/content', 'single'); ?>

        <?php the_post_navigation(
          array(
            'prev_text' => '<span><i class="bi bi-caret-left-fill"></i></span> <span>%title</span>',
            'next_text' => '<span>%title</span> <span><i class="bi bi-caret-right-fill"></i> </span>',
          )
        ); ?>

        <?php
        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()) :
          comments_template();
        endif; ?>

      <?php endwhile; ?>

    </div>
    <div class="col-md-4">
      <?php get_sidebar(); ?>
    </div>
  </div>
</main>

<?php
get_footer();
