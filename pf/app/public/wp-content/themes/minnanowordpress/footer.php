<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package minnanowordpress
 */

?>
<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <?php wp_nav_menu(
      array(
        'theme_location' => 'footernav',
        'container' => false,
        'menu_class' => 'd-flex list-unstyled mb-0',
        'fallback_cb' => false,
        'add_li_class' => 'nav-item',
        'add_a_class' => 'nav-link text-dark'
      )
    );
    ?>
    <div style="font-size: 0.8em;" class="text-muted text-end">
      &copy; 2021<script>
        new Date().getFullYear() > 2010 && document.write("-" + new Date().getFullYear());
      </script> みんなのWordPress
    </div>

  </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>