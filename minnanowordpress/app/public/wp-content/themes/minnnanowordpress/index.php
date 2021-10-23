<?php get_header(); ?>
<div class="container-fluid">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : ?>
      <?php the_post(); ?>
      <p class="mt-5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
    <?php endwhile; ?>
  <?php endif; ?>
</div>
<?php get_footer(); ?>