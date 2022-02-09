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

<nav class="navbar navbar-expand-md px-0 py-4">
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
    <ul class="navbar-nav">
      <li><a href=""><i class="bi bi-line"></i></a></li>
      <li><a href="">Twitter</a></li>
      <li><a href="">Instagram</a></li>
      <li><a href="">Facebook</a></li>
    </ul>
  </div>
</nav>

<footer id="footer" class="site-footer py-5 mt-5 text-center">
  <div class="site-info">
    &copy; <a href="<?php echo esc_url(home_url()); ?>" class="text-decoration-none">みんなのクリニック</a> All rights reserved.
  </div>
</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>