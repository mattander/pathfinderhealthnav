<?php
//Register and add custom styles and Bootstrap styles
function add_theme_styles() {
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/styles/bootstrap.min.css');
  wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css');
  wp_enqueue_style('default', get_template_directory_uri() . '/styles/styles.css');
}

add_action( 'wp_enqueue_scripts', 'add_theme_styles' );

//Register and add custom scripts and Bootstrap scripts
function add_theme_scripts() {
  wp_enqueue_script('bootstrapscript', get_template_directory_uri() . '/scripts/vendor/bootstrap.bundle.min.js', array('jquery'), false, true);
  wp_enqueue_script('script', get_template_directory_uri() . '/scripts/app.js',false, true);
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'Pathfinder Health Navigation' ),
) );

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
?>
