<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package minnanowordpress
 */

get_header();
?>

<main id="primary" class="container my-5">

  <div class="row">
    <div class="col-md-8 pe-md-5">
      <?php if (have_posts()) : ?>

        <header class="page-header">
          <?php
          the_archive_title('<h1 class="page-title fs-4 fw-bold mb-5">', '</h1>');
          the_archive_description('<div class="archive-description">', '</div>');
          ?>
        </header><!-- .page-header -->

      <?php
        /* Start the Loop */
        while (have_posts()) :
          the_post();

          /*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
          get_template_part('template-parts/content', get_post_type());

        endwhile;

        the_posts_navigation();

      else :

        get_template_part('template-parts/content', 'none');

      endif;
      ?>
    </div>
    <div class="col-md-4">
      <?php get_sidebar(); ?>
    </div>
  </div>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
