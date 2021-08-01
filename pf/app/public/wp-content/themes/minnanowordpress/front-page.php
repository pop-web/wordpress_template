<?php

/**
 * Template Name: サイトフロント
 */

get_header();
?>

<main id="primary" class="site-main">
  <div class="container pt-5">
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
            <a href="" class="text-decoration-none text-dark">
              <div class="card h-100">
                <?php if (get_field('thumb')) : ?>
                  <img src="<?php the_field('thumb'); ?>" class="card-img-top" />
                <?php endif; ?>
                <div class="card-body">
                  <h5 class="card-title d-flex justify-content-between fs-3 wf-sawarabimincho">
                    <span><?php the_title(); ?></span>
                    <span><?php echo "¥" . number_format((int) get_field('price')); ?></span>
                  </h5>
                  <p class="card-text">
                    <?php the_field('note'); ?>
                  </p>
                </div>
              </div>
            </a>
          </div>
        <?php endwhile; ?>
      <?php wp_reset_postdata();
      endif; ?>
    </div>
  </div>
</main><!-- #main -->