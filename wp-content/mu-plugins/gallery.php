<?php
add_action('init','gallery',2);
 function gallery() {
        $labels = array(
            'name'                => _x( 'Certificate', 'Post Type General Name', 'rajoverseas' ),
            'singular_name'       => _x( 'Certificate', 'Post Type Singular Name', 'rajoverseas' ),
            'menu_name'           => __( 'Certificate', 'rajoverseas' ),
            'parent_item_colon'   => __( 'Parent Certificate', 'rajoverseas'),
            'all_items'           => __( 'All Certificate', 'rajoverseas' ),
            'view_item'           => __( 'View Certificate', 'rajoverseas' ),
            'add_new_item'        => __( 'Add New Certificate', 'rajoverseas' ),
            'add_new'             => __( 'Add New Certificate', 'rajoverseas' ),
            'edit_item'           => __( 'Edit Certificate', 'rajoverseas' ),
            'update_item'         => __( 'Update Certificate', 'rajoverseas' ),
            'search_items'        => __( 'Search Certificate', 'rajoverseas' ),
            'not_found'           => __( 'Not Found', 'rajoverseas' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'rajoverseas' ),
        );
          
        $args = array(
            'label'               => __( 'Certificate', 'rajoverseas' ),
            'description'         => __( 'Certificate news and reviews', 'rajoverseas' ),
            'labels'              => $labels,
            'supports'            =>array('title','editor','thumbnail'),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-excerpt-view',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
        );
        register_post_type('gallery', $args );
    }
?>