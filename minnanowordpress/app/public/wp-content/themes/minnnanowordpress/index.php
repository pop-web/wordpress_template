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
    <header>
      <h1 class="">
        <?php single_post_title(); ?>
      </h1>
    </header>
  <?php endif; ?>
  <div class="row">
    <div class="col-md-8">
      <?php if (have_posts()) : ?>

        <?php while (have_posts()) : ?>
          <?php the_post(); ?>
          <p class=""><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
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
