<?php
function add_theme_scripts() {
  wp_enqueue_style('default', get_template_directory_uri() . '/styles/styles.css');
  wp_enqueue_script('script', get_template_directory_uri() . '/scripts/app.js');
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
?>
