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
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body class="d-flex flex-column h-100 wf-kosugimaru">
  <?php wp_body_open(); ?>
  <header class="bg-white">
    <?php if (get_header_image()) : ?>
      <div class="text-center">
        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
          <img src="<?php header_image(); ?>" width="<?php echo absint(get_custom_header()->width); ?>" height="<?php echo absint(get_custom_header()->height); ?>" alt="">
        </a>
      </div>
    <?php endif; ?>
    <nav class="navbar navbar-expand-md px-0 py-4">
      <div class="container align-items-end">
        <div>
          <?php
          $minnanowordpress_description = get_bloginfo('description', 'display');
          if ($minnanowordpress_description || is_customize_preview()) :
          ?>
            <div class="site-description small text-secondary">
              <?php echo $minnanowordpress_description; ?>
            </div>
          <?php endif; ?>
          <div id="site-title" class="site-title">
            <?php
            the_custom_logo(); // TODO
            if (is_front_page() && is_home()) :
            ?>
              <a class="navbar-brand m-0 p-0" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                <h1 class="fs-md-3 fs-3 m-0"><?php bloginfo('name'); ?></h1>
              </a>
            <?php else : ?>
              <a class="navbar-brand m-0 p-0" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                <div class="fs-md-3 fs-3 m-0"><?php bloginfo('name'); ?></div>
              </a>
            <?php endif; ?>
          </div>
        </div>
        <div id="header-nav">
          <nav class="navbar-nav align-items-center justify-content-end mb-2">
            <div id="tel-phone">
              <i class="bi bi-telephone-fill"></i>
              <a href="tel:0312345678" class="fs-3 text-decoration-none">03-1234-5678</a>
            </div>
            <a href="" id="access-btn" class="btn btn-primary rounded-pill px-4 py-1 ms-4">
              <i class="bi bi-geo-alt"></i>
              アクセス
            </a>
          </nav>
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
                'menu_class' => 'navbar-nav',
                'fallback_cb' => false,
              )
            );
            ?>
          </div>
        </div>
      </div>
    </nav>
  </header>