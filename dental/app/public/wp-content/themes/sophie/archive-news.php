<?php
get_header();
?>
<main id="archive-news" class="container-fuild main-section">
  <div class="page-title-header">
    <img src="<?php bloginfo('template_directory'); ?>/images/kakko_left.svg">
    <h1 class="title">お知らせ</h1>
    <img src="<?php bloginfo('template_directory'); ?>/images/kakko_right.svg">
  </div>
  <?php if (have_posts()) : ?>
    <section class="container">
      <?php while (have_posts()) : the_post(); ?>
        <article class="news-article js-accordion-article">
          <div class="news-title d-md-flex p-4 js-accordion-ttl">
            <time><?php echo get_the_date('Y.m.d'); ?></time>
            <div class="ms-md-5 ms-md-3 w-100">
              <div class="d-flex align-items-center justify-content-between">
                <h2 class="fs-5 m-0">
                  <?php the_title(); ?>
                </h2>
                <i class="bi bi-arrow-down-circle ms-md-0 ms-2"></i>
              </div>
            </div>
          </div>
          <div class="news-detail p-4">
            <?php the_content() ?>
          </div>
        </article>
      <?php endwhile;  ?>
    </section>
  <?php endif; ?>
</main>
<?php
get_footer();
