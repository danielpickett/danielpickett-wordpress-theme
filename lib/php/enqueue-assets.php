<?php

namespace danielpickett_theme\enqueue_assets;

// Front-end-only assets
function enqueue_theme_assets() {
  wp_enqueue_style('dp-style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('dp-theme', get_template_directory_uri() . '/lib/css/theme.css', [ 'dp-style' ]);
  // wp_enqueue_script('dp-theme-js', get_template_directory_uri() . '/js/theme.js');
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_theme_assets');

// Front-end and editor assets
function enqueue_block_assets() {
  wp_enqueue_style('dp-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:100,300,400,700');
  wp_enqueue_style('dp-blocks', get_template_directory_uri() . '/lib/css/blocks.css');
  // wp_enqueue_script('dp-blocks-js', get_template_directory_uri() . '/js/blocks.js');
}
add_action('enqueue_block_assets', __NAMESPACE__ . '\enqueue_block_assets');

// Editor-only assets
function enqueue_editor_assets() {
  wp_enqueue_style('dp-editor', get_template_directory_uri() . '/lib/css/editor.css');
  // wp_enqueue_script('dp-editor-js', get_template_directory_uri() . '/js/editor.js');
}
add_action('enqueue_block_editor_assets', __NAMESPACE__ . '\enqueue_editor_assets');