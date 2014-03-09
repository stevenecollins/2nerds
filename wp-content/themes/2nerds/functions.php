<?php

// Loads the Theme css only on front-end pages, NOT in admin area
if (!is_admin()) {

  // Load CSS
  add_action( 'wp_enqueue_scripts', 'theme_styles' );
  function theme_styles() {
    // Bootstrap
    wp_register_style('bootstrap-styles', '//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css', array(), null, 'all');
    wp_enqueue_style('bootstrap-styles');
    // Theme Styles
    wp_register_style('main', get_template_directory_uri() . '/src/css/style.min.css' );
    wp_enqueue_style('main');
    // Font Awesome
    wp_register_style('font-awesome', '//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css', array(), null, 'all');
    wp_enqueue_style('font-awesome');

    wp_register_style('google-font', 'http://fonts.googleapis.com/css?family=Quattrocento+Sans:400,700,400italic,700italic' );
    wp_enqueue_style('google-font');
  }

  // Load Javascript
    add_action('wp_enqueue_scripts', 'load_scripts', 12);
    function load_scripts() {
      // jQuery
      wp_deregister_script('jquery');
      wp_register_script('jquery', '//cdn.jsdelivr.net/jquery/2.1.0/jquery.min.js', array(), null, false);
      wp_enqueue_script('jquery');
      // Bootstrap
      wp_register_script('bootstrap-scripts', '//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js', array('jquery'), null, true);
      wp_enqueue_script('bootstrap-scripts');
      // Theme JS
      wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery'), '', true );
    }

} // end if !is_admin

// Enable custom menus
add_theme_support( 'menus' );

// Function for creating Widegets
function create_widget($name, $id, $description) {

  register_sidebar(array(
    'name' => __( $name ),
    'id' => $id,
    'description' => __( $description ),
    'before_widget' => ' ',
    'after_widget' => ' ',
    'before_title' => '<h5>',
    'after_title' => '</h5>'
  ));

}

// Create widgets in the footer
create_widget("Left Footer", "footer_left", "Displays in the left of the footer");
create_widget("Middle Footer", "footer_middle", "Displays in the middle of the footer");
create_widget("Right Footer", "footer_right", "Displays in the right of the footer");



?>


