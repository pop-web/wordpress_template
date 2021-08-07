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
    <ul class="list-unstyled small d-flex justify-content-center mb-1">
      <li>
        <a class="text-decoration-none text-dark" href="">利用規約</a>
      </li>
      <li class="ms-3">
        <a class="text-decoration-none text-dark" href="">特定商取引法の表示</a>
      </li>
    </ul>
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