<?php

/**
 * The template for displaying 404 pages (not found)
 *
 *
 * @package minnanowordpress
 */

get_header();

?>
<main class="container my-5">
  <div class="row">
    <div class="col-md-8">
      記事が見つかりません
    </div>
    <div class="col-md-4">
      <?php get_sidebar(); ?>
    </div>
  </div>
</main>
<?php
get_footer();
