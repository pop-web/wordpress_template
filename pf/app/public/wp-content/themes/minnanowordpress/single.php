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

<main id="primary" class="container my-5">

  <div class="row">
    <div class="col-md-8">
      <?php
      while (have_posts()) :
        the_post();

        get_template_part('template-parts/content', 'single');

        the_post_navigation(
          array(
            'prev_text' => '<span class="nav-subtitle"><i class="bi bi-caret-left-fill"></i></span> <span class="nav-title">%title</span>',
            'next_text' => '<span class="nav-title">%title</span> <span class="nav-subtitle"><i class="bi bi-caret-right-fill"></i> </span>',
          )
        );

        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()) :
          comments_template();
        endif;

      endwhile; // End of the loop.
      ?>
    </div>
    <div class="col-md-4">
      <?php get_sidebar(); ?>
    </div>
  </div>
</main><!-- #main -->

<?php
get_footer();
