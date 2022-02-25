<?php
get_header();

$args = array(
  'post_type' => 'feature',
  'posts_per_page' => -1,
);
$news_query = new WP_Query($args);
if ($news_query->have_posts()) :
  while ($news_query->have_posts()) :
    $news_query->the_post();
?>

    <h2><?php the_title(); ?></h2>
    <?php post_thumbnail(); ?>
    <?php the_content() ?>

<?php endwhile;
endif;
wp_reset_postdata();
get_footer();
?>