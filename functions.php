<?php 

require_once('class-wp-bootstrap-navwalker.php');

// enqeue functions

function themebs_enqueue_styles() {

    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css' );
  
  }
  add_action( 'wp_enqueue_scripts', 'themebs_enqueue_styles');
  
  function themebs_enqueue_scripts() {
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.bundle.min.js', array( 'jquery' ) );
  }
  add_action( 'wp_enqueue_scripts', 'themebs_enqueue_scripts');


// custom post types
function create_posttype() {
 
  // faq post type
  register_post_type( 'question',
  // CPT Options
      array(
          'labels' => array(
              'name' => __( 'Questions' ),
              'singular_name' => __( 'Question' )
          ),
          'public' => true,
          'has_archive' => false
      )
  );

  // försäljningställe
  register_post_type( 'market',
  // CPT Options
      array(
          'labels' => array(
              'name' => __( 'Försäljningställen' ),
              'singular_name' => __( 'Försäljningställ' )
          ),
          'public' => true,
          'has_archive' => false
      )
  );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );



?>
