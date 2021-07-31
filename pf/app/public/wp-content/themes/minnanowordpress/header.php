<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package minnanowordpress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="bg-dark py-2">
    <div class="container-fluid">
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
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
          <h1 class="fs-2 m-0 wf-sawarabimincho"><?php bloginfo('name'); ?></h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse w-auto" id="navbarCollapse">
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'headernav',
              'container' => false,
              'menu_class' => 'navbar-nav me-auto mb-2 mb-md-0',
              'add_li_class' => 'nav-item',
              'add_a_class' => 'nav-link text-white'
            )
          );
          ?>
        </div>
      </div>
    </nav>
  </header>