<?php
add_action('init','slider_post',2);
 function slider_post() {
        $labels = array(
            'name'                => _x( 'Slider', 'Post Type General Name', 'rajoverseas' ),
            'singular_name'       => _x( 'Slider', 'Post Type Singular Name', 'rajoverseas' ),
            'menu_name'           => __( 'Slider', 'rajoverseas' ),
            'parent_item_colon'   => __( 'Parent Slider', 'rajoverseas'),
            'all_items'           => __( 'All Slider', 'rajoverseas' ),
            'view_item'           => __( 'View Slider', 'rajoverseas' ),
            'add_new_item'        => __( 'Add New Slider', 'rajoverseas' ),
            'add_new'             => __( 'Add New Slider', 'rajoverseas' ),
            'edit_item'           => __( 'Edit Slider', 'rajoverseas' ),
            'update_item'         => __( 'Update Slider', 'rajoverseas' ),
            'search_items'        => __( 'Search Slider', 'rajoverseas' ),
            'not_found'           => __( 'Not Found', 'rajoverseas' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'rajoverseas' ),
        );
          
        $args = array(
            'label'               => __( 'Slider', 'rajoverseas' ),
            'description'         => __( 'Slider news and reviews', 'rajoverseas' ),
            'labels'              => $labels,
            'supports'            =>array('title','editor','thumbnail'),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-cover-image',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
        );
        register_post_type('slider', $args );
    }
?>