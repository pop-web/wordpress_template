<?php
/*
Template Name:アクセスページ
*/
get_header();
?>

<?php
while (have_posts()) :
  the_post(); ?>

  <main id="page-access" class="container-fuild main-section">
    <div class="page-title-header">
      <img src="<?php bloginfo('template_directory'); ?>/images/kakko_left.svg">
      <h1 class="title"><?php the_title() ?></h1>
      <img src="<?php bloginfo('template_directory'); ?>/images/kakko_right.svg">
    </div>
    <section id="gmap" class="mt-5">
      <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.7548718177336!2d139.69986681500893!3d35.68303733748081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cc6088e6041%3A0x3dd39ee1809084f7!2z5Luj44CF5pyo6aeF!5e0!3m2!1sja!2sjp!4v1644331607413!5m2!1sja!2sjp" height="500" style="border:0;" allowfullscreen="" loading="lazy" class="w-100"></iframe>
      </div>
    </section>
    <section class="container mt-5">
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col"><img src="https://placehold.jp/430x324.png" alt="<?php bloginfo('name'); ?>の外観"></div>
        <div class="col d-flex flex-column justify-content-between">
          <div class="schedule">
            <table class="table-schedule">
              <tbody>
                <tr>
                  <th>診療時間</th>
                  <th>月</th>
                  <th>火</th>
                  <th>水</th>
                  <th>木</th>
                  <th>金</th>
                  <th>土</th>
                  <th>日</th>
                  <th>祝</th>
                </tr>
                <tr>
                  <td>9:30-13:00</td>
                  <td>○</td>
                  <td>○</td>
                  <td>ー</td>
                  <td>○</td>
                  <td>○</td>
                  <td>○</td>
                  <td>ー</td>
                  <td>ー</td>
                </tr>
                <tr>
                  <td>14:00-18:30</td>
                  <td>○</td>
                  <td>○</td>
                  <td>ー</td>
                  <td>○</td>
                  <td>○</td>
                  <td>△</td>
                  <td>ー</td>
                  <td>ー</td>
                </tr>
              </tbody>
            </table>
            <p>※土曜日の午後診療は〜17:30となります。</p>
          </div>
          <div class="address">
            <div>〒123-45678</div>
            <div>東京都渋谷区代々木1-23-45</div>
            <div>TEL 03-123-4567 / FAX 03-123-4567</div>
          </div>
        </div>
      </div>
    </section>
  <?php
endwhile;
get_footer();
