<?php
/*
Template Name:スタッフページ
*/
get_header();
?>

<?php
while (have_posts()) :
  the_post(); ?>

  <main id="page-staff" class="container-fuild main-section">
    <div class="page-title-header">
      <img src="<?php bloginfo('template_directory'); ?>/images/kakko_left.svg">
      <h1 class="title"><?php the_title() ?></h1>
      <img src="<?php bloginfo('template_directory'); ?>/images/kakko_right.svg">
    </div>
    <section class="mt-5 py-5 bg-sub">
      <div class="container">
        <div class="card mb-5 bg-transparent border-0">
          <div class="row flex-row-reverse">
            <div class="col-md-6">
              <img src="http://localhost:10013/wp-content/uploads/2022/02/4275887_s-e1644556918160.jpeg" alt="" class="w-100">
            </div>
            <div class="col-md-6">
              <div class="card-body d-flex flex-column h-100">
                <h2 class="card-title fs-1">
                  歯を診る。<br />その歯の未来も見る。
                </h2>
                <p class="card-text mt-5">
                  きふね歯科では、
                  全ての治療は予防治療に繋がると考えています。
                  <br />
                  <br />
                  口の中全体をみわたして歯を治し、
                  口内環境を今後も健全に保てるようにサポートします。
                  <br />
                  <br />
                  一人ひとりの方と、そして、一本一本の大事な歯とも、
                  末長くお付き合いをさせていただきたいと思っています。
                </p>
                <div class="mt-auto">
                  <div>みんなのクリニック 院長 / 歯科医師</div>
                  <div class="fs-4">山代 昭三</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php
endwhile;
get_footer();
