<?php

 /*Register Custom Post Type for Productions */
function custom_post_type_productions() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Productions', 'Post Type General Name', 'understrap' ),
        'singular_name'       => _x( 'Productions', 'Post Type Singular Name', 'understrap' ),
        'menu_name'           => __( 'Productions', 'understrap' ),
        'parent_item_colon'   => __( 'Parent Productions', 'understrap' ),
        'all_items'           => __( 'All Productions', 'understrap' ),
        'view_item'           => __( 'View Productions', 'understrap' ),
        'add_new_item'        => __( 'Add New Productions', 'understrap' ),
        'add_new'             => __( 'Add New', 'understrap' ),
        'edit_item'           => __( 'Edit Productions', 'understrap' ),
        'update_item'         => __( 'Update Productions', 'understrap' ),
        'search_items'        => __( 'Search Productions', 'understrap' ),
        'not_found'           => __( 'Not Found', 'understrap' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'understrap' ),
    );

// Set other options for Custom Post Type

    $args = array(
        'label'               => __( 'Productions', 'understrap' ),
        'description'         => __( 'Productions', 'understrap' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        /*'taxonomies'          => array( 'genres' ),*/
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 6,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => false,
        'capability_type'     => 'post',
    );


    // Registering your Custom Post Type
    register_post_type( 'productions', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'custom_post_type_productions', 0 );
