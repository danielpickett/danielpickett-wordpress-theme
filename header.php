<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header id="dp-site-header">
    <?php the_custom_logo(); ?>

    <?php
      $defaults = array(
        'container' => false,
        'theme_location' => 'primary-menu',
        'menu_id' => 'main-nav'
      );

      wp_nav_menu( $defaults);
    ?>
  </header>
  <main>

