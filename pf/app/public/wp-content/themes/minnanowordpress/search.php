<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
          <h1 class="page-title fs-4 fw-bold mb-5">
            <?php
            /* translators: %s: search query. */
            printf(esc_html__('Search Results for: %s', 'minnanowordpress'), '<span>' . get_search_query() . '</span>');
            ?>
          </h1>
        </header><!-- .page-header -->

      <?php
        /* Start the Loop */
        while (have_posts()) :
          the_post();

          /**
           * Run the loop for the search to output the results.
           * If you want to overload this in a child theme then include a file
           * called content-search.php and that will be used instead.
           */
          get_template_part('template-parts/content', 'search');

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
