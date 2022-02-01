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

<body class="d-flex flex-column h-100 wf-kosugimaru">
  <?php wp_body_open(); ?>
  <header class="bg-white py-4">
    <nav class="navbar navbar-expand-md p-0 d-md-block d-none">
      <div class="container align-items-end">
        <div>
          <?php
          $minnanowordpress_description = get_bloginfo('description', 'display');
          if ($minnanowordpress_description || is_customize_preview()) : // TODO
          ?>
            <div class="small text-secondary">
              <?php echo $minnanowordpress_description; ?>
            </div>
          <?php endif; ?>
          <?php
          the_custom_logo(); // TODO
          if (is_front_page() && is_home()) :
          ?>
            <a class="navbar-brand m-0 p-0 text-dark" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
              <h1 class="fs-md-3 fs-3 m-0"><?php bloginfo('name'); ?></h1>
            </a>
          <?php else : ?>
            <a class="navbar-brand m-0 p-0 text-dark" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
              <div class="fs-md-3 fs-3 m-0"><?php bloginfo('name'); ?></div>
            </a>
          <?php endif; ?>
        </div>

        <nav class="navbar navbar-expand-md p-0">
          <div class="container">
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
                  'menu_class' => 'navbar-nav ms-auto',
                  'fallback_cb' => false,
                )
              );
              ?>
            </div>
          </div>
        </nav>
      </div>
    </nav>
  </header>