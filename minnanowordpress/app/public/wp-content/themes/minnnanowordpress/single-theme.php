<?php

/**
 * The template for displaying archive pages
 *
 * @package minnanowordpress
 */

get_header();
?>
<main class="my-5 serif_font">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : ?>
      <?php the_post(); ?>
      <div class="container-fluid border-bottom">
        <div class="container">
          <h1 class="fs-1 fw-bold text-center"><?php the_title(); ?></h1>
          <h2 class="fs-6 text-center"><?php echo get_post_meta($post->ID, "description", true); ?></h2>
          <div class="d-flex justify-content-center mt-5">
            <a href="" class="btn btn-dark btn-lg shadow-sm me-1" style="min-width: 150px">デモサイト</a>
            <a href="" class="btn btn-danger btn-lg shadow-sm ms-1" style="min-width: 150px">購入する</a>
          </div>
          <div><img src="<?php echo get_post_meta($post->ID, "image", true); ?>" alt="<?php echo get_post_meta($post->ID, "description", true); ?>" class="w-100"></div>
          <div class="mt-5">
            <h2 class="text-center mb-5">主な機能</h2>
            <ul class="d-table mx-auto fs-5 pb-5" style="list-style-type: circle;">
              <li class="mb-2">小規模飲食店・B級グルメ屋台専用テーマ</li>
              <li class="mb-2">写真付きバナーで料理の魅力を存分に伝えられる</li>
              <li class="mb-2">お品書き登録機能</li>
              <li class="mb-2">簡単操作でプロの仕上がり</li>
              <li class="mb-2">やさしいマニュアル付き</li>
              </li>
            </ul>
          </div>
        </div>
      </div><!-- FirstView END-->
      <div class="container-fluid border-bottom my-5">
        <div class="container">
          <h2 class="text-center mb-5">機能と特徴の詳細</h2>
          <div class="row pb-5">
            <div class="col">
              <div class="card border-0">
                <div class="card-body p-0">
                  <h2 class="fs-4 card-title mb-3">テーマカラー変更でお店のイメージに合わせた配色を。</h2>
                  <img src="https://wp-forest.com/img/konamon/color.png" class="card-img-top mb-3" alt="...">
                  <p>すべては最初が肝心です。Webサイトでもっとも重きを置くべきは「ファーストビュー」と言えるでしょう。一番最初に目に入るコンテンツだからです。</p>
                  <p>「CURE」のヘッダーはダイナミックに全画面で静止画スライダー（動画も可）を表示します。医療機関にふさわしいズームイン＆アウトエフェクトを採用しており、クリーンなイメージアップに貢献します。</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card border-0">
                <div class="card-body p-0">
                  <h2 class="fs-4 card-title mb-3">テーマカラー変更でお店のイメージに合わせた配色を。</h2>
                  <img src="https://wp-forest.com/img/konamon/color.png" class="card-img-top mb-3" alt="...">
                  <p class="card-text">すべては最初が肝心です。Webサイトでもっとも重きを置くべきは「ファーストビュー」と言えるでしょう。一番最初に目に入るコンテンツだからです。</p>
                  <p>「CURE」のヘッダーはダイナミックに全画面で静止画スライダー（動画も可）を表示します。医療機関にふさわしいズームイン＆アウトエフェクトを採用しており、クリーンなイメージアップに貢献します。</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-5 py-5">
            <div class="col">
              <div class="card border-0">
                <div class="card-body p-0">
                  <h2 class="fs-4 card-title">テーマカラー変更でお店のイメージに合わせた配色を。</h2>
                  <img src="https://wp-forest.com/img/konamon/color.png" class="card-img-top mb-3" alt="...">
                  <p>すべては最初が肝心です。Webサイトでもっとも重きを置くべきは「ファーストビュー」と言えるでしょう。一番最初に目に入るコンテンツだからです。</p>
                  <p>「CURE」のヘッダーはダイナミックに全画面で静止画スライダー（動画も可）を表示します。医療機関にふさわしいズームイン＆アウトエフェクトを採用しており、クリーンなイメージアップに貢献します。</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card border-0">
                <div class="card-body p-0">
                  <h2 class="fs-4 card-title">テーマカラー変更でお店のイメージに合わせた配色を。</h2>
                  <img src="https://wp-forest.com/img/konamon/color.png" class="card-img-top mb-3" alt="...">
                  <p class="card-text">すべては最初が肝心です。Webサイトでもっとも重きを置くべきは「ファーストビュー」と言えるでしょう。一番最初に目に入るコンテンツだからです。</p>
                  <p>「CURE」のヘッダーはダイナミックに全画面で静止画スライダー（動画も可）を表示します。医療機関にふさわしいズームイン＆アウトエフェクトを採用しており、クリーンなイメージアップに貢献します。</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- 機能と特徴の詳細  END-->
      <!-- <?php the_content(); ?> -->
    <?php endwhile; ?>
  <?php endif; ?>
</main>
<?php
get_footer();
