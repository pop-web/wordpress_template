<?php
get_header();
?>
<main id="archive-about" class="container-fuild main-section">
  <div class="page-title-header">
    <img src="<?php bloginfo('template_directory'); ?>/images/kakko_left.svg">
    <h1 class="title">当院について</h1>
    <img src="<?php bloginfo('template_directory'); ?>/images/kakko_right.svg">
  </div>
  <?php if (have_posts()) : ?>
    <section class="container">
      <?php
      $i = 1;
      while (have_posts()) :
        the_post();
      ?>
        <div class="row row-cols-1 row-cols-md-2 g-4 mb-5<?php if ($i % 2 === 0) { echo ' flex-row-reverse'; }; ?>">
          <div class="col">
            <?php the_post_thumbnail('full',array('class' => 'w-100')); ?>
          </div>
          <div class="col">
            <h2 class="my-4"><?php the_title(); ?></h2>
            <?php the_content() ?>
          </div>
        </div>
      <?php
      $i++;
      endwhile;
      ?>
    </section>
  <?php endif; ?>
</main>
<?php
get_footer();
