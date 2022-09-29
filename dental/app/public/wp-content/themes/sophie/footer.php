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

<div id="footer-content" class="container d-md-flex justify-content-between">
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
  <div class="shop-info text-center text-md-end d-flex flex-column justify-content-between mt-5 mt-md-0">
    <div class="fs-md-3 fs-4">
      <?php bloginfo('name'); ?>
    </div>
    <div class="address">
      <div>〒<?php echo get_theme_mod("shop_zip") ?></div>
      <div><?php echo get_theme_mod("shop_address") ?></div>
      <div>TEL <?php $tel = get_theme_mod('shop_tel'); ?><?php echo format_phone_number($tel) ?> / FAX <?php $fax = get_theme_mod('shop_fax'); ?><?php echo format_phone_number($fax) ?></div>
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
    <ul id="sns-nav" class="navbar-nav mx-auto flex-md-row flex-row">
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