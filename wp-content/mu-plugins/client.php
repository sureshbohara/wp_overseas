<?php
add_action('init','client',2);
 function client() {
        $labels = array(
            'name'                => _x( 'Client', 'Post Type General Name', 'rajoverseas' ),
            'singular_name'       => _x( 'Client', 'Post Type Singular Name', 'rajoverseas' ),
            'menu_name'           => __( 'Client', 'rajoverseas' ),
            'parent_item_colon'   => __( 'Parent Client', 'rajoverseas'),
            'all_items'           => __( 'All Client', 'rajoverseas' ),
            'view_item'           => __( 'View Client', 'rajoverseas' ),
            'add_new_item'        => __( 'Add New Client', 'rajoverseas' ),
            'add_new'             => __( 'Add New Client', 'rajoverseas' ),
            'edit_item'           => __( 'Edit Client', 'rajoverseas' ),
            'update_item'         => __( 'Update Client', 'rajoverseas' ),
            'search_items'        => __( 'Search Client', 'rajoverseas' ),
            'not_found'           => __( 'Not Found', 'rajoverseas' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'rajoverseas' ),
        );
          
        $args = array(
            'label'               => __( 'Client', 'rajoverseas' ),
            'description'         => __( 'Client news and reviews', 'rajoverseas' ),
            'labels'              => $labels,
            'supports'            =>array('title','editor','thumbnail'),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-groups',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
        );
        register_post_type('client', $args );
    }
?>