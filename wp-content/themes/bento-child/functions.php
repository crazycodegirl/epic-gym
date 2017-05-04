<?php
function my_theme_enqueue_styles() {
  $parent_style = 'bento-theme-styles'; // This is the 'bento-theme-styles' for the Bento theme.

  wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get('Version'));
  wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/includes/font-awesome/css/font-awesome.min.css', array(), null, 'all' );
	wp_enqueue_style( 'google-fonts', bento_google_fonts(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>
