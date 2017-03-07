<?php
include "lib.php";
	// Theme Support
	function coinhab_theme_support(){
    //Featured Image Support
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(900, 600);
		// Nav Menus
		register_nav_menus(array(
			'primary' 	=> __('Primary Menu')
		));
	}

//add action adds something new
	add_action('after_setup_theme', 'coinhab_theme_support');

  // Excerpt Length
  function coinhab_set_excerpt_length(){
    return 25;
  }

//add filter makes changes
  add_filter('excerpt_length','coinhab_set_excerpt_length');

  //Widget Location
function init_widgets($id){
  register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar',
    'before_widget' => '<div class="side-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));
}

// rmb, we always need to add action for a function to Work
add_action('widgets_init', 'init_widgets');
