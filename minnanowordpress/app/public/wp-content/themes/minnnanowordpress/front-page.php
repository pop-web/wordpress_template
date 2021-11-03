<?php

/**
 * Template Name: サイトフロント
 *
 * @package minnanowordpress
 */

get_header();
?>

<main class="container pt-5">
  <div id="theme">
    <h1 class="serif_font text-center fs-1">
      <span class="px-5 pb-3 d-block mx-auto">WordPressテーマ</span>
      <span class="border-bottom d-block w-25 mx-auto mb-5"></span>
    </h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php
      $args = array(
        'post_type' => 'themelist',
        'posts_per_page' => '-1'
      );
      $query = new WP_query($args);
      if ($query->have_posts()) :
      ?>
        <?php while ($query->have_posts()) : $query->the_post(); ?>
          <div class="col">
            <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark">
              <div class="card h-100">
                <?php if (get_post_meta($post->ID, "price", true)) {
                  echo get_post_meta($post->ID, "price", true);
                }
                ?>
              </div>
            </a>
          </div>
        <?php endwhile; ?>
      <?php wp_reset_postdata();
      endif; ?>
    </div>
  </div>
</main><!-- #main -->

<?php
get_footer();
