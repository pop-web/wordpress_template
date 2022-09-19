<?php
get_header();
?>
<main id="archive-qa" class="container-fuild main-section">
  <div class="page-title-header">
    <img src="<?php bloginfo('template_directory'); ?>/images/kakko_left.svg">
    <h1 class="title">よくある質問</h1>
    <img src="<?php bloginfo('template_directory'); ?>/images/kakko_right.svg">
  </div>
  <?php if (have_posts()) : ?>
    <section class="container">
      <?php while (have_posts()) : the_post(); ?>
        <article class="qa-article m-0 js-accordion-article">
          <div class="qa-title p-4 js-accordion-ttl">
            <div class="w-100">
              <div class="d-flex align-items-center justify-content-between">
                <h2 class="fs-5 m-0 d-flex align-items-center">
                  <span class="fs-4 me-4 wf-comfortaa">Q.</span>
                  <?php the_title(); ?>
                </h2>
                <i class="bi bi-arrow-down-circle ms-md-0 ms-2"></i>
              </div>
            </div>
          </div>
          <div class="qa-detail p-4">
            <div class="d-flex align-items-top">
              <span class="fs-4 me-4 wf-comfortaa">A.</span>
              <div class="pt-1"><?php the_content() ?></div>
            </div>
            <div>
        </article>
      <?php endwhile;  ?>
    </section>
  <?php endif; ?>
</main>
<?php
get_footer();
