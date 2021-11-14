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

<body class="d-flex flex-column h-100">
  <?php wp_body_open(); ?>
  <header class="bg-dark py-2">
    <nav class="navbar navbar-expand-md p-0 serif_font d-md-block d-none">
      <div class="container">
        <?php
        $minnanowordpress_description = get_bloginfo('description', 'display');
        if ($minnanowordpress_description || is_customize_preview()) :
        ?>
          <div class="small text-white">
            <?php echo $minnanowordpress_description; ?>
          </div>
        <?php endif; ?>
        <ul class="fs-6 d-flex list-unstyled m-0">
          <li class="ms-2">
            <a href="" class="text-white text-decoration-none">
              <i class="bi bi-twitter"></i>
            </a>
          </li>
          <li class="ms-2">
            <a href="" class="text-white text-decoration-none">
              <i class="bi bi-facebook"></i>
            </a>
          </li>
          <li class="ms-2">
            <a href="" class="text-white text-decoration-none">
              <i class="bi bi-instagram"></i> </a>
          </li>
        </ul>
      </div>
    </nav>

    <nav class="navbar navbar-expand-md navbar-dark p-0">
      <div class="container">

        <?php
        the_custom_logo();
        if (is_front_page() && is_home()) :
        ?>
          <a class="navbar-brand m-0 p-0" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
            <h1 class="fs-2 fs-3 m-0 wf-sawarabimincho"><?php bloginfo('name'); ?></h1>
          </a>
        <?php
        else :
        ?>
          <a class="navbar-brand m-0 p-0" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
            <div class="fs-md-2 fs-3 m-0 wf-sawarabimincho"><?php bloginfo('name'); ?></div>
          </a>
        <?php
        endif;
        ?>

        <button class="navbar-toggler px-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <?php
          wp_nav_menu(
            array(
              'menu_id' => 'header-nav',
              'theme_location' => 'headernav',
              'container' => false,
              'menu_class' => 'navbar-nav ms-auto serif_font fs-5',
              'fallback_cb' => false,
            )
          );
          ?>
        </div>
      </div>
    </nav>
  </header>