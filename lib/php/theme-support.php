<?php

function dp_theme_support() {

  // Add Menus Support
  add_theme_support( 'menus');

  // Register Primary Menu
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu')
    )
  );

  // Gutenberg Support for Align Wide and Align Full
  add_theme_support( 'align-wide' );

  add_theme_support(
    'custom-logo', array(
      'height'      => 110,
      'width'       => 250,
      'flex-width'  => true,
      'flex-height' => false
    )
  );
}
add_action( 'after_setup_theme', 'dp_theme_support');