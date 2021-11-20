<?php

function twentytwentyone_styles() {
  wp_enqueue_style(
    'child-style',
    get_stylesheet_uri(),
    ['twenty-twenty-one-style'],
    wp_get_theme()->get('Version')
  );
}

add_action('wp_enqueue_scripts', 'twentytwentyone_styles');
