<?php

/**
 * Template Name: サイトフロントページ
 *
 * @package sophie
 */

get_header();
?>

<main id="front-page" class="container-fuild">

  <img src="http://localhost:10013/wp-content/uploads/2022/02/5121504_s.jpeg" alt="みんなのクリニック" class="w-100">

  <section id="service" class="py-5 bg-sub">
    <div class="row row-cols-1 row-cols-md-3 g-4 mx-auto p-0 container">
      <div class="col">
        <div class="card h-100">
          <div class="card-body p-4">
            <img src="http://localhost:10013/wp-content/uploads/2022/02/22441602_s.jpeg" class="card-img-top" alt="...">
            <h2 class="card-title mt-4 mb-3 text-center fs-5">
              一般治療
            </h2>
            <p class="card-text">
              歯周病予防、ご高齢の方の入れ歯づくりまで、幅広い世代の方々の歯を治療します。そしてさらに大事なのは、治療後の歯のメンテナンス。虫歯予防や歯周病予防のセルフケアのやり方もお教えします。
            </p>
            <div class="card-btn">
              <a href="" class="btn w-100 py-2">
                <i class="bi bi-arrow-down-circle"></i>
                一般治療について
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <div class="card-body p-4">
            <img src="http://localhost:10013/wp-content/uploads/2022/02/22441602_s.jpeg" class="card-img-top" alt="...">
            <h2 class="card-title mt-4 mb-3 text-center fs-5">
              一般治療
            </h2>
            <p class="card-text">
              歯周病予防、ご高齢の方の入れ歯づくりまで、幅広い世代の方々の歯を治療します。そしてさらに大事なのは、治療後の歯のメンテナンス。虫歯予防や歯周病予防のセルフケアのやり方もお教えします。
            </p>
            <div class="card-btn">
              <a href="" class="btn w-100 py-2">
                <i class="bi bi-arrow-down-circle"></i>
                一般治療について
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <div class="card-body p-4">
            <img src="http://localhost:10013/wp-content/uploads/2022/02/22441602_s.jpeg" class="card-img-top" alt="...">
            <h2 class="card-title mt-4 mb-3 text-center fs-5">
              一般治療
            </h2>
            <p class="card-text">
              歯周病予防、ご高齢の方の入れ歯づくりまで、幅広い世代の方々の歯を治療します。そしてさらに大事なのは、治療後の歯のメンテナンス。虫歯予防や歯周病予防のセルフケアのやり方もお教えします。
            </p>
            <div class="card-btn">
              <a href="" class="btn w-100 py-2">
                <i class="bi bi-arrow-down-circle"></i>
                一般治療について
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="page-link-btn mt-5 text-center">
      <a href="/service" class="btn text-white py-3 w-50 w-md-25">
        診療内容へ
      </a>
    </div>
  </section>
  <?php
  $args = array('post_type' => 'about', 'posts_per_page' => -1);
  $post_list_query = new wp_query($args);
  if ($post_list_query->have_posts()) :
  ?>
    <section id="about" class="mt-5">
      <div class="container">
        <?php $i = 1;
        while ($post_list_query->have_posts()) : $post_list_query->the_post();  ?>
          <div class="card mb-5">
            <div class="row
              <?php if ($i % 2 === 0) {
                echo ' flex-row-reverse';
              }; ?>">
              <div class="col-md-7">
                <?php the_post_thumbnail('full', array('class' => 'w-100')); ?>
              </div>
              <div class="col-md-5">
                <div class="card-body">
                  <h2 class="card-title fs-1">
                    <?php the_title(); ?>
                  </h2>

                  <div class="card-text mt-5">
                    <?php the_content() ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php $i++;
        endwhile; ?>
      </div>
      <div class="page-link-btn mt-5 text-center">
        <a href="/about" class="btn text-white py-3 w-50 w-md-25">
          当院についてへ
        </a>
      </div>
    </section>
  <?php endif;
  wp_reset_query(); ?>
  <section class="mt-5 py-5 bg-sub">
    <div class="container">
      <div class="card mb-5 bg-transparent border-0">
        <div class="row flex-row-reverse">
          <div class="col-md-6">
            <img src="http://localhost:10013/wp-content/uploads/2022/02/4275887_s-e1644556918160.jpeg" alt="" class="w-100">
          </div>
          <div class="col-md-6">
            <div class="card-body d-flex   flex-column h-100">
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
  <div id="news" class="mt-5">
    <div class="container d-md-flex justify-content-between">
      <h2>お知らせ</h2>
      <div class="news-list">
        <article class="news-article js-accordion-article">
          <div class="news-title d-md-flex p-4 js-accordion-ttl">
            <time>2020.04.15</time>
            <div class="ms-md-5 ms-md-3 w-100">
              <div class="d-flex align-items-center justify-content-between">
                <h2 class="m-0">
                  新型コロナウイルス感染拡大防止について（長文）
                </h2>
                <i class="bi bi-arrow-down-circle ms-md-0 ms-2"></i>
              </div>
            </div>
          </div>
          <div class="news-detail pb-4">
            みなさま、大変な状況が続いており、健常な方々もストレスを強いられる日常を過ごされていることと思います。
            みなさま、大変な状況が続いており、健常な方々もストレスを強いられる日常を過ごされていることと思います。
            みなさま、大変な状況が続いており、健常な方々もストレスを強いられる日常を過ごされていることと思います。
            みなさま、大変な状況が続いており、健常な方々もストレスを強いられる日常を過ごされていることと思います。
            みなさま、大変な状況が続いており、健常な方々もストレスを強いられる日常を過ごされていることと思います。
            みなさま、大変な状況が続いており、健常な方々もストレスを強いられる日常を過ごされていることと思います。
          </div>
        </article>
        <article class="news-article">
          <div class="news-title d-md-flex p-4">
            <time>2020.04.15</time>
            <div class="ms-md-5 ms-md-3 w-100">
              <div class="d-flex align-items-center justify-content-between">
                <h2 class="m-0">
                  新型コロナウイルス感染拡大防止について（長文）
                </h2>
                <i class="bi bi-arrow-down-circle ms-md-0 ms-2"></i>
              </div>
            </div>
          </div>
          <div class="news-detail pb-4">
            みなさま、大変な状況が続いており、健常な方々もストレスを強いられる日常を過ごされていることと思います。
          </div>
        </article>
      </div>
    </div>
  </div>

  <section id="gmap" class="mt-5">
    <div class="container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.7548718177336!2d139.69986681500893!3d35.68303733748081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cc6088e6041%3A0x3dd39ee1809084f7!2z5Luj44CF5pyo6aeF!5e0!3m2!1sja!2sjp!4v1644331607413!5m2!1sja!2sjp" height="500" style="border:0;" allowfullscreen="" loading="lazy" class="w-100"></iframe>
    </div>
  </section>
</main>

<?php
get_footer();
