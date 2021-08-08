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


  <?php
  while (have_posts()) :
    the_post();

    get_template_part('template-parts/content', get_post_type());

    the_post_navigation(
      array(
        'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'minnanowordpress') . '</span> <span class="nav-title">%title</span>',
        'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'minnanowordpress') . '</span> <span class="nav-title">%title</span>',
      )
    );

  endwhile; // End of the loop.
  ?>
</main><!-- #main -->

<?php
get_footer();
