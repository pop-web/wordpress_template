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

<main class="container my-5">
  <div class="row">
    <div class="col-md-8">
      <?php if (have_posts()) : ?>

        <header>
          <h1 class="fs-4 fw-bold mb-5">
            <?php
            /* translators: %s: search query. */
            printf(esc_html__('&#8220;%s&#8221; の検索結果'), '<span>' . get_search_query() . '</span>');
            ?>
          </h1>
        </header>

        <?php while (have_posts()) : ?>
          <?php the_post(); ?>

          <?php get_template_part('template-parts/content', 'search'); ?>

        <?php endwhile; ?>

        <?php the_posts_navigation(); ?>

      <?php else : ?>

        <?php get_template_part('template-parts/content', 'none'); ?>

      <?php endif; ?>
    </div>
    <div class="col-md-4">
      <?php get_sidebar(); ?>
    </div>
  </div>
</main>

<?php
get_footer();
