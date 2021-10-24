<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 *
 * @package minnanowordpress
 */

?>

<!doctype html>
<html <?php language_attributes(); ?> class="h-100">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body>
  <?php wp_body_open(); ?>
  <header class="bg-dark py-2">
    <div class="container">
      <?php
      $minnanowordpress_description = get_bloginfo('description', 'display');
      if ($minnanowordpress_description || is_customize_preview()) :
      ?>
        <div class="small text-white">
          <?php echo $minnanowordpress_description; ?>
        </div>
      <?php endif; ?>
    </div>

    <nav class="navbar navbar-expand-md navbar-dark p-0">
      <div class="container">

        <?php
        the_custom_logo();
        if (is_front_page() && is_home()) :
        ?>
          <h1 class="wf-sawarabimincho"><a class="fs-2 navbar-brand p-0" href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
        <?php
        else :
        ?>
          <p><a class="fs-2 navbar-brand me-2" href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
        <?php
        endif;
        ?>

        <button class="navbar-toggler px-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-text d-block text-dark">MENU</span>
        </button>
        <div class="collapse navbar-collapse w-auto" id="navbarCollapse">
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'headernav',
              'container' => false,
              'menu_class' => 'navbar-nav me-auto mb-2 mb-md-0',
              'fallback_cb' => false,
              'add_li_class' => 'nav-item',
              'add_a_class' => 'nav-link text-white'
            )
          );
          ?>
        </div>
      </div>
    </nav>
  </header>