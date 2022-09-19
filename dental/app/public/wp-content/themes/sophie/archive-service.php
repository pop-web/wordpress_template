<?php
get_header();
?>
<main id="archive-service" class="container-fuild main-section">
  <div class="page-title-header">
    <img src="<?php bloginfo('template_directory'); ?>/images/kakko_left.svg">
    <h1 class="title">診療内容</h1>
    <img src="<?php bloginfo('template_directory'); ?>/images/kakko_right.svg">
  </div>
  <?php if (have_posts()) : ?>
    <section class="container">
      <?php while (have_posts()) : the_post(); ?>
        <div class="row row-cols-1 row-cols-md-2 g-4 mb-5">
          <div class="col">
            <?php the_post_thumbnail('full', array('class' => 'w-100')); ?>
          </div>
          <div class="col">
            <h2 class="my-4 fs-5 d-flex align-items-center">
              <span class="fs-3 me-2 sub-color fw-bold">◯</span><?php the_title(); ?>
            </h2>
            <?php the_content() ?>
          </div>
        </div>
      <?php
      endwhile;
      ?>
    </section>
  <?php endif; ?>
</main>
<?php
get_footer();
