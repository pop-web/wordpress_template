<?php

/**
 * The template for displaying the footer
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sophie
 */

?>

<div id="footer-content" class="container d-flex justify-content-between mt-5">
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
          <th>日・祝</th>
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
        </tr>
      </tbody>
    </table>
    <p>※土曜日の午後診療は〜17:30となります。</p>
  </div>
  <div class="shop-info text-end d-flex flex-column justify-content-between">
    <div class="fs-3">
      <?php bloginfo('name'); ?>
    </div>
    <div class="address">
      <div>〒123-45678</div>
      <div>東京都渋谷区代々木1-23-45</div>
      <div>TEL 03-123-4567 / FAX 03-123-4567</div>
    </div>
  </div>
</div>

<nav id="footer-nav-wrap" class="navbar navbar-expand-md px-0 py-4">
  <div class="container">
    <div class="collapse navbar-collapse">
      <?php
      wp_nav_menu(
        array(
          'menu_id' => 'footer-nav',
          'theme_location' => 'footernav',
          'container' => false,
          'menu_class' => 'navbar-nav',
          'fallback_cb' => false,
        )
      );
      ?>
    </div>
    <ul id="sns-nav" class="navbar-nav">
      <li>
        <a href="">
          <i class="bi bi-line"></i>
        </a>
      </li>
      <li>
        <a href="">
          <i class="bi bi-twitter"></i>
        </a>
      </li>
      <li>
        <a href="">
          <i class="bi bi-instagram"></i>
        </a>
      </li>
      <li>
        <a href="">
          <i class="bi bi-facebook"></i>
        </a>
      </li>
    </ul>
  </div>
</nav>

<footer id="footer" class="site-footer py-5 text-center">
  <div class="site-info">
    &copy; <a href="<?php echo esc_url(home_url()); ?>" class="text-decoration-none">みんなのクリニック</a> All rights reserved.
  </div>
</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>