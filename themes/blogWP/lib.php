<?php

//add_action( 'init', 'register_post_type' );
/**
 * Register a $postType post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
//add_action('init', 'create_post_types');
//// first argument is the $post_type (what you want to call you var) second argument, labels
//function get_post_args($newPost)
//{
//    $labels = array(
//        'name'               => _x($newPost . 's', 'post type general name', 'your-plugin-textdomain'),
//        'singular_name'      => _x($newPost, 'post type singular name', 'your-plugin-textdomain'),
//        'menu_name'          => _x($newPost . 's', 'admin menu', 'your-plugin-textdomain'),
//        'name_admin_bar'     => _x($newPost . 's', 'add new on admin bar', 'your-plugin-textdomain'),
//        'add_new'            => _x('Add New' . $newPost, 'your-plugin-textdomain'),
//        'add_new_item'       => __('Add New' . $newPost, 'your-plugin-textdomain'),
//        'new_item'           => __('New' . $newPost, 'your-plugin-textdomain'),
//        'edit_item'          => __('Edit' . $newPost, 'your-plugin-textdomain'),
//        'view_item'          => __('View' . $newPost, 'your-plugin-textdomain'),
//        'all_items'          => __('All' . $newPost . 's', 'your-plugin-textdomain'),
//        'search_items'       => __('Search' . $newPost . 's', 'your-plugin-textdomain'),
//        'parent_item_colon'  => __('Parent' . $newPost . 's:', 'your-plugin-textdomain'),
//        'not_found'          => __('No' . $newPost . 's' . 'found', 'your-plugin-textdomain'),
//        'not_found_in_trash' => __('No' . $newPost . 's' . 'found in Trash.', 'your-plugin-textdomain')
//    );
//
//    $args = array(
//        'labels'                => $labels,
//        'description'           => __('Description.', 'your-plugin-textdomain'),
//        'public'                => true,
//        'publicly_queryable'    => true,
//        'show_ui'               => true,
//        'show_in_menu'          => true,
//        'query_var'             => true,
//        'rewrite'               => array('slug' => $newPost),
//        'capability_type'       => 'post',
//        'has_archive'           => true,
//        'hierarchical'          => false,
//        'menu_position'         => null,
//        'supports'              => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
//    );
//    return $args;
//
//}
//
//function create_post_types()
//{
//    $postTypes = array("adventure","product");
//    foreach ($postTypes as $postType) {
//        $post_args = get_post_args($postType);
//
//        register_post_type($postType, $post_args);
//    }
//}

//////Taxonomy//////
function get_post_args($category) {

    $labels = array(
        'name'               => _x( $category, 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( $category, 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( $category, 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( $category, ' add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Add New ', trim($category,'s'), 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Add New '. trim($category,'s'), 'your-plugin-textdomain' ),
        'new_item'           => __( 'New ' . trim($category,'s'), 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Edit ' . trim($category,'s'), 'your-plugin-textdomain' ),
        'view_item'          => __( 'View ' . trim($category,'s'), 'your-plugin-textdomain' ),
        'all_items'          => __( 'All '.$category, 'your-plugin-textdomain' ),
        'search_items'       => __( "Search $category", 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( "Parent $category".":", 'your-plugin-textdomain' ),
        'not_found'          => __( 'No '.$category.' found.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'No '.$category.' found in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        // 'rewrite'            => array( 'slug' => $category ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields' )
    );

    return $args;
}

function get_taxonomy_args($taxonomyName){

    $labels = array(
        'name'              => _x( $taxonomyName.'s', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( $taxonomyName, 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( $taxonomyName, 'textdomain' ),
        'all_items'         => __( 'All '.$taxonomyName.'s', 'textdomain' ),
        'parent_item'       => __( 'Parent '.$taxonomyName, 'textdomain' ),
        'parent_item_colon' => __( "Parent $taxonomyName:", 'textdomain' ),
        'edit_item'         => __( "Edit $taxonomyName", 'textdomain' ),
        'update_item'       => __( "Update $taxonomyName", 'textdomain' ),
        'add_new_item'      => __( "Add New $taxonomyName", 'textdomain' ),
        'new_item_name'     => __( "New $taxonomyName Name", 'textdomain' ),
        'menu_name'         => __( "$taxonomyName", 'textdomain' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => $taxonomyName ),
    );

    return $args;
};

function create_post_and_taxo(){

    $post_info_array = array(
        "products" => array("Type"),
        "adventures" => array("Date", "Location")
    );

    foreach($post_info_array as $post_key => $taxonomy_value){

        foreach($taxonomy_value as $taxonomy){

            $taxonomy_args = get_taxonomy_args($taxonomy);

            register_taxonomy($taxonomy, $post_key, $taxonomy_args);
        }
        $post_args = get_post_args($post_key);
        register_post_type($post_key, $post_args);
    }
}

add_action("init", "create_post_and_taxo");





///////////////////////////// TAXONOMY /////////////////////////////////////////
////  DELETE THIS IF WE DO NOT NEED TAXONOMIES IN THE RED STARTER THEME
// hook into the init action and call create_book_taxonomies when it fires
//add_action( 'init', 'create_tax', 0 );
//
//// create two taxonomies,$taxValues and Manufactures for the post type "book"
//function get_tax_arg($taxValue)
//{
//    // Add new taxonomy, make it hierarchical (like categories)
//    $labels = array(
//        'name'              => _x($taxValue . 's', 'taxonomy general name', 'textdomain'),
//        'singular_name'     => _x($taxValue, 'taxonomy singular name', 'textdomain'),
//        'search_items'      => __('Search' . $taxValue . 's', 'textdomain'),
//        'all_items'         => __('All' . $taxValue . 's', 'textdomain'),
//        'parent_item'       => __('Parent' . $taxValue, 'textdomain'),
//        'parent_item_colon' => __('Parent' . $taxValue . ':', 'textdomain'),
//        'edit_item'         => __('Edit' . $taxValue, 'textdomain'),
//        'update_item'       => __('Update' . $taxValue, 'textdomain'),
//        'add_new_item'      => __('Add New' . $taxValue, 'textdomain'),
//        'new_item_name'     => __('New' . $taxValue . 'Name', 'textdomain'),
//        'menu_name'         => __($taxValue, 'textdomain'),
//    );
//
//    $args = array(
//        'hierarchical'      => true,
//        'labels'            => $labels,
//        'show_ui'           => true,
//        'show_admin_column' => true,
//        'query_var'         => true,
//        'rewrite'           => array('slug' => $taxValue),
//    );
//
//    return $args;
//
//}
//
//function create_tax()
//{
//    $taxTypes = array(
//     "products" => array ("type")
//     "adventures");
//    foreach ($taxTypes as $taxType) {
//        $tax_args = get_tax_arg($taxType);
//        register_taxonomy( $taxType, array( 'product' ), $tax_args );
//        //register_post_type($taxType, $tax_args);
//    }
//}