<?php
get_header();
?>
<main id="archive-about" class="container-fuild">
  <div class="header">
    <img src="<?php bloginfo('template_directory'); ?>/images/kakko_left.svg">
    <h1 class="title">当院ついて</h1>
    <img src="<?php bloginfo('template_directory'); ?>/images/kakko_right.svg">
  </div>
  <section class="container">
    <?php
    $args = array(
      'post_type' => 'about',
      'posts_per_page' => -1,
    );
    $news_query = new WP_Query($args);
    if ($news_query->have_posts()) :
      while ($news_query->have_posts()) :
        $news_query->the_post();
    ?>
        <div class="row row-cols-1 row-cols-md-2 g-4">
          <div class="col">
            <h2><?php the_title(); ?></h2>
            <?php the_content() ?>
          </div>
          <div class="col">
            <?php the_post_thumbnail(); ?>
          </div>
        </div>
    <?php
      endwhile;
    endif;
    wp_reset_postdata(); ?>
  </section>
</main>
<?php
get_footer();
